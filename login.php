<?php
 

    $usuario = $_POST["username"]; // Variable + metodo + name del input
    $contraseña = $_POST["password"]; // mismo para password

    $ckuser = "admin";
    $ckpass = "1234";

    if ($usuario == $ckuser && $contraseña == $ckpass) {
        header("Location: https://www.potrerodigital.org/");
        exit;
    }   else {
        echo "<body style='background-color:#292931; color:white; font-family:sans-serif; text-align:center; margin-top:100px;'>";
        echo "<h2>⏳ Verificando credenciales...</h2>";
        echo "<p>Usuario o contraseña incorrectos.<br>Serás redirigido en 2 segundos.</p>";
        echo "</body>";
        header("refresh:2; url=error.html");
        exit;
}


?>