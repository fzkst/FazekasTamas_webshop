<div class="row">
    <?php foreach ($termekek as $termek) : ?>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">valami<?php echo $termek['nev'] ?></h2>
                </div>
                <div class="card-body">
                    <?php echo $termek['leiras'] ?><br>
                    <?php echo $termek['ar'] ?>
                </div>
                <div class="card-footer">
                    <?php echo $termek['kep'] ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>    
</div>