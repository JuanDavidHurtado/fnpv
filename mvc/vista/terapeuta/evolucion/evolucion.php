<?php
$id_cita_ = 0;
$bool_have = true;
$id_evolucion = 'new';
$evolucion = '';
$sql = "SELECT * from evolucion WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `flujo` = '" . $_REQUEST['flujo'] . "' and id_formulario='0' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_cita_ = $row['id_cita'];
    $id_evolucion = $row['id_evolucion'];
    $evolucion = $row['evolucion'];
    $nota_extra = $row['nota_extra'];
    break;
}

/* * ************** */

if ($id_cita_ == 0) {
    $bool_have = false;
    $sql = "SELECT * from evolucion WHERE `id_cita` = '" . $_REQUEST['id_cita'] . "' and id_formulario='0' ";
    $result_have = $conexion->EjecutarQuery($sql);
    while ($row2x = mysql_fetch_array($result_have)) {
        $bool_have = true;
        break;
    }
}

$button = '';
if ($id_cita_ > 0 || !$bool_have) {
    ?>
    <script>

        $(function() {

            $("#close-evolucion<?php echo $_REQUEST['flujo']; ?>").click(function() {
                $("#open-evolucion<?php echo $_REQUEST['flujo']; ?>").show();
                $(this).hide();
                $("#content-evolucion<?php echo $_REQUEST['flujo']; ?>").hide('slow');
            });

            $("#open-evolucion<?php echo $_REQUEST['flujo']; ?>").click(function() {
                $("#close-evolucion<?php echo $_REQUEST['flujo']; ?>").show();
                $(this).hide();
                $("#content-evolucion<?php echo $_REQUEST['flujo']; ?>").show('slow');
            });

        });

    </script>

<script>




        function abrirVentana(id_usuario,fecha,historia) {

        //var fecha=stringParse(fecha);

            var parametros="?id_usuario="+id_usuario+"&fecha="+encodeURIComponent(fecha)+"&id_historia="+historia;

            var url="<?php  echo $GLOBALS['raiz'] . 'mvc/vista/terapeuta/evolucion/evolucion_por_profesional.php'; ?>"+parametros;
            window.open(url, "nuevo", "directories=no, location=no, menubar=no, scrollbars=yes, statusbar=no, tittlebar=no, width=500, height=500");

                // limpiartodo();

        }

</script>
    <fieldset id="evolucion<?php echo $_REQUEST['flujo']; ?>">
        <legend align="left"> <div class="arrow-c" id="close-evolucion<?php echo $_REQUEST['flujo']; ?>"></div> <div class="arrow-o" id="open-evolucion<?php echo $_REQUEST['flujo']; ?>" ></div> <font><?php echo $_REQUEST['label_evolution'] ?></font></legend>
        <div id="content-evolucion<?php echo $_REQUEST['flujo']; ?>">
            <?php
            $button = '';
            if (isset($_REQUEST['id_cita'])) {
                if (intval($_REQUEST['id_cita']) == intval($id_cita_) || !$bool_have) {
                    $button = '<button name="guardar_evolucion" id="guardar_evolucion" >Guardar</button>';
                }
            } else {
                $readonly = " readonly='readonly' ";
            }
            ?>
            <form id="form_evolucion" name="form_evolucion" action="<?php echo @$action_form_evolucion; ?>#evolucion<?php echo $_REQUEST['flujo']; ?>" method="post">

                <input type="hidden" id="id_evolucion" name="id_evolucion" value="<?php echo @$id_evolucion ?>" />
                <input type="hidden" id="flujo" name="flujo" value="<?php echo @$_REQUEST['flujo'] ?>" />
                <input type="hidden" id="not_id_formulario" name="not_id_formulario" value="0" />

                <textarea id="evolucion" name="evolucion" cols="110" rows="5"><?php echo @$evolucion; ?></textarea>
                <br>
                Nota Adicional:
                <br>
                  <textarea id="nota_extra" name="nota_extra" cols="110" rows="5"><?php echo @$nota_extra; ?></textarea>
                <br>
             
                <?php echo @$button ?>

            </form>
            <br>
        </div>
    </fieldset>

 <?php



 
  $action_form_evolucion=$_REQUEST['$action_form_evolucion'];

 $id_u=$_REQUEST['id_usuario'];

 $fec=$_REQUEST['fecha'];

 $hi=$_REQUEST['id_historia'];

 $term_link="id_usuario=".$id_u."&fecha=".$fec."&id_historia=".$hi;

 $action_form_vi="../../../../mvc/vista/terapeuta/evolucion/evolucion_por_profesional.php";
 
            $pagina = @$_REQUEST["pagina_vi"];
            $registros = 10;

            if (!$pagina) {
                $inicio = 0;
                $pagina = 1;
            } else {
                $inicio = ($pagina - 1) * $registros;
            }


            $sql = "Select c.estado,c.id_usuario,vi.*,us.nombre,us.apellido
                        from valoracion_inicial  as vi inner join usuario as us
                        on vi.id_usuario = us.id_usuario
                        inner join cita as c on vi.id_cita = c.id_cita
                        where vi.historia='" . @$_REQUEST['historia'] . "' group by vi.fecha";

            $resultados = $conexion->EjecutarQuery($sql);
            $total_registros = mysql_num_rows($resultados);
            $sql_search = $sql . " ORDER BY vi.fecha DESC LIMIT $inicio, $registros ";
            $resultados = $conexion->EjecutarQuery($sql_search);
            $total_paginas = ceil($total_registros / $registros);


            echo "<table width='100%' border='0' cellpadding='0' cellspacing='0' class='data'>";
            echo "<tbody><tr class='t_head'>
                        <th valign='center' width='90px'>Fecha de Evoluciones</th>
                        <th valign='center' width='150px'>Profesional</th>

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

                    $sesion = $row_f['id_cita'];
                    if ($row_f['estado'] == 'FINALIZADO' && ($row_f['id_usuario'] == $_SESSION['id_usuario'])) {
                        $sesion = "<a href='index.php?option=init_cita&acc_c=" . $row_f['id_cita'] . "'>" . $row_f['id_cita'] . "</a>";
                    }

                        echo "<td align='center' onclick='abrirVentana(".$row_f['id_usuario'].",\"".$row_f['fecha']."\",".$_REQUEST['historia'].")' >" . $row_f['fecha'] . "</td>";
                      echo "<td align='right'>" . $row_f['nombre'] . " " . $row_f['apellido'] . "</td>";

                    echo "</tr>";
                }
            } else {
                echo "<font color='darkgray'>(sin resultados)</font>";
            }
            echo "</table>";
            
       if ($total_registros) {

                echo "<center>";

                if (($pagina - 1) > 0) {
                    echo "<a href='$action_form_evolucion&pagina_vi=" . ($pagina - 1) . "&$term_link#evolucion'>< Anterior</a> ";
                }

                for ($i = 1; $i <= $total_paginas; $i++) {
                    if ($pagina == $i)
                        echo "<b>" . $pagina . "</b> ";
                    else
                        echo "<a href='$action_form_evolucion&pagina_vi=$i&$term_link#evolucion'>$i</a> ";
                }

                if (($pagina + 1) <= $total_paginas) {
                    echo " <a href='$action_form_evolucion&pagina_vi=" . ($pagina + 1) . "&$term_link#evolucion'>Siguiente ></a>";
                }

                echo "</center>";
            }
            ?>

    <?php
} else {
    $readonly = " readonly='readonly' ";
}
?>
