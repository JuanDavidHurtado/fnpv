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

$form = "<p>&lt;?php<br />
  if (isset(\$_REQUEST['guardar_" . $_REQUEST['tabla'] . "']) &amp;&amp; isset(\$_REQUEST['id_cita'])) {</p>
<p> if (\$_REQUEST['id_" . $_REQUEST['tabla'] . "'] == 'new') {</p>
";

if ($cantidad > 0) {
    $form .= "\$sql = \"INSERT INTO " . $_REQUEST['tabla'] . " (<br>";
}
for ($i = 0; $i < $cantidad; $i++) {
    $row = $array_rows[$i];

    if ($row['Key'] == 'PRI') {
        $primary = $row['Field'];
    }

    $form .= '`' . $row['Field'] . '`';
    if ($i < ($cantidad - 1)) {
        $form .= ',<br>';
    }
}
if ($cantidad > 0) {
    $form .= "<br>) VALUES (<br>";
}
for ($i = 0; $i < $cantidad; $i++) {
    $row = $array_rows[$i];
    $form .= $primary != $row['Field'] ? " '\".\$_REQUEST['" . $row['Field'] . "'].\"' " : 'NULL';
    if ($i < ($cantidad - 1)) {
        $form .= ',<br>';
    }
}
if ($cantidad > 0) {
    $form .= "<br>) \"; <br><br>";
}


$form .= "<p> <br />
  } else if (\$_REQUEST['id_" . $_REQUEST['tabla'] . "'] != '') {</p>

";

if ($cantidad > 0) {
    $form .= "\$sql = \"UPDATE " . $_REQUEST['tabla'] . " set <br>";
}
for ($i = 0; $i < $cantidad; $i++) {
    $row = $array_rows[$i];
    if ($row['Field'] != $primary) {
        $form .= '`' . $row['Field'] . '` = ' . " '\".\$_REQUEST['" . $row['Field'] . "'].\"' ";
        if ($i < ($cantidad - 1)) {
            $form .= ',<br>';
        }
    }
}
if ($cantidad > 0) {
    $form .= " WHERE `$primary` = '\".\$_REQUEST['$primary'].\"' ;\"; <br><br>";
}


$form .= "
<p> }</p>
<p> \$conexion-&gt;EjecutarQuery(\$sql);<br />
  }<br />
</p>

";

if ($cantidad > 0) {
    $form .= "$" . $primary . " = 'new'; <br>";
    //$form .= "\$sql = \"SELECT * from " . $_REQUEST['tabla'] . " WHERE `$primary` = '\".\$_REQUEST['$primary'].\"' \"; <br>";
    $form .= "\$sql = \"SELECT * from " . $_REQUEST['tabla'] . " WHERE `id_vinicial` = '\" . \$_REQUEST['id_vinicial'] . \"' and `id_revaloracion` = '\" . \$_REQUEST['id_revaloracion'] . \"' \"; <br>";
    $form .= "\$result = \$conexion->EjecutarQuery(\$sql);<br>";
    $form .= "while(\$row = mysql_fetch_array(\$result)){<br>";
    for ($i = 0; $i < $cantidad; $i++) {
        $row = $array_rows[$i];
        $form .= '$' . $row['Field'] . ' = ' . " \$row['" . $row['Field'] . "'];<br> ";
    }
    $form .= "break; }";
    $form.='<br><br>';
}

$form .= "
<p>?&gt;<br />
  &lt;script&gt;</p>
<p> $(function(){</p>
<p> $(&quot;#close-" . $_REQUEST['tabla'] . "&quot;).click(function(){<br />
  $(&quot;#open-" . $_REQUEST['tabla'] . "&quot;).show();<br />
  $(this).hide();<br />
  $(&quot;#content-" . $_REQUEST['tabla'] . "&quot;).hide('slow');<br />
  });<br />
  <br />
  $(&quot;#open-" . $_REQUEST['tabla'] . "&quot;).click(function(){<br />
  $(&quot;#close-" . $_REQUEST['tabla'] . "&quot;).show();<br />
  $(this).hide();<br />
  $(&quot;#content-" . $_REQUEST['tabla'] . "&quot;).show('slow');<br />
  });<br />
  <br />
  });</p>
<p>&lt;/script&gt;<br />
  &lt;fieldset id=&quot;" . $_REQUEST['tabla'] . "&quot;&gt;<br />
  &lt;legend align=&quot;left&quot;&gt; &lt;div class=&quot;arrow-c&quot; id=&quot;close-" . $_REQUEST['tabla'] . "&quot;&gt;&lt;/div&gt; &lt;div class=&quot;arrow-o&quot; id=&quot;open-" . $_REQUEST['tabla'] . "&quot; &gt;&lt;/div&gt; &lt;font&gt;Valoracion terapia ocupacional - " . $_REQUEST['tabla'] . "&lt;/font&gt;&lt;/legend&gt;<br />
  &lt;div id=&quot;content-" . $_REQUEST['tabla'] . "&quot;&gt;<br />
  &lt;?php<br />
  if (isset(\$_REQUEST['id_cita'])) {<br />
  \$button = '&lt;button  name=&quot;guardar_" . $_REQUEST['tabla'] . "&quot; id=&quot;guardar_" . $_REQUEST['tabla'] . "&quot; &gt;Guardar&lt;/button&gt;';<br />
  } else {<br />
  \$readonly = &quot; readonly='readonly' &quot;;<br />
  }<br />
  ?&gt;<br />
  &lt;form id=&quot;form_" . $_REQUEST['tabla'] . "&quot; name=&quot;form_" . $_REQUEST['tabla'] . "&quot; action=&quot;&lt;?php echo @\$action_form_" . $_REQUEST['tabla'] . " ?&gt;#" . $_REQUEST['tabla'] . "&quot; method=&quot;post&quot;&gt;</p>
<p> &lt;input type=&quot;hidden&quot; id=&quot;id_" . $_REQUEST['tabla'] . "&quot; name=&quot;id_" . $_REQUEST['tabla'] . "&quot; value=&quot;&lt;?php echo @\$id_" . $_REQUEST['tabla'] . " ?&gt;&quot; /&gt;</p>
<p> &lt;table width=&quot;400&quot; border=&quot;0&quot; cellspacing=&quot;0&quot; cellpadding=&quot;0&quot; class=&quot;data&quot;&gt;<br />
  &lt;tr class=&quot;row1&quot;&gt;<br />
  <br />
  &lt;/tr&gt;<br />
  &lt;tr class=&quot;row1&quot;&gt;<br />
  <br />
  &lt;/tr&gt;<br />
  &lt;/table&gt;</p>

   ";

if ($cantidad > 0) {
    for ($i = 0; $i < $cantidad; $i++) {
        $row = $array_rows[$i];
        $form .= '&lt;input type="text" class="input_txt valid" id="' . $row['Field'] . '" name="' . $row['Field'] . '" value="&lt;?php echo @$' . $row['Field'] . '; ?>" /><br>';
    }
}

$form.="

<p> &lt;?php echo @\$button ?&gt;<br />
  &lt;/form&gt;&lt;br&gt;<br />
  &lt;/div&gt;<br />
  &lt;/fieldset&gt;</p>";

echo $form;
?>
