<div class="fotorama" data-width="1366" data-ratio="1366/420" data-max-width="100%" data-nav="thumbs" data-autoplay="true" data-loop="true" data-fit="cover" data-thumbwidth="144" data-thumbheight="144" data-thumbmargin="12">
  <?php foreach ($makanan as $m) {?>
  <img src="<?= base_url()?>assets/uploads/<?= $m->foto ?>">
  <?php } ?>
</div>
