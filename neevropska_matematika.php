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
        <ul class="navbar-nav">
            <a class="nav-link" href="index.php">Dějiny matematiky</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="mezopotamie.php">Mezopotámie</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="recko.php">Řecko</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="neevropska_matematika.php">Neevropská matematika <span class="sr-only">(current)</span></a>
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
            <p>Matematika Indie, Číny a Islámského světa</p>
        </h1>
        <div class="container">
            <!-- Example row of columns -->
            <div class="row">
                <div class="col-md-6">
                    <h3>Indie</h3>
                    <p class="font-weight-normal">Indická matematika byla ve své době až obdivuhodně rozvinutá. A způsobila velký zlom ve vývoji matematiky. Světu přinesla především poziční systém. Existovaly symboly pro prvních devět číslic. Desítkový charakter byl velmi rozvinutý. To vše představuje příznivé podmínky pro vytvoření poziční soustavy se základem 10. Obrovským objevem indických matematiků se stala nula: 0. </p>
                    <p class="font-weight-normal">Kromě toho skvěle ovládli počítání se zlomky. Jejich forma se téměř shodovala se současnou: čitatele psali nad jmenovatelem, ale nepoužívali zlomkovou čáru. Při operacích s celými čísly a se zlomky vyjadřovali celé čísla jako zlomky se jmenovatelem 1. Umocňovali dvěma a třemi, znali a používali trojčlenku a mnoho dalšího. </p>
                </div>
                <div class="col-md-6">
                    <h3>Čína</h3>
                    <p class="font-weight-normal">Čína byla až do 14. století v oblasti matematiky nejrozvinutější zemí světa. Např.: <a href ="http://ktrojakova.php.braincraft.cz/lekce-2/recko.php" title="Pythagorova věta">Pythagorova věta</a> byla zapsána v čínské matematické knize z 2. století př. n. l. V další důležité čínské matematické knize z 1. století jako první na světě byl objasněn pojem o záporném čísle a principy přičítání, odčítání, čínský matematik Zu Chongzhi určil v 5. století s velkou přesností hodnotu Ludolfova čísla. Dostal se k číslu 3,141 592 6 (π = 3,141 592 7). Jakou metodu přesně použil, není známo. </p>
                </div>
                <div class="col-md-12">
                    <h3>Islámský svět</h3>
                    <p class="font-weight-normal">Arabská matematika byla nejvíce ovlivněna matematikou mezopotámskou, řeckou a indickou. Z indické matematiky převzala zápis čísel a algoritmy pro písemné počítání, z řecké matematiky abstraktní geometrii a myšlenku axiomatické výstavby matematiky, z mezopotámského a egyptského světa převzala tradici numericky náročných výpočtů a především důraz na užití matematiky v praktickém životě. Desítkový poziční systém pronikal pomalu na Blízký východ a byl používán vedle domácích systémů. Islámský svět se začal seznamovat s tzv. indickým systémem prostřednictvím al-Fázárího překladu díla Sinhásitas do arabštiny. Začaly se používat číslice z Indie. Protože do Evropy se dostaly prostřednictvím Arabů, jsou dnes známé jako arabské číslice. </p>
                    <p class="font-weight-normal">V historii i v současnosti matematiky a informatiky hrály a hrají důležitou roli předpisy k řešení úloh, např. předpisy pro čtyři základní aritmetické operace s přirozenými čísly zapsanými v desítkové soustavě. Předpisy tohoto charakteru se zabýval počátkem 9. století perský matematik Abdalláh Muhammad ibn Músa, al-Chwárizmí (nebo al-Chorezmí) al-Madžúsí, latinské zkomolení části jeho jména uvedlo do evropských jazyků slovo algoritmus. Al-Chwárizmí dovedl například geometricky řešit kvadratické rovnice a vymyslel také jednoduchý algoritmus pro násobení dvojciferného čísla číslem jednociferným. V letech 800 a 825 napsal dvě díla, z nichž jedno byla početnice, které v latinském překladu začíná slovy „Algoritmi dicit“ („Tak praví Al Chwárízmí“). Zdánlivá záměna jmen vznikla patrně zkomolením při překladu z arabštiny do latiny. Druhým dílem byla učebnice algebry „Al-džabr wa-l-maqábala“ („Uspořádání“), která obsahovala nauku o řešení rovnic. Podle autora je rovnice uspořádána, pokud jsou všechny její členy kladné. Na takový tvar byly všechny rovnice převáděny, čímž autor definoval povolené operace s rovnicemi. Neznal algebru obecných čísel. </p>
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