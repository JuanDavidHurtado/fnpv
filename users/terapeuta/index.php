<?php
session_start();
date_default_timezone_set("America/Bogota");
if (isset($_REQUEST['errors'])) {
    // Reportar todos los errores de PHP
    error_reporting(E_ALL);
// Lo mismo que error_reporting(E_ALL);
    ini_set('error_reporting', E_ALL);
}

$GLOBALS['raiz'] = '../../';

include ($raiz . "mvc/control/utils.php");
include ($raiz . "mvc/persistencia/conexion.php");

$conexion = new Conexion();

foreach ($_REQUEST as $key => $input_arr) {
    $_REQUEST[$key] = addslashes(Utils::limpiarCadena($input_arr));
}

$bool_enter = true;
if (isset($_SESSION['id_usuario'])) {
    if ($_SESSION['rol'] != 'USUARIO') {
        $bool_enter = false;
    }
} else {
    $bool_enter = false;
}

if (!$bool_enter) {
    header('location: ../../?option=logout');
    exit;
}

if (isset($_REQUEST['option'])) {
    switch ($_REQUEST['option']) {
         case "sitemap":
            $proceso_actual = 'SITE MAP';
            $include = ("../../mvc/vista/terapeuta/sitemap.php");
            break;

			
			       //*formulas medicas SIDS**************/


          case "editar_formulas":
            $proceso_actual = 'FORMULA';
            $include = ("../../mvc/vista/terapeuta/formularios/medicamentos.php");
            $style_formula = "foco_menu";
            break;


        case "buscar_formulas":
            $proceso_actual = 'FORMULA';
            $include = ("../../mvc/vista/terapeuta/formula/buscar_formula.php");
            $style_formula = "foco_menu";
            break;

       case "listar_formulas":
            $proceso_actual = 'FORMULA';
            $include = ("../../mvc/vista/terapeuta/formula/listar_formulas.php");
            $style_formula = "foco_menu";
            break;

       case "mostrar_formulas":
            $proceso_actual = 'FORMULA';
            $include = ("../../mvc/vista/terapeuta/formula/mostrar_formula.php");
            $style_formula = "foco_menu";
            break;

/*otros*/

        case "ver_historia_":
            $proceso_actual = 'HISTORIA';
            $include = ("../../mvc/vista/terapeuta/ver_valoracion_init.php");
            $style_historia = "foco_menu";
            break;
        case "historia":
            $proceso_actual = 'HISTORIA';
            $include = ("../../mvc/vista/terapeuta/historia.php");
            $style_historia = "foco_menu";
            break;


        case "init_cita":
            $proceso_actual = 'CITA EN PROCESO';
            $include = ("../../mvc/vista/terapeuta/init_cita_.php");
            $style_agenda = "foco_menu";
            break;
        case "init_cita_":
            $proceso_actual = 'CITA EN PROCESO';
            $include = ("../../mvc/vista/terapeuta/init_cita.php");
            $style_agenda = "foco_menu";
            break;
        case "view_u":
            $proceso_actual = 'HISTORIAL CITAS USUARIO';
            $include = ("../../mvc/vista/admin/view_u.php");
            $style_agenda = "foco_menu";
            break;
        case "agenda":
            $proceso_actual = 'GESTOR';
            $include = ("../../mvc/vista/terapeuta/agenda_u.php");
            $style_agenda = "foco_menu";
            break;
        case "perfil":
            $proceso_actual = 'PERFIL';
            $include = ("../../mvc/vista/principal/perfil.php");
            $style_perfil = "foco_menu";
            break;
        case "ayuda":
            $proceso_actual = 'AYUDA';
            $include = ("../../mvc/vista/principal/ayuda.php");
            $style_ayuda = "foco_menu";
            break;
        default :
            header('location: index.php');
            break;
    }
} else {
    $proceso_actual = 'HOME';
    $style_h = "foco_menu";
    $include = ("../../mvc/vista/principal/home.php");
}


?>


