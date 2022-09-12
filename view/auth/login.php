
<section class="connexion">

<?php if (isset($_SESSION['errors'])): ?>
    <?php foreach($_SESSION['errors'] as $errorsArray): ?>
        <?php foreach($errorsArray as $errors): ?>
            <div>
                <?php foreach($errors as $error): ?>
                    <ul>
                        <li><?= $error ?></li>
                    </ul>
                <?php endforeach ?>
            </div>
        <?php endforeach ?>
    <?php endforeach ?>
<?php endif ?>
<?php session_destroy(); ?>

<form action="/login" method="POST">
    <h2>Se Connecter</h2>
    <div>
        <label for="email"></label>
        <input type="email" name="mail" id="mail"  placeholder="email" onkeyup="validateMail()">
        <span id="mail-error"></span>
    </div>
    <div>
        <label for="password"></label>
        <input type="password" name="password" id="password" placeholder="Mot de passe">
        <span id="password-error"></span>
    </div>
    <button type="submit">Connexion</button>
</form>

<a href="/adminFormCompany/create">Inscription</a>
<!--required pattern="^[A-Za-z]+@{1}[A-Za-z]+\.{1}[A-Za-z]{2,}$"-->
</section>

