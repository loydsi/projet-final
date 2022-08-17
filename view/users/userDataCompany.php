<section class="user__data">

    <a href="/user" class="arrow"><i class="fa-solid fa-arrow-left"></i></a>
    <h2>Mes Données</h2>

    <table class="user__data__company">
        <?php foreach($params['data'] as $data): ?>
        <tr>
            <td>Nom de L'entreprise</td>
            <td><?= $data->nom_entreprise ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?= $data->mail ?></td>
        </tr>
        <tr>
            <td>Telephone</td>
            <td><?= $data->telephone ?></td>
        </tr>
        <tr>
            <td>Siret</td>
            <td><?= $data->siret ?></td>
        </tr>
        <tr>
            <td>Adresse</td>
            <td><?= $data->adresse ?></td>
        </tr>
        <tr>
            <td>Code Postal</td>
            <td><?= $data->code_postal ?></td>
        </tr>
        <tr>
            <td>Ville</td>
            <td><?= $data->ville ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <table class="user__data__facture">
        <tr>
            <td><a></a></td>
            <td>telecharger</td>
        </tr>
    </table>

    <table class="user__data__devis">
        <tr>
            <td>Devis 1</td>
            <td>telecharger</td>
        </tr>
    </table>

    <a href="/userUpdate" class="user__data__update">Modifier profil</a>
</section>