<!DOCTYPE html>
<html>
    <head>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <link rel="stylesheet" href="../../include/jquery_ui2/themes/base/jquery.ui.all.css" media="screen"  type="text/css"/>
        <link rel="stylesheet" href="../../include/jquery_ui2/demos/demos.css"  type="text/css" media="screen" />
        <link rel="stylesheet" href="../../include/jquery_ui2/css/style.css"  type="text/css" media="screen" />
        <script type="text/javascript" src="../../include/js/jquery-1.4.4.js"></script>
        <script type="text/javascript" src="../../include/js/jquery.validate.min.js"></script>


        <!-- complementos jquery ui para los tabs -->
        <script type="text/javascript" src="../../include/jquery_ui2/ui/jquery.ui.core.js"></script>
        <script type="text/javascript" src="../../include/jquery_ui2/ui/jquery.ui.widget.js"></script>
        <script type="text/javascript" src="../../include/jquery_ui2/ui/jquery.ui.mouse.js"></script>
        <script type="text/javascript" src="../../include/jquery_ui2/ui/jquery.ui.tabs.js"></script>
        <!--  sortable -->
        <script type="text/javascript" src="../../include/jquery_ui2/ui/jquery.ui.sortable.js"></script>
        <!--  button -->
        <script type="text/javascript" src="../../include/jquery_ui2/ui/jquery.ui.button.js"></script>
        <!-- menu -->
        <script type="text/javascript" src="../../include/jquery_ui2/src/jquery-ui.js"></script>
        <script type="text/javascript" src="../../include/jquery_ui2/src/jquery-xqs-flyoutMenu.js"></script>
        <script type="text/javascript" src="../../include/jquery_ui2/src/jquery-xqs-menubar.js"></script>
        <!-- drotable-->
        <script type="text/javascript" src="../../include/jquery_ui2/ui/jquery.ui.position.js"></script>
        <script type="text/javascript" src="../../include/jquery_ui2/ui/jquery.ui.draggable.js"></script>
        <script type="text/javascript" src="../../include/jquery_ui2/ui/jquery.ui.droppable.js"></script>
        <script type="text/javascript" src="../../include/jquery_ui2/ui/jquery.ui.resizable.js"></script>
        <script type="text/javascript" src="../../include/jquery_ui2/ui/jquery.ui.dialog.js"></script>
        <!-- multiselect -->
        <link  type="text/css" href="../../include/jquery_ui2/css/jquery.multiselect.css" rel="stylesheet" media="screen"/>
        <script type="text/javascript" src="../../include/jquery_ui2/ui/minified/jquery-ui.min.js"></script>
        <script type="text/javascript" src="../../include/jquery_ui2/src/jquery.multiselect.js"></script>
        <script type="text/javascript" src="../../include/jquery_ui2/src/jquery.multiselect.filter.js"></script>

        <!-- Estilo local -->
        <link  type="text/css" href="<?php echo $GLOBALS['raiz'] ?>mvc/vista/css.css" rel="stylesheet" media="screen"/>
        <link  type="text/css" href="<?php echo $GLOBALS['raiz'] ?>mvc/vista/css_impri.css" rel="stylesheet" media="print" />
        <link id="page_favicon" href="<?php echo $GLOBALS['raiz'] ?>mvc/vista/imagenes/favicon.ico" rel="icon" type="image/x-icon" />
        <title><?php echo Utils::$name_company; ?></title>
        <script>
            $(function() {
                window.addEventListener('keydown', function(e) {
                    if (e.keyCode == 80 && e.ctrlKey) {
                        e.preventDefault();
                        try {
                            imprSelec("content_welcome", true);
                        } catch (e) {
                        }

                    }
                }, false);
            })

        </script>
        <script>

            function imprSelec(nombre, add, css_name)
            {
            
		if(!css_name){
		  css_name = "v";
		}
            
                var css = "";
                var xhtml = "";
                if (add) {
                    css = '<link  type="text/css" href="<?php echo $GLOBALS['raiz'] ?>mvc/vista/css_impri'+css_name+'.css" rel="stylesheet" />';
                    
                    xhtml += '<title>SIDS | <?PHP echo Utils::$http_ruta ?> | <?PHP  ?></title>';
                    
                    xhtml += '<image src="<?php echo $GLOBALS['raiz'] ?>mvc/vista/imagenes/logo2.png" width="100px" />';
                }

                var ficha = document.getElementById(nombre);
                var ventimp = window.open(' ', 'ventana1', 'popimpr');
                var content = '<link  type="text/css" href="<?php echo $GLOBALS['raiz'] ?>mvc/vista/css.css" rel="stylesheet" />' + css + xhtml + ficha.innerHTML;
                ventimp.document.write(content);
                ventimp.document.close();
                ventimp.print( );
                history.back();

            }
            $(function() {
                $("button").button();

            })

        </script>
    </head>
    <body>
        <div id="extra">
            <div id="head">

                <div id="slogan_header">
                    <div id="content_">
                        <div id="welcome">
                            <?php echo $_SESSION['rol_u'] ?>  |  <?php echo $_SESSION['nombre'] . " " . $_SESSION['apellido'] ?>  |  <?php echo @$proceso_actual ?>
                        </div>

                        <div id="login"><a href="../../?option=logout">Logout</a></div>
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

                            <!--<li class="li_line <?php echo $style_p ?>">
                                <a class="ali" href="?option=cntrl_p">Control Pacientes</a>
                            </li>-->  

                            <li class="li_line <?php echo $style_agenda ?>">
                                <a class="ali" href="#">Gestor</a>
                                <ul>
                                    <li>
                                        <a href="?option=agenda">Cronograma</a>
                                    </li>
                                    <li>
                                        <a href="?option=view_u">Historial Citas</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="li_line <?php echo $style_historia ?>">
                                <a class="ali" href="?option=historia">Historia</a>
                            </li>  
                              <li class="li_line <?php echo $style_formula ?>">
                                <a class="ali" href="?option=buscar_formulas">Buscar Formulas</a>
                            </li>
					
                            <li class="li_line <?php echo $style_perfil ?>">
                                <a class="ali" href="?option=perfil">Perfil</a>
                            </li>
                            <li class="li_line <?php echo $style_ayuda ?>">
                                <a class="ali" href="?option=ayuda">Ayuda</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div id="pre-midlet"></div>
                <div id="midlet">
					
                    <?php
                    if ($include != '') {
                        include ($include);
                    }
                    ?>
					<?php
					if(isset($_REQUEST['print'])){
						echo "<pre>";
						echo $include;
						echo "<br>";
						print_r($_REQUEST);
						echo "</pre>";
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
        <script>

            $(function() {

                $("#ui-datepicker-div").css('display', 'none');

            })

        </script>
    </body>

</html>
