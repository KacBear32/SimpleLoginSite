<?php
require_once '../logic/saveUserData.php';

$oClass = new addUser();
$oResult = $oClass->init();

$oResponse = json_encode( $oResult );
exit( $oResponse );