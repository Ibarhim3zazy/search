
<?php
  $con= new mysqli("localhost", "root", "", "e_store");
  if ($con ->connect_errno) {
    die("connection error");
    // echo "connection error";
    // exit();
  };
 ?>
