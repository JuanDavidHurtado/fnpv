<?php
session_start();
date_default_timezone_set("America/Bogota");

include ("mvc/control/utils.php");
foreach ($_REQUEST as $key => $input_arr) {
    $_REQUEST[$key] = addslashes(Utils::limpiarCadena($input_arr));
}
if ($_REQUEST['option'] == 'logout') {
    session_unset();
    session_destroy();
    $_REQUEST['option'] = 'xxx';
}

if ($_REQUEST['option'] == 'login') {
    if (isset($_REQUEST['username']) && isset($_REQUEST['passw'])) {

        include ("mvc/persistencia/conexion.php");

        $conexion = new Conexion();

        $login = $_REQUEST['username'];
        $password = $_REQUEST['passw'];
        $sql = "SELECT u.*, r.nombre as rol FROM usuario as u inner join rol as r on u.id_rol = r.id_rol WHERE u.login='$login' AND u.password='$password' and u.estado='activo' ";

        $result = $conexion->EjecutarQuery($sql);

        while ($row = mysql_fetch_array($result)) {

            //print_r($row);            
            $_SESSION['id_usuario'] = $row['id_usuario'];
            $_SESSION['apellido'] = $row['apellido'];
            $_SESSION['nombre'] = $row['nombre'];
            $_SESSION['rol'] = $row['rol'];

            if ($row['rol'] == 'ADMINISTRADOR') {
                header('location: users/administrador');
                exit;
            } if ($row['rol'] == 'AUXILIAR_2') {
                header('location: users/auxiliar_2');
                exit;
            } else if ($row['rol'] == 'AUXILIAR') {
                header('location: users/secretaria');
                exit;
            } else if ($row['rol'] == 'USUARIO') {

                $sql_tipo = "select * from tipo_usuario where id_tipo_usuario=" . $row['id_tipo_usuario'];
                $result_tipo = $conexion->EjecutarQuery($sql_tipo);
                $row_tipo = mysql_fetch_array($result_tipo);

                $_SESSION['rol_u'] = $row_tipo['nombre'];

                header('location: users/terapeuta');
                exit;
            } else {
                $msg = '<div class="msg ui-state-error ui-corner-all" style="padding: 0 .7em;"> 
                            <p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span> 
                            Verificar usuario!.</div>
                        </p>';

                $_REQUEST['msg'] = $msg;
            }

            break;
        }

        $msg = '<div class="msg ui-state-error ui-corner-all" style="padding: 0 .7em;"> 
                            <p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span> 
                            Verificar usuario!.</div>
                        </p>';

        $_REQUEST['msg'] = $msg;
    }
}

