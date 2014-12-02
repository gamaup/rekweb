<!DOCTYPE html>
<html>
<head>
	<title>Bonita - Login</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/fa/css/font-awesome.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/jquery-ui.css"/>
    <link rel='stylesheet' type='text/css' href='<?= base_url() ?>assets/css/imadmin.css'/>
</head>
<body style='background-color: #313940;'>
	<section id='login'>
        <div class='wrapper'>
            <h1><span>DIREKTORI</span>MAKANAN</h1>
            <div class='form'>
                <div class='form-head'>
                    <h4>LOGIN</h4>
                </div>
                <?= form_open(base_url()."login", array("role" => "form"))?>
                <?= validation_errors(); ?>
                <?= $this->session->flashdata('pesan_logout'); ?>
                <input type='text' name='username' placeholder='Username' autofocus/>
                <input type='password' name='password' placeholder='Password' />
                <input type='submit' value='Login'/>
                <?= form_close() ?>
            </div>
            <p>&copy; 2014 Inncomedia</p>
        </div>
    </section>
</body>
</html>