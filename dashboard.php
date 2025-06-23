<?php
session_start();

// Bloqueia acesso sem login
if (!isset($_SESSION['logado'])) {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('https://wallpaperaccess.com/full/1193446.jpg'); 
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Segoe UI', sans-serif;
        }

        .dashboard-card {
            background-color: rgba(0, 0, 0, 0.75);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.1);
            text-align: center;
            max-width: 500px;
        }

        .dashboard-card h1 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .dashboard-card p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }


    </style>
</head>
<body>
    <div class="dashboard-card">
        <h1>Bem-vindo, <?php echo htmlspecialchars($_SESSION['usuario']); ?>!</h1>
        <p>Você está logado com sucesso no sistema Zelda Inventory.</p>
    </div>
</body>
</html>
