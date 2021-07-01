<?php
if (isset($_REQUEST['guardar_nervio_facial']) && isset($_REQUEST['id_cita'])) {

    if ($_REQUEST['id_nervio_facial'] == 'new') {

        $sql = "INSERT INTO nervio_facial (
`id_nervio_facial`,
`id_usuario`,
`historia`,
`id_proceso`,
`rec_derecho`,
`rec_izq`,
`nf_dulce`,
`nf_salado`,
`nf_acido`,
`nf_frontal`,
`nfs_der`,
`nfs_izq`,
`obicular_der`,
`obicular_izq`,
`opar_der`,
`opar_izq`,
`nf_piramidal`,
`nfs_narizd`,
`nfs_narizi`,
`nfs_labd`,
`nfs_labi`,
`nfs_mayord`,
`nfs_mayori`,
`nfs_menord`,
`nfs_menori`,
`nfs_orald`,
`nfs_orali`,
`nfs_mentoniano`,
`nfs_labiod`,
`nfs_labioi`,
`dep_orald`,
`dep_orali`,
`buc_der`,
`buc_izq`,
`ob_labiod`,
`ob_labioi`,
`risoriod`,
`risorioi`,
`plastimad`,
`estiloideo`,
`vientre_p`,
`lac_der`,
`lac_izq`,
`gla_subli`,
`muco_nariz`,
`paladar_d`,
`paladar_b`,
`id_cita`,
`id_vinicial`,
`id_revaloracion`,
`nfs_observacio`
) VALUES (
NULL,
'" . $_SESSION['id_usuario'] . "' ,
'" . $_REQUEST['historia'] . "' ,
'" . $_REQUEST['id_proceso'] . "' ,
'" . $_REQUEST['rec_derecho'] . "' ,
'" . $_REQUEST['rec_izq'] . "' ,
'" . $_REQUEST['nf_dulce'] . "' ,
'" . $_REQUEST['nf_salado'] . "' ,
'" . $_REQUEST['nf_acido'] . "' ,
'" . $_REQUEST['nf_frontal'] . "' ,
'" . $_REQUEST['nfs_der'] . "' ,
'" . $_REQUEST['nfs_izq'] . "' ,
'" . $_REQUEST['obicular_der'] . "' ,
'" . $_REQUEST['obicular_izq'] . "' ,
'" . $_REQUEST['opar_der'] . "' ,
'" . $_REQUEST['opar_izq'] . "' ,
'" . $_REQUEST['nf_piramidal'] . "' ,
'" . $_REQUEST['nfs_narizd'] . "' ,
'" . $_REQUEST['nfs_narizi'] . "' ,
'" . $_REQUEST['nfs_labd'] . "' ,
'" . $_REQUEST['nfs_labi'] . "' ,
'" . $_REQUEST['nfs_mayord'] . "' ,
'" . $_REQUEST['nfs_mayori'] . "' ,
'" . $_REQUEST['nfs_menord'] . "' ,
'" . $_REQUEST['nfs_menori'] . "' ,
'" . $_REQUEST['nfs_orald'] . "' ,
'" . $_REQUEST['nfs_orali'] . "' ,
'" . $_REQUEST['nfs_mentoniano'] . "' ,
'" . $_REQUEST['nfs_labiod'] . "' ,
'" . $_REQUEST['nfs_labioi'] . "' ,
'" . $_REQUEST['dep_orald'] . "' ,
'" . $_REQUEST['dep_orali'] . "' ,
'" . $_REQUEST['buc_der'] . "' ,
'" . $_REQUEST['buc_izq'] . "' ,
'" . $_REQUEST['ob_labiod'] . "' ,
'" . $_REQUEST['ob_labioi'] . "' ,
'" . $_REQUEST['risoriod'] . "' ,
'" . $_REQUEST['risorioi'] . "' ,
'" . $_REQUEST['plastimad'] . "' ,
'" . $_REQUEST['estiloideo'] . "' ,
'" . $_REQUEST['vientre_p'] . "' ,
'" . $_REQUEST['lac_der'] . "' ,
'" . $_REQUEST['lac_izq'] . "' ,
'" . $_REQUEST['gla_subli'] . "' ,
'" . $_REQUEST['muco_nariz'] . "' ,
'" . $_REQUEST['paladar_d'] . "' ,
'" . $_REQUEST['paladar_b'] . "' ,
'" . $_REQUEST['id_cita'] . "' ,
'" . $_REQUEST['id_vinicial'] . "' ,
'" . $_REQUEST['id_revaloracion'] . "' ,
'" . $_REQUEST['nfs_observacio'] . "'
) ";
    } else if ($_REQUEST['id_nervio_facial'] != '') {

        $sql = "UPDATE nervio_facial set
`id_usuario` = '" . $_SESSION['id_usuario'] . "' ,
`historia` = '" . $_REQUEST['id_historia'] . "' ,
`id_proceso` = '" . $_REQUEST['id_proceso'] . "' ,
`rec_derecho` = '" . $_REQUEST['rec_derecho'] . "' ,
`rec_izq` = '" . $_REQUEST['rec_izq'] . "' ,
`nf_dulce` = '" . $_REQUEST['nf_dulce'] . "' ,
`nf_salado` = '" . $_REQUEST['nf_salado'] . "' ,
`nf_acido` = '" . $_REQUEST['nf_acido'] . "' ,
`nf_frontal` = '" . $_REQUEST['nf_frontal'] . "' ,
`nfs_der` = '" . $_REQUEST['nfs_der'] . "' ,
`nfs_izq` = '" . $_REQUEST['nfs_izq'] . "' ,
`obicular_der` = '" . $_REQUEST['obicular_der'] . "' ,
`obicular_izq` = '" . $_REQUEST['obicular_izq'] . "' ,
`opar_der` = '" . $_REQUEST['opar_der'] . "' ,
`opar_izq` = '" . $_REQUEST['opar_izq'] . "' ,
`nf_piramidal` = '" . $_REQUEST['nf_piramidal'] . "' ,
`nfs_narizd` = '" . $_REQUEST['nfs_narizd'] . "' ,
`nfs_narizi` = '" . $_REQUEST['nfs_narizi'] . "' ,
`nfs_labd` = '" . $_REQUEST['nfs_labd'] . "' ,
`nfs_labi` = '" . $_REQUEST['nfs_labi'] . "' ,
`nfs_mayord` = '" . $_REQUEST['nfs_mayord'] . "' ,
`nfs_mayori` = '" . $_REQUEST['nfs_mayori'] . "' ,
`nfs_menord` = '" . $_REQUEST['nfs_menord'] . "' ,
`nfs_menori` = '" . $_REQUEST['nfs_menori'] . "' ,
`nfs_orald` = '" . $_REQUEST['nfs_orald'] . "' ,
`nfs_orali` = '" . $_REQUEST['nfs_orali'] . "' ,
`nfs_mentoniano` = '" . $_REQUEST['nfs_mentoniano'] . "' ,
`nfs_labiod` = '" . $_REQUEST['nfs_labiod'] . "' ,
`nfs_labioi` = '" . $_REQUEST['nfs_labioi'] . "' ,
`dep_orald` = '" . $_REQUEST['dep_orald'] . "' ,
`dep_orali` = '" . $_REQUEST['dep_orali'] . "' ,
`buc_der` = '" . $_REQUEST['buc_der'] . "' ,
`buc_izq` = '" . $_REQUEST['buc_izq'] . "' ,
`ob_labiod` = '" . $_REQUEST['ob_labiod'] . "' ,
`ob_labioi` = '" . $_REQUEST['ob_labioi'] . "' ,
`risoriod` = '" . $_REQUEST['risoriod'] . "' ,
`risorioi` = '" . $_REQUEST['risorioi'] . "' ,
`plastimad` = '" . $_REQUEST['plastimad'] . "' ,
`estiloideo` = '" . $_REQUEST['estiloideo'] . "' ,
`vientre_p` = '" . $_REQUEST['vientre_p'] . "' ,
`lac_der` = '" . $_REQUEST['lac_der'] . "' ,
`lac_izq` = '" . $_REQUEST['lac_izq'] . "' ,
`gla_subli` = '" . $_REQUEST['gla_subli'] . "' ,
`muco_nariz` = '" . $_REQUEST['muco_nariz'] . "' ,
`paladar_d` = '" . $_REQUEST['paladar_d'] . "' ,
`paladar_b` = '" . $_REQUEST['paladar_b'] . "' ,
`nfs_observacio` = '" . $_REQUEST['nfs_observacio'] . "' WHERE `id_nervio_facial` = '" . $_REQUEST['id_nervio_facial'] . "' ;";
    }

    $conexion->EjecutarQuery($sql);
}
$id_nervio_facial = 'new';
$sql = "SELECT * from nervio_facial WHERE `id_vinicial` = '" . $_REQUEST['id_vinicial'] . "' and `id_revaloracion` = '" . $_REQUEST['id_revaloracion'] . "' ";
$result = $conexion->EjecutarQuery($sql);
while ($row = mysql_fetch_array($result)) {
    $id_nervio_facial = $row['id_nervio_facial'];

    $rec_derecho = $row['rec_derecho'];
    $rec_izq = $row['rec_izq'];
    $nf_dulce = $row['nf_dulce'];
    $nf_salado = $row['nf_salado'];
    $nf_acido = $row['nf_acido'];
    $nf_frontal = $row['nf_frontal'];
    $nfs_der = $row['nfs_der'];
    $nfs_izq = $row['nfs_izq'];
    $obicular_der = $row['obicular_der'];
    $obicular_izq = $row['obicular_izq'];
    $opar_der = $row['opar_der'];
    $opar_izq = $row['opar_izq'];
    $nf_piramidal = $row['nf_piramidal'];
    $nfs_narizd = $row['nfs_narizd'];
    $nfs_narizi = $row['nfs_narizi'];
    $nfs_labd = $row['nfs_labd'];
    $nfs_labi = $row['nfs_labi'];
    $nfs_mayord = $row['nfs_mayord'];
    $nfs_mayori = $row['nfs_mayori'];
    $nfs_menord = $row['nfs_menord'];
    $nfs_menori = $row['nfs_menori'];
    $nfs_orald = $row['nfs_orald'];
    $nfs_orali = $row['nfs_orali'];
    $nfs_mentoniano = $row['nfs_mentoniano'];
    $nfs_labiod = $row['nfs_labiod'];
    $nfs_labioi = $row['nfs_labioi'];
    $dep_orald = $row['dep_orald'];
    $dep_orali = $row['dep_orali'];
    $buc_der = $row['buc_der'];
    $buc_izq = $row['buc_izq'];
    $ob_labiod = $row['ob_labiod'];
    $ob_labioi = $row['ob_labioi'];
    $risoriod = $row['risoriod'];
    $risorioi = $row['risorioi'];
    $plastimad = $row['plastimad'];
    $estiloideo = $row['estiloideo'];
    $vientre_p = $row['vientre_p'];
    $lac_der = $row['lac_der'];
    $lac_izq = $row['lac_izq'];
    $gla_subli = $row['gla_subli'];
    $muco_nariz = $row['muco_nariz'];
    $paladar_d = $row['paladar_d'];
    $paladar_b = $row['paladar_b'];
    $nfs_observacio = $row['nfs_observacio'];
    break;
}
?>
<script>

    $(function() {

        $("#close-nervio_facial").click(function() {
            $("#open-nervio_facial").show();
            $(this).hide();
            $("#content-nervio_facial").hide('slow');
        });

        $("#open-nervio_facial").click(function() {
            $("#close-nervio_facial").show();
            $(this).hide();
            $("#content-nervio_facial").show('slow');
        });

    });

