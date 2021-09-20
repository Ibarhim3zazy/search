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
       <section id="choose-collection">
         <span class="caption">Choose Your Collection</span>
       <?php
       $r= $con->query("SELECT * FROM products");
       while ($x = $r-> fetch_assoc()){
       echo '
       <div class="products">
         <img src="'.$x['pic-path'].'"id="img9" alt="shoes">
         <span id="n9">'.$x['name'].'</span>
         <div class="price"><span id="p9">'.$x['unit-price'].'</span>$</div>
         <a href="?id='.$x['id'].'"><input type="submit" value="Buy"></a>
       </div>'

       ;}?>
       <input class="login_text" type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
     </section>
     <br><hr><br>
     <div class="sign-in">
       <span>See personalized recommendations</span>
       <a href="login.php"><input type="button" name="" value="Sign in"></a>
       <span>New customer? <a href="signup.php">Start here</a>.</span>
     </div>
     <br><hr>
     <?php require 'footer.php'; ?>
  </body>
</html>
