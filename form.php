<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <p>This is my form.</p>
    <form action="thanks.php" method="POST">
    <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="userlastname" value="">
    </div>
    <div>
        <label for="name">Prénom :</label>
        <input type="text" id="name" name="userfirstname" value="">
    </div>

    <div>
        <label for="mail">e-mail&nbsp;:</label>
        <input type="email" id="mail" name="user_mail">
    </div>
    <div>
        <label for="phone">Téléphone:</label>
        <input type="phone" id="phone" name="user_number">
    </div>

    <div>
        <select name="topic" id="topic">
            <option value="theme 1" >Choix thème</option>
            <option value="theme 2">Choix thème</option>
            <option value="theme 3">Choix thème</option>
        </select>
    </div>

    <div>
        <label for="msg">Message :</label>
        <textarea id="msg" name="user_message">TEXT</textarea>
    </div>
    <div class="button">
        <button type="submit">Envoyer le message</button>
    </div>

    <?php 
    var_dump($_POST);
    ?>

</form>
    
</body>
</html>