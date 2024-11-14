<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hearwell1";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener los datos del formulario
if (isset($_POST['name'], $_POST['email'], $_POST['telefono'], $_POST['producto'])) {
    $nombre = $_POST['name'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $producto = $_POST['producto']; // Obtener el producto seleccionado

    // Consulta para insertar los datos en la tabla "contactos"
    $sql = "INSERT INTO contactos (nombre, email, telefono, producto_id)
            VALUES ('$nombre', '$email', '$telefono', '$producto')";

    if ($conn->query($sql) === TRUE) {
        echo "Datos guardados correctamente";
    } else {
        echo "Error al guardar los datos: " . $conn->error;
    }
} 

$conn->close();
?>
