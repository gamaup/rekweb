<?= $this->session->flashdata("pesan") ?>
<div class='row'>
    <div class='col-4'>
        <div class='panel'>
            <div class='panel-head'>
                <h5>User List</h5>
            </div>
            <div class='panel-body'>
                <table class='bordered table-blue datatable'>
                    <thead>
                        <tr>
                            <th>User ID</th>
                            <th>Display Name</th>
                            <th>Username</th>
                            <th>Role</th>
                            <th>Last Login</th>
                            <th class='nosort'>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($data_user as $u) {
                            ?>
                            <tr>
                                <td><?= $u->id_user ?></td>
                                <td><?= $u->display_name ?></td>
                                <td><?= $u->username ?></td>
                                <td><?= $u->role ?></td>
                                <td><?= date("d-M-Y, H:i:s", strtotime($u->last_login)) ?></td>
                                <?php echo"
                                <td class='nowrap'>
                                    ".anchor(base_url()."admin/user_management/delete/".$u->username, "<i class='fa fa-trash-o'></i>", "class='button button-icon button-red button-confirm'")."
                                </td>" ?>
                            </tr>
                        <?php }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>