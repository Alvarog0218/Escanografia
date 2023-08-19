<?php
if (isset($_POST['enviar'])) {
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$asunto = $_POST['asunto'];
	$mensaje = $_POST['mensaje'];

	// Formatear el correo electrónico
	$para = 'alvarog0218@gmail.com'; // Reemplazar con la dirección de correo electrónico del destinatario
	$titulo = 'Solicitud por pagina web';
	$contenido = "Nombre: $nombre\nCorreo: $correo\nAsunto: $asunto\nMensaje: $mensaje";

	// Enviar el correo electrónico
	if (mail($para, $titulo, $contenido)) {
		// El correo electrónico se ha enviado con éxito

		// Redirigir al usuario a una página de confirmación
		header('Location: confirmacion.php');
		exit;
	} else {
		// El correo electrónico no se ha podido enviar
		echo 'Lo siento, ha habido un error al enviar el correo electrónico.';
	}
}
?>
