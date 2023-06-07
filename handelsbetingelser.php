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

    <link href="css/terms.scss" rel="stylesheet" type="text/css">
    

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<!-- Cover -->

<?php include 'nav.php'; ?>

<div class="sidenav container d-none d-sm-none d-md-none d-lg-block">
    <div class="row">
        <a href="#exclusivity-of-terms">EXCLUSIVITY OF TERMS</a>
        <a href="#shipment-and-transportation">SHIPMENT AND TRANSPORTATION</a>
        <a href="#acceptance-of-shipped-product">ACCEPTANCE OF SHIPPED PRODUCT</a>
        <a href="#regional-regulatory-requirements">REGIONAL REGULATORY REQUIREMENTS</a>
        <a href="#product-documentation">PRODUCT DOCUMENTATION</a>
        <a href="#technical-compatibility">TECHNICAL COMPATIBILITY</a>
        <a href="#re-export-restrictions">RE-EXPORT RESTRICTIONS</a>
        <a href="#quotations">QUOTATIONS</a>
        <a href="#force-majeure">FORCE MAJEURE</a>
        <a href="#frame-orders">FRAME ORDERS</a>
        <a href="#payment-terms-&-invoicing">PAYMENT TERMS & INVOICING</a>
        <a href="#payment-default">PAYMENT DEFAULT</a>
        <a href="#taxes">TAXES</a>
        <a href="#contract-development-and-customer-specific-projects">CONTRACT DEVELOPMENT AND CUSTOMER SPECIFIC PROJECTS</a>
        <a href="#intellectual-property-rights">INTELLECTUAL PROPERTY RIGHTS</a>
        <a href="#repairs">REPAIRS</a>
        <a href="#disputes">DISPUTES</a>
        <a href="#cancellation,-suspension,-or-modification-by-customer">CANCELLATION, SUSPENSION, OR MODIFICATION BY CUSTOMER</a>
        <a href="#eu's-waste-electronic-and-electronic-equipment-(weee)-regulation-and-related-electronic-recycling-rules">EU'S WASTE ELECTRONIC AND ELECTRONIC EQUIPMENT (WEEE)</a>
        <a href="#warranty">WARRANTY</a>
    </div>
</div>

<div class="title">
    <div class="container position-relative">
        <div class="row" style="text-align: center">
            <h1>Terms and Conditions of Sales</h1>
        </div>
    </div>
</div>

<div class="container-fluid col-12" style="height: 2rem;"></div>

<?php foreach ($handelsbetingelser as $Allterms) { ?>

    <main class="container-fluid" style="background-color: #13444e"
          id="<?php echo strtolower(str_replace(' ', '-', $Allterms->termsName)); ?>">
        <div class="row">
            <div class="container col-7 justify-content-center">
                <h2><?php echo $Allterms->termsName; ?></h2>
                <p class="text" style="font-size: medium; color: whitesmoke;"><?php echo $Allterms->termsDescription; ?></p>
            </div>
        </div>
    </main>
<?php } ?>

<?php include 'bottom.php'; ?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const links = document.querySelectorAll('.sidenav a');

        links.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();

                const targetId = this.getAttribute('href').substring(1);
                const targetElement = document.getElementById(targetId);

                if (targetElement) {
                    const offsetTop = targetElement.offsetTop;
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        });
    });
</script>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>