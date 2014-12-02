<div class='row'>
	<div class='col-2'>
        <div class='panel'>
            <div class='panel-head'>
                <h4>Tambah Kategori</h4>
                <div class='panel-action'>
                </div>
            </div>
            <?php foreach ($kategori as $k) { ?>
            <?= form_open_multipart(base_url()."admin/datamaster/edit_kategori/".$k->id_kat, array("role" => "form"))?>
            <div class='panel-body'>
                <div class='input-row inline'>
                    <h5>Direktori :</h5>
                    <input type='text' value='<?= $this->admin->getDirname($k->id_dir) ?>' disabled/>
                </div>
                <div class='input-row inline'>
                    <h5>Nama Kategori :</h5>
                    <input type='text' name='nama_kat' value='<?= $k->nama_kat ?>' <?= form_error('nama_kat'); ?>/>
                </div>
                <div class='input-row submit'>
                    <input type='submit' value='Submit' class='button button-blue'/>
                </div>
                <?= form_close()?>
                <?php } ?>
            </div>
        </div>
    </div>