</script>
<fieldset id="nervio_facial">
    <legend align="left"> <div class="arrow-c" id="close-nervio_facial"></div> <div class="arrow-o" id="open-nervio_facial" ></div> <font>Valoracion fisioterapia de neurorehabilitacion - Nervio Facial</font></legend>
    <div id="content-nervio_facial">
<?php
if (isset($_REQUEST['id_cita'])) {
    $button = '<button name="guardar_nervio_facial" id="guardar_nervio_facial" >Guardar</button>';
} else {
    $readonly = " readonly='readonly' ";
}
?>
        <form id="form_nervio_facial" name="form_nervio_facial" action="<?php echo @$action_form_nervio_facial ?>#nervio_facial" method="post">

            <input type="hidden" id="id_nervio_facial" name="id_nervio_facial" value="<?php echo @$id_nervio_facial ?>" />


            <input type="hidden" class="input_txt valid" id="id_nervio_facial" name="id_nervio_facial" value="<?php echo @$id_nervio_facial; ?>" />

            <p> <strong> </strong><br />
                <strong>Recorrido: </strong>Derecho: <strong>
                    <input type="text" class="input_txt valid" id="rec_derecho" name="rec_derecho" value="<?php echo @$rec_derecho; ?>" />
                </strong><br />
                Izquierdo:
                <input type="text" class="input_txt valid" id="rec_izq" name="rec_izq" value="<?php echo @$rec_izq; ?>" />
            </p>
            <p><strong>Alteración del gusto: </strong>dulce:
                <input type="text" class="input_txt valid" id="nf_dulce" name="nf_dulce" value="<?php echo @$nf_dulce; ?>" />
                Salado:
                <input type="text" class="input_txt valid" id="nf_salado" name="nf_salado" value="<?php echo @$nf_salado; ?>" />
                Acido:
                <input type="text" class="input_txt valid" id="nf_acido" name="nf_acido" value="<?php echo @$nf_acido; ?>" />
            </p>
            <p><strong>Componente motor:</strong></p>
            <p>Frontal:
                <input type="text" class="input_txt valid" id="nf_frontal" name="nf_frontal" value="<?php echo @$nf_frontal; ?>" />
                <br />
                Superciliar:  Derecho:
                <input type="text" class="input_txt valid" id="nfs_der" name="nfs_der" value="<?php echo @$nfs_der; ?>" />
                <br />
                <strong>                   </strong>Izquierdo:
                <input type="text" class="input_txt valid" id="nfs_izq" name="nfs_izq" value="<?php echo @$nfs_izq; ?>" />
                <br />
                Orbicular de  los ojos: Derecho:
                <input type="text" class="input_txt valid" id="obicular_der" name="obicular_der" value="<?php echo @$obicular_der; ?>" />
                <br />
                <strong>                                   </strong>Izquierdo:
                <input type="text" class="input_txt valid" id="obicular_izq" name="obicular_izq" value="<?php echo @$obicular_izq; ?>" />
                <br />
                Orbicular de  los parpados: Derecho:
                <input type="text" class="input_txt valid" id="opar_der" name="opar_der" value="<?php echo @$opar_der; ?>" />
                <br />
                <strong>                                           </strong>Izquierdo:
                <input type="text" class="input_txt valid" id="opar_izq" name="opar_izq" value="<?php echo @$opar_izq; ?>" />
            </p>
            <p><br />
                Piramidal o  nasal:
                <input type="text" class="input_txt valid" id="nf_piramidal" name="nf_piramidal" value="<?php echo @$nf_piramidal; ?>" />
                <br />
                Elevador de  las alas de la nariz: Derecho:
                <input type="text" class="input_txt valid" id="nfs_narizd" name="nfs_narizd" value="<?php echo @$nfs_narizd; ?>" />
                <br />
                <strong>                                                    </strong>Izquierdo:
                <input type="text" class="input_txt valid" id="nfs_narizi" name="nfs_narizi" value="<?php echo @$nfs_narizi; ?>" />
                <br />
                Elevador del  labio superior: Derecho:
                <input type="text" class="input_txt valid" id="nfs_labd" name="nfs_labd" value="<?php echo @$nfs_labd; ?>" />
                <br />
                <strong>                                             </strong>Izquierdo:
                <input type="text" class="input_txt valid" id="nfs_labi" name="nfs_labi" value="<?php echo @$nfs_labi; ?>" />
                <br />
                Cigomático  mayor: Derecho:
                <input type="text" class="input_txt valid" id="nfs_mayord" name="nfs_mayord" value="<?php echo @$nfs_mayord; ?>" />
                <br />
                <strong>                               </strong>Izquierdo:
                <input type="text" class="input_txt valid" id="nfs_mayori" name="nfs_mayori" value="<?php echo @$nfs_mayori; ?>" />
                <br />
                Cigomático  menor: Derecho:
                <input type="text" class="input_txt valid" id="nfs_menord" name="nfs_menord" value="<?php echo @$nfs_menord; ?>" />
                <br />
                <strong>                               </strong>Izquierdo:

                <input type="text" class="input_txt valid" id="nfs_menori" name="nfs_menori" value="<?php echo @$nfs_menori; ?>" />
                <br />
                Elevador del  ángulo oral: Derecho:<strong>
                    <input type="text" class="input_txt valid" id="nfs_orald" name="nfs_orald" value="<?php echo @$nfs_orald; ?>" />
                </strong><br />
                <strong>                                         </strong>Izquierdo:
                <input type="text" class="input_txt valid" id="nfs_orali" name="nfs_orali" value="<?php echo @$nfs_orali; ?>" />
                <br />
                Mentoniano:
                <input type="text" class="input_txt valid" id="nfs_mentoniano" name="nfs_mentoniano" value="<?php echo @$nfs_mentoniano; ?>" />
                <br />
                Depresor del  labio inferior: Derecho:  <strong>
                    <input type="text" class="input_txt valid" id="nfs_labiod" name="nfs_labiod" value="<?php echo @$nfs_labiod; ?>" />
                </strong><br />
                <strong>                                           </strong>Izquierdo:<strong>
                    <input type="text" class="input_txt valid" id="nfs_labioi" name="nfs_labioi" value="<?php echo @$nfs_labioi; ?>" />
                </strong><br />
                Depresor del  ángulo oral: Derecho: <strong>
                    <input type="text" class="input_txt valid" id="dep_orald" name="dep_orald" value="<?php echo @$dep_orald; ?>" />
                </strong><br />
                <strong>                                         </strong>Izquierdo:
                <input type="text" class="input_txt valid" id="dep_orali" name="dep_orali" value="<?php echo @$dep_orali; ?>" />
                <br />
                Buccinador:  Derecho:
                <input type="text" class="input_txt valid" id="buc_der" name="buc_der" value="<?php echo @$buc_der; ?>" />
                <br />
                <strong>                    </strong>Izquierdo:
                <input type="text" class="input_txt valid" id="buc_izq" name="buc_izq" value="<?php echo @$buc_izq; ?>" />
                <br />
                Orbicular de  los labios: Derecho:
                <input type="text" class="input_txt valid" id="ob_labiod" name="ob_labiod" value="<?php echo @$ob_labiod; ?>" />
                <br />
                <strong>                                      </strong>Izquierdo:
                <input type="text" class="input_txt valid" id="ob_labioi" name="ob_labioi" value="<?php echo @$ob_labioi; ?>" />
                <br />
                Risorio:  Derecho:
                <input type="text" class="input_txt valid" id="risoriod" name="risoriod" value="<?php echo @$risoriod; ?>" />
                <br />
                <strong>             </strong>Izquierdo:
                <input type="text" class="input_txt valid" id="risorioi" name="risorioi" value="<?php echo @$risorioi; ?>" />
                <br />
                Platisma:
                <input type="text" class="input_txt valid" id="plastimad" name="plastimad" value="<?php echo @$plastimad; ?>" />
                <br />
                Estiloioideo:
                <input type="text" class="input_txt valid" id="estiloideo" name="estiloideo" value="<?php echo @$estiloideo; ?>" />
                <br />
                Vientre  posterior del di gástrico:
                <input type="text" class="input_txt valid" id="vientre_p" name="vientre_p" value="<?php echo @$vientre_p; ?>" />&nbsp;</p>
            <p><strong>Componente motor visceral:</strong></p>
            <p>Glándula  lacrimal: Derecho:
                <input type="text" class="input_txt valid" id="lac_der" name="lac_der" value="<?php echo @$lac_der; ?>" />
                <br />
                <strong>                              </strong>Izquierdo:
                <input type="text" class="input_txt valid" id="lac_izq" name="lac_izq" value="<?php echo @$lac_izq; ?>" />
                <br />
                Glándulas  sublinguales:
                <input type="text" class="input_txt valid" id="gla_subli" name="gla_subli" value="<?php echo @$gla_subli; ?>" />
                <br />
                Membrana  mucosa de la nariz:
                <input type="text" class="input_txt valid" id="muco_nariz" name="muco_nariz" value="<?php echo @$muco_nariz; ?>" />
                <br />
                Paladar duro:
                <input type="text" class="input_txt valid" id="paladar_d" name="paladar_d" value="<?php echo @$paladar_d; ?>" />
                <br />
                Paladar  blando:
                <input type="text" class="input_txt valid" id="paladar_b" name="paladar_b" value="<?php echo @$paladar_b; ?>" />
            </p>
            <p><strong>OBSERVACIONES:
                    <input type="text" class="input_txt valid" id="nfs_observacio" name="nfs_observacio" value="<?php echo @$nfs_observacio; ?>" />
                </strong> </p>

<?php echo @$button ?>
        </form><br>
    </div>
</fieldset>