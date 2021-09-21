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
        $p= $_POST['pass'];

        $result= $con->query("SELECT * FROM sign_up WHERE name='$n' OR email= '$n' AND pass= '$p';");
        $num= $con-> affected_rows;
        if($num == 0)
        echo "Login failed";
        else {
          header("location: index.php");
        }

      }
     ?>
  </head>
  <body>

    <form class="signup_form" method="post">
      <h2>LOGIN</h2>
      <input class="login_text" type="text" placeholder="Name" name="name" value="">
      <input class="login_text" type="text" placeholder="phone" name="pass" value="">
      <input class="sign_in" type="submit" name="" value="Login">
    </form>
    <?php require 'footer.php'; ?>
  </body>
</html>
