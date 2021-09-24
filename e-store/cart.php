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
    require 'header.php'; ?>
    <section>
      <h2>Cart (<span><?php $con->query("SELECT * FROM products WHERE add_prod ");  echo $con-> affected_rows; ?></span> item)</h2>
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
      $r= $con->query("SELECT * FROM products WHERE add_prod");
      while ($x = $r-> fetch_assoc()){
        if ($x['unit_price_sale'] > 0){
          $p = $x['unit_price_sale'];
        } else {
            $p = $x['unit-price'];
          };
          $z= $x['id'];
        $q = $con->query("SELECT * FROM user_order WHERE product_id LIKE '$z'");
        $c= $q-> fetch_assoc();
      echo '
        <tr>
          <td><img src="'.$x['pic-path'].'" alt="item added"></td>
          <td>'.$x['name'].'</td>
          <td>'.$c['quantity'].'</td>
          <td><span>EGP </span><span>'.$p.'</span></td>
          <td><span>EGP </span><span>'.$c['quantity']*$p.'</span></td>
          <td>
            <form class="delete_c" method="post">
             <input class="login_text" type="hidden" name="id" value="'.$x['id'].'">
             <input type="submit" class="delete" value="Delete">
            </form>
          </td>
        </tr>';
        $s+=($c['quantity']*$p);};
      if (isset($_POST['id'])) {
        $i= $_POST['id'];
        $result= $con->query("UPDATE products SET add_prod='0' WHERE id='$i'");
      }
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
