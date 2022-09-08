<section class="admin__add__company">
    <a href="/adminCompany" class="arrow"><i class="fa-solid fa-arrow-left"></i></a>
    <h2>Ajouter une entreprise</h2>

<form action="/adminAddCompany/create" method="POST">
    <div>
        <label for="email">Email</label>
        <input type="email" name="mail" id="mail" placeholder="email">
    </div>
    <div>
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password" placeholder="Mot de passe">
    </div>
    <button type="submit">Ajouter</button>
</form>
</section>

