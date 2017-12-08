<?php
if(isset($_POST['submit'])) {

$to = "info@dgpourpre.fr";
$subject = "Contact";
$name_field = $_POST['name'];
$email_field = $_POST['email'];
$message = $_POST['message'];

$body = "From: $name_field\n E-Mail: $email_field\n Message:\n $message";

echo "Merci de nous avoir contactés!";
mail($to, $subject, $body);

} else {

echo "Erreur";

}
?>
