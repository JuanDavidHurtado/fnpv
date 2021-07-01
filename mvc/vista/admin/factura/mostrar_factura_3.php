<?php

class EnLetras
{
  var $Void = "";
  var $SP = " ";
  var $Dot = ".";
  var $Zero = "0";
  var $Neg = "Menos";

function ValorEnLetras($x, $Moneda )
{
    $s="";
    $Ent="";
    $Frc="";
    $Signo="";

    if(floatVal($x) < 0)
     $Signo = $this->Neg . " ";
    else
     $Signo = "";

    if(intval(number_format($x,2,'.','') )!=$x) //<- averiguar si tiene decimales
      $s = number_format($x,2,'.','');
    else
      $s = number_format($x,0,'.','');

    $Pto = strpos($s, $this->Dot);

    if ($Pto === false)
    {
      $Ent = $s;
      $Frc = $this->Void;
    }
    else
    {
      $Ent = substr($s, 0, $Pto );
      $Frc =  substr($s, $Pto+1);
    }

    if($Ent == $this->Zero || $Ent == $this->Void)
       $s = "Cero ";
    elseif( strlen($Ent) > 7)
    {
       $s = $this->SubValLetra(intval( substr($Ent, 0,  strlen($Ent) - 6))) .
             "Millones " . $this->SubValLetra(intval(substr($Ent,-6, 6)));
    }
    else
    {
      $s = $this->SubValLetra(intval($Ent));
    }

    if (substr($s,-9, 9) == "Millones " || substr($s,-7, 7) == "Millón ")
       $s = $s . "de ";

    $s = $s . $Moneda;

    if($Frc != $this->Void)
    {
       $s = $s . " Con " . $this->SubValLetra(intval($Frc)) . "Centavos";
       //$s = $s . " " . $Frc . "/100";
    }
    return ($Signo . $s . " M/Cte");

}


function SubValLetra($numero)
{
    $Ptr="";
    $n=0;
    $i=0;
    $x ="";
    $Rtn ="";
    $Tem ="";

    $x = trim("$numero");
    $n = strlen($x);

    $Tem = $this->Void;
    $i = $n;

    while( $i > 0)
    {
       $Tem = $this->Parte(intval(substr($x, $n - $i, 1).
                           str_repeat($this->Zero, $i - 1 )));
       If( $Tem != "Cero" )
          $Rtn .= $Tem . $this->SP;
       $i = $i - 1;
    }


    //--------------------- GoSub FiltroMil ------------------------------
    $Rtn=str_replace(" Mil Mil", " Un Mil", $Rtn );
    while(1)
    {
       $Ptr = strpos($Rtn, "Mil ");
       If(!($Ptr===false))
       {
          If(! (strpos($Rtn, "Mil ",$Ptr + 1) === false ))
            $this->ReplaceStringFrom($Rtn, "Mil ", "", $Ptr);
          Else
           break;
       }
       else break;
    }

    //--------------------- GoSub FiltroCiento ------------------------------
    $Ptr = -1;
    do{
       $Ptr = strpos($Rtn, "Cien ", $Ptr+1);
       if(!($Ptr===false))
       {
          $Tem = substr($Rtn, $Ptr + 5 ,1);
          if( $Tem == "M" || $Tem == $this->Void)
             ;
          else
             $this->ReplaceStringFrom($Rtn, "Cien", "Ciento", $Ptr);
       }
    }while(!($Ptr === false));

    //--------------------- FiltroEspeciales ------------------------------
    $Rtn=str_replace("Diez Un", "Once", $Rtn );
    $Rtn=str_replace("Diez Dos", "Doce", $Rtn );
    $Rtn=str_replace("Diez Tres", "Trece", $Rtn );
    $Rtn=str_replace("Diez Cuatro", "Catorce", $Rtn );
    $Rtn=str_replace("Diez Cinco", "Quince", $Rtn );
    $Rtn=str_replace("Diez Seis", "Dieciseis", $Rtn );
    $Rtn=str_replace("Diez Siete", "Diecisiete", $Rtn );
    $Rtn=str_replace("Diez Ocho", "Dieciocho", $Rtn );
    $Rtn=str_replace("Diez Nueve", "Diecinueve", $Rtn );
    $Rtn=str_replace("Veinte Un", "Veintiun", $Rtn );
    $Rtn=str_replace("Veinte Dos", "Veintidos", $Rtn );
    $Rtn=str_replace("Veinte Tres", "Veintitres", $Rtn );
    $Rtn=str_replace("Veinte Cuatro", "Veinticuatro", $Rtn );
    $Rtn=str_replace("Veinte Cinco", "Veinticinco", $Rtn );
    $Rtn=str_replace("Veinte Seis", "Veintiseís", $Rtn );
    $Rtn=str_replace("Veinte Siete", "Veintisiete", $Rtn );
    $Rtn=str_replace("Veinte Ocho", "Veintiocho", $Rtn );
    $Rtn=str_replace("Veinte Nueve", "Veintinueve", $Rtn );

    //--------------------- FiltroUn ------------------------------
    If(substr($Rtn,0,1) == "M") $Rtn = "Un " . $Rtn;
    //--------------------- Adicionar Y ------------------------------
    for($i=65; $i<=88; $i++)
    {
      If($i != 77)
         $Rtn=str_replace("a " . Chr($i), "* y " . Chr($i), $Rtn);
    }
    $Rtn=str_replace("*", "a" , $Rtn);
    return($Rtn);
}


function ReplaceStringFrom(&$x, $OldWrd, $NewWrd, $Ptr)
{
  $x = substr($x, 0, $Ptr)  . $NewWrd . substr($x, strlen($OldWrd) + $Ptr);
}


function Parte($x)
{
    $Rtn='';
    $t='';
    $i='';
    Do
    {
      switch($x)
      {
         Case 0:  $t = "Cero";break;
         Case 1:  $t = "Un";break;
         Case 2:  $t = "Dos";break;
         Case 3:  $t = "Tres";break;
         Case 4:  $t = "Cuatro";break;
         Case 5:  $t = "Cinco";break;
         Case 6:  $t = "Seis";break;
         Case 7:  $t = "Siete";break;
         Case 8:  $t = "Ocho";break;
         Case 9:  $t = "Nueve";break;
         Case 10: $t = "Diez";break;
         Case 20: $t = "Veinte";break;
         Case 30: $t = "Treinta";break;
         Case 40: $t = "Cuarenta";break;
         Case 50: $t = "Cincuenta";break;
         Case 60: $t = "Sesenta";break;
         Case 70: $t = "Setenta";break;
         Case 80: $t = "Ochenta";break;
         Case 90: $t = "Noventa";break;
         Case 100: $t = "Cien";break;
         Case 200: $t = "Doscientos";break;
         Case 300: $t = "Trescientos";break;
         Case 400: $t = "Cuatrocientos";break;
         Case 500: $t = "Quinientos";break;
         Case 600: $t = "Seiscientos";break;
         Case 700: $t = "Setecientos";break;
         Case 800: $t = "Ochocientos";break;
         Case 900: $t = "Novecientos";break;
         Case 1000: $t = "Mil";break;
         Case 1000000: $t = "Millón";break;
      }

      If($t == $this->Void)
      {
        $i = $i + 1;
        $x = $x / 1000;
        If($x== 0) $i = 0;
      }
      else
         break;

    }while($i != 0);

    $Rtn = $t;
    Switch($i)
    {
       Case 0: $t = $this->Void;break;
       Case 1: $t = " Mil";break;
       Case 2: $t = " Millones";break;
       Case 3: $t = " Billones";break;
    }
    return($Rtn . $t);
}

}


