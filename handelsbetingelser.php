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

    <link href="css/terms.css" rel="stylesheet" type="text/css">
    

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<!-- Cover -->

<?php include 'nav.php'; ?>
<div class="container-fluid col-12" style="height: 6rem;"></div>
<div class="seleclist container col-7 mt-2">
    <form action="/action_page.php">
        <label for="sel1" class="form-label"><div class="title">
                <div class="container position-relative">
                    <div class="row" style="text-align: center">
                        <h1>Terms and Conditions of Sales</h1>
                    </div>
                </div>
            </div></label>
        <select class="form-select" id="sel1" name="sellist1">
            <option>EXCLUSIVITY OF TERMS</option>
            <option>SHIPMENT AND TRANSPORTATION</option>
            <option>ACCEPTANCE OF SHIPPED PRODUCT</option>
            <option>REGIONAL REGULATORY REQUIREMENTS</option>
            <option>PRODUCT DOCUMENTATION</option>
            <option>TECHNICAL COMPATIBILITY</option>
            <option>RE-EXPORT RESTRICTIONS</option>
        </select>
    </form>
</div>

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<nav class="position-fixed navbar container sidenav d-none d-sm-none d-md-none d-lg-none">

        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#exclusivity-of-terms">EXCLUSIVITY OF TERMS</a>
                </li>
                <li class="nav-item">
                    <a href="#shipment-and-transportation">SHIPMENT AND TRANSPORTATION</a>
                </li>
                <li class="nav-item">
                    <a href="#acceptance-of-shipped-product">ACCEPTANCE OF SHIPPED PRODUCT</a>
                </li>
                <li class="nav-item">
                    <a href="#regional-regulatory-requirements">REGIONAL REGULATORY REQUIREMENTS</a>
                </li>
                <li class="nav-item">
                    <a href="#product-documentation">PRODUCT DOCUMENTATION</a>
                </li>
                <li class="nav-item">
                    <a href="#technical-compatibility">TECHNICAL COMPATIBILITY</a>
                </li>
                <li class="nav-item">
                    <a href="#re-export-restrictions">RE-EXPORT RESTRICTIONS</a>
                </li>
                <li class="nav-item">
                    <a href="#quotations">QUOTATIONS</a>
                </li>
                <li class="nav-item">
                    <a href="#force-majeure">FORCE MAJEURE</a>
                </li>
                <li class="nav-item">
                    <a href="#force-majeure">FORCE MAJEURE</a>
                </li>
                <li class="nav-item">
                    <a href="#frame-orders">FRAME ORDERS</a>
                </li>
                <li class="nav-item">
                    <a href="#payment-terms-&-invoicing">PAYMENT TERMS & INVOICING</a>
                </li>
                <li class="nav-item">
                    <a href="#payment-default">PAYMENT DEFAULT</a>
                </li>
                <li class="nav-item">
                    <a href="#taxes">TAXES</a>
                </li>
                <li class="nav-item">
                    <a href="#contract-development-and-customer-specific-projects">CONTRACT DEVELOPMENT AND CUSTOMER SPECIFIC PROJECTS</a>
                </li>
                <li class="nav-item">
                    <a href="#intellectual-property-rights">INTELLECTUAL PROPERTY RIGHTS</a>
                </li>
                <li class="nav-item">
                    <a href="#repairs">REPAIRS</a>
                </li>
                <li class="nav-item">
                    <a href="#disputes">DISPUTES</a>
                </li>
                <li class="nav-item">
                    <a href="#cancellation,-suspension,-or-modification-by-customer">CANCELLATION, SUSPENSION, OR MODIFICATION BY CUSTOMER</a>
                </li>
                <li class="nav-item">
                    <a href="#eu's-waste-electronic-and-electronic-equipment-(weee)-regulation-and-related-electronic-recycling-rules">EU'S WASTE ELECTRONIC AND ELECTRONIC EQUIPMENT (WEEE)</a>
                </li>
                <li class="nav-item">
                    <a href="#warranty">WARRANTY</a>
                </li>
            </ul>
        </div>
</nav>




<div class="container-fluid col-12" style="height: 2rem;"></div>

<?php foreach ($handelsbetingelser as $Allterms) { ?>

    <main class="container-fluid"
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
<script>
// Get the button:
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

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