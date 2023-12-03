<?php
  session_start();

  if(isset($_SESSION["email"])) header("Location: index.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN ADMIN || PIANINANO</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
</head>
<style>
    body,
.signin {
  background-image: url('./gambar/9697ee97-3c00-4aa8-9683-746229630851.jpg');
  background-size: cover;
  font-family: 'Montserrat', sans-serif;
  color: white;
  font-size: 14px;
  letter-spacing: 1px;
}
.dp{
    margin-top: 85px;
}

.login {
  height: 480px;
  width: 305px;
  margin: auto;
  padding: 60px 60px;
  background: url('./gambar/wallpaperflare.com_wallpaper\ 4.jpg');   
  background-size: cover;
  box-shadow: 0px 30px 60px -5px #000;
  border-radius: 25px;
}

form {
  padding-top: 80px;
}

.active {
  border-bottom: 2px solid #BA55FF;
}

.nonactive {
  color: rgba(255, 255, 255, 0.2);
}

h2 {
  padding-left: 12px;
  font-size: 22px;
  text-transform: uppercase;
  padding-bottom: 5px;
  letter-spacing: 2px;
  display: inline-block;
  font-weight: 100;
}

h2:first-child {
  padding-left: 0px;
}

span {
  text-transform: uppercase;
  font-size: 12px; 
  display: inline-block;
  position: relative;
  top: -65px;
  transition: all 0.5s ease-in-out;
  color: #000;
}

.text {
  border: none;
  width: 89%;
  padding: 10px 20px;
  display: block;
  height: 15px;
  border-radius: 20px;
  background: rgba(255, 255, 255, 0.8);
  border: 2px solid rgba(255, 255, 255, 0);
  overflow: hidden;
  margin-top: 15px;
  transition: all 0.5s ease-in-out;
}

.text:focus {
  outline: 0;
  border: 2px solid rgba(255, 255, 255, 0.5);
  border-radius: 20px;
  background: rgba(0, 0, 0, 0);
}

.text:focus + span {
  opacity: 0.6;
}

input[type="text"],
input[type="password"] {
  font-family: 'Montserrat', sans-serif;
  color: #fff;
}



input {
  display: inline-block;
  padding-top: 20px;
  font-size: 14px;
}

h2,
span,
.custom-checkbox {
  margin-left: 20px;
}

.custom-checkbox {
  background-color: rgba(255, 255, 255, 0.1);
  padding: 8px;
  border-radius: 2px;
  display: inline-block;
  position: relative;
  top: 6px;
}

.custom-checkbox:checked {
  background-color: rgba(17, 97, 237, 1);
}

.custom-checkbox:checked:after {
  content: '\2714';
  font-size: 10px;
  position: absolute;
  top: 1px;
  left: 4px;
  color: #fff;
}

.custom-checkbox:focus {
  outline: none;
}

label {
  display: inline-block;
  padding-top: 10px;
  padding-left: 5px;
}

.signin {
  background-color: #1161ed;
  color: #FFF;
  width: 100%;
  padding: 10px 20px;
  display: block;
  height: 39px;
  border-radius: 20px;
  margin-top: 30px;
  transition: all 0.5s ease-in-out;
  border: none;
  text-transform: uppercase;
}

.signin:hover {
  background: #BA55FF;
  box-shadow: 0px 4px 35px -5px #BA55FF;
  cursor: pointer;
}

.signin:focus {
  outline: none;
}

hr {
  border: 1px solid;
  top: 50px;
  position: relative;
}

a {
  text-align: center;
  top:20px;
  display: block;
  position: relative;
  text-decoration: none;
  color: #0496C7;
}
p {
  text-align: center;
  display: block;
  top: 70px;
  position: relative;
  text-decoration: none;
  color: rgba(255, 255, 255, 0.5);
}
</style>
<body>
    <div class="dp">
<div class="login">
  <h2 class="active"> Log In </h2>

  <form action="./login.php" method="post">
   
    

    <input type="text" class="text" name="email" required>
     <span>Masukan Email</span>

    <br>
    
    <br>

    <input type="password" class="text" name="password" required>
    <span>password</span>
    <br>
    <button type="submit" class="signin">
      Login
    </button>


    <hr>
    <p> Hanya Admin Yang Bisa Akses</p>
  </form>

</div>
</div>
</body>
</html>