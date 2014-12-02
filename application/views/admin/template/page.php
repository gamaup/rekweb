<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('admin/template/head'); ?>
</head>
<body>
    <div id='wrapper'>
        <?php $this->load->view('admin/template/topnav'); ?>
        <?php $this->load->view('admin/template/sidebar'); ?>
        <main>
            <?php $this->load->view('admin/template/header'); ?>
            <?php
            if (isset($content)) {
                $this->load->view($content);
            }
            ?>
        </main>
    </div>
</body>
</html>