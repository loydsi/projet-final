const burgerButton = document.querySelector(".navbar__burger");
const menu = document.querySelector(".navbar__links");
const liens = document.querySelector(".navbar-links");

/*quand on clique sur le burgerButton menu et burgerButton prenne la classe active et quand on reclique on leur enleve la classe*/
burgerButton.addEventListener("click", function () {
  menu.classList.toggle("active");
  burgerButton.classList.toggle("active");
});

menu.addEventListener("click", function () {
  menu.classList.remove("active");
  burgerButton.classList.toggle("active");
});
