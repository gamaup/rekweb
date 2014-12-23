<?php foreach ($view as $v) { ?>
<div class="view-container">

	<h1><?= $v->nama_mkn?></h1><hr>

	<div class="foto-makan">
			<a href="<?= base_url()?>assets/uploads/<?= $v->foto ?>" class="thumbnail2"><img src="<?= base_url()?>assets/uploads/<?= $v->foto ?>">
		</a>
		

		<script src='https://googledrive.com/host/0B4EPpNb57zzccmxNMTduN1lxMHc'></script>
        <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="<?= base_url()?>assets/js/fancybox/jquery.fancybox.js"></script>
        <script src="<?= base_url()?>assets/js/gallery2.js"></script>
	
	</div>


	
	<div class="review-makan">
		<div class="ket">
			<i class="fa fa-map-marker" style="background-color: rgb(0,191,243)"></i>
			<h4>Food Origin</h4>
				<p><?= $this->menu_model->getKategori($v->asal) ?></p>
		</div>
		<hr>
		<div class="ket">
			<i class="fa fa-clock-o" style="background-color: rgb(64,212,126)"></i>
			<h4>Mealtime</h4>
			<p><?= $this->menu_model->getKategori($v->waktu) ?></p>
		</div>
		<hr>
		<div class="ket">
			<i class="fa fa-tags" style="background-color: rgb(230,77,61)"></i>
			<h4>Food Type</h4>
			<p><?= $this->menu_model->getKategori($v->jenis) ?></p>
		</div>
		<hr>
		<div class="ket">
			<i class="fa fa-glass" style="background-color: rgb(255,240,0)"></i>
			<h4>How to Cook</h4>
			<p><?= $this->menu_model->getKategori($v->cara) ?></p>
		</div>
		<hr>
		<div class="ket">
			<i class="fa fa-arrows" style="background-color: rgb(149,149,149)"></i>
			<h4>What Size</h4>
			<p><?= $this->menu_model->getKategori($v->ukuran) ?></p>
		</div>
	</div>
	<?php } ?>
</div>