<style>

    #content_welcome{
        height: 752px;
    }

    .content_tab{
        overflow:auto;
        height: 682.625px;

    }

    .content_tab_i{
        overflow:auto;
        height: 619px;
    }

    .content_itinerarios {
        overflow:auto;
        width: 100%;
        height: 688px;
        position: relative;
    }

    .arrow-c {
        width: 25px;
        height: 16px;
        background-repeat: no-repeat;
        background-image:url(<?php echo Utils::$http_ruta . "mvc/vista/imagenes/arrow-c.png"; ?>);
        float: left;
        margin-right: 5px;
        cursor: pointer;
        zoom: 70%;
        margin-top: 5px;
    }

    .arrow-o {
        width: 25px;
        height: 16px;
        background-repeat: no-repeat;
        background-image:url(<?php echo Utils::$http_ruta . "mvc/vista/imagenes/arrow-o.png"; ?>);
        float: left;
        margin-right: 5px;
        cursor: pointer;
        zoom: 70%;
        margin-top: 5px;
        display: none;
    }

</style> 
<div id="content_welcome" style="overflow-y:auto;" class="ui-tabs ui-widget ui-widget-content ui-corner-all">

    <h2>
        <div class="msg ui-state-error ui-corner-all" style="padding: 0 .7em;"> 
            <p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span> 
            El usuario no tiene acceso a la aplicacion, el motivo de este error es que no cuenta con una licencia
                de uso para el sistema.</p> 
            <p>
                Si usted cuenta con la licencia debe solicitar soporte al administrador de sistema.
            </p>
            <p>
                Para mas informacion comuniquese con <a href="mailto:tavoz.q@hotmail.es">tavoz.q@hotmail.es</a>
            </p>
        </div>


    </h2>

</div>
