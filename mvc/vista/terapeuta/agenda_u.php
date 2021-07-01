<script>
    var id_tab = 0;

    function open_tab(id) {
        id_tab = id;
    }

    var id_cita_ = 0;
    function verificar_cita(identificacion, id_cita) {
        id_cita_ = id_cita;
        $("#identificacion_p").val(identificacion);
        $("#dialog-programar").dialog('open');
        verificar_paciente();
    }

    function load_itinerarios_usuario() {
        
        $("#content_itinerarios").html('');
        //var parameters = "opcion=2&id_usuario=<?php echo $_SESSION['id_usuario']; ?>&fecha=" + $("#fecha").val() + "&acc=1&ocancel=" + $("#ocancel").is(":checked");
        var parameters = "opcion=6&id_usuario=<?php echo $_SESSION['id_usuario']; ?>&fecha=" + $("#fecha").val() + "&acc=1&ocancel=" + $("#ocancel").is(":checked");
        console.log(parameters);
        $.ajax({
            data: parameters,
            type: "POST",
            //url: "<?php echo Utils::$http_ruta ?>mvc/vista/ajax_citas.php",
            url: "<?php echo Utils::$http_ruta ?>mvc/vista/ajax_agenda2.php",
            success: function(data) {
                $("#content_itinerarios").html(data);
                /*$("#tabs").tabs();
                 window.setTimeout(function() {
                 $("#tab" + id_tab).click();
                 }, 1000);*/
            }, error: function(request, error) {
                var data = 'Error loading data from server!';
                $("#content_itinerarios").html(data);
            }
        });

    }

    $(function() {

        $("#form_agenda_user").validate({
            errorElement: "div",
            rules: {
                fecha: {required: true}
            },
            messages: {
                fecha: {required: 'Seleccione fecha'}
            },
            submitHandler: function(form) {
                load_itinerarios_usuario();
            }
        });

        load_itinerarios_usuario();

    })

</script>

<div id="content_welcome" style="overflow-y:auto;" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
    <form class="form_agenda_user" name="form_agenda_user" id="form_agenda_user" >
        <table>

            <tbody><tr>

                    <td valign="top">

                        <label>Fecha</label>
                        <br>
                        <input type="text" name="fecha" id="fecha" onclick="style_()" class="input_txt fecha" value="<?php echo Date('Y-m-d'); ?>">


                    </td>

                    <td valign="top">

                        <label>Omitir cancelados</label>
                        <br>
                        <input type="checkbox" name="ocancel" id="ocancel" checked="checked" />
                    </td>

                    <td valign="top">

                        <button >Aceptar</button>

                    </td>

                </tr>

            </tbody>
        </table>
    </form>
    <div class="content_itinerarios" id="content_itinerarios">

    </div>  

</div>

<?php
include ($GLOBALS['raiz'] . 'mvc/vista/terapeuta/dialogs_agenda.php');
?>

