<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Thanks </title>
    <style>
        p {
           margin: 10px;
        }
    </style>
</head>
<body>

        <p> Merci <?= $firstname. ' '. $lastname ?> de nous avoir contacté à propos de
        <?= $subject?> </p>

        <p> Un de nos conseillers vous contactera soit à l'adresse <?= $mail ?>
            ou par téléphone au <?= $phone ?> dans les plus brefs délais
            pour traiter votre demande:
        </p>

        <p> <?= $message ?> </p>

    </div>



</body>
</html>