if (isset($_REQUEST['option'])) {
    switch ($_REQUEST['option']) {
        case "sitemap":
            $proceso_actual = 'SITE MAP';
            $include = ("mvc/vista/principal/sitemap.php");
            break;
        case "info_m":
            $proceso_actual = 'MISION';
            $include = ("mvc/vista/principal/mision.php");
            $style_in = "foco_menu";
            break;
        case "info_v":
            $proceso_actual = 'VISION';
            $include = ("mvc/vista/principal/vision.php");
            $style_in = "foco_menu";
            break;
        case "info_o":
            $proceso_actual = 'OBJETIVOS';
            $include = ("mvc/vista/principal/objetivos.php");
            $style_in = "foco_menu";
            break;
        case "sit":
            $proceso_actual = 'SITIOS';
            $include = ("mvc/vista/principal/sitios.php");
            $style_sit = "foco_menu";
            break;
        case "serv":
            $proceso_actual = 'SERVICIOS';
            $include = ("mvc/vista/principal/servicios.php");
            $style_ser = "foco_menu";
            break;
        case "esq_nin":
            $include = ("mvc/vista/principal/sqma_n.php");
            $style_es = "foco_menu";
            break;
        case "esq_adul":
            $style_es = "foco_menu";
            break;
        case "contact":
            $proceso_actual = 'CONTACTO';
            $include = ("mvc/vista/principal/contacto.php");
            $style_cont = "foco_menu";
            break;
        case "login":
            $proceso_actual = 'LOGIN';
            //$style_h = "foco_menu";
            $include = ("mvc/vista/principal/login.php");
            break;
        case "home":
            $proceso_actual = 'HOME';
            $style_h = "foco_menu";
            $include = ("mvc/vista/principal/home.php");
            break;
        default :
            header('location: ?option=home');
            break;
    }
} else {
    $proceso_actual = 'HOME';
    $style_h = "foco_menu";
    $include = ("mvc/vista/principal/home.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta itemprop="image" content="<?php echo $GLOBALS['raiz'] ?>mvc/vista/imagenes/favicon.png">
        <meta id="mref" name="referrer" content="origin">

        <link rel="stylesheet" href="include/jquery_ui2/themes/base/jquery.ui.all.css"  type="text/css"/>
        <link rel="stylesheet" href="include/jquery_ui2/demos/demos.css"  type="text/css"/>
        <link rel="stylesheet" href="include/jquery_ui2/css/style.css"  type="text/css"/>
        <script type="text/javascript" src="include/js/jquery-1.4.4.js"></script>
        <script type="text/javascript" src="include/js/jquery.validate.min.js"></script>



        <!-- complementos jquery ui para los tabs -->
        <script type="text/javascript" src="include/jquery_ui2/ui/jquery.ui.core.js"></script>
        <script type="text/javascript" src="include/jquery_ui2/ui/jquery.ui.widget.js"></script>
        <script type="text/javascript" src="include/jquery_ui2/ui/jquery.ui.mouse.js"></script>
        <script type="text/javascript" src="include/jquery_ui2/ui/jquery.ui.tabs.js"></script>
        <!--  sortable -->
        <script type="text/javascript" src="include/jquery_ui2/ui/jquery.ui.sortable.js"></script>
        <!--  button -->
        <script type="text/javascript" src="include/jquery_ui2/ui/jquery.ui.button.js"></script>
        <!-- menu -->
        <script type="text/javascript" src="include/jquery_ui2/src/jquery-ui.js"></script>
        <script type="text/javascript" src="include/jquery_ui2/src/jquery-xqs-flyoutMenu.js"></script>
        <script type="text/javascript" src="include/jquery_ui2/src/jquery-xqs-menubar.js"></script>
        <!-- drotable-->
        <script type="text/javascript" src="include/jquery_ui2/ui/jquery.ui.position.js"></script>
        <script type="text/javascript" src="include/jquery_ui2/ui/jquery.ui.draggable.js"></script>
        <script type="text/javascript" src="include/jquery_ui2/ui/jquery.ui.droppable.js"></script>
        <script type="text/javascript" src="include/jquery_ui2/ui/jquery.ui.resizable.js"></script>
        <script type="text/javascript" src="include/jquery_ui2/ui/jquery.ui.dialog.js"></script>
        <!-- multiselect -->
        <link  type="text/css" href="include/jquery_ui2/css/jquery.multiselect.css" rel="stylesheet" />
        <script type="text/javascript" src="include/jquery_ui2/ui/minified/jquery-ui.min.js"></script>
        <script type="text/javascript" src="include/jquery_ui2/src/jquery.multiselect.js"></script>
        <script type="text/javascript" src="include/jquery_ui2/src/jquery.multiselect.filter.js"></script>

        <link rel="stylesheet" href="include/jquery_ui2/demos/demos.css" />
        <!-- Estilo local -->

        <link  type="text/css" href="<?php echo $GLOBALS['raiz'] ?>mvc/vista/css.css" rel="stylesheet" />
        <link id="page_favicon" href="<?php echo $GLOBALS['raiz'] ?>mvc/vista/imagenes/favicon.ico" rel="icon" type="image/x-icon" />
        <title><?php echo Utils::$name_company; ?></title>


        <script>

            function imprSelec(nombre)
            {
                var ficha = document.getElementById(nombre);
                var ventimp = window.open(' ', 'ventana1', 'popimpr');
                ventimp.document.write(ficha.innerHTML);
                ventimp.document.close();
                ventimp.print( );
                history.back();

            }

            $(function() {
                $("button").button();
                $("#ingresar").button();

                $("#text_welcome").validate({
                    errorElement: "div",
                    rules: {
                        username: {required: true},
                        passw: {required: true}
                    },
                    messages: {
                        username: {required: 'Ingrese username ...'},
                        passw: {required: 'Ingrese password ...'}
                    },
                    submitHandler: function(form) {

                        var parameters = "?option=login&username=" + $("#username").val() + "&passw=" + $("#passw").val();
                        window.location.replace(parameters);

                    }
                });

                /*
                 $("button").button().removeClass('ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only button_class botton ui-state-hover');
                 $("button").button().addClass('button');*/
            })

			
  function ajaxobj() {
        try {
            _ajaxobj = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            try {
                _ajaxobj = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (E) {
                _ajaxobj = false;
            }
        }

        if (!_ajaxobj && typeof XMLHttpRequest != 'undefined') {
            _ajaxobj = new XMLHttpRequest();
        }

        return _ajaxobj;
    }




    function anular_factura() {

        //var id_contrato = document.getElementById('id_contrato').value;
        //var id_contrato =$('#id_contrato').val
        var parameters = "opcion=200";

         //alert(parameters);

       $.ajax({
            data: parameters,
            dataType: "",
            type: "POST",
            url: "<?php echo Utils::$http_ruta ?>mvc/vista/ajax.php",
            success: function(data) {
                if (data.trim()!=='') {
                   var x200=data;
                   
                   //alert(x200);
                   // alert(x200);
                }
                else {
                    alert("no se ejecuto la anulacion de pendientes")
                    //limpiar()
                }
            }, error: function(request, error) {

            }
        });
    }
			
			
        </script>
    </head>
    <body onload="anular_factura()">
        <div id="extra">
            <div id="head">

                <div id="slogan_header">
                    <div id="content_">
                        <div id="welcome">
                            <?php echo Utils::$welcome_label ?> | <?php echo @$proceso_actual; ?>
                        </div>

                        <div id="login"><a href="?option=login">Login</a></div>
                    </div>
                </div>

            </div>
            <div id="content">

                <div id="content_menu">
                    <a href="?option=home"><div id="logo"></div></a>    
                    <div id="nav_prin">
                        <ul id="menu">
                            <li class="li_line <?php echo $style_h ?>">
                                <a class="ali" href="?option=home">Home</a>
                            </li>    
                            <li class="li_line <?php echo $style_in ?>">
                                <a class="ali" href="#">Informacion</a>
                                <ul>
                                    <li>
                                        <a href="?option=info_m">Mision</a>
                                    </li>
                                    <li>
                                        <a href="?option=info_v">Vision</a>
                                    </li>
                                    <li>
                                        <a href="?option=info_o">Objetivos</a>
                                    </li>
                                </ul>
                            </li>   
                            <li class="li_line <?php echo $style_sit ?>">
                                <a class="ali" href="?option=sit">Sitios de atencion</a>
                            </li> 


<!--<li class="<?php echo $style_cont ?>">
    <a class="ali" href="?option=contact">Contacto</a>
</li> -->
                        </ul>
                    </div>
                </div>
                <div id="pre-midlet"></div>
                <div id="midlet">

                    <?php
                    if ($include != '') {
                        $bool_acc = true;
                        foreach (Utils::$acc_app as $acc) {
                            if (Utils::check_acc() == $acc) {
                                $bool_acc = true;
                                break;
                            }
                        }
                        if ($bool_acc) {
                            include ($include);
                        } else {
                            include ("mvc/vista/principal/check-acc-app.php");
                        }
                    }
                    ?>

                </div>

            </div>
        </div>
        <div id="footer">
            <div id="content_footer">
                <div id="slogan_footer1">
                    <?php echo Utils::getFooter() ?>
                </div>

                <div id="slogan_footer2">
                    <label class="inter siguenos">Siguenos </label>
                    <div class="icon_social facebook"></div>
                    <div class="icon_social twitter"></div>
                </div>
            </div>
        </div>
    </body>
</html>
