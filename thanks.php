
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirmation de message</title>
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {$errors = [];

    if (!isset($_POST['firstname']) || trim($_POST['firstname']) === '') {
        $errors[] = "Le prénom est obligatoire";
    }
    if (!isset($_POST['lastname']) || trim($_POST['lastname']) === '') {
        $errors[] = "Le nom est obligatoire";
    }
    if (!isset($_POST['email']) || trim($_POST['email']) === '') {
        $errors[] = "L'adresse e-mail est obligatoire";
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
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];



        echo "<p> Merci $firstname. ' '. $lastname ? de nous avoir contacté à propos de
         $subject?</p>

        <p> Un de nos conseillers vous contactera soit à l'adresse  $email 
            ou par téléphone au  $phone  dans les plus brefs délais
            pour traiter votre demande:
        </p>

        <p>  $message  </p>";
        echo "<p>Merci de nous avoir contacté. Nous vous répondrons dans les plus brefs délais.</p>";
    } else {
        echo "<h2>Il y a des erreurs dans le formulaire :</h2>";
        echo "<ul>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
        echo "<p>Veuillez remplir les champs obligatoires et essayer de nouveau.</p>";
    }
} else {
    header('Location: contact.php');
    exit;
}
?>
</body>
</html>