?>

<?php
//tomo los datos de busqueda para mostrar la factura
$idfactura2 = $_REQUEST['idfactura'];
$valort2 = $_REQUEST['valort'];
$origen = $_REQUEST['origen'];

//filtro de fecha
//fechas del mes

$dias = date("t");
$mes = date("m");
$año = date("Y");



// datos del usuario


  //$where.=" and  date(fecha) between '2019-08-06' and '2019-08-06' ";

//desde hasta


// aqui va el id de factura
$desde=37439; // toca de cada 19 fact
$hasta=37539;

  $where.=" and  date(fecha) between '2019-09-26' and '2019-09-26' ";
//$where.=" and  id_factura between '$desde' and '$hasta' ";

//traer los datos de la factura
$sql2 = "Select * from factura where estado =1 $where and id_eps=57  $where and id_contrato=3";
$result2 = $conexion->EjecutarQuery($sql2);
//$row2 = mysql_fetch_array($result2);


 while ($row2 = mysql_fetch_array($result2)) {


$id_pacie = $row2['id_usuario'];
$fecha_factura = $row2['fecha'];
$total_factura = $row2['valor_total'];
$sub_total = $row2['subtotal'];
$eps_id = $row2['id_eps'];
$id_regimen = $row2['id_regimen'];
$contrato_id = $row2['id_contrato'];
$id_cita = $row2['id_cita'];
$id_medico=$row2['id_medico'];

$idfactura2 = $row2['id_factura'];


$v_descuento = $row2['descuento'];
$copago = $row2['copago'];

$id_usu = $row2['facturado_por'];
$sql23 = "Select * from usuario where id_usuario = '" . $id_usu . "' ";
$result23 = $conexion->EjecutarQuery($sql23);
$row23 = mysql_fetch_array($result23);
$nombre_usuario = $row23['nombre'] . " " . $row23['apellido'];


$date = date_create($fecha_factura);
$fecha_factura_2=date_format($date, 'Y-m-d');
// pasar letras a numeros


$dias=date("t", strtotime($fecha_factura));
$mes=date("m", strtotime($fecha_factura));
$año=date("Y", strtotime($fecha_factura));

//$fecha_periodo=$año."-".$mes."-1,".$año."-".$mes."-".$dias;

$fecha_inicio = $año . "-" . $mes . "-1  /  " . $año . "-" . $mes . "-" . $dias;



$num=$total_factura;
$V=new EnLetras();
$total_letras= "<h2>". $V->ValorEnLetras($num,"pesos") ."</h2>";

// traer datos de la eps. solo el nit el nombre

$sql_eps = "Select * from eps where id_eps = '" . $eps_id . "' ";
$result_eps = $conexion->EjecutarQuery($sql_eps);
$row_eps = mysql_fetch_array($result_eps);
$nit = $row_eps['nit'];
$nombre_eps = $row_eps['nombre'];



// traer datos del contrato

$sql_contrato = "Select * from contrato where id_contrato = '" . $contrato_id . "' ";
$result_contrato = $conexion->EjecutarQuery($sql_contrato);
$row_contrato = mysql_fetch_array($result_contrato);
$nombre_contrato = $row_contrato['nombre_contrato'];

// traer datos del paciente telefono. edad. .regimen. afiliacion.cedula

$sql_pac = "Select * from paciente where identificacion	 = '" . $id_pacie . "' ";
$result_pac = $conexion->EjecutarQuery($sql_pac);
$row_pac = mysql_fetch_array($result_pac);
$fecha_n = $row_pac['fecha_n'];
$genero = $row_pac['sexo'];
$edad = Utils::edad($fecha_n);

$telefono = $row_pac['telefono'];
$nombre_pac = $row_pac['nombre1'] . " " . $row_pac['nombre2'] . " " . $row_pac['apellido1'] . " " . $row_pac['apellido2'];

$id_afiliacion = $row_pac['tipoafiliacion'];


//buscar regimen
$sql_r = "Select * from regimen where id_regimen = '" . $id_regimen . "' ";
$result_r = $conexion->EjecutarQuery($sql_r);
$row_r = mysql_fetch_array($result_r);
$regimen = $row_r['nombre'];

//buscar afiliacion
$sql_t = "Select * from tipoafiliacion where id = '" . $id_afiliacion . "' ";
$result_t = $conexion->EjecutarQuery($sql_t);
$row_t = mysql_fetch_array($result_t);
$afiliacion = $row_t['nombre'];

//buscar procesp y profesional


if ($id_cita!=0){
    $sql_cita = "Select p.nombre as proceso, u.nombre as nombrep, u.apellido as apellidop, u.registro_medico from cita as c
		      inner join proceso as p
		      on p.id_proceso = c.id_proceso
		      inner join usuario as u
		      on c.id_usuario = u.id_usuario
		      where c.id_cita	 = '" . $id_cita . "' ";
    $result_cita = $conexion->EjecutarQuery($sql_cita);
    $row_cita = mysql_fetch_array($result_cita);

    $proceso = $row_cita['proceso'];
    $profesional = $row_cita['nombrep'].' '.$row_cita['apellidop'];
    $reg = $row_cita['registro_medico'];
}else{
    $sql23 = "Select * from usuario where id_usuario = '" . $id_medico . "' ";
    $result23 = $conexion->EjecutarQuery($sql23);
    $row23 = mysql_fetch_array($result23);
    $profesional = $row23['nombre']." ".$row23['apellido'];
}
//buscar agendador
$sql_cita = "Select  u.nombre as nombrep, u.apellido as apellidop from cita as c  
		      inner join usuario as u
		      on c.id_usuario_agenda = u.id_usuario
		      where c.id_cita	 = '" . $id_cita . "' ";
		      
$result_cita = $conexion->EjecutarQuery($sql_cita);
$row_cita = mysql_fetch_array($result_cita);



// revisar agendado con facturacion
$agendador = $row_cita['nombrep'].' '.$row_cita['apellidop'];
//sacar fecha de periodo
// $fecha=date('Y')."-01-01".date()
?>





<script type="text/javascript">

    function imprSelec2(nombre)
    {
        var ficha = document.getElementById(nombre);
      
        var ventimp = window.open();
        
        var content = '<link  type="text/css" href="<?php echo $GLOBALS['raiz'] ?>mvc/vista/css.css" rel="stylesheet" />';
        content += '<title>http://192.2.91.7/unica</title>';
        content += ficha.innerHTML;
        ventimp.document.write(content);
        ventimp.document.close();       
        ventimp.focus();
        ventimp.print()
        ventimp.close();

    }

function imprimir(){
  var imprimir=document.getElementById('imprimir_factura');
  var ventana=window.open();

   var content = '<link  type="text/css" href="<?php echo $GLOBALS['raiz'] ?>mvc/vista/css.css" rel="stylesheet" />';
        content += '<title>http://192.2.91.7/unica </title>';
        content += imprimir.innerHTML;
  
  ventana.document.write(content);
  ventana.document.close();
  ventana.focus();
  ventana.print()
  ventana.close();
}


    function abrirVentana(url) {
        window.open(url, "nuevo", "directories=no, location=no, menubar=no, scrollbars=yes, statusbar=no, tittlebar=no, width=400, height=400");
    }
</script>



<div id="imprimir_factura">


    <script type="text/javascript">


    </script>


    <?php
    
    $tamfont = 9;
    ?>

    <p>&nbsp;</p>
  <table style="font-size: <?php echo $tamfont ?>px !important" width="750" border="0" class="data"  align="center" cellpadding="0" cellspacing="0">
        <tr >
            <td width="156" rowspan="7" align="center" valign="middle" ><?php echo "<img src='" . Utils::$http_ruta . "mvc/vista/imagenes/logo2.png' width='100px' />"; ?></td>
            <td width="375"><div align="center">FUNDACION NACER PARA VIVIR IPS</div></td>
            <td rowspan="8" width="156"><div align="center"><span class="Estilo5">Factura de venta N&deg; </span><br />
                    <span class="Estilo4">FEVE-<?php echo $idfactura2 ?> </span></div></td>
        </tr>
        <tr height="">
            <td height=""><div align="center">FNPV</div></td>
        </tr>
        <tr height="">
            <td height=""><div align="center">NIT:900817959-5</div></td>
        </tr>
        <tr height="">
            <td height=""><div align="center">Regimen Com&uacute;n</div></td>
        </tr>
        <tr height="">
            <td height=""><div align="center">Carrera 11 #16n-47 Antonio Nariño Popayán(Cauca))</div></td>
        </tr>
        <tr height="">
            <td height=""><div align="center">Tel. 092-353399</div></td>
        </tr>
        <tr height="">
            <td height=""><div align="center"><a href="mailto:administracion@siempree.com">ips@nacerparavivir.org/a></div></td>
        </tr>
        <tr height="">
            <td colspan="2" height="">Resoluci&oacute;n DIAN 18762008609529 Junio 08 de 2018 Vigencia 24 meses numeracion desde FEVE 7223 hasta FEVE 9999</td>
        </tr>
    </table>
    <table style="font-size: <?php echo $tamfont ?>px !important" width="750" border="0" class="data"  align="center" cellpadding="0" cellspacing="0">
	<tr>
	  <td colspan='2'>Tipo consulta: <?php echo $proceso; ?></td>
	  <td colspan='2'>Profesional: <?php echo $profesional; ?> </td>
	  <td colspan='4'> Reg Medico: <?php echo $reg; ?> </td>
	</tr>
        <tr height="">
            <td height="" width="">Fecha Fact</td>
            <td width=""><?php echo $fecha_factura ?></td>
            <td width="">Periodo</td>
            <td colspan="5"><?php echo $fecha_inicio ?></td>
        </tr>
        <tr height="">
            <td height="">NIT 900935126</td>
            
            <td>Facturado a</td>
            <td width=""><?php echo $nombre_eps ?></td>
            <td width="">Contrato</td>
            <td colspan="3"><?php echo $nombre_contrato ?></td>
        </tr>
        <tr height="">
            <td height="">Identificacion</td>
            <td><?php echo $id_pacie ?></td>
            <td>Paciente</td>
            <td><?php echo $nombre_pac ?></td>
            <td>Edad</td>
            <td width=""><?php echo $edad ?></td>
            <td width="">Genero</td>

            <td width=""><?php echo $genero ?></td>
        </tr>
        <tr height="">
            <td height="">Telefono</td>
            <td><?php echo $telefono ?></td>
            <td>Regimen</td>
            <td><?php echo $regimen ?></td>
            <td>Tipo Afiliacion</td>
            <td colspan="3"><?php echo $afiliacion ?></td>
        </tr>
    </table>
    <table style="font-size: <?php echo $tamfont ?>px !important" border="0"  class="data"  align="center" width="750" cellpadding="0" cellspacing="0">
        
        <tr height="">
            <td height="" width="">Codigo</td>
            <td width="">Descripci&oacute;n</td>
            <td width="">Valor Paciente</td>
            <td width="">Valor Uni.</td>
            <td width="">Cant</td>
            <td width="">Valor Eps</td>
        </tr>
        <?php


        $sql_fac = "Select * from factura_cup where id_factura = " . $idfactura2." and  cantidad<>0 and fecha='".$fecha_factura_2."'";
        $result_fac = $conexion->EjecutarQuery($sql_fac);
        while ($row_fac = mysql_fetch_array($result_fac)) {

            $tabla_cups .='<tr height="19">

                                    <td>' . $row_fac['id_cup'] . '</td>
                                    <td>' . $row_fac['nombre_cup'] . '</td>
                                    <td>0</td>
                                    <td>' . $row_fac['tarifa'] . '</td>
                                    <td>' . $row_fac['cantidad'] . '</td>
                                    <td>' . $row_fac['valor_t'] . '</td>
                                   

                                </tr>';
        }

        echo $tabla_cups;

        $tabla_cups="";
        ?>
        <tr height="">
            <td colspan="4" rowspan="3" height=""><?php echo $total_letras; ?></td>
            <td>Sub Total</td>
            <td><?php echo $sub_total ?></td>
        </tr>
        <tr height="">
            <td height="">Total Cuota/Copago</td>
            <td>-<?php echo $copago ?></td>
        </tr>
        <tr height="">
            <td height="">Descuento</td>
            <td>-<?php echo $v_descuento ?></td>
        </tr>
        <tr height="">
            <td colspan="4" height="">Facturada por: <?php echo $nombre_usuario; ?></td>
            <td>TOTAL A PAGAR EPS</td>
            <td><?php echo $total_factura ?></td>
        </tr>
        <tr>
	  <td colspan='6'>Agendado por: <?php echo $agendador; ?></td>
	</tr>
        <tr height="">
            <td colspan="6" height=""><div align="center"><span class="Estilo2"></span></div></td>
        </tr>
    </table>
	<p>&nbsp;</p>
    <table width="750" style="font-size: 11px !important" border="0" class="" align="center" >
      <tr>
        <td><div align="center" class="Estilo1">_________________________</div></td>
        <td><div align="center" class="Estilo1">_________________________</div></td>
        <td><div align="center" class="Estilo1">_________________________</div></td>
      </tr>
      <tr>
        <td><div align="center" class="Estilo1"><strong>Firma Cajero</strong></div></td>
        <td><div align="center" class="Estilo1"><strong>Firma Profesional</strong></div></td>
        <td><div align="center" class="Estilo1"><strong>Firma Usuario</strong></div></td>
      </tr>
    </table>
    <p>&nbsp;</p>
    <p>&nbsp;</p>

   <div id="salto_pagina_despues"></div>

    <?php

   

 }
    ?>


    <style type="text/css">

        @media print
        {
            #imprimir_factura{
                font-size: 8px !important;
            }

            #salto_pagina_despues{

            page-break-after:always;

           }

            /*
            .Estilo2 {font-size: 12px}
            .Estilo4 {
                font-size: 24px;
                color: #CC3300;
            }
            .Estilo5 {font-size: 18px}
            */
        }
    </style>
<a href='#' onClick='imprimir()' >Imprimir_x</a>
</div>


