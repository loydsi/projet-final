<section class="admin__data__company">

    <a href="/adminCompany" class="arrow"><i class="fa-solid fa-arrow-left"></i></a>

    <h2><?= $params['company']->nom_entreprise ?></h2>

    <table class="admin__data__company__list">
        <tr>
            <td>Nom de L'entreprise</td>
            <td><?= $params['company']->nom_entreprise ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?= $params['company']->mail ?></td>
        </tr>
        <tr>
            <td>Telephone</td>
            <td>0<?= $params['company']->telephone ?></td>
        </tr>
        <tr>
            <td>Siret</td>
            <td><?= $params['company']->siret ?></td>
        </tr>
        <tr>
            <td>Adresse</td>
            <td><?= $params['company']->adresse ?></td>
        </tr>
        <tr>
            <td>Code Postal</td>
            <td><?= $params['company']->code_postal ?></td>
        </tr>
        <tr>
            <td>Ville</td>
            <td><?= $params['company']->ville ?></td>
        </tr>
    </table>

    <table class="admin__data__company__facture">
        <tr>
            <td>factures 1</td>
            <td>telecharger</td>
        </tr>
    </table>

    <table class="admin__data__company__devis">
        <tr>
            <td>Devis 1</td>
            <td>telecharger</td>
        </tr>
    </table>
    <a href="/adminFormCompany/<?= $params['company']->users_id ?>" class="admin__data__company__button">Modifier profil</a>
</section>