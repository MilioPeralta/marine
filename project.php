<?php
$project = 1;
if (isset($_REQUEST['id'])) {
    $project = $_REQUEST['id'];
}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>

    <title>Marine Tauzin-Fin</title>
</head>
<body>

<div class="row no-gutters">
    <div class="col-sm-3"></div>
    <div class="col-sm-8">

        <div class="row">
            <div class="col-sm-3">Marine Tauzin-Fin</div>
            <div class="offset-sm-6 col-sm-3 text-right">Graphic designer<br/>Based in Paris</div>
        </div>

        <div class="row">
            <h1 class="col">
                Art and design <?php echo $project ?>
            </h1>
        </div>

        <div class="gallery">
            <div class="row">
                <div class="col-sm-6">
                    <img src="img/tiny/artisanat_1.jpg">
                </div>
                <div class="col-sm-6">
                    <img src="img/tiny/artisanat_2.jpg">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <img src="img/tiny/artisanat_3.jpg">
                </div>
                <div class="col-sm-6">
                    <img src="img/tiny/artisanat_4.jpg">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <img src="img/tiny/artisanat_5.jpg">
                </div>
                <div class="col-sm-6">
                    <img src="img/tiny/artisanat_6.jpg">
                </div>
            </div>
        </div>

    </div>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
