<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/add_products.css">
    <script type="text/javascript" src="js/add_prod.js"></script>
  </head>
  <body>
        <?php require_once("connection.php");
          require 'header.php';
          if (isset($_POST['name']) == true && $_POST['name']!=""
            && isset($_POST['unit_price']) == true && $_POST['unit_price']!=""
            && isset($_POST['sale']) == true
            && isset($_POST['type']) == true
            && isset($_FILES['img']['name']) == true && $_FILES['img']['name'] < 9*1000*1000 && $_FILES['img']['name']!=""
            && isset($_POST['stock']) == true && $_POST['stock']!="") {
            $name= $_POST['name'];
            $unit_price= $_POST['unit_price'];
            $sale= $_POST['sale'];
            $type= $_POST['type'];
            $img= $_FILES['img']['name'];
            $stock= $_POST['stock'];
            $result= $con->query("INSERT INTO products VALUES(NULL, '$name', '$unit_price', '$sale', '$type', 'img/$img', '$stock');");
            if($result==true){
            echo "insert sacess";
            move_uploaded_file($_FILES['img']['tmp_name'], 'img/'.$_FILES['img']['name']);
            } else {
              echo "insert failed";
            }
          } else
            echo "no added product";
         ?>
        <form class="signup_form" enctype="multipart/form-data" action="add_products.php" id="sign_in" method="post">
          <img src="img/logo.png" width="250" alt="">
          <h2>add product</h2>
          <input class="login_text" type="text" placeholder="name" name="name" value="">
          <input class="login_text" type="text" placeholder="unit price" name="unit_price" value="">
          <input class="login_text" type="text" placeholder="unit price in sale (optional)" name="sale" value="">
          <input class="login_text" type="text" placeholder="type (optional)" name="type" value="">
          <input class="login_text" type="file" placeholder="product image" name="img" value="">
          <input class="login_text" type="text" placeholder="stock" name="stock" value="">
          <input class="sign_in" type="submit" value="add">
          <input class="sign_in" type="button" onclick="cancel()" value="cancel"><br><br><hr><br>
          Forgot your password? <a href="javascript:">Reset it now</a><br>
          Don't have an Account? <a href="signup.php">Create Account</a>
        </form>
        <?php require_once 'footer.php'; ?>
  </body>
</html>
