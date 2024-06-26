<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
// REQUIRE
require_once __DIR__ . '/Models/Prodotto.php';
require_once __DIR__ . '/Models/Categoria.php';
require_once __DIR__ . '/Models/Cibo/Cibo.php';
require_once __DIR__ . '/Models/Gioco/Gioco.php';

// NUOVI PRODOTTI ANIMALI
$prodotto1 = new Cibo(1, 'Cibo per cani', 10, './assets/img/kcolfjhf.bmp', new Categoria('Animali'), 'Cibo', 'carne, verdura, cereali', 'proteine, grassi, carboidrati');

$prodotto2 = new Gioco(2, 'Gioco per gatti', 15, './assets/img/gatti-gioco-2.bmp', new Categoria('Animali'), 'Gioco', '3-10 anni', 'plastica');

$prodotto3 = new Cibo(3, 'Cibo per pesci', 5, './assets/img/cibo-pesci.bmp', new Categoria('Animali'), 'Cibo', 'vermi, insetti', 'proteine, grassi');

$prodotto4 = new Gioco(4, 'Gioco per cani', 20, './assets/img/cani-gioco.bmp', new Categoria('Animali'), 'Gioco', '1-5 anni', 'gomma');


?>
<!-- HTML E BOOTSTRAP TO PRINT -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Antonio Filippa Store</a>
        <!-- LOGO IMG -->
        <img src="./assets/img/logo.png" alt="logo" width="100" height="50">
        <!-- TOGGLE BUTTON -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container_fluid">
        <div class="jumbotron text-center">
            <h1 class="display-4">Prodotti per animali</h1>
            <p class="lead">Prodotti per animali di vario genere</p>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $prodotto1->getImmagine(); ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <!-- NOME -->
                            <h5 class="card-title"><?php echo $prodotto1->getNome(); ?></h5>
                            <!-- PREZZO -->
                            <p class="card-text">Prezzo: <?php echo $prodotto1->getPrezzo(); ?>€</p>
                            <!-- CATEGORIA -->
                            <p class="card-text">Categoria: <?php echo $prodotto1->getCategoria()->getNome(); ?></p>
                            <!-- TIPOLOGIA -->
                            <p class="card-text">Tipologia: <?php echo $prodotto1->getTipologia(); ?></p>
                            <!-- INGREDIENTI -->
                            <p class="card-text">Ingredienti: <?php echo $prodotto1->getIngredienti(); ?></p>
                            <!-- NUTRIZIONE -->
                            <p class="card-text">Nutrizione: <?php echo $prodotto1->getNutrizione(); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $prodotto2->getImmagine(); ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <!-- NOME -->
                            <h5 class="card-title"><?php echo $prodotto2->getNome(); ?></h5>
                            <!-- PREZZO -->
                            <p class="card-text">Prezzo: <?php echo $prodotto2->getPrezzo(); ?>€</p>
                            <!-- CATEGORIA -->
                            <p class="card-text">Categoria: <?php echo $prodotto2->getCategoria()->getNome(); ?></p>
                            <!-- TIPOLOGIA -->
                            <p class="card-text">Tipologia: <?php echo $prodotto2->getTipologia(); ?></p>
                            <!-- ETA CONSIGLIATA -->
                            <p class="card-text">Età consigliata: <?php echo $prodotto2->getEtaConsigliata(); ?></p>
                            <!-- MATERIALE -->
                            <p class="card-text">Materiale: <?php echo $prodotto2->getMateriale(); ?></p>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $prodotto3->getImmagine(); ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <!-- NOME -->
                            <h5 class="card-title"><?php echo $prodotto3->getNome(); ?></h5>
                            <!-- PREZZO -->
                            <p class="card-text">Prezzo: <?php echo $prodotto3->getPrezzo(); ?>€</p>
                            <!-- CATEGORIA -->
                            <p class="card-text">Categoria: <?php echo $prodotto3->getCategoria()->getNome(); ?></p>
                            <!-- TIPOLOGIA -->
                            <p class="card-text">Tipologia: <?php echo $prodotto3->getTipologia(); ?></p>
                            <!-- INGREDIENTI -->
                            <p class="card-text">Ingredienti: <?php echo $prodotto3->getIngredienti(); ?></p>
                            <!-- NUTRIZIONE -->
                            <p class="card-text">Nutrizione: <?php echo $prodotto3->getNutrizione(); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $prodotto4->getImmagine(); ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <!-- NOME -->
                            <h5 class="card-title
                        "><?php echo $prodotto4->getNome(); ?></h5>
                            <!-- PREZZO -->
                            <p class="card-text">Prezzo: <?php echo $prodotto4->getPrezzo(); ?>€</p>
                            <!-- CATEGORIA -->
                            <p class="card-text">Categoria: <?php echo $prodotto4->getCategoria()->getNome(); ?></p>
                            <!-- TIPOLOGIA -->
                            <p class="card-text">Tipologia: <?php echo $prodotto4->getTipologia(); ?></p>
                            <!-- ETA CONSIGLIATA -->
                            <p class="card-text">Età consigliata: <?php echo $prodotto4->getEtaConsigliata(); ?></p>
                            <!-- MATERIALE -->
                            <p class="card-text">Materiale: <?php echo $prodotto4->getMateriale(); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>










</body>

</html>