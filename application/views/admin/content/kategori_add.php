<div class='row'>
	<div class='col-2'>
        <div class='panel'>
            <div class='panel-head'>
                <h4>Tambah Kategori</h4>
                <div class='panel-action'>
                </div>
            </div>
            <?= form_open_multipart(base_url()."admin/datamaster/add_kategori", array("role" => "form"))?>
            <div class='panel-body'>
                <div class='input-row inline'>
                    <h5>Direktori :</h5>
                    <select name='id_dir'>
                        <?php foreach ($this->admin->getDir() as $c) {
                            echo "<option value='".$c->id_dir."'>".$c->nama."</option>";
                        } ?>
                    </select>
                </div>
                <div class='input-row inline'>
                    <h5>Nama Kategori :</h5>
                    <input type='text' name='nama_kat' <?= form_error('nama_kat'); ?>/>
                </div>
                <div class='input-row submit'>
                    <input type='submit' value='Submit' class='button button-blue'/>
                </div>
                <?= form_close()?>
            </div>
        </div>
    </div>