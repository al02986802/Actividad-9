<?php
require 'auth.php';
?>
<nav>
    <ul>
        <?php if (is_logged_in()): ?>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="logout.php">Cerrar sesión</a></li>
        <?php else: ?>
            <li><a href="index.php">Iniciar sesión</a></li>
            <li><a href="register.php">Registrarse</a></li>
        <?php endif; ?>
    </ul>
</nav>
