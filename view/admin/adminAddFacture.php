<section class="admin__add__facture">

    <a href="/adminFacture" class="arrow"><i class="fa-solid fa-arrow-left"></i></a>


    <h2>Ajouter une facture</h2>
    <form method="POST" action="/adminAddFacture">
        <div>
            <label for="addfacture">Ajouter une facture</label>
            <input type="file" name="addfacture" id="addfacture" placeholder="ajouter une facture">
        </div>
        <div style="display: none">
            <label for="identreprise">id entreprise</label>
            <input type="number" name="identreprise" id="identreprise" value="<?= $entreprise->id ?>">
        </div>
        <div>
            <label for="namecompany">Nom de L'entreprise</label>
            <input type="text" name="namecompany" id="namecompany" placeholder="Nom de L'entreprise">
        </div>
        <button type="submit" name="submit"><a href="/adminAddFacture">Ajouter</a></button>
    </form>
</section>