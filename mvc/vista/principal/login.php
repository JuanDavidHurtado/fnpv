<?php

if(isset($_REQUEST['msg'])){
    
    $msg = $_REQUEST['msg'];
    
}

?>
<style>
    #content_welcome {

        position: absolute;
        top:180px;
        font-size: 16px;
        background-color: rgba(0,0,0,0.5);
        border: 1px solid #000;
        padding: 8px;
        width: 380px;
        min-height: 250px;
        height: auto;
        left: 250px;

    }

    #text_welcome {
        position: relative;
        left: 100px;
    }
</style>

<img id="imagen_bg" src="<?php echo $GLOBALS['raiz'] ?>mvc/vista/imagenes/pediatra.png" />
<div id="content_welcome">
    <div class="welcome">
        Inicio sesión
    </div>
    <form id="text_welcome" name="text_welcome" action="#">
        <p>
            <label>Username</label>
            <br>
            <input class="input_txt" type="text" name="username" id="username" placeholder="Username" />
        </p>
        <p>
            <label>Password</label>
            <br>
            <input class="input_txt" type="password" name="passw" id="passw" placeholder="Password" />
        </p>
        <!--<a href="#">Recuperar contraseña</a>-->
        <br>
        <button id="ingresar">Ingresar</button>
    </form>
    <br>
    <?php echo @$msg ?>
</div>
