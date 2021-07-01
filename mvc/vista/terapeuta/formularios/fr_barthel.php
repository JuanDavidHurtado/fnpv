<?php
if (isset($_REQUEST['guardar_fr_barthel']) && isset($_REQUEST['id_cita'])) {

if ($_REQUEST['id_fr_barthel'] == 'new') {

$sql = "INSERT INTO fr_barthel (
`id_fr_barthel`,
`id_usuario`,
`id_historia`,
`id_proceso`,
`id_vinicial`,
`id_revaloracion`,
`comer`,
`bano`,
`vestirse`,
`aseo`,
`sanitario`,
`deposicion`,
`miccion`,
`deambulacion`,
`escalones`,
`traslados`,
`resultado_barthel`
) VALUES (
NULL,
'".$_SESSION['id_usuario']."' ,
'".$_REQUEST['id_historia']."' ,
'".$_REQUEST['id_proceso']."' ,
'".$_REQUEST['id_vinicial']."' ,
'".$_REQUEST['id_revaloracion']."' ,
'".$_REQUEST['comer']."' ,
'".$_REQUEST['bano']."' ,
'".$_REQUEST['vestirse']."' ,
'".$_REQUEST['aseo']."' ,
'".$_REQUEST['sanitario']."' ,
'".$_REQUEST['deposicion']."' ,
'".$_REQUEST['miccion']."' ,
'".$_REQUEST['deambulacion']."' ,
'".$_REQUEST['escalones']."' ,
'".$_REQUEST['traslados']."' ,
'".$_REQUEST['resultado_barthel']."'
) ";


} else if ($_REQUEST['id_fr_barthel'] != '') {

$sql = "UPDATE fr_barthel set
`id_usuario` = '".$_REQUEST['id_usuario']."' ,
`id_historia` = '".$_REQUEST['id_historia']."' ,
`id_proceso` = '".$_REQUEST['id_proceso']."' ,
`id_vinicial` = '".$_REQUEST['id_vinicial']."' ,
`id_revaloracion` = '".$_REQUEST['id_revaloracion']."' ,
`comer` = '".$_REQUEST['comer']."' ,
`bano` = '".$_REQUEST['bano']."' ,
`vestirse` = '".$_REQUEST['vestirse']."' ,
`aseo` = '".$_REQUEST['aseo']."' ,
`sanitario` = '".$_REQUEST['sanitario']."' ,
`deposicion` = '".$_REQUEST['deposicion']."' ,
`miccion` = '".$_REQUEST['miccion']."' ,
`deambulacion` = '".$_REQUEST['deambulacion']."' ,
`escalones` = '".$_REQUEST['escalones']."' ,
`traslados` = '".$_REQUEST['traslados']."' ,
`resultado_barthel` = '".$_REQUEST['resultado_barthel']."' WHERE `id_fr_barthel` = '".$_REQUEST['id_fr_barthel']."' ;";

}

$conexion->EjecutarQuery($sql);
}
$id_fr_barthel = 'new';
$sql = "SELECT * from fr_barthel WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while($row = mysql_fetch_array($result)){
$id_fr_barthel = $row['id_fr_barthel'];
$id_usuario = $row['id_usuario'];
$id_historia = $row['id_historia'];
$id_proceso = $row['id_proceso'];
$id_vinicial = $row['id_vinicial'];
$id_revaloracion = $row['id_revaloracion'];
$comer = $row['comer'];
$bano = $row['bano'];
$vestirse = $row['vestirse'];
$aseo = $row['aseo'];
$sanitario = $row['sanitario'];
$deposicion = $row['deposicion'];
$miccion = $row['miccion'];
$deambulacion = $row['deambulacion'];
$escalones = $row['escalones'];
$traslados = $row['traslados'];
$resultado_barthel = $row['resultado_barthel'];
break; }

?>
<script>

$(function(){

$("#close-fr_barthel").click(function(){
$("#open-fr_barthel").show();
$(this).hide();
$("#content-fr_barthel").hide('slow');
});

$("#open-fr_barthel").click(function(){

$("#close-fr_barthel").show();
$(this).hide();
$("#content-fr_barthel").show('slow');
});


}); //cierre de cuncion

</script>

<script >

//entrar valor

