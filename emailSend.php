<?php
$to = "khanmoid7398@gmail.com";
$subject = "Test email";
$message = "aur kya haal hai moid ?";
$from = "abdulmoidkhan221@gmail.com";
$headers = "From:$from";
mail($to, $subject, $message, $headers);
echo "mail sent";

?>