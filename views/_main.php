<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webshop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="util/js/myscript.js"></script>
    <script>
        function active_link_beallitasa(){
            const oldal = "<?php echo $oldal ?>";
            const navigaciosLink = document.getElementById("nav_"+oldal);
            navigaciosLink.classList.add('active');
        }
    </script>
</head>

<body onload="active_link_beallitasa()">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="./">Webshop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" id="nav_termek_lista" aria-current="page" href="?oldal=termek_lista">Termékek listázása</a>
                    </li>
                    <?php if (isset($_SESSION['felhasznalo'])) : ?>
                        <li class="nav-item">
                            <a class="nav-link" id="nav_termek_insert" href="?oldal=termek_insert">Termék felvétele</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="nav_termek_kiegeszito_insert" href="?oldal=termek_kiegeszito_insert">Termék-kiegészítő felvétele</a>
                        </li>
                    <?php endif; ?>
                </ul>                
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <?php if (!isset($_SESSION['felhasznalo'])) : ?>
                        <li class="nav-item">
                            <a class="nav-link" id="nav_regisztracio" aria-current="page" href="?oldal=regisztracio">Regisztráció</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="nav_bejelentkezes" href="?oldal=bejelentkezes">Bejelentkezés</a>
                        </li>
                    <?php else : ?>    
                        <li class="nav-item">
                            <a class="nav-link" id="nav_kijelentkezes" href="?oldal=kijelentkezes">Kijelentkezés</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container">
        <?php
            include $controller;
        ?>
    </main>
</body>

</html>