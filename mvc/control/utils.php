<?php


class Utils {

//variables generales
    public static $acc_app = array('421aa90e079fa326b6494f812ad13e79','18ef1db49e789cf6d6fab4663bd7b8e4','a541dddab6cb3ad680053f55559ad394','a4af554ffcce546c8548738cd3a9350e');
    public static $_server_type = false; //true is server linux, false is server windows
    //public static $http_ruta = "http://190.146.87.72/siempree/";
    public static $http_ruta = "http://localhost/fnpv/";
    private static $folder_proyect_name = "fnpv/";
    public static $server = "localhost";
    public static $user_name = "root";
    public static $user_name_password = "sena";
    public static $database = "fnpv";
    public static $google_key = "ABQIAAAA8a8P_YYTFTFvuRVTURoPGxStrx_qlMhyHdju3ps3O3fGSOsJlRSF3WiDom8bpUIyfXIUpsrL_6R3cQ";
    public static $theme = "hot-sneaks";
    public static $email_remit = "info_com@gmail.com";
    public static $email_password = "";
    public static $feed_principal = "http://feeds.feedburner.com/SenaRegionalDC";
    public static $welcome_label = "Bienvenido a FNPV ";
    public static $name_company = "FNPV";
//links
    public static $link_facebook = "http://www.facebook.com/";
    public static $link_twitter = "http://twitter.com/#!/";
    public static $link_youtube = "http://youtube.com";
//foders
    public static $dir_recursos = "resources/";
    public static $dir_archivos = "archivos/";
    public static $dir_fclient = "client/";
    public static $dir_dominios = "domains/";
    public static $dir_home = "_home/";
    public static $dir_admin = "_admin/";
    public static $dir_gerente = "_manager/";
    public static $dir_cajero = "_cashier/";
    public static $dir_cliente = "_client/";
    public static $dir_thumbnail_themes = "resources/images/";
//imagenes de recurso
    private static $header = "header.png";
    private static $background = "fondo.png";
    private static $favicon = "favicon.ico";
    private static $piepagina = "piepagina.png";
    private static $icon_editar = "editar.png";
    private static $icon_eliminar = "editar.png";
    private static $icon_agregar = "editar.png";
    private static $icon_usuarios = "user.png";
    private static $icon_cuentas = "cuenta.png";
    //---stmp gmail
    public static $_mailSMTPHost = "ssl://smtp.gmail.com";
    public static $_mailSMTPPort = 465;
    public static $_mailUser = "info_@gmail.com";
    public static $_mailPassword = "";
    public static $_mailFromName = "Server";
    //---localhos
    public static $_mailLocalHost = "localhost";
    public static $_mailLocalUser = "fnpv@localhost";
    public static $_mailLocalFromName = "Server";
    //---aplicacion
    public static $_horas_limite_cita = 48;

    //Configuracion de server
    public static function getFtpRuta() {
        if (Utils::$_server_type) {
            $ruta = "/home/" . Utils::$folder_proyect_name;
        } else {
            $ruta = $_SERVER['DOCUMENT_ROOT'] . '/' . Utils::$folder_proyect_name;
        }
        return $ruta;
    }

    public static function http_ruta() {
        return "http://" . $_SERVER["SERVER_NAME"] . "/fnpv/";
    }

    public static function getWebService() {
        return Utils::http_ruta() . "web_services/redbancariaservices.php?wsdl";
    }

    public static function getWebServiceJSON() {
        return Utils::$http_ruta . "";
    }

    public static function getImgHeader($acces = true) {
        if ($acces) {
            return Utils::http_ruta() . Utils::$dir_recursos . Utils::$header;
        } else {
            return Utils::getFtpRuta() . Utils::$dir_recursos . Utils::$header;
        }
    }

    public static function getImgBackGround($acces = true) {
        if ($acces) {
            return Utils::$http_ruta . Utils::$dir_recursos . Utils::$background;
        } else {
            return Utils::getFtpRuta() . Utils::$dir_recursos . Utils::$background;
        }
    }

    public static function getImgFavicon($acces = true) {
        if ($acces) {
            return Utils::$http_ruta . Utils::$dir_recursos . Utils::$favicon;
        } else {
            return Utils::getFtpRuta() . Utils::$dir_recursos . Utils::$favicon;
        }
    }

    public static function getImgPiePagina($acces = true) {
        if ($acces) {
            return Utils::$http_ruta . Utils::$dir_recursos . Utils::$piepagina;
        } else {
            return Utils::getFtpRuta() . Utils::$dir_recursos . Utils::$piepagina;
        }
    }

    public static function getImgEditar($acces = true) {
        if ($acces) {
            return Utils::$http_ruta . "";
        } else {
            return Utils::getFtpRuta() . "";
        }
    }

    public static function getImgEliminar($acces = true) {
        if ($acces) {
            return Utils::$http_ruta . "";
        } else {
            return Utils::getFtpRuta() . "";
        }
    }

    public static function getImgAgregar($acces = true) {
        if ($acces) {
            return Utils::$http_ruta . "";
        } else {
            return Utils::getFtpRuta() . "";
        }
    }

    public static function getImgUsuarios($acces = true) {
        if ($acces) {
            return Utils::$http_ruta . "";
        } else {
            return Utils::getFtpRuta() . "";
        }
    }

    public static function getImgCuentas($acces = true) {
        if ($acces) {
            return Utils::$http_ruta . "";
        } else {
            return Utils::getFtpRuta() . "";
        }
    }

//Funciones estaticas del sistema

    public static function generateNameRandom() {
        mt_srand((double) microtime() * 1000000);
        $_hass = mt_rand(100000, 999999);
        $_nombreTemporal = substr(md5($_hass), 6, 26);
        return $_nombreTemporal;
    }

