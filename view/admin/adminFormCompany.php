<section class="admin__update__company">
    <a href="/adminCompany" class="arrow"><i class="fa-solid fa-arrow-left"></i></a>
    <h2> <?= $params['company']->nom_entreprise ?? 'Ajouter une nouvelle entreprise' ?></h2>

<form action="<?= isset($params['company']) ? "/adminFormCompany/{$params['company']->users_id}" : "/adminFormCompany/create" ?>" method="POST" id="myForm">

    <div>
        <label for="email">Email</label>
        <input type="email" name="mail" id="mail" required pattern="(^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$" value="<?= $params['company']->mail ?? '' ?>"></br>
        <span id="errorMail"></span>
    </div>
    <div>
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password" required value="<?= $params['company']->password ?? '' ?>"></br>
        <span id="errorPassword"></span>
    </div>    
    <div>
        <label for="namecompany">Nom de L'entreprise</label>
        <input type="text" name="nom_entreprise" id="nameCompany" required value="<?= $params['company']->nom_entreprise ?? '' ?>"></br>
        <span id="errorName"></span>
    </div>
    
    <div>
        <label for="telephone">Telephone</label>
        <input type="tel" name="telephone" id="telephone" required pattern="(0|\\+33|0033)[1-9][0-9]{8}" value="<?= $params['company']->telephone ?? '' ?>"></br>
        <span id="errorTel"></span>
    </div>
    <div>
        <label for="siret">Numero Siret</label>
        <input type="text" name="siret" id="siret" required value="<?= $params['company']->siret ?? '' ?>"></br>
        <span id="errorSiret"></span>
    </div>
    <div>
        <label for="adresse">Numero et nom de rue</label>
        <input type="text" name="adresse" id="adresse" required value="<?= $params['company']->adresse ?? '' ?>"></br>
        <span id="errorAdresse"></span>
    </div>
    <div>
        <label for="codepostal">Code Postal</label>
        <input type="text" name="code_postal" id="codePostal" required value="<?= $params['company']->code_postal ?? '' ?>"></br>
        <span id="errorCodePostal"></span>
    </div>
    <div>
        <label for="ville">Villes</label>
        <input type="text" name="ville" id="ville" required value="<?= $params['company']->ville ?? '' ?>"></br>
        <span id="errorVille"></span>
    </div>
    
    <button type="submit"><?= isset($params['company']) ? 'Modifier' : 'Ajouter' ?></button>
</form>
</section>

