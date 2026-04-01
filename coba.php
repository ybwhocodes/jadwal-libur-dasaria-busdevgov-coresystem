<?php
$host = "mail.dasaria.id";
$port = 587;
$username = "dummy.it@dasaria.id";
$password = "Youandi123!";
$to = "billy.funciona@gmail.com"; // ganti email tujuan
$from = $username;

$subject = "Test Email PHP Online";
$message = "Ini adalah email test dari PHP Online Compiler.";

// Encode login
$login = base64_encode($username);
$pass = base64_encode($password);

// SSL connection
$socket = fsockopen($host, $port, $errno, $errstr, 10);

if (!$socket) {
    die("❌ Connection failed: $errstr ($errno)");
}

function getResponse($socket) {
    return fgets($socket, 515);
}

function sendCommand($socket, $command) {
    fwrite($socket, $command . "\r\n");
    return getResponse($socket);
}

// Server greeting
echo getResponse($socket);

// Login process
echo sendCommand($socket, "EHLO localhost");
echo sendCommand($socket, "AUTH LOGIN");
echo sendCommand($socket, $login);
echo sendCommand($socket, $pass);

// Email headers
echo sendCommand($socket, "MAIL FROM: <$from>");
echo sendCommand($socket, "RCPT TO: <$to>");
echo sendCommand($socket, "DATA");

$headers = "From: $from\r\n";
$headers .= "To: $to\r\n";
$headers .= "Subject: $subject\r\n";
$headers .= "\r\n";

$body = $headers . $message . "\r\n.";

echo sendCommand($socket, $body);

// Quit
echo sendCommand($socket, "QUIT");

fclose($socket);

echo "\n✅ Done";