<div class="mleft">
         <h3>SELECT CATEGORY</h3>
      <div class="kategori">
        <form action="<?= base_url()?>menu/cari" method="Get">
  
        <input type="text" name="q">
          
        <select name="place" class="select">
          <option value="">Food place...</option>
          <?php foreach ($this->menu_model->getKategories(1) as $t) {?>
          <option value="<?= $t->id_kat ?>"><?= $t->nama_kat ?></option>
          <?php } ?>
        </select>
        <select name="type"class="select">
          <option value="">What type....</option>
          <?php foreach ($this->menu_model->getKategories(3) as $t) {?>
          <option value="<?= $t->id_kat ?>"><?= $t->nama_kat ?></option>
          <?php } ?>
        </select>
        <select name="time" class="select">
          <option value="">Food time....</option>
          <?php foreach ($this->menu_model->getKategories(2) as $t) {?>
          <option value="<?= $t->id_kat ?>"><?= $t->nama_kat ?></option>
          <?php } ?>
        </select>
        <select name="how" class="select">
          <option value="">How to cook..</option>
          <?php foreach ($this->menu_model->getKategories(4) as $t) {?>
          <option value="<?= $t->id_kat ?>"><?= $t->nama_kat ?></option>
          <?php } ?>
        </select>
        <select name="size" class="select">
          <option value="">What size...</option>
          <?php foreach ($this->menu_model->getKategories(5) as $t) {?>
          <option value="<?= $t->id_kat ?>"><?= $t->nama_kat ?></option>
          <?php } ?>
        </select>

        <input type="submit" value="SEARCH">
        </form>
      </div>
    </div>

    <div class="mright">
      <h4><?= $content_type ?></h4>
        <div class="all-kategori">

    <div class="gallery">

      <div class="photos">
        
        <div class="thumbnail_wrap">
          <?php if ($makanan != null) { ?>
        <?php foreach ($makanan as $m) {?>
        	 <a href="<?= base_url()?>menu/view/<?= $m->id_mkn ?>" class="thumbnail">
              <div class="nama-makan-container">
              <img src="<?= base_url()?>assets/uploads/<?= $m->foto ?>" alt="City 1">
              <div class="nama-makan">
              <div class="nama"><?= $m->nama_mkn?></div></div>
              </div>
            </a>
        <?php } ?>
        <?php } else {
            echo "no match found";
        }?>

        </div><!-- .thumbnail_wrap end -->

      </div><!-- .photos end -->

    </div><!-- .gallery end -->

          <script src='https://googledrive.com/host/0B4EPpNb57zzccmxNMTduN1lxMHc'></script>
          <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
          <script src="<?= base_url()?>assets/js/fancybox/jquery.fancybox.js"></script>
          <script src="<?= base_url()?>assets/js/gallery.js"></script>

        </div>
    </div>