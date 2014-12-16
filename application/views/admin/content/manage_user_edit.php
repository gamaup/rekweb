<div class='row'>
	<div class='col-2'>
        <div class='panel'>
            <div class='panel-head'>
                <h4>User Form</h4>
                <div class='panel-action'>
                </div>
            </div>
            <?php foreach ($data_user as $u) { ?>
            <?= form_open(base_url()."admin/user_management/edit/".$u->username)?>
            <div class='panel-body'>
                <div class='input-row inline'>
                    <h5>Full Name :</h5>
                    <input type='text' name='display_name' <?= form_error('display_name'); ?> value='<?= $u->display_name ?>'/>
                    <p class="helper">Nama Lengkapmu</p>
                </div>
                <div class='input-row inline'>
                    <h5>Role :</h5>
                    <input type='text' value='<?= $this->user_model->get_role_by_id($u->role) ?>' disabled />
                    <p class="helper">Kamu tidak memiliki hak untuk mengganti ini</p>
                </div>
                <div class='input-row inline'>
                    <h5>Username :</h5>
                    <input type='text' name='username' <?= form_error('username'); ?> value='<?= $u->username ?>'/>
                    <p class="helper">Username yang digunakan untuk login</p>
                </div>
                <div class='input-row inline'>
                    <h5>New Password :</h5>
                    <input type='password' name='password1' <?= form_error('password1'); ?>/>
                    <p class="helper">Password baru (kosongi jika tidak ingin mengganti)</p>
                </div>
                <div class='input-row inline'>
                    <h5>Retype New Password :</h5>
                    <input type='password' name='password2' <?= form_error('password2'); ?>/>
                    <p class="helper">Ulangi password baru</p>
                </div>
                
                <div class='input-row submit'>
                    <button onclick='history.go(-1)' class='button'>Cancel</button>
                    <input type='submit' value='Submit' class='button button-blue'/>
                </div>
                <?= form_close()?>
                <?php } ?>
            </div>
        </div>
    </div>