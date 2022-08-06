<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leyila's Agency</title>
    <script src="https://kit.fontawesome.com/997c887ce5.js" crossorigin="anonymous"></script>
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
                <a href="index.php?route=connexion"><span class="iconify" data-icon="bxs:user"></span></a>
            </div>
            
            <div class="navbar__logo">
                <a href="index.php" class="navbar__logo"><h1>Leyla's Agency</h1></a>
            </div>
            

            <div class="navbar__burger">
                <span></span>
            </div>

            <ul class="navbar__links">
                <li>
                    <a href="index.php?route=home#about" class="navbar-links">A propos</a>
                </li>  
                <li>
                    <a href="index.php?route=home#offres" class="navbar-links">Mes offres</a>
                </li>  
                <li>
                    <a href="index.php?route=home#services" class="navbar-links">Mes services</a>
                </li>
                <li>
                    <a href="index.php?route=home#footer" class="navbar-links">Contact</a>
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

    <footer id="footer">
        <!-- Bloc qui contient le mail et le telephone -->
        <div class="footer__liens">

            <a href="index.php"><h3>Leyla's Agency</h3></a>

            <ul>
                <li>
                    <a href="index.php?route=home#about">A propos</a>
                </li>  
                <li>
                    <a href="index.php?route=home#offres">Mes offres</a>
                </li>  
                <li>
                    <a href="index.php?route=home#services">Mes services</a>
                </li>
                <li>
                    <a href="index.php?route=home#contact">Contact</a>
                </li>
            </ul>
        </div>

        <!-- Bloc qui contient l'accees aux reseaux sociaux -->
        <div class="footer__contact">
                <a href="#"><i class="fa-brands fa-square-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
                <p><strong>Mail :</strong> leyilas.agency@gmail.com</p>
                <p><strong>Tel :</strong> 07 65 68 89 12</p>
        </div>

        <!-- bloc qui contient les mentions legales -->
        <div class="footer__mention">
            <p><a href="#">Mentions legales</a></p>
            <p>Simon Loyd © 2022</p>
        </div>
    </footer>
    <script type="text/javascript" src="../public/js/script.js"></script>
</body>
</html>