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
          <li class="nav-item active">
              <a class="nav-link" href="index.php">Dějiny matematiky <span class="sr-only">(current)</span></a>
          </li>
            <li class="nav-item">
                <a class="nav-link" href="mezopotamie.php">Mezopotámie</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="recko.php">Řecko</a>
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
            <p>Dějiny matematiky </p>
        </h1>
      </div>

        <div class="container">
            <h7>
            <!-- Example row of columns -->
            <div class="row">
                <div class="col-md-8">
                    <p class="font-weight-normal">Historie matematiky sahá od prvních pokusů pravěkého člověka spočítat úlovek, přes velký vzestup matematiky ve Starém Řecku až k moderní matematice rozrůzněné ve velký počet oborů, kterými se zabývá ohromný počet matematiků. </p>
                    <p class="font-weight-normal">Je třeba si uvědomit, že až do moderní doby probíhal vývoj v geograficky oddělených částech světa různě a dnes univerzálně známé poučky jako je např. Pythagorova věta byly objevovány znovu v Řecku, <a href ="http://ktrojakova.php.braincraft.cz/lekce-2/neevropska_matematika.php" title="v Číně">v Číně</a>… Zároveň je nutné nepřehlížet vývoj neevropské matematiky, poněvadž zvláště ta arabská, čínská a indická během středověku evropskou co do šíře znalostí značně předstihla. </p>
                    <p class="font-weight-normal">Až nástup novověku společně s objevem diferenciálního a integrálního počtu odstartovaly dnešní mohutný rozkvět evropské matematiky. Úspěchy dosažené na poli matematickém často předcházely či podmiňovaly jiné, praktičtější nebo výraznější úspěchy člověka v oblasti technologií, ať už jde o cestu člověka na Měsíc nebo moderní počítač a internet. </p>
            </h7>
                </div>
                <div class="col-md-4">
                    <img src="cisla.jpg" height="700" alt="Čísla starověku">
                </div>
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
