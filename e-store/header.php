<link rel="stylesheet" href="css/header.css">
<script type="text/javascript" src="js/header.js"></script>
<!-- ــــــــــــــــــــــــــــ -->
    <?php
      session_start();
      require_once 'login.php';
      require_once 'signup.php';
     ?>
    <header>
      <div class="bar1">
        <a href="index.php"><img src="img/logo.png" alt="estore" id="logo"></a>
        <div class="search">
          <?php
          if (isset($_GET['search']) == true)
            $s=$_GET['search'];
            else {
              $s= '';
            };
          echo '
          <form action="search.php" method="get">
          <select class="" name="">
            <option value="">All</option>
              <option value="">Nike</option>
          </select>
          <input type="text" id="search" name="search" value="">
          <a href="?search='.$s.'"><input type="submit" id="search_btn" name="" value="Search"></a>
          </form>';
           ?>
        </div>
        <a href="cart.php" style="color:#000;"><div class="account">
          <img src="img/cart.ico"id="cart" alt="cart"> <span>Cart</span>
        </div></a>
        <div class="account">
          <?php
          if (isset($_SESSION['name']) == true) {
            $n= $_SESSION['name'];
            if(isset($_POST['logout']) == true){
              unset($_SESSION);
              session_destroy();
            }
          $r= $con->query("SELECT * FROM sign_up WHERE name LIKE '$n'");
            if ($x = $r-> fetch_assoc())
            echo '<img src="'.$x['pic-path'].'" onload="display_n()" id="profile-pic" alt="profile-pic">
            <div class="sign">
            <a href="add_products.php">add products</a>
            <form action="index.php" method="post">
              <input type="submit" name="logout" value="log out">
            </form>
            </div>';
            else
              echo '<img src="img/account-pic.ico" id="profile-pic" alt="profile-pic">';
            } else
              echo '<img src="img/account-pic.ico" id="profile-pic" alt="profile-pic">';
          ?>
          <span>Account</span>
          <img src="img/up.png" id="up" alt="arrow">
          <div class="sign" id="none">
            <a href="javascript:" onclick="sign_in()">Sign in</a>
            <a href="javascript:" onclick="sign_up()">Sign up</a>
          </div>
        </div>

      </div>
      <div class="bar2">
        <a href="home.php"></a>
        <a href="galary.php"></a>
        <a href="products.php"></a>
        <a href="contact-us.php"></a>
        <a href="about.php"></a>
      </div>
    </header>
    <div class="free_size_for_header"></div>
