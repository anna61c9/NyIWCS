<!DOCTYPE html>
<html lang="da">

<head>
    <meta charset="utf-8">

    <title>Intercom</title>

    <meta name="robots" content="All">
    <meta name="author" content="Giver">
    <meta name="copyright" content="Information om copyright">

    <meta name="description"
          content="Intercom made by IWCS, can now be run on Raymarine’s screens.">

    <meta itemprop="name" content="iwcs">

    <meta name="keywords" content="wireless intercom, intercom interface, full duplex intercom">

    <meta property="og:title" content="intercom"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://www.totallychaos.dk/iwcs"/>
    <meta property="og:image" content="https://www.totallychaos.dk/iwcs/watercircle.webp"/>
    <meta property="og:description"
          content="A new collaboration between IWCS and Raymarine means that IWCS’ intercom can now be run on Raymarine’s screens. This makes it possible for Raymarine to utilize the effective communication system to all their users. "/>
    <meta property="og:locale" content="en_dk"/>

    <link href="css/styles.scss" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="background-image: url(images/demoBackdrop.webp);
background-size: cover; min-height: 100vh; background-position: center;">


<?php include 'nav.php'; ?>

<div class="container-fluid col-12"></div>

<div class="container-fluid position-relative my-2">
    <div class="row p-3">
        <div class="col">
            <a href="index.php"><img src="images/back.webp" class="img" style="width: 2em" alt="back"></a>
        </div>
    </div>
</div>
<br>

<div class="container">
    <div class="row" style="height: 2em;"></div>
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
            <img src="images/UdklipA.webp" class="d-block w-100" alt="Interface">
            <div class="carousel-caption d-md-block d-lg-none">
                <h5>Intercom controls</h5>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/UdklipB.webp" class="d-block w-100" alt="Interface">
            <div class="carousel-caption d-md-block d-lg-none">
                <h5>Intercom custom</h5>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/UdklipC.webp" class="d-block w-100" alt="Interface">
            <div class="carousel-caption d-md-block d-lg-none">
                <h5>Intercom settings</h5>
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


<div class="position-relative text-center d-none d-mb-block d-lg-block">
    <iframe width="900" height="506,25" src="https://totallychaos.dk/Iwcs%20intercom/" title="DEMO" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

<div class="container">
    <div class="row" style="height: 10%;"></div>
</div>

<div class="container text position-relative d-flex justify-content-center">
    <div class="row mx-auto">

        <div class="col-12 col-md-6 col-lg-6 text-lg-end text-md-end"
             style="font-family: 'Bahnschrift', sans-serif; font-size: 3rem; font-weight: bolder; color: #c5e8ef;">
            Explore the demo
        </div>

        <div class="col-12 col-md-6 col-lg-6" style="color: #c5e8ef;">
            <br>
            <p>IWCS are known for their
                understanding that effective
                communication is paramount
                in high-stress scenarios.</p>
        </div>

    </div>
</div>
<br>

<div class="container-fluid col-12" style="height: 7vh;"></div>

<?php include 'bottom.php'; ?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
