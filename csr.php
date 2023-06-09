<!DOCTYPE html>
<html lang="da">

<head>
    <meta charset="utf-8">

    <title>404</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.scss" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<!-- Cover -->
<img src="images/demoBackdrop.png" alt="background" class="csrbg position-absolute">

<?php include 'nav.php'; ?>

<div class="container-fluid position-relative">
    <div class="row p-3">
        <div class="col">
            <a href="index.php"><img src="images/back.png" class="img" style="width: 2em;" alt="back"></a>
        </div>
    </div>
</div>

<div class="container position-relative col-8">
    <div class="row text-center p-5">
    <h1>Oops!...</h1>
    </div>
</div>

<br>

<div class="container position-relative" style="color:whitesmoke; width: 80vh; display: flex; justify-content: center; align-items: center;">
    <img src="images/404.png" alt="404" class="img-fluid">
</div>

<br>

<div class="container col-8 justify-content-center position-relative mt-4">
    <div class="row text-center p-5">
    <h3>Looks like you've stumbled upon uncharted audio territory.</h3>
        <h5>While our intercom system won't navigate you through this 404 page, it's busy saving lives with its incredible sound technology. Now, let's steer you back on track. Hit that 'arrow' button to embark on an exhilarating journey through our campaign website, where you'll discover how our life-saving intercom system revolutionizes communication. Together, we're amplifying safety, one conversation at a time!</h5>
    </div>
</div>

<div class="container-fluid col-12 position-relative" style="height: 20rem;"></div>

<?php include 'bottom.php'; ?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
