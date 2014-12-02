<div class='row'>
	<div class='col-2'>
        <div class='panel'>
            <div class='panel-head'>
                <h4>Tambah Makanan</h4>
                <div class='panel-action'>
                </div>
            </div>
            <?= form_open_multipart(base_url()."admin/datamaster/add", array("role" => "form"))?>
            <div class='panel-body'>
                <div class='input-row inline'>
                    <h5>Nama :</h5>
                    <input type='text' name='nama' <?= form_error('nama'); ?>/>
                </div>
                <div class='input-row inline'>
                    <h5>Foto :</h5>
                    <div class='input-file'>
                        <input type='text' name='photo-name' <?= form_error('photo-name'); ?>/>
                        <h4 class='button button-blue'>Browse</h4>
                        <input type="file" name='photo'/>
                    </div>
                </div>
                <div class='input-row inline'>
                    <h5>Asal :</h5>
                    <select name='asal'>
                        <?php foreach ($this->admin->getKats(1) as $c) {
                            echo "<option value='".$c->id_kat."'>".$c->nama_kat."</option>";
                        } ?>
                    </select>
                </div>
                <div class='input-row inline'>
                    <h5>Waktu :</h5>
                    <select name='waktu'>
                        <?php foreach ($this->admin->getKats(2) as $c) {
                            echo "<option value='".$c->id_kat."'>".$c->nama_kat."</option>";
                        } ?>
                    </select>
                </div>
                <div class='input-row inline'>
                    <h5>Jenis :</h5>
                    <select name='jenis'>
                        <?php foreach ($this->admin->getKats(3) as $c) {
                            echo "<option value='".$c->id_kat."'>".$c->nama_kat."</option>";
                        } ?>
                    </select>
                </div>
                <div class='input-row inline'>
                    <h5>Cara :</h5>
                    <select name='cara'>
                        <?php foreach ($this->admin->getKats(4) as $c) {
                            echo "<option value='".$c->id_kat."'>".$c->nama_kat."</option>";
                        } ?>
                    </select>
                </div>
                <div class='input-row inline'>
                    <h5>Ukuran :</h5>
                    <select name='ukuran'>
                        <?php foreach ($this->admin->getKats(5) as $c) {
                            echo "<option value='".$c->id_kat."'>".$c->nama_kat."</option>";
                        } ?>
                    </select>
                </div>
                <div class='input-row submit'>
                    <input type='submit' value='Submit' class='button button-blue'/>
                </div>
                <?= form_close()?>
            </div>
        </div>
    </div>