
<!DOCTYPE html>
<head>
    <title></title>
</head>
<body>
    <?php
    $destinatario = "sebarodriguez@outlook.com.ar";
    $asunto = "Informacion de servicios";

    $nombre = $_POST['nombre']; 
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];


    echo 'Nombre del Usuario: '.$nombre."<br/>";
    echo "Apellido del Usuario: ".$apellido."<br/>";
    echo "Correo del Usuario: ".$email."<br/>";
    echo "Telefono del Usuario: ".$telefono."<br/>";
    echo "Mensaje del Usuario: ".$mensaje."<br/>";

    mail($destinatario,$nombre,$apellido,$email,$telefono);
?>
</body>
</html>  
