<?php

    //we need to get our variables first

    $email_to =   'info@artemisfarms.com';
    $subject = 'Website Contact Form';
    $name     =   $_POST['name'];
    $phone  =   $_POST['phone'];    
    $email    =   $_POST['email'];
    $message  =   $_POST['message'];

    $headers  = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if(mail($email_to, $subject, $message, $headers)){
        echo 'Your message has been sent!';
        header("Location: thanks.html");
    }else{
        echo 'Your message was not sent... something is not working here. You can always email us on <a href="mailto:info@artemisfarms.com">info@artemisfarms.com</a> or call 1-888-772-3779. ';
    }
    
    
    ?>