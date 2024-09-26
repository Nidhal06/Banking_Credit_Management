<?php
include 'db.php';

// Récupérer tous les clients existants pour la liste déroulante
$stmt = $pdo->query('SELECT id, nom, prenom FROM clients');
$clients = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Récupérer tous les statuts disponibles
$stmt = $pdo->query('SELECT nom FROM statuts');
$statuts = $stmt->fetchAll(PDO::FETCH_COLUMN);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un crédit</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Ajouter un crédit</h1>
    <form action="process_credit.php" method="POST">
        <label for="client_id">Client :</label>
        <select name="client_id" required>
            <option value="">Sélectionner un client</option>
            <?php foreach ($clients as $client): ?>
                <option value="<?= $client['id'] ?>">
                    <?= htmlspecialchars($client['nom'] . " " . $client['prenom']) ?>
                </option>
            <?php endforeach; ?>
        </select><br>

        <label for="montant">Montant :</label>
        <input type="number" name="montant" required><br>

        <label for="date_credit">Date du crédit :</label>
        <input type="date" name="date_credit" required><br>

        <label for="duree">Durée (mois) :</label>
        <input type="number" name="duree" required><br>

        <label for="taux_interet">Taux d'intérêt :</label>
        <input type="number" step="0.01" name="taux_interet" required><br>

        <label for="statut">Statut :</label>
        <select name="statut" required>
            <option value="">Sélectionner un statut</option>
            <?php foreach ($statuts as $statut): ?>
                <option value="<?= htmlspecialchars($statut) ?>"><?= htmlspecialchars($statut) ?></option>
            <?php endforeach; ?>
        </select><br>

        <input type="submit" value="Ajouter le crédit">
    </form>
</body>
</html>
