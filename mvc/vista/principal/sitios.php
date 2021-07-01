<?php
echo $GLOBALS['raiz'];
require($GLOBALS['raiz'].'mvc/persistencia/conexion.php');
require($GLOBALS['raiz'].'include/gmaps/EasyGoogleMap.class.php');
//$conexion = new Conexion();
//$key = "ABQIAAAA8a8P_YYTFTFvuRVTURoPGxQD-mB4mlUhFcw8fib4OWtBbq5IuxSqm2_sgN1gUigIqsPL-VTqKMs8zg";//key casa

$key = "ABQIAAAA8a8P_YYTFTFvuRVTURoPGxQD-mB4mlUhFcw8fib4OWtBbq5IuxSqm2_sgN1gUigIqsPL-VTqKMs8zg";
$gm = new EasyGoogleMap($key);
$gm->SetMapZoom(5);

$gm->SetMarkerIconStyle('STAR');
$address = "Cr 15 # 13B - 16,Popayan,Colombia";
$tool_tip = "<div class='tgmp'><img src='".$GLOBALS['raiz']."mvc/vista/imagenes/logo2.png' width='80px' heigth='80px'/><br>Siempre I.P.S. : <strong></strong><br>Sede: <strong>Popayan</strong><br>Ubicacion: <strong>$address</strong></div>";
$gm->SetAddress($address);
$gm->SetInfoWindowText($tool_tip);


$gm->mContinuousZoom = true;
$gm->mScale = true;
$gm->mInset = true;
$gm->SetMapWidth(500);
$gm->SetMapHeight(500);
echo $gm->GmapsKey();
?>

<style>
    #content_welcome {

        position: absolute;
        top:64px;
        font-size: 16px;
        background-color: rgba(0,0,0,0.5);
        border: 1px solid #000;
        padding: 8px;
        width: 500px;
        height: 520px;
        left: 180px;

    }
    
    .tgmp {
        color:#000000;
        font-size: 12px;
    }
</style>
<img id="imagen_bg" src="<?php echo $GLOBALS['raiz'] ?>mvc/vista/imagenes/pediatra.png" />
<div id="content_welcome">
    <div class="welcome">
        Sitios de atencion nacionales
    </div>
    <div id="text_welcome">
        <center>
            <?php echo $gm->MapHolder(); ?>
            <?php echo $gm->InitJs(); ?>
            <?php echo $gm->UnloadMap(); ?>
        </center>
    </div>

</div>