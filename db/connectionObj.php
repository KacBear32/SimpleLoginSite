<?php
include_once '../../config/configObj.php';

class connectionPdo extends config {
       
    public $oPDO;

    function __construct() {
       $this->oPDO = false; 
    }

    function connection() {

        $oConf = new config();

        $this->oPDO = new PDO(
            "mysql:host=$oConf->host;dbname=$oConf->dbname;port=$oConf->port",
            $oConf->user, $oConf->pass, 
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
        );

        return $this->oPDO;

    }
}

    
?>