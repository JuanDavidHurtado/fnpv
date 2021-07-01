<style>
    
     #text_welcome {
        position: relative;
        left: 22px;
    }
    
    .dependencia_{
        display: none;        
    }

    
    
</style>

<?php

if(!isset($_REQUEST['verificar']) && !isset($_REQUEST['acc'])){

?>
<style>
    #content_welcome {

        position: absolute;
        top:170px;
        font-size: 16px;
        padding: 8px;
        width: 215px;
        height: 206px;
        left: 270px;
        
        background-color: rgba(0,0,0,0.5);
        border: 1px solid #000;

    }

   
</style>

<script>
    $(function(){
        
        $("#form_user").validate({  
            errorElement:"div",
            rules: {  
                identificacion:{required: true, number: true}
            },
            messages: {  
                identificacion:{required:'Ingrese identificacion a verificar ...'}                
            }  
        }); 
        
    })
</script>

<img id="imagen_bg" src="<?php echo $GLOBALS['raiz'] ?>mvc/vista/imagenes/pediatra.png" />
<div id="content_welcome">
    <br>
    <div class="welcome">
        Verificar paciente
    </div>
    <br>
    <div id="text_welcome">
        <form name="form_user" id="form_user" action="index.php?option=new_user&verificar" method="post">
        <input type="hidden" value="<?php echo $hidden_val; ?>" name="acc" name="acc" />
        <table border="0" cellpading="0" cellspacing="0" >            
            <tr>                
                <td>
                    <label>Identificacion</label>
                    <br>
                    <input class="input_txt" type="text" name="identificacion" id="identificacion" placeholder="Identificacion..." />
                </td>
                             
            </tr>
        </table>
        
        <button id="guardar">Verificar</button>
        </form>
    </div>
</div>

<?php

}else{
    
?>
    <style>
    #content_welcome {

        position: absolute;
        top:130px;
        font-size: 16px;
        background-color: rgba(0,0,0,0.5);
        padding: 8px;
        width: 380px;
        max-height: 455px;
        left: 200px;
        border: 1px solid #000;

    }

    #text_welcome {
        position: relative;
        left: 22px;
    }
    
    .dependencia_{
        display: none;        
    }

</style>

<script>

function load_acc(){
    
    <?php
    
    if(isset($_REQUEST['acc'])){
        
		$hidden_val = "new";
		$sql = "select * from usuario where identificacion='".$_REQUEST['identificacion']."' ";
		$result = $conexion->EjecutarQuery($sql);
		
                ?>
                     $("#identificacion").val('<?php echo $_REQUEST['identificacion']; ?>');
                <?php
                
                
		while($row = mysql_fetch_array($result)){
			
                    $hidden_val = "edit";
                    
			$acc = "?acc=".$row['password'];
                        $ident = "?acc=".$_REQUEST['identificacion'];
			$id_usuario = $row['id_usuario'];
                        
			?>
			
                        
                        
			$("#acc").val('<?php echo $row['id_usuario']; ?>');
                       
			$("#nombre").val('<?php echo $row['nombre']; ?>');
			$("#apellido").val('<?php echo $row['apellido']; ?>');
			$("#registro_medico").val('<?php echo $row['registro_medico']; ?>');
			$("#id_rol").val('<?php echo $row['id_rol']; ?>');
			$("#login_").val('<?php echo $row['login']; ?>');
			$("#password").val('<?php echo $row['password']; ?>');
			$("#estado").val('<?php echo $row['estado']; ?>');
                        $("#id_tipo_usuario").val('<?php echo $row['id_tipo_usuario']; ?>');
			$("#tel").val('<?php echo $row['tel']; ?>');
                        $("#email").val('<?php echo $row['email']; ?>');
			
			<?php
			
			if($row['id_rol']==3){
				?>
				 $(".dependencia_").show("slow");
				<?php
			}	
			
			break;
		}
		
    }else{
        $hidden_val = "new";
        ?>
            $("#identificacion").val('<?php echo $_REQUEST['identificacion']; ?>');
        <?php
    } 
    
    ?>
    
}

