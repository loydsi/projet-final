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

const myForm = document.getElementById("myForm");

myForm.addEventListener("submit", function (e) {
  const myMail = document.getElementById("mail");
  const myPassword = document.getElementById("password");
  const myNameCompany = document.getElementById("nameCompany");
  const myTelephone = document.getElementById("telephone");
  const mySiret = document.getElementById("siret");
  const myAdresse = document.getElementById("adresse");
  const myCodePostal = document.getElementById("codePostal");
  const myVille = document.getElementById("ville");

  if (
    myMail.value.trim() == "" ||
    myPassword.value.trim() == "" ||
    myNameCompany.value.trim() == "" ||
    myTelephone.value.trim() == "" ||
    mySiret.value.trim() == "" ||
    myAdresse.value.trim() == "" ||
    myCodePostal.value.trim() == "" ||
    myVille.value.trim() == ""
  ) {
    let errorMail = document.getElementById("errorMail");
    let errorPassword = document.getElementById("errorPassword");
    let errorName = document.getElementById("errorName");
    let errorTel = document.getElementById("errorTel");
    let errorSiret = document.getElementById("errorSiret");
    let errorAdresse = document.getElementById("errorAdresse");
    let errorCodePostal = document.getElementById("errorCodePostal");
    let errorVille = document.getElementById("errorVille");

    errorMail.innerHTML = "Le champs est requis";
    errorMail.style.color = "red";

    errorPassword.innerHTML = "Le champs est requis";
    errorPassword.style.color = "red";

    errorName.innerHTML = "Le champs est requis";
    errorName.style.color = "red";

    errorTel.innerHTML = "Le champs est requis";
    errorTel.style.color = "red";

    errorSiret.innerHTML = "Le champs est requis";
    errorSiret.style.color = "red";

    errorAdresse.innerHTML = "Le champs est requis";
    errorAdresse.style.color = "red";

    errorCodePostal.innerHTML = "Le champs est requis";
    errorCodePostal.style.color = "red";

    errorVille.innerHTML = "Le champs est requis";
    errorVille.style.color = "red";
    e.preventDefault();
  }
});
