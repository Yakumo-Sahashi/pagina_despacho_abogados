<?php

    use PHPMailer\PHPMailer\PHPMailer;

    require '../app/lib/PHPMailer/src/Exception.php';
    require '../app/lib/PHPMailer/src/PHPMailer.php';
    require '../app/lib/PHPMailer/src/SMTP.php';
    

    

    try{
        $mail = new PHPMailer(true);
        /* $mail->SMTPDebug = SMTP::DEBUG_SERVER; */
        $mail->isSMTP();
        $mail->Host = 'piteyasoc.com.mx';
        $mail->SMTPAuth = true;
        $mail->Username = "contacto@piteyasoc.com.mx";
        $mail->Password = '4RyvZ!RWCdAL';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = '465';

        $mail->setFrom('contacto@piteyasoc.com.mx',"CONTACTO CLIENTES");
        $mail->addAddress('contacto@piteyasoc.com.mx', 'REGISTRO CLIENTE');

        $mail->isHTML(true);
        $mail->Subject = 'Informacon de contacto "cliente"';
        $mail->Body = '
            <h1>Informacion del cliente</h1>
            <hr>
            <p><b>Nombre: </b> ' . $_POST['nombre'] .'</p>
            <p><b>Correo electronico: </b> ' . $_POST['correo'] .'</p>
            <p><b>Numero telefonico: </b> ' . $_POST['telefono'] . '</p>
            <hr>
            <h4><b>Mensaje: </b></h4>
            <p><b>' . $_POST['mensaje'] .'</b></p>
        ';
        $mail->send();

        echo "2";

    }catch(Exception $e){
        echo "1 " . $e;
    }



?>