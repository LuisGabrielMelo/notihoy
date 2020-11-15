<?php
$conexion = mysqli_connect("localhost", "root", "20202020", "mensaje");

if (isset($_POST['enviar'])) {
    
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    $sql = "INSERT INTO mensaje(nombre, apellido, email, mensaje) VALUES ('$nombre', '$apellido', '$email','$mensaje')";
    $query = mysqli_query($conexion, $sql);
    if ($query) {
        echo "
    <script>
        alert('se añadio correctamente');
        </script>";
    } else {

        echo "
    <script>
        alert('Error');
        </script>";
    }
}
?>