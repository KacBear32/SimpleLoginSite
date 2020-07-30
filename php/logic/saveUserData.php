<?php
header('Content-type: application/json; charset=utf-8');
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 1);
include_once '../../db/connectionObj.php';
include_once '../../config/configObj.php';


class addUser {

    private $uId = false;

    function __construct() {
        $this->uId = false;
    }

	private function initializePDO() {

        $oPdo = new connectionPdo();
        $this->oPDO = $oPdo->connection();

    }

    public function init() {

		$oResp = false;

        // Inicjalizacja po��czenia z DB
        self::initializePDO();

        $oParams = $_POST["oDane"];

        if( ( $oParams["n_uz"] !== "false" && strlen($oParams["n_uz"]) > 0 )
			&& ( $oParams["login"] !== "false"  && strlen($oParams["login"]) > 0 )
			   && ( $oParams["haslo"] !== "false" && strlen($oParams["haslo"]) > 0 )
			      && ( $oParams["mail"] !== "false"  && strlen($oParams["mail"]) > 0 )
              && ( $oParams["reklama"] !== "false"  && strlen($oParams["reklama"]) > 0 )
                && ( $oParams["imie"] !== "false"  && strlen($oParams["imie"]) > 0 )
                  && ( $oParams["nazwisko"] !== "false"  && strlen($oParams["nazwisko"]) > 0 )) {

            self::addUser($oParams);
            $oResp = true;

        }


        return $oResp;

    }


    private function addUser($oParams) {
      $email = filter_var($oParams["mail"], FILTER_SANITIZE_EMAIL);
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
      echo "Niepoprawny email!";
      } else {
        $bDbResp = $this->oPDO->exec(
            "INSERT INTO `users` (`user_id`, `n_uz`, `login`, `imie`, `nazwisko`, `mail`, "
            . "`haslo`, `reklama`) VALUES ("
            . "NULL, '".$oParams["n_uz"]."', '". $oParams["login"]."', '". $oParams["imie"]."', '"
			. $oParams["nazwisko"]."', '". $oParams["mail"]."', '". $oParams["haslo"] ."', '". $oParams["reklama"]."'"
			. ")"
		);

        $stmtLastLine =
            $this->oPDO->query("SELECT * FROM `users`"
                . " ORDER BY user_id DESC"
                . " LIMIT 1"
            );
        $aLastLine = $stmtLastLine->fetchAll( PDO::FETCH_ASSOC );

        $this->uId = $aLastLine[0]["user_id"];

        /*
        $stmtCurrency =
            $this->oPDO->query( "UPDATE `users`"
                . " SET u_code='$userCode'"
                . " WHERE u_id='" . $this->uId . "'"
            );
        $stmtCurrency->fetchAll( PDO::FETCH_ASSOC );
		*/
  }}




}

?>
