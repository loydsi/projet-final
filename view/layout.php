<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leyila's Agency</title>
    <script src="https://kit.fontawesome.com/997c887ce5.js" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>

    <header>
        <nav class="navbar">
            
            <div class="navbar__authentication">
                <a href="/login"><span class="iconify" data-icon="bxs:user"></span></a>
            </div>
            
            <div class="navbar__logo">
                <a href="/" class="navbar__logo"><p>Leyla's Agency</p></a>
            </div>
            

            <div class="navbar__burger">
                <span></span>
            </div>

            <ul class="navbar__links">
                <li>
                    <!-- A voir -->
                    <a href="/#about">A propos</a>
                </li>  
                <li>
                    <a href="/#missions">Missions</a>
                </li>  
                <li>
                    <a href="/#offres">Offres</a>
                </li>
                <li>
                    <a href="/#footer">Contact</a>
                </li>
                <li>
                    <a href="/compte">mon compte</a>
                </li>
                <li>
                    <a href="/login">Connexion</a>
                </li>
                <?php if (isset($_SESSION['roles'])): ?>
                <li>
                    <a href="/logout"><i class="fa-solid fa-xmark"></i></a>
                </li>
                <?php endif ?>
            </ul>
        </nav>
    </header>
    
    <main>
        <!-- Contenu du site qui change suivant ce que l'on fait -->
        <?= $content ?>
    </main>

    <footer id="footer">
        <!-- Bloc qui contient le mail et le telephone -->
        <div class="footer__liens">

            <a href="/"><h3>Leyla's Agency</h3></a>

            <ul>
                <li>
                    <a href="/#about">A propos</a>
                </li>  
                <li>
                    <a href="/#missions">Missions</a>
                </li>  
                <li>
                    <a href="/#offres">Offres</a>
                </li>
                <li>
                    <a href="/#contact">Contact</a>
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