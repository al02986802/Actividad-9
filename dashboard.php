<?php
require '../includes/auth.php';

// Verifica que el usuario esté logueado
if (!is_logged_in()) {
    header('Location: landingpage.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <?php include '../includes/navbar.php'; ?>

    <h1>Bienvenido al Dashboard</h1>
    <p>Esta es la vista para usuarios registrados.</p>
</body>
</html>
