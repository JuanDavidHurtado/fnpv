
<style>
    .content_itinerarios {
        overflow-x: auto;
      
    }
</style>  

<div id="content_welcome" style="overflow-y:auto;">


    <div id="tabs">
        <ul>
            <?php
    
            $sql = "select * from dependencia where estado='0' ";    
            $result = $conexion->EjecutarQuery($sql);
            $array_row = array();
            
            while($row = mysql_fetch_array($result)){
                $array_row[] = $row;
            ?>

            <li><a href="#tabs-<?php echo $row['id_dependencia'] ?>"><?php echo $row['nombre'] ?></a></li>

            <?php


            }

            ?>
	</ul>
        <?php 
        
        foreach ($array_row as $row) {
                
        ?>

        <div id="tabs-<?php echo $row['id_dependencia'] ?>" class="content_tab" >
            
            <form class="form_agenda" name="form_agenda" id="form_agenda_<?php echo $row['id_dependencia'] ?>">
                <table>
                
                <tr>
                    
                    <td valign="top">
                        <input type="hidden" name="id" id="id" value="<?php echo $row['id_dependencia'] ?>" />
                        <label>Area de atencion</label>
                        <br>
                        <select  name="id_proceso" id="id_proceso_<?php echo $row['id_dependencia'] ?>" class="input_txt" onchange="load_id_usuario(this,<?php echo $row['id_dependencia'] ?>)" >
                            <option value=""> [ SELECCIONAR ] </option>
                            <?php
                                $sql_ = "Select * from proceso where id_dependencia='" . $row['id_dependencia'] . "' order by nombre asc";
                                $result_ = $conexion->EjecutarQuery($sql_);

                                while ($row_ = mysql_fetch_array($result_)) {
                                    $style_proceso = "";
                                    foreach ($array_id_procesos as $id_proceso) {
                                        if ($id_proceso == $row_['id_proceso']) {
                                            $style_proceso = " selected='selected' ";
                                            break;
                                        }
                                    }

                                    echo "<option value='" . $row_['id_proceso'] . "' $style_proceso >" . $row_['nombre'] . "</option>";
                                }


                            ?>


                        </select>
                        
                    </td>
                    
                    <td valign="top">
                        
                        <label>Usuario</label>
                        <br>
                        <div id="content_id_usuario_<?php echo $row['id_dependencia'] ?>">
                            <select name="id_usuario"  class="input_txt" disabled="true" >
                                <option value=""> [ SELECCIONAR ] </option>
                            </select>
                        </div>
                        
                    </td>
                    
                    <td valign="top">
                        
                        <label>Fecha</label>
                        <br>
                        <input type="text" name="fecha" id="fecha_<?php echo $row['id_dependencia'] ?>"  class="input_txt fecha" readonly="true" onclick="style_()" value="<?php echo Date('Y-m-d') ?>" />
                        
                        
                    </td>
                    
                    <td valign="top">
                        
                        <button>Aceptar</button>
                        
                    </td>
                    
                </tr>
                
            </table></form>
            
            <div class="content_itinerarios" id="content_itinerarios_<?php echo $row['id_dependencia'] ?>">
                
                
            </div>
            
            
        </div>
        
        <script>
        var comodin;
            $(function(){
                
                $("#form_agenda_<?php echo $row['id_dependencia'] ?>").validate({  
                    errorElement:"div",
                    rules: {
                        id_proceso:{required: true},
                        fecha:{required: true}
                    },
                    messages: {  
                        id_proceso:{required:'El Area es requerido'},
                        fecha:{required:'El rol es requerido'}

                    },
                    submitHandler: function(form) {
                        // some other code
                        // maybe disabling submit button
                        // then:
                        //load_itinerarios();
                        var id_f = $(form).attr('id');
                        var id_hidden = $("#"+id_f+' input:hidden').val();
                        var id_proceso = $("#"+id_f+' [name=id_proceso]').val();
                        var id_usuario = $("#"+id_f+' [name=id_usuario]').val();
                        var fecha = $("#"+id_f+' [name=fecha]').val();
                        
                        console.log(id_proceso+" "+id_usuario+" "+fecha);
                        
                        load_itinerarios(id_proceso,id_usuario,fecha,id_hidden)

                    }
                });
                
            })
        
        </script>

        <?php
    
        
        
        }

        ?>
			
    </div>
    
</div>

<?php

include ($GLOBALS['raiz'].'mvc/vista/secretaria/dialogs_agenda.php');

?>

