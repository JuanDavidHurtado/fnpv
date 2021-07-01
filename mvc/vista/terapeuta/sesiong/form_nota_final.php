<?php

if(isset($_REQUEST['guardar_nota_sesion']) && isset($_REQUEST['id_cita'])){
    
    $sql = "Update cita set nota='".strtoupper($_REQUEST['nota_sesion'])."' where id_cita=".$_REQUEST['id_cita'];
    @$_REQUEST['nota_s'] = $_REQUEST['nota_sesion'];
    $conexion->EjecutarQuery($sql);
    
}

?>
<script>

    $(function(){
            
        $("#form_nota_sesion").validate({
            errorElement:"div",
            rules:{
                nota_sesion:{required:true}
            },
            messages:{
                nota_sesion:{required:"Ingrese observacion para la sesion"}
            }
        }); 
        
        $("#close-form-nota").click(function(){
            $("#open-form-nota").show();
            $(this).hide();
            $("#content-form-nota").hide('slow');
        });
        
        $("#open-form-nota").click(function(){
            $("#close-form-nota").show();
            $(this).hide();
            $("#content-form-nota").show('slow');
        });
    
    });

</script>
<fieldset id="nota_sesion">
<legend align="left"> <div class="arrow-c" id="close-form-nota"></div> <div class="arrow-o" id="open-form-nota" ></div> <font>Observacion sesion</font></legend>
    <div id="content-form-nota">
    <?php 
    if(isset($_REQUEST['id_cita'])){
    ?>
    <form id="form_nota_sesion" name="form_nota_sesion" action="<?php echo @$action_form_nota_sesion ?>#nota_sesion" method="post">
        <label>Observacion</label>
        <br>
        <textarea id="nota_sesion" name="nota_sesion" class="input_txt_area" rows="3" cols="50"><?php echo @$_REQUEST['nota_s'] ?></textarea>
        <br>
        <button  name="guardar_nota_sesion" id="guardar_nota_sesion" >Guardar</button>
    </form><br>
    <?php
    }
    ?>
    <div id="content_notas">


        <?php
        $pagina = @$_REQUEST["pagina_n"];
        $registros = 5;

        if (!$pagina) {
            $inicio = 0;
            $pagina = 1;
        } else {
            $inicio = ($pagina - 1) * $registros;
        }

        $sql = "Select c.*,us.nombre,us.apellido from cita as c 
                        inner join usuario as us 
                        on c.id_usuario = us.id_usuario
                        where (c.estado='FINALIZADO' or c.estado='PROCESO') and c.nota <> '' and c.id_paciente='".@$_REQUEST['historia']."' ";

        $resultados = $conexion->EjecutarQuery($sql);
        $total_registros = mysql_num_rows($resultados);
        $sql_search = $sql . " ORDER BY c.fecha_hora_inicio DESC LIMIT $inicio, $registros ";
        $resultados = $conexion->EjecutarQuery($sql_search);
        $total_paginas = ceil($total_registros / $registros);


        echo "<table width='100%' border='0' cellpadding='0' cellspacing='0' class='data'>";
        echo "<tbody><tr class='t_head'>
                        <th valign='center' width='80px'>Sesion</th>
                        <th valign='center' width='150px'>Proceso</th>
                        <th valign='center' width='150px'>Profesional</th>
                        <th valign='center' width='90px'>Fecha</th>
                        <th valign='center'>Nota</th>
                      </tr></tbody>";
        $contador = 0;
        if ($total_registros) {
            $bool_style = true;
            while ($row_f = mysql_fetch_array($resultados)) {
                
                $sql_p = "Select * from proceso where id_proceso = ".$row_f['id_proceso'];
                $result = $conexion->EjecutarQuery($sql_p);
                $row_p = mysql_fetch_array($result);

                if ($bool_style) {
                    $style_file_table = "row1";
                } else {
                    $style_file_table = "row2";
                }
                $bool_style = !$bool_style;


                echo "<tr class='$style_file_table'>";
                
                $sesion = $row_f['id_cita'];
                if($row_f['estado']=='FINALIZADO' && ($row_f['id_usuario']==$_SESSION['id_usuario'])){
                    $sesion = "<a href='index.php?option=init_cita&acc_c=".$row_f['id_cita']."'>".$row_f['id_cita']."</a>";
                }

                echo "<td align='right'>" . $sesion . "</td>";
                echo "<td align='right'>" . $row_p['nombre'] . "</td>";
                echo "<td align='right'>" . $row_f['nombre']." ". $row_f['apellido'] . "</td>";
                echo "<td align='right'>" . $row_f['fecha'] . "</td>";
                echo "<td align='right'>" . $row_f['nota'] . "</td>";

                echo "</tr>";
            }
        } else {
            echo "<font color='darkgray'>(sin resultados)</font>";
        }
        echo "</table>";

        if ($total_registros) {

            echo "<center>";

            if (($pagina - 1) > 0) {
                echo "<a href='$action_form_nota_sesion&pagina_n=" . ($pagina - 1) . "&$term_link#nota_sesion'>< Anterior</a> ";
            }

            for ($i = 1; $i <= $total_paginas; $i++) {
                if ($pagina == $i)
                    echo "<b>" . $pagina . "</b> ";
                else
                    echo "<a href='$action_form_nota_sesion&pagina_n=$i&$term_link#nota_sesion'>$i</a> ";
            }

            if (($pagina + 1) <= $total_paginas) {
                echo " <a href='$action_form_nota_sesion&pagina_n=" . ($pagina + 1) . "&$term_link#nota_sesion'>Siguiente ></a>";
            }

            echo "</center>";
        }
        ?>


    </div>
    </div>
</fieldset>