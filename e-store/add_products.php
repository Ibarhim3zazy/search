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
          if (isset($_POST['name_prod']) == true && $_POST['name_prod']!=""
            && isset($_POST['unit_price']) == true && $_POST['unit_price']!=""
            && isset($_POST['sale']) == true
            && isset($_POST['type']) == true
            && isset($_FILES['img']['name']) == true && $_FILES['img']['name'] < 9*1000*1000 && $_FILES['img']['name']!=""
            && isset($_POST['stock']) == true && $_POST['stock']!="") {
            $name= $_POST['name_prod'];
            $unit_price= $_POST['unit_price'];
            $sale= $_POST['sale'];
            $type= $_POST['type'];
            $img= $_FILES['img']['name'];
            $stock= $_POST['stock'];
            $result= $con->query("INSERT INTO products VALUES(NULL, '$name', '$unit_price', '$sale', '$type', 'img/$img', '$stock');");
            if($result==true){
            echo "insert success";
            move_uploaded_file($_FILES['img']['tmp_name'], 'img/'.$_FILES['img']['name']);
            } else {
              echo "insert failed";
            }
          } else
            echo "no product added";
         ?>
        <form class="add_form" enctype="multipart/form-data" action="add_products.php" id="add_products" method="post">
          <img src="img/logo.png" width="250" alt="">
          <h2>add product</h2>
          <input class="add_text" type="text" placeholder="name" name="name_prod">
          <input class="add_text" type="text" placeholder="unit price" name="unit_price">
          <input class="add_text" type="text" placeholder="unit price in sale (optional)" name="sale">
          <input class="add_text" type="text" placeholder="type (optional)" name="type">
          <input class="add_text" type="file" placeholder="product image" name="img">
          <input class="add_text" type="text" placeholder="stock" name="stock">
          <input class="add_products" type="submit" value="add">
          <input class="add_products" type="button" onclick="cancel()" value="cancel"><br><br><hr><br>
          Forgot your password? <a href="javascript:">Reset it now</a><br>
          Don't have an Account? <a href="signup.php">Create Account</a>
        </form>
        <?php require_once 'footer.php'; ?>
  </body>
</html>
