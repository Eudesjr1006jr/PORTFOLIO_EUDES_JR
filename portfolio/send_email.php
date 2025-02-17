
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer et sécuriser les valeurs du formulaire
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Vérifier que tous les champs sont remplis
    if (!$name || !$email || !$subject || !$message) {
        die("Erreur : Tous les champs doivent être remplis.");
    }

    // Vérification de l'email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Erreur : L'email est invalide.");
    }

    // Définir l'adresse email à laquelle le message sera envoyé
    $to = "eudes.yao@epitech.eu"; 

    // Construire l'en-tête
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Construire le message
    $body = "Nom: $name\n";
    $body .= "Email: $email\n";
    $body .= "Sujet: $subject\n";
    $body .= "Message:\n" . nl2br($message) . "\n";

    // Envoi du message avec mail()
    if (mail($to, $subject, $body, $headers)) {
        echo "Message envoyé avec succès.";
    } else {
        echo "L'envoi du message a échoué.";
    }
} else {
    echo "Aucune donnée reçue.";
}
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Récupérer et sécuriser les valeurs du formulaire
//     $name = htmlspecialchars(trim($_POST['name']));
//     $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
//     $subject = htmlspecialchars(trim($_POST['subject']));
//     $message = htmlspecialchars(trim($_POST['message']));

//     // Vérifier que tous les champs sont remplis
//     if (!$name || !$email || !$subject || !$message) {
//         die("Erreur : Tous les champs doivent être remplis.");
//     }

//     // Définir l'adresse email à laquelle le message sera envoyé
//     $to = "eudes.yao@epitech.eu"; 
    
//     // Construire l'en-tête
//     $headers = "From: $email\r\n";
//     $headers .= "Reply-To: $email\r\n";
//     $headers .= "MIME-Version: 1.0\r\n";
//     $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

//     // Construire le message
//     $body = "Nom: $name\n";
//     $body .= "Email: $email\n";
//     $body .= "Sujet: $subject\n";
//     $body .= "Message:\n" . nl2br($message) . "\n";

//     // Forcer l'envoi avec sendmail
//     $sendmail = "/usr/sbin/sendmail -t"; 
//     $mailProcess = popen($sendmail, 'w');
//     fwrite($mailProcess, "To: $to\n");
//     fwrite($mailProcess, "Subject: $subject\n");
//     fwrite($mailProcess, "$headers\n\n");
//     fwrite($mailProcess, "$body\n");
//     $status = pclose($mailProcess);

//     // Vérifier si l'envoi a réussi
//     if ($status == 0) {
//         echo "Message envoyé avec succès.";
//     } else {
//         echo "L'envoi du message a échoué.";
//     }
// } else {
//     echo "Aucune donnée reçue.";
// }

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Récupérer et sécuriser les valeurs du formulaire
//     $name = htmlspecialchars(trim($_POST['name']));
//     $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
//     $subject = htmlspecialchars(trim($_POST['subject']));
//     $message = htmlspecialchars(trim($_POST['message']));

//     // Vérifier que tous les champs sont remplis
//     if (!$name || !$email || !$subject || !$message) {
//         die("Erreur : Tous les champs doivent être remplis.");
//     }

//     // Définir l'adresse email à laquelle le message sera envoyé
//     $to = "eudes.yao@epitech.eu"; 
//     $headers = "From: $email\r\n";
//     $headers .= "Reply-To: $email\r\n";
//     $headers .= "MIME-Version: 1.0\r\n";
//     $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

//     // Construire le message
//     $body = "Nom: $name\n";
//     $body .= "Email: $email\n";
//     $body .= "Sujet: $subject\n";
//     $body .= "Message:\n" . nl2br($message) . "\n";

//     // Envoi du message
//     if (mail($to, $subject, $body, $headers)) {
//         echo "Message envoyé avec succès.";
//     } else {
//         echo "L'envoi du message a échoué.";
//     }
// } else {
//     echo "Aucune donnée reçue.";
// }




// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Récupérer les valeurs du formulaire
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $subject = $_POST['subject'];
//     $message = $_POST['message'];

//     // Définir l'adresse email à laquelle le message sera envoyé
//     $to = "eudes.yao@epitech.eu"; 
//     $headers = "From: $email\r\n";
//     $headers .= "Reply-To: $email\r\n";
//     $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

//     // Construire le message
//     $body = "Nom: $name\n";
//     $body .= "Email: $email\n";
//     $body .= "Sujet: $subject\n";
//     $body .= "Message:\n$message\n";

//     // Envoi du message
//     if (mail($to, $subject, $body, $headers)) {
//         echo "Message envoyé avec succès.";
//     } else {
//         echo "L'envoi du message a échoué.";
//     }
// } else {
//     echo "Aucune donnée reçue.";
// }
?>