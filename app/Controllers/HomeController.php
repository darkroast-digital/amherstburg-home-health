<?php

namespace App\Controllers;

use App\Controllers\Controller;
use PHPMailer\PHPMailer\PHPMailer;


class HomeController extends Controller
{
    public function index($request, $response, $args)
    {

        return $this->view->render($response, 'home.twig');
    }

    public function post($request, $response, $args)
    {
        $mail = new PHPMailer;
        $params = $request->getParams();

        $name = $params['name'];
        $email = $params['email'];
        $about = $params['subject'];
        $message = $params['message'];
        
        $subject = "New query from Amherstburg Home Health Care";

        $mail->setFrom($email, $name);
        $mail->addAddress('info@amherstburghomehealth.ca', 'Amherstburg Home Health Care');
        $mail->addReplyTo('info@amherstburghomehealth.ca', 'Amherstburg Home Health Care');
        $mail->ReutrnPath='info@amherstburghomehealth.ca';

        $mail->isHTML(true);

        $body = 'Name: ' . $name . "<br/>" .
                "Subject: " . $about . "<br/>" .
                "Email: " . $email . "<br/>" .
                'Message: ' . $message;

        $mail->Subject = $subject;
        $mail->Body    = $body;
        $mail->AltBody = $body;

        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Success!';
        }

    }
}