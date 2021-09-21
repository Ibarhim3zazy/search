<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/login.css">
    <?php require_once("connection.php");
      require 'header.php';
      if (isset($_POST['name']) == true) {
        $n= $_POST['name'];
        $e= $_POST['email'];
        $p= $_POST['pass'];

        $result= $con->query("INSERT INTO sign_up VALUES(NULL, '$n', '$e', '$p');");
        if ($result==true){
          echo "saved";
          header("location: login.php");
          }
          else{
            echo "failed";
        }
      }
     ?>
  </head>
  <body>

    <form class="signup_form" method="post">
      <h2>New User</h2>
      <input class="login_text" type="text" placeholder="Name" name="name" value="">
      <input class="login_text" type="email" placeholder="Email" name="email" value="">
      <input class="login_text" type="password" placeholder="*************" name="pass" value="">

      <input class="sign_in" type="submit" name="" value="Save">
    </form>
    <?php require 'footer.php'; ?>
  </body>
</html>
