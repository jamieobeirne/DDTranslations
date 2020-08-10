


function turnOnOffHamburger() {   /*hamburger menu click action to open/close*/
  var x = document.getElementById("hamburgerNavigation");
  if (x.style.display === "inline") {
    x.style.display = "none";
  } else {
    x.style.display = "inline";
  }
}


document.onclick = function(Offhamburger){
  var hasHamburgerNavigation = false;
  for(var node = Offhamburger.target; node != document.body; node = node.parentNode){
      if(node.id == "hamburgerNavigation" | node.id == "hamburger_onClick"){
        hasHamburgerNavigation = true;
        break;
      }
    }

  var x = document.getElementById("hamburgerNavigation");  
  if(hasHamburgerNavigation){
    console.log("inside");
  } else{
    console.log("outside");
    x.style.display = "none";
  }
}




    


  



