<?php
// Script pour insérer des utilisateurs avec des mots de passe cryptés
include 'db.php';

$username = "admin";
$password = password_hash("admin123", PASSWORD_BCRYPT); // Crypter le mot de passe

$stmt = $pdo->prepare('INSERT INTO utilisateurs (username, password) VALUES (?, ?)');
$stmt->execute([$username, $password]);

echo "Utilisateur ajouté avec succès!";
?>
