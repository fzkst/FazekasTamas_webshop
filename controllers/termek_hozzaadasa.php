<?php
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    require_once "models/TermekModel.php";
    $termek = new TermekModel();
    $nev = $_POST['nev'];
    $leiras = $_POST['leiras'];
    $ar = $_POST['ar'];  
    $kep = $_POST['kep'];  
    $termek->uj_termek($nev, $leiras, $ar, $kep);    
}
include "views/termek_hozzaadasa_urlap.php";
?>