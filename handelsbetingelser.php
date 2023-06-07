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
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.scss" rel="stylesheet" type="text/css">


    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<!-- Cover -->


<?php include 'nav.php'; ?>


<div class="sidenav container d-none d-sm-none d-md-none d-lg-block">
    <div class="row">
        <a href="#afsnit1">EXCLUSIVITY OF TERMS</a>
        <a href="#afsnit2">SHIPMENT AND TRANSPORTATION</a>
        <a href="#afsnit3">ACCEPTANCE OF SHIPPED PRODUCT</a>
        <a href="#afsnit4">REGIONAL REGULATORY REQUIREMENTS</a>
        <a href="#afsnit5">PRODUCT DOCUMENTATION</a>
        <a href="#afsnit6">TECHNICAL COMPATIBILITY</a>
        <a href="#afsnit7">RE-EXPORT RESTRICTIONS</a>
        <a href="#afsnit8">QUOTATIONS</a>
        <a href="#afsnit9">FORCE MAJEURE</a>
        <a href="#afsnit10">FRAME ORDERS</a>
        <a href="#afsnit11">PAYMENT TERMS & INVOICING</a>
        <a href="#afsnit12">PAYMENT DEFAULT</a>
        <a href="#afsnit13">TAXES</a>
        <a href="#afsnit14">CONTRACT DEVELOPMENT AND CUSTOMER SPECIFIC PROJECTS</a>
        <a href="#afsnit15">INTELLECTUAL PROPERTY RIGHTS</a>
        <a href="#afsnit16">WARRANTY</a>
        <a href="#afsnit17">REPAIRS</a>
        <a href="#afsnit18">DISPUTES</a>
        <a href="#afsnit19">CANCELLATION, SUSPENSION, OR MODIFICATION BY CUSTOMER</a>
        <a href="#afsnit20">EU'S WASTE ELECTRONIC AND ELECTRONIC EQUIPMENT (WEEE)</a>
    </div>
</div>



<div class="title">
    <div class="container position-relative">
        <div class="row" style="text-align: center"><h1>Terms and Conditions of Sales</h1>
        </div>
    </div>
</div>

<div class="container-fluid col-12" style="height: 2rem;"></div>

<?php
foreach ($handelsbetingelser as $Allterms) {
    ?>

    <main class=" main container-fluid position-relative" style="background:#040444;">
        <div class="row">
            <div class="container">
                <h2>
                    <?php
                    echo $Allterms->termsName;
                    ?>
                </h2>
                <p class="text" style="font-size: medium; color: whitesmoke;">
                    <?php
                    echo $Allterms->termsDescription;
                    ?>
                </p>
                <br>
            </div>
        </div>
    </main>

    <?php
}
?>

<?php include 'bottom.php'; ?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>