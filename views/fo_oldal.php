<div class="row mt-3 mx-auto ">
    <?php foreach ($termekek as $termek) : ?>
        <?php
        header("Content-Type: text/html; charset=UTF-8");
        $nev = $termek['nev'];       
        $uj_nev = utf8_decode($nev); //valami gáz van a gépemen a php-val, és nem jól jelennek meg bizonyos karakterek, ezért próbáltam
        $uj_nev = utf8_encode($nev); //meg ezekkel bűvészkedni, bár így sem lett tökéletes. :/

        $leiras = $termek['leiras'];       
        $uj_leiras =  utf8_decode($leiras);
        $uj_leiras =  utf8_encode($leiras);              
        ?>
        <div class="card col-md-3 p-0 m-1">
            <div class="card-header">
                <img src="<?php echo $termek['kep'] ?>" class="card-img-top" alt="...">
            </div>
            
            <div class="card-body">
                <h5 class="card-title"><?php echo $uj_nev ?></h5>
                <p class="card-text"><?php echo $uj_leiras?> </p>
            </div>
            <div class="card-footer text-end">
                <?php echo number_format($termek['ar'],0,",",".")." Ft" ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>