    public static function genera_password($longitud, $tipo = "alfanumerico") {

        if ($tipo == "alfanumerico") {
            $exp_reg = "[^A-Z0-9]";
        } elseif ($tipo == "numerico") {
            $exp_reg = "[^0-9]";
        }

        return substr(eregi_replace($exp_reg, "", md5(rand())) .
                eregi_replace($exp_reg, "", md5(rand())) .
                eregi_replace($exp_reg, "", md5(rand())), 0, $longitud);
    }

    public static function move_to($origen, $destino) {
        if (file_exists($origen)) {
            copy($origen, $destino);
            unlink($origen);
            return true;
        } else {
            return false;
        }
    }

    public static function delete_file($file_url) {
        if (file_exists($file_url)) {
            unlink($file_url);
            return true;
        } else {
            return false;
        }
    }

    public static function file_exist($file_url) {
        if (file_exists($file_url)) {
            return true;
        } else {
            return false;
        }
    }

    public static function remplace_slace($string) {
        $return = "";
        if (is_string($string)) {
            $return = str_replace("\r", " ", str_replace("\n", " ", $string));
        }
        return $return;
    }

    public static function stripAccents($String) {
        $String = str_replace(array('á', 'à', 'â', 'ã', 'ª', 'ä'), "a", $String);
        $String = str_replace(array('Á', 'À', 'Â', 'Ã', 'Ä'), "A", $String);
        $String = str_replace(array('Í', 'Ì', 'Î', 'Ï'), "I", $String);
        $String = str_replace(array('í', 'ì', 'î', 'ï'), "i", $String);
        $String = str_replace(array('é', 'è', 'ê', 'ë'), "e", $String);
        $String = str_replace(array('É', 'È', 'Ê', 'Ë'), "E", $String);
        $String = str_replace(array('ó', 'ò', 'ô', 'õ', 'ö', 'º'), "o", $String);
        $String = str_replace(array('Ó', 'Ò', 'Ô', 'Õ', 'Ö'), "O", $String);
        $String = str_replace(array('ú', 'ù', 'û', 'ü'), "u", $String);
        $String = str_replace(array('Ú', 'Ù', 'Û', 'Ü'), "U", $String);
        $String = str_replace(array('[', '^', '´', '`', '¨', '~', ']'), "", $String);
        $String = str_replace("ç", "c", $String);
        $String = str_replace("Ç", "C", $String);
        $String = str_replace("ñ", "n", $String);
        $String = str_replace("Ñ", "N", $String);
        $String = str_replace("Ý", "Y", $String);
        $String = str_replace("ý", "y", $String);
        return $String;
    }

    public static function compareDate($fecha1, $fecha2) {
        $f1 = strtotime($fecha1);
        ;
        $f2 = strtotime($fecha2);
        if ($f1 == $f2) {
            $dif = 0;
        } else if ($f1 > $f2) {
            $dif = 1;
        } else if ($f1 < $f2) {
            $dif = -1;
        }
        return ($dif);
    }

    public static function getCountDays($fecha1, $fecha2) {
//defino fecha 1
        $ano1 = date("Y", strtotime($fecha1));
        $mes1 = date("m", strtotime($fecha1));
        $dia1 = date("d", strtotime($fecha1));

//defino fecha 2
        $ano2 = date("Y", strtotime($fecha2));
        $mes2 = date("m", strtotime($fecha2));
        $dia2 = date("d", strtotime($fecha2));

//calculo timestam de las dos fechas
        $timestamp1 = mktime(0, 0, 0, $mes1, $dia1, $ano1);
        $timestamp2 = mktime(4, 12, 0, $mes2, $dia2, $ano2);

//resto a una fecha la otra
        $segundos_diferencia = $timestamp1 - $timestamp2;
//echo $segundos_diferencia;
//convierto segundos en días
        $dias_diferencia = $segundos_diferencia / (60 * 60 * 24);

//obtengo el valor absoulto de los días (quito el posible signo negativo)
        $dias_diferencia = abs($dias_diferencia);

//quito los decimales a los días de diferencia
        $dias_diferencia = floor($dias_diferencia);

        return $dias_diferencia;
    }

    public static function getCountHours($fecha_hora1, $fecha_hora2) {

        if ($fecha_hora2 > $fecha_hora1) {
            $fecha1 = $fecha_hora1;
            $fecha2 = $fecha_hora2;
        } else {
            $fecha1 = $fecha_hora2;
            $fecha2 = $fecha_hora1;
        }

        //defino fecha 1
        $hora1 = date("H", strtotime($fecha1));
        $minutos1 = date("i", strtotime($fecha1));
        $segundos1 = date("s", strtotime($fecha1));
        $mes1 = date("m", strtotime($fecha1));
        $dia1 = date("d", strtotime($fecha1));
        $anyo1 = date("Y", strtotime($fecha1));
        //defino fecha 2
        $hora2 = date("H", strtotime($fecha2));
        $minutos2 = date("i", strtotime($fecha2));
        $segundos2 = date("s", strtotime($fecha2));
        $mes2 = date("m", strtotime($fecha2));
        $dia2 = date("d", strtotime($fecha2));
        $anyo2 = date("Y", strtotime($fecha2));
        //**************************************
        // Primero pasas las dos fechas, a formato timestamp, con mktime()
        $fecha1 = mktime($hora1, $minutos1, $segundos1, $mes1, $dia1, $anyo1);
        $fecha2 = mktime($hora2, $minutos2, $segundos2, $mes2, $dia2, $anyo2);

        // Ahora tienes que restar las dos fechas, y así saber cuántos segundos han pasado de una fecha a otra
        $segundos = $fecha2 - $fecha1;

        // Ahora pasas de segundos, a horas
        $horas = $segundos / 60 / 60;

        $horas = round($horas);

        return $horas;
    }

