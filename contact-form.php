
<?php
    $name = $_POST['nom'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: Site Ekwo';
    $to = 'adeprem@vt.edu';
    $subject = 'Formulaire de contact';

    // $body = "From: $name E-Mail: $email Message: $message";
    $body = 'From: '.$name."\r\n".'E-mail: '.$email."\r\n".'Message'.$message;


    if ($_POST['submit']) {
      if (mail($to, $subject, $body, $from)) {
        echo '<p>Your message has been sent!</p>';
      }
      else {
        echo '<p>Désolée, il y a eu un problème. Si cela persiste, contactez nous par email ! info@dgpourpre.fr</p>';
      }
    }
?>
