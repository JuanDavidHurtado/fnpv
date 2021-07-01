<style>

    #content_itinerarios{

        width: 795px;
        height: 494px;
        overflow: auto;

    }

    #content_itinerarios_user_ {
        display: none;
    }

    #content_itinerarios_user {
        width: 795px;
        height: 494px;
        overflow: auto;
    }

</style>
<script>
   
   var fecha_ = '';
   var id_proceso_ = '';
   
   
   function afirmar_cita(){
       
       var parameters = "opcion=9&id_cita="+id_cita_+"&estado=PROCESO";
        $.ajax({
            data: parameters, 
            type: "POST",
            url: "<?php echo Utils::$http_ruta ?>mvc/vista/ajax.php", 
            success: function(data){
                //$("#fecha").val(fecha_);
                //$("#id_proceso").val(id_proceso_);
                add_agenda();
                $( "#dialog-programar" ).dialog('close');
            },error:function(request,error){
            }
        });
       
   }
   
   function cancelar_cita(){
       
       var parameters = "opcion=9&id_cita="+id_cita_+"&estado=CANCELADO";
        $.ajax({
            data: parameters, 
            type: "POST",
            url: "<?php echo Utils::$http_ruta ?>mvc/vista/ajax.php", 
            success: function(data){
                //$("#fecha").val(fecha_);
                //$("#id_proceso").val(id_proceso_);
                add_agenda();
                $( "#dialog-programar" ).dialog('close');
            },error:function(request,error){
            }
        });
       
   }
   
    function add_agenda(){
        fecha = $("#fecha").val();
        id_proceso_ = $("#id_proceso").val();
        var parameters = "opcion=8&fecha="+$("#fecha").val()+"&id_proceso="+$("#id_proceso").val();
        $.ajax({
            data: parameters, 
            type: "POST",
            url: "<?php echo Utils::$http_ruta ?>mvc/vista/ajax.php", 
            success: function(data){
                $("#content_itinerarios_user_").html(data);
                $("#content_itinerarios_user_").show('slow');
            },error:function(request,error){
            }
        });
    }


    function load_id_usuario(obj){
        var valor = $("#"+obj.id).val();
    
        if(valor!=''){
            var parameters = "opcion=3&id_proceso="+valor;
            $.ajax({
                data: parameters, 
                type: "POST",
                url: "<?php echo Utils::$http_ruta ?>mvc/vista/ajax.php", 
                success: function(data){
                    $("#content_id_usuario").html(data);
                },error:function(request,error){

                }
            });
        }
    }

    function style_(){
        $("#ui-datepicker-div").css('z-index','100000');
    }
    
    function clear_form_paciente(){
         $("#identificacion_p").val("");
         $("#tipo_id").val("");
         $("#historia").val("");
         $("#edad").val("");
         $("#nombre1").val("");
         $("#nombre2").val("");
         $("#apellido1").val("");
         $("#apellido2").val("");
         $("#fecha_n").val("");
         $("#sexo").val("");
         $("#domicilio").val("");
         $("#telefono").val("");
         $("#id_eps").val("");
         $("#id_regimen").val("");
    }


    var id_cita_ = 0;
    function verificar_cita(identificacion,id_cita){
        id_cita_ = id_cita;
        $("#identificacion_p").val(identificacion);
        $( "#dialog-programar" ).dialog('open');
        verificar_paciente();
    }


    function verificar_paciente(){
    
    
        var parameters = "opcion=6&identificacion="+$("#identificacion_p").val();
        $.ajax({
            data: parameters, 
            dataType: "json", 
            type: "POST",
            url: "<?php echo Utils::$http_ruta ?>mvc/vista/ajax.php", 
            success: function(data){
                object_ajax = data;
                if(data.bool){
                    
                    $("#tipo_id").val(data.tipo_id);
                    $("#historia").val(data.historia);
                    $("#edad").val(data.edad);
                    $("#nombre1").val(data.nombre1);
                    $("#nombre2").val(data.nombre2);
                    $("#apellido1").val(data.apellido1);
                    $("#apellido2").val(data.apellido2);
                    $("#fecha_n").val(data.fecha_n);
                    $("#sexo").val(data.sexo);
                    $("#domicilio").val(data.domicilio);
                    $("#telefono").val(data.sexo);
                    $("#id_eps").val(data.id_eps);
                    $("#id_regimen").val(data.id_regimen);
                    
                }else{
                    
                   clear_form_paciente();
                    
                }
                
            },error:function(request,error){

            }
        });  
    
    
    }

