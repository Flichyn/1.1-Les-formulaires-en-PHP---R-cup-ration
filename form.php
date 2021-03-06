<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Form</title>
</head>
<body>

<h1>My Form</h1>

<form action="thanks.php" method="post">
    <div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="user_lastname" required>
    </div>
    <div>
        <label for="firstname">Prénom :</label>
        <input type="text" id="firstname" name="user_firstname" required>
    </div>
    <div>
        <label for="courriel">Courriel :</label>
        <input type="email" id="courriel" name="user_email" required>
    </div>
    <div>
        <label for="phone">Téléphone :</label>
        <input type="tel" id="phone" name="user_phone" required>
    </div>
    <div>
        <label for="subject">Sujet :</label>
        <select id="subject" name="user_subject" required>
            <option value="candidature">Candidature</option>
            <option value="stage">Stage</option>
            <option value="other">Autre</option>
        </select>
    </div>
    <div>
        <label for="message">Message :</label>
        <textarea id="message" name="user_message" required></textarea>
    </div>
    <div class="button">
        <button type="submit">Envoyer votre message</button>
    </div>
</form>

</body>
</html>
