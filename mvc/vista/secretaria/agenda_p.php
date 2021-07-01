<script>


   var id_proceso_ = 0;
    var id_usuario_ = 0;
    var id_sesion_ = 0;
    var fecha_ = '';
    var id_hidden_ = 0;
    var hora_inicio_ = '';
    var hora_fin_ = '';
    var id_agenda_ = 0;

  function cancel(id_cita, id_proceso, id_usuario, id_sesion, fecha, id_hidden,motivo_c,usuario_2) {
        id_proceso_ = id_proceso;
        id_usuario_ = id_usuario;
        id_sesion_ = id_sesion;
        fecha_ = fecha;
        id_hidden_ = id_hidden;
        motivo_= $("#motivo_cx").val();
        usuario_2_=<?php echo $vtt=$_SESSION["id_usuario"]; ?>;

        id_cita_ = id_cita;
        estado_ = "CANCELADO";
        $("#dialog-cancelar").dialog('open');
    }


    function load_itinerarios_paciente(){

        
        
        var parameters = "opcion=3&identificacion_p="+$("#identificacion_p").val()+"&from="+$("#from").val()+"&to="+$("#to").val();
        


            $.ajax({
                data: parameters, 
                type: "POST",
                url: "<?php echo Utils::$http_ruta ?>mvc/vista/ajax_citas.php", 
                success: function(data){
                    $("#content_itinerarios_paciente").html(data);
                    $( "#tabs" ).tabs();
                    window.setTimeout(function(){
                        //$("#tab"+id_tab).click();
                    },1000);                    
                },error:function(request,error){

                }
            });
        
    }
    
    $(function(){
    
        $("#form_agenda_paciente").validate({  
            errorElement:"div",
            rules: {
                identificacion_p:{required: true,remote: {url: "<?php echo Utils::$http_ruta; ?>mvc/vista/principal/check-identificacion-paciente.php", type: "get"}}
            },
            messages: {  
                identificacion_p:{required:'Ingrese identificacion paciente',
                                  remote:'Paciente no encontrado'}                
            },
            submitHandler: function(form) {
                load_itinerarios_paciente();
            }
        });    
    
    })

     

    $(function() {

         function afirmar_cita_x() {

        motivo_= $("#motivo_cx").val();

 usuario_2_=<?php echo $vtt=$_SESSION["id_usuario"]; ?>;
  estado_ = "CANCELADO";

        var parameters = "opcion=9&id_cita=" + id_cita_ + "&estado=" + estado_+ "&motivo=" + motivo_+ "&usuario_2=" +usuario_2_+""  ;

  //  alert(parameters+"aaaa");
        if((usuario_2_!="")&&(motivo_!="")){

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

            //$("#motivo_cx").val("");

            location.reload(true);
    }



        var dates = $('#from, #to').datepicker({
            dateFormat: 'yy-mm-dd',
            defaultDate: "+1w",
            changeMonth: true,
            numberOfMonths: 1,
            onSelect: function(selectedDate) {
                var option = this.id == "from" ? "minDate" : "maxDate";
                var instance = $(this).data("datepicker");
                var date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
                dates.not(this).datepicker("option", option, date);
            }
        });



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

                    ///afirmar_cita();

                    //add_agenda(id_proceso_,id_usuario_,id_sesion_,fecha_);

                    var motivo = $("#motivo_cx").val();
                    if (motivo!=""){
                           afirmar_cita_x();
                    }else{
                        alert("Debe registrar motivo de cancelacion");
                    }


                },
                "Cerrar ventana": function() {
                    $(this).dialog("close");
                }
            }
            
        })




    function style_() {
        $("#ui-datepicker-div").css('z-index', '100000');
    }



    }); // creacion jquery



  

    
    var id_cita_ = 0;
    var estado_ = "CANCELADO";

    function cancel(id_cita) {


        id_cita_ = id_cita;
        estado_ = "CANCELADO";
        $("#dialog-cancelar").dialog('open');
    }

     function verificar_cita_x(identificacion, id_cita) {

       //alert("AA");
       id_cita_ = id_cita;
        $("#identificacion_p").val(identificacion);
        $("#dialog-cancelar").dialog('open');

    }


</script>

 



<div id="content_welcome" style="overflow-y:auto;" class="ui-tabs ui-widget ui-widget-content ui-corner-all">

   
    
    <form class="form_agenda_paciente" name="form_agenda_paciente" id="form_agenda_paciente" >
       <br><br>
        <table>

            <tbody><tr>

                    <td valign="">
                        <label>Identificacion</label>
                     
                        <input type="text" name="identificacion_p" id="identificacion_p" class="input_txt" value="">
                    </td>


                    <td width=""  ><div align="left"><span > Desde:</span></div></td>
                    <td width="" >
                        <input type="text" name="from" id="from" class="input_txt fecha valid" readonly="true" onclick="style_()" value="">
                    </td>
                    <td width=""  ><span >Hasta</span></td>
                    <td width="" >
                        <input type="text" name="to" id="to" class="input_txt fecha valid" readonly="true" onclick="style_()" value="">
                    </td>

                    <td valign="top">

                        <button >Aceptar</button>

                    </td>

                </tr>

            </tbody>
        </table>
    </form>
    <div class="content_itinerarios" id="content_itinerarios_paciente">

    </div>

 



<div id="dialog-cancelar" title="Cancelar Cita">


    <p>

      Registre el motivo por el cual desea cancelar la cita
      <input type="text" name="motivo_cx" class=" " id="motivo_cx"  value="">

    </p>


</div>


<?php
include ($GLOBALS['raiz'].'mvc/vista/secretaria/dialogs_agenda.php');
?>