function cargar_color(){
    
   var valor_b= document.getElementById('resultado_barthel').value;

    if(valor_b < 20){
       var obj = document.getElementById('tr_1');
           obj.style.backgroundColor="#FF0000";
           var obj2 = document.getElementById('tr_2');
           obj2.style.backgroundColor="#FFFFFF";
           var obj3 = document.getElementById('tr_3');
           obj3.style.backgroundColor="#FFFFFF";
           var obj4 = document.getElementById('tr_4');
           obj4.style.backgroundColor="#FFFFFF";
           var obj5 = document.getElementById('tr_5');
           obj5.style.backgroundColor="#FFFFFF";

           


    }else if((valor_b >= 20)&&(valor_b <= 35)){
       var obj = document.getElementById('tr_2');
           obj.style.backgroundColor="#FF0000";

           var obj1 = document.getElementById('tr_1');
           obj1.style.backgroundColor="#FFFFFF";
           var obj3 = document.getElementById('tr_3');
           obj3.style.backgroundColor="#FFFFFF";
           var obj4 = document.getElementById('tr_4');
           obj4.style.backgroundColor="#FFFFFF";
           var obj5 = document.getElementById('tr_5');
           obj5.style.backgroundColor="#FFFFFF";

    }else if((valor_b > 35)&&(valor_b <= 55)){
       var obj = document.getElementById('tr_3');
           obj.style.backgroundColor="#FF0000";

           var obj1 = document.getElementById('tr_1');
           obj1.style.backgroundColor="#FFFFFF";
           var obj2 = document.getElementById('tr_2');
           obj2.style.backgroundColor="#FFFFFF";
           var obj4 = document.getElementById('tr_4');
           obj4.style.backgroundColor="#FFFFFF";
           var obj5 = document.getElementById('tr_5');
           obj5.style.backgroundColor="#FFFFFF";

    }else if((valor_b > 55)&&(valor_b <= 99)){
       var obj = document.getElementById('tr_4');
           obj.style.backgroundColor="#FF0000";


           var obj1 = document.getElementById('tr_1');
           obj1.style.backgroundColor="#FFFFFF";
           var obj3 = document.getElementById('tr_3');
           obj3.style.backgroundColor="#FFFFFF";
           var obj2 = document.getElementById('tr_2');
           obj2.style.backgroundColor="#FFFFFF";
           var obj5 = document.getElementById('tr_5');
           obj5.style.backgroundColor="#FFFFFF";


    }else if((valor_b = 100)){
       var obj = document.getElementById('tr_5');
           obj.style.backgroundColor="#FF0000";

           var obj1 = document.getElementById('tr_1');
           obj1.style.backgroundColor="#FFFFFF";
           var obj3 = document.getElementById('tr_3');
           obj3.style.backgroundColor="#FFFFFF";
           var obj2 = document.getElementById('tr_2');
           obj2.style.backgroundColor="#FFFFFF";
           var obj4 = document.getElementById('tr_4');
           obj4.style.backgroundColor="#FFFFFF";

    }

}

function cargar_valor(){

alert("emtrp");

document.getElementById('comer').value=<?php echo $comer; ?>;
document.getElementById('bano').value=<?php echo $bano; ?>;
document.getElementById('vestirse').value=<?php echo $vestirse; ?>;
document.getElementById('aseo').value=<?php echo $aseo; ?>;
document.getElementById('sanitario').value=<?php echo $sanitario; ?>;
document.getElementById('deposicion').value=<?php echo $deposicion; ?>;
document.getElementById('miccion').value=<?php echo $miccion; ?>;
document.getElementById('deambulacion').value=<?php echo $deambulacion; ?>;
document.getElementById('escalones').value=<?php echo $escalones; ?>;

document.getElementById('traslados').value=<?php echo $traslados; ?>;


document.getElementById('resultado_barthel').value=<?php echo $resultado_barthel; ?>;

cargar_color();

}

