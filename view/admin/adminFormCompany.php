<section class="admin__update__company">
    <a href="/adminCompany" class="arrow"><i class="fa-solid fa-arrow-left"></i></a>
    <h2> <?= $params['company']->nom_entreprise ?? 'Ajouter une nouvelle entreprise' ?></h2>

<form action="<?= isset($params['company']) ? "/adminFormCompany/{$params['company']->users_id}" : "/adminFormCompany/create" ?>" method="POST">

    <div>
        <label for="email">Email</label>
        <input type="email" name="mail" id="email" value="<?= $params['company']->mail ?? '' ?>">
    </div>
    <div>
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password" value="<?= $params['company']->password ?? '' ?>">
    </div>    
    <div>
        <label for="namecompany">Nom de L'entreprise</label>
        <input type="text" name="nom_entreprise" id="namecompany" value="<?= $params['company']->nom_entreprise ?? '' ?>">
    </div>
    
    <div>
        <label for="telephone">Telephone</label>
        <input type="tel" name="telephone" id="telephone" value="<?= $params['company']->telephone ?? '' ?>">
    </div>
    <div>
        <label for="siret">Numero Siret</label>
        <input type="text" name="siret" id="siret" value="<?= $params['company']->siret ?? '' ?>">
    </div>
    <div>
        <label for="adresse">Numero et nom de rue</label>
        <input type="text" name="adresse" id="adresse" value="<?= $params['company']->adresse ?? '' ?>">
    </div>
    <div>
        <label for="codepostal">Code Postal</label>
        <input type="text" name="code_postal" id="codepostal" value="<?= $params['company']->code_postal ?? '' ?>">
    </div>
    <div>
        <label for="ville">Villes</label>
        <input type="text" name="ville" id="ville" value="<?= $params['company']->ville ?? '' ?>">
    </div>
    
    <button type="submit"><?= isset($params['company']) ? 'Modifier' : 'Ajouter' ?></button>
</form>
</section>

