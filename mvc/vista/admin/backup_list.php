<?php

$pagina = @$_REQUEST["pagina"];
$registros = 21;

if (!$pagina) { 
    $inicio = 0; 
    $pagina = 1; 
} 
else { 
    $inicio = ($pagina - 1) * $registros; 
} 

?>

<style>
    
    #content_welcome{
        height: 750px;
    }
    
</style>

<div id="content_welcome" style="overflow-y:auto;" class="ui-tabs ui-widget ui-widget-content ui-corner-all" >
    <script>

    $(function(){
        
        $( "#term" ).datepicker({
            dateFormat:"yy-mm-dd"
        });
        
        
    });
    
    function style_(){
        $("#ui-datepicker-div").css('z-index','100000');
    }

</script>
   <h2>Lista de Usuarios <?php echo @$mes_lis; ?></h2>   
   <?php
   
                
                $where = " where true";
                $term = str_replace(" ","",$_REQUEST['term']);
                
                $term_link = "";
                if($term!=''){
                   $term = ''.$term.'';
                   $where = " where (fecha between '$term 00:00:00' AND '$term 23:59:59') ";
                   $term_link = "term=".$_REQUEST['term'];
                }
   
   ?>
   <form action="?option=backup_list&search" method="post">
       <input type="text" name="term" id="term" onfocus="style_()" placeholder="Backup a buscar ..." class="input_txt" value='<?php echo @$_REQUEST['term']; ?>' />
       <button>Buscar</button>
        <?php
       
       if(@$_REQUEST['term']!=''){
           
           ?>
           <a href="?option=backup_list">Cancelar</a>
           <?php
           
       }
       
       ?>
   </form>
   <br>
   
	<?php

                

		$resultados = $conexion->EjecutarQuery("SELECT * FROM backup $where");
		$total_registros = mysql_num_rows($resultados); 
                $sql_search = "SELECT * FROM backup $where ORDER BY fecha DESC LIMIT $inicio, $registros";
		$resultados = $conexion->EjecutarQuery($sql_search);	
		$total_paginas = ceil($total_registros / $registros); 		  			

		echo "<div id='content_result'>";
		echo "<table width='100%' border='0' cellpadding='0' cellspacing='0' class='data'>";
                echo "<tbody><tr class='t_head'>
                        <th valign='center'>File</th>
                        <th valign='center'>Fecha</th>
                        <th>Tipo</th>
                      </tr></tbody>";
		$contador = 0;
		if($total_registros) {
                    $bool_style = true;
                    while($row=mysql_fetch_array($resultados)) {
                        
                        if($bool_style){
                            $style_file_table = "row1";
                        }else{
                            $style_file_table = "row2";
                        }
                        $bool_style = !$bool_style;
                                           
			 echo "<tr class='$style_file_table'>
                                <td align='right'><a href='".Utils::$http_ruta."mvc/files/backup/download.php?file=".$row['file']."'>".$row['file']."</a></td>
                                <td align='right'>".$row['fecha']."</td> 
                                <td align='right'>".$row['tipo']."</td>
                              </tr>";
                    }
			
		} else {
                    echo "<font color='darkgray'>(sin resultados)</font>";
		}
		echo "</table>";
		echo "</div>";
		
		?><a href='#' onClick='imprSelec("content_result")' >Imprimir</a><?php
		
		//mysql_free_result($resultados);				
		
                
                
                
		if($total_registros) {
			
			echo "<center>";
			
			if(($pagina - 1) > 0) {
				echo "<a href='?option=backup_list&pagina=".($pagina-1)."&$term_link'>< Anterior</a> ";
			}
			
			for ($i=1; $i<=$total_paginas; $i++){ 
				if ($pagina == $i) 
					echo "<b>".$pagina."</b> "; 
				else
					echo "<a href='?option=backup_list&pagina=$i&$term_link'>$i</a> "; 
			}
		  
			if(($pagina + 1)<=$total_paginas) {
				echo " <a href='?option=backup_list&pagina=".($pagina+1)."&$term_link'>Siguiente ></a>";
			}
			
			echo "</center>";
			
		}
	

	?>
	
    
</div>
<script>

$(function(){
    
    $("#ui-datepicker-div").css('display','none');
    
})

</script>
