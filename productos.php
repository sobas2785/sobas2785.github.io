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

// Consulta para obtener los productos
$sql = "SELECT * FROM productos";
$result = $conn->query($sql);

// Crear el dropdown de productos
echo "<select name='producto'>";
echo "<option value=''>Selecciona un producto</option>";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<option value='" . $row["id_producto"] . "'>" . $row["nombre_producto"] . "</option>";
    }
}
echo "</select>";

$conn->close();
?>

