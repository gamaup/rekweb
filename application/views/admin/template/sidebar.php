<aside>
            <div class='profil'>
                <div class='foto' style='background-image:url(<?=base_url()?>assets/images/pp.jpg);'>
                </div>
                <div class='info'>
                    <h4><?= $this->session->userdata('logged_in')['display_name'] ?></h4>
                    <h5><?= $this->session->userdata('logged_in')['role'] ?></h5>
                </div>
                <div class='opsi'>
                    <div class='button-group'>
                        <i class="fa fa-cog dropdown-toggle"></i>
                        <ul class='dropdown-menu right-pos'>
                            <li class='head'>Profile Option</li>
                            <li><a href='#'>Profile</a></li>
                            <li><a href='#'>Settings</a></li>
                            <li class='sparator'></li>
                            <li><a href='<?= base_url() ?>login/logout'>Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class='nav outer'>
                <li class='second <?= $pos_parent == 'datamaster' ? "active" : ""; ?>'><a><i class="fa fa-tachometer"></i>Datamaster<i class='fa arrow'></i></a>
                    <ul class='nav-second'>
                        <li <?= isset($pos_child) && $pos_parent == 'datamaster' && $pos_child == 'list_makanan' ? "class='active'" : ""; ?>><a href='<?= base_url() ?>admin/datamaster'>List Makanan</a></li>
                        <li <?= isset($pos_child) && $pos_parent == 'datamaster' && $pos_child == 'tambah_makanan' ? "class='active'" : ""; ?>><a href='<?= base_url() ?>admin/datamaster/add'>Tambah Makanan</a></li>
                        <?php if($this->session->userdata('logged_in')['role'] == 'superadmin' || $this->session->userdata('logged_in')['role'] == 'editor') { ?>
                        <li <?= isset($pos_child) && $pos_parent == 'datamaster' && $pos_child == 'manage_kategori' ? "class='active'" : ""; ?>><a href='<?= base_url() ?>admin/datamaster/kategori'>Manage Kategori</a></li>
                        <?php } ?>
                    </ul>
                </li>
                <?php if($this->session->userdata('logged_in')['role'] == 'superadmin') { ?>
                <li class='second <?= $pos_parent == 'user_management' ? "active" : ""; ?>'><a><i class="fa fa-users"></i>User Management<i class='fa arrow'></i></a>
                    <ul class='nav-second'>
                        <li <?= isset($pos_child) && $pos_parent == 'user_management' && $pos_child == 'list_user' ? "class='active'" : ""; ?>><a href='<?= base_url() ?>admin/user_management'>User List</a></li>
                        <li <?= isset($pos_child) && $pos_parent == 'user_management' && $pos_child == 'add_user' ? "class='active'" : ""; ?>><a href='<?= base_url() ?>admin/user_management/add'>Tambah User</a></li>
                    </ul>
                </li>
                <?php } ?>
            </ul>
        </aside>