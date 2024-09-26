<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Requête pour vérifier si l'utilisateur existe
    $stmt = $pdo->prepare('SELECT * FROM utilisateurs WHERE username = ?');
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        // Connexion réussie
        $_SESSION['user_id'] = $user['id'];
        header('Location: dashboard.php');
        exit();
    } else {
        // Identifiants incorrects
        echo "<p>Identifiant ou mot de passe incorrect.</p>";
    }
}
?>
