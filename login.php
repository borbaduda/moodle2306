<?php
session_start();


$usuario_correto = 'dudaborba';
$senha_correta = '1234567';


$usuario = $_POST['username'] ?? '';
$senha = $_POST['password'] ?? '';


if ($usuario === $usuario_correto && $senha === $senha_correta) {
    $_SESSION['logado'] = true;
    $_SESSION['usuario'] = $usuario;
    header('Location: dashboard.php');
    exit();
} else {
    header('Location: index.php?error=1');
    exit();
}
