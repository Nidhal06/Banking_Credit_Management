<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer les données du formulaire
    $client_id = $_POST['client_id'];
    $montant = $_POST['montant'];
    $date_credit = $_POST['date_credit'];
    $duree = $_POST['duree'];
    $taux_interet = $_POST['taux_interet'];
    $statut = $_POST['statut'];

    // Valider que le client existe
    $stmt = $pdo->prepare('SELECT * FROM clients WHERE id = ?');
    $stmt->execute([$client_id]);
    $client = $stmt->fetch();

    if ($client) {
        // Valider que le statut est valide
        $stmt = $pdo->prepare('SELECT nom FROM statuts WHERE nom = ?');
        $stmt->execute([$statut]);
        $statut_valide = $stmt->fetch();

        if ($statut_valide) {
            // Ajouter le crédit
            $stmt = $pdo->prepare('INSERT INTO credits (client_id, montant, date_credit, duree, taux_interet, statut) VALUES (?, ?, ?, ?, ?, ?)');
            $stmt->execute([$client_id, $montant, $date_credit, $duree, $taux_interet, $statut]);

            echo "Crédit ajouté avec succès pour le client " . htmlspecialchars($client['nom']) . " " . htmlspecialchars($client['prenom']) . " !";
            echo '<br><a href="dashboard.php">Retour au tableau de bord</a>';
        } else {
            // Statut invalide
            echo "Erreur : le statut sélectionné n'est pas valide.";
            echo '<br><a href="add_credit.php">Retour au formulaire</a>';
        }
    } else {
        // Client n'existe pas
        echo "Erreur : le client n'existe pas.";
        echo '<br><a href="add_credit.php">Retour au formulaire</a>';
    }
}
?>