var object_ajax = null;
    $(function(){


        $("#identificacion_p").change(function(){
            verificar_paciente();
        });
        
        

        $( "#fecha" ).datepicker({
            dateFormat:"yy-mm-dd"
        });
        
        
        $("#form_agenda").validate({  
            errorElement:"div",
            rules: {
                /*id_proceso:{required: true},
                fecha:{required: true}*/
            },
            messages: {  
                id_proceso:{required:'El Area es requerido'},
                fecha:{required:'El rol es requerido'}
                
            },
            submitHandler: function(form) {
                // some other code
                // maybe disabling submit button
                // then:
                add_agenda();
            }
        }); 
        
        $("#new_cita").validate({  
            errorElement:"div",
            rules: {
                identificacion_p:{required: true,remote: {url: "<?php echo Utils::$http_ruta; ?>mvc/vista/principal/check-identificacion-paciente.php", type: "get"}}
            },
            messages: {  
                identificacion_p:{required:'La identificaion es requerida',remote:'Verificar Identificacion'}
                
            },
            submitHandler: function(form) {
            
                guardar_cita();
                //alert('Save');
                
            }
        }); 


        $( "#dialog-programar" ).dialog({
            resizable: true,
            modal:true,
            autoOpen: false,
            show: "blind",
            hide: "explode",
            width:750,
            height:400,
            close:function(){
                id_cita_ = 0;
                clear_form_paciente();
            },
            buttons: {
                Verificar: function() {
                    afirmar_cita();                    
                },
                Cancelar: function() {
                    cancelar_cita();
                }
            }
        });
        

        add_agenda();

    })


</script>

<div id="content_welcome" style="overflow-y:auto;">

    <div id="content_add">
        <h2>Citas <?php echo @$mes_lis; ?></h2> 
        <form id="form_agenda" name="form_agenda">

            <table border="0" cellspacing="0" cellpading="0">
                <tr>
                    <td valign="top">

                        <label>Area de atencion</label>
                        <br>
                        <?php
                        
                            $sql = "Select DISTINCT(d.id_dependencia),d.nombre 
                                        from dependencia as d inner join proceso as p 
                                             on d.id_dependencia = p.id_dependencia 
                                        inner join usuario_proceso as up 
                                            on p.id_proceso = up.id_proceso
                                        where up.id_usuario = ".$_SESSION['id_usuario']." and up.estado='ACTIVO'
                                        order by d.nombre  asc";
                        
                        ?>
                        <select  name="id_proceso" id="id_proceso" class="input_txt" onchange="load_id_usuario(this)" >
                            <option value=""> [ SELECCIONAR ] </option>
                            <?php
                            $result = $conexion->EjecutarQuery($sql);
                            while ($row = mysql_fetch_array($result)) {
                                echo "<optgroup label='" . $row['nombre'] . "'>";

                                $sql_ = "Select * from proceso where id_dependencia='" . $row['id_dependencia'] . "' and id_proceso in (select id_proceso from usuario_proceso where id_usuario = ".$_SESSION['id_usuario']." and estado='ACTIVO') order by nombre asc";
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


                                echo "</optgroup>";
                            }
                            ?>


                        </select>

                    </td>
                    <td valign="top">
                        <label>Fecha</label>
                        <br>
                        <input type="text" name="fecha" id="fecha" class="input_txt" readonly="true" onclick="style_()" value="<?php echo Date('Y-m-d') ?>" />                 
                    </td>
                    <td valign="center">
                        <button>Buscar</button>                    
                    </td>
                </tr>
            </table>

        </form>

    </div>
    <div id="content_itinerarios_user_">

    </div>
