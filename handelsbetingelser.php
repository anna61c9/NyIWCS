<?php
require "settings/init.php";

$handelsbetingelser = $db->sql("SELECT * FROM handelsbetingelser");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Terms and Conditions of Sales</title>
    <meta name="robots" content="All">
    <meta name="author" content="IWCS">
    <meta name="copyright" content="Information om copyright">
    <link href="css/terms.scss" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .dropdown-container {
            position: relative;
            display: inline-block;
        }

        .dropdown-container select {
            width: auto;
            max-width: 100%;
            white-space: normal;
            word-wrap: break-word;
        }
    </style>
</head>

<body style="background-image: url(images/demoBackdrop.webp);
background-size: cover; min-height: 100vh; background-position: center;">

<?php include 'nav.php'; ?>

<!-- Back -->
<div class="container-fluid position-relative my-3">
    <div class="row p-3">
        <div class="col">
            <a href="index.php"><img src="images/back.webp" class="img" style="width: 2em" alt="back"></a>
        </div>
    </div>
</div>

<div class="container-fluid col-12 position-relative" style="height: 6rem;"></div>
<div class="seleclist container col-7 mt-2">
    <form action="/handelsbetingelser.php">
        <label for="sel1" class="form-label">
            <div class="title">
                <div class="container position-relative">
                    <div class="row" style="text-align: center">
                        <h1>Terms and Conditions of Sales</h1>
                    </div>
                </div>
            </div>
        </label>
        <div class="dropdown-container">
            <select class="form-select" id="sel1" name="sellist1">
                <?php foreach ($handelsbetingelser as $term) { ?>
                    <option><?php echo $term->termsName; ?></option>
                <?php } ?>
            </select>
        </div>
    </form>
</div>

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<div class="container-fluid col-12 position-relative" style="height: 2rem;"></div>

<?php foreach ($handelsbetingelser as $Allterms) { ?>

    <main class="container-fluid position-relative"
          id="<?php echo strtolower(str_replace(' ', '-', $Allterms->termsName)); ?>">
        <div class="row">
            <div class="container col-7 justify-content-center p-0">
                <h2><?php echo $Allterms->termsName; ?></h2>
                <p class="text" style="font-size: medium; color: whitesmoke;"><?php echo $Allterms->termsDescription; ?></p>
            </div>
        </div>
    </main>
<?php } ?>

<div class="container-fluid col-12" style="height: 6vh;"></div>

<?php include 'bottom.php'; ?>

<script>
    //lytter efter, at DOM'en (Document Object Model) er blevet indlæst. Når DOM'en er klar, udføres den tilknyttede funktion.
    document.addEventListener('DOMContentLoaded', () => {

        //finder det HTML-element med id'et "sel1" og gemmer det i variablen "dropdown"
        const dropdown = document.getElementById('sel1');

        //finder alle HTML-elementer, der er mærket med tagget "main" (hovedindholdet), og gemmer dem i variablen "chapters".
        const chapters = document.querySelectorAll('main');

        //tilføjer en event listener til dropdown-menuen. Den lytter efter, at værdien af dropdown-menuen ændres, og udfører den tilknyttede funktion.
        dropdown.addEventListener('change', function () {

            //Disse linjer gemmer indekset af den valgte værdi i dropdown-menuen i variablen "selectedIndex".
            // Derefter gemmer den valgte sektion (afsnit) i variablen "selectedChapter" ved at bruge det tilsvarende indeks i "chapters" arrayet.
            const selectedIndex = dropdown.selectedIndex;
            const selectedChapter = chapters[selectedIndex];

            //Denne linje tjekker, om der faktisk er valgt et afsnit (selectedChapter). Hvis der er, fortsættes koden inden for denne betingelse.
            if (selectedChapter) {

                //Disse linjer beregner afstanden fra det øverste af dokumentet til starten af det valgte afsnit ved at bruge "offsetTop" egenskaben.
                // Derefter ruller den visningen af vinduet glat til denne position ved hjælp af "window.scrollTo" metoden med indstillingen
                // "behavior" sat til "smooth" for en jævn rulleeffekt.
                const offsetTop = selectedChapter.offsetTop;
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });

</script>

<script>
    // Get the button:
    let mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }

</script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>