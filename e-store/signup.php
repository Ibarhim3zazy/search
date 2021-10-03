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
      }
     ?>
    <form class="signup_form" id="sign_up" method="post">
      <img src="img/close.png" alt="close" onclick="sign_hide()" id="close">
      <img src="img/logo.png" width="250" alt="">
      <h2>Welcome to E-store</h2>
      <input class="login_text" type="text" id="n" onkeyup="name_check()" placeholder="Name" name="uname" value="">
      <div class="hint" id="nhint">*have to be english caracter only <br>*have to be 3 caracters or more </div>
      <input class="login_text" type="email" placeholder="Email" id="e" onkeyup="mail_check()" name="uemail" value="">
      <div class="hint" id="ehint">*have to be yahoo or gmail only</div><br>
      <input class="login_text" type="password" id="p" onkeyup="pass_check()" placeholder="password" name="upass" value="">
      <div class="hint" id="phint">*have to be number in first no more than 10 numbers and then english caracter no more than 18 caracters<br>*password have to be more than 7</div><br>
      <input class="sign_in" type="submit" onClick="sign_hide()" value="sign up"><br><span class="or">OR</span><br>
      <input class="sign_in" type="submit" name="google" value="Sign up with Google"><br><hr><br>
      Forgot your password? <a href="javascript:">Reset it now</a><br>
      Don't have an Account? <a href="signup.php">Create Account</a>
    </form>
