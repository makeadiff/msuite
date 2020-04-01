/*!
Project Name: MSuite, UI Framework
BootStrap Update for MSuite V0.0.1
Author: Rohit Nair
 * Github: github.com/rhit99900
*/


// Adjusting Width of Sidebar Upon Toggle 

const sidebar = document.getElementsByClassName('sidebar');
const fixedRight = document.getElementsByClassName('fixed-right');
const fixedLeft = document.getElementsByClassName('fixed-left');

if(sidebar.length > 0){  
  // Initialising to the first element.
  const sidebarToggle = document.getElementsByClassName('sidebar-toggle');

  if(sidebarToggle.length > 0){    

    const profileImage = document.getElementsByClassName('profile_image');
    const sidebarToggleIcon = document.getElementsByClassName('sidebar-toggle-icon');  

    // Initialising to the first element.
    sidebarToggle[0].addEventListener('click', (event) => {
      sidebar[0].classList.toggle('collapsed');
      (profileImage.length > 0) ? profileImage[0].classList.toggle('collapsed'): false;
      (fixedLeft.length > 0) ? fixedLeft[0].classList.toggle('collapsed'): false;
      (fixedRight.length > 0) ? fixedRight[0].classList.toggle('collapsed'): false ;
      (sidebarToggleIcon.length > 0) ? (
        sidebarToggleIcon[0].classList.toggle('ion-md-menu'),
        sidebarToggleIcon[0].classList.toggle('ion-md-close')
      ) : false;
    });
  }
}

