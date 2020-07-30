<?php

    $oPDO = null;

    // Połączenie z bazą danych
    $oPDO = new PDO(
        "mysql:host=$host;dbname=$dbname;port=$port",
        $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    );
    
    return $oPDO;
    
?>