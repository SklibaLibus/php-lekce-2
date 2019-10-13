<?php

// obsah obdelníku
$a = 5;
$b = 4;
$obdelnikobsah = $a * $b;

// obsah trojúhelníku
$strana = 6;
$uhel = 60;
$vyska = sin(deg2rad(60)) * $strana;
$trojuhelnikobsah = round($vyska * $strana / 2);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">
    <a class="navbar-brand" href="#">Počátky matematiky</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Dějiny matematiky</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="mezopotamie.php">Mezopotámie</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="recko.php">Řecko <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="neevropska_matematika.php">Neevropská matematika</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Vyhledávání" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Hledat</button>
        </form>
    </div>
</nav>

<main role="main" class="container">
    <div class="starter-template">
        <h1>
            <p>Pythagoras ze Samu </p>
        </h1>
    </div>
    <div class="col-md-12">
        <p class="font-weight-normal">Pythagoras se narodil v Malé Asii na ostrově Samos. Po vpádu Peršanů se usadil na jihu Itálie a tam založil školu, která byla přístupná mužům i ženám a diskriminační chování bylo zakázáno. Na škole měl neomezenou autoritu. Velkou pozornost věnoval geometrii – Pythagorova věta: <i>„Obsah čtverce sestrojeného nad přeponou pravoúhlého rovinného trojúhelníka je roven součtu obsahů čtverců nad jeho odvěsnami“</i>. Není ale jasné, jestli je jejím autorem Pythagoras sám, nebo jeho žáci. Přívrženci jeho filozofie se nazývají pythagorejci, šlo o řecké filozofy, obývající řecké osady na jihu Itálie a příslušníky Pythagorovy školy. </p>
    </div>
    <div class="starter-template">
        <h1>
            <p>Eukleidés </p>
        </h1>
    </div>
    <div class="col-md-12">
        <p class="font-weight-normal">Eukleidovým nejvýznamnějším dílem jsou třináctidílné <b>„Základy“ <i>(„Stoicheia“)</i></b> založené na systému ústředních axiomů geometrie. Ty další dva tisíce let určovaly evropské geometrické myšlení. Podává v nich také důkaz Pythagorovy věty a důkaz nekonečného množství prvočísel. </p>
    </div>

    <div class="row">
        <div class="col-md-6">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col"><h3>Obdelník</h3></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">Délka strany A:</th>
                    <td><?php echo $a; ?></td>
                    <td>cm</td>
                </tr>
                <tr>
                    <th scope="row">Délka strany B:</th>
                    <td><?php echo $b; ?></td>
                    <td>cm</td>
                </tr>
                <tr>
                    <th scope="row">Obvod obdelníku:</th>
                    <td><?php echo 2 * $a + 2 * $b; ?></td>
                    <td>cm</td>
                </tr>
                <tr>
                    <th scope="row">Obsah obdelníku:</th>
                    <td><?php echo $obdelnikobsah; ?></td>
                    <td>cm<sup>2</sup></td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="col-md-6">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col"><h3>Rovnostranný trojůhelník</h3></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">Délka strany A:</th>
                    <td><?php echo $strana; ?></td>
                    <td>cm</td>
                </tr>
                <tr>
                    <th scope="row">Úhel:</th>
                    <td><?php echo $uhel; ?></td>
                    <td>stupňů</td>
                </tr>
                <tr>
                    <th scope="row">Obvod trojúhelníku:</th>
                    <td><?php echo 3 * $strana; ?></td>
                    <td>cm</td>
                </tr>
                <tr>
                    <th scope="row">Výška trojúhelníku:</th>
                    <td><?php echo $vyska; ?></td>
                    <td>cm<sup>2</sup></td>
                </tr>
                <tr>
                    <th scope="row">Obsah trojúhelníku:</th>
                    <td><?php echo $trojuhelnikobsah; ?></td>
                    <td>cm<sup>2</sup></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

</main><!-- /.container -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>