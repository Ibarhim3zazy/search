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
      require 'slider.php';
     ?>
      <section id="top-selling">
       <span class="caption">Top selling items</span>
       <?php
       $r= $con->query("SELECT * FROM products WHERE top_selling");
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
        <form method="post">
         <input class="login_text" type="hidden" name="id" value="'.$x['id'].'">
         <input type="submit" value="Buy"><span>Quantity:</span><input type="number" name="quantity" value="1">
        </form>
       </div>';};
       ?>
     </section><a href="#" target="_parent"></a>
     <section id="deal-of-day">
       <span class="caption">Deal Of The Day | Deals You Don't Want To Miss</span>
       <?php
       $r= $con->query("SELECT * FROM products WHERE unit_price_sale");
       while ($x = $r-> fetch_assoc()){
       echo '
       <div class="products">
         <img src="'.$x['pic-path'].'"id="img9" alt="shoes">
         <span id="n9">'.$x['name'].'</span>
         <div class="price"><span id="p9">'.$x['unit_price_sale'].'</span>$</div>
        <div class="price-sale"><span>'.$x['unit-price'].'</span>$</div>
        <form method="post">
         <input class="login_text" type="hidden" name="id" value="'.$x['id'].'">
         <input type="submit" value="Buy"><span>Quantity:</span><input type="number" name="quantity" value="1">
        </form>
        </form>
       </div>';};
       ?>
     </section>
     <section id="choose-collection">
       <span class="caption">Choose Your Collection</span>
     <?php
     $r= $con->query("SELECT * FROM products WHERE stock");
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
       <form method="post">
        <input class="login_text" type="hidden" name="id" value="'.$x['id'].'">
        <input type="submit" value="Buy"><span>Quantity:</span><input type="number" name="quantity" value="1">
       </form>
     </div>';};
     if (isset($_POST['id'])) {
       $i= $_POST['id'];
       $q= $_POST['quantity'];
       $o= $con->query("SELECT * FROM user_order WHERE product_id LIKE '$i'");
       while ($y= $o-> fetch_assoc()) {
         if ($y['product_id'] == $i){
          $q+= $y['quantity'];
          $con->query("UPDATE products, user_order SET products.add_prod='1', user_order.quantity='$q' WHERE products.id='$i' AND user_order.product_id='$i'");
        }}
        $z= $con-> affected_rows;
        if ($z == 0) {
          $con->query("INSERT INTO user_order VALUES(NULL, '1', '$i', '$q', 'NULL');");
          $q+= $y['quantity'];
          $con->query("UPDATE products, user_order SET products.add_prod='1', user_order.quantity='$q' WHERE products.id='$i' AND user_order.product_id='$i'");
        }
     };
     ?>
   </section>
     <br><hr><br>
     <div class="sign-in">
       <span>See personalized recommendations</span>
       <a href="login.php"><input type="button" name="" value="Sign in"></a>
       <span>New customer? <a href="signup.php" id="login">Start here</a>.</span>
     </div>
     <br><hr>
     <?php require 'footer.php'; ?>
  </body>
</html>
