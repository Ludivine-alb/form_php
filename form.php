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
    <?=  !empty($error) ? $error : ' ';?>
    <form action="thanks.php" method="POST" target= "">
    <div>
        <label for="name">Nom :</label>
        <input type="text" id="lastname" name="userlastname" value ="" >
        <p> </p>
    </div>
    <div>
        <label for="name">Prénom :</label>
        <input type="text" id="firstname" name="userfirstname" value="" >
        
    </div>

    <div>
        <label for="mail" v>e-mail&nbsp;:</label> 
        <input type="email" id="mail" name="user_mail" value =""  > 
        <p></p>
    </div>
    <div>
        <label for="phone">Téléphone:</label>
        <input type="phone" id="phone" name="user_number" value ="" >
        <p></p>
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
        <textarea id="message" name="user_message" value ="" >text</textarea>
    </div>

    <div class="button">
        <button type="submit">Envoyer le message</button>
    </div>

</form>
    
</body>
</html>