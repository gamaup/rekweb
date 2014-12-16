<div class='row'>
	<div class='col-2'>
        <div class='panel'>
            <div class='panel-head'>
                <h4>User Form</h4>
                <div class='panel-action'>
                </div>
            </div>
            <?= form_open(base_url()."admin/user_management/add")?>
            <div class='panel-body'>
                <div class='input-row inline'>
                    <h5>Full Name :</h5>
                    <input type='text' name='display_name' <?= form_error('display_name'); ?>/>
                </div>
                <div class='input-row inline'>
                    <h5>Username :</h5>
                    <input type='text' name='username' <?= form_error('username'); ?>/>
                </div>
                <div class='input-row inline'>
                    <h5>Password :</h5>
                    <input type='password' name='password1' <?= form_error('password1'); ?>/>
                </div>
                <div class='input-row inline'>
                    <h5>Re-type Password :</h5>
                    <input type='password' name='password2' <?= form_error('password2'); ?>/>
                </div>
                <div class='input-row inline'>
                    <h5>Role :</h5>
                    <select name='role'>
                        	<option value='editor'>editor</option>
                            <option value='author'>author</option>
                    </select>
                </div>
                
                <div class='input-row submit'>
                    <input type='reset' value='Reset' class='button button-white'/>
                    <input type='submit' value='Submit' class='button button-blue'/>
                </div>
                <?= form_close()?>
            </div>
        </div>
    </div>