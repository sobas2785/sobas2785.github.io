<?php
function obtenerProductos($conn) {
    $sql = "SELECT id_producto, nombre_producto, categoria FROM productos";
    $result = $conn->query($sql);

    $productos = array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $productos[] = array(
                'id_producto' => $row["id_producto"],
                'nombre_producto' => $row["nombre_producto"],
                'categoria' => $row["categoria"]
            );
        }
    }
    return $productos;
}
?>