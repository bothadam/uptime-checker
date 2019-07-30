<?php
    $host = 'tjaarge.com';
    if($socket =@ fsockopen($host, 80, $errno, $errstr, 30)) {
        // it is online, do nothiing
    fclose($socket);
    } else {
        $email = "example@gmail.com"
        $to = $email;
        $subject = "Website down!";
        $text = "Your website just went down bru.";
        $headers = "From: breakfast@adamplanet.online";
        mail($to,$subject,$text,$headers);
    }
?>
