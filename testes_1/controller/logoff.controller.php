<?php
/*
 * Controlador de logoff
 * 1. Inicia sessão existente.
 * 2. Destroi a sessão.
 * 3. Redireciona para a página index.php.
 */
session_start();
session_destroy();
header("Location: ../index.php");