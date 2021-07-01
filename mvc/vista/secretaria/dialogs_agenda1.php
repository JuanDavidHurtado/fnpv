<script>

    var id_dependencia = 0;
        
    function load_areas(obj, target) {
        var valor = $(obj).val();
        id_dependencia = $(obj).data('id_dependencia');
        //alert(id_dependencia);

        if (valor !== '') {
            var parameters = "opcion=1&id_usuario=" + valor+'&id_dependencia='+id_dependencia;
            $.ajax({
                data: parameters,
                type: "POST",
                url: "<?php echo Utils::$http_ruta ?>mvc/vista/ajax_agenda2.php",
                success: function(data) {
                    //alert(target);
                    $("#" + target).html(data);
                }, error: function(request, error) {

                }
            });
        } else {
            $("#cid_area").html("<select id='id_proceso' name='id_proceso' class='input_txt'><option value=''>[SELECCIONAR]</option></select>");
        }
    }

    function laodMes() {

        $("#content_mes_program").html('');
        var parameters = "opcion=2&" + $('#datos_agenda').serialize();
        //alert(parameters);
        $.ajax({
            data: parameters,
            type: "POST",
            url: "<?php echo Utils::$http_ruta ?>mvc/vista/ajax_agenda2.php",
            success: function(data) {
                $("#content_mes_program").html(data);
                $("button").button();
            }, error: function(request, error) {

            }
        });



        return false;
    }

    function guardarItinerario() {

        var date = 'date=';
        $('.seleccionado').each(function(index) {
            date += $(this).data('date') + '_';
        });

        var parameters = "opcion=3&" + $('#datos_agenda').serialize() + "&" + date;
        //alert(parameters);
        $.ajax({
            data: parameters,
            type: "POST",
            url: "<?php echo Utils::$http_ruta ?>mvc/vista/ajax_agenda2.php",
            success: function(data) {
                //alert(data);
                //$("#content_mes_program").html(data);
                laodMes();
            }, error: function(request, error) {

            }
        });
    }

    var index_ = 0;
    function loadDia(index) {
        index_ = index;

        $('.itinerario').html('');
        $("#content_dia_itinerario_"+index).html('');
        var parameters = "opcion=4&" + $('#datos_agenda_'+index).serialize();
        //alert(parameters);
        $.ajax({
            data: parameters,
            type: "POST",
            url: "<?php echo Utils::$http_ruta ?>mvc/vista/ajax_agenda2.php",
            success: function(data) {
                
                $("#content_dia_itinerario_"+index).html(data);
                $("button").button();
            }, error: function(request, error) {

            }
        });



        return false;
    }

    function detalleAgenda(idAgenda) {
        $("#detalle_agenda").html('');
        var parameters = "opcion=5&idAgenda=" + idAgenda;
        $.ajax({
            data: parameters,
            type: "POST",
            url: "<?php echo Utils::$http_ruta ?>mvc/vista/ajax_agenda2.php",
            success: function(data) {
                $("#detalle_agenda").html(data);
                $('#dialog-detalle-agenda').dialog('open');
            }, error: function(request, error) {
                $("#detalle_agenda").html('Se detecto un error en el servidor!');
            }
        });
    }

    function borrarAageda(idAgenda) {

        var bool = confirm('¿Usted desea eliminar la agenda? Recuerde que las citas asignadas al itinerario tambien seran eliminadas. ');

        if (bool) {
            var parameters = "opcion=8&idAgenda=" + idAgenda;
            $.ajax({
                data: parameters,
                type: "POST",
                url: "<?php echo Utils::$http_ruta ?>mvc/vista/ajax_agenda2.php",
                success: function(data) {
                    //$("#detalle_agenda").html(data);
                    //$('#dialog-detalle-agenda').dialog('open');
                    $('#agenda' + idAgenda).hide();
                }, error: function(request, error) {
                    $("#detalle_agenda").html('Se detecto un error en el servidor!');
                }
            });

        }


    }
