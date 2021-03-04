document.addEventListener("DOMContentLoaded", () => {

  // dropdown
  const btnServices = document.querySelector("#btn-services");
  const dropdownLink = document.querySelector("#dropdown-link");

  btnServices.addEventListener('click', () => {
    dropdownLink.classList.toggle('absolute');
    dropdownLink.classList.toggle('hidden');
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