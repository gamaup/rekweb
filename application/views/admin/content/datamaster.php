<?= $this->session->flashdata("pesan") ?>
<?php if ($this->session->userdata('logged_in')['role'] == 'editor') { ?>
<div class='row'>
    <div class='col-4'>
        <div class='panel'>
            <div class='panel-head'>
                <h5>Postingan Yang Butuh Persetujuan</h5>
            </div>
            <div class='panel-body'>
                <table class='bordered table-blue datatable'>
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th class='nosort'>Foto</th>
                            <th>Asal</th>
                            <th>Waktu</th>
                            <th>Jenis</th>
                            <th>Cara</th>
                            <th>Ukuran</th>
                            <th class='nosort'>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($datamaster as $d) {
                            if($d->status == '0') {
                                echo "<tr>
                                <td>".$d->nama_mkn."</td>
                                <td><a href='".base_url()."assets/uploads/".$d->foto."' target='_blank'>Click to View</a></td>
                                <td>".$this->admin->getKat($d->asal)[0]->nama_kat."</td>
                                <td>".$this->admin->getKat($d->waktu)[0]->nama_kat."</td>
                                <td>".$this->admin->getKat($d->jenis)[0]->nama_kat."</td>
                                <td>".$this->admin->getKat($d->cara)[0]->nama_kat."</td>
                                <td>".$this->admin->getKat($d->ukuran)[0]->nama_kat."</td>
                                <td class='nowrap'>
                                ".anchor(base_url()."menu/view/".$d->id_mkn, "<i class='fa fa-eye'></i>", "class='button button-icon button-blue' target='_blank'")." ".
                                anchor(base_url()."admin/datamaster/edit/".$d->id_mkn, "<i class='fa fa-edit'></i>", "class='button button-icon button-green'")." ".
                                anchor(base_url()."admin/datamaster/delete/".$d->id_mkn, "<i class='fa fa-trash-o'></i>", "class='button button-icon button-red button-confirm'")."
                                </td>
                                </tr>";
                            }
                        } 
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<?php if ($this->session->userdata('logged_in')['role'] == 'editor') { ?>
<div class='row'>
    <div class='col-4'>
        <div class='panel'>
            <div class='panel-head'>
                <h5>Postingan Yang Sudah Dipublish</h5>
            </div>
            <div class='panel-body'>
                <table class='bordered table-blue datatable'>
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th class='nosort'>Foto</th>
                            <th>Asal</th>
                            <th>Waktu</th>
                            <th>Jenis</th>
                            <th>Cara</th>
                            <th>Ukuran</th>
                            <th class='nosort'>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($datamaster as $d) {
                            if($d->status == '1') {
                                echo "<tr>
                                <td>".$d->nama_mkn."</td>
                                <td><a href='".base_url()."assets/uploads/".$d->foto."' target='_blank'>Click to View</a></td>
                                <td>".$this->admin->getKat($d->asal)[0]->nama_kat."</td>
                                <td>".$this->admin->getKat($d->waktu)[0]->nama_kat."</td>
                                <td>".$this->admin->getKat($d->jenis)[0]->nama_kat."</td>
                                <td>".$this->admin->getKat($d->cara)[0]->nama_kat."</td>
                                <td>".$this->admin->getKat($d->ukuran)[0]->nama_kat."</td>
                                <td class='nowrap'>
                                ".anchor(base_url()."menu/view/".$d->id_mkn, "<i class='fa fa-eye'></i>", "class='button button-icon button-blue' target='_blank'")." ".
                                anchor(base_url()."admin/datamaster/edit/".$d->id_mkn, "<i class='fa fa-edit'></i>", "class='button button-icon button-green'")." ".
                                anchor(base_url()."admin/datamaster/delete/".$d->id_mkn, "<i class='fa fa-trash-o'></i>", "class='button button-icon button-red button-confirm'")."
                                </td>
                                </tr>";
                            }
                        } 
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<?php if ($this->session->userdata('logged_in')['role'] != 'editor') { ?>
<div class='row'>
    <div class='col-4'>
        <div class='panel'>
            <div class='panel-head'>
                <h5>Data Master</h5>
            </div>
            <div class='panel-body'>
                <table class='bordered table-blue datatable'>
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th class='nosort'>Foto</th>
                            <th>Asal</th>
                            <th>Waktu</th>
                            <th>Jenis</th>
                            <th>Cara</th>
                            <th>Ukuran</th>
                            <th class='nosort'>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($datamaster as $d) {
                            if($this->session->userdata('logged_in')['id_user'] == $d->author || $this->session->userdata('logged_in')['role'] == 'superadmin') {
                                echo "<tr>
                                <td>".$d->nama_mkn."</td>
                                <td><a href='".base_url()."assets/uploads/".$d->foto."' target='_blank'>Click to View</a></td>
                                <td>".$this->admin->getKat($d->asal)[0]->nama_kat."</td>
                                <td>".$this->admin->getKat($d->waktu)[0]->nama_kat."</td>
                                <td>".$this->admin->getKat($d->jenis)[0]->nama_kat."</td>
                                <td>".$this->admin->getKat($d->cara)[0]->nama_kat."</td>
                                <td>".$this->admin->getKat($d->ukuran)[0]->nama_kat."</td>
                                <td class='nowrap'>
                                ".anchor(base_url()."menu/view/".$d->id_mkn, "<i class='fa fa-eye'></i>", "class='button button-icon button-blue' target='_blank'")." ".
                                anchor(base_url()."admin/datamaster/edit/".$d->id_mkn, "<i class='fa fa-edit'></i>", "class='button button-icon button-green'")." ".
                                anchor(base_url()."admin/datamaster/delete/".$d->id_mkn, "<i class='fa fa-trash-o'></i>", "class='button button-icon button-red button-confirm'")."
                                </td>
                                </tr>";
                            }
                        } 
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php } ?>