</script>
<script>

    var id_cita_ = 0;
    var estado_ = '';
    function cancel(id_cita, id_proceso, id_usuario, id_sesion, fecha, id_hidden) {
        id_proceso_ = id_proceso;
        id_usuario_ = id_usuario;
        id_sesion_ = id_sesion;
        fecha_ = fecha;
        id_hidden_ = id_hidden;

        id_cita_ = id_cita;
        estado_ = "CANCELADO";
        $("#dialog-cancelar").dialog('open');
    }

    function afirmar_cita() {

        var parameters = "opcion=9&id_cita=" + id_cita_ + "&estado=" + estado_;
        $.ajax({
            data: parameters,
            type: "POST",
            url: "<?php echo Utils::$http_ruta ?>mvc/vista/ajax.php",
            success: function(data) {
                $("#dialog-cancelar").dialog('close');
                try {
                    load_itinerarios(id_proceso_, $("#form_agenda_" + id_hidden_ + " [name=id_usuario]").val(), fecha_, id_hidden_);
                } catch (e) {
                }
                try {
                    load_itinerarios_usuario();
                } catch (e) {
                }

                try {
                    loadDia(index_);
                } catch (e) {
                }
            }, error: function(request, error) {
            }
        });

    }

    var comodin = null;
    function guardar_cita() {

        var grupo = $('#id_cup1').val() + ',' + $('#id_cup2').val() + ',' + $('#id_cup3').val() + ',' + $('#id_cup4').val();

        var parameters = "opcion=7&grupo_cups=" + grupo + "&id_proceso=" + id_proceso_ + "&id_usuario=" + id_usuario_ + "&id_paciente=" + object_ajax.historia + "&fecha=" + fecha_ + "&id_sesion=" + id_sesion_ + "&hora_inicio=" + hora_inicio_ + "&hora_fin=" + hora_fin_ + '&tipo_cita=' + $('#tipo_cita').val()+'&idAgenda='+id_agenda_;
        //alert(parameters);
        $.ajax({
            dataType: "json",
            data: parameters,
            type: "POST",
            url: "<?php echo Utils::$http_ruta ?>mvc/vista/ajax_agenda2.php",
            success: function(data) {
                console.log(data.sql);
                comodin = data;
                $("#dialog-programar").dialog('close');
                if (data.bool) {
                    try {
                        $('#id_cup1, #id_cup2, #id_cup3, #id_cup4').val(''); 
                        load_itinerarios(id_proceso_, $("#form_agenda_" + id_hidden_ + " [name=id_usuario]").val(), fecha_, id_hidden_);
                    } catch (e) {
                    }

                    try {
                        load_itinerarios_usuario();
                    } catch (e) {
                    }

                    try {
                        loadDia(index_);
                    } catch (e) {
                    }

                } else {
                    $("#nombre_paciente").html(data.info);
                    $("#dialog-not-cita").dialog('open');
                }

            }, error: function(request, error) {

            }
        });


    }

    var id_proceso_ = 0;
    var id_usuario_ = 0;
    var id_sesion_ = 0;
    var fecha_ = '';
    var id_hidden_ = 0;
    var hora_inicio_ = '';
    var hora_fin_ = '';
    var id_agenda_ = 0;
    function save_agenda(id_proceso, id_usuario, id_sesion, fecha, id_hidden, hora_inicio, hora_fin, id_agenda) {
        id_hidden_ = id_hidden;
        id_proceso_ = id_proceso;
        id_usuario_ = id_usuario;
        id_sesion_ = id_sesion;
        fecha_ = fecha;
        hora_inicio_ = hora_inicio;
        hora_fin_ = hora_fin;
        id_agenda_ = id_agenda;

        $("#dialog-programar").dialog('open');
    }

    function load_id_usuario(obj) {
        var valor = $("#" + obj.id).val();

        if (valor !== '') {
            var parameters = "opcion=3&id_proceso=" + valor;
            $.ajax({
                data: parameters,
                type: "POST",
                url: "<?php echo Utils::$http_ruta ?>mvc/vista/ajax.php",
                success: function(data) {
                    $("#content_id_usuario").html(data);
                }, error: function(request, error) {

                }
            });
        }
    }

    function load_itinerarios(id_proceso, id_usuario, fecha, id) {
        //content_itinerarios
        var parameters = "opcion=1&id_proceso=" + id_proceso + "&id_usuario=" + id_usuario + "&fecha=" + fecha;
        console.log('pp2: ' + parameters);
        $.ajax({
            data: parameters,
            type: "POST",
            url: "<?php echo Utils::$http_ruta ?>mvc/vista/ajax_citas.php",
            success: function(data) {
                $("#content_itinerarios_" + id).html(data);
            }, error: function(request, error) {

            }
        });
    }

    function style_() {
        $("#ui-datepicker-div").css('z-index', '100000');
    }

    function load_id_usuario(obj, id) {
        var valor = $("#" + obj.id).val();

        if (valor != '') {
            var parameters = "opcion=3&id_proceso=" + valor;
            $.ajax({
                data: parameters,
                type: "POST",
                url: "<?php echo Utils::$http_ruta ?>mvc/vista/ajax.php",
                success: function(data) {
                    $("#content_id_usuario_" + id).html(data);
                }, error: function(request, error) {

                }
            });
        } else {
            var data = '<select name="id_usuario"  class="input_txt" disabled="true" ><option value=""> [ SELECCIONAR ] </option></select>';
            $("#content_id_usuario_" + id).html(data);
        }
    }

    function clear_form_paciente() {
        $("#identificacion_p").val("");
        $("#tipo_id").val("");
        $("#historia").val("");
        $("#edad").val("");
        $("#nombre1").val("");
        $("#nombre2").val("");
        $("#apellido1").val("");
        $("#apellido2").val("");
        $("#fecha_n").val("");
        $("#sexo").val("");
        $("#domicilio").val("");
        $("#telefono").val("");
        $("#id_eps").val("");
        $("#id_regimen").val("");
    }


    function verificar_paciente() {


        var parameters = "opcion=6&identificacion=" + $("#identificacion_p").val();
        $.ajax({
            data: parameters,
            dataType: "json",
            type: "POST",
            url: "<?php echo Utils::$http_ruta ?>mvc/vista/ajax.php",
            success: function(data) {
                object_ajax = data;
                if (data.bool) {

                    $("#tipo_id").val(data.tipo_id);
                    $("#historia").val(data.historia);
                    $("#edad").val(data.edad);
                    $("#nombre1").val(data.nombre1);
                    $("#nombre2").val(data.nombre2);
                    $("#apellido1").val(data.apellido1);
                    $("#apellido2").val(data.apellido2);
                    $("#fecha_n").val(data.fecha_n);
                    $("#sexo").val(data.sexo);
                    $("#domicilio").val(data.domicilio);
                    $("#telefono").val(data.sexo);
                    $("#id_eps").val(data.id_eps);
                    $("#id_regimen").val(data.id_regimen);

                } else {

                    clear_form_paciente();

                }

            }, error: function(request, error) {

            }
        });


    }

    function facturar_cita() {
        var parameters = "opcion=9&id_cita=" + id_cita_;
    }


    var object_ajax = null;

    $(function() {

        $('.cup').change(function() {
            var id_cup = $(this).attr('id');
            var id_name = $(this).attr('name');

            //var codigo_cup=$(this).val()
            //document.getElementsByName(id_cup).value=codigo_cup;

            var parameters = "opcion=12&id_cup=" + $(this).val();
            $.ajax({
                data: parameters,
                dataType: "json",
                type: "POST",
                url: "<?php echo Utils::$http_ruta ?>mvc/vista/ajax.php",
                success: function(data) {
                    if (data.bool) {
                        $('#' + id_cup + '_descripcion').val(data.val);

                        //pendiente cambiar**************
                        //$('.'+id_name).val(data.cup);
                        //document.getElementsByName(id_name).value=data.cup;

                    }
                }, error: function(request, error) {

                }
            });
        });

        $('.cup2').change(function() {

            var id_cup = $(this).attr('name');
            var codigo_cup = $(this).val()

            document.getElementById(id_cup).value = codigo_cup;

            var parameters = "opcion=12&id_cup=" + $(this).val();
            // alert("aaa"+parameters);

            $.ajax({
                data: parameters,
                dataType: "json",
                type: "POST",
                url: "<?php echo Utils::$http_ruta ?>mvc/vista/ajax.php",
                success: function(data) {
                    if (data.bool) {
                        $('#' + id_cup + '_descripcion').val(data.val);
                    }
                }, error: function(request, error) {

                }
            });
        });





        $("#tabs").tabs();
        $(".fecha").datepicker({
            changeMonth: true,
            numberOfMonths: 3,
            minDate: '<?php echo Date('Y-m-d'); ?>',
            dateFormat: "yy-mm-dd"
        });
        $("#identificacion_p").change(function() {
            verificar_paciente();
        });

        $("#new_cita").validate({
            errorElement: "div",
            rules: {
                identificacion_p: {required: true, remote: {url: "<?php echo Utils::$http_ruta; ?>mvc/vista/principal/check-identificacion-paciente.php", type: "get"}},
                id_cup1: {required: true, remote: {url: "<?php echo Utils::$http_ruta; ?>mvc/vista/principal/check-cup.php", type: "get"}}

            },
            messages: {
                identificacion_p: {required: 'La identificaion es requerida', remote: 'Verificar Identificacion'},
                id_cup1: {required: 'El cup principal es requerido', remote: 'Verificar el cup ingresado'}
            },
            submitHandler: function(form) {

                guardar_cita();
                //alert('Save');

            }
        });

        $("#dialog-detalle-agenda").dialog({
            resizable: true,
            modal: true,
            autoOpen: false,
            show: "blind",
            hide: "explode",
            width: 1100,
            height: 500,
            close: function() {
                $("#detalle_agenda").html('');
            },
            buttons: {
                "Cerrar ventana": function() {
                    $(this).dialog("close");
                }
            }
        })


        $("#dialog-facturar").dialog({
            resizable: false,
            modal: true,
            autoOpen: false,
            show: "blind",
            hide: "explode",
            width: 1100,
            height: 500,
            close: function() {

            },
            buttons: {
                Facturar: function() {

                },
                "Cerrar ventana": function() {
                    $(this).dialog("close");
                }
            }
        })

        $("#dialog-cancelar").dialog({
            resizable: false,
            modal: true,
            autoOpen: false,
            show: "blind",
            hide: "explode",
            width: 350,
            height: 200,
            close: function() {

            },
            buttons: {
                /*"Facturar": function() {
                 facturar_cita();
                 },*/
                "Cancelar cita": function() {

                    afirmar_cita();

                    //add_agenda(id_proceso_,id_usuario_,id_sesion_,fecha_);
                },
                "Cerrar ventana": function() {
                    $(this).dialog("close");
                }
            }
        })

        $("#dialog-programar").dialog({
            resizable: true,
            modal: true,
            autoOpen: false,
            show: "blind",
            hide: "explode",
            width: 750,
            height: 550,
            close: function() {
                clear_form_paciente();
            },
            buttons: {
                Agendar: function() {
                    if (object_ajax !== null) {
                        if (object_ajax.bool) {
                            $("#new_cita").submit();
                        }
                    }
                },
                Cancelar: function() {
                    $(this).dialog("close");
                }
            }
        });


        $("#dialog-not-cita").dialog({
            resizable: false,
            modal: true,
            autoOpen: false,
            show: "blind",
            hide: "explode",
            width: 350,
            height: 200,
            close: function() {

            },
            buttons: {
                Aceptar: function() {
                    $(this).dialog("close");
                }
            }
        });

    });