    public static function getCountHours2($fecha_hora1, $fecha_hora2) {

        if ($fecha_hora2 > $fecha_hora1) {
            $fecha1 = $fecha_hora1;
            $fecha2 = $fecha_hora2;
        } else {
            $fecha1 = $fecha_hora2;
            $fecha2 = $fecha_hora1;
        }

        $dias = Utils::getCountDays($fecha1, $fecha2);
        $dias_horas = intval($dias) * 24;
        //defino fecha 1
        $hora1 = date("H", strtotime($fecha1));
        //defino fecha 2
        $hora2 = date("H", strtotime($fecha2));
        //**************************************
        $diff_h = intval($hora1) - intval($hora2);
        $diff_h = $diff_h < 0 ? $diff_h * -1 : $diff_h;
        //**************************************
        $horas = $dias_horas + $diff_h;
        //**************************************
        // Primero pasas las dos fechas, a formato timestamp, con mktime()
        $fecha1 = mktime($_POST['hora1'], $_POST['minutos1'], $_POST['segundos1'], $_POST['mes1'], $_POST['dia1'], $_POST['anyo1']);
        $fecha2 = mktime($_POST['hora2'], $_POST['minutos2'], $_POST['segundos2'], $_POST['mes2'], $_POST['dia2'], $_POST['anyo2']);

        // Ahora tienes que restar las dos fechas, y así saber cuántos segundos han pasado de una fecha a otra
        $segundos = $fecha2 - $fecha1;

        // Ahora pasas de segundos, a horas
        $horas = $segundos / 60 / 60;

        return $horas;
    }

    public static function addIntervalDate($fecha, $interval, $value) {
        $date = date("Y-m-d", strtotime("$fecha $interval $value"));
        return $date;
    }

    public static function addIntervalDateHours($fecha, $interval, $value) {
        $date = date("Y-m-d H:i:s", strtotime("$fecha $interval $value"));
        return $date;
    }

    public static function get_facebook_cookie() {
        $app_id = Utils::get_FacebookIDApp();
        $app_secret = Utils::get_FecebookSecrectApp();
        $args = array();
        parse_str(trim($_COOKIE['fbs_' . $app_id], '\\"'), $args);
        ksort($args);
        $payload = '';
        foreach ($args as $key => $value) {
            if ($key != 'sig') {
                $payload .= $key . '=' . $value;
            }
        }
        if (md5($payload . $app_secret) != $args['sig']) {
            return null;
        }
        return $args;
    }

    public static function get_access_token_facebook_js() {
        $return = '
            <!-- jsfacebook -->
            <script  src="http://connect.facebook.net/es_ES/all.js"></script>
            <div id="fb-root"></div>
            <script>
            FB.init({
                appId: "' . Utils::get_FacebookIDApp() . '",
                status: true,
                cookie: true,
                xfbml: true
            });

            FB.Event.subscribe("auth.login", function(response) {
               // alert("reload");
                window.location.reload();
            });
            </script>';

        $item_return = new Item($return, '', '');

        return $item_return;
    }

    public static function img_user_facebook($id_user) {
        $return = 'https://graph.facebook.com/' . $id_user . '/picture';
        return $return;
    }

