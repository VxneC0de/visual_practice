<?php
// AQUI ES PARA QUE APAREZCA CADA PRODUCTO DENTRO DE LOS DIV DE ORDER_GIRL


// Conexión a la base de datos
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "tu_base_de_datos";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT nombre, precio, imagen FROM productos";
$result = $conn->query($sql);
?>

<section class="section_container order_container" id="empanadas">
    <p class="section_description">EMPANADAS</p>
    <div class="order_grid">
        <?php
        if ($result->num_rows > 0) {
            // Generar cada producto
            while ($row = $result->fetch_assoc()) {
                echo '<div class="order_card">';
                echo '<img src="./assets/' . $row["imagen"] . '" alt="order">';
                echo '<h4>' . $row["nombre"] . '</h4>';
                echo '<h2>' . $row["precio"] . 'bs</h2>';
                echo '<button class="btn_hero_2">Agregar al carrito</button>';
                echo '</div>';
            }
        } else {
            echo "No hay productos disponibles.";
        }
        $conn->close();
        ?>
    </div>
</section>
