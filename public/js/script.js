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

// verification formulaire connexion

let form = document.querySelector("#myForm");

form.mail.addEventListener("keyup", function () {
  validMail(this);
});

form.password.addEventListener("keyup", function () {
  validPassword(this);
});

form.nom_entreprise.addEventListener("keyup", function () {
  validName(this);
});

form.telephone.addEventListener("keyup", function () {
  validTel(this);
});

form.siret.addEventListener("keyup", function () {
  validSiret(this);
});

form.adresse.addEventListener("keyup", function () {
  validAdresse(this);
});

form.code_postal.addEventListener("keyup", function () {
  validCode(this);
});

form.ville.addEventListener("keyup", function () {
  validVille(this);
});
// Vérification du mail
const validMail = function (inputMail) {
  let regexMail = new RegExp(
    "^[a-zA-Z0-9.-_]+[@]{1}[a-zA-Z0-9.-_]+[.]{1}[a-z]{2,10}$"
  );

  let span = document.getElementById("errorMail");

  if (regexMail.test(inputMail.value)) {
    span.innerHTML = "Adresse valide";
    span.style.color = "green";
  } else {
    span.innerHTML = "Adresse invalide";
    span.style.color = "red";
  }
};

// Vérification du mot de passe

const validPassword = function (inputPassword) {
  let msg;
  let valid = false;
  if (inputPassword.value.length < 5) {
    msg = "Le mot de passe doit contenir au moins 5 caractères";
  } else if (!/[A-Z]/.test(inputPassword.value)) {
    msg = "Le mot de passe doit contenir au moins 1 majuscule";
  } else if (!/[a-z]/.test(inputPassword.value)) {
    msg = "Le mot de passe doit contenir au moins 1 miniscule";
  } else if (!/[0-9]/.test(inputPassword.value)) {
    msg = "Le mot de passe doit contenir au moins 1 chiffre";
  } else {
    msg = "Mot de passe valide";
    valid = true;
  }
  let span = document.getElementById("errorPassword");

  if (valid) {
    span.innerHTML = "Mot de passe valide";
    span.style.color = "green";
  } else {
    span.innerHTML = msg;
    span.style.color = "red";
  }
};

// verification nom entreprise

const validName = function (inputName) {
  let span = document.getElementById("errorName");

  if (inputName.value == "") {
    span.innerHTML = "nom de l'entreprise requis";
    span.style.color = "red";
  } else {
    span.innerHTML = "Nom de l'entreprise ok";
    span.style.color = "green";
  }
};

// verification telephone

const validTel = function (inputTel) {
  let span = document.getElementById("errorTel");

  if (inputTel.value.length < 10) {
    span.innerHTML = "Le telephone doit contenir 10 chiffres";
    span.style.color = "red";
  } else {
    span.innerHTML = "Telephone valide";
    span.style.color = "green";
  }
};

// verification siret

const validSiret = function (inputSiret) {
  let span = document.getElementById("errorSiret");

  if (inputSiret.value.length < 14) {
    span.innerHTML = "Le siret doit contenir 14 chiffres";
    span.style.color = "red";
  } else {
    span.innerHTML = "Siret valide";
    span.style.color = "green";
  }
};

// Vérification du adresse
const validAdresse = function (inputAdresse) {
  let msg;
  let valid = false;
  if (!/[0-9]/.test(inputAdresse.value)) {
    msg = "L'adresse doit contenir au moins un numéro de rue";
  } else if (!/[a-z]/.test(inputAdresse.value)) {
    msg = "L'adresse doit contenir le nom de la rue";
  } else {
    msg = "Mot de passe valide";
    valid = true;
  }
  let span = document.getElementById("errorAdresse");

  if (valid) {
    span.innerHTML = "Adresse valide";
    span.style.color = "green";
  } else {
    span.innerHTML = msg;
    span.style.color = "red";
  }
};

// Vérification du code postal
const validCode = function (inputCode) {
  let regexCode = new RegExp("^[0-9]{5}$");

  let span = document.getElementById("errorCodePostal");

  if (regexCode.test(inputCode.value)) {
    span.innerHTML = "Code postal valide";
    span.style.color = "green";
  } else {
    span.innerHTML = "Le code postal doit contenir 5 chiffres";
    span.style.color = "red";
  }
};

// verification ville

const validVille = function (inputVille) {
  let span = document.getElementById("errorVille");

  if (inputVille.value == "") {
    span.innerHTML = "Ville requise";
    span.style.color = "red";
  } else {
    span.innerHTML = "ville ok";
    span.style.color = "green";
  }
};
