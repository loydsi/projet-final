const burgerButton = document.querySelector(".navbar__burger");
const menu = document.querySelector(".navbar__links");

burgerButton.addEventListener("click", function () {
  menu.classList.toggle("active");
});