</script>

<div id="dialog-programar" title="Programar Cita">
    <form action="#" id="new_cita" name="new_cita">

        <table border="0" cellpading="0" cellspacing="0">            
            <tbody><tr>                
                    <td valign="top">
                        <label>Ide Paciente</label>
                        <br>
                        <input type="text" name="identificacion_p" id="identificacion_p" class="input_txt" />
                    </td>
                    <td valign="top">
                        <label>Tipo</label>
                        <br>
                        <input type="text" class="input_txt" name="tipo_id" id="tipo_id" readonly="readonly" placeholder="Tipo Identificacion..." />
                    </td>
                    <td valign="top">
                        <label>Historia</label>
                        <br>
                        <input class="input_txt" type="text" name="historia" id="historia" readonly="readonly" placeholder="Historia..." />
                    </td>
                    <td valign="top">
                        <label>Edad</label>
                        <br>
                        <input class="input_txt" type="text" name="edad" id="edad" readonly="readonly" placeholder="Edad..." />
                    </td>                             
                </tr>
                <tr>

                    <td>
                        <label>Primer nombre</label>
                        <br>
                        <input class="input_txt" type="text" name="nombre1" id="nombre1" placeholder="Primer nombre..." readonly="readonly">                    
                    </td>
                    <td>
                        <label>Segundo nombre</label>
                        <br>
                        <input class="input_txt" type="text" name="nombre2" id="nombre2" placeholder="Segundo nombre..." readonly="readonly">
                    </td>                
                    <td>
                        <label>Primer apellido</label>
                        <br>
                        <input class="input_txt" type="text" name="apellido1" id="apellido1" placeholder="Primmer apellido..." readonly="readonly">
                    </td>                
                    <td>
                        <label>Segundo apellido</label>
                        <br>
                        <input class="input_txt" type="text" name="apellido2" id="apellido2" placeholder="Identificacion..." readonly="readonly">
                    </td>

                </tr>
                <tr>

                    <td>
                        <label>Fecha nacimiento</label>
                        <br>
                        <input class="input_txt" type="text" readonly="readonly" name="fecha_n" id="fecha_n" placeholder="Fecha nacimiento..." readonly="readonly">
                    </td>
                    <td>
                        <label>Sexo</label>
                        <br>
                        <input class="input_txt" name="sexo" id="sexo" type="text" readonly="readonly" placeholder="Sexo..." />

                    </td>
                    <td>
                        <label>Domicilio</label>
                        <br>
                        <input class="input_txt" type="text" name="domicilio" id="domicilio" placeholder="Domicilio..." readonly="readonly" placeholder="Domicilio..." />
                    </td>
                    <td>
                        <label>Telefono</label>
                        <br>
                        <input class="input_txt" type="text" name="telefono" id="telefono" placeholder="Telefono..." readonly="readonly" placeholder="Telefono..." />
                    </td>


                </tr>

                <tr>

                    <td>
                        <label>REGIMEN</label>
                        <br>
                        <input type="text" class="input_txt" name="id_regimen" id="id_regimen" readonly="readonly" placeholder="Regimen..." />
                    </td>
                    <td>
                        <div class="l_eps">
                            <label>EPS</label>
                            <br>
                            <div id="c_eps">
                                <input type="text" class="input_txt" name="id_eps" id="id_eps" readonly="readonly" placeholder="EPS..." />
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="l_eps">
                            <label>TIPO CITA</label>
                            <br>
                            <select name="tipo_cita" id="tipo_cita">
                                <option value="CONSULTA">CONSULTA</option>
                                <option value="PROCEDIMIENTO">PROCEDIMIENTO</option>
                            </select>
                        </div>
                    </td>

                    <td></td>

                </tr>
            </tbody></table>

        <label>Cups</label>
        <table>
            <tr>
                <td width="168">
                    <label>Cup principal</label><br>
                    <input type="text" class="input_txt cup" name="id_cup[1]" id="id_cup1" placeholder="" />                </td>
                <td width="174"><select id='id_cup_1' class="input_txt cup2" name='id_cup1'  value="0">
                        <option value=''>Seleccione</option>
                        <?php
                        //consulta para el cup

                        $cup = $id_cup;
                        $sel = '';
                        $ret = '';
                        $sqlr = "Select * from cups";
                        $resultr = $conexion->EjecutarQuery($sqlr);

                        while ($rowr = mysql_fetch_array($resultr)) {
                            $nombre_cup = $rowr['nombre'];
                            //if ($cup == $rowr['cups'])
                            //  $sel = "selected='selected'";

                            echo "<option value='" . $rowr['cups'] . "' $sel>" . $nombre_cup . "</option>";
                            $sel = "";
                        }
                        ?>
                    </select></td>
                <td width="265">
                    <label>Descripcion</label><br>
                    <input type="text" class="input_txt" style="min-width: 321px" name="id_cup1_descripcion" id="id_cup1_descripcion" placeholder="" />                </td>
            </tr>
            <tr>
                <td>
                    <label>Cup 2</label><br>
                    <input type="text" class="input_txt cup" name="id_cup[2]" id="id_cup2" placeholder="" />                </td>
                <td><select id='id_cup_2' class="input_txt cup2" name='id_cup2'  value="0">
                        <option value=''>Seleccione</option>
                        <?php
                        //consulta para el cup

                        $cup = $id_cup;
                        $sel = '';
                        $ret = '';
                        $sqlr = "Select * from cups";
                        $resultr = $conexion->EjecutarQuery($sqlr);

                        while ($rowr = mysql_fetch_array($resultr)) {
                            $nombre_cup = $rowr['nombre'];
                            //if ($cup == $rowr['cups'])
                            //  $sel = "selected='selected'";

                            echo "<option value='" . $rowr['cups'] . "' $sel>" . $nombre_cup . "</option>";
                            $sel = "";
                        }
                        ?>
                    </select></td>
                <td>
                    <label>Descripcion</label><br>
                    <input type="text" class="input_txt" style="min-width: 321px" name="id_cup2_descripcion" id="id_cup2_descripcion" placeholder="" />                </td>
            </tr>
            <tr>
                <td>
                    <label>Cup 3</label><br>
                    <input type="text" class="input_txt cup" name="id_cup[3]" id="id_cup3" placeholder="" />                </td>
                <td><select id='id_cup_6' class="input_txt cup2" name='id_cup3'  value="0">
                        <option value=''>Seleccione</option>
                        <?php
                        //consulta para el cup

                        $cup = $id_cup;
                        $sel = '';
                        $ret = '';
                        $sqlr = "Select * from cups";
                        $resultr = $conexion->EjecutarQuery($sqlr);

                        while ($rowr = mysql_fetch_array($resultr)) {
                            $nombre_cup = $rowr['nombre'];
                            //if ($cup == $rowr['cups'])
                            //  $sel = "selected='selected'";

                            echo "<option value='" . $rowr['cups'] . "' $sel>" . $nombre_cup . "</option>";
                            $sel = "";
                        }
                        ?>
                    </select></td>
                <td>
                    <label>Descripcion</label><br>
                    <input type="text" class="input_txt" style="min-width: 321px" name="id_cup3_descripcion" id="id_cup3_descripcion" placeholder="" />                </td>
            </tr>
            <tr>
                <td>
                    <label>Cup 4</label><br>
                    <input type="text" class="input_txt cup" name="id_cup[4]" id="id_cup4" placeholder="" />                </td>
                <td><select id='id_cup_4' class="input_txt cup2" name='id_cup4'  value="0">
                        <option value=''>Seleccione</option>
                        <?php
                        //consulta para el cup

                        $cup = $id_cup;
                        $sel = '';
                        $ret = '';
                        $sqlr = "Select * from cups";
                        $resultr = $conexion->EjecutarQuery($sqlr);

                        while ($rowr = mysql_fetch_array($resultr)) {
                            $nombre_cup = $rowr['nombre'];
                            //if ($cup == $rowr['cups'])
                            //  $sel = "selected='selected'";

                            echo "<option value='" . $rowr['cups'] . "' $sel>" . $nombre_cup . "</option>";
                            $sel = "";
                        }
                        ?>
                    </select></td>
                <td>
                    <label>Descripcion</label><br>
                    <input type="text" class="input_txt" style="min-width: 321px" name="id_cup4_descripcion" id="id_cup4_descripcion" placeholder="" />                </td>
            </tr>
        </table>
    </form>
