
<script type="text/javascript">

    function imprSelec3(nombre)
            {
                var ficha = document.getElementById(nombre);
                var ventimp = window.open(' ', 'ventana1', 'popimpr');
                var content = '<link  type="text/css" href="<?php echo $GLOBALS['raiz'] ?>mvc/vista/css.css" rel="stylesheet" />' + ficha.innerHTML;

              ventimp.document.write(content);
                ventimp.document.close();
                ventimp.print( );
                history.back();

            }



</script>

<div id="evo_print">
  <br>
  <br>
  <center><B>Registro de Evoluciones</B> 
 <br>
  <br>
  <link  type="text/css" href="../../../../mvc/vista/css.css" rel="stylesheet" />
<?php
include ("../../../../mvc/control/utils.php");
include ("../../../../mvc/persistencia/conexion.php");



$action_form_vi="../../../../mvc/vista/terapeuta/evolucion/evolucion_por_profesional.php";


 $id_u=$_REQUEST['id_usuario'];

 $fec=$_REQUEST['fecha'];

 $hi=$_REQUEST['id_historia'];

 $term_link="id_usuario=".$id_u."&fecha=".$fec."&id_historia=".$hi;

?>


 <?php
            $pagina = @$_REQUEST["pagina_vi"];
            $registros = 15;

            if (!$pagina) {
                $inicio = 0;
                $pagina = 1;
            } else {
                $inicio = ($pagina - 1) * $registros;
            }
//and vi.fecha='" . @$_REQUEST['fecha'] . "' 

           $sql = "Select c.estado,c.id_usuario,vi.*,us.nombre,us.apellido
                        from valoracion_inicial  as vi inner join usuario as us
                        on vi.id_usuario = us.id_usuario
                        inner join cita as c on vi.id_cita = c.id_cita
                        where vi.historia='" . @$_REQUEST['id_historia'] . "' and vi.fecha='" . @$_REQUEST['fecha'] . "'  and vi.id_usuario= " . @$_REQUEST['id_usuario'] ;

            $resultados = $conexion->EjecutarQuery($sql);
            $total_registros = mysql_num_rows($resultados);
           $sql_search = $sql . " ORDER BY vi.fecha DESC LIMIT $inicio, $registros ";
            $resultados = $conexion->EjecutarQuery($sql_search);

            $resultados25 = $conexion->EjecutarQuery($sql_search);
            $total_paginas = ceil($total_registros / $registros);

            $row_f2 = mysql_fetch_array($resultados25);

          echo "Profesional: ". $row_f2['nombre'] . " " . $row_f2['apellido'];
          echo "<br /><br />";

            echo "<table width='70%' border='0' cellpadding='0' cellspacing='0' class='data'>";
            echo "<tbody><tr class='t_head'>
                        <th valign='center' width='90px'>FECHA</th>
                       
                         <th valign='center'>EVOLUCION</th>

                      </tr></tbody>";
            $contador = 0;
            if ($total_registros) {
                $bool_style = true;
                while ($row_f = mysql_fetch_array($resultados)) {


                    if ($bool_style) {
                        $style_file_table = "row1";
                    } else {
                        $style_file_table = "row2";
                    }
                    $bool_style = !$bool_style;

                    echo "<tr class='$style_file_table'>";

                    $id_inicial=$row_f['id_vinicial'];

                      $sql3 = "Select * from evolucion where id_vinicial = " . $id_inicial;
                      $result3 = $conexion->EjecutarQuery($sql3);
                      $row23 = mysql_fetch_array($result3);
                     


                        echo "<td align='center' width='40%'>" . $row_f['fecha'] . "</td>";                     
                       echo "<td align='right' width='60%'>" . $row23['evolucion'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<font color='darkgray'>(sin resultados)</font>";
            }
            echo "</table> <br />";

            if ($total_registros) {

                echo "<center>";

                if (($pagina - 1) > 0) {
                    echo "<a href='$action_form_vi?pagina_vi=" . ($pagina - 1) . "&$term_link#'>< Anterior</a> ";
                }

                for ($i = 1; $i <= $total_paginas; $i++) {
                    if ($pagina == $i)
                        echo "<b>" . $pagina . "</b> ";
                    else
                        echo "<a href='$action_form_vi?pagina_vi=$i&$term_link#'>$i</a> ";
                }

                if (($pagina + 1) <= $total_paginas) {
                    echo " <a href='$action_form_vi?pagina_vi=" . ($pagina + 1) . "&$term_link#'>Siguiente ></a>";
                }

                echo "</center>";
            }
            ?>


  </center>
  <a href='#' onClick='imprSelec3("evo_print")' >Imprimir</a>
  </div>