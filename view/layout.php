<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leyila's Agency</title>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Life+Savers:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>

    <header>
        <nav class="navbar">
            
            <div class="navbar__authentication">
                <!-- icon connexion -->
                <a href="index.php?route=connexion"><span class="iconify" data-icon="bxs:user"></span></a>
            </div>
            
            <!-- Logo du site -->
            <div class="navbar__logo">
                <a href="index.php" class="navbar__logo"><h1>Leyla's Agency</h1></a>
            </div>
            

            <!-- Menu burger -->
            <div class="navbar__burger">
                <span></span>
            </div>

            <!-- Menu de navigation -->
            <ul class="navbar__links">
                <li>
                    <a href="#about" class="navbar-links">A propos</a>
                </li>  
                <li>
                    <a href="#offres" class="navbar-links">Mes offres</a>
                </li>  
                <li>
                    <a href="#services" class="navbar-links">Mes services</a>
                </li>
                <li>
                    <a href="#contact" class="navbar-links">Contact</a>
                </li>
                <li>
                    <a href="index.php?route=user" class="navbar-links">Mon Compte</a>
                </li>
                <li>
                    <a href="index.php?route=admin" class="navbar-links">Le compte</a>
                </li>
            </ul>
        </nav>
    </header>
    
    <main>
        <!-- Contenu du site qui change suivant ce que l'on fait -->
        <?php include_once $view; ?>
    </main>

    <footer id="contact">
        <!-- Bloc qui contient le mail et le telephone -->
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

        <!-- Bloc qui contient l'accees aux reseaux sociaux -->
        <div class="reseaux">
            <div class="reseaux__insta">
                <img class="reseaux__insta__logo" src="../public/img/instagram.png" alt="logo instagram">
                <a class="reseaux__insta__text" href="#">Instagram</a>
            </div>
            <div class="reseaux__facebook">
                <img class="reseaux__facebook__logo" src="../public/img/facebook.png" alt="logo facebook">
                <a class="reseaux__facebook__text" href="https://www.facebook.com/leyilas.agency/">Facebook</a>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="../public/js/script.js"></script>
</body>
</html>