<form action="gordenprocedimiento.php?id=9012&orden=15079" method="post" name="formulario" onsubmit="return comprobar()" id="formulario" enctype="multipart/form-data">
    <input name="fechasol" type="hidden" value="2014-01-10" />
    <input name="horasol" type="hidden" value="10:30" />
    <table border="0" class="contenedorF0F0F0" align="center" width="1000" >
        <tr><td colspan="6" class="table1" align="center"><h3>Registrar procedimiento</h3></td></tr>
        <tr>
            <td width="130">Orden:</td>
            <td class="tablewhite">15079</td>
            <td class="tablewhite">Fecha Atenci&oacute;n :<input name="fecha" readonly="true" class="campofecha" type="text" value="2014-01-10" />
                Hora Atenci&oacute;n:
                <select name="hora">
                    <option value="00" >00</option>
                    <option value="01" >01</option>
                    <option value="02" >02</option>
                    <option value="03" >03</option>
                    <option value="04" >04</option>
                    <option value="05" >05</option>
                    <option value="06" >06</option>
                    <option value="07" >07</option>
                    <option value="08" >08</option>
                    <option value="09" >09</option>
                    <option value="10" selected>10</option>
                    <option value="11" >11</option>
                    <option value="12" >12</option>
                    <option value="13" >13</option>
                    <option value="14" >14</option>
                    <option value="15" >15</option>
                    <option value="16" >16</option>
                    <option value="17" >17</option>
                    <option value="18" >18</option>
                    <option value="19" >19</option>
                    <option value="20" >20</option>
                    <option value="21" >21</option>
                    <option value="22" >22</option>
                    <option value="23" >23</option>
                </select>:
                <select name="minutos">
                    <option value="00" >00</option>
                    <option value="01" >01</option>
                    <option value="02" >02</option>
                    <option value="03" >03</option>
                    <option value="04" >04</option>
                    <option value="05" >05</option>
                    <option value="06" >06</option>
                    <option value="07" >07</option>
                    <option value="08" >08</option>
                    <option value="09" >09</option>
                    <option value="10" >10</option>
                    <option value="11" >11</option>
                    <option value="12" >12</option>
                    <option value="13" >13</option>
                    <option value="14" >14</option>
                    <option value="15" >15</option>
                    <option value="16" >16</option>
                    <option value="17" >17</option>
                    <option value="18" >18</option>
                    <option value="19" >19</option>
                    <option value="20" >20</option>
                    <option value="21" >21</option>
                    <option value="22" >22</option>
                    <option value="23" >23</option>
                    <option value="24" >24</option>
                    <option value="25" >25</option>
                    <option value="26" >26</option>
                    <option value="27" >27</option>
                    <option value="28" >28</option>
                    <option value="29" >29</option>
                    <option value="30" >30</option>
                    <option value="31" >31</option>
                    <option value="32" >32</option>
                    <option value="33" >33</option>
                    <option value="34" >34</option>
                    <option value="35" >35</option>
                    <option value="36" >36</option>
                    <option value="37" >37</option>
                    <option value="38" >38</option>
                    <option value="39" >39</option>
                    <option value="40" >40</option>
                    <option value="41" >41</option>
                    <option value="42" >42</option>
                    <option value="43" >43</option>
                    <option value="44" >44</option>
                    <option value="45" >45</option>
                    <option value="46" >46</option>
                    <option value="47" >47</option>
                    <option value="48" >48</option>
                    <option value="49" >49</option>
                    <option value="50" selected>50</option>
                    <option value="51" >51</option>
                    <option value="52" >52</option>
                    <option value="53" >53</option>
                    <option value="54" >54</option>
                    <option value="55" >55</option>
                    <option value="56" >56</option>
                    <option value="57" >57</option>
                    <option value="58" >58</option>
                    <option value="59" >59</option>
                </select>

            </td>
            <td> Autorizacion :</td><td><input name="autorizacion" type="text" maxlength="15" /></td>
        </tr>
        <tr>
            <td>Servicio</td>
            <td class="tablewhite">881432<input name="cod" type="hidden" value="881432" /></td><td class="tablewhite" colspan="2">ULTRASONOG RAFÍA OBSTETRICA TRANSVAGINAL<input name="nombre" type="hidden" value="ULTRASONOG RAFÍA OBSTETRICA TRANSVAGINAL" /></td>
            <td  colspan="" class="tablewhite">Cant :<input name="cantidad" type="text" size="2" maxlength="2"  value="1" onkeyup="numero('formulario', 'cantidad')" readonly="true"/></td>
        </tr> 
        <tr>
            <td>Ambito de realizaci&oacute;n :</td>
            <td colspan="4" class="tablewhite"><select name="ambito">
                    <option value=""></option>
                    <option value="1">AMBULATORIO</option>
                    <option value="2">HOSPITALARIO</option>
                    <option value="3" >URGENCIAS</option>
                </select></td>
        </tr>
        <tr>
            <td>Finalidad procedimiento :</td>
            <td colspan="4" class="tablewhite"><select name="finalidad">
                    <option value="1">DIAGNOSTICO</option>
                    <option value="2">TERAPEUTICO</option>
                    <option value="3">PROTECCION ESPECIFICA</option>
                    <option value="4">DETECCION TEMPRANA ENFERMEDAD GENERAL</option>
                    <option value="5">DETECCION TEMPRANA ENFERMEDAD PROFESIONAL</option>
                </select></td>
        </tr>

        <tr class="oculta" id='per'>
            <td>Personal que atiende el procedimiento :</td>
            <td colspan="" class="tablewhite"><select name="personal">
                    <option value=""></option>
                    <option value="1">MEDICO(A) ESPECIALISTA</option>
                    <option value="2">MEDICO(A) GENERAL</option>
                    <option value="3">ENFERMERA(O)</option>
                    <option value="4">AUXILIAR DE ENFERMERIA</option>
                    <option value="5">OTRO</option>
                </select></td>
            <td colspan="4"><strong>Diligenciable solo para procedimientos relacionados con el parto</strong></td>
        </tr>
        <input name="rn" type="hidden" value="0" />
        <input name="npartos" type="hidden" value="" />
        <tr class="oculta">
            <td colspan="5">
                <label><strong>Diligenciable solo para procedimientos de parto</strong></label>
                <label style="margin-left:580px" class="tablewhite">Adicionar parto(s) <img src="../img/add.png" class="cursor" onclick="agregarparto()"/></label><br /><br />

                <div id="parto">

                    <table class="table1" width="100%" border="0"><tr>
                            <td>Edad gestacional :</td>
                            <td class="tablewhite"> <select name="edad_gestacional">
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                    <option value="32">32</option>
                                    <option value="33">33</option>
                                    <option value="34">34</option>
                                    <option value="35">35</option>
                                    <option value="36">36</option>
                                    <option value="37">37</option>
                                    <option value="38">38</option>
                                    <option value="39">39</option>
                                    <option value="40">40</option>
                                    <option value="41">41</option>
                                </select> semanas
                            </td>
                            <td>Control prenatal</td>
                            <td class="tablewhite">
                                <select name="control_pre">
                                    <option value="1">SI</option>
                                    <option value="2">NO</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                </div></td>

        </tr>

        <input name="concepto" type="hidden" value="02" />
        <tr class="oculta"><td colspan="5">
                <strong>Diligenciable solo para procedimientos quirurgicos</strong><br /><br />
                <table class="table1" width="100%">
                    <tr class="oculta">
                        <td>Dx principal :
                        <td colspan="2"><input name="codigodxprincipal" type="text" size="20"  value=""  readonly="true"/>
                            <input name="nombredxprincipal" type="text" size="100" value=""  readonly="true"/><img src="../img/buscar.png" class="pointer" onclick="buscardiag('codigodxprincipal', 'nombredxprincipal', 'formulario')" />
                        </td>
                    </tr>
                    <tr>
                        <td>Dx relacionado :</td>
                        <td colspan="2"><input name="codigodxrelacionado" type="text" size="20"  value=""  readonly="true"/>
                            <input name="nombredxrelacionado" type="text" size="100" value=""  readonly="true"/><img src="../img/buscar.png" class="pointer" onclick="buscardiag('codigodxrelacionado', 'nombredxrelacionado', 'formulario')" />
                        </td>
                    </tr>
                    <tr>
                        <td>Dx compliaci&oacute;n :</td>
                        <td colspan="2"><input name="codigodxcomplicacion" type="text" size="20"  value=""  readonly="true"/>
                            <input name="nombredxcomplicacion" type="text" size="100" value=""  readonly="true"/><img src="../img/buscar.png" class="pointer" onclick="buscardiag('codigodxcomplicacion', 'nombredxcomplicacion', 'formulario')" />
                        </td>
                    </tr></table></td></tr>
        <tr class="oculta">
            <td colspan="2">Forma realización acto quirurgico
            <td colspan="1" class="tablewhite"><select name="forma">
                    <option value=""></option>
                    <option value="1">UNICO O UNILATERAL</option>
                    <option value="2">M&Uacute;LTIPLE O BILATERAL, MISMA VIA, DIFERENTE ESPECIALIDAD</option>
                    <option value="3">M&Uacute;LTIPLE O BILATERAL, MISMA VIA, MISMA ESPECIALIDAD</option>
                    <option value="4">M&Uacute;LTIPLE O BILATERAL, DIFERENTE VIA, DIFERENTE ESPECIALIDAD</option>
                    <option value="5">M&Uacute;LTIPLE O BILATERAL, DIFERENTE VIA, MISMA ESPECIALIDAD</option>
                </select></td>
        </tr>
        <tr><td colspan="5">Ingresar Resultado / Decripci&oacute;n / Nota (Para ingreso a historia clinica)</td></tr>
        <tr><td colspan="5" class="tablewhite">
                <textarea name="descripcion" cols="100" rows="4" onkeyup="caracteres('formulario', 'descripcion', 2000)" ></textarea>
            </td>
        <tr><td colspan="5" class="tablewhite">Imagen<br />
                <input name="imagen" type="file" size="50" /></td>
        </tr>
        <tr>
            <td colspan="5" align="center"> <input type="submit" class="boton" value="Guardar"/></td>
        </tr>
    </table>
</form>