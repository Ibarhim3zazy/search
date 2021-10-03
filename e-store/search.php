<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/home.css">
    <script type="text/javascript" src="js/home.js"></script>
  </head>
  <body>

    <?php   require_once("connection.php");
      require 'header.php';
     ?>
       <section id="choose-collection">
         <span class="caption">Result</span>
       <?php
       if(isset($_GET['search']) == true)
       {
          $s = $_GET['search'];
          $r= $con->query("SELECT * FROM products WHERE name LIKE '%$s%'");
          while ($x = $r-> fetch_assoc()){
            if ($x['unit_price_sale'] > 0)
             $u= $x['unit_price_sale'];
              else {
                $u= $x['unit-price'];
              };
          echo '
          <div class="products">
            <img src="'.$x['pic-path'].'"id="img9" alt="shoes">
            <span id="n9">'.$x['name'].'</span>
            <div class="price"><span id="p9">'.$u.'</span>$</div>
            <input type="button" name="" onclick="add(9)" value="Buy">
          </div>
          ';};}
?>
     </section>
     <br><hr><br>
     <div class="sign-in">
       <span>See personalized recommendations</span>
       <input type="button" name="" value="Sign in">
       <span>New customer? <a href="signup.php">Start here</a>.</span>
     </div>
     <br><hr>
     <?php require 'footer.php'; ?>
  </body>
</html>
