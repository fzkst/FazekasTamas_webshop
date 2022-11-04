<?php
require_once "models/_adatbazis.php";
class FelhasznaloModell extends Adatbazis{
    public function regisztracio($felhasznalonev, $email, $jelszo, $teljes_nev, $szuletesi_datum, $iranyito_szam, $varos, $cim){
        $sql = "INSERT INTO felhasznalo(felhasznalo_nev, email, password, teljes_nev, szuletesi_datum, iranyito_szam, varos, cim) VALUES (?,?,?,?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $hash = password_hash($jelszo, PASSWORD_DEFAULT);    
        $stmt->bind_param("sssssiss", $felhasznalonev, $email, $hash, $teljes_nev, $szuletesi_datum, $iranyito_szam, $varos, $cim);
        $stmt->execute();
    }
    public function bejelentkezes($felhasznalonev, $jelszo){
        $sql = "SELECT * FROM felhasznalo WHERE felhasznalo_nev = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $felhasznalonev);
        $stmt->execute();
        $result = $stmt->get_result();     
        
        $sql2 = "SELECT * FROM felhasznalo WHERE email = ?";
        $stmt = $this->conn->prepare($sql2);
        $stmt->bind_param("s", $felhasznalonev);
        $stmt->execute();
        $result2 = $stmt->get_result();     
        
        $felhasznalo = false;
        if ($result->num_rows == 1){
            $sor = $result->fetch_assoc();
            if (password_verify($jelszo, $sor['password'])){
                $felhasznalo = $sor;
            }            
        } elseif ($result2->num_rows == 1){
            $sor = $result2->fetch_assoc();
            if (password_verify($jelszo, $sor['password'])){
                $felhasznalo = $sor;
            }   
        }
        return $felhasznalo;
    }
    

    public function select_all(){
        $sql = "SELECT * FROM felhasznalo";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
?>