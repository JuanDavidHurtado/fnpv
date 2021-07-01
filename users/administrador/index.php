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


        //informe pyp

         case "mostrar_pyp":
            $proceso_actual = 'INFORME PYP';
            $include = ("../../mvc/vista/terapeuta/informe/mostrar_informe_pyp.php");
            $style_pyp = "foco_menu";
            break;

        case "buscar_informe_2":
            $proceso_actual = 'INFORME';
            $include = ("../../mvc/vista/terapeuta/informe/buscar_informe_1.php");
            $style_informe = "foco_menu";
            break;



		   // informes contabilidad


        case "exportar":
            $proceso_actual = 'INFORME';
            $include = ("../../mvc/vista/terapeuta/informe/reporteexcel.php");
            $style_informe = "foco_menu";
            break;

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


              case "buscar_informe":
            $proceso_actual = 'INFORME';
            $include = ("../../mvc/vista/terapeuta/informe/buscar_informe.php");
            $style_informe = "foco_menu";
            break;

          case "mostrar_informe":
            $proceso_actual = 'INFORME';
            $include = ("../../mvc/vista/terapeuta/informe/mostrar_informe.php");
            $style_informe = "foco_menu";
            break;

// _------------------informe copagos-----------------------------------------------------------------------
      case "buscar_informe_c":
            $proceso_actual = 'COPAGO';
            $include = ("../../mvc/vista/terapeuta/informe_copago/buscar_informe.php");
            $style_informe_c = "foco_menu";
            break;

          case "mostrar_informe_c":
            $proceso_actual = 'COPAGO';
            $include = ("../../mvc/vista/terapeuta/informe_copago/mostrar_informe.php");
            $style_informe_c = "foco_menu";
            break;


        case "exportar_c":
            $proceso_actual = 'COPAGO';
            $include = ("../../mvc/vista/terapeuta/informe_copago/reporteexcel.php");
            $style_informe_c = "foco_menu";
            break;


// _------------------informe ridec-----------------------------------------------------------------------
      case "buscar_informe_r":
            $proceso_actual = 'COPAGO';
         $include = ("../../mvc/vista/terapeuta/informe_r/buscar_informe_citas.php");
            $style_informe_cx = "foco_menu";
            break;

          case "mostrar_informe_r":
            $proceso_actual = 'COPAGO';
            $include = ("../../mvc/vista/terapeuta/informe_r/mostrar_informe_citas.php");
            $style_informe_cx = "foco_menu";
            break;


        case "exportar_r":
            $proceso_actual = 'COPAGO';
            $include = ("../../mvc/vista/terapeuta/informe_r/reporteexcel.php");
            $style_informe_c = "foco_menu";
            break;


