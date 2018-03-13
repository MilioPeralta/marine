<?php
$img_src_prefix = 'http://marine.tauzin.free.fr/site/img/tiny/';

$projects = array(
    '0' => 'artisanat',
    '1' => 'aura',
    '2' => 'chanel',
    '3' => 'insitu',
    '4' => 'noel',
    '5' => 'rituel',
);

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />

    <title>Marine Tauzin-Fin</title>
</head>
<body>

<div class="row no-gutters">
    <div class="col-sm-3"></div>
    <div class="col-sm-8">

        <div class="row">
            <div class="col-sm-3">Marine Tauzin-Fin</div>
            <div class="offset-sm-6 col-sm-3 text-right">Graphic designer<br />Based in Paris</div>
        </div>

        <div class="row">
            <h1 class="col">
                Art and design
            </h1>
        </div>

        <div class="gallery">
            <?php for ($i = 0; $i <= sizeof($projects) - 1; $i += 2) { ?>
                <div class="row">
                    <div class="col-sm-6">
                        <a href="project.php?project=<? echo $projects[$i]; ?>">
                            <img src="<? echo $img_src_prefix . $projects[$i]; ?>_1.jpg">
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <a href="project.php?project=<? echo $projects[$i]; ?>">
                            <img src="<? echo $img_src_prefix . $projects[$i + 1]; ?>_1.jpg">
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
