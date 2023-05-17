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

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php include 'nav.php'; ?>

<!-- Back -->
<div class="container-fluid p-5">
    <div class="row p-5">
        <div class="col">
            <a href="index.php"><img src="images/back.png" class="img" style="width: 3em" alt="back"></a>
        </div>
    </div>
</div>


<div class="container text">
    <div class="row" style="height: 12rem;">
    </div>
</div>

<div class="container text">
    <div class="row">
        <div class="col">
        </div>

        <div class="col text-end" style="font-family: 'Bahnschrift', sans-serif; font-size: 4rem; font-weight: bolder; color: #c5e8ef;">
            Make sound bright
        </div>

        <div class="col" style="color: #c5e8ef;">
            <br><p>IWCS are known for their
            understanding that effective
            communication is paramount
                in high-stress scenarios.</p>
        </div>
    </div>
</div>
<br>




<?php include 'bottom.php'; ?>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
