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
      require_once 'login.php';
      require_once 'signup.php';
     ?>
      <section id="top-selling">
       <span class="caption">Top selling items</span>
       <?php
       $r= $con->query("SELECT * FROM products WHERE top_selling");
       while ($x = $r-> fetch_assoc()){
         if ($x['stock']>'0') {
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
           <input class="login_text" type="hidden" id="'.$x['id'].'id" value="'.$x['id'].'">
           <input type="button" onClick="buy('.$x['id'].')" value="Buy"><span>Quantity:</span><input type="number" id="'.$x['id'].'q" value="1">
         </div>';};
       };
       ?>
     </section>
     <section id="deal-of-day">
       <span class="caption">Deal Of The Day | Deals You Don't Want To Miss</span>
       <?php
       $r1= $con->query("SELECT * FROM products WHERE unit_price_sale");
       while ($x1 = $r1-> fetch_assoc()){
       echo '
       <div class="products">
         <img src="'.$x1['pic-path'].'"id="img9" alt="shoes">
         <span id="n9">'.$x1['name'].'</span>
         <div class="price"><span id="p9">'.$x1['unit_price_sale'].'</span>$</div>
        <div class="price-sale"><span>'.$x1['unit-price'].'</span>$</div>
        <input class="login_text" type="hidden" id="'.$x1['id'].'id" value="'.$x1['id'].'">
        <input type="button" onClick="buy('.$x1['id'].')" value="Buy"><span>Quantity:</span><input type="number" id="'.$x1['id'].'q" value="1">
       </div>';};
       ?>
     </section>
     <section id="choose-collection">
       <span class="caption">Choose Your Collection</span>
     <?php
     $r2= $con->query("SELECT * FROM products WHERE stock");
     while ($x2 = $r2-> fetch_assoc()){
       if ($x2['unit_price_sale'] > 0)
        $u= $x2['unit_price_sale'];
         else {
           $u= $x2['unit-price'];
         };
     echo '
     <div class="products">
       <img src="'.$x2['pic-path'].'"id="img9" alt="shoes">
       <span id="n9">'.$x2['name'].'</span>
       <div class="price"><span id="p9">'.$u.'</span>$</div>
       <input class="login_text" type="hidden" id="'.$x2['id'].'id" value="'.$x2['id'].'">
       <input type="button" onClick="buy('.$x2['id'].')" value="Buy"><span>Quantity:</span><input type="number" id="'.$x2['id'].'q" value="1">
     </div>';};
     ?>
   </section>
     <br><hr><br>
     <div class="sign-in">
       <span>See personalized recommendations</span>
       <a href="login.php"><input type="button" name="" value="Sign in"></a>
       <span>New customer? <a href="signup.php" id="login">Start here</a>.</span>
     </div>
     <br><hr>
     <?php require_once 'footer.php'; ?>
     <div id="result">

     </div>
  </body>
</html>
