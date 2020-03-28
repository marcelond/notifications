<?php

require __DIR__ . '/../lib_ext/autoload.php';

use Notifications\Email;

$novoEmail = new Email(2, "mail.contabilidadeparaigrejas.com", "comercial@contabilidadeparaigrejas.com", "teste123", "tls", "587", "comercial@contabilidadeparaigrejas.com", "Equipe");
$novoEmail->sendMail("Assunto de Test","<p>Esse é um email de teste</p>","comercial@contabilidadeparaigrejas.com","marcelo.nd87@gmail.com");


var_dump($novoEmail);