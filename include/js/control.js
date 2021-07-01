var contador_spam = 0;
		
$(function() {

    var login = $('#login'),
    password = $('#password'),
    spam = $('#spamr'),
    email = $('#emailr'),
    bool_iniciosesion;


    $('#recordar_contraseña').dialog({
        autoOpen: false,
        draggable:false,
        resizable: false,
        width: 350,
        height: 330,
        modal: true,
        buttons: {
            
            ok:function(){
                bool = true;

                if(email.val()==""){
                    email.addClass('ui-state-error');
                    bool = false;
                }
                else{
                    if (!(xemail.test(email.val()))){
                        email.addClass('ui-state-error');
                        bool = false;
                    }
                }

                if(spam.val()==""){
                    spam.addClass('ui-state-error');
                    bool = false;
                }
                else{
                    if (!(xnumero.test(spam.val()))){
                        spam.addClass('ui-state-error');
                        bool = false;
                    }
                }

                if(bool){
                    var paramenters = "validacion=2&email="+email.val()+"&spam="+spam.val();
                    
                    $.ajax({
                        url:"inicio_sesion.php?"+paramenters,
                        success:function(data){ 
                           // alert(data);
                            if(data==""){
                                $('.msg_rec')
                                .text('Verifique el email o el spam ingresado')
                                .addClass(error);

                                setTimeout(function() {
                                    $('.msg_rec')
                                    .text("")
                                    .removeClass( error, 2000 );
                                },4000);
                            }
                            else{
                                $('.msg_rec')
                                .text('Revise su correo')
                                .addClass(highlight);

                                setTimeout(function() {
                                    $('.msg_rec')
                                    .text("")
                                    .removeClass( highlight, 2000 );

                                    $('#recordar_contraseña').dialog('close');
                                    
                                },4000);
                              
                            }
                        }
                    });
           
                }

            },
            spam:  function(){
                contador_spam++;
                document.getElementById('spami').src='libraries/captcha/captcha.php?img='+contador_spam;
            },
            cancel:function(){
                $(this).dialog('close');
            }
        },
        close: function(){
            contador_spam++;
            email.val("");
            spam.val("");
            email.removeClass('ui-state-error');
            spam.removeClass('ui-state-error');
            document.getElementById('spami').src='libraries/captcha/captcha.php?img='+contador_spam;
        }

    });


    $('#Comentarios').dialog({
        autoOpen: false,
        draggable:false,
        resizable: false,
        width: 350,
        height: 300,
        modal: true,
        buttons: {
            ok:function(){},
            cancel:function(){}
        },
        close:function(){}
    });

    $('#Ayuda').dialog({
        autoOpen: false,
        draggable:false,
        resizable: false,
        width: 350,
        height: 300,
        modal: true,
        buttons: {
            ok:function(){},
            cancel:function(){}
        },
        close:function(){}
    });

    $('#alert').dialog({
        autoOpen: false,
        draggable:true,
        resizable: false,
        width: 250,
        height: 180,
        modal: true,
        buttons: {
            ok: function(){
                $(this).dialog('close');
            }
        }
    });

    $('#alert2').dialog({
        autoOpen: false,
        draggable:true,
        resizable: false,
        width: 250,
        height: 180,
        modal: true,
        buttons: {
            ok: function(){
                $(this).dialog('close');
            }
        }
    });

    $('#iframe_x').dialog({
        autoOpen: false,
        draggable:true,
        resizable: true,
        width: 800,
        height: 600,
        modal: false,
        buttons: {
            ok: function(){
                $(this).dialog('close');
            }
        }
    });

    $('#iniciosesion').dialog({
        autoOpen: false,
        draggable:false,
        resizable: false,
        width: 350,
        height: 300,
        modal: true,
        buttons: {
            ok: function(){
                bool_iniciosesion = true;

                if(login.val()==""){
                    login.addClass('ui-state-error');
                    bool_iniciosesion = false;
                }
                else{
                    if (!(xemail.test(login.val()))){
                        login.addClass('ui-state-error');
                        bool_iniciosesion = false;
                    }
                }
                
                if(password.val()==""){
                    password.addClass('ui-state-error');
                    bool_iniciosesion = false;
                }
                else{
                    if (!(xpass.test(password.val()))){
                        password.addClass('ui-state-error');
                        bool_iniciosesion = false;
                    }
                }

                if(bool_iniciosesion){
                    //divResultado3 = document.getElementById('sub_series')
                    ajax = objetoAjax();
                    ajax.open("POST","inicio_sesion.php",true);
                    ajax.onreadystatechange=function() {
                        if (ajax.readyState==4) {
                            if(ajax.responseText==""){
                                $('.msg_inicio')
                                .text('Verifique su login o password')
                                .addClass("ui-state-error");

                                setTimeout(function() {
                                    $('.msg_inicio')
                                    .text("")
                                    .removeClass( "ui-state-error", 2000 );
                                },4000);
                            }
                            else{
                                window.location.replace("index.php");
                            }
                        }
                    }
                    ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
                    ajax.send("validacion=1&login="+login.val()+"&password="+password.val());
                }
            },
            cancel: function(){
                $(this).dialog('close');
            }
        },
        close: function(){
            login.val("");
            password.val("");
            login.removeClass('ui-state-error');
            password.removeClass('ui-state-error');
        }
    });
	
    $("button").button();
    $("#inicio_sesion").button( "option", "icons", {
        primary:'ui-icon-check'
    })
    .click(function(){
        $('#iniciosesion').dialog('open');
    });

    $("#recoder_contrasena").button( "option", "icons", {
        primary:'ui-icon-unlocked'
    }).click(function(){
        $('#recordar_contraseña').dialog('open');
    });

    $("#noticias").button( "option", "icons", {
        primary:'ui-icon-signal-diag'
    }).click(function(){
        window.location.replace("principal.php?frame=news");
    });
    
    $("#ayuda").button( "option", "icons", {
        primary:'ui-icon-help'
    });
        
    $("#home").button( "option", "icons", {
        primary:'ui-icon-home'
    })
    .click(function(){
        window.location.replace("index.php?frame=home");
    });

    $("#homep").button( "option", "icons", {
        primary:'ui-icon-home'
    })
    .click(function(){
        window.location.replace("principal.php?frame=home");
    });

    $("#toolbar").menubar({
        select: function(event, ui) {
            var anchor = ui.item.children().first();
            $("#log").append("<div>Selected " + anchor.attr("id") + ":" + anchor.text() + "</div>");
            $(this).data("flyoutmenu").hide();
        }
    });

    $("#crear_banco").button( "option", "icons", {
        primary:'ui-icon-tag',
        secondary:$("#city-menu-button").button( "option", "icons").secondary
    });

    //
    $("#registrar_super_user").button( "option", "icons", {
        primary:'ui-icon-person'
    });

    $("#cerrar_sesion").button( "option", "icons", {
        primary:'ui-icon-contact'
    });

    $("#ayuda2").button( "option", "icons", {
        primary:'ui-icon-help'
    });


    


    $( "#accordion" ).accordion({
        collapsible: true
    });




    $("#modal_temas").dialog({
        autoOpen: false,
        draggable:true,
        resizable: true,
        width: 950,
        height: 650,
        modal: true,
        buttons: {
            Selected:function(){
                element1 = document.getElementById('img_tmp');
                element2 = document.getElementById('tma');
                element2.src = element1.src;
                element2.name = element1.name;
                $(this).dialog('close');
            }
        }
    });

    $("#temb").button()
    .click(function(){
        $("#modal_temas").dialog('open');
    });



    var nit = $('#nit'),
    nameb = $('#nameb'),
    dominiob = $('#domainb'),
    names = $('#names'),
    direccions = $('#direccions'),
    telefonos = $('#telefonos'),
    emails = $('#emails'),
    ident_us = $('#ident_us'),
    nom_us = $('#nom_us'),
    apellido_us = $('#apellido_us'),
    direccion_us = $('#direccion_us'),
    telefono_us = $('#telefono_us'),
    email_us = $('#email_us'),
    all_fields_reg_bank = $([]).add(nit)
    .add(nameb)
    .add(dominiob)
    .add(names)
    .add(direccions)
    .add(telefonos)
    .add(telefonos)
    .add(emails)
    .add(ident_us)
    .add(nom_us)
    .add(apellido_us)
    .add(direccion_us)
    .add(telefono_us)
    .add(email_us);

    $("#Confirmar_registro_banco").button()
    .click(function(){
        document.getElementById('msg_e').style.display = 'none';
        all_fields_reg_bank.removeClass(error);
        bool_register_bank = true;

        if(nit.val()==""){
            nit.addClass(error);
            bool_register_bank = false;
        }
        else{
            if(!(xnumero.test(nit.val()))){
                nit.addClass(error);
                bool_register_bank = false;
            }
        }

        if(nameb.val()==""){
            nameb.addClass(error);
            bool_register_bank = false;
        }
        else{
            if(!(xstr.test(nameb.val()))){
                nameb.addClass(error);
                bool_register_bank = false;
            }
        }

        if(dominiob.val()==""){
            dominiob.addClass(error);
            bool_register_bank = false;
        }
        else{
            if(!(xstr.test(dominiob.val()))){
                dominiob.addClass(error);
                bool_register_bank = false;
            }
        }

        if(names.val()==""){
            names.addClass(error);
            bool_register_bank = false;
        }
        else{
            if(!(xstr.test(names.val()))){
                names.addClass(error);
                bool_register_bank = false;
            }
        }

        if(direccions.val()==""){
            direccions.addClass(error);
            bool_register_bank = false;
        }
        else{
            if(!(xstr.test(direccions.val()))){
                direccions.addClass(error);
                bool_register_bank = false;
            }
        }

        if(telefonos.val()==""){
            telefonos.addClass(error);
            bool_register_bank = false;
        }
        else{
            if(!(xnumero.test(telefonos.val()))){
                telefonos.addClass(error);
                bool_register_bank = false;
            }
        }

        if(emails.val()==""){
            emails.addClass(error);
            bool_register_bank = false;
        }
        else{
            if(!(xemail.test(emails.val()))){
                emails.addClass(error);
                bool_register_bank = false;
            }
        }

        if(ident_us.val()==""){
            ident_us.addClass(error);
            bool_register_bank = false;
        }
        else{
            if(!(xnumero.test(ident_us.val()))){
                ident_us.addClass(error);
                bool_register_bank = false;
            }
        }

        if(nom_us.val()==""){
            nom_us.addClass(error);
            bool_register_bank = false;
        }
        else{
            if(!(xstr.test(nom_us.val()))){
                nom_us.addClass(error);
                bool_register_bank = false;
            }
        }

        if(apellido_us.val()==""){
            apellido_us.addClass(error);
            bool_register_bank = false;
        }
        else{
            if(!(xstr.test(apellido_us.val()))){
                apellido_us.addClass(error);
                bool_register_bank = false;
            }
        }

        if(direccion_us.val()==""){
            direccion_us.addClass(error);
            bool_register_bank = false;
        }
        else{
            if(!(xstr.test(direccion_us.val()))){
                direccion_us.addClass(error);
                bool_register_bank = false;
            }
        }

        if(telefono_us.val()==""){
            telefono_us.addClass(error);
            bool_register_bank = false;
        }
        else{
            if(!(xnumero.test(telefono_us.val()))){
                telefono_us.addClass(error);
                bool_register_bank = false;
            }
        }

        if(email_us.val()==""){
            email_us.addClass(error);
            bool_register_bank = false;
        }
        else{
            if(!(xemail.test(email_us.val()))){
                email_us.addClass(error);
                bool_register_bank = false;
            }
        }

        if(bool_register_bank){
            image = document.getElementById('img_f');
            if(image.name=="us")
            {
                $('#alert2').dialog('open');
                bool_register_bank = false;
            }
        }

        if(bool_register_bank){
            //divResultado3 = document.getElementById('sub_series')
            var parameters = "nit="+nit.val()
            +"&nameb="+nameb.val()
            +"&dominiob="+dominiob.val()
            +"&id_tema="+document.getElementById('tma').name
            +"&name_img="+document.getElementById('img_f').name
            +"&names="+names.val()
            +"&ciudads="+$('#ciudad_sede').val()
            +"&direccions="+direccions.val()
            +"&telefonos="+telefonos.val()
            +"&emails="+emails.val()
            +"&ident_us="+ident_us.val()
            +"&nom_us="+nom_us.val()
            +"&apellido_us="+apellido_us.val()
            +"&ciudad_us="+$('#ciudad_us').val()
            +"&direccion_us="+direccion_us.val()
            +"&telefono_us="+telefono_us.val()
            +"&email_us="+email_us.val();
            
            alert(parameters);
            $.ajax({
                url:"registro_bank.php?"+parameters,
                success: function(data){
                    /*alert(data);
                    console.log(data);*/
                    array_response = (data).split('?');
                    if(array_response[0]!=0 && array_response[1]!=0 && array_response[2]!=0){
                        window.location.replace("index.php?xmsg="+array_response[3]+"&paso=2&frame=CreateBank");
                    }
                    else{
                        document.getElementById('msg_e').style.display = 'block';
                        document.getElementById('conten_msg_error').innerHTML = array_response[3];
                    }
                }
            });

        }

    });






    ///____________________________________________________________________
    // inicio drotable
    // there's the gallery and the trash
    var $gallery = $( "#gallery" ),
    $trash = $( "#trash" );

    // let the gallery items be draggable
    $( "li", $gallery ).draggable({
        cancel: "a.ui-icon", // clicking an icon won't initiate dragging
        revert: "invalid", // when not dropped, the item will revert back to its initial position
        containment: $( "#demo-frame" ).length ? "#demo-frame" : "document", // stick to demo-frame if present
        helper: "clone",
        cursor: "move"
    });

    // let the trash be droppable, accepting the gallery items
    $trash.droppable({
        accept: "#gallery > li",
        activeClass: "ui-state-highlight",
        drop: function( event, ui ) {
            //alert("asdasd");
            deleteImage( ui.draggable );
        }
    });

    // let the gallery be droppable as well, accepting items from the trash
    $gallery.droppable({
        accept: "#trash li",
        activeClass: "custom-state-active",
        drop: function( event, ui ) {
            recycleImage( ui.draggable );
        }
    });

    //funciones del array funciones de delete video

    $("#delete_videos").button()
    .click(function(){
        var id_string = "";

        for(i=0;i<contador_ids;i++){
            //if(array_videos[i]!='udefinied' && array_videos[i]!=null && array_videos[i]!=""){
            if(i!=(contador_ids-1)){
                id_string = id_string + array_videos[i] +"?";
            }
            else
            {
                id_string = id_string + array_videos[i] ;
            }
        //}
        }

        if(contador_ids>0){
            window.location.replace("control_delete_videos.php?option="+document.getElementById('delete_videos').name+"&ids_videos="+id_string);
        }
    //alert(id_string+ " contador_ids "+contador_ids);
    }
    );

    function add_id_video(id){
        array_videos[contador_ids] = id;
        contador_ids++;

    }
    function remove_id_video(id){
        var arra_suplend = new Array(),contado_suplend = 0;
        for(i=0;i<=contador_ids;i++){
            if(array_videos[i]!=id){
                arra_suplend[contado_suplend] = array_videos[i];
                contado_suplend ++;
            }
        }
        array_videos =  new Array();
        array_videos = arra_suplend;
        contador_ids = contador_ids - 1;


    }
    //
    // image deletion function
    //var recycle_icon = "<a name='xxx2' href='link/to/recycle/script/when/we/have/js/off' title='Recycle this image' class='ui-icon ui-icon-refresh'>Recycle image</a>";

    function deleteImage( $item ) {
        href = $item.find( "a.ui-icon-trash" );
        //alert('al basurero');

        var recycle_icon = "<a name='"+href.attr('name')+"' href='link/to/recycle/script/when/we/have/js/off' title='Recycle this image' class='ui-icon ui-icon-refresh'>Recycle image</a>";
        add_id_video(href.attr('name'));

        $item.fadeOut(function() {
            var $list = $( "ul", $trash ).length ?
            $( "ul", $trash ) :
            $( "<ul class='gallery ui-helper-reset'/>" ).appendTo( $trash );

            $item.find( "a.ui-icon-trash" ).remove();
            $item.append( recycle_icon ).appendTo( $list ).fadeIn(function() {
                $item
                .animate({
                    width: "48px"
                })
                .find( "img" )
                .animate({
                    height: "36px"
                });
            });
        });
    }

    // image recycle function
    //var trash_icon = "<a name='xxx1' href='link/to/trash/script/when/we/have/js/off' title='Delete this image' class='ui-icon ui-icon-trash'>Delete image</a>";
    function recycleImage( $item ) {
        href = $item.find( "a.ui-icon-refresh" );
        //alert('no al basurero');
        var trash_icon = "<a name='"+href.attr('name')+"' href='link/to/trash/script/when/we/have/js/off' title='Delete this image' class='ui-icon ui-icon-trash'>Delete image</a>";
        remove_id_video(href.attr('name'));


        $item.fadeOut(function() {
            $item
            .find( "a.ui-icon-refresh" )
            .remove()
            .end()
            .css( "width", "96px")
            .append( trash_icon )
            .find( "img" )
            .css( "height", "72px" )
            .end()
            .appendTo( $gallery )
            .fadeIn();
        });
    }

    // fin de las modificaciones



    // image preview function, demonstrating the ui.dialog used as a modal window
    function viewLargerImage( $link ) {
        var src = $link.attr( "href" ),
        title = $link.siblings( "img" ).attr( "alt" ),
        $modal = $( "img[src$='" + src + "']" );

        if ( $modal.length ) {
            $modal.dialog( "open" );
        } else {
            var img = $( "<img alt='" + title + "' width='450' height='300' style='display: none; padding: 8px;' />" )
            .attr( "src", src ).appendTo( "body" );
            setTimeout(function() {
                img.dialog({
                    title: title,
                    width: 450,
                    modal: true
                });
            }, 1 );
        }
    }

    // resolve the icons behavior with event delegation
    $( "ul.gallery > li" ).click(function( event ) {
        var $item = $( this ),
        $target = $( event.target );

        if ( $target.is( "a.ui-icon-trash" ) ) {
            deleteImage( $item );
        } else if ( $target.is( "a.ui-icon-zoomin" ) ) {
            viewLargerImage( $target );
        } else if ( $target.is( "a.ui-icon-refresh" ) ) {
            recycleImage( $item );
        }

        return false;
    });
    // fin drotable

    ///____________________________________________________________________

    $('#tabs').tabs();

});
	
