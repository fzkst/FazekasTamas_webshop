<?php
if (!isset($_SESSION['felhasznalo'])){
    http_response_code(403);
    include "./views/_403.html";
    die();
}
  
if ($_SERVER['REQUEST_METHOD'] == "POST"){
require_once "models/TermekModel.php";
$termek = new TermekModel();
$konyvtar = "./uploads/";
if(isset($_FILES['kep'])){
    move_uploaded_file($_FILES['kep']['tmp_name'], "./uploads/". $_FILES['kep']['name']);
  }
  else{
      $hiba = "A kép nem található!";
      include "./views/hiba_alert.php";
  }
$nev = $_POST['nev'] ? $_POST['nev'] : "";
$leiras = $_POST['leiras'] ? $_POST['leiras'] : "";
$ar = $_POST['ar'] ? $_POST['ar'] : "";  
$kep = $konyvtar . basename($_FILES['kep']['name']); 
$size = getimagesize($kep); 
$hiba = "";
if (empty($nev)){
    $hiba .= "A név megadása kötelező!";
}
if (empty($ar)){
    $hiba .= "Az árat kötelező megadni!";
}
if ($ar < 0){
    $hiba .= "A termék ára nem lehet kisebb, mint nulla!";
}
if ($hiba != ""){
    $hiba = trim($hiba);
    include "./views/hiba_alert.php";
} else {   
    if ($size['mime'] == "image/png" || $size['mime'] == "image/jpg" || $size['mime'] == "image/bmp"){
         try {                   
            $termek->uj_termek($nev .date(" - Y/m/d H:i:s"), $leiras, $ar, $kep);  
            $siker = "Az új termék hozzáadása sikeres volt!";
            include "./views/siker_alert.php";
        } catch (\mysqli_sql_exception $th) {
                $hiba = $th->getMessage();
                include "./views/hiba_alert.php";
            }             
    } else {
        $hiba =  "Sikertelen feltöltés! Nem képfájlt adott meg!";
        include "./views/hiba_alert.php";
    }
}       
}
include "views/termek_hozzaadasa_urlap.php";
///

?>

