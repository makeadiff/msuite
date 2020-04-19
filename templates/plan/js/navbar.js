/*!
Project Name: MSuite, UI Framework
BootStrap Update for MSuite V0.0.1
Author: Rohit Nair
 * Github: github.com/rhit99900
*/


// Adjusting Width of Sidebar Upon Toggle 

var sidebar = document.getElementsByClassName('sidebar');
var fixedRight = document.getElementsByClassName('fixed-right');
var fixedLeft = document.getElementsByClassName('fixed-left');
var sidebarDropdownToggle = document.getElementsByClassName('sidebar-dropdown-toggle');
let sidebarDropdownCount = sidebarDropdownToggle.length;

var sidebarDropdownToggleFn = (e) => {
  console.log(e);
}

var sidebarToggleFn = () => {
  sidebar[0].classList.toggle('collapsed');
  (profileImage.length > 0) ? profileImage[0].classList.toggle('collapsed'): false;
  (fixedLeft.length > 0) ? fixedLeft[0].classList.toggle('collapsed'): false;
  (fixedRight.length > 0) ? fixedRight[0].classList.toggle('collapsed'): false ;
  (sidebarToggleIcon.length > 0) ? (
    sidebarToggleIcon[0].classList.toggle('ion-md-menu'),
    sidebarToggleIcon[0].classList.toggle('ion-md-close')
  ) : false;
};

for(let i = 0;i < sidebarDropdownCount; i++){
  sidebarDropdownToggle[i].addEventListener('click', sidebarDropdownToggleFn(i), false);
}

if(sidebar.length > 0){
  // Initialising to the first element.
  var sidebarToggle = document.getElementsByClassName('sidebar-toggle');
  if(sidebarToggle.length > 0){    
    var profileImage = document.getElementsByClassName('profile_image');
    var sidebarToggleIcon = document.getElementsByClassName('sidebar-toggle-icon');  
    // Initialising to the first element.
    sidebarToggle[0].addEventListener('click', (event) => {      
      sidebarToggleFn();
    });
  }
}



