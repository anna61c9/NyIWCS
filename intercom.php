<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Intercom</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der ugiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/styles.scss" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<img class="bg d-none d-mb-none d-lg-block" src="images/demoBackdrop.png" alt="background">
<img class="bg d-block d-mb-block d-lg-none" src="images/backDropSmall.png" alt="background">
<?php include 'nav.php'; ?>

<!-- Back -->
<div class="container-fluid position-relative">
    <div class="row p-2">
        <div class="col">
            <a href="index.php"><img src="images/back.png" class="img" style="width: 2em" alt="back"></a>
        </div>
    </div>
</div>


<div id="carouselExampleCaptions" class="carousel slide d-block d-mb-none d-lg-none m-3" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/UdklipA.PNG" class="d-block w-100" alt="Interface">
            <div class="carousel-caption d-none d-md-block">
                <h5>Intercom controls</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/UdklipB.PNG" class="d-block w-100" alt="Interface">
            <div class="carousel-caption d-none d-md-block">
                <h5>Intercom custom</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/UdklipC.PNG" class="d-block w-100" alt="Interface">
            <div class="carousel-caption d-none d-md-block">
                <h5>Intercom settings</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<br><br><br>

<div class="position-relative text-center d-none d-mb-block d-lg-block">
    <iframe width="900" height="506,25" src="https://totallychaos.dk/Iwcs%20intercom/" title="DEMO" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

<div class="container text">
    <div class="row" style="height: 2rem;">
    </div>
</div>

<div class="container text position-relative d-none d-mb-none d-lg-block">
    <div class="row">
        <div class="col">
        </div>

        <div class="col text-end"
             style="font-family: 'Bahnschrift', sans-serif; font-size: 4rem; font-weight: bolder; color: #c5e8ef;">
            Make sound bright
        </div>

        <div class="col" style="color: #c5e8ef;">
            <br>
            <p>IWCS are known for their
                understanding that effective
                communication is paramount
                in high-stress scenarios.</p>
        </div>
    </div>
</div>
<br>


<div class="container text position-relative d-block d-mb-block d-lg-none">
    <div class="row">

        <div class="col-7 text-end"
             style="font-family: 'Bahnschrift', sans-serif; font-size: 2rem; font-weight: bolder; color: #c5e8ef;">
            Make sound bright
        </div>

        <div class="col-4" style="color: #c5e8ef; font-size: 8px!important;">
            <br>
            <p>IWCS are known for their
                understanding that effective
                communication is paramount
                in high-stress scenarios.</p>
        </div>
x
    </div>
</div>
<br>




<?php include 'bottom.php'; ?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
