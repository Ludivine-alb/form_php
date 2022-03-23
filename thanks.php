<?php 

//$user_name = ($_POST['user_name']);
//$theme = ($_POST['theme']);
//$user_number = ($_POST['user_number']) ;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>Bonjour <?= $_POST['userlastname'] . ' ' . $_POST['userfirstname'];?> merci de nous avoir contacté à propos du <?= $_POST['topic']; ?>.<br> Un de nos conseiller vous contactera soit à l’adresse <?= $_POST['user_mail']; ?> <br>ou par téléphone au <?= $_POST['user_number']; ?> dans les plus brefs délais pour traiter votre demande : <br> <?= $_POST['user_message']; ?></p> 
</body>
</html>
