<?php

namespace Notifications;

use  PHPMailer\PHPMailer\PHPMailer;
use  PHPMailer\PHPMailer\Exception;


class Email{

    private $email = \stdClass::class;

    public function __construct(){
        $this->$mail = new  PHPMailer (true);
        $this->$mail->SMTPDebug = 2;
        $this->$mail->isSMTP();
        $this-> $mail->Host = 'mail.contabilidadeparaigrejas.com';
        $this-> $mail->SMTPAuth = true;
        $this->$mail->Username = 'sender@contabilidadeparaigrejas.com';
        $this->$mail->Password = 'test@123';
        $this-> $mail->SMTPSecure = 'tls';
        $this-> $mail->Port = '587';
        $this->$mail->setLanguage = (langcode: 'br');
        $this->$mail->isHTML(true);
        $this-> $mail->setFrom = (address: 'comercial@contabilidadeparaigrejas.com', name: 'Equipe');

    }

    public function sendMail($subject, $body, $replyEmail, $replyName, $addressEmail, $adressName)
    {
        $this->$mail->Subject = (string)$subject;
        $this->$mail->Body = $body;

        $this->$mail->addReplyTo($replyEmail, $replyName);
        $this->$mail->addAddress($addressEmail, $addressName);
        try{
            $this->mail->send();
        }catch(Exception $e){
             echo "Erro:{$this->mail->ErrorInfo}{$e->getMessage()}";
        }
       
    } 
}