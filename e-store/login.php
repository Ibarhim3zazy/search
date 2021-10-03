
    <link rel="stylesheet" href="css/login.css">
    <?php require_once("connection.php");
      if (isset($_POST['name']) == true) {
        $n= $_POST['name'];
        $p= $_POST['pass'];
        $result= $con->query("SELECT * FROM sign_up WHERE name='$n' AND pass= '$p' OR email= '$n' AND pass= '$p';");
        $num= $con-> affected_rows;
        if($num != 0){
          $_SESSION['name']= $n;
          $_SESSION['pass']= $p;
          header("location: index.php");
        }
      }
     ?>
     <div class="container_iu"></div>
    <form class="signup_form" id="sign_in" method="post">
      <img src="img/close.png" alt="close" onclick="sign_hide()" id="close">
      <img src="img/logo.png" width="250" alt="">
      <h2>Log in to E-store</h2>
      <input class="login_text" type="text" placeholder="Name OR Email" name="name" value="">
      <input class="login_text" type="text" placeholder="password" name="pass" value="">
      <input class="sign_in" type="submit" onclick="sign_hide()" value="Login"><br><span class="or">OR</span><br>
      <input class="sign_in" type="button" name="google" value="Sign in with Google"><br><hr><br>
      Forgot your password? <a href="javascript:">Reset it now</a><br>
      Don't have an Account? <a href="signup.php">Create Account</a>
    </form>
