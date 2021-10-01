<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/cart.css">
    <script type="text/javascript" src="js/home.js"></script>
  </head>
  <body>
    <?php   require_once("connection.php");
            require 'header.php';
            if (isset($_SESSION['name']) == true) {
              $n= $_SESSION['name'];
              $sn= $con->query("SELECT * FROM sign_up WHERE name LIKE '$n'");
                if ($s1 = $sn-> fetch_assoc()){
                  $ui= $s1['id'];
                }}
     if (isset($_POST['id'])== true) {
      $i= $_POST['id'];
      $con->query("UPDATE products, user_order SET products.stock=products.stock+user_order.quantity WHERE products.id='$i'");
      $con->query("UPDATE user_order SET quantity='0' WHERE user_id='$ui' AND product_id='$i'");
    }


    ?>
    <section>
      <h2>Cart (<span><?php $con->query("SELECT * FROM user_order WHERE user_id='$ui' AND quantity>'0'");  echo $con-> affected_rows; ?></span> item)</h2>
      <table class="content">
        <tr>
          <th>ITEM</th>
          <th>Name</th>
          <th>QUANTITY</th>
          <th>UNIT PRICE</th>
          <th>SUBTOTAL</th>
          <th></th>
        </tr>
      <?php
      $s=0;
          $r= $con->query("SELECT * FROM user_order WHERE user_id='$ui' AND quantity>'0'");
          $r2= $con->query("SELECT * FROM products,user_order WHERE user_order.user_id='$ui' AND user_order.quantity>'0' AND user_order.product_id=products.id");
          while ($x = $r-> fetch_assoc()){
            $x2 = $r2-> fetch_assoc();
            if ($x2['unit_price_sale'] > 0)
              $p = $x2['unit_price_sale'];
            else
                $p = $x2['unit-price'];
          echo '
            <tr>
              <td><img src="'.$x2['pic-path'].'" alt="item added"></td>
              <td>'.$x2['name'].'</td>
              <td>'.$x['quantity'].'</td>
              <td><span>EGP </span><span>'.$p.'</span></td>
              <td><span>EGP </span><span>'.$x['quantity']*$p.'</span></td>
              <td>
                <form class="delete_c" method="post">
                 <input class="login_text" type="hidden" name="id" value="'.$x['product_id'].'">
                 <input type="submit" class="delete" value="Delete">
                </form>
              </td>
            </tr>';
            $s+=($x['quantity']*$p);};
      ?>
    </table>
    </section>
    <div class="total">
      Total:	EGP <span><?php echo $s; ?></span>
    </div>
    <div class="container">
      <a href="login.php"><input class="end" type="button" name="" value="CONTINUE TO CHECKOUT"></a>
      <a href="index.php"><input class="end" type="button" name="" value="CONTINUE SHOPPING"></a>
    </div>
  </body>
</html>
