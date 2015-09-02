<? 
$to      = 'eedgerton47@gmail.com'; 
$subject = 'The test for php mail function'; 
$message = 'Hello'; 
$headers = 'From: nex@newenergyx.com' . "\r\n" . 
    'Reply-To: nex@newenergyx.com' . "\r\n" . 
    'X-Mailer: PHP/' . phpversion(); 
mail($to, $subject, $message, $headers); 
?>   