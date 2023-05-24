<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/style/style.css" rel="stylesheet">
    <title>О нас</title>
</head>
<body>
<?php
include('elements/header.php');
?>


<div class="container text-center mt-5">
    <div class="col">
        <img src="/resources/images/logo.png" class="border border-dark" alt="logo" height="200" width="200">
    </div>
    <div class="col mt-3">
        <p style="font-size: 20px;">Музыка наше все</p>
    </div>
</div>
<div class="container mt-3 text-center">
        <div class="col">
            <p class="fw-bold" style="font-size: 30px;">Новинки компании</p>
        </div>
</div>

<?php
include('elements/carousel.php');
?>
<?php
include('elements/footer.php');
?>
<script src="/bootstrap/js/bootstrap.js"></script>
</body>
</html>