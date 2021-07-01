<?php
session_start();
date_default_timezone_set("America/Bogota");
$GLOBALS['raiz'] = '../../';

include ($raiz . "mvc/control/utils.php");
include ($raiz . "mvc/persistencia/conexion.php");

$conexion = new Conexion();
foreach ($_REQUEST as $key => $input_arr) {
    $_REQUEST[$key] = addslashes(Utils::limpiarCadena($input_arr));
}

$bool_enter = true;
if (isset($_SESSION['id_usuario'])) {
    if ($_SESSION['rol'] != 'AUXILIAR') {
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

	// facturas
          case "facturas_hoy":
            $proceso_actual = 'FACTURA';
            $include = ("../../mvc/vista/admin/factura/listar_facturas_hoy.php");
            $style_factura = "foco_menu";
            break;

        case "facturas_re":
            $proceso_actual = 'FACTURA';
            $include = ("../../mvc/vista/admin/factura/buscar_facturas_re.php");
            $style_factura = "foco_menu";
            break;

           case "facturas_fecha":
            $proceso_actual = 'FACTURA';
            $include = ("../../mvc/vista/admin/factura/buscar_facturas_fecha.php");
            $style_factura = "foco_menu";
            break;


          case "mostrar_factura":
            $proceso_actual = 'FACTURA';
            $include = ("../../mvc/vista/admin/factura/mostrar_factura.php");
            $style_factura = "foco_menu";
            break;

         case "detalle_factura":
            $proceso_actual = 'FACTURA';
            $include = ("../../mvc/vista/admin/factura/guardar_factura.php");
            $style_factura = "foco_menu";
            break;

         case "buscar_usuario":
            $proceso_actual = 'FACTURA';
            $include = ("../../mvc/vista/admin/factura/verificar_paciente.php");
            $style_factura = "foco_menu";
            break;

         case "listar_factura":
            $proceso_actual = 'FACTURA';
            $include = ("../../mvc/vista/admin/factura/listar_facturas.php");
            $style_factura = "foco_menu";
            break;

            case "listar_factura_re":
            $proceso_actual = 'FACTURA';
            $include = ("../../mvc/vista/admin/factura/listar_facturas_1.php");
            $style_factura = "foco_menu";
            break;

         case "busca_usuario_factura":
            $proceso_actual = 'FACTURA';
            $include = ("../../mvc/vista/admin/factura/buscar_usuario_factura.php");
            $style_factura = "foco_menu";
            break;

         case "factura_lab":
            $proceso_actual = 'FACTURA';
            $include = ("../../mvc/vista/admin/factura/buscar_laboratorio.php");
            $style_factura = "foco_menu";
            break;

        case "listar_facturas":
            $proceso_actual = 'FACTURA';
            $include = ("../../mvc/vista/admin//factura/listar_facturas.php");
            $style_factura = "foco_menu";
            break;
        //formula medica


        case "buscar_formulas":
            $proceso_actual = 'FORMULA';
            $include = ("../../mvc/vista/terapeuta/formula/buscar_formula.php");
            $style_formula = "foco_menu";
            break;

       case "listar_formulas":
            $proceso_actual = 'FORMULA';
            $include = ("../../mvc/vista/terapeuta/formula/listar_formulas_1.php");
            $style_formula = "foco_menu";
            break;

       case "mostrar_formulas":
            $proceso_actual = 'FORMULA';
            $include = ("../../mvc/vista/terapeuta/formula/mostrar_formula.php");
            $style_formula = "foco_menu";
            break;

        // historia

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

// informe
        case "buscar_informe_3":
            $proceso_actual = 'INFORME';
            $include = ("../../mvc/vista/terapeuta/informe/buscar_informe_3.php");
            $style_informe = "foco_menu";
            break;

          case "mostrar_informe_3":
            $proceso_actual = 'INFORME';
            $include = ("../../mvc/vista/terapeuta/informe/mostrar_informe_3.php");
            $style_informe = "foco_menu";
            break;


// //informe citas
         case "buscar_informe_citas":
            $proceso_actual = 'INFORME';
            $include = ("../../mvc/vista/terapeuta/informe/buscar_informe_citas.php");
            $style_informe_citas = "foco_menu";
            break;

          case "mostrar_informe_citas":
            $proceso_actual = 'INFORME';
            $include = ("../../mvc/vista/terapeuta/informe/mostrar_informe_citas.php");
            $style_informe_citas = "foco_menu";
            break;


        // cups
       case "cups":
            $proceso_actual = 'CUPS';
            $include = ("../../mvc/vista/admin/cups/cups_new.php");
            $style_eps = "foco_menu";
            break;
        case "listar_cups":
            $proceso_actual = 'CUPS';
            $include = ("../../mvc/vista/admin/cups/listar_cups.php");
            $style_eps = "foco_menu";
            break;

        //---------------------
         case "sitemap":
            $proceso_actual = 'SITE MAP';
            $include = ("../../mvc/vista/secretaria/sitemap.php");
            break;
        case "ver_paciente":
            $proceso_actual = 'VERIFICACION PACIENTE';
            $include = ("../../mvc/vista/admin/new_paciente.php");
            $style_paciente = "foco_menu";
            break;
        case "listar_paciente":
            $proceso_actual = 'LISTA DE PACIENTES';
            $include = ("../../mvc/vista/admin/list_paciente.php");
            $style_paciente = "foco_menu";
            break;
        case "agenda_u":
            $proceso_actual = 'AGENDA USUARIO';
            $include = ("../../mvc/vista/secretaria/agenda_u.php");
            $style_agenda = "foco_menu";
            break;
        case "agenda_p":
            $proceso_actual = 'AGENDA PACIENTE';
            $include = ("../../mvc/vista/secretaria/agenda_p.php");
            $style_agenda = "foco_menu";
            break;
        case "agendas":
            $proceso_actual = 'CRONOGRAMA AGENDA';
            $include = ("../../mvc/vista/secretaria/agenda.php");
            $style_agenda = "foco_menu";
            break;
        case "agenda":
            $proceso_actual = 'CRONOGRAMA AGENDA';
            $include = ("../../mvc/vista/secretaria/agenda_s.php");
            $style_agenda = "foco_menu";
            break;
        case "perfil":
            $proceso_actual = 'PERFIL';
            $include = ("../../mvc/vista/principal/perfil.php");
            $style_perfil = "foco_menu";
            break;
        case "user":
            $include = ("../../mvc/vista/admin/control_p.php");
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

        <link rel="stylesheet" href="../../include/jquery_ui2/themes/base/jquery.ui.all.css"  type="text/css"/>
        <link rel="stylesheet" href="../../include/jquery_ui2/demos/demos.css"  type="text/css"/>
        <link rel="stylesheet" href="../../include/jquery_ui2/css/style.css"  type="text/css"/>
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
        <link  type="text/css" href="../../include/jquery_ui2/css/jquery.multiselect.css" rel="stylesheet" />
        <script type="text/javascript" src="../../include/jquery_ui2/ui/minified/jquery-ui.min.js"></script>
        <script type="text/javascript" src="../../include/jquery_ui2/src/jquery.multiselect.js"></script>
        <script type="text/javascript" src="../../include/jquery_ui2/src/jquery.multiselect.filter.js"></script>

        <!-- Estilo local -->
        <link  type="text/css" href="<?php echo $GLOBALS['raiz'] ?>mvc/vista/css.css" rel="stylesheet" />
        <link id="page_favicon" href="<?php echo $GLOBALS['raiz'] ?>mvc/vista/imagenes/favicon.ico" rel="icon" type="image/x-icon" />
        <title><?php echo Utils::$name_company; ?></title>



        <script>

            function imprSelec(nombre)
            {
                var ficha = document.getElementById(nombre);
                var ventimp = window.open(' ', 'ventana1', 'popimpr');
                
                var content = '<link  type="text/css" href="<?php echo $GLOBALS['raiz'] ?>mvc/vista/css.css" rel="stylesheet" />';
                content += '<title>http://190.146.87.72/siempree - SIEMPREE IPS - SIDS </title>';
                content += ficha.innerHTML;
                
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
                            <?php echo $_SESSION['rol'] ?>  |  <?php echo $_SESSION['nombre'] . " " . $_SESSION['apellido'] ?>  |  <?php echo @$proceso_actual; ?>
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


                            <li class="li_line <?php echo $style_paciente ?>">
                                <a class="ali" href="#">Pacientes</a>
                                <ul>
                                    <li>
                                        <a href="?option=ver_paciente">Verificar</a>
                                    </li>
                                    <li>
                                        <a href="?option=listar_paciente">Listar</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="li_line <?php echo $style_agenda ?>">
                                <a class="ali" href="#">Agenda</a>
                                <ul>
                                    <li>
                                        <a href="?option=agenda">Cronograma</a>
                                    </li>
                                    <li>
                                        <a href="?option=agenda_u">Usuario</a>
                                    </li>
                                    <li>
                                        <a href="?option=agenda_p">Paciente</a>
                                    </li>
                                    <!--<li>
                                        <a href="#">Cronograma</a>
                                    </li>
                                     <li>
                                        <a href="?option=factura_lab">procedimiento</a>
                                    </li>
                                    -->
                                </ul>
                            </li>
                                <li class="li_line <?php echo $style_historia ?>">
                                <a class="ali" href="?option=historia">Historia</a>
                            </li>  

                          
                            
                            <li class="li_line <?php echo $style_factura ?>">
                                <a class="ali" href="#">FACTURACION</a>
                                <ul>
                                    <li>
                                        <a href="?option=busca_usuario_factura">Facturar Paciente</a>
                                    </li>

                                    <li>
                                        <a href="?option=facturas_fecha">Buscar Facturas</a>
                                    </li>
                                      <li>
                                        <a href="?option=facturas_re">Refacturar</a>
                                    </li>
                                    <li>
                                        <a href="?option=factura_lab">procedimiento</a>
                                    </li>
                                   
                                </ul>
                            </li>

                              <li class="li_line <?php echo $style_informe_citas ?>">
                                <a class="ali" href="?option=buscar_informe_citas">Informe citas</a>
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
