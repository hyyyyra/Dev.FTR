<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Configura tu correo electrónico de destino
    $to = "fabiantrappf9@gmail.com";

    // Asunto del correo electrónico
    $subject = "Mensaje de contacto desde tu sitio web";

    // Construye el cuerpo del correo electrónico
    $body = "Nombre: $name\n";
    $body .= "Correo electrónico: $email\n";
    $body .= "Mensaje:\n$message";

    // Cabeceras del correo electrónico
    $headers = "From: $name <$email>";

    // Intenta enviar el correo electrónico
    if (mail($to, $subject, $body, $headers)) {
        // El correo electrónico se envió correctamente
        echo json_encode(array("status" => "success", "message" => "¡Gracias! Tu mensaje ha sido enviado."));
    } else {
        // Error al enviar el correo electrónico
        echo json_encode(array("status" => "error", "message" => "Ha ocurrido un error al enviar el mensaje. Por favor, inténtalo de nuevo."));
    }
} else {
    // Si no es una solicitud POST, devuelve un error
    echo json_encode(array("status" => "error", "message" => "Acceso no válido."));
}
?>
