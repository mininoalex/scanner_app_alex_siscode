<?php

include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
   $user_type = $_POST['user_type'];

   $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select_users) > 0){
      $message[] = 'El usuario ya existe!';
   }else{
      if($pass != $cpass){
         $message[] = 'Confirmar contraseña no coincide!';
      }else{
         mysqli_query($conn, "INSERT INTO `users`(name, email, password, user_type) VALUES('$name', '$email', '$cpass', '$user_type')") or die('query failed');
         $message[] = 'Registrado exitosamente!';
         header('location:login.php');
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Registro</title>
   <link rel="icon" href="3.ico" type="image/x-icon">


   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

      <link rel="stylesheet" href="css/style.css">

</head>
<body>
<style>
   .fondo-login{
   background-image: url(images/fondo-login.jpg);
   background-size: cover;
   background-position: center;
   display: flex;
   align-items: center;
   justify-content: center;
}

.logo-login{
   height: 150px;
   width: 150px;
   
}

.form-container form{
   padding:4rem;
   width: 50rem;
   border-radius: 50px;
   box-shadow: var(--box-shadow);
   border:var(--border);
   background-color: var(--white);
   text-align: center;
}

.white-btn,
.btn{
   background-color: #FFD048;
}

.btn,
.option-btn,
.delete-btn,
.white-btn{
   display: inline-block;
   margin-top: 1rem;
   padding:1.5rem 3rem;
   cursor: pointer;
   color:black;
   font-size: 1.5rem;
   border-radius: 1.5rem;
   text-transform: capitalize;
}

.btn:hover,
.option-btn:hover,
.delete-btn:hover{
   background-color:#E2AC1E;
   
}

.white-btn:hover{
   background-color: var(--white);
   color:var(--black);
}




.form-container form p{
   padding-top: 1.5rem;
   font-size: 2rem;
   color:var(--black);
}

.form-container form p a{
   color:#FFD048;
}
</style>


<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>
   
<div class="form-container fondo-login">

   <form action="" method="post">
   <img  class="logo-login" src="images/logo.webp" alt="logo" height="150px" width="150px">
      <h3>Resgistrate ahora</h3>
      <input type="text" name="name" placeholder="Nombre" required class="box">
      <input type="email" name="email" placeholder="Email" required class="box">
      <input type="password" name="password" placeholder="Contraseña" required class="box">
      <input type="password" name="cpassword" placeholder="Repite tu contraseña" required class="box">
      <select name="user_type" class="box">
         <option value="user">Usuario</option>
         <option value="admin">Administrador</option>
      </select>
      <input type="submit" name="submit" value="register now" class="btn">
      <p>¿Ya tenes una cuenta? <a href="login.php">INICIAR SESION</a></p>
   </form>

</div>

</body>
</html>