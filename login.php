<?php
// Plik login.php

// Wczytanie użytkowników i haseł z pliku tekstowego
$users = file('users.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$credentials = [];
foreach ($users as $user) {
    list($username, $password) = explode(',', $user);
    $credentials[$username] = $password;
}

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if (isset($credentials[$username]) && $credentials[$username] === $password) {
    // Przekierowanie po pomyślnym zalogowaniu
    header('Location: https://marcin-haa.github.io/new.php');
    exit();
} else {
    echo 'Nieprawidłowa nazwa użytkownika lub hasło.';
}
?>
