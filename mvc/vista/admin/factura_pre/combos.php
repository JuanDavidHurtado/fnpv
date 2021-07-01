lista de seleccionde conslta

         <select id='tipo_consulta' class="input_txt " name='tipo_consulta'>
                    <option value='0'>Seleccione</option>
                    <?php
                    //traer lista eps

                    $ret = '';
                    $sqlr = "Select * from fin_consulta";
                    $resultr = $conexion->EjecutarQuery($sqlr);

                    while ($rowr = mysql_fetch_array($resultr)) {
                         $nombre = $rowr['nombre'];
                       // if ($cup == $rowr['cups'])
                         // $sel = "selected='selected'";

                        echo "<option value='" . $rowr['id'] . "' $sel>" . $nombre . "</option>";
                        $sel = "";
                    }
                    ?>
           </select>


lsita de seleccion de causa externa

   <select id='causa_externa' class="input_txt " name='causa_externa'>
                    <option value='0'>Seleccione</option>
                    <?php
                    //traer lista eps

                    $ret = '';
                    $sqlr = "Select * from causa_externa";
                    $resultr = $conexion->EjecutarQuery($sqlr);

                    while ($rowr = mysql_fetch_array($resultr)) {
                         $nombre = $rowr['nombre'];
                       // if ($cup == $rowr['cups'])
                         // $sel = "selected='selected'";

                        echo "<option value='" . $rowr['id'] . "' $sel>" . $nombre . "</option>";
                        $sel = "";
                    }
                    ?>
           </select>

lista de seleccion tipo diagnostico


  <select id='causa_externa' class="input_txt " name='causa_externa'>
                    <option value='0'>Seleccione</option>
                    <?php
                    //traer lista eps

                    $ret = '';
                    $sqlr = "Select * from tipo_diagnostico";
                    $resultr = $conexion->EjecutarQuery($sqlr);

                    while ($rowr = mysql_fetch_array($resultr)) {
                         $nombre = $rowr['nombre'];
                       // if ($cup == $rowr['cups'])
                         // $sel = "selected='selected'";

                        echo "<option value='" . $rowr['id'] . "' $sel>" . $nombre . "</option>";
                        $sel = "";
                    }
                    ?>
           </select>