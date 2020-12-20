<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Mobil
                </div>
                <div class="card-body">
                    <h5 class="card-title">ID : <?= $harian['id']; ?></h5>
                    <h5 class="card-title">Mobil : <?= $harian['Mobil']; ?></h5>
                    <h5 class="card-title">Paket 1 : <?= $harian['Paket_10_Hari']; ?></h5>
                    <h5 class="card-title">Paket 2 : <?= $harian['Paket_20_Hari']; ?></h5>
                    <h5 class="card-title">Paket 3 : <?= $harian['Paket_30_Hari']; ?></h5>
                    <a href="<?= base_url(); ?>harian" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>