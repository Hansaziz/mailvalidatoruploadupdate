<?php
session_start();

$validUsers = [
    'userA' => 'passwordA', 
    'userB' => 'passwordB'
];

$username = $_POST['username'];
$password = $_POST['password'];

if (array_key_exists($username, $validUsers) && $validUsers[$username] === $password) {
    $_SESSION['user'] = $username;
    $_SESSION['userRole'] = 'userA'; 
    header('Location: index.php'); 
    exit;
} else {
    echo "Invalid username or password.";
}
?>
