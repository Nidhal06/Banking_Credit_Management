<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];

    // Insertion dans la base de données
    $stmt = $pdo->prepare('INSERT INTO clients (nom, prenom, email, telephone) VALUES (?, ?, ?, ?)');
    $stmt->execute([$nom, $prenom, $email, $telephone]);

    // Message de succès
    echo "Client ajouté avec succès !";
    echo '<a href="view_clients.php">Voir la liste des clients</a>';
}
?>
