<html>
<head>
	<title>Cook-Off</title>
  <?php include 'link.php'; ?>
</head>

<body>

<div id="wrapper">

      <script>
    $(document).ready(function(){
      $(".login").fadeOut(0);
        $("span").click(function(){
          $(".login").fadeIn(200);
        });
          $("#container").click(function(){
            $(".login").fadeOut(100);
          });
      });
  </script>


  <div class="login">
    <div class="u"></div>
    <table>
      <tr>
        <td>USERNAME :</td>
      </tr>
      <tr>
        <td><input type="text"></td>
      </tr>
      <tr>
        <td>PASSWORD :</td>
      </tr>
      <tr>
        <td><input type="text"></td>
      </tr>
      <tr>
        <td><input type="button" value="LOGIN"></td>
        <td style="position:relative;left:-112px;top:1px">OR</td>
        <td><input type="button" value="SIGN UP"></td>
      </tr>
    </table>
  </div>

	<?php include 'navigasi.php'; ?>

  <div id="container">

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

          <a href="assets/foto/g2.jpg" id="content" class="thumbnail" data-categories="city" title="City Photo 1 Caption">
            <img src="assets/foto/g2.jpg" alt="City 1">
          </a>

          <a href="assets/foto/g3.jpg" class="thumbnail" data-categories="city" title="City Photo 2 Caption">
            <img src="assets/foto/g3.jpg" alt="City 2">
          </a>

          <a href="assets/foto/g4.jpg" class="thumbnail" data-categories="city" title="City Photo 3 Caption">
            <img src="assets/foto/g4.jpg" alt="City 3">
          </a>

          <a href="assets/foto/g5.jpg" class="thumbnail" data-categories="city" title="City Photo 4 Caption">
            <img src="assets/foto/g5.jpg" alt="City 4">
          </a>

          <a href="assets/foto/g12.jpg" class="thumbnail" data-categories="city" title="City Photo 5 Caption">
            <img src="assets/foto/g12.jpg" alt="City 5">
          </a>

          <a href="assets/foto/g6.jpg" class="thumbnail" data-categories="city" title="City Photo 6 Caption">
            <img src="assets/foto/g6.jpg" alt="City 6">
          </a>

          <a href="assets/foto/g7.jpg" class="thumbnail" data-categories="city" title="City Photo 7 Caption">
            <img src="assets/foto/g7.jpg" alt="City 7">
          </a>

          <a href="assets/foto/g8.jpg" class="thumbnail" data-categories="city" title="City Photo 8 Caption">
            <img src="assets/foto/g8.jpg" alt="City 8">
          </a>

          <a href="assets/foto/g9.jpg" class="thumbnail" data-categories="city" title="City Photo 9 Caption">
            <img src="assets/foto/g9.jpg" alt="City 9">
          </a>

          <a href="assets/foto/g10.jpg" class="thumbnail" data-categories="city" title="City Photo 10 Caption">
            <img src="assets/foto/g10.jpg" alt="City 10">
          </a>

          <a href="assets/foto/g11.jpg" class="thumbnail" data-categories="city" title="City Photo 11 Caption">
            <img src="assets/foto/g11.jpg" alt="City 11">
          </a>

          <a href="assets/foto/g12.jpg" class="thumbnail" data-categories="lake" title="Lake Photo 1 Caption">
            <img src="assets/foto/g12.jpg" alt="Lake 1">
          </a>

          <a href="assets/foto/g13.jpg" class="thumbnail" data-categories="lake" title="Lake Photo 2 Caption">
            <img src="assets/foto/g13.jpg" alt="Lake 2">
          </a>

          <a href="assets/foto/g14.jpg" class="thumbnail" data-categories="lake" title="Lake Photo 3 Caption">
            <img src="assets/foto/g14.jpg" alt="Lake 3">
          </a>

          <a href="assets/foto/g15.jpg" class="thumbnail" data-categories="lake" title="Lake Photo 4 Caption">
            <img src="assets/foto/g15.jpg" alt="Lake 4">
          </a>

          <a href="assets/photos/lake-5.jpg" class="thumbnail" data-categories="lake" title="Lake Photo 5 Caption">
            <img src="assets/photos/lake-5.jpg" alt="Lake 5">
          </a>

          <a href="assets/photos/lake-6.jpg" class="thumbnail" data-categories="lake" title="Lake Photo 6 Caption">
            <img src="assets/photos/lake-6.jpg" alt="Lake 6">
          </a>

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

  </div><!-- end container -->

</div>

</body>
</html>