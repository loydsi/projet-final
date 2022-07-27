<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet Final</title>
    <link href="https://fonts.googleapis.com/css2?family=Life+Savers:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>

    <header>
        <nav class="navbar" role="navigation">
            
            <div class="navbar__authentication">
                <!-- icon connexion -->
                <a href="index.php?route=connexion" class="navbar__authentication__connexion"><img src="../public/img/utilisateur.png"></a>

                <!-- icon inscription -->
                <a href="index.php?route=inscription" class="navbar__authentication__inscription"><img src="../public/img/enter.png"></a>
            </div>
            
            <div class="navbar__logo">
                <a href="index.php" class="navbar__logo"><h1>Leyla's Agency</h1></a>
            </div>
            
            <div class="navbar__burger">
                <!--<img src="../public/img/burger.svg">-->
                <span></span>
            </div>

            <ul class="navbar__links">
                <li>
                    <a href="#" class="navbar-links">A propos</a>
                </li>  
                <li>
                    <a href="#" class="navbar-links">Mes offres</a>
                </li>  
                <li>
                    <a href="#" class="navbar-links">Mes services</a>
                </li>
                <li>
                    <a href="#" class="navbar-links">Contact</a>
                </li>
                <li>
                    <a href="index.php?route=connexion" class="navbar-links">Se connecter</a>
                </li>
                <li>
                    <a href="index.php?route=inscription" class="navbar-links">S'inscrire</a>
                </li>
            </ul>
        </nav>
    </header>
    
    <main>
        <?php include_once $view; ?>
    </main>
    <footer>
        <div class="contact">
            <div class="contact__mail">
                <img class="contact__mail__logo" src="../public/img/mail.png" alt="logo mail">
                <p class="contact__mail__text">leyilas.agency@gmail.com</p>
            </div>
            <div class="contact__tel">
                <img class="contact__tel__logo" src="../public/img/telephone.png" alt="logo mail">
                <p class="contact__tel__logo">07 65 68 89 12</p>
            </div>
        </div>

        <div class="reseaux">
            <div class="reseaux__insta">
                <img class="reseaux__insta__logo" src="../public/img/instagram.png" alt="logo mail">
                <a class="reseaux__insta__text" href="#">Instagram</a>
            </div>
            <div class="reseaux__facebook">
                <img class="reseaux__facebook__logo" src="../public/img/facebook.png" alt="logo mail">
                <a class="reseaux__facebook__text" href="https://www.facebook.com/leyilas.agency/">Facebook</a>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="../public/js/script.js"></script>
</body>
</html>