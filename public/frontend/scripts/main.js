document.addEventListener("DOMContentLoaded", () => {

  // dropdown
  const dropdown = document.querySelector(".dropdown");
  const dropdownMenu = document.getElementById("dropdown-menu");

  dropdown.addEventListener('mouseover', () => {
    dropdownMenu.classList.remove('hidden');
    dropdownMenu.classList.add('absolute');
    dropdownMenu.classList.add('animate-dropdown');
  });
  
  dropdown.addEventListener('mouseleave', () => {
    dropdownMenu.classList.remove('absolute');
    dropdownMenu.classList.add('hidden');
  });
  

  // mobile nav
  const hamButton = document.querySelector("#hamburger-nav");
  const closeIcon = document.querySelector("#close-icon");
  const mobileNav = document.querySelector("#mobile-nav");
  const servicesMobileNav = document.querySelector("#services-mobile");
  const servicesMobileMenu = document.querySelector("#services-mobile-menu");

  hamButton.addEventListener('click', () => {
    mobileNav.classList.toggle('hidden');
    mobileNav.classList.toggle('absolute');
  });

  closeIcon.addEventListener('click', () => {
    mobileNav.classList.toggle('hidden');
    mobileNav.classList.toggle('absolute');
  });

  servicesMobileNav.addEventListener('click', () => {
    servicesMobileMenu.classList.toggle('hidden');
    servicesMobileMenu.classList.toggle('flex');
  });

  // image gallery
  const mainImage = document.getElementById('main-image');
  const imageThumbs = document.querySelectorAll('.image-thumbs');



  imageThumbs.forEach(img => img.addEventListener('click', e => {
    mainImage.src = e.target.src; // change the main img

    imageThumbs.forEach((el) => el.classList.remove('border-thumbs')); // remove the border from the active
    img.classList.add("border-thumbs"); // the border to the active thumb
  }));
});