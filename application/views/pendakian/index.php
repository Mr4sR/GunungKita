<h2>Daftar Pendakian</h2>
<div class="row">
    <?php foreach ($pendakian as $p) : ?>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $p['nama']; ?></h5>
                    <a href="<?php echo base_url('pendakian/detail/' . $p['id']); ?>" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>