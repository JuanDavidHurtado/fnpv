<form>
    <label>Database</label>
    <input type="text" name="database" value="<?php echo @$_REQUEST['database'] ?>"/>
    <br>
    <label>Tabla</label>
    <input type="text" name="tabla" />
    <button>Aceptar</button>

</form>
<?php
$array_rows = array();
if (isset($_REQUEST['tabla'])) {
    include ('../control/utils.php');
    include ('../persistencia/conexion.php');
    $conexion = new Conexion();
    if (@$_REQUEST['database'] != '') {
        $conexion->SetDataBase(@$_REQUEST['database']);
    }
    $sql = 'SHOW COLUMNS FROM ' . $_REQUEST['tabla'];
    $result = $conexion->EjecutarQuery($sql);
    while ($row = mysql_fetch_array($result)) {
        $array_rows[] = $row;
    }
}


$cantidad = count($array_rows);
$primary = '';
//Field-Type-Null-Key-Default-Extra

$insert = "CODIGO INSERT ---------------------------------<br><br>";

if ($cantidad > 0) {
    $insert = "\$sql = \"INSERT INTO " . $_REQUEST['tabla'] . " (<br>";
}
for ($i = 0; $i < $cantidad; $i++) {
    $row = $array_rows[$i];

    if ($row['Key'] == 'PRI') {
        $primary = $row['Field'];
    }

    $insert .= '`' . $row['Field'] . '`';
    if ($i < ($cantidad - 1)) {
        $insert .= ',<br>';
    }
}
if ($cantidad > 0) {
    $insert .= "<br>) VALUES (<br>";
}
for ($i = 0; $i < $cantidad; $i++) {
    $row = $array_rows[$i];
    $insert .= $primary != $row['Field'] ? " '\".\$_REQUEST['" . $row['Field'] . "'].\"' " : 'NULL';
    if ($i < ($cantidad - 1)) {
        $insert .= ',<br>';
    }
}
if ($cantidad > 0) {
    $insert .= "<br>) \"; <br><br>";
}

echo $insert;

//---------------------------------------------------------------------

$update = "CODIGO ACTUALIZACION ---------------------------------<br><br>";
if ($cantidad > 0) {
    $update .= "\$sql = \"UPDATE " . $_REQUEST['tabla'] . " set <br>";
}
for ($i = 0; $i < $cantidad; $i++) {
    $row = $array_rows[$i];
    if ($row['Field'] != $primary) {
        $update .= '`' . $row['Field'] . '` = ' . " '\".\$_REQUEST['" . $row['Field'] . "'].\"' ";
        if ($i < ($cantidad - 1)) {
            $update .= ',<br>';
        }
    }
}
if ($cantidad > 0) {
    $update .= " WHERE `$primary` = '\".\$_REQUEST['$primary'].\"' ;\"; <br><br>";
}
echo $update;

//---------------------------------------------------------------------

$delete = "CODIGO DELETE ---------------------------------<br><br>";
if ($cantidad > 0) {
    $delete .= "\$sql = \"DELETE from " . $_REQUEST['tabla'] . " WHERE `$primary` = '\".\$_REQUEST['$primary'].\"';\"; <br><br>";
}
echo $delete;

// ---------------------------------------------------------------------

$select_datos = "CODIGO SELECT DATOS ---------------------------------<br><br>";
if ($cantidad > 0) {
    $select_datos .= "$" . $primary . " = 'new'; <br>";
    $select_datos .= "\$sql = \"SELECT * from " . $_REQUEST['tabla'] . " WHERE `$primary` = '\".\$_REQUEST['$primary'].\"' \"; <br>";
    $select_datos .= "\$result = \$conexion->EjecutarQuery(\$sql);<br>";
    $select_datos .= "while(\$row = mysql_fetch_array(\$result)){<br>";
    for ($i = 0; $i < $cantidad; $i++) {
        $row = $array_rows[$i];
        $select_datos .= '$' . $row['Field'] . ' = ' . " \$row['" . $row['Field'] . "'];<br> ";
    }
    $select_datos .= "break; }";
    $select_datos.='<br><br>';
    echo $select_datos;
}

// ---------------------------------------------------------------------

$input = "CODIGO SELECT DATOS ---------------------------------<br><br>";
if ($cantidad > 0) {
    for ($i = 0; $i < $cantidad; $i++) {
        $row = $array_rows[$i];
        $input .= '&lt;input type="text" class="input_txt valid" id="' . $row['Field'] . '" name="' . $row['Field'] . '" value="&lt;?php echo @$' . $row['Field'] . '; ?>" /><br>';
    }
    echo $input;
}
?>
