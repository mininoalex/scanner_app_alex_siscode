<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($check_cart_numbers) > 0){
      $message[] = 'Producto ya agregado al carrito!';
   }else{
      mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
      $message[] = 'Producto agregado al carrito!';
   }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>


   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="icon" href="3.ico" type="image/x-icon">

   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   <style>
      .btn:hover,
.option-btn:hover,
.delete-btn:hover{
   background-color: #E2AC1E;
}
   </style>
   
<?php include 'header.php'; ?>

<div class="back">
<section class="home">

   <div class="content">
      <h3>Hamburguesas que hacen historia, a un click de tu mesa.</h3>
      <p>prueba toda nuestra seleccion de hamburguesas, todo a un simple click para lllevarlo a tu mesa</p>
      <a href="about.php" class="white-btn">Descubrir mas</a>
   </div>

</section>
</div>
<section class="products">

   <h1 class="title">Ultimos productos</h1>

   <div class="box-container">

      <?php  
         $select_products = mysqli_query($conn, "SELECT * FROM `products` LIMIT 6") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
     <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
      <div class="name"><?php echo $fetch_products['name']; ?></div>
      <div class="price">$<?php echo $fetch_products['price']; ?>/-</div>
      <input type="number" min="1" name="product_quantity" value="1" class="qty">
      <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
      <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
      <input type="submit" value="Añadir al carrito" name="add_to_cart" class="btn">
     </form>
      <?php
         }
      }else{
         echo '<p class="empty">no products added yet!</p>';
      }
      ?>
   </div>

   <div class="load-more" style="margin-top: 2rem; text-align:center">
      <a href="shop.php" class="option-btn">Cargar mas</a>
   </div>

</section>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="img/events.webp" alt="">
      </div>

      <div class="content">
         <h3>Sobre nosotros</h3>
         <p>Desde 2015, nos apasiona crear las hamburguesas más jugosas y deliciosas de la ciudad. Seleccionamos ingredientes premium, preparamos cada hamburguesa artesanalmente y horneamos nuestro pan diariamente para garantizar una experiencia gastronómica inolvidable.</p>
         <a href="about.php" class="btn">Leer mas</a>
      </div>

   </div>

</section>

<section class="home-contact">

   <div class="content">
      <h3>¿Tienes alguna pregunta?</h3>
      <p>estaremos en contacto con usted en la brevedad, puede dejarnos un comentario, duda o algo que nos quieras decir, sientete libre de comunicarte usando el boton de abajo</p>
      <a href="contact.php" class="white-btn">CONTACTA CON NOSOTROS</a>
   </div>

</section>





<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>