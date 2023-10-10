<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

$email = new PHPMailer();

$bodytext = "asddas";
// Configurez les paramètres de l'e-mail
$email->setFrom('matejavelickovic97@gmail.com', 'Mateja');
$email->Subject = 'Message Subject';
$email->addAddress('matejavelickovic97@gmail.com');
$email->Body      = $bodytext;
$file_to_attach = 'test.txt'; // Chemin vers le fichier à joindre

// Spécifiez le nom de la pièce jointe (peut être différent du nom du fichier sur le serveur)
$email->addAttachment($file_to_attach, 'NameOfFile.txt');

if ($email->send()) {
    echo 'E-mail envoyé avec succès';
} else {
    echo 'Erreur lors de l\'envoi de l\'e-mail : ' . $email->ErrorInfo;
}