function validate_multiselect(){
    
    if($("#id_rol").val()=='3'){
        
        var result = "";
            $('#id_dependencia option:selected').each(function(i, item){ 
            result += $(this).val() + ", ";
            });
                    
        if(result!=''){
            $("#dependencia").val($("#id_dependencia").val());

            return true;
        }else{
            alert("Seleccione Area");
            return false;
        }
        
    }else{
        return true;
    }
    
}

$(function(){
    
        $("#id_dependencia").multiselect({
            'multiple': true
        });
    
        $("#id_rol").change(function(){
            
            if($("#id_rol").val()=='3'){
                
                $(".dependencia_").show("slow");
                
            }else{
                
                //$("#id_dependencia").val('');
                
                $(".dependencia_").hide("slow");
                
            }
            
            
        });
        
        
   $.validator.addMethod('notNull', function(value, element) {
        return false;
    }, 'Please select an option.');
        

        
        $("#form_user").validate({  
            errorElement:"div",
            rules: {
                identificacion:{required: true,remote: {url: "<?php echo Utils::$http_ruta; ?>mvc/vista/principal/check-identificacion.php<?php echo $ident ?>", type: "get"}},
                nombre:{required: true},
                apellido:{required: true},
                id_rol:{required: true},
                login:{required: true},
                password:{required: true,remote: {url: "<?php echo Utils::$http_ruta; ?>mvc/vista/principal/check-login.php<?php echo $acc ?>", type: "get"}},
                registro_medico:{required:function(){ if($("#id_rol").val()==3){return true}else{return false} }},
                id_tipo_usuario:{required:function(){ if($("#id_rol").val()==3){return true}else{return false} }}
            },
            messages: {  
                identificacion:{required:'La identificacion es requerida',remote:'Cambiar identificacion!'},
                nombre:{required:'El nombre es requerido'},
                apellido:{required:'El apellido es requerido'},
                id_rol:{required:'El rol es requerido'},
                login:{required:'El login es requerido'},
                password:{required:'El password es requerido',remote:'Cambiar password!'},
                registro_medico:{required:'El registro es requerido'},
                id_tipo_usuario:{required:'El tipo de usuario es requerido'}
                
            },
            submitHandler: function(form) {
            // some other code
            // maybe disabling submit button
            // then:
                if(validate_multiselect()){
                    form.submit();
                }
                
            }
        }); 

        
       
       load_acc();
    
});

</script>

