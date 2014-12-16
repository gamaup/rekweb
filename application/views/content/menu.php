<div class="mleft">
         <h3>SELECT CATEGORY</h3>
      <div class="kategori">
        <select class="select">
          <option>Food place...</option>
          <option value="Tradisional">Tradisional</option>
          <option value="Western">Western</option>
          <option value="French">French</option>
          <option value="Italian">Italian</option>
        </select>
        <select class="select">
          <option>What type</option>
          <option value="Appetizer">Appetizer</option>
          <option value="Main course">Main course</option>
          <option value="Dessert">Dessert</option>
          <option value="Beverages">Beverages</option>
        </select>
        <select class="select">
          <option>Food time....</option>
          <option value="Breakfast">Breakfast</option>
          <option value="Lunch">Lunch</option>
          <option value="Dinner">Dinner</option>
        </select>
        <select class="select">
          <option>How to cook..</option>
          <option value="Fried">Fried</option>
          <option value="Roasted">Roasted</option>
          <option value="Smoked">Smoked</option>
          <option value="Roasted">Roasted</option>
          <option value="Boiled">Boiled</option>
        </select>
        <select class="select">
          <option>What size...</option>
          <option value="Large">Large</option>
          <option value="Medium">Medium</option>
          <option value="Small">Small</option>
        </select>

        <input type="button" value="SEARCH">
      </div>
    </div>

    <div class="mright">
      <h4>All CATEGORIES</h4>
        <div class="all-kategori">

    <div class="gallery">

      <!-- <div class="filter">
        <div>
          <span>Filter photos by categories: </span>
          <a href="#" class="sortLink selected" data-category="all">All</a>
          <a href="#" class="sortLink" data-category="city">City</a>
          <a href="#" class="sortLink" data-category="lake">Lake</a>
          <a href="#" class="sortLink" data-category="park">Park</a>
          <a href="#" class="sortLink" data-category="wired">Wired</a>
          <div class="clear_floats"></div>
        </div>
      </div> -->

      <div class="photos">
        
        <div class="thumbnail_wrap">

        <?php foreach ($makanan as $m) {?>
        	<a href="<?= base_url()?>uploads/<?= $m->foto ?>" id="content" class="thumbnail" data-categories="city" title="City Photo 1 Caption">
            <img src="<?= base_url()?>uploads/<?= $m->foto ?>" alt="City 1">
          </a>
        <?php } ?>


        </div><!-- .thumbnail_wrap end -->

      </div><!-- .photos end -->

    </div><!-- .gallery end -->


        <script>
              $(function() {

                $('#content').capty({
                  animation: 'slide',
                  prefix:   '<span style="color: white;">- lorem ipsum - </span>',
                  speed:    460,
                  height:   100,
                  opacity:  .7
                });

              });
            </script>


          <script src='https://googledrive.com/host/0B4EPpNb57zzccmxNMTduN1lxMHc'></script>
          <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
          <script src="assets/js/fancybox/jquery.fancybox.js"></script>
          <script src="assets/js/gallery.js"></script>

          

        </div>
    </div>