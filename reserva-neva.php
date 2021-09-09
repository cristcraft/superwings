<?php
    require_once("connection/connection.php");

    if((isset($_POST["MM_insert"]))&&($_POST["MM_insert"]=="formreg"))
    {
        $cedula= $_POST['ced'];
        $num_personas = $_POST['num_personas'];
        $fecha = $_POST['fecha'];
        $hora = $_POST['hora'];

        $validar = "SELECT * FROM usuarios WHERE cedula='$cedula'";
        $queryi=mysqli_query($mysqli,$validar);
        $fila1=mysqli_fetch_assoc($queryi);

        if($fila1)
        {
            $insertsql="UPDATE usuarios SET num_personas = '$num_personas', fecha='$fecha', hora='$hora' where cedula='$cedula'";
            mysqli_query($mysqli,$insertsql) or die(mysqli_error());
            echo '<script>alert("Tu reservación ha sido exitosa te esperamos")
            window.location.href = "./index.html"
            </script>';
        }
    }


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas</title>
    <link rel="stylesheet" href="estilos/reserva.css">
</head>
<body>
    <div class="login-box">
        <img src="imagenes/logo_pequeno.png" alt="" class="avatar pulse">
        <form method="POST" name="formreg" autocomplete="off">
            <label for="usuario">Reservar</label>
            <input type="number" name="ced"  placeholder="Ingrese Documento Identidad" required>
            <label for="persona">Eliga cuantas personas van a ir</label>
            <input type="number" name="num_personas"  placeholder="Escribe un numero" required>
            <input type="date" name="fecha"  placeholder="Ingrese Su Fecha" required>
            <input type="time" name="hora"  placeholder="Ingrese Su hora" required>
            <input type="submit" name="validar" value="Realizar reserva">
            <input type="hidden" name="MM_insert" value="formreg"/>
            <br>
            <a href="index.html">◄ Volver al inicio</a>
        </form>
    </div>
</body>
</html>