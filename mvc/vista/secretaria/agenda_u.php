<script>
var id_tab = 0;

function open_tab(id){
    id_tab = id;
}

function load_itinerarios_usuario(){
    
        var parameters = "opcion=2&id_usuario="+$("#id_usuario").val()+"&fecha="+$("#fecha").val()+"&acc=0";
            $.ajax({
                data: parameters, 
                type: "POST",
                url: "<?php echo Utils::$http_ruta ?>mvc/vista/ajax_citas.php", 
                success: function(data){
                    $("#content_itinerarios").html(data);
                    $( "#tabs" ).tabs();
                    window.setTimeout(function(){
                        $("#tab"+id_tab).click();
                    },1000);                    
                },error:function(request,error){

                }
            });
    
}

$(function(){
    
    $("#form_agenda_user").validate({  
            errorElement:"div",
            rules: {
                id_usuario:{required: true}
            },
            messages: {  
                id_usuario:{required:'Seleccione usuario'}                
            },
            submitHandler: function(form) {
                load_itinerarios_usuario();
            }
        });    
    
})

</script>

<div id="content_welcome" style="overflow-y:auto;" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
    <form class="form_agenda_user" name="form_agenda_user" id="form_agenda_user" >
                <table>
                
                <tbody><tr>
                    
                    <td valign="top">
                        <label>Usuario</label>
                        <br>
                        <?php 
        
    
                            $sql = "Select * from usuario as u 
                                            where u.id_usuario in (select distinct(id_usuario) from 
                                            usuario_proceso as up where up.estado='ACTIVO')
                                            order by u.registro_medico asc";

                            $result = $conexion->EjecutarQuery($sql);
                            $return = '<select class="input_txt" name="id_usuario" id="id_usuario">';
                            $return .= '<option value=""> [ SELECCIONAR ] </option>';
                            while($row = mysql_fetch_array($result)){
                                $return .= "<option value='".$row['id_usuario']."'>".$row['registro_medico']." - ".$row['nombre']." ".$row['apellido']."</option>";
                            }
                            $return .= '</select>';

                            echo $return;
                        ?>
                        
                    </td>
                    
                    
                    <td valign="top">
                        
                        <label>Fecha</label>
                        <br>
                        <input type="text" name="fecha" id="fecha" onclick="style_()" class="input_txt fecha" value="<?php echo Date('Y-m-d'); ?>">
                        
                        
                    </td>
                    
                    <td valign="top">
                        
                        <button >Aceptar</button>
                        
                    </td>
                    
                </tr>
                
            </tbody>
          </table>
    </form>
    <div class="content_itinerarios" id="content_itinerarios">

    </div>  
    
</div>

<?php

include ($GLOBALS['raiz'].'mvc/vista/secretaria/dialogs_agenda.php');

?>