function sumar_barthel(){

        var d1=document.getElementById('comer').value;
        var d2=document.getElementById('bano').value;
        var d3=document.getElementById('vestirse').value;
        var d4=document.getElementById('aseo').value;
        var d5=document.getElementById('sanitario').value;
        var d6=document.getElementById('deposicion').value;
        var d7=document.getElementById('miccion').value;
        var d8=document.getElementById('deambulacion').value;
        var d9=document.getElementById('escalones').value;
        var d10=document.getElementById('traslados').value;

        var resultado =parseInt(d1)+parseInt(d2)+parseInt(d3)+parseInt(d4)+parseInt(d5)+parseInt(d6)+parseInt(d7)+parseInt(d8)+parseInt(d9)+parseInt(d10);

        document.getElementById('resultado_barthel').value= parseInt(resultado);
        
        cargar_color();

   }// sumar bartehl



</script>
<fieldset id="fr_barthel">
<legend align="left"> <div class="arrow-c" id="close-fr_barthel"></div> <div class="arrow-o" id="open-fr_barthel" ></div> <font>Valoracion barthel</font></legend>
<div id="content-fr_barthel">
<?php
if (isset($_REQUEST['id_cita'])) {
$button = '<button name="guardar_fr_barthel" id="guardar_fr_barthel" >Guardar</button>';
} else {
$readonly = " readonly='readonly' ";
}
?>
    <body onLoad="cargar_valor();" id="body_x">
  

<form id="form_fr_barthel"  name="form_fr_barthel" action="<?php echo @$action_form_fr_barthel ?>#fr_barthel" method="post">

<input type="hidden" id="id_fr_barthel" name="id_fr_barthel" value="<?php echo @$id_fr_barthel ?>" />

<table width="400" border="0" cellspacing="0" cellpadding="0" class="data">
<tr class="row1">

</tr>
<tr class="row1">

</tr>
</table>

<input type="hidden" class="input_txt valid" id="id_fr_barthel" name="id_fr_barthel" value="<?php echo @$id_fr_barthel; ?>" />

<input type="button" onclick="cargar_valor();" value="mostrar">

