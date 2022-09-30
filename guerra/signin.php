<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
input[type=text]:focus, input[type=name]:focus {
  background-color: #ddd;
  outline: none;
}
input[type=text]:focus, input[type=firstname]:focus {
  background-color: #ddd;
  outline: none;
}
input[type=date]:focus, input[type=date]:focus {
  background-color: #ddd;
  outline: none;
}
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
button:hover {
  opacity:1;
}
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}
.container {
  padding: 16px;
}
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>
<form action="signin.php" method="post" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="email "><b>Email</b></label><abbr title="Ce champ est obligatoire">*</abbr>
    <input type="text" placeholder="Enter Email" name="email" required>
    <label for="pseudo"><b>pseudo </b></label><abbr title="Ce champ est obligatoire">*</abbr><br>
    <input type="text" placeholder="Enter pseudo" name="pseudo" required>
    <br>
    <label for="psw"><b>Password </b></label><abbr title="Ce champ est obligatoire">*</abbr>
    <input type="password" placeholder=" Enter Password" name="psw" required>
    <label for="psw-repeat"><b>Repeat Password </b></label><abbr title="Ce champ est obligatoire">*</abbr>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    <div class="clearfix">
      <a href="login.php"><button type="button" class="cancelbtn">Cancel</button></a>
      <button type="submit" class="signupbtn">sign in</button>
    </div>
  </div>
</form>
<?php
  try{
    $bdd = new PDO('mysql:host=localhost;dbname=guerra;charset=utf8' ,'phpmyadmin', 'JaViDyMoi28');
  }catch(Exception $e){
    die('Erreur'.$e->getMessage());
  }
  if($_SERVER["REQUEST_METHOD"] == "POST"){
      $pseudo=htmlspecialchars($_POST['pseudo']);
      $email=htmlspecialchars($_POST['email']);
      $mdp=htmlspecialchars($_POST['psw']);
      $password_repeat=htmlspecialchars($_POST['psw-repeat']);
      $email = strtolower($email);

      $check=$bdd->prepare('SELECT pseudo,email,password FROM players WHERE email=?');
      $check->execute(array($email));
      $data=$check->fetch();
      $row=$check->rowcount();
      if($row==0){
        if(strlen($pseudo)<=100){
          if(strlen($email)<=100){
            if(filter_var($email,FILTER_VALIDATE_EMAIL)){
              if($mdp==$password_repeat){
                $mdp=hash('sha512',$mdp);
                $ip=$_SERVER['REMOTE_ADDR'];
                $insert=$bdd->prepare('INSERT INTO players (email,pseudo,password,ip,token) VALUES (?,?,?,?,?)');
                $insert->execute(array($email,$pseudo,$mdp,$ip,bin2hex(openssl_random_pseudo_bytes(64))));
                header('location:login.php');
              }else{header('location:signin.php?reg_err=password');}
            }else{header('location:signin.php?reg_err=email');}
          }else{header('location:signin.php?reg_err=email_length');}
        }else{header('location:signin.php?reg_err=pseudo_length');}
      }else{header('location: signin.php?reg_err=already');}
    }
    if(isset($_GET['reg_err'])){
      $arf=htmlspecialchars($_GET['reg_err']);
      switch($arf){
        case "already":
          echo "vous avez déjà un comtpe ";
        case "pseudo_length":
          echo "votre pseudo est trop long ";
        case "email_length":
          echo "votre email est trop long ";
        case "email":
          echo "votre email est invalide ";
        case "password":
          echo "les mots de passe ne correspondent pas cheh ";
    }
  }
?>
</body>
</html>