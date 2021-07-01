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
        height: 540px;
        overflow: auto;
    }

</style>
<script>
   
   var id_cita_ = 0;
   var estado_ = '';
  
   function cancel(id_cita,id_proceso,id_usuario,id_sesion,fecha){
       id_proceso_ = id_proceso;
       id_usuario_ = id_usuario;
       id_sesion_ = id_sesion;
       fecha_ = fecha; 
       
       id_cita_ = id_cita;
       estado_ = "CANCELADO";
       $("#dialog-cancelar").dialog('open');
   }
   
   function afirmar_cita(){
       
       var parameters = "opcion=9&id_cita="+id_cita_+"&estado="+estado_+'&id_agenda='+id_agenda_;
        $.ajax({
            data: parameters, 
            type: "POST",
            url: "<?php echo Utils::$http_ruta ?>mvc/vista/ajax.php", 
            success: function(data){
                //$("#fecha").val(fecha_);
                //$("#id_proceso").val(id_proceso_);
                //add_agenda();
                $( "#dialog-cancelar" ).dialog('close');
            },error:function(request,error){
            }
        });
       
   }
   
   function guardar_cita(){
       
       var parameters = "opcion=7&id_proceso="+id_proceso_+"&id_usuario="+id_usuario_+"&id_paciente="+object_ajax.historia+"&fecha="+fecha_+"&id_sesion="+id_sesion_;
            $.ajax({
                data: parameters, 
                type: "POST",
                url: "<?php echo Utils::$http_ruta ?>mvc/vista/ajax.php", 
                success: function(data){
                    
                    $( "#dialog-programar" ).dialog('close');
                    add_agenda(id_proceso_,id_usuario_,id_sesion_,fecha_);
                    
                },error:function(request,error){

                }
            });
       
       
   }
   
   var id_proceso_ = 0;
   var id_usuario_ = 0;
   var id_sesion_ = 0;
   var fecha_ = '';
    function save_agenda(id_proceso,id_usuario,id_sesion,fecha){
        id_proceso_ = id_proceso;
        id_usuario_ = id_usuario;
        id_sesion_ = id_sesion;
        fecha_ = fecha; 
        $( "#dialog-programar" ).dialog('open'); 
    }

    function add_agenda(id_proceso,id_usuario,id_sesion,fecha,hora){
        fecha_ = fecha;
        var parameters = "opcion=5&id_proceso="+id_proceso+"&id_usuario="+id_usuario+"&id_sesion="+id_sesion+"&fecha="+fecha+"&hora="+hora;
        $.ajax({
            data: parameters, 
            type: "POST",
            url: "<?php echo Utils::$http_ruta ?>mvc/vista/ajax.php", 
            success: function(data){
                $("#content_itinerarios_user_").html(data);
                $("#content_add").hide('slow');
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
    
    function load_itinerarios(){
        //content_itinerarios
        var parameters = "opcion=4&id_proceso="+$("#id_proceso").val()+"&id_usuario="+$("#id_usuario").val()+"&fecha="+$("#fecha").val();
        console.log('pp: '+parameters)
        $.ajax({
            data: parameters, 
            type: "POST",
            url: "<?php echo Utils::$http_ruta ?>mvc/vista/ajax.php", 
            success: function(data){
                $("#content_itinerarios").html(data);
            },error:function(request,error){

            }
        });    
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
                load_itinerarios();
                
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


        $("#dialog-cancelar").dialog({
            resizable: false,
            modal:true,
            autoOpen:false,
            show: "blind",
            hide: "explode",
            width:350,
            height:200,
            close:function(){
                
            },
            buttons: {
                Aceptar: function() {
                    afirmar_cita();
                    add_agenda(id_proceso_,id_usuario_,id_sesion_,fecha_);
                },
                Cancelar: function() {
                    $( this ).dialog( "close" );
                }
            }
        })

        $( "#dialog-programar" ).dialog({
            resizable: true,
            modal:true,
            autoOpen: false,
            show: "blind",
            hide: "explode",
            width:750,
            height:400,
            close:function(){
                clear_form_paciente();
            },
            buttons: {
                Verificar: function() {
                    if(object_ajax!=null){
                        if(object_ajax.bool){
                            $("#new_cita").submit();
                        }
                    }
                    
                },
                Cancelar: function() {
                    $( this ).dialog( "close" );
                }
            }
        });
        

    })


</script>

<div id="content_welcome" style="overflow-y:auto;">

    <div id="content_add">
        <h2>Agregar itinerario <?php echo @$mes_lis; ?></h2> 
        <form id="form_agenda" name="form_agenda">

            <table border="0" cellspacing="0" cellpading="0">
                <tr>
                    <td valign="top">

                        <label>Area de atencion</label>
                        <br>
                        <select  name="id_proceso" id="id_proceso" class="input_txt" onchange="load_id_usuario(this)" >
                            <option value=""> [ SELECCIONAR ] </option>
                            <?php
                            $sql = "Select * from dependencia order by nombre asc";
                            $result = $conexion->EjecutarQuery($sql);
                            while ($row = mysql_fetch_array($result)) {
                                echo "<optgroup label='" . $row['nombre'] . "'>";

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


                                echo "</optgroup>";
                            }
                            ?>


                        </select>

                    </td>
                    <td valign="top">
                        <label>Terapeuta</label>
                        <br>
                        <div id="content_id_usuario">
                            <select name="id_usuario" id="id_usuario" class="input_txt" disabled="true" >
                                <option value=""> [ SELECCIONAR ] </option>
                            </select>
                        </div>

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

        <div id="content_itinerarios">





        </div>
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
                        <input type="text" name="identificacion_p" id="identificacion_p" class="input_txt" />
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

<div id="dialog-cancelar" title="Cancelar Cita">
    
    
    <p>
        
        Desea cancelar esta cita ?
        
    </p>
    
    
</div>