<H2>ESCALA DE BARTHEL</H2>
            
            <table border="0" class="data" cellpadding="0" cellspacing="0">
              <col width="115" />
              <col width="393" />
              <col width="50" />
              <col width="83" />
              <tr height="19">
                <td height="19" width="155">PARAMETRO</td>
                <td width="571">SITUACION DEL PACIENTE</td>
                <td width="61"><div align="center">Valor</div></td>
                <td width="84"><div align="center">Puntaje</div></td>
              </tr>
              <tr height="19">
                <td rowspan="3" height="57" width="155">COMER</td>
                <td width="571">Totalmente    independiente</td>
                <td width="61"><div align="center">10</div></td>
                <td rowspan="3" width="84"><label>
                  <div align="center">
                    <select name="comer" size="1" id="comer" onChange="sumar_barthel(); ">
                      <option value="10" selected="selected" >10</option>
                      <option value="5">5</option>
                      <option value="0">0</option>
                      </select>
                    </div>
                </label></td>
              </tr>
              <tr height="19">
                <td height="24" width="571">Necesita ayuda para cortar carne, el pan, etc.</td>
                <td width="61"><div align="center">5</div></td>
              </tr>
              <tr height="19">
                <td height="24" width="571">Dependiente</td>
                <td width="61"><div align="center">0</div></td>
              </tr>
              <tr height="19">
                <td rowspan="2" height="38" width="155">BAÑO</td>
                <td width="571">Independiente:    entra y sale solo del baño</td>
                <td width="61"><div align="center">5</div></td>
                <td rowspan="2" width="84"><div align="center">
                  <select name="bano" size="1" id="bano" onChange="sumar_barthel()">
                    <option value="5" selected="selected">5</option>
                    <option value="0">0</option>
                  </select>
                </div></td>
              </tr>
              <tr height="19">
                <td height="24" width="571">Dependiente</td>
                <td width="61"><div align="center">0</div></td>
              </tr>
              <tr height="37">
                <td rowspan="3" height="75" width="155">VESTIRSE</td>
                <td width="571">Independiente:    capaz de ponerse y de quitarse la ropa, abotonarse, atarse los zapatos</td>
                <td width="61"><div align="center">10</div></td>
                <td rowspan="3" width="84"><div align="center">
                  <select name="vestirse" size="1" id="vestirse" onChange="sumar_barthel()">
                    <option value="10" selected="selected">10</option>
                    <option value="5">5</option>
                    <option value="0">0</option>
                  </select>
                </div></td>
              </tr>
              <tr height="19">
                <td height="24" width="571">Necesita ayuda</td>
                <td width="61"><div align="center">5</div></td>
              </tr>
              <tr height="19">
                <td height="24" width="571">Dependiente</td>
                <td width="61"><div align="center">0</div></td>
              </tr>
              <tr height="37">
                <td rowspan="2" height="56" width="155">ASEO</td>
                <td width="571">Independiente    para lavarse la cara, las manos, peinarse, afeitarse, maquillarse, etc.</td>
                <td width="61"><div align="center">5</div></td>
                <td rowspan="2" width="84"><div align="center">
                  <select name="aseo" size="1" id="aseo" onChange="sumar_barthel()">
                    <option value="5" selected="selected">5</option>
                    <option value="0">0</option>
                  </select>
                </div></td>
              </tr>
              <tr height="19">
                <td height="24" width="571">Dependiente</td>
                <td width="61"><div align="center">0</div></td>
              </tr>
              <tr height="37">
                <td rowspan="3" height="75" width="155">USO DEL SANITARIO</td>
                <td width="571">Independiente.    Entra y sale del baño, puede usarlo solo, se sienta, se limpia, se pone la    ropa. Puede usar ayudas tecnicas.</td>
                <td width="61"><div align="center">10</div></td>
                <td rowspan="3" width="84"><div align="center">
                  <select name="sanitario" size="1" id="sanitario" onChange="sumar_barthel()">
                    <option value="10" selected="selected">10</option>
                    <option value="5">5</option>
                    <option value="0">0</option>
                  </select>
                </div></td>
              </tr>
              <tr height="19">
                <td height="24" width="571">Necesita ayuda para ir al retrete, pero se limpia solo</td>
                <td width="61"><div align="center">5</div></td>
              </tr>
              <tr height="19">
                <td height="24" width="571">Dependiente</td>
                <td width="61"><div align="center">0</div></td>
              </tr>
              <tr height="19">
                <td rowspan="3" height="93" width="155">DEPOSICION (Ultima semana)</td>
                <td width="571">Independiente y    continente. Usa solo el supositorio o el enema</td>
                <td width="61"><div align="center">10</div></td>
                <td rowspan="3" width="84"><div align="center">
                  <select name="deposicion" size="1" id="deposicion" onChange="sumar_barthel()">
                    <option value="10" selected="selected">10</option>
                    <option value="5">5</option>
                    <option value="0">0</option>
                  </select>
                </div></td>
              </tr>
              <tr height="55">
                <td height="46" width="571">Ocasionalmente algun episodio de de dposicion no    controlada.  Algunos episodio de    incontnecncia o necesita ayuda para administrarse supositorios o enemas</td>
                <td width="61"><div align="center">5</div></td>
              </tr>
              <tr height="19">
                <td height="24" width="571">Dependiente. Incapaz de manejarse sin asistenia</td>
                <td width="61"><div align="center">0</div></td>
              </tr>
              <tr height="19">
                <td rowspan="3" height="75" width="155">MICCION (Ultima semana)</td>
                <td width="571">Continencia    normal, o es capaz de cuidarse de la sonda si tiene una puesta</td>
                <td width="61"><div align="center">10</div></td>
                <td rowspan="3" width="84"><div align="center">
                  <select name="miccion" size="1" id="miccion" onChange="sumar_barthel()">
                    <option value="10" selected="selected">10</option>
                    <option value="5">5</option>
                    <option value="0">0</option>
                  </select>
                </div></td>
              </tr>
              <tr height="37">
                <td height="46" width="571">Un episodio diario como maximo de incontinencia, o necesita    ayuda para cuidar de la sonda</td>
                <td width="61"><div align="center">5</div></td>
              </tr>
              <tr height="19">
                <td height="24" width="571">Dependiente. Incapaz de manejarse sin asistenia</td>
                <td width="61"><div align="center">0</div></td>
              </tr>
              <tr height="19">
                <td rowspan="4" height="76" width="155">DEAMBULACION</td>
                <td width="571">Independiente,    camina solo 50 metros</td>
                <td width="61"><div align="center">15</div></td>
                <td rowspan="4" width="84"><div align="center">
                  <select name="deambulacion" size="1" id="deambulacion" onChange="sumar_barthel()">
                    <option value="15" selected="selected">15</option>
                    <option value="10">10</option>
                    <option value="5">5</option>
                    <option value="0">0</option>
                  </select>
                </div></td>
              </tr>
              <tr height="19">
                <td height="24" width="571">Necesita ayuda  o    supervision fisica o verbal</td>
                <td width="61"><div align="center">10</div></td>
              </tr>
              <tr height="19">
                <td height="24" width="571">Independiente en silla de ruedas sin ayuda</td>
                <td width="61"><div align="center">5</div></td>
              </tr>
              <tr height="19">
                <td height="24" width="571">Dependiente</td>
                <td width="61"><div align="center">0</div></td>
              </tr>
              <tr height="19">
                <td rowspan="3" height="57" width="155">ESCALONES</td>
                <td width="571">Independiente    para bajar y subir escaleras</td>
                <td width="61"><div align="center">10</div></td>
                <td rowspan="3" width="84"><div align="center">
                  <select name="escalones" size="1" id="escalones"  onchange="sumar_barthel()">
                    <option value="10" selected="selected">10</option>
                    <option value="5">5</option>
                    <option value="0">0</option>
                  </select>
                </div></td>
              </tr>
              <tr height="19">
                <td height="24" width="571">Necesita ayuda fisica o supervision para hacerlo</td>
                <td width="61"><div align="center">5</div></td>
              </tr>
              <tr height="19">
                <td height="24" width="571">Dependiente</td>
                <td width="61"><div align="center">0</div></td>
              </tr>
              <tr height="19">
                <td rowspan="4" height="76" width="155">TRASLADOS</td>
                <td width="571">Independiente</td>
                <td width="61"><div align="center">15</div></td>
                <td rowspan="4" width="84"><div align="center">
                  <select name="traslados" size="1" id="traslados"  onchange="sumar_barthel()">
                    <option value="15" selected="selected" >15</option>
                    <option value="10">10</option>
                    <option value="5">5</option>
                    <option value="0">0</option>
                  </select>
                </div></td>
              </tr>
              <tr height="19">
                <td height="24" width="571">Manima ayuda fisica o supervision para hacerlo</td>
                <td width="61"><div align="center">10</div></td>
              </tr>
              <tr height="19">
                <td height="24" width="571">Necesita gran ayuda, requiere de una persona con fuerza o entrenada</td>
                <td width="61"><div align="center">5</div></td>
              </tr>
              <tr height="19">
                <td height="24" width="571">Dependiente</td>
                <td width="61"><div align="center">0</div></td>
              </tr>
              <tr height="19">
                <td colspan="3" height="19"><div align="right">TOTAL</div></td>
                <td width="84"><div align="center">
                  <input name="resultado_barthel" type="text"  id="resultado_barthel" value="<?php echo $resultado_barthel ?>" size="9" />
                </div></td>
              </tr>
            </table>
    <br>
<br>
            <p><strong>PUNTUACION </strong></p>
            <table border="0" cellspacing="0" cellpadding="0" class="data">
                <tr>
                    <td width="158" valign="top">
                        <strong>RESULTADO</strong></td>
                    <td width="233" valign="top"> <strong>GRADO DE DEPENDENCIA</strong></td>
                </tr>
                <tr id="tr_1">
                    <td width="158" valign="top">&lt;20</td>
                    <td width="233" valign="top">total</td>
                </tr>
                <tr id="tr_2">
                  <td width="158" valign="top">20 – 35</td>
                    <td width="233" valign="top">Grave</td>
                </tr>
                <tr id="tr_3">
                    <td width="158" valign="top">40 – 55</td>
                    <td width="233" valign="top">Moderado</td>
                </tr>
                <tr id="tr_4">
                    <td width="158" valign="top">&gt;  60</td>
                    <td width="233" valign="top">Leve</td>
                </tr>
                <tr id="tr_5">
                  <td width="158" valign="top" >100</td>
                    <td width="233" valign="top" >Independiente</td>
                </tr>
  </table>

<?php echo @$button ?>
</form>
              </body>
        <br>
</div>
</fieldset>