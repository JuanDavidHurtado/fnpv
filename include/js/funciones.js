var xemail = /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i,
xstr = /^[a-z]([0-9a-z ñ_])+$/i,
xpass = /^([0-9a-zA-Z])+$/,
xnumero = /^([0-9])+$/,
xalfanumerico =/^([0-9a-z])+$/,
error = "ui-state-error",
highlight = "ui-state-highlight";


function objetoAjax(){
    var xmlhttp=false;
    try{
        // Opera 8.0+, Firefox, Safari
        xmlhttp = new XMLHttpRequest();
    } catch (e){
        // Internet Explorer Browsers
        try{
            xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            try{
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e){
                // Something went wrong
                alert("El browser no soporta AJAX!");
                return false;
            }
        }
    }

    return xmlhttp;
}

function redireccionar(ruta){
    window.location.replace(ruta);
}

function abrirventana(url){
	window.open(url,"_blank");
}

function change_image(img,id_img,nom){
    elemet = document.getElementById(id_img);
    elemet.src = img;
    elemet.name = nom;
}

function quitClass(caja){
    $("#"+caja.id).removeClass('ui-state-error');
}