<?php
require'EasyGoogleMap.class.php';
//SUSTITUIR POR LA KEY DE GOOGLE
$key = "ABQIAAAA8a8P_YYTFTFvuRVTURoPGxQD-mB4mlUhFcw8fib4OWtBbq5IuxSqm2_sgN1gUigIqsPL-VTqKMs8zg";
$gm = new EasyGoogleMap($key);
$gm->SetMapZoom(5);
$gm->SetAddress("k3 c10,Popayan,Colombia");
$gm->SetInfoWindowText("<img src='banner.png' width='200px' heigth='100px' /><br>Este es el texto para el punto 1");
$gm->SetAddress("Cali, Colombia");
$gm->SetInfoWindowText("Este es el texto para el punto 2");
$gm->SetAddress("k4 c16,Bogota,Colombia");
$gm->SetInfoWindowText("Este es el texto para el punto 2");
$gm->SetAddress("k4 c16,Pasto,Colombia");
$gm->SetInfoWindowText("<strong>Este es el texto para el punto 2</strong>");
$gm->mContinuousZoom = true;
$gm->mScale = true;
$gm->mInset = true;
$gm->SetMapWidth(400);
$gm->SetMapHeight(400);
?>
<html>
    <head>
        <title>EasyGoogleMap</title>
        <?php echo $gm->GmapsKey(); ?>
    </head>
    <body>
        <?php echo $gm->MapHolder(); ?>
        <?php echo $gm->InitJs(); ?>
        <?php echo $gm->UnloadMap(); ?>

        <br><br>
        <div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#appId=APP_ID&amp;xfbml=1"></script><fb:comments href="redbancariasena.com" num_posts="5" width="500"></fb:comments>
</body>
</html>