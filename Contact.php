<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <style>
        p, h2 {
            margin: 0;
            width: 400px;
            padding: 1em;
        }
    </style>
</head>
<body>
<h2> Laissez nous un message</h2>
<p> Merci de remplir le formulaire ci-dessous pour nous contacter.</p>
<form action="thanks.php" method="post">


<?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $errors = [];
                if (!isset($_POST['firstname']) || trim($_POST['firstname']) === '') {
                    $errors[] = "Le prénom est obligatoire";
                }
                if (!isset($_POST['lastname']) || trim($_POST['lastname']) === '') {
                    $errors[] = "Le nom est obligatoire";
                }
                if(!isset($_POST['email']) || trim($_POST['email']) === '') {
                    $errors[] = "L'e-mail est obligatoire";
                } else {
                    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
                    if(!$email) {
                        $errors[] = "L'e-mail est invalide";
                    }
                }
                if (!isset($_POST['phone']) || trim($_POST['phone']) === '') {
                    $errors[] = "Le numéro de téléphone est obligatoire";
                }
                if (!isset($_POST['subject']) || trim($_POST['subject']) === '') {
                    $errors[] = "Le sujet est obligatoire";
                }
                if (!isset($_POST['message']) || trim($_POST['message']) === '') {
                    $errors[] = "Le message est obligatoire";
                }
                if (empty($errors)) {
                    // Tous les champs sont remplis, le formulaire est valide
                    header('Location: thanks.php');
                    exit;
                } else {
                    // Au moins un champ est vide, on redirige l'utilisateur vers thanks.php avec les messages d'erreur
                    $error_str = implode(',', $errors);
                    header("Location: thanks.php?error=$error_str");
                    exit;
                }
            }
?>

    <p>
        <label for="firstname"> Prénom </label>
        <input type="text" id="firstname" name="firstname">
    </p>
    <p>
        <label for="lastname"> Nom </label>
        <input type="text" id="lastname" name="lastname">
    </p>
    <p>
        <label for="mail"> E-mail</label>
        <input type="email" id="mail" name="email">
    </p>
    <p>
        <label for="phone"> Numéro de téléphone</label>
        <input type="tel" id="phone" name="phone">
    </p>
    <p>
        <label for="subject"> Vous nous contacter à propose de</label>
        <select name="subject" id="subject">
            <option value="subscription"> Votre souscription </option>
            <option value="options"> Votre option</option>
            <option value="appreciation"> Un avis sur notre site</option>
            <option value="another"> Autre Chose</option>
        </select>
    </p>
    <p>
        <label for="message"> Ecrivez votre message</label>
        <textarea name="message" id="message"></textarea>
    </p>
    <p>
        <button type="submit"> Validez votre message</button>
    </p>
</form>
</body>
</html>