<?= $this->session->flashdata("pesan") ?>
<div class='row'>
    <div class='col-2'>
        <div class='panel'>
            <div class='panel-head'>
                <h5>Direktori: Asal</h5>
            </div>
            <div class='panel-body'>
                <table class='bordered'>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th class='nosort'>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($asal as $d) {
                            echo "<tr>
                            <td>".$d->id_kat."</td>
                            <td>".$d->nama_kat."</td>
                            <td class='nowrap'>
                            ".anchor(base_url()."admin/datamaster/edit_kategori/".$d->id_kat, "<i class='fa fa-edit'></i>", "class='button button-icon button-green'")." ".
                            anchor(base_url()."admin/datamaster/delete_kategori/".$d->id_kat."/".$d->id_dir, "<i class='fa fa-trash-o'></i>", "class='button button-icon button-red button-confirm'")."
                            </td>
                            </tr>";
                        } 
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class='row'>
    <div class='col-2'>
        <div class='panel'>
            <div class='panel-head'>
                <h5>Direktori: Waktu</h5>
            </div>
            <div class='panel-body'>
                <table class='bordered'>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th class='nosort'>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($waktu as $d) {
                            echo "<tr>
                            <td>".$d->id_kat."</td>
                            <td>".$d->nama_kat."</td>
                            <td class='nowrap'>
                            ".anchor(base_url()."admin/datamaster/edit_kategori/".$d->id_kat, "<i class='fa fa-edit'></i>", "class='button button-icon button-green'")." ".
                            anchor(base_url()."admin/datamaster/delete_kategori/".$d->id_kat."/".$d->id_dir, "<i class='fa fa-trash-o'></i>", "class='button button-icon button-red button-confirm'")."
                            </td>
                            </tr>";
                        } 
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class='row'>
    <div class='col-2'>
        <div class='panel'>
            <div class='panel-head'>
                <h5>Direktori: Jenis</h5>
            </div>
            <div class='panel-body'>
                <table class='bordered'>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th class='nosort'>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($jenis as $d) {
                            echo "<tr>
                            <td>".$d->id_kat."</td>
                            <td>".$d->nama_kat."</td>
                            <td class='nowrap'>
                            ".anchor(base_url()."admin/datamaster/edit_kategori/".$d->id_kat, "<i class='fa fa-edit'></i>", "class='button button-icon button-green'")." ".
                            anchor(base_url()."admin/datamaster/delete_kategori/".$d->id_kat."/".$d->id_dir, "<i class='fa fa-trash-o'></i>", "class='button button-icon button-red button-confirm'")."
                            </td>
                            </tr>";
                        } 
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class='row'>
    <div class='col-2'>
        <div class='panel'>
            <div class='panel-head'>
                <h5>Direktori: Cara</h5>
            </div>
            <div class='panel-body'>
                <table class='bordered'>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th class='nosort'>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($cara as $d) {
                            echo "<tr>
                            <td>".$d->id_kat."</td>
                            <td>".$d->nama_kat."</td>
                            <td class='nowrap'>
                            ".anchor(base_url()."admin/datamaster/edit_kategori/".$d->id_kat, "<i class='fa fa-edit'></i>", "class='button button-icon button-green'")." ".
                            anchor(base_url()."admin/datamaster/delete_kategori/".$d->id_kat."/".$d->id_dir, "<i class='fa fa-trash-o'></i>", "class='button button-icon button-red button-confirm'")."
                            </td>
                            </tr>";
                        } 
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class='row'>
    <div class='col-2'>
        <div class='panel'>
            <div class='panel-head'>
                <h5>Direktori: Ukuran</h5>
            </div>
            <div class='panel-body'>
                <table class='bordered'>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th class='nosort'>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($ukuran as $d) {
                            echo "<tr>
                            <td>".$d->id_kat."</td>
                            <td>".$d->nama_kat."</td>
                            <td class='nowrap'>
                            ".anchor(base_url()."admin/datamaster/edit_kategori/".$d->id_kat, "<i class='fa fa-edit'></i>", "class='button button-icon button-green'")." ".
                            anchor(base_url()."admin/datamaster/delete_kategori/".$d->id_kat."/".$d->id_dir, "<i class='fa fa-trash-o'></i>", "class='button button-icon button-red button-confirm'")."
                            </td>
                            </tr>";
                        } 
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>