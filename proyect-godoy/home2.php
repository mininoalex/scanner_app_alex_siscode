<?php

include 'config.php';
session_start();

// No es necesaria la verificación de sesión para acceder a esta página.
// Si existía algún código que redirigía al login, se ha eliminado.

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

    $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

    if (mysqli_num_rows($select_users) > 0) {
        $row = mysqli_fetch_assoc($select_users);

        if ($row['user_type'] == 'user') {
            $_SESSION['user_name'] = $row['name'];
            $_SESSION['user_email'] = $row['email'];
            $_SESSION['user_id'] = $row['id'];
            header('location:home.php');
            exit;
        }
    } else {
        $message[] = 'Mail o contraseña incorrectos!';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home2 - Visita</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="icon" href="3.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">

    <style>
        /* Estilo para el fondo difuminado cuando el formulario aparece */
        .overlay-active {
            filter: blur(5px);
        }

        /* Estilo del formulario modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .modal-content {
            background: white;
            padding: 2rem;
            width: 100%;
            max-width: 400px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 24px;
            color: #333;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div id="main-content" class="main-content">
    <?php include 'header.php'; ?>

    <section class="home">
        <div class="content">
            <h3>Lecturas que te encontrarán en casa.</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, quod? Reiciendis ut porro iste totam.</p>
            <a href="about.php" class="white-btn">Descubrir más</a>
            <a href="contact.php" class="white-btn">Contacta con nosotros</a>
        </div>
    </section>

    <!-- Aquí se agregan los demás elementos de `home2.php` como productos, etc. -->
</div>

<!-- Modal del formulario de inicio de sesión -->
<div id="loginModal" class="modal">
    <div class="modal-content form-container">
        <span class="close-btn" onclick="closeModal()">&times;</span>
        <form action="home2.php" method="post">
            <h3>Inicia sesión</h3>
            <input type="email" name="email" placeholder="Ingresa tu mail" required class="box">
            <input type="password" name="password" placeholder="Ingresa tu contraseña" required class="box">
            <input type="submit" name="submit" value="Inicia sesión ahora" class="btn">
            <p>¿No tienes una cuenta? <a href="register.php">Regístrate</a></p>
        </form>
    </div>
</div>

<script>
    // Muestra el formulario modal al hacer clic en cualquier elemento
    document.getElementById('main-content').addEventListener('click', function (e) {
        e.preventDefault();
        document.getElementById('loginModal').style.display = 'flex';
        document.getElementById('main-content').classList.add('overlay-active');
    });

    // Cierra el formulario modal
    function closeModal() {
        document.getElementById('loginModal').style.display = 'none';
        document.getElementById('main-content').classList.remove('overlay-active');
    }
</script>

</body>
</html>
