<?php
session_start();

// Simulación de "base de datos" de usuarios
$users = [
    'user1' => 'password123', // Ejemplo de usuario
];

function login($username, $password) {
    global $users;
    if (isset($users[$username]) && $users[$username] === $password) {
        $_SESSION['username'] = $username;
        return true;
    }
    return false;
}

function is_logged_in() {
    return isset($_SESSION['username']);
}

function logout() {
    session_destroy();
}
?>
