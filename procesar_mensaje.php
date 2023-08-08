<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $destinatario = $_POST["destinatario"];
    $nombre = $_POST["nombre"];
    $mensaje = $_POST["mensaje"];

    // Aquí puedes realizar acciones con los datos, como enviar correos o guardar en una base de datos

    echo "Mensaje enviado correctamente. Gracias, $nombre, por tu mensaje a $destinatario.";
} else {
    echo "Acceso no válido.";
}
?>