</div>

<div id="dialog-cancelar" title="Proceso a realizar">


    <p>

        Que desea realizar?

    </p>


</div>

<div id="dialog-not-cita" title="No se puede asignar cita">


    <p>

        El paciente <label id="nombre_paciente"></label> ya tiene una cita en el mismo horario, o la fecha debe
        ser superior verifica e intenta nuevamente.
    </p>


</div>

<div id="dialog-facturar" title="Facturar cita">


    <table>
        <tr>
            <td>
                <label>Fecha facturacion:</label><br>
                <input readonly="" type="text" class="input_txt" id="" name="fecha_facturacion" value="<?php echo Date('Y-m-d'); ?>" /> 
            </td>
            <td>
                <label>Fecha inicio del periodo:</label><br>
                <?php
                $fecha1 = new DateTime();
                $fecha1->modify('first day of this month');
                // imprime por ejemplo: 01/12/2012
                ?>
                <input  readonly="" type="text" class="input_txt" id="" name="fecha_facturacion"  value="<?php echo $fecha1->format('Y-m-d'); ?>" /> 
            </td>
            <td>
                <?php
                $fecha2 = new DateTime();
                $fecha2->modify('last day of this month');
                // imprime por ejemplo: 01/12/2012
                ?>
                <label>Fecha final del periodo:</label><br>
                <input  readonly="" type="text" class="input_txt" id="" name="fecha_facturacion" value="<?php echo $fecha2->format('Y-m-d'); ?>" /> 
            </td>
        </tr>
        <tr>
            <td>
                <label>Sede:</label><br>
                <input  readonly="" value="SIEMPREE" type="text" class="input_txt" id="" name="fecha_facturacion" /> 
            </td>
            <td>

            </td>
            <td>

            </td>
        </tr>
        <tr>
            <td>
                <label>Facturada a:</label><br>

                <select name="eps" id="eps" class="input_txt valid">
                    <option>Seleccionar</option>
                    <?php
                    $sql_e = 'Select * from eps where estado=0 order by nombre asc ';
                    $result = $conexion->EjecutarQuery($sql_e);
                    while ($row_e = mysql_fetch_array($result)) {
                        echo "<option value='{$row_e['id_eps']}'>{$row_e['nombre']}</option>";
                    }
                    ?>
                </select>
            </td>
            <td>
                <label>Contrato:</label><br>
                <select name="contrato" id="contrato" class="input_txt valid">
                    <option>Seleccionar</option>
                    <?php
                    $sql_e = 'Select * from contrato where estado=0 order by nombre asc ';
                    $result = $conexion->EjecutarQuery($sql_e);
                    while ($row_e = mysql_fetch_array($result)) {
                        echo "<option value='{$row_e['id_contrato']}'>{$row_e['nombre']}</option>";
                    }
                    ?>
                </select>
            </td>
            <td>
                <label>Descripcion:</label><br>
                <input type = "text" style = "min-width: 250px" class = "input_txt" id = "" name = "fecha_facturacion" />
            </td>
        </tr>
    </table>
    <br>
    <table border = "1" style = "border-collapse: collapse;border-color:rgba(0,0,0,0);">
        <tr>
            <td>Fecha</td>
            <td>Autorizacion</td>
            <td>Servicio</td>
            <td>$ Valor servicio</td>
            <td>Cant</td>
            <td>$ Valor total</td>
        </tr>
        <tr>

            <td><input type = "text" class = "input_txt" id = "" name = "fecha_facturacion" /> </td>
            <td><input type = "text" class = "input_txt" id = "" name = "fecha_facturacion" /> </td>
            <td><input type = "text" class = "input_txt" id = "" name = "fecha_facturacion" /> </td>
            <td><input type = "text" class = "input_txt" id = "" name = "fecha_facturacion" /> </td>
            <td><input type = "text" class = "input_txt" id = "" name = "fecha_facturacion" /> </td>
            <td><input type = "text" class = "input_txt" id = "" name = "fecha_facturacion" /> </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Cuota moderadora <input type = "checkbox" /></td>
            <td><input type = "text" class = "input_txt" id = "" name = "fecha_facturacion" /> </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Copago <input type = "checkbox" /></td>
            <td><input type = "text" class = "input_txt" id = "" name = "fecha_facturacion" /> </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Comision</td>
            <td><input type = "text" class = "input_txt" id = "" name = "fecha_facturacion" /> </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Descuento</td>
            <td><input type = "text" class = "input_txt" id = "" name = "fecha_facturacion" /> </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><strong>Total</strong></td>
            <td><input type = "text" class = "input_txt" id = "" name = "fecha_facturacion" /> </td>
        </tr>
    </table>


</div>

<div id="dialog-detalle-agenda" title="Detalle agenda">


    <div id="detalle_agenda">

    </div>
    <a href="javaScript:imprSelec('detalle_agenda')">Imprimir</a>


</div>


<script>

    $(function() {

        $("#ui-datepicker-div").css('display', 'none');

    });

</script>