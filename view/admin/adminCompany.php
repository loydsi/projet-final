<section class="company">

    <a href="/admin" class="arrow"><i class="fa-solid fa-arrow-left"></i></a>

    
    <h2>Entreprises</h2>
    
    <table class="company__list">
        <?php foreach($params['companys'] as $companys): ?>
        <tr>
            <td><a href="/adminDataCompany/<?= $companys->users_id ?>" class="company__list__liens"><?= $companys->nom_entreprise ?></a></td>
            <td>
                <form action="/adminCompany/delete/<?= $companys->users_id ?>" method="POST">
                    <button type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="/adminFormCompany/create" class="company__lien">Ajouter un Entreprise</a>
    
</section>