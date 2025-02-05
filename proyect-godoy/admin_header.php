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

<header class="header">

   <div class="flex">

      <a href="admin_page.php" class="logo">Administrador<span>Panel</span></a>

      <nav class="navbar">
         <a href="admin_page.php">Inicio</a>
         <a href="admin_products.php">Productos</a>
         <a href="admin_orders.php">Ordenes</a>
         <a href="admin_users.php">Usuarios</a>
         <a href="admin_contacts.php">Mensajes</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="account-box">
         <p>Nombre de usuario : <span><?php echo $_SESSION['admin_name']; ?></span></p>
         <p>Mail : <span><?php echo $_SESSION['admin_email']; ?></span></p>
         <a href="logout.php" class="delete-btn">logout</a>
         <div>Nuevo <a href="login.php">Inicio sesion</a> | <a href="register.php">Resgistro</a></div>
      </div>

   </div>

</header>