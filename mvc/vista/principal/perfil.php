<?php

$mes = @$_REQUEST['msg']!=''?@$_REQUEST['msg']:'';

if(isset($_REQUEST['update'])){
    
    if($_REQUEST['nombre']!='' && $_REQUEST['apellido']!='' && $_REQUEST['login']!='' && $_REQUEST['password']!=''){
    
        $sql = "update usuario set nombre = '".$_REQUEST['nombre']."',apellido = '".$_REQUEST['apellido']."',login = '".$_REQUEST['login']."',password = '".$_REQUEST['password']."' where id_usuario=".$_SESSION['id_usuario'];
        $conexion->EjecutarUpdate($sql);
        $mes = "(Cambios guardados)";
        
        $mes = '<div class="msg ui-state-highlight ui-corner-all" style="padding: 0 .7em;"> 
                <p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span> 
		Cambios guardados!.</div>
            </p>';
    }
    
}


$sql = "Select * from usuario where id_usuario = ".$_SESSION['id_usuario'];
$result = $conexion->EjecutarQuery($sql);
$acc = '';
while($row = mysql_fetch_array($result)){
    $acc = "?acc=".$row['password'];
    break;
}
?>

<style>
    #content_welcome {

        position: absolute;
        top:111px;
        font-size: 16px;
        background-color: rgba(0,0,0,0.5);
        padding: 8px;
        width: 380px;
        max-height: 454px;
        height: auto;
        left: 230px;
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


$(function(){
    
        $("#file").change(function(){
            var files = document.getElementById("file").files;
	    //comodin = files;
	    if(!files.length){
				//alert("n");
	    }else{
				//var url = "";
				
		try{
                    vUrl = window.webkitURL.createObjectURL(files[0]);
		}catch(e){
                    try{
                        vUrl = window.URL.createObjectURL(files[0]);
                    }catch(e){
			vUrl = "avatar_anonimo.png";
                    }
		}
		
                $("#file_firma").attr("src",vUrl);
				
            }
	});

            
        $("#form_user").validate({  
            errorElement:"div",
            rules: {  
                nombre:    {required: true},
                apellido:    {required: true},
                login:    {required: true},
                password: {required: true,remote: {url: "<?php echo Utils::$http_ruta; ?>mvc/vista/principal/check-login.php<?php echo $acc ?>", type: "get"}}
            },
            messages: {  
                nombre:{required:'El nombre es requerido'},
                apellido:{required:'El apellido es requerido'},
                login:{required:'El login es requerido'},
                password:{required:'El password es requerido',remote:'Cambiar password!'}                
            }  
        });  
        
       <?php
       
       if($_SESSION['rol']=='USUARIO'){
           
           ?>
                   
                   
        $.validator.addMethod("uploadFile", function(val, element) {
            var ext = $('#firma').val().split('.').pop().toLowerCase(); 
            var allow = new Array('gif','png','jpg','jpeg'); 
            if(jQuery.inArray(ext, allow) == -1) { 
                //document.getElementById("imgHolder").src= "product_small.jpg"
            return false 
            }else{
                //document.getElementById("imgHolder").src= "282116628.jpg"
                return true
            } 

        }, "File trype error");
                
        $("#form_firma").validate({
            errorElement:"div",
            rules:{file:{required:true,uploadFile:true}},
            messages:{file:{required:'La imagen es requerida',uploadFile:'Seleccione un tipo de imagen correcto'}}
        });
                
           <?PHP
           
       }
       
       ?>
});

</script>

<img id="imagen_bg" src="<?php echo $GLOBALS['raiz'] ?>mvc/vista/imagenes/pediatra.png" />
<div id="content_welcome">
    <br>
    <div class="welcome">
        Administracion Perfil 
    </div>
    <br>
    <div id="text_welcome">
        
        <form name="form_user" id="form_user" action="index.php?option=perfil&update" method="post">
        <table border="0" cellpading="0" cellspacing="0">            
            <tr>                
                <td>
                    <label>Nombre</label>
                    <br>
                    <input class="input_txt" type="text" name="nombre" id="nombre" placeholder="Nombre" value="<?php echo @$row['nombre'] ?>" />
                </td>
                <td>
                    <label>Apellido</label>
                    <br>
                    <input class="input_txt" type="text" name="apellido" id="apellido" placeholder="Apellido" value="<?php echo @$row['apellido'] ?>" />
                </td>                
            </tr>
            <tr>         
                <td>
                    <label>Login</label>
                    <br>
                    <input class="input_txt" type="text" name="login" id="login_" placeholder="Login" value="<?php echo @$row['login'] ?>" />
                </td>
                <td>
                    <label>Password</label>
                    <br>
                    <input class="input_txt" type="password" name="password" id="password" placeholder="Password" value="<?php echo @$row['password'] ?>" />
                </td>                
            </tr>
            </tr>
        </table>
        
        <button id="guardar">Guardar</button>
        </form>
        
        <?php
    
        if($_SESSION['rol']=='USUARIO'){

            ?>

        <br>
        <div class="welcome">
            Firma ( 320px X 100px )
        </div>
        <?php
            $firma = 'avatar_anonimo.png';
            if(@$row['firma']!=''){
                $firma = $row['firma'];
            }
            
        ?>  
        <img id="file_firma" src="<?php echo Utils::$http_ruta; ?>mvc/files/users/firmas/<?php echo @$firma; ?>" width="320" height="100" id="firma_digital" />
        <form id="form_firma" name="form_firma" action="../../mvc/vista/terapeuta/upload_firma.php" method="post" enctype="multipart/form-data">
            <label for="firma">Archivo:</label>
            <input class="input_txt" type="file" name="file" id="file"><br>
            <button  name="subir" id="subir" >Subir</button>
        </form>

            <?php 

        }

        ?>       

    </div>
    <br>
    <?php echo @$mes ?>
</div>
