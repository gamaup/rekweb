<script>
    $(document).ready(function(){
      $(".login").hide();
        $(".user").click(function(){
          $(".login").toggle();
        });
          $("#header").click(function(){
            $(".login").fadeOut(200);
          });
          $("#container").click(function(){
            $(".login").fadeOut(200);
          });

      });
  </script>

<script>

    // $(document).ready(function(){
    //   $('.login').fadeOut();
    //      $('user').click(function(){
    //       $('.login').fadeIn(100);
    //       });
          
    // });

    
    // $('.user').click(function() {
        // $('.user').next('.login').toggle();
        // event.stopPropagation();
        // $('.user').not(this).next('.login').hide();
    // });

  </script>


  <div class="login">
    <div class="u"></div>

    <table>
      <tr>
        <td>USERNAME :</td>
      </tr>
      <tr>
        <td><input type="text" name="username"></td>
      </tr>
      <tr>
        <td>PASSWORD :</td>
      </tr>
      <tr>
        <td><input type="text" name="password"></td>
      </tr>
      <tr>
        <td><input type="button" value="LOGIN"></td>
        <td style="position:absolute;top:135px;right:100px">OR</td>
        <td><a href="<?= base_url("sign") ?>"><input type="button" value="SIGN UP"></td></a>
      </tr>
       
    </table>

  </div>
<div id="header">

      <h5>Cook-Off</h5>	
 
        <ul class="menu">
          <li><a href="<?= base_url("home")?>">HOME</a></li>
          <li><a href="<?= base_url("menu")?>">MENU-LIST</a></li>
          <li><a href="#event">ABOUT US</a></li>
          <li><a href="#contact">CONTACT US</a></li>
        </ul>

      <div class="social">
      <i class="fa fa-instagram"></i>
      <i class="fa fa-twitter"></i>
      <i class="fa fa-facebook"></i>
      </div>
	</div>