// //informe citas

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
        //modificar nota adicional haciendo ref a evolucion


       case "editar_nota":
            $proceso_actual = 'NOTA';
            $include = ("../../mvc/vista/terapeuta/evolucion/evolucion_1.php");
            $style_nota = "foco_menu";
            break;


        case "buscar_nota":
            $proceso_actual = 'NOTA';
            $include = ("../../mvc/vista/terapeuta/nota/buscar_nota.php");
            $style_nota = "foco_menu";
            break;

       case "listar_nota":
            $proceso_actual = 'NOTA';
            $include = ("../../mvc/vista/terapeuta/nota/listar_nota.php");
            $style_nota = "foco_menu";
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



        /*******************rips****************/
         case "rips_ac":
            $proceso_actual = 'RIPS';
            $include = ("../../mvc/rips/new_rip_ac.php");
            $style_rip = "foco_menu";
            break;

        case "rips_af":
            $proceso_actual = 'RIPS';
            $include = ("../../mvc/rips/new_rip_af.php");
            $style_rip = "foco_menu";
            break;

        case "rips_us":
            $proceso_actual = 'RIPS';
            $include = ("../../mvc/rips/new_rip_us.php");
            $style_rip = "foco_menu";
            break;

        case "rips_ap":
            $proceso_actual = 'RIPS';
            $include = ("../../mvc/rips/new_rip_ap.php");
            $style_rip = "foco_menu";
            break;
        
        case "rips_ct":
            $proceso_actual = 'RIPS';
            $include = ("../../mvc/rips/new_rip_ct.php");
            $style_rip = "foco_menu";
            break;


        //generadores de rip
          case "rips_ac_gen":
            $proceso_actual = 'RIPS';
            $include = ("../../mvc/rips/crear_ac_rip.php");
            $style_rip = "foco_menu";
            break;
         case "rips_af_gen":
            $proceso_actual = 'RIPS';
            $include = ("../../mvc/rips/crear_af_rip.php");
            $style_rip = "foco_menu";
            break;
         case "rips_us_gen":
            $proceso_actual = 'RIPS';
            $include = ("../../mvc/rips/crear_us_rip.php");
            $style_rip = "foco_menu";
            break;
         case "rips_ct_gen":
            $proceso_actual = 'RIPS';
            $include = ("../../mvc/rips/crear_ct_rip.php");
            $style_rip = "foco_menu";
            break;
         case "rips_ap_gen":
            $proceso_actual = 'RIPS';
            $include = ("../../mvc/rips/crear_ap_rip.php");
            $style_rip = "foco_menu";
            break;

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


            case "mostrar_factura_x":
            $proceso_actual = 'FACTURA';
            $include = ("../../mvc/vista/admin/factura/mostrar_factura_3.php");
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

        case "eps":
            $proceso_actual = 'EPS';
            $include = ("../../mvc/vista/admin/eps/eps_new.php");
            $style_eps = "foco_menu";
            break;
        case "listar_eps":
            $proceso_actual = 'EPS';
            $include = ("../../mvc/vista/admin/eps/listar_eps.php");
            $style_eps = "foco_menu";
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

        case "contratos":
            $proceso_actual = 'CONTRATO';
            $include = ("../../mvc/vista/admin/contratos_cups/contrato_new.php");
            $style_contrato = "foco_menu";
            break;
        case "listar_contratos":
            $proceso_actual = 'CONTRATO';
            $include = ("../../mvc/vista/admin/contratos_cups/listar_contratos.php");
            $style_contrato = "foco_menu";
            break;
        case "listar_contratos_cups":
            $proceso_actual = 'CONTRATO';
            $include = ("../../mvc/vista/admin/contratos_cups/listar_contratos_cups.php");
            $style_contrato = "foco_menu";
            break;

         case "agregar_cups":
            $proceso_actual = 'CONTRATO';
            $include = ("../../mvc/vista/admin/contratos_cups/add_cups.php");
            $style_contrato = "foco_menu";
            break;

        case "editar_cups":
            $proceso_actual = 'CONTRATO';
            $include = ("../../mvc/vista/admin/contratos_cups/add_cups.php");
            $style_contrato = "foco_menu";
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
                
                var content = '<link  type="text/css" href="<?php echo $GLOBALS['raiz'] ?>mvc/vista/css.css" rel="stylesheet" />';
                content += '<title>http://190.146.87.72/fnpv </title>';
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
                                        <a href="?option=agenda_p">Paciente</a>
                                    </li>
                                    <!--<li>
                                        <a href="?option=agenda_u">Usuario</a>
                                    </li>
                                    <li>
                                        <a href="?option=agenda_p">Paciente</a>
                                    </li>
                                    <li>
                                        <a href="#">Cronograma</a>
                                    </li>
                                     <li>
                                        <a href="?option=factura_lab">procedimiento</a>
                                    </li>
                                    -->
                                </ul>
                            </li> 

                          
                            <li class="li_line <?php echo $style_eps ?>">
                                <a class="ali" href="#">EPS</a>
                                <ul>
                                    <li>
                                        <a href="?option=eps">Crear</a>
                                    </li>
                                    <li>
                                        <a href="?option=listar_eps">Listar EPS</a>
                                    </li>
                                </ul>
                            </li>

                          

			 <li class="li_line <?php echo $style_rip ?>">
                                <a class="ali" href="#">Rip</a>
                                <ul>
                                    <li>
                                        <a href="?option=rips_ac">Generar Rip AC</a>
                                    </li>
                                    <li>
                                        <a href="?option=rips_af">Generar rip AF</a>
                                    </li>
                                    <li>
                                        <a href="?option=rips_ap">Generar rip AP</a>
                                    </li>
                                    <li>
                                        <a href="?option=rips_ct">Generar rip CT</a>
                                    </li>
                                    <li>
                                        <a href="?option=rips_us">Generar rip US</a>
                                    </li>
                                </ul>
                            </li> 

                            <li class="li_line <?php echo $style_contrato ?>">
                                <a class="ali" href="#">CONTRATOS</a>
                                <ul>
                                    <li>
                                        <a href="?option=contratos">Crear</a>
                                    </li>
                                    <li>
                                        <a href="?option=listar_contratos">Listar Contratos</a>
                                    </li>

                                </ul>
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

                             <li class="li_line <?php echo $style_historia ?>">
                                <a class="ali" href="?option=historia">Historia</a>
                            </li> 

                             <li class="li_line <?php echo $style_cups ?>">
                                <a class="ali" href="#">CUPS</a>
                                <ul>
                                    <li>
                                        <a href="?option=cups">Crear</a>
                                    </li>
                                    <li>
                                        <a href="?option=listar_cups">Listar cups</a>
                                    </li>

                                </ul>
                            </li>
                            
                           <li class="li_line <?php echo $style_informe_cx ?>">
                                <a class="ali" href="#">Informe citas</a>
                                <ul>
                                    <li>
                                         <a class="ali" href="?option=buscar_informe_r">Buscar Informe</a>
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

                             <li class="li_line <?php echo $style_informe ?>">
                                <a class="ali" href="#">Informes</a>
                                <ul>
                                    <li>
                                         <a class="ali" href="?option=buscar_informe">Buscar Informe</a>
                                    </li>
                                    <li>
                                        <a class="ali" href="?option=buscar_informe_3">Buscar Anuladas</a>
                                    </li>
                                </ul>
                            </li>

			   <li class="li_line <?php echo $style_informe_c ?>">
                                <a class="ali" href="#">Caja</a>
                                <ul>
                                    <li>
                                         <a class="ali" href="?option=buscar_informe_c">Buscar Informe</a>
                                    </li>                                   
                                </ul>
                            </li>

                             <li class="li_line <?php echo $style_informe_citas ?>">
                                <a class="ali" href="?option=buscar_informe_citas">Informe citas</a>
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

                $("#ui-datepicker-div").css('display', 'block');

            })

        </script>
    </body>
</html>
