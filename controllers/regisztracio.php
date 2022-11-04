<script src="/util/validalas.js"></script>
<?php
if (isset($_SESSION['felhasznalo'])){
    header("Location: /");
}

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    require_once "models/FelhasznaloModel.php";
    $felh_model = new FelhasznaloModell();
    $felhasznalonev = $_POST['felhasznalonev'];
    $email = $_POST['email'];
    $jelszo = $_POST['jelszo'];
    $teljes_nev = $_POST['teljes_nev']; 
    $szuletesi_datum = $_POST['szuletesi_datum'];
    $iranyito_szam = $_POST['iranyito_szam'];
    $varos = $_POST['varos'];
    $cim = $_POST['cim'];      
    $felhasznalok = $felh_model->select_all();
    $hiba = "";
    if (empty($felhasznalonev)){
        $hiba .= "Felhasználó név megadása kötelező!";
    } elseif (strlen($felhasznalonev) > 30){
        $hiba .= "A felhasználónév maximum 30 karakter lehet!";
        } 
    if (empty($email)){
        $hiba .= "Email megadása kötelező!";
    } elseif (strlen($email) > 255){
        $hiba .= "Az email maximum 255 karakter lehet!";
        }
    if (empty($jelszo)){
        $hiba .= "Jelszó megadása kötelező!";
    } elseif (strlen($jelszo) > 100){
        $hiba .= "A jelszó maximum 100 karakter lehet!";
        }
    if (empty($teljes_nev)){
        $hiba .= "Név megadása kötelező!";
    } elseif (strlen($teljes_nev) > 100){
        $hiba .= "A név maximum 100 karakter lehet!";
        }
    if (empty($szuletesi_datum)){
        $hiba .= "Születési dátum megadása kötelező!";
    }
    if (empty($iranyito_szam)){
        $hiba .= "Irányítószám megadása kötelező!";
    } elseif (strlen($iranyito_szam) > 4){
        $hiba .= "Az irányítószám maximum 4 karakter lehet!";
        }
    if (empty($varos)){
        $hiba .= "Város megadása kötelező!";
    } elseif (strlen($varos) > 50){
        $hiba .= "A város maximum 50 karakter lehet!";
        }
    if (empty($cim)){
        $hiba .= "Cím megadása kötelező!";
    } elseif (strlen($cim) > 255){
        $hiba .= "A cím maximum 255 karakter lehet!";
        }
    foreach ($felhasznalok as $valaki){
        if ($valaki['felhasznalo_nev'] == $felhasznalonev){
            $hiba .= "Ezzel a felhasználónévvel már regisztráltak!";
        } elseif ($valaki['email'] == $email){
            $hiba .= "Ezzel az email címmel már regisztráltak!";
        }         
    }
    if ($hiba != "") {
        $hiba = trim($hiba);
        include "./views/hiba_alert.php";
    } else {
        try {                   
            $felh_model->regisztracio($felhasznalonev, $email, $jelszo, $teljes_nev, $szuletesi_datum, $iranyito_szam, $varos, $cim);
            $siker = "sikeres regisztráció!"; 
            include "./views/siker_alert.php";
        } catch (\mysqli_sql_exception $th) {
            $hiba = $th->getMessage();
            include "./views/hiba_alert.php";
        }
    }          
    
}
include "views/regisztracio_urlap.php";
?>