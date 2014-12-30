<div class='row'>
	<div class='col-2'>
        <div class='panel'>
            <div class='panel-head'>
                <h4>Tambah Makanan</h4>
                <div class='panel-action'>
                </div>
            </div>
            <?php foreach ($datamaster as $d) { ?>
            <?= form_open_multipart(base_url()."admin/datamaster/edit/".$d->id_mkn, array("role" => "form"))?>
            <div class='panel-body'>
                <div class='input-row inline'>
                    <h5>Nama :</h5>
                    <input type='text' name='nama' value='<?= $d->nama_mkn ?>' <?= form_error('nama'); ?>/>
                </div>
                <div class='input-row inline file-exist'>
				    <h5>Foto :</h5>
				    <div class='input-file'>
				        <input type='text'/>
				        <h4 class='button button-blue'>Browse</h4>
				        <input type='hidden' name='image_delete' value='<?= $d->foto ?>'/>
				        <input type="file" name='photo'/>
				    </div>
				    <div class='input-file-exist'>
				        <a href='<?= base_url() ?>assets/uploads/<?= $d->foto ?>' target='_blank' style='background-image:url(<?= base_url() ?>assets/uploads/<?= $d->foto ?>);'></a>
				        <h4><i class="fa fa-retweet"></i> Change Image</h4>
				    </div>
				</div>
                <div class='input-row inline'>
                    <h5>Asal :</h5>
                    <select name='asal'>
                        <?php foreach ($this->admin->getKats(1) as $c) { ?>
                            <option value='<?= $c->id_kat ?>' <?= $c->id_kat == $d->asal ? "selected" : ""; ?>><?= $c->nama_kat ?></option>";
                        <?php } ?>
                    </select>
                </div>
                <div class='input-row inline'>
                    <h5>Waktu :</h5>
                    <select name='waktu'>
                        <?php foreach ($this->admin->getKats(2) as $c) { ?>
                            <option value='<?= $c->id_kat ?>' <?= $c->id_kat == $d->waktu ? "selected" : ""; ?>><?= $c->nama_kat ?></option>";
                        <?php } ?>
                    </select>
                </div>
                <div class='input-row inline'>
                    <h5>Jenis :</h5>
                    <select name='jenis'>
                        <?php foreach ($this->admin->getKats(3) as $c) { ?>
                            <option value='<?= $c->id_kat ?>' <?= $c->id_kat == $d->jenis ? "selected" : ""; ?>><?= $c->nama_kat ?></option>";
                        <?php } ?>
                    </select>
                </div>
                <div class='input-row inline'>
                    <h5>Cara :</h5>
                    <select name='cara'>
                        <?php foreach ($this->admin->getKats(4) as $c) { ?>
                            <option value='<?= $c->id_kat ?>' <?= $c->id_kat == $d->cara ? "selected" : ""; ?>><?= $c->nama_kat ?></option>";
                        <?php } ?>
                    </select>
                </div>
                <div class='input-row inline'>
                    <h5>Ukuran :</h5>
                    <select name='ukuran'>
                        <?php foreach ($this->admin->getKats(5) as $c) { ?>
                            <option value='<?= $c->id_kat ?>' <?= $c->id_kat == $d->ukuran ? "selected" : ""; ?>><?= $c->nama_kat ?></option>";
                        <?php } ?>
                    </select>
                </div>
                <div class='input-row submit'>
                    <input type='submit' value='Update' class='button button-blue'/>
                </div>
                <?= form_close()?>
                <?php } ?>
            </div>
        </div>
    </div>