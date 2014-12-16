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
<div id="header">

      <h5>Cook-Off</h5>	
 
        <ul class="menu">
          <li><a href="<?= base_url()?>">HOME</a></li>
          <li><a href="<?= base_url("menu")?>">MENU-LIST</a></li>
          <li><a href="#event">ABOUT US</a></li>
          <li><a href="#contact">CONTACT US</a></li>
        </ul>

      <div class="social">
      <i class="fa fa-instagram"></i>
      <i class="fa fa-twitter"></i>
      <i class="fa fa-facebook"></i>
      </div><span><i class="fa fa-user"></i></span>
	</div>