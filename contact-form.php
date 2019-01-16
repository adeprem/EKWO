    <?php
    // S'il y des données de postées
    if ($_SERVER['REQUEST_METHOD']=='POST') {

      // (1) Code PHP pour traiter l'envoi de l'email

      // Récupération des variables et sécurisation des données
      $nom     = htmlentities($_POST['nom']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
      $email   = htmlentities($_POST['email']);
      $message = htmlentities($_POST['message']);

      // Variables concernant l'email

      $destinataire = 'adeprem@vt.edu'; // Adresse email du webmaster (à personnaliser)
      $sujet = 'Titre du message'; // Titre de l'email
      $contenu = '<html><head><title>Titre du message</title></head><body>';
      $contenu .= '<p>Bonjour, vous avez reçu un message à partir de votre site web.</p>';
      $contenu .= '<p><strong>Nom</strong>: '.$nom.'</p>';
      $contenu .= '<p><strong>Email</strong>: '.$email.'</p>';
      $contenu .= '<p><strong>Message</strong>: '.$message.'</p>';
      $contenu .= '</body></html>'; // Contenu du message de l'email (en XHTML)

      // Pour envoyer un email HTML, l'en-tête Content-type doit être défini
      $headers = 'MIME-Version: 1.0'."\r\n";
      $headers .= 'Content-type: text/html; charset=utf-8'."\r\n";
      header('Content-Type: text/html; charset=utf-8');

      // Envoyer l'email
      mail($destinataire, $sujet, $contenu, $headers); // Fonction principale qui envoie l'email
      echo '<h2>Message envoyé!</h2>'; // Afficher un message pour indiquer que le message a été envoyé
      // (2) Fin du code pour traiter l'envoi de l'email
    }
    ?>
