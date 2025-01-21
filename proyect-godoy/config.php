<?php

$conn = mysqli_connect('localhost','root','','shop_db') or die('connection failed');



function tipoUsuario() {
    return $_SESSION['user_type'] ?? null;
}



function estaLogueado() {
    return isset($_SESSION['name']);
}
?>