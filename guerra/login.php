<!DOCTYPE html>
<html>
<head>
  <style>
    * {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: rgb(159,159,159);
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: rgb(159,159,159);
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  color:black;
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}

div#moteur {
    position:absolute;
    left:0px;
    top:47px;
    bottom:0px;
    width:25%;
    background-color:#e9e9e9;
    text-align: center;
}

div#mur {
    position:absolute;
    left:25%;
    top:47px;
    bottom:0px;
    width:75%;
    background-color:rgb(255,255,255);
    text-align: center;
}

@import url('https://rsms.me/inter/inter-ui.css');
::selection {
  background: #2D2F36;
}
::-webkit-selection {
  background: #2D2F36;
}
::-moz-selection {
  background: #2D2F36;
}
body {
  background: white;
  font-family: 'Inter UI', sans-serif;
  margin: 0;
  padding: 0px;
}
.page {
  background: #e2e2e5;
  display: flex;
  flex-direction: column;
  height: 100%;
  position: absolute;
  place-content: center;
  width: 100% ;
}
@media (max-width: 767px) {
  .page {
    height: auto;
    margin-bottom: 0px;
    padding-bottom: 0px;
  }
}
.container {
  display: flex;
  height: 320px;
  margin: 0 auto;
  width: 640px;
}
@media (max-width: 767px) {
  .container {
    flex-direction: column;
    height: 630px;
    width: 320px;
  }
}
.left {
  background: white;
  height: 100%;
  top: 0px;
  position: relative;
  width: 50%;
}
@media (max-width: 767px) {
  .left {
    height: 100%;
    left: 0px;
    width: 100% ;
    max-height: 270px;
  }
}
.login {
  font-size: 50px;
  font-weight: 900;
  margin: 50px 40px 40px;
}
.eula {
  color: rgb(0,0,0);
  font-size: 20px;
  line-height: 1.5;
  margin: 40px;
}
.right {
  background: #474A59;
  box-shadow: 0px 0px 40px 16px rgba(0,0,0,0.22);
  color: #F1F1F2;
  position: relative;
  width: 50%;
}
@media (max-width: 767px) {
  .right {
    flex-shrink: 0;
    height: 100%;
    width: 100%;
    max-height: 350px;
  }
}
svg {
  position: absolute;
  width: 320px;
}
path {
  fill: none;
  stroke: url(#linearGradient);;
  stroke-width: 4;
  stroke-dasharray: 240 1386;
}
.form {
  margin: 40px;
  position: absolute;
}
label {
  color:  #c2c2c5;
  display: block;
  font-size: 14px;
  height: 16px;
  margin-top: 20px;
  margin-bottom: 5px;
}
input {
  background: transparent;
  border: 0;
  font-size: 20px;
  height: 30px;
  line-height: 30px;
  outline: none !important;
  width: 100%;
}
input::-moz-focus-inner { 
  border: 0; 
}
#submit {
  color: #707075;
  margin-top: 0px;
  transition: color 300ms;
}
#submit:focus {
  color: #aa5959;
}
#submit:active {
  color: #d0d0d2;
}

#signin{
    color:violet;
    margin-top: 10px;
    margin-left: 0px;
    transition: color 300ms;
}

#signin:focus{
    color:#f2f2f2;
}

#signin:active{
    color:#d0d0d2;
}


.login-form {
    width: 340px;
    margin: 50px auto;
}
.login-form form {
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
}

.pubg {
  margin-left: 15%;
  resize: both;
}

.pubd{
  margin-right: 15%;
  resize: both;
}

.colsize{
  width: 100%;
  padding: 100% 0 0 0;
  background: #bdc57e;
}

  </style>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css">
    <title>LOG TOI</title>
</head>
<body>
<div class="page">
  <div class="container">
    <div class="left">
      <div class="login">Login</div>
      <div class="eula">Bienvenue Sur BloBleut.co</div>
    </div>
    <div class="right">
      <svg viewBox="0 0 320 300">
        <defs>
          <linearGradient
                          inkscape:collect="always"
                          id="linearGradient"
                          x1="13"
                          y1="193.49992"
                          x2="307"
                          y2="193.49992"
                          gradientUnits="userSpaceOnUse">
            <stop
                  style="stop-color:#ff00ff;"
                  offset="0"
                  id="stop876" />
            <stop
                  style="stop-color:#ff0000;"
                  offset="1"
                  id="stop878" />
          </linearGradient>
        </defs>
        <path d="m 40,120.00016 239.99984,-3.2e-4 c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35 h -239.99984 c 0,-0.0205 -25,4.01348 -25,38.5 0,34.48652 25,38.5 25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25 h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.57143" />
      </svg>
      <div class="form">
          <form action="main.php" method="post">
          <label for="pseudo"><b>pseudo </b></label>
          <input type="text" placeholder="Enter pseudo" name="pseudo" required>
          <label for="psw"><b>Password </b></label>
          <input type="password" placeholder=" Enter Password" name="psw" required>
          <button type="submit" class="submit">log in</button><br>
        <a href="signin.php"><button type="button" class="button">sign in</button></a>
        </form>
      </div>
    </div>
  </div>
</div>
<?php
  

  $bdd = new PDO('mysql:host=localhost;dbname=guerra;charset=utf8' ,'phpmyadmin', 'JaViDyMoi28');
  $pseudo =htmlspecialchars($_POST['pseudo']); 
  $check=$bdd->prepare("SELECT pseudo,mdp FROM profil where pseudo ='$pseudo' ");
  $check->execute();
  $ver=$check->fetch();
  if($ver==true){
    $mdp=hash('sha512',$_POST['psw']);
    if($mdp===$ver['mdp']){
      session_start();
      $_SESSION['pseudo']=$pseudo;
      header('location:main.php');
    }else{header('location:login.php?login_err=Password');}
  }
?>
</body>