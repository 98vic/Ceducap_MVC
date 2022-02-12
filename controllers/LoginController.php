<?php 

namespace Controllers;

use MVC\Router;
use PHPMailer\PHPMailer\PHPMailer;

class LoginController{
    public static function index(Router $router){
        $mensaje = null;

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $respuestas = $_POST['index'];
            
            // Instancia de phpmailer
            $mail = new PHPMailer();
            
            // configurar smtp
            $mail->isSMTP();
            $mail->Host = 'mail.ceducap.org ';
            $mail->SMTPAuth = true;
            $mail->Username = 'info@ceducap.org';
            $mail->Password = 'Informe@123';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            // Cotenido email
            $mail->setFrom('info@ceducap.org');
            $mail->addAddress('info@ceducap.org', 'CEDUCAP.COM');
            $mail->Subject = 'Nuevo mensaje de CEDUCAP';

            // Habilitar HTML
            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';
            
            // Contenido
            $contenido =  '<html>';
            $contenido .= '<p>Tienes un nuevo mensaje de </p>';
            $contenido .= '<p>Nombre: '. $respuestas['nombre'] .'</p>';
            $contenido .= '<p>Correo: '. $respuestas['email'] .'</p>';
            $contenido .= '<p>Telefono: '. $respuestas['telefono'] .'</p>';
            $contenido .= '<p>Mensaje: '. $respuestas['mensaje'] .'</p>';
            $contenido .= '</html>';


            $mail->Body = $contenido;
            // debuguear($mail);

            // enviar email
            if($mail->send()){
                header('Location: /');
                // $mensaje = "mensaje enviado correctamente";
            }else{
                $mensaje = "el mensaje no fue enviado correctamente";
            }

        }
        
        $router->render('auth/index',[
            'mensaje' => $mensaje
        ]);
    }

    public static function login(Router $router){
        $router->render('auth/login',[
        ]);
    }
}
