<section class="admin__add__company">
    <a href="/adminCompany" class="arrow"><i class="fa-solid fa-arrow-left"></i></a>
    <h2>Ajouter une entreprise</h2>

<form action="/adminAddData" method="POST">
    
    <div>
        <label for="namecompany">Nom de L'entreprise</label>
        <input type="text" name="namecompany" id="namecompany" placeholder="Nom de L'entreprise">
    </div>
    <div>
        <label for="telephone">Telephone</label>
        <input type="tel" name="telephone" id="telephone" placeholder="Telephone">
    </div>
    <div>
        <label for="siret">Numero Siret</label>
        <input type="text" name="siret" id="siret" placeholder="Numero Siret">
    </div>
    <div>
        <label for="adresse">Numero et nom de rue</label>
        <input type="text" name="adresse" id="adresse" placeholder="Adresse">
    </div>
    <div>
        <label for="codepostal">Code Postal</label>
        <input type="text" name="codepostal" id="codepostal" placeholder="Code postal">
    </div>
    <div>
        <label for="ville">Villes</label>
        <input type="text" name="ville" id="ville" placeholder="Villes">
    </div>
    <button type="submit"><a href="">Ajouter</a></button>
</form>
</section>