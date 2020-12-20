<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Bus
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $harian['id']; ?>">
                        
                      


                        <div class="form-group">
                            <label for="Mobil">Mobil</label>
                            <input type="text" name="Mobil" class="form-control" id="Mobil" value="<?= $harian['Mobil']; ?>">
                            <small class="form-text text-danger"><?= form_error('Mobil'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="Paket_10_Hari">Paket_1</label>
                            <input type="text" name="Paket_10_Hari" class="form-control" id="Paket_10_Hari" value="<?= $harian['Paket_10_Hari']; ?>">
                            <small class="form-text text-danger"><?= form_error('Paket_10_Hari'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="Paket_20_Hari">Paket_2</label>
                            <input type="text" name="Paket_20_Hari" class="form-control" id="Paket_20_Hari" value="<?= $harian['Paket_20_Hari']; ?>">
                            <small class="form-text text-danger"><?= form_error('Paket_20_Hari'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="Paket_30_Hari">Paket_3</label>
                            <input type="text" name="Paket_30_Hari" class="form-control" id="Paket_30_Hari"value="<?= $harian['Paket_30_Hari']; ?>">
                            <small class="form-text text-danger"><?= form_error('Paket_30_Hari'); ?></small>
                        </div>
                        
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>