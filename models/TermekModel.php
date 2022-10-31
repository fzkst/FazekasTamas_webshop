<?php

require_once "models/_adatbazis.php";
class TermekModel extends Adatbazis {
    public function select_all(){
        $sql = "SELECT * FROM termek";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
?>