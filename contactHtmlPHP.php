<?php

$message_sent = false;
$emailError = "";
$firstNameError = "";
$lastNameError = "";



$firstName = "";
$lastName = "";
$email = "";
$message = "";


if (!empty($_POST["firstName"]) ){
     $firstName = $_POST["firstName"];
}

if (!empty($_POST["lastName"]) ){
     $lastName = $_POST["lastName"];
}

if (!empty($_POST["email"]) ){
     $email = $_POST["email"];
}

if (!empty($_POST["message"]) ){
     $message = $_POST["message"];
}


if(isset($_POST["Submit1"])){

    if (empty($_POST["firstName"])){
    $firstNameError = "required";
    }

    if (empty($_POST["lastName"])){
    $lastNameError = "required";
    }

    if (empty($_POST["email"])){
     $emailError = "required";
    }
}









if (isset($_POST["email"]) && $_POST["email"] != ""){
    if(  filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)  ){

        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $email = $_POST["email"];
        $message = $_POST["message"];
    
        $to = "jamieobeirne123@gmail.com"; //daniadaniel393@gmail.com"; 
        $subject = "from Dania Daniel Translation / www.daniadaniel.com";
        $body = " ";
    
        $body .=  "First name:  ".$firstName. "\r\n";
        $body .=  "Last name:  ".$lastName. "\r\n";
        $body .=  "Email:  ".$email. "\r\n";
        $body .=  "Message:  ".$message. "\r\n\r\n\r\n";
        $body .=  "This information was sent to you from"."\r\n";
        $body .=  "Dania Daniel Translation"."\r\n";
        $body .=  "www.daniadaniel.com"."\r\n";
    
        //mail($to,$subject,$body);
        $message_sent = true;
        
    } else{
        $emailError = "required";
      }

} 
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/favicon-16x16.png" sizes="16x16" /><!--favicon-->
    <link rel="stylesheet" type="text/css" href="mystyle.css">
    <script src="ddt.js"></script>
    <title>Dania Daniel Translations</title>
</head>
<body onlick="turnOffOnlyHamburger(offhamburger)">
    <header class="header">
    <div class="header_top">
            <h4 class="header_top_text">Email: dania@daniadaniel.com</h4>   
            <a href="https://www.linkedin.com/in/dania-daniel-39789480/?locale=en_US"><img src="images/linkedin48.png" alt="LinkedIn icon" class="social_media"></a>
            <a href="https://mobile.twitter.com/_DaniaDaniel"><img src="images/twitter48.png" alt="Twitter icon"   class="social_media"></a> 
        </div>

        <div class="header_icon">         
            <a href="index.html"><img srcset="images/logo.png" alt="Company icon for DDLT"></a> <!--company logo-->
        </div> 
        <div class="hamburger_bars_wrapper">    <!--hamburger icon-->
            <div class="hamburger_bars_hover" onclick="turnOnOffHamburger()" id="hamburger_onClick"> <!--on click command-->
                <div class="hamburger_bars"></div>
                <div class="hamburger_bars"></div> 
                <div class="hamburger_bars"></div> 
            </div>
        </div> 

        <ul class="home_header_nav">
            <li class="navLinks"><a href="about.html">About</a></li>
            <li class="navLinks"><a href="focus.html">Focus areas</a></li>
            <li class="navLinks"><a href="testimonials.html">Testimonials</a></li>
            <li class="navLinks"><a href="work.html">Work with me</a></li>
            <li class="currentPage">Contact</li>
            <li class="navLinks"><a href="blog.html">Blog</a></li>        
        </ul>
    </header>
    <div class="headerOfBody">
        <div class="hamburger_wrapper" id="hamburger_wrapper">
            <div class="hamburger_navigation" id="hamburgerNavigation"> <!--id for javascript function-->
                <ul>
                    <li class="navLinks"><a href="about.html">About</a></li>
                    <li class="navLinks"><a href="focus.html">Focus areas</a></li>
                    <li class="navLinks"><a href="testimonials.html">Testimonials</a></li>
                    <li class="navLinks"><a href="work.html">Work with me</a></li>
                    <li class="currentPage">Contact</li>
                    <li class="navLinks"><a href="blog.html">Blog</a></li>
                </ul>
            </div>
        </div>
    </div>


    
    <!-- thank you message displayed after form is sent with email -->
    <?php
        if ($message_sent):     
    ?>
        <div class="thankYouMessage"> 
            <h1>Thank you for getting in touch!</h1> 
        </div>    
            <div class= "thankYouMessageTEXTWrapper">
                <div class= "thankYouMessageTEXT">
                    <p>I appreciate you contacting me and will get back in touch with you soon.<p>
                    <p>Have a great day!</p>
                    <p>Dania<p>
                </div>
            </div>    
    <?php
        else:
    ?>


    <!-- form that is visible on intial viewing --> 
    <div class ="mainContainer">
        <div class="contactMessageWrapper">
            <div class="contactMessage">
                <p>If you are interested in my services and would like to request a quote, the best way to contact 
                me is by email or leave a message in this form, telling me a bit about your project. We can continue the communication by email or arrange a call to discuss further details.<p> 
                <p>Send an email to dania@daniadaniel.com and attach any documents you need translated.</p>
                <p>All documents are treated with the strictest confidentiality.</p>
                <p>I read my emails regularly and will normally get back to you within a couple of hours.</p>
                <p>Please also feel free to connect with me on LinkedIn or Twitter.</p>
                <div class="socialMediaContactContainer">
                    <a href="https://www.linkedin.com/in/dania-daniel-39789480/?locale=en_US"><img src="images/social_mediaContactPageLinkedIn.png" alt="LinkedIn icon" class="social_mediaContactPage"></a>
                    <a href="https://mobile.twitter.com/_DaniaDaniel"><img src="images/social_mediaContactPageTwitter.png" alt="Twitter icon"  class="social_mediaContactPage"></a>      
                </div>
            </div>
        </div>
        <div class="formContainerWrapper">
            <div class="formContainer">
                <form action="contactHtmlPHP.php" method="POST">
                    <label for="firstName">First Name *</label>
                    <input class="inputBox" type="text" name="firstName" placeholder="First name here" value="<?php echo $firstName;?>"><span class="error"><?php echo $firstNameError; ?></span><br><br>
                    
                    <label for="lastName">Last Name *</label>
                    <input class="inputBox"type="text" name="lastName" placeholder="Last name here" value="<?php echo $lastName;?>"><span class="error"><?php echo $lastNameError; ?></span><br><br>

                    <label for="email">Email *</label>
                    <input class="inputBox"type="email" name="email" placeholder="Email address here" value="<?php echo $email;?>"><span class="error"><?php echo $emailError; ?></span><br><br>
                    
                    <label for="message">Message</label>
                    <textarea placeholder="Type a message here" name="message" rows="7" columns="90"><?php echo $message;?></textarea><br><br>
                    <div class="submitButtonWrapper">
                        <input class="submitButton" type="submit" value="Submit" name="Submit1">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
        endif;
    ?>

</body>
<footer class="footer">
    <div>
        <a href="https://www.linkedin.com/in/dania-daniel-39789480/?locale=en_US"><img src="images/linkedin48.png" alt="LinkedIn icon" class="lower_social_media"></a>
        <a href="https://mobile.twitter.com/_DaniaDaniel"><img src="images/twitter48.png" alt="Twitter icon"   class="lower_social_media"></a> 
    </div>
    <div class="vertical_footer_align">
        <div class="footer_text">
            <p>Dania Daniel Translations 2020</p>
        </div>
    </div>
</footer>
</html>
