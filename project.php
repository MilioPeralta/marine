<?php
$img_src_prefix = 'http://marine.tauzin.free.fr/site/img/tiny/';

$projectImagesNumber = array(
    'artisanat' => '6',
    'aura' => '17',
    'chanel' => '10',
    'insitu' => '11',
    'noel' => '7',
    'rituel' => '6',
);

// Defaut project
$project = 'artisanat';

$projectImageNumber = 1;
if (isset($_REQUEST['project'])) {
    $project = $_REQUEST['project'];
    $projectImageNumber = $projectImagesNumber[$project];
}
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
                Art and design <?php echo $projectImageNumber; ?>
            </h1>
        </div>

        <div class="gallery">
            <div class="row">
                <div class="col-sm-6">
                    <img src="<? echo $img_src_prefix . $project; ?>_1.jpg">
                </div>
                <div class="col-sm-6">
                    Nomens resistere in lentia!The unveiled mind is full of harmony.
                    Everyone loves the keenness of margerine pie rinsed with whole vegemite.
                    The tobacco hobbles beauty like a scurvy cannon.
                    Processors resist on sonic shower at atlantis tower!
                </div>
            </div>

            <?php for ($i = 2; $i <= $projectImageNumber; $i += 2) { ?>
                <div class="row">
                    <div class="col-sm-6">
                        <img src="<? echo $img_src_prefix . $project; ?>_<?php echo $i; ?>.jpg">
                    </div>
                    <?php if (($i + 1) <= $projectImageNumber) { ?>
                        <div class="col-sm-6">
                            <img src="<? echo $img_src_prefix . $project; ?>_<?php echo $i + 1; ?>.jpg">
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>

    </div>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
