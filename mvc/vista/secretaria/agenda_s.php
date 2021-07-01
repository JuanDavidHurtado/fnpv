
<style>
    .content_itinerarios {
        overflow-x: auto;

    }
</style>  

<div id="content_welcome" style="overflow-y:auto;">


    <div id="tabs">
        <ul>
            <?php
            $array_row = array();
            $sql = "Select d.* from dependencia as d where d.estado <> 1 order by d.nombre asc  ";
            $result = $conexion->EjecutarQuery($sql);
            $i = 3;
            while ($row = mysql_fetch_array($result)) {
                $array_row[$i] = $row;
                ?>
                <li><a href="#tabs-<?php echo $i; ?>" onclick=""><?php echo $row['nombre']; ?></a></li>
                <?php
                $i++;
            }
            ?>
            <li><a href="#tabs-2" onclick="">TODOS</a></li>
            <li><a href="#tabs-1" onclick="">CREAR AGENDA</a></li> 
        </ul>

        <?php
        foreach ($array_row as $i => $row) {
            ?>
            <div id="tabs-<?php echo $i; ?>" class="content_tab" >
                <h3><?php echo $row['nombre']; ?></h3>
                <form id='datos_agenda_<?php echo $i; ?>' onsubmit="return false">
                    <table borde='0'>
                        <tr>
                            <td>
                                <?php
                                $sql = "Select distinct(u.id_usuario), u.* from usuario as u inner join usuario_proceso as up "
                                        . "on u.id_usuario = up.id_usuario "
                                        . "inner join proceso as p "
                                        . "on up.id_proceso = p.id_proceso "
                                        . "where p.id_dependencia = {$row['id_dependencia']} and up.id_usuario=u.id_usuario "
                                        . "order by u.identificacion asc";

                                //echo $sql.'<br>';
                                //$sql = "Select * from usuario where id_rol = 3 order by identificacion asc";
                                ?>
                                <label>Profesional</label><br>

                                <select id='id_usuario_<?php echo $i; ?>' data-id_dependencia="<?php echo $row['id_dependencia']; ?>" name="id_usuario" class="input_txt" onchange="load_areas(this, 'cid_area_<?php echo $i; ?>')">
                                    <option value="">[SELECCIONAR]</option>
                                    <?php
                                    $result = $conexion->EjecutarQuery($sql);

                                    while ($row = mysql_fetch_array($result)) {
                                        echo "<option value='" . $row['id_usuario'] . "'  >" . $row['identificacion'] . ' - ' . $row['apellido'] . ' ' . $row['nombre'] . "</option>";
                                    }
                                    ?>
                                </select>

                            </td>
                            <td>
                                <label>Area</label><br>
                                <div id='cid_area_<?php echo $i; ?>'>
                                    <select id='id_proceso_<?php echo $i; ?>' name="id_proceso" class="input_txt">
                                        <option value="">[SELECCIONAR]</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <label>Fecha</label><br>
                                <input onchange="loadDia(<?php echo $i; ?>)" type="text" name="fecha" id="fecha_1"  class="input_txt fecha" readonly="true" onclick="style_()" value="<?php echo Date('Y-m-d') ?>" />
                            </td>
                            <td>
                                <button onclick="loadDia(<?php echo $i; ?>)">Consultar</button>
                            </td>
                        </tr>
                    </table>


                    <div class="itinerario" id='content_dia_itinerario_<?php echo $i ?>'>

                    </div>
                </form>
            </div>
            <?php
        }
        ?>


        <div id="tabs-1" class="content_tab" > 
            <h3>CREAR AGENDA</h3>
            <form id='datos_agenda' onsubmit="return false">
                <table borde='0'>
                    <tr>
                        <td>
                            <label>Profesional</label><br>
                            <select id='id_usuario' name="id_usuario" class="input_txt" onchange="load_areas(this, 'cid_area')">
                                <option value="">[SELECCIONAR]</option>
                                <?php
                                $sql = "Select * from usuario where id_rol = 3 order by identificacion asc";
                                $result = $conexion->EjecutarQuery($sql);

                                while ($row = mysql_fetch_array($result)) {
                                    echo "<option value='" . $row['id_usuario'] . "'  >" . $row['identificacion'] . ' - ' . $row['apellido'] . ' ' . $row['nombre'] . "</option>";
                                }
                                ?>
                            </select>

                        </td>
                        <td>
                            <label>Area</label><br>
                            <div id='cid_area'>
                                <select id='id_proceso' name="id_proceso" class="input_txt">
                                    <option value="">[SELECCIONAR]</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <label>Sede</label><br>
                            <select id='id_sede' name="id_sede" class="input_txt">
                                <?php
                                $sql = "Select * from sede order by nombre asc";
                                $result = $conexion->EjecutarQuery($sql);

                                while ($row = mysql_fetch_array($result)) {
                                    echo "<option value='" . $row['id_sede'] . "'  >" . $row['nombre'] . "</option>";
                                }
                                ?>
                            </select>
                        </td>
                        <td>
                            <label>Consultorio</label><br>
                            <select id='id_consultorio' name="id_consultorio" class="input_txt">
                                <?php
                                $sql = "Select * from consultorio order by nombre asc";
                                $result = $conexion->EjecutarQuery($sql);

                                while ($row = mysql_fetch_array($result)) {
                                    echo "<option value='" . $row['id_consultorio'] . "'  >" . $row['nombre'] . "</option>";
                                }
                                ?>
                            </select>
                        </td>
                        <td>
                            <label>Mes</label><br>
                            <input onchange="laodMes()" type="text" name="fecha" id="fecha_<?php echo $row['id_dependencia'] ?>"  class="input_txt fecha" readonly="true" onclick="style_()" value="<?php echo Date('Y-m-d') ?>" />
                        </td>
                        <td>
                            <button onclick="laodMes()">Consultar</button>
                        </td>
                    </tr>
                </table>
                <div id='content_mes_program'>

                </div>
            </form>
        </div>
        <div id="tabs-2" class="content_tab" >
            <h3>TODAS LAS AREAS</h3>
            <form id='datos_agenda_2' onsubmit="return false">
                <table borde='0'>
                    <tr>
                        <td>
                            <label>Profesional</label><br>
                            <select id='id_usuario_2' name="id_usuario" data-id_dependencia="0" class="input_txt" onchange="load_areas(this, 'cid_area_2')">
                                <option value="">[SELECCIONAR]</option>
                                <?php
                                $sql = "Select * from usuario where id_rol = 3 order by identificacion asc";
                                $result = $conexion->EjecutarQuery($sql);

                                while ($row = mysql_fetch_array($result)) {
                                    echo "<option value='" . $row['id_usuario'] . "'  >" . $row['identificacion'] . ' - ' . $row['apellido'] . ' ' . $row['nombre'] . "</option>";
                                }
                                ?>
                            </select>

                        </td>
                        <td>
                            <label>Area</label><br>
                            <div id='cid_area_2'>
                                <select id='id_proceso_2' name="id_proceso" class="input_txt">
                                    <option value="">[SELECCIONAR]</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <label>Fecha</label><br>
                            <input onchange="loadDia(2)" type="text" name="fecha" id="fecha_1"  class="input_txt fecha" readonly="true" onclick="style_()" value="<?php echo Date('Y-m-d') ?>" />
                        </td>
                        <td>
                            <button onclick="loadDia(2)">Consultar</button>
                        </td>
                    </tr>
                </table>


                <div class="itinerario" id='content_dia_itinerario_2'>

                </div>
            </form>
        </div>
    </div>

</div>

<?php
include ($GLOBALS['raiz'] . 'mvc/vista/secretaria/dialogs_agenda.php');
?>

