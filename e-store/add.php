<?php require("connection.php");
if (isset($_GET['id']) == true) {
  $i= $_GET['id'];
  $q= $_GET['quantity'];
  session_start();
  if (isset($_SESSION['name']) == true) {
    $n= $_SESSION['name'];
    $sn= $con->query("SELECT * FROM sign_up WHERE name LIKE '$n'");
      if ($sn1 = $sn-> fetch_assoc()){
        $ui= $sn1['id'];
  $o= $con->query("SELECT * FROM user_order WHERE product_id='$i' AND user_id='$ui'");
  while ($y= $o-> fetch_assoc()) {
    if ($y['product_id'] == $i){
      $con->query("UPDATE products SET stock=stock-'$q' WHERE id='$i'");
     $q+= $y['quantity'];
     $con->query("UPDATE user_order SET quantity='$q' WHERE product_id='$i' AND user_id='$ui'");
   }}
   $z= $con-> affected_rows;
   if ($z == 0) {
     $con->query("INSERT INTO user_order VALUES(NULL, '$ui', '$i', '$q', 'NULL');");
     $con->query("UPDATE products, user_order SET products.stock=products.stock-'$q', user_order.quantity='$q' WHERE products.id='$i' AND user_order.product_id='$i' AND user_order.user_id='$ui'");
   }}
}};
 ?>
