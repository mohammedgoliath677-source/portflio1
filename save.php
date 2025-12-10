<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$file = fopen("messages.txt", "a");

fwrite($file, "----------------------\n");
fwrite($file, "Name: $name\n");
fwrite($file, "Email: $email\n");
fwrite($file, "Message: $message\n");
fwrite($file, "Date: " . date("Y-m-d H:i:s") . "\n");
fwrite($file, "----------------------\n\n");

fclose($file);

echo "Saved!";
?>