</div>


<div id="dialog-programar" title="Programar Cita">
    <form action="#" id="new_cita" name="new_cita">

        <table border="0" cellpading="0" cellspacing="0">            
            <tbody><tr>                
                    <td valign="top">
                        <label>Ide Paciente</label>
                        <br>
                        <input type="text" name="identificacion_p" id="identificacion_p" class="input_txt" readonly="readonly" />
                    </td>
                    <td valign="top">
                        <label>Tipo</label>
                        <br>
                        <input type="text" class="input_txt" name="tipo_id" id="tipo_id" readonly="readonly" placeholder="Tipo Identificacion..." />
                    </td>
                    <td valign="top">
                        <label>Historia</label>
                        <br>
                        <input class="input_txt" type="text" name="historia" id="historia" readonly="readonly" placeholder="Historia..." />
                    </td>
                    <td valign="top">
                        <label>Edad</label>
                        <br>
                        <input class="input_txt" type="text" name="edad" id="edad" readonly="readonly" placeholder="Edad..." />
                    </td>                             
                </tr>
                <tr>

                    <td>
                        <label>Primer nombre</label>
                        <br>
                        <input class="input_txt" type="text" name="nombre1" id="nombre1" placeholder="Primer nombre..." readonly="readonly">                    
                    </td>
                    <td>
                        <label>Segundo nombre</label>
                        <br>
                        <input class="input_txt" type="text" name="nombre2" id="nombre2" placeholder="Segundo nombre..." readonly="readonly">
                    </td>                
                    <td>
                        <label>Primer apellido</label>
                        <br>
                        <input class="input_txt" type="text" name="apellido1" id="apellido1" placeholder="Primmer apellido..." readonly="readonly">
                    </td>                
                    <td>
                        <label>Segundo apellido</label>
                        <br>
                        <input class="input_txt" type="text" name="apellido2" id="apellido2" placeholder="Identificacion..." readonly="readonly">
                    </td>

                </tr>
                <tr>

                    <td>
                        <label>Fecha nacimiento</label>
                        <br>
                        <input class="input_txt" type="text" readonly="readonly" name="fecha_n" id="fecha_n" placeholder="Fecha nacimiento..." readonly="readonly">
                    </td>
                    <td>
                        <label>Sexo</label>
                        <br>
                        <input class="input_txt" name="sexo" id="sexo" type="text" readonly="readonly" placeholder="Sexo..." />
                            
                    </td>
                    <td>
                        <label>Domicilio</label>
                        <br>
                        <input class="input_txt" type="text" name="domicilio" id="domicilio" placeholder="Domicilio..." readonly="readonly" placeholder="Domicilio..." />
                    </td>
                    <td>
                        <label>Telefono</label>
                        <br>
                        <input class="input_txt" type="text" name="telefono" id="telefono" placeholder="Telefono..." readonly="readonly" placeholder="Telefono..." />
                    </td>


                </tr>
                
                <tr>
                   
                    <td>
                        <label>REGIMEN</label>
                        <br>
                        <input type="text" class="input_txt" name="id_regimen" id="id_regimen" readonly="readonly" placeholder="Regimen..." />
                    </td>
                    <td>
                        <div class="l_eps">
                            <label>EPS</label>
                            <br>
                            <div id="c_eps">
                                <input type="text" class="input_txt" name="id_eps" id="id_eps" readonly="readonly" placeholder="EPS..." />
                            </div>
                        </div>
                    </td>
                    <td>
                        <!--<div class="l_eps">
                            <label>Tipo afiliacion</label>
                            <br>
                            <input type="text" class="input_txt" name="tipoafiliacion" id="tipoafiliacion" readonly="readonly" placeholder="Tipo afiliacion..." />
                        </div>-->
                    </td>
                    
                     <td></td>

                </tr>
            </tbody></table>

    </form>
</div>