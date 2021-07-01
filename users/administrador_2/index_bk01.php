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
    if ($_SESSION['rol'] != 'ADMINISTRADOR') {
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
        /****************************************************************/
        case "eps":
            $proceso_actual = 'EPS';
            $include = ("../../mvc/vista/admin/eps/control_eps.php");
            $style_eps = "foco_menu";
            break;
        case "list_eps":
            $proceso_actual = 'EPS';
            $include = ("../../mvc/vista/admin/eps/list_eps.php");
            $style_eps = "foco_menu";
            break;
        case "articulos":
            $proceso_actual = 'ARTICULOS';
            $include = ("../../mvc/vista/admin/inventario/control_articulos.php");
            $style_inventario = "foco_menu";
            break;
        case "entradas_i":
            $proceso_actual = 'ENTRADA INVENTARIO';
            $include = ("../../mvc/vista/admin/inventario/control_entradas.php");
            $style_inventario = "foco_menu";
            break;
        case "salidas_i":
            $proceso_actual = 'SALIDA INVENTARIO';
            $include = ("../../mvc/vista/admin/inventario/control_salidas.php");
            $style_inventario = "foco_menu";
            break;
        case "balance_i":
            $proceso_actual = 'BALANCE INVENTARIO';
            $include = ("../../mvc/vista/admin/inventario/control_balance.php");
            $style_inventario = "foco_menu";
            break;
        /****************************************************************/
        case "sitemap":
            $proceso_actual = 'SITE MAP';
            $include = ("../../mvc/vista/admin/sitemap.php");
            break;
        case "view_u":
            $proceso_actual = 'HISTORIAL CITAS USUARIO';
            $include = ("../../mvc/vista/admin/view_u.php");
            $style_user = "foco_menu";
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
        case "agenda":
            $proceso_actual = 'CRONOGRAMA AGENDA';
            $include = ("../../mvc/vista/secretaria/agenda.php");
            $style_agenda = "foco_menu";
            break;
        case "ver_paciente":
            $proceso_actual = 'VERFICACION PACIENTE';
            $include = ("../../mvc/vista/admin/new_paciente.php");
            $style_paciente = "foco_menu";
            break;
        case "listar_paciente":
            $proceso_actual = 'LISTA DE PACIENTES';
            $include = ("../../mvc/vista/admin/list_paciente.php");
            $style_paciente = "foco_menu";
            break;
        case "perfil":
            $proceso_actual = 'PERFIL';
            $include = ("../../mvc/vista/principal/perfil.php");
            $style_perfil = "foco_menu";
            break;
        case "backup":
            $proceso_actual = 'BACKUP';
            $include = ("../../mvc/vista/admin/backup.php");
            $style_backup = "foco_menu";
            break;
        case "backup_list":
            $proceso_actual = 'LISTA BACKUPS';
            $include = ("../../mvc/vista/admin/backup_list.php");
            $style_backup = "foco_menu";
            break;
        case "new_user":
            $proceso_actual = 'VERIFICACION USUARIO';
            $include = ("../../mvc/vista/admin/new_user.php");
            $style_user = "foco_menu";
            break;
        case "list_user":
            $proceso_actual = 'LISTA USUARIOS';
            $include = ("../../mvc/vista/admin/list_user.php");
            $style_user = "foco_menu";
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

        <link rel="stylesheet" href="../../include/jquery_ui2/themes/cupertino/jquery.ui.all.css"  type="text/css"/>
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

        <link rel="stylesheet" href="../../include/jquery_ui2/demos/demos.css" />
        <!-- Estilo local -->
        <link  type="text/css" href="<?php echo $GLOBALS['raiz'] ?>mvc/vista/css.css" rel="stylesheet" />
        <link id="page_favicon" href="<?php echo $GLOBALS['raiz'] ?>mvc/vista/imagenes/favicon.ico" rel="icon" type="image/x-icon" />
        <title><?php echo Utils::$name_company; ?></title>

        <!--
        
       
        -->

        <script>

            function imprSelec(nombre)
            {
                var ficha = document.getElementById(nombre);
                var ventimp = window.open(' ', 'ventana1', 'popimpr');
                var content = '<link  type="text/css" href="<?php echo $GLOBALS['raiz'] ?>mvc/vista/css.css" rel="stylesheet" />' + ficha.innerHTML;
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
                            <?php echo $_SESSION['rol'] ?>  |  <?php echo $_SESSION['nombre'] . " " . $_SESSION['apellido'] ?> | <?php echo @$proceso_actual; ?>
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

                            <li class="li_line <?php echo $style_user ?>">
                                <a class="ali" href="#">Usuarios</a>
                                <ul>
                                    <li>
                                        <a href="?option=new_user">Verificar</a>
                                    </li>
                                    <li>
                                        <a href="?option=list_user">Listar</a>
                                    </li>
                                </ul>
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
                                    </li>-->
                                </ul>
                            </li> 

                            <li class="li_line <?php echo $style_inventario ?>">
                                <a class="ali" href="#">Inventario</a>
                                <ul>
                                    <li>
                                        <a href="?option=articulos">Articulos</a>
                                    </li>
                                    <li>
                                        <a href="?option=entradas_i">Entradas</a>
                                    </li>
                                    <li>
                                        <a href="?option=salidas_i">Salidas</a>
                                    </li>
                                    <li>
                                        <a href="?option=balance_i">Balance</a>
                                    </li>
                                </ul>
                            </li>
                            
                            <li class="li_line <?php echo $style_eps ?>">
                                <a class="ali" href="#">EPS</a>
                                <ul>
                                    <li>
                                        <a href="?option=eps">Crear</a>
                                    </li>
                                    <li>
                                        <a href="?option=eps_list">Listar EPS</a>
                                    </li>
                                </ul>
                            </li>
                            
                            <li class="li_line <?php echo $style_backup ?>">
                                <a class="ali" href="#">Backup</a>
                                <ul>
                                    <li>
                                        <a href="?option=backup">Generar</a>
                                    </li>
                                    <li>
                                        <a href="?option=backup_list">Listar Backups</a>
                                    </li>
                                </ul>
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
