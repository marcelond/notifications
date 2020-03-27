<?php

namespace Notifications;

require __DIR__ . '/lib_ext/autoload.php';

use Notifications\Email;

$novoEmail = new Email;
$novoEmail->sendMail("Assunto de Test","<p>Esse é um email de teste</p>","comercial@contabilidadeparaigrejas.com","marcelo.nd87@gmail.com");


var_dump($novoEmail);