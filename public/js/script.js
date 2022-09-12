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

// verification formulaire

const mailError = document.getElementById("mail-error");
const passwordError = document.getElementById("password-error");

function validateMail() {
  const mail = document.getElementById(mail).value;

  if (mail.length == 0) {
    mailError.innerHTML = "Email requis";
    return false;
  }
  if (!mail.match(/^[A-Za-z]+@{1}[A-Za-z]+\.{1}[A-Za-z]{2,}$/)) {
    mailError.innerHTML = "Email invalide";
    return false;
  }
  mailError.innerHTML = '<i class="fa-solid fa-xmark"></i>';
  return true;
}
