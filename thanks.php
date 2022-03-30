

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

$lastname = $firstname = $phone = $email = $theme = $message = '';
$lastnameErr = $firstnameErr = $phoneErr = $emailErr = $themeErr = $messageErr = '';

function testData($data) 
{   
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
};

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
   
    
    if (empty($_POST['userfirstname'])) {
        $firstnameErr = 'First name is required';
      } else {
        $firstname = testData($_POST['userfirstname']);
      }
  
      if (empty($_POST['userlastname'])) {
        $lastnameErr = 'Last name is required';
      } else {
        $lastname = testData($_POST['userlastname']);
      }
  
      if (empty($_POST['user_mail'])) {
        $emailErr = 'E-mail is required';
      } else {
        $email = testData($_POST['user_mail']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = 'Invalid format';
        }
      }
  
      if (empty($_POST['user_number'])) {
        $phoneErr = 'Phone number is required';
      } else {
        $phone = testData($_POST['user_number']);
      }
  
      if (empty($_POST['topic'])) {
        $themeErr = 'topic is required';
      } else {
        $theme = testData($_POST['topic']);
      }
  
      if (empty($_POST['user_message'])) {
        $messageErr = 'Message is required';
      } else {
        $message = testData($_POST['user_message']);
      }
}
  

  
 

if (isset($firstnameErr)) {
    echo $firstnameErr;
}

if (isset($lastnameErr)) {
    echo $lastnameErr;
}

if (isset($emailErr)) {
    echo '<br/>' . $emailErr;
  }

  if (isset($phoneErr)) {
    echo '<br/>' . $phoneErr;
  }

  if (isset($themeErr)) {
    echo '<br/>' . $themeErr;
  }

  if (isset($messageErr)) {
    echo '<br/>' . $messageErr;
  }


if ($firstnameErr == null && $lastnameErr == null && $emailErr == null && $phoneErr == null && $themeErr == null && $messageErr == null) {
    echo  'Merci ' . $_POST['userfirstname'] . ' ' . $_POST['userlastname'] . ' de nous avoir contacté à propos de "' . $_POST['topic'] . '.' . '</p>' . '</div>' . PHP_EOL . '<div>' . '<p>' . 'Un de nos conseiller vous contactera soit à l’adresse ' . $_POST['user_mail'] . ' ou par téléphone au ' . $_POST['user_number'] . ' dans les plus brefs délais pour traiter votre demande :' . '</p>' . '</div>' . PHP_EOL . '<div>' . '<p>' . $_POST['user_message'] . '</p>' . '</div>';
  }
  ?>
  </body>
</html>