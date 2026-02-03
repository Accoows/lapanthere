<?php 
    if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message'])) {
        header("HTTP/1.1 400 Bad Request");
        echo "Manques d'information";
        exit();
    }
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = 'receiver@yoursite.com'; 
    $email_subject = "Message de : $name";
    $email_body = "Nouveau message de contact.\n\nNom: $name\nEmail: $email\nMessage: $message";
    $headers = "From: contact@yoursite.com\r\n";
    $headers .= "Reply-To: $email";

    if(mail($to, $email_subject, $email_body, $headers)) {
        echo "Success";
    } else {
        header("HTTP/1.1 500 Internal Server Error");
    }
?>