    public static function html2rgb($color) {
        if ($color[0] == '#')
            $color = substr($color, 1); if (strlen($color) == 6)
            list($r, $g, $b) = array($color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5]); elseif (strlen($color) == 3)
            list($r, $g, $b) = array($color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2]);
        else
            return false; $r = hexdec($r);
        $g = hexdec($g);
        $b = hexdec($b);
        return array($r, $g, $b);
    }

    public static function getMailIMG() {
        return Utils::getImgHeader(false);
    }

    public static function getFechas($hta, $dm, $nefro) {
        $fecha_1 = "";
        $fecha_2 = "";
        $fecha_3 = "";


        if ($hta == 'A' && $dm == '0' && $nefro == '0') {
            $fecha_1 = "1";
            $fecha_2 = "6";
            $fecha_3 = "2";
        } else if ($hta == 'A' && $dm == 'B' && $nefro == '0') {
            $fecha_1 = "1";
            $fecha_2 = "6";
            $fecha_3 = "2";
        } else if ($hta == 'A' && $dm == 'M' && $nefro == '0') {
            $fecha_1 = "1";
            $fecha_2 = "6";
            $fecha_3 = "2";
        } else if ($hta == 'A' && $dm == 'A' && $nefro == '0') {
            $fecha_1 = "1";
            $fecha_2 = "6";
            $fecha_3 = "2";
        } else if ($hta == 'A' && $dm == '0' && $nefro == '1') {
            $fecha_1 = "6";
            $fecha_2 = "6";
            $fecha_3 = "6";
        } else if ($hta == 'A' && $dm == '0' && $nefro == '2') {
            $fecha_1 = "6";
            $fecha_2 = "6";
            $fecha_3 = "4";
        } else if ($hta == 'A' && $dm == '0' && $nefro == '3') {
            $fecha_1 = "4";
            $fecha_2 = "6";
            $fecha_3 = "3";
        } else if ($hta == 'A' && $dm == '0' && $nefro == '4') {
            $fecha_1 = "3";
            $fecha_2 = "6";
            $fecha_3 = "2";
        } else if ($hta == 'A' && $dm == 'B' && $nefro == '1') {
            $fecha_1 = "1";
            $fecha_2 = "6";
            $fecha_3 = "6";
        } else if ($hta == 'A' && $dm == 'M' && $nefro == '1') {
            $fecha_1 = "1";
            $fecha_2 = "6";
            $fecha_3 = "6";
        } else if ($hta == 'A' && $dm == 'A' && $nefro == '1') {
            $fecha_1 = "1";
            $fecha_2 = "6";
            $fecha_3 = "6";
        } else if ($hta == 'A' && $dm == 'B' && $nefro == '2') {
            $fecha_1 = "1";
            $fecha_2 = "6";
            $fecha_3 = "4";
        } else if ($hta == 'A' && $dm == 'M' && $nefro == '2') {
            $fecha_1 = "1";
            $fecha_2 = "6";
            $fecha_3 = "4";
        } else if ($hta == 'A' && $dm == 'A' && $nefro == '2') {
            $fecha_1 = "1";
            $fecha_2 = "6";
            $fecha_3 = "4";
        } else if ($hta == 'A' && $dm == 'B' && $nefro == '3') {
            $fecha_1 = "1";
            $fecha_2 = "6";
            $fecha_3 = "3";
        } else if ($hta == 'A' && $dm == 'M' && $nefro == '3') {
            $fecha_1 = "1";
            $fecha_2 = "6";
            $fecha_3 = "3";
        } else if ($hta == 'A' && $dm == 'A' && $nefro == '3') {
            $fecha_1 = "1";
            $fecha_2 = "6";
            $fecha_3 = "3";
        } else if ($hta == 'A' && $dm == 'B' && $nefro == '4') {
            $fecha_1 = "1";
            $fecha_2 = "6";
            $fecha_3 = "2";
        } else if ($hta == 'A' && $dm == 'M' && $nefro == '4') {
            $fecha_1 = "1";
            $fecha_2 = "6";
            $fecha_3 = "2";
        } else if ($hta == 'A' && $dm == 'A' && $nefro == '4') {
            $fecha_1 = "1";
            $fecha_2 = "6";
            $fecha_3 = "2";
        } else if ($hta == 'B' && $dm == '0' && $nefro == '0') {
            $fecha_1 = "6";
            $fecha_2 = "6";
            $fecha_3 = "CM";
        } else if ($hta == 'B' && $dm == 'B' && $nefro == '0') {
            $fecha_1 = "6";
            $fecha_2 = "6";
            $fecha_3 = "CM";
        } else if ($hta == 'B' && $dm == 'M' && $nefro == '0') {
            $fecha_1 = "4";
            $fecha_2 = "6";
            $fecha_3 = "CM";
        } else if ($hta == 'B' && $dm == 'A' && $nefro == '0') {
            $fecha_1 = "1";
            $fecha_2 = "6";
            $fecha_3 = "2";
        } else if ($hta == 'B' && $dm == '0' && $nefro == '1') {
            $fecha_1 = "6";
            $fecha_2 = "6";
            $fecha_3 = "6";
        } else if ($hta == 'B' && $dm == '0' && $nefro == '2') {
            $fecha_1 = "6";
            $fecha_2 = "6";
            $fecha_3 = "4";
        } else if ($hta == 'B' && $dm == '0' && $nefro == '3') {
            $fecha_1 = "4";
            $fecha_2 = "6";
            $fecha_3 = "3";
        } else if ($hta == 'B' && $dm == '0' && $nefro == '4') {
            $fecha_1 = "3";
            $fecha_2 = "6";
            $fecha_3 = "2";
        } else if ($hta == 'B' && $dm == 'B' && $nefro == '1') {
            $fecha_1 = "6";
            $fecha_2 = "6";
            $fecha_3 = "6";
        } else if ($hta == 'B' && $dm == 'M' && $nefro == '1') {
            $fecha_1 = "4";
            $fecha_2 = "6";
            $fecha_3 = "6";
        } else if ($hta == 'B' && $dm == 'A' && $nefro == '1') {
            $fecha_1 = "1";
            $fecha_2 = "6";
            $fecha_3 = "6";
        } else if ($hta == 'B' && $dm == 'B' && $nefro == '2') {
            $fecha_1 = "6";
            $fecha_2 = "6";
            $fecha_3 = "4";
        } else if ($hta == 'B' && $dm == 'M' && $nefro == '2') {
            $fecha_1 = "4";
            $fecha_2 = "6";
            $fecha_3 = "4";
        } else if ($hta == 'B' && $dm == 'A' && $nefro == '2') {
            $fecha_1 = "1";
            $fecha_2 = "6";
            $fecha_3 = "4";
        } else if ($hta == 'B' && $dm == 'B' && $nefro == '3') {
            $fecha_1 = "4";
            $fecha_2 = "6";
            $fecha_3 = "3";
        } else if ($hta == 'B' && $dm == 'M' && $nefro == '3') {
            $fecha_1 = "4";
            $fecha_2 = "6";
            $fecha_3 = "3";
        } else if ($hta == 'B' && $dm == 'A' && $nefro == '3') {
            $fecha_1 = "1";
            $fecha_2 = "6";
            $fecha_3 = "3";
        } else if ($hta == 'B' && $dm == 'B' && $nefro == '4') {
            $fecha_1 = "4";
            $fecha_2 = "6";
            $fecha_3 = "2";
        } else if ($hta == 'B' && $dm == 'M' && $nefro == '4') {
            $fecha_1 = "4";
            $fecha_2 = "6";
            $fecha_3 = "2";
        } else if ($hta == 'B' && $dm == 'A' && $nefro == '4') {
            $fecha_1 = "1";
            $fecha_2 = "6";
            $fecha_3 = "2";
        } else if ($hta == 'M' && $dm == '0' && $nefro == '0') {
            $fecha_1 = "4";
            $fecha_2 = "4";
            $fecha_3 = "CM";
        } else if ($hta == 'M' && $dm == 'B' && $nefro == '0') {
            $fecha_1 = "4";
            $fecha_2 = "6";
            $fecha_3 = "CM";
        } else if ($hta == 'M' && $dm == 'M' && $nefro == '0') {
            $fecha_1 = "4";
            $fecha_2 = "6";
            $fecha_3 = "CM";
        } else if ($hta == 'M' && $dm == 'A' && $nefro == '0') {
            $fecha_1 = "1";
            $fecha_2 = "6";
            $fecha_3 = "2";
        } else if ($hta == 'M' && $dm == '0' && $nefro == '1') {
            $fecha_1 = "6";
            $fecha_2 = "6";
            $fecha_3 = "6";
        } else if ($hta == 'M' && $dm == '0' && $nefro == '2') {
            $fecha_1 = "6";
            $fecha_2 = "6";
            $fecha_3 = "4";
        } else if ($hta == 'M' && $dm == '0' && $nefro == '3') {
            $fecha_1 = "4";
            $fecha_2 = "6";
            $fecha_3 = "3";
        } else if ($hta == 'M' && $dm == '0' && $nefro == '4') {
            $fecha_1 = "3";
            $fecha_2 = "6";
            $fecha_3 = "2";
        } else if ($hta == 'M' && $dm == 'B' && $nefro == '1') {
            $fecha_1 = "4";
            $fecha_2 = "6";
            $fecha_3 = "6";
        } else if ($hta == 'M' && $dm == 'M' && $nefro == '1') {
            $fecha_1 = "4";
            $fecha_2 = "6";
            $fecha_3 = "6";
        } else if ($hta == 'M' && $dm == 'A' && $nefro == '1') {
            $fecha_1 = "1";
            $fecha_2 = "6";
            $fecha_3 = "6";
        } else if ($hta == 'M' && $dm == 'B' && $nefro == '2') {
            $fecha_1 = "3";
            $fecha_2 = "6";
            $fecha_3 = "4";
        } else if ($hta == 'M' && $dm == 'M' && $nefro == '2') {
            $fecha_1 = "4";
            $fecha_2 = "6";
            $fecha_3 = "4";
        } else if ($hta == 'M' && $dm == 'A' && $nefro == '2') {
            $fecha_1 = "1";
            $fecha_2 = "6";
            $fecha_3 = "4";
        } else if ($hta == 'M' && $dm == 'B' && $nefro == '3') {
            $fecha_1 = "4";
            $fecha_2 = "6";
            $fecha_3 = "3";
        } else if ($hta == 'M' && $dm == 'M' && $nefro == '3') {
            $fecha_1 = "4";
            $fecha_2 = "6";
            $fecha_3 = "3";
        } else if ($hta == 'M' && $dm == 'A' && $nefro == '3') {
            $fecha_1 = "1";
            $fecha_2 = "6";
            $fecha_3 = "3";
        } else if ($hta == 'M' && $dm == 'B' && $nefro == '4') {
            $fecha_1 = "4";
            $fecha_2 = "6";
            $fecha_3 = "2";
        } else if ($hta == 'M' && $dm == 'M' && $nefro == '4') {
            $fecha_1 = "4";
            $fecha_2 = "6";
            $fecha_3 = "2";
        } else if ($hta == 'M' && $dm == 'A' && $nefro == '4') {
            $fecha_1 = "1";
            $fecha_2 = "6";
            $fecha_3 = "2";
        } else if ($hta == '0' && $dm == 'B' && $nefro == '0') {
            $fecha_1 = "6";
            $fecha_2 = "6";
            $fecha_3 = "CM";
        } else if ($hta == '0' && $dm == 'M' && $nefro == '0') {
            $fecha_1 = "4";
            $fecha_2 = "4";
            $fecha_3 = "CM";
        } else if ($hta == '0' && $dm == 'A' && $nefro == '0') {
            $fecha_1 = "1";
            $fecha_2 = "6";
            $fecha_3 = "2";
        } else if ($hta == '0' && $dm == '0' && $nefro == '1') {
            $fecha_1 = "6";
            $fecha_2 = "6";
            $fecha_3 = "6";
        } else if ($hta == '0' && $dm == '0' && $nefro == '2') {
            $fecha_1 = "6";
            $fecha_2 = "6";
            $fecha_3 = "4";
        } else if ($hta == '0' && $dm == '0' && $nefro == '3') {
            $fecha_1 = "4";
            $fecha_2 = "6";
            $fecha_3 = "3";
        } else if ($hta == '0' && $dm == '0' && $nefro == '4') {
            $fecha_1 = "3";
            $fecha_2 = "6";
            $fecha_3 = "2";
        } else if ($hta == '0' && $dm == 'B' && $nefro == '1') {
            $fecha_1 = "6";
            $fecha_2 = "6";
            $fecha_3 = "6";
        } else if ($hta == '0' && $dm == 'B' && $nefro == '2') {
            $fecha_1 = "6";
            $fecha_2 = "6";
            $fecha_3 = "4";
        } else if ($hta == '0' && $dm == 'B' && $nefro == '3') {
            $fecha_1 = "4";
            $fecha_2 = "6";
            $fecha_3 = "3";
        } else if ($hta == '0' && $dm == 'B' && $nefro == '4') {
            $fecha_1 = "3";
            $fecha_2 = "6";
            $fecha_3 = "2";
        } else if ($hta == '0' && $dm == 'M' && $nefro == '1') {
            $fecha_1 = "6";
            $fecha_2 = "6";
            $fecha_3 = "6";
        } else if ($hta == 'B' && $dm == 'M' && $nefro == '2') {
            $fecha_1 = "6";
            $fecha_2 = "6";
            $fecha_3 = "4";
        } else if ($hta == '0' && $dm == 'M' && $nefro == '3') {
            $fecha_1 = "4";
            $fecha_2 = "6";
            $fecha_3 = "3";
        } else if ($hta == 'B' && $dm == 'M' && $nefro == '4') {
            $fecha_1 = "3";
            $fecha_2 = "6";
            $fecha_3 = "2";
        } else if ($hta == '0' && $dm == 'A' && $nefro == '1') {
            $fecha_1 = "6";
            $fecha_2 = "6";
            $fecha_3 = "6";
        } else if ($hta == '0' && $dm == 'A' && $nefro == '2') {
            $fecha_1 = "6";
            $fecha_2 = "6";
            $fecha_3 = "4";
        } else if ($hta == 'B' && $dm == 'A' && $nefro == '3') {
            $fecha_1 = "4";
            $fecha_2 = "6";
            $fecha_3 = "3";
        } else if ($hta == '0' && $dm == 'A' && $nefro == '4') {
            $fecha_1 = "3";
            $fecha_2 = "6";
            $fecha_3 = "2";
        }

        return array($fecha_1, $fecha_2, $fecha_3);
    }

    public static function edad($fecha) {
        list($anio, $mes, $dia) = explode("-", $fecha);
        $anio_dif = date("Y") - $anio;
        $mes_dif = date("m") - $mes;
        $dia_dif = date("d") - $dia;
        if ($dia_dif < 0 || $mes_dif < 0)
            $anio_dif--;
        return $anio_dif;
    }

    public static function check_acc() {
        return md5($_SERVER["SERVER_NAME"]);
    }

    public static function getFooter() {
        $string = '<strong>' . (Utils::$name_company) . '</strong> © ' . (Date('Y')) . '   |   <a href="mailto:jhonny-07@hotmail.com">jhonny-07@hotmail.com</a> |   <a href="?option=sitemap">Site Map</a>';
        return $string;
    }
    
    public static function limpiarCadena($valor) {
        $valor = str_ireplace("SELECT", "", $valor);
        $valor = str_ireplace("COPY", "", $valor);
        $valor = str_ireplace("DELETE", "", $valor);
        $valor = str_ireplace("DROP", "", $valor);
        $valor = str_ireplace("DUMP", "", $valor);
        $valor = str_ireplace(" OR ", "", $valor);
        $valor = str_ireplace("%", "", $valor);
        $valor = str_ireplace("LIKE", "", $valor);
        $valor = str_ireplace("--", "", $valor);
        $valor = str_ireplace("^", "", $valor);
        $valor = str_ireplace("[", "", $valor);
        $valor = str_ireplace("]", "", $valor);
        $valor = str_ireplace("\\", "", $valor);
        $valor = str_ireplace("!", "", $valor);
        $valor = str_ireplace("¡", "", $valor);
        $valor = str_ireplace("?", "", $valor);
        $valor = str_ireplace("=", "", $valor);
        $valor = str_ireplace("&", "", $valor);
        $valor = str_ireplace("'", "’", $valor);
        $valor = str_ireplace('"', "”", $valor);
        return $valor;
    }
 
    
    public static function getTableOdontograma() {

        $js = "
        <script>
			var element = '', type = '';
			$(function(){
			
				$('.select_part').click(function(){
					element = $(this).data('element');
					type = $(this).data('type');
				});
				
				$('.listenerDiente').click(function(){
					var type_ = $(this).data('type');
					var diente_ = $(this).data('diente');
					var id = $(this).attr('id');
					var segment = $(this).data('segment');
					
					if(type==='all'){
						
						if(element==='diente_falta' || element==='diente_extraido' || element==='diente_pextraer'){
							$('#diente_'+diente_+'_0').removeClass('diente');
						}else{
							$('#diente_'+diente_+'_0').addClass('diente');
						}
					
						$('#diente_'+diente_+'_0').attr('src','" . Utils::$http_ruta . "mvc/vista/imagenes/'+element+'.png');
						$('#hdiente_'+diente_+'_0').val(element);
						$('#hdiente_'+diente_+'_0').attr('class',element);
						for(var i=1; i<=5; i++){
							$('#diente_'+diente_+'_'+i).attr('src','" . Utils::$http_ruta . "mvc/vista/imagenes/nada.png');
							$('#hdiente_'+diente_+'_'+i).val('');
							$('#hdiente_'+diente_+'_'+i).attr('class','');
						}
					}else if(type==='part'){	
						$('#diente_'+diente_+'_0').addClass('diente');
						$('#diente_'+diente_+'_0').attr('src','" . Utils::$http_ruta . "mvc/vista/imagenes/diente.png');
						$('#hdiente_'+diente_+'_0').val('diente');
						$('#hdiente_'+diente_+'_0').attr('class','');
						if(segment>0){
							$('#diente_'+diente_+'_'+segment).attr('src','" . Utils::$http_ruta . "mvc/vista/imagenes/'+element+'.png');
							$('#hdiente_'+diente_+'_'+segment).val(element);
							$('#hdiente_'+diente_+'_'+segment).attr('class',element);
						}						
					}
					
					loadData();
					
				});
                           loadData();
			});
			
			var porcentaje = function(parte, total){
				if(total == 0)
				{return 0}
				
				var numero = 100 * parte / total;
				return numero.toFixed(0);
			}
			
			var loadData = function(){
				var caries = $('.caries').size();
				var calza_buena = $('.calza_buena').size();
				var calza_temporal = $('.calza_temporal').size();
				var calza_mala = $('.calza_mala').size();
				var sellante_bueno = $('.sellante_bueno').size();
				var sellante_malo = $('.sellante_malo').size();
				/*******************/
				var dientesano = $('.dientesano').size();
				var coronadaptada = $('.coronadaptada').size();
				var coronadesadaptada = $('.coronadesadaptada').size();
				var diente_falta = $('.diente_falta').size();
				var diente_extraido = $('.diente_extraido').size();
				var diente_pextraer = $('.diente_pextraer').size();
				var diente_conendodorcia = $('.diente_conendodorcia').size();
				var diente_necesitaendodorcia = $('.necesitaendodorcia').size();
				/*******************/
				var cantidad_dientes = $('.diente').size();
				var zonas_dientes = cantidad_dientes * 5;
				/*******************/
				var html_ = '<table border=\'1\' style=\'border-collapse:collapse;background-color:#fff\'>';
				html_ += '<tr><td>Cantidad de dientes</td><td>'+cantidad_dientes+'</td><td>Porcentaje</td><td>'+porcentaje(cantidad_dientes,52)+'%</td></tr>';
				html_ += '<tr><td>Cantidad caries</td><td>'+caries+'</td><td>Porcentaje</td><td>'+porcentaje(caries,zonas_dientes)+'%</td></tr>';
				html_ += '<tr><td>Cnt obturacion adaptada</td><td>'+calza_buena+'</td><td>Porcentaje</td><td>'+porcentaje(calza_buena,zonas_dientes)+'%</td></tr>';
				html_ += '<tr><td>Cnt obturacion temporal</td><td>'+calza_temporal+'</td><td>Porcentaje</td><td>'+porcentaje(calza_temporal,zonas_dientes)+'%</td></tr>';
				html_ += '<tr><td>Cnt obturacion mala</td><td>'+calza_mala+'</td><td>Porcentaje</td><td>'+porcentaje(calza_mala,zonas_dientes)+'%</td></tr>';
				html_ += '<tr><td>Cnt sellanate bueno</td><td>'+sellante_bueno+'</td><td>Porcentaje</td><td>'+porcentaje(sellante_bueno,zonas_dientes)+'%</td></tr>';
				html_ += '<tr><td>Cnt sellanate malo</td><td>'+sellante_malo+'</td><td>Porcentaje</td><td>'+porcentaje(sellante_malo,zonas_dientes)+'%</td></tr>';
				html_ += '<tr><td>Cnt diente sano</td><td>'+dientesano+'</td><td>Porcentaje</td><td>'+porcentaje(dientesano,52)+'%</td></tr>';
				html_ += '<tr><td>Cnt corona adaptada</td><td>'+coronadaptada+'</td><td>Porcentaje</td><td>'+porcentaje(coronadaptada,52)+'%</td></tr>';
				html_ += '<tr><td>Cnt corona desadaptada</td><td>'+coronadesadaptada+'</td><td>Porcentaje</td><td>'+porcentaje(coronadesadaptada,52)+'%</td></tr>';
				html_ += '<tr><td>Cnt dientes faltantes</td><td>'+diente_falta+'</td><td>Porcentaje</td><td>'+porcentaje(diente_falta,52)+'%</td></tr>';
				html_ += '<tr><td>Cnt dientes extraidos</td><td>'+diente_extraido+'</td><td>Porcentaje</td><td>'+porcentaje(diente_extraido,52)+'%</td></tr>';
				html_ += '<tr><td>Cnt dientes para extraer</td><td>'+diente_pextraer+'</td><td>Porcentaje</td><td>'+porcentaje(diente_pextraer,52)+'%</td></tr>';
				html_ += '<tr><td>Cnt dientes con edodorcia</td><td>'+diente_conendodorcia+'</td><td>Porcentaje</td><td>'+porcentaje(diente_conendodorcia,52)+'%</td></tr>';
				html_ += '<tr><td>Cnt dientes para edodorcia</td><td>'+diente_necesitaendodorcia+'</td><td>Porcentaje</td><td>'+porcentaje(diente_necesitaendodorcia,52)+'%</td></tr>';
				html_ += '</table>';

				$('#estadistica').html(html_);
			}
		</script>
        ";

        $css = "
                    <style>
                        .content_diente {
				width:50px;
				height:50px;
				position:relative;
			}
			
			.content_diente img{
				border:0px;
			}
			
			.content1{
				width: 21px;
				height: 12px;
				position: absolute;
				top: 3px;
				left: 14px;
				/*background-color:blue;*/
			}
			
			.content2{
				top: 14px;
				left: 35px;
				width: 12px;
				height: 21px;
				position: absolute;
				/background-color:green;*/
			}
			
			.content3{
				width: 21px;
				height: 12px;
				position: absolute;
				top: 35px; 
				left: 14px;
				/*background-color:blue;*/
			}
			
			.content4{
				top: 14px;
				left:3px;
				width: 12px;
				height: 21px;
				position: absolute;
				/*background-color:green;*/
			}
			
			.content5{
				top: 17px;
				left: 17px;
				width: 16px;
				height: 16px;
				position: absolute;
				/*background-color:red;*/
			}
                </style>    
        ";

        $html = "
        <table border='1' style='border-collapse:collapse; background-color:#fff'>
		<tr>
			<td width='200'>
				<center><img class='select_part' src='" . Utils::$http_ruta . "mvc/vista/imagenes/caries.png' data-element='caries' data-type='part' />
				<br>
				<label>Caries</label></center>
			</td>
			<td width='200'>
				<center><img class='select_part' src='" . Utils::$http_ruta . "mvc/vista/imagenes/calza_buena.png' data-element='calza_buena' data-type='part' />
				<br>
				<label>Obturacion adaptada</label></center>
			</td>
			<td width='200'>
				<center><img class='select_part' src='" . Utils::$http_ruta . "mvc/vista/imagenes/calza_temporal.png' data-element='calza_temporal' data-type='part' />
				<br>
				<label>Obturacion temporal</label></center>
			</td>
			<td width='200'>
				<center><img class='select_part' src='" . Utils::$http_ruta . "mvc/vista/imagenes/calza_mala.png' data-element='calza_mala' data-type='part' />
				<br>
				<label>Obturacion desadaptada</label></cente>
			</td>
			<td width='200'>
				<center><img class='select_part' src='" . Utils::$http_ruta . "mvc/vista/imagenes/sellante_bueno.png' data-element='sellante_bueno' data-type='part' />
				<br>
				<label>Sellante</label></cente>
			</td>
			<td width='200'>
				<center><img class='select_part' src='" . Utils::$http_ruta . "mvc/vista/imagenes/sellante_malo.png' data-element='sellante_malo' data-type='part' />
				<br>
				<label>Para Sellante</label></center>
			</td>
		</tr>
		<tr>
			<td width='200'>
				<center><img class='select_part' src='" . Utils::$http_ruta . "mvc/vista/imagenes/dientesano.png' data-element='dientesano' data-type='all' />
				<br>
				<label>Sano</label></center>
			</td>
			<td width='200'>
				<center><img class='select_part' src='" . Utils::$http_ruta . "mvc/vista/imagenes/coronadaptada.png' data-element='coronadaptada' data-type='all' />
				<br>
				<label>Corona adaptada</label></center>
			</td>
			<td width='200'>
				<center><img class='select_part' src='" . Utils::$http_ruta . "mvc/vista/imagenes/coronadesadaptada.png' data-element='coronadesadaptada' data-type='all' />
				<br>
				<label>Corona desadaptada</label></center>
			</td>
			<td width='200'>
				<center><img class='select_part' src='" . Utils::$http_ruta . "mvc/vista/imagenes/diente_falta.png' data-element='diente_falta' data-type='all' />
				<br>
				<label>Falta</label></center>
			</td>
			<td width='200'>
				<center><img class='select_part' src='" . Utils::$http_ruta . "mvc/vista/imagenes/diente_extraido.png' data-element='diente_extraido' data-type='all' />
				<br>
				<label>Extraido</label></center>
			</td>
			<td width='200'>
				<center><img class='select_part' src='" . Utils::$http_ruta . "mvc/vista/imagenes/diente_pextraer.png' data-element='diente_pextraer' data-type='all' />
				<br>
				<label>Para extraer</label></center>
			</td>
			<td width='200'>
				<center><img class='select_part' src='" . Utils::$http_ruta . "mvc/vista/imagenes/diente_conendodorcia.png' data-element='diente_conendodorcia' data-type='all' />
				<br>
				<label>Con endodorcia</label></center>
			</td>
			<td width='200'>
				<center><img class='select_part' src='" . Utils::$http_ruta . "mvc/vista/imagenes/necesitaendodorcia.png' data-element='necesitaendodorcia' data-type='all' />
				<br>
				<label>Necesita endodorcia</label></center>
			</td>
			
		</tr>
	</table>
        ";

        echo $js, $css, $html;
    }

    public static function getSelect($segment, $num, $value) {
        $html = "";
        $varHclas = "";
        if ($segment > 0) {
            if ($value != '') {
                $varHclas = $value;
                $html .= "<img id='diente_{$num}_{$segment}' class='listenerDiente content{$segment} contentSegmenth ' src='" . Utils::$http_ruta . "mvc/vista/imagenes/{$value}.png' data-type='part' data-segment='{$segment}' data-diente='{$num}' />";
            } else {
                $html .= "<img id='diente_{$num}_{$segment}' class='listenerDiente content{$segment} contentSegmenth' src='" . Utils::$http_ruta . "mvc/vista/imagenes/nada.png' data-type='part' data-segment='{$segment}' data-diente='{$num}' />";
            }
        }else{
            if($value=='diente'){
                $varHclas = $value;
            }
            
            if ($value != '' && $value != 'diente') {
                $varHclas = $value;
                $varClass = '';
                if($value!='diente_falta' || $value!='diente_extraido' || $value!='diente_pextraer'){
                    $varClass = 'diente';
                }
                $html .= "<img id='diente_{$num}_{$segment}' class='listenerDiente {$varClass}' src='" . Utils::$http_ruta . "mvc/vista/imagenes/{$value}.png' width='50' height='50' data-type='all' data-segment='0' data-diente='{$num}' />";
            } else {
                $html .= "<img id='diente_{$num}_{$segment}' class='listenerDiente' src='" . Utils::$http_ruta . "mvc/vista/imagenes/diente.png' width='50' height='50' data-type='all' data-segment='0' data-diente='{$num}' />";
            }
        }

        $html .= "<input class='{$varHclas}' type='hidden' id='hdiente_{$num}_{$segment}' name='diente[$num][$segment]' value='{$value}' />";
        return $html;
    }

    public static function getDiente($num, $con) {

        $val = '';
        $sql = "SELECT posicion_0,posicion_1,posicion_2,posicion_3,posicion_4,posicion_5 
                        FROM `odontograma` 
                        WHERE `historia` = '{$_REQUEST['historia']}'
                        and `id_vinicial` = '{$_REQUEST['id_vinicial']}' 
                        and `id_diente` = '{$num}'";

        $result = $con->EjecutarQuery($sql);
        while ($row = mysql_fetch_row($result)) {
            $arrayVals[0] = $row[0];
            $arrayVals[1] = $row[1];
            $arrayVals[2] = $row[2];
            $arrayVals[3] = $row[3];
            $arrayVals[4] = $row[4];
            $arrayVals[5] = $row[5];
        }

        $parte0 = Utils::getSelect(0, $num, $arrayVals[0]);
        $parte1 = Utils::getSelect(1, $num, $arrayVals[1]);
        $parte2 = Utils::getSelect(2, $num, $arrayVals[2]);
        $parte3 = Utils::getSelect(3, $num, $arrayVals[3]);
        $parte4 = Utils::getSelect(4, $num, $arrayVals[4]);
        $parte5 = Utils::getSelect(5, $num, $arrayVals[5]);

        $html2 = "
        <center><label>{$num}</label></center>
        <div class='content_diente' id='diente{$num}'>
                {$parte0}
                {$parte1}
                {$parte2}
                {$parte3}
                {$parte4}
                {$parte5}
	</div> ";

        echo $html2;
    }

    
}

?>
