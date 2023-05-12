<!DOCTYPE html>
<html lang="da">

<head>
    <meta charset="utf-8">

    <title>IWCS</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<!-- Cover -->
<img id="bg" src="images/waterCircle.webp" alt="">

<?php include 'nav.php'; ?>

<div class="underrubrik container-fluid justify-content-center">
    <div class="col">

        <div class="row mx-auto">
            <h4>Raymarine x IWCS</h4>
        </div>

        <div class="row mx-auto">
            <h2>Communication can save lifes</h2>
        </div>

    </div>
</div>
<br><br><br><br><br>

<!-- CTA gamle position.
<div id="container-fluid d-flex">
    <div class="row CTA">
        <div class="col col-md-8 col-lg-12 mx-5">
            <button class="learn-more">
    <span class="circle" aria-hidden="true">
      <span class="icon arrow"></span>
    </span>
                <a href="intercom.php"><span class="button-text">Intercom</span></a>
            </button>
        </div>
    </div>
</div>
-->

<!-- Accordion -->
<div class="container-fluid justify-content-center" style="width: 70%;">

    <!-- CTA -->
    <div id="container-fluid d-flex">
        <div class="row CTA">
            <div class="col col-md-8 col-lg-12 mx-5">
                <button class="learn-more">
    <span class="circle" aria-hidden="true">
      <span class="icon arrow"></span>
    </span>
                    <a href="intercom.php"><span class="button-text">Intercom</span></a>
                </button>
            </div>
        </div>
    </div>

    <br><br><br><br><br><br>

    <div class="row">
        <div class="col-12 col-md-8 col-lg-12 mx-auto">

            <div class="accordion accordion-flush id="accordionFlushExample">

            <div class="row underrubrik m-2"><h1>Rubrik</h1></div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false"
                            aria-controls="flush-collapseOne">
                        Accordion Item #1
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                     data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to
                        demonstrate
                        the
                        <code>.accordion-flush</code> class. This is the first item's accordion body.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo" aria-expanded="false"
                            aria-controls="flush-collapseTwo">
                        Accordion Item #2
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                     data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to
                        demonstrate
                        the
                        <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine
                        this being
                        filled with some actual content.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                            aria-controls="flush-collapseThree">
                        Accordion Item #3
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse"
                     aria-labelledby="flush-headingThree"
                     data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to
                        demonstrate
                        the
                        <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more
                        exciting
                        happening here in terms of content, but just filling up the space to make it look, at least
                        at
                        first
                        glance, a bit more representative of how this would look in a real-world application.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid justify-content-end socialMedia">
    <div class="row">
        <div class="col m-2">
            <a href="https://www.linkedin.com/company/iridiumwaterproof/?originalSubdomain=dk"><img src="images/inHvid.png" class="img m-2" alt="linkedin"></a>
            <a href="https://www.youtube.com/@IWCSDenmark"><img src="images/youtube.png" class="img m-2" alt="Youtube"></a>
        </div>
    </div>
</div>

<?php include 'bottom.php'; ?>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>