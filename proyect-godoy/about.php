<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Acerca de</title>

   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="icon" href="3.ico" type="image/x-icon">


   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>Sobre nosotros</h3>
   <p> <a href="home.php">Inicio</a> / Acerca de</p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="img/grid-small2.jpg" alt="">
      </div>

      <div class="content "id ="content">
         <h3>Porque elegirnos?</h3>
         <p>Descubre el auténtico sabor artesanal en nuestras hamburguesas gourmet. Ofrecemos una selección única de recetas originales, carne premium seleccionada diariamente y un servicio al cliente excepcional. Además, contamos con ingredientes frescos y opciones personalizables para satisfacer todos los gustos. Únete a nuestra comunidad de amantes de las buenas hamburguesas y descubre por qué somos la mejor opción para satisfacer tu paladar más exigente. ¡Cada bocado es una experiencia única!   </p>
         <a href="contact.php" class="btn">Contactanos</a>
         <!-- <button style="padding-left: 10px;" class="see-more-btn" id="see-more-btn">Ver más</button> -->
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Reseñas de clientes</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>"Pedí la hamburguesa especial con queso cheddar y bacon. La carne estaba perfectamente cocida y jugosa. El pan casero es increíble. La salsa especial es adictiva. Definitivamente regresaré para probar más opciones del menú."</p>
         <div class="stars">3
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Mark 4</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>"Excelente servicio de delivery. La hamburguesa llegó caliente y bien presentada. Los ingredientes son de primera calidad y se nota que la carne es fresca. Las papas fritas crujientes y bien sazonadas. Recomiendo totalmente."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Marìa L</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p> "Las mejores hamburguesas artesanales que he probado. El pan recién horneado hace la diferencia. La carne tiene un sabor espectacular y la cantidad es generosa. El servicio fue rápido y amable."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Jorge T</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>"Increíble relación calidad-precio. La hamburguesa doble carne con guacamole superó mis expectativas. Los vegetales frescos y crujientes complementan perfectamente. La entrega fue puntual y el empaque mantiene todo caliente."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Laura M</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>"Fantástica experiencia gastronómica. La hamburguesa BBQ con aros de cebolla es una obra maestra. La carne jugosa y el punto de cocción exacto. El personal muy atento y las instalaciones impecables."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>John travolta</h3>
      </div>
<!-- SOLUCIONAR PROBLEMA DE TAMAÑO DE CAJAS -->
      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>"Pedí una hamburguesa vegetariana y quedé encantado. La textura y el sabor son excepcionales. Los ingredientes son frescos y de calidad. El tiempo de entrega fue rápido. Volveré pronto."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Romina ceo</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">Nuestro equipo</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/author-1.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Gabriel García Márquez.</h3>
      </div>

      <div class="box">
         <img src="images/author-2.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/author-3.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/author-4.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/author-1.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/author-2.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>john deo</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->


<script src="js/script.js"></script>

</body>
</html>