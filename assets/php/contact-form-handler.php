<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone_number"];
    $msg_subject = $_POST["msg_subject"];
    $message = $_POST["message"];
    
    $email_from = 'wasmaltheeqa.lwr@gmail.com';
    $email_subject = "New Message Received";
    $email_body = "Name: $name. \n".
                    "Email: $email.\n".
                        "Phone Number: $phone_number.\n".
                            "Subject: $msg_subject.\n".
                                "Message: $message.\n";

    $to = "info@wasmaltheeqa.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $email \r\n";

    mail($to, $email_subject, $email_body, $headers);
    header("Location: index.html");
    
?>