<?php
/**
 * @property Disesoft
 * @author Gustavo Rodriguez
 */
class Conexion {

    //put your code here
    public  $baseURL;
    private $Servidor;
    private $User;
    private $Password;
    private $DataBase;
    private $Link;
    private $Query;
    private $CantidadFilas;

    //constructores
    public function __construct() {
        $this->Servidor = Utils::$server;
        $this->User = Utils::$user_name;
        $this->Password = Utils::$user_name_password;
        $this->DataBase = Utils::$database;
    }

    protected function __inicializar($Servidor, $User, $Password, $DataBase) {
        $this->Servidor = $Servidor;
        $this->User = $User;
        $this->Password = $Password;
        $this->DataBase = $DataBase;
    }

    //________________
    //Propiedades
    protected function SetServidor($Servidor) {
        $this->Servidor = $Servidor;
    }

    public function GetServidor() {
        return $this->Servidor;
    }

    protected function SetUser($User) {
        $this->User = $User;
    }

    public function GetUser() {
        return $this->User;
    }

    protected function SetPassword($Password) {
        $this->Password = $Password;
    }

    public function GetPassword() {
        return $this->Password;
    }

    protected function SetDataBase($DataBase) {
        $this->DataBase = $DataBase;
    }

    public function GetDataBase() {
        return $this->DataBase;
    }

    public function SetQuery($Query) {
        $this->Query = $Query;
    }

    public function GetQuery() {
        return $this->Query;
    }

    public function GetLink() {
        return $this->Link;
    }

    public function GetCantidadFilasNowQuery() {
        return $this->CantidadFilas;
    }

    //________________
    //Metodos

    public function conectar() {
        $x = 0;
        if (!$this->Link = mysql_connect($this->Servidor, $this->User, $this->Password)) {
            echo "No se establecio conexion con el servidor";
        }
        if (!mysql_select_db($this->DataBase, $this->Link)) {
            echo "No se encontro la base de datos";
        }
        return $this->Link;
    }

    public function desconectar() {
        $Cerrar = mysql_close($this->Link);
    }

    public function EjecutarQuery($Query) {
        $this->conectar();
        $this->Query = $Query;
        $result = mysql_query($this->Query, $this->Link);

        if ($result != 0) {
            //$array = mysql_fetch_array($result);
            //return $array;
            $this->CantidadFilas = @mysql_num_rows($result);
            return $result;
        } else {
            return 0;
        }
        $this->desconectar();
    }

    public function EjecutarInsert($Query) {
        $this->conectar();
        $this->Query = $Query;
        $result = mysql_query($this->Query, $this->Link);
        $this->desconectar();
        return $result;
    }

    public function EjecutarUpdate($Query) {
        $this->conectar();
        $this->Query = $Query;
        $result = mysql_query($this->Query, $this->Link);
        $this->desconectar();
        return $result;
    }

    public function EjecurtarDelete($Query){
        $this->conectar();
        $this->Query = $Query;
        $result = mysql_query($this->Query, $this->Link);
        $this->desconectar();
        return $result;
    }

    public function TraerDato($Query) {
        $this->conectar();
        $this->Query = $Query;
        $result = mysql_query($this->Query, $this->Link);
        if ($result != 0) {
            $array = mysql_fetch_array($result);
            return $array[0];
        } else {
            return 0;
        }
        $this->desconectar();
    }

    public function _EjecutarQuery($Query, $value, $opcion) {
        $this->conectar();
        $this->Query = $Query;
        $result = mysql_query($this->Query, $this->Link);
        $this->CantidadFilas = mysql_num_rows($result);
        if ($result != 0) {
            echo "<option value =-2> [ selected ] </option>";
            while ($tipos = mysql_fetch_array($result)) {
                echo "<option value = $tipos[$value]>$tipos[$opcion]</option>";
            }
        } else {
            echo "<option value =-2> [Sin Registros] </option>";
        }
        $this->desconectar();
    }

    public function _TraerSelect($Query, $value, $opcion) {
        $this->conectar();
        $this->Query = $Query;
        $result = mysql_query($this->Query, $this->Link);
        $this->CantidadFilas = mysql_num_rows($result);
        if ($result != 0) {
            //echo "<option value =-2> [ Ninguno ] </option>";
            while ($tipos = mysql_fetch_array($result)) {
                echo "<option value = $tipos[$value]>$tipos[$opcion]</option>";
            }
        }

        $this->desconectar();
    }

    public function CallFunction($Function) {
        $this->conectar();
        $Result = mysql_query("Select(" . $Function . ");", $this->Link);
        $Result = mysql_fetch_array($Result);
        return $Result[0];
        $this->desconectar();
    }

    //________________
}

$conexion = new Conexion();
?>
