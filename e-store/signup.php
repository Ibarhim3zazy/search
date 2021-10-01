    <link rel="stylesheet" href="css/login.css">
    <script src="js/signup.js"></script>
    <?php require_once("connection.php");
      if (isset($_POST['uname']) == true) {
        $un= $_POST['uname'];
        $ue= $_POST['uemail'];
        $up= $_POST['upass'];

        $result= $con->query("INSERT INTO sign_up VALUES(NULL, '$un', '$ue', '$up');");
        if ($result==true){
          echo "saved";
          header("location: login.php");
          }
          else{
            echo "failed";
        }
      }
     ?>
    <form class="signup_form" id="sign_up" method="post">
      <img src="img/close.png" alt="close" onclick="sign_hide()" id="close">
      <img src="img/logo.png" width="250" alt="">
      <h2>Welcome to E-store</h2>
      <input class="login_text" type="text" id="n" onkeyup="funn1()" placeholder="Name" name="uname" value="">
      <div id="nn"></div>
      <input class="login_text" type="email" placeholder="Email" name="uemail" value="">
      <input class="login_text" type="password" id="p" onkeyup="funn2()" placeholder="password" name="upass" value="">
      <div id="pp"></div><br>
      <input class="sign_in" type="submit" onClick="sign_hide()" value="Login"><br><span class="or">OR</span><br>
      <input class="sign_in" type="submit" name="google" value="Sign in with Google"><br><hr><br>
      Forgot your password? <a href="javascript:">Reset it now</a><br>
      Don't have an Account? <a href="signup.php">Create Account</a>
    </form>
