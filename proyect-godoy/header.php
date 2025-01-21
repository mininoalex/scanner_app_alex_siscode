<?php
require_once 'config.php';

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



   <div class="header-1">
      <div class="flex">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         
         <p> Nuevo <a href="login.php">Inicio de sesion</a> | <a href="register.php">Registro</a> </p>

      </div>
   </div>
 

   <div class="header-2">
      <div class="flex">
      <a href="home.php"><img  class="logo" src="images/logo.webp" alt="logo" height="70px" width="70px"></a>

            <nav class="navbar">
      <a href="home.php">Inicio</a>
      <a href="about.php">Nosotros</a>
      <a href="shop.php">Tienda</a>
      <a href="contact.php">Contacto</a>
      <a href="orders.php">Órdenes</a>
      <?php if (!isset($_SESSION['user_id'])): ?>
         <a href="home2.php?login=1">Iniciar sesión</a>
      <?php endif; ?>
</nav>

         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="search_page.php" class="fas fa-search"></a>
            <div id="user-btn" class="fas fa-user"></div>
            <?php
               $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
               $cart_rows_number = mysqli_num_rows($select_cart_number); 
            ?>
            <a href="cart.php"> <i class="fas fa-shopping-cart"></i> <span>(<?php echo $cart_rows_number; ?>)</span> </a>
         </div>

         
         <div class="user-box">
            <p>Nombre de usuario : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>Mail : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="logout.php" class="delete-btn">Cerrar sesion</a>
         </div>
      </div>
   </div>

</header>