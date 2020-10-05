<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thank you !</title>
</head>
<body>
<h1>Thank you !</h1>
<p>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST['user_firstname'])) {
            echo "Le prénom est requis";
        }
        if (empty($_POST['user_lastname'])) {
          echo "Le nom est requis";
        }
        if (empty($_POST['user_email'])) {
          echo "L'email est requis";
        }
        if (empty($_POST['user_phone'])) {
          echo 'Le numéro de téléphone est requis';
        }
        if (empty($_POST['user_message'])) {
          echo 'Un message est requis';
        } else {
           if (filter_var($email = $_POST['user_email'], FILTER_VALIDATE_EMAIL)) {
                echo 'Merci ' . $_POST['user_firstname'] . ' ' . $_POST['user_lastname'] . ' de nous avoir contacté à propos de ' . $_POST['user_subject'] . '.'; ?>
               <br/>
               <?php echo 'Un de nos conseillers vous contactera soit à l’adresse ' . $_POST['user_email'] . ' ou par téléphone au ' . $_POST['user_phone'] . ' dans les plus brefs délais pour traiter votre demande :'; ?>
              <br/>
              <?php echo $_POST['user_message'];
            } else {
               echo "L'adresse email '$email' est invalide.";
            }
        }
    }    ?>
</p>

</body>
</html>
