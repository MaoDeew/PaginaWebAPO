<? 
$to      = 'mabeto97@hotmail.com'; 
$subject = 'The test for php mail function'; 
$message = 'Hello'; 
$headers = 'From: info@apocolombia.com' . "\r\n" . 
    'Reply-To: mabeto97@hotmail.com' . "\r\n" . 
    'X-Mailer: PHP/' . phpversion(); 
mail($to, $subject, $message, $headers); 
?>  