<img id="imagen_bg" src="<?php echo $GLOBALS['raiz'] ?>mvc/vista/imagenes/pediatra.png" />
<div id="content_welcome">
    <div class="welcome">
        Administracion Usuarios
    </div>
    <div id="text_welcome">
        <form name="form_user" id="form_user" action="index.php?option=list_user&create" method="post">
        <input type="hidden" value="<?php echo $hidden_val; ?>" name="type_acc" name="type_acc" />
		<input type="hidden" value="" name="acc" id="acc" />
        <table border="0" cellpading="0" cellspacing="0">      
            <tr>                
                <td valign="top">
                    <label>Identificacion</label>
                    <br>
                    <input class="input_txt" type="text" name="identificacion" id="identificacion" placeholder="Identificacion"  />
                </td>
                <td valign="top">
                    <div class="dependencia_">
                        
                        <label>Tipo usuario</label>
                        <br>
                        <select class="input_txt" type="text" name="id_tipo_usuario" id="id_tipo_usuario">
                            
                            <option value=""> [ SELECCIONAR ] </option>
                            <?php 
                            
                            $sql = "Select * from tipo_usuario";
                            $result = $conexion->EjecutarQuery($sql);
                            
                            while($row = mysql_fetch_array($result)){
                                $style_s = "";
                                if($row['id_tipo_usuario']==@$id_tipo_usuario){
                                    $style_s = "selected";
                                }
                                echo "<option value='".$row['id_tipo_usuario']."' $style_s >".$row['nombre']."</option>";
                                
                            }
                            
                            ?>
                            
                        </select>

                        
                    </div>
                </td>                
            </tr>
            <tr>                
                <td valign="top">
                    <label>Nombre</label>
                    <br>
                    <input class="input_txt" type="text" name="nombre" id="nombre" placeholder="Nombre" />
                </td>
                <td valign="top">
                    <label>Apellido</label>
                    <br>
                    <input class="input_txt" type="text" name="apellido" id="apellido" placeholder="Apellido" />
                </td>                
            </tr>
            <tr>                
                <td valign="top">
                    <label>Rol</label>
                    <br>
                    <select class="input_txt" name="id_rol" id="id_rol">
                        <option value="">[ SELECCIONAR ]</option>
                        <?PHP
                            $sql = "Select * from rol";
                            $result = $conexion->EjecutarQuery($sql);
                            while($row = mysql_fetch_array($result)){
                                
                                echo "<option value='".$row['id_rol']."'>".$row['nombre']."</option>";
                            }
                        ?>
                    </select>
                </td>
                <td valign="top">
                    <div class="dependencia_">
                    <label>Area</label>
                    <br>
                    <?php
                    
                            $array_id_procesos = array();
                            if($hidden_val=='edit'){
                                $sql = "SELECT * FROM  `usuario_proceso` WHERE id_usuario =  '$id_usuario' and estado='ACTIVO' ";
                                $result = $conexion->EjecutarQuery($sql);
                                
                                while($row = mysql_fetch_array($result)){
                                    $array_id_procesos[] = $row['id_proceso'];
                                }
                                
                            }
                    
                    ?>
                    <select class="input_txt" name="id_dependencia" id="id_dependencia" multiple="multiple" title="Dependencias">
                        <?PHP
                                                   
                        
                            $sql = "Select * from dependencia where estado='0' order by nombre asc";
                            $result = $conexion->EjecutarQuery($sql);
                            while($row = mysql_fetch_array($result)){
                                echo "<optgroup label='".$row['nombre']."'>";
                                
                                $sql_ = "Select * from proceso where id_dependencia='".$row['id_dependencia']."' and estado='0' order by nombre asc";
                                $result_ = $conexion->EjecutarQuery($sql_);
                                
                                while($row_ = mysql_fetch_array($result_)){
                                    $style_proceso = "";
                                    foreach ($array_id_procesos as $id_proceso) {
                                        if($id_proceso == $row_['id_proceso']){
                                            $style_proceso = " selected='selected' ";
                                            break;
                                        }
                                    }
                                    
                                    echo "<option value='".$row_['id_proceso']."' $style_proceso >".$row_['nombre']."</option>";
                                    
                                }
                                
                                
                                echo "</optgroup>";
                            }
                        ?>
                    </select>
                    <input type="hidden" name="dependencia" id="dependencia" value="" />
                    </div>
                </td>                
            </tr>
            <tr>   
                <td valign="top">
                    <div class="">
						<div class="dependencia_n">
						<label>Estado</label>
						<br>
						<select class="input_txt" name='estado' id='estado' >
							<option value="activo">Activo</option>
							<option value="inactivo">Inactivo</option>
						</select>
						</div>
                    </div>
                </td> 
                <td valign="top">
                    <div class="dependencia_">
                    <label>Resolucion</label>
                    <br>
                    <input class="input_txt" type="text" name="registro_medico" id="registro_medico" placeholder="Registro Medico" />
                    </div>
                </td>                
            </tr>
            <tr>
                <td valign="top">
                    <label>Telefono</label>
                    <br>
                    <input class="input_txt" type="text" name="tel" id="tel" placeholder="Telefono" />
                </td>
                <td valign="top">
                    <label>Correo</label>
                    <br>
                    <input class="input_txt" type="text" name="email" id="email" placeholder="Correo" />
                </td>                
            </tr>
            <tr>
                <td valign="top">
                    <label>Login</label>
                    <br>
                    <input class="input_txt" type="text" name="login" id="login_" placeholder="Login" />
                </td>
                <td valign="top">
                    <label>Password</label>
                    <br>
                    <input class="input_txt" type="password" name="password" id="password" placeholder="Password" />
                </td>                
            </tr>
        </table>
        
        <button id="guardar">Guardar</button>
        </form>
    </div>
</div>

<?php

}

?>
