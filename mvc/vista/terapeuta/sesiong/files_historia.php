<?php
if (isset($_REQUEST['subir'])) {
    include ($GLOBALS['raiz'] . 'mvc/vista/terapeuta/upload_files.php');
}

if(isset($_REQUEST['del_file'])){
    
    $sql = "Delete from file_historia where id_file_historia = ".$_REQUEST['acc_file'];
    $result = $conexion->EjecutarQuery($sql);
    
}

?>
<script>

function opener_pdf(file){
    var url = "<?php echo Utils::$http_ruta."mvc/files/users/files/"; ?>"+file;
    var html_ = "<embed src='"+url+"#toolbar=0&navpanes=0&scrollbar=0&zoom=50' width='1050' height='500'></embed>";  
    $("#content-file-pdf").html(html_);
    $("#dialog-pdf").dialog('open');
}

    $(function(){
        
        $.validator.addMethod("uploadFile", function(val, element) {
            var ext = $('#file').val().split('.').pop().toLowerCase(); 
            var allow = new Array('doc','docx','pdf'); 
            if(jQuery.inArray(ext, allow) == -1) { 
                return false 
            }else{
                return true
            } 

        }, "File trype error");
    
        $("#form_file").validate({
            errorElement:"div",
            rules:{
                file:{required:true,uploadFile:true},
                nota:{required:true}
            },
            messages:{
                file:{required:'El archivo es requerido',uploadFile:'Seleccione un documento de tipo pdf'},
                nota:{required:"Ingrese observacion para describir archivo"}
            }
        }); 
        
        
        $("#dialog-pdf").dialog({
            position: ['top', 30],
            resizable: false,
            modal:true,
            autoOpen:false,
            show: "blind",
            hide: "explode",
            width:1080,
            height:650,
            open:function(){
                window.setTimeout(function(){
                    $("#dialog-pdf").dialog({position: ['top', 30]});
                },800);
                
            },
            close:function(){
                $("#content-file-pdf").html('');
                window.location.replace('#content_files_historia');
            },
            buttons: {
                Cerrar: function() {
                    $( this ).dialog( "close" );
                }
            }
        });
        
        $("#close-form-files").click(function(){
            $("#open-form-files").show();
            $(this).hide();
            $("#content-form-files").hide('slow');
        });
        
        $("#open-form-files").click(function(){
            $("#close-form-files").show();
            $(this).hide();
            $("#content-form-files").show('slow');
        });
    
    });

</script>
<fieldset id="content_files_historia">
    <legend align="left"><div class="arrow-c" id="close-form-files"></div> <div class="arrow-o" id="open-form-files" ></div><font>Archivos</font></legend>
    <div id="content-form-files">
    <form id="form_file" name="form_file" action="<?php echo @$action_form_file ?>#content_files_historia" method="post" enctype="multipart/form-data">

        <label>Seleccione el archivo asignado a la historia <?php echo @$msg ?></label>
        <br>
        <input type="file" name="file" id="file" />
        <br>
        <label>Observacion</label>
        <br>
        <textarea id="nota" name="nota" class="input_txt_area" rows="3" cols="50"></textarea>
        <br>
        <button  name="subir" id="subir" >Subir</button>

    </form><br>

    <div id="content_files">


        <?php
        $pagina = @$_REQUEST["pagina"];
        $registros = 5;

        if (!$pagina) {
            $inicio = 0;
            $pagina = 1;
        } else {
            $inicio = ($pagina - 1) * $registros;
        }

        $sql = "Select fh.*,us.nombre as p_nombre, us.apellido as p_apellido 
                        from file_historia as fh 
                        inner join usuario as us
                        on fh.id_usuario = us.id_usuario
                        where fh.historia=" . $_REQUEST['historia'];

        $resultados = $conexion->EjecutarQuery($sql);
        $total_registros = mysql_num_rows($resultados);
        $sql_search = $sql . " ORDER BY fecha DESC LIMIT $inicio, $registros ";
        $resultados = $conexion->EjecutarQuery($sql_search);
        $total_paginas = ceil($total_registros / $registros);


        echo "<table width='100%' border='0' cellpadding='0' cellspacing='0' class='data'>";
        echo "<tbody><tr class='t_head'>
                        <th valign='center' width='100px'>File</th>
                        <th valign='center' width='100px'>Proceso</th>
                        <th valign='center' width='100px'>Profesional</th>
                        <th valign='center' width='140px'>Fecha</th>
                        <th valign='center'>Nota</th>
                        <th valign='center' width='50px'>Ver</th>
                        <th valign='center' width='50px'>Descargar</th>
                        <th valign='center' width='50px'>Eliminar</th>
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

                echo "<td align='right'>" . $row_f['file'] . "</td>";
                echo "<td align='right'>" . $row_p['nombre'] . "</td>";
                echo "<td align='right'>" . $row_f['p_nombre'] . " " . $row_f['p_apellido'] . "</td>";
                echo "<td align='right'>" . $row_f['fecha'] . "</td>";
                echo "<td align='right'>" . $row_f['nota'] . "</td>";
                echo "<td align='center'><a href='#' onclick='opener_pdf(\"" . $row_f['file'] . "\")'> <img src='".Utils::$http_ruta."mvc/vista/imagenes/icon_pdf.png' width='18px' height='18px' /></a></td>";
                echo "<td align='center'><a href='".Utils::$http_ruta."mvc/files/users/files/download.php?file=" . $row_f['file'] . "'> <img src='".Utils::$http_ruta."mvc/vista/imagenes/icon_download.png' width='18px' height='18px' /></a></td>";
                $action_delete = '';
                if($_SESSION['id_usuario']==$row_f['id_usuario']){
                    $action_delete = "<a href='".@$action_form_file."&del_file&acc_file=".$row_f['id_file_historia']."'> <img src='".Utils::$http_ruta."mvc/vista/imagenes/icon_delete.png' width='18px' height='18px' /></a>";
                }
                echo "<td align='center'>$action_delete</td>";


                echo "</tr>";
            }
        } else {
            echo "<font color='darkgray'>(sin resultados)</font>";
        }
        echo "</table>";

        if ($total_registros) {

            echo "<center>";

            if (($pagina - 1) > 0) {
                echo "<a href='$action_form_file&pagina=" . ($pagina - 1) . "&$term_link#content_files_historia'>< Anterior</a> ";
            }

            for ($i = 1; $i <= $total_paginas; $i++) {
                if ($pagina == $i)
                    echo "<b>" . $pagina . "</b> ";
                else
                    echo "<a href='$action_form_file&pagina=$i&$term_link#content_files_historia'>$i</a> ";
            }

            if (($pagina + 1) <= $total_paginas) {
                echo " <a href='$action_form_file&pagina=" . ($pagina + 1) . "&$term_link#content_files_historia'>Siguiente ></a>";
            }

            echo "</center>";
        }
        ?>


    </div>
    </div>
</fieldset>

<div id="dialog-pdf" title="Visualizar PDF">
    
    
    <div id="content-file-pdf"></div>
    
    
</div>