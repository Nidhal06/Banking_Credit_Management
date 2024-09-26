<?php
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}
?>

<?php
include 'db.php';

// Requête pour récupérer les crédits en cours
$stmt = $pdo->query('SELECT credits.*, clients.nom, clients.prenom FROM credits JOIN clients ON credits.client_id = clients.id WHERE credits.statut = "En Cours"');
$credits_en_cours = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Requête pour récupérer les crédits terminés
$stmt = $pdo->query('SELECT credits.*, clients.nom, clients.prenom FROM credits JOIN clients ON credits.client_id = clients.id WHERE credits.statut = "Terminé"');
$credits_termines = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Requête pour récupérer les crédits en retard
$stmt = $pdo->query('SELECT credits.*, clients.nom, clients.prenom FROM credits JOIN clients ON credits.client_id = clients.id WHERE credits.statut = "En Retard"');
$credits_en_retard = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Requête pour récupérer les crédits en défaut
$stmt = $pdo->query('SELECT credits.*, clients.nom, clients.prenom FROM credits JOIN clients ON credits.client_id = clients.id WHERE credits.statut = "En Défaut"');
$credits_en_defaut = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Requête pour récupérer les crédits en révision
$stmt = $pdo->query('SELECT credits.*, clients.nom, clients.prenom FROM credits JOIN clients ON credits.client_id = clients.id WHERE credits.statut = "En Révision"');
$credits_en_revision = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Requête pour récupérer les crédits suspendus
$stmt = $pdo->query('SELECT credits.*, clients.nom, clients.prenom FROM credits JOIN clients ON credits.client_id = clients.id WHERE credits.statut = "Suspendu"');
$credits_suspendus = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau de bord</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Tableau de bord des Risques</h1>
    <div class="dashboard">
        <div class="card">
            <h2>Crédits En Cours</h2>
            <p><?= count($credits_en_cours) ?></p>
        </div>
        <div class="card">
            <h2>Crédits Terminés</h2>
            <p><?= count($credits_termines) ?></p>
        </div>
        <div class="card">
            <h2>Crédits En Retard</h2>
            <p><?= count($credits_en_retard) ?></p>
        </div>
        <div class="card">
            <h2>Crédits En Défaut</h2>
            <p><?= count($credits_en_defaut) ?></p>
        </div>
        <div class="card">
            <h2>Crédits En Révision</h2>
            <p><?= count($credits_en_revision) ?></p>
        </div>
        <div class="card">
            <h2>Crédits Suspendus</h2>
            <p><?= count($credits_suspendus) ?></p>
        </div>
    </div>

    <h2>Crédits En Cours</h2>
    <?php if (empty($credits_en_cours)): ?>
        <p>Aucun crédit en cours.</p>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>ID Crédit</th>
                    <th>Client</th>
                    <th>Montant</th>
                    <th>Date du Crédit</th>
                    <th>Durée (mois)</th>
                    <th>Taux d'intérêt</th>
                    <th>Statut</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($credits_en_cours as $credit): ?>
                    <tr>
                        <td><?= htmlspecialchars($credit['id']) ?></td>
                        <td><?= htmlspecialchars($credit['nom'] . " " . $credit['prenom']) ?></td>
                        <td><?= htmlspecialchars($credit['montant']) ?> TND</td>
                        <td><?= htmlspecialchars($credit['date_credit']) ?></td>
                        <td><?= htmlspecialchars($credit['duree']) ?></td>
                        <td><?= htmlspecialchars($credit['taux_interet']) ?>%</td>
                        <td><?= htmlspecialchars($credit['statut']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>

    <!-- Tableau des crédits terminés -->
    <h2>Crédits Terminés</h2>
    <?php if (empty($credits_termines)): ?>
        <p>Aucun crédit terminé.</p>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>ID Crédit</th>
                    <th>Client</th>
                    <th>Montant</th>
                    <th>Date du Crédit</th>
                    <th>Durée (mois)</th>
                    <th>Taux d'intérêt</th>
                    <th>Statut</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($credits_termines as $credit): ?>
                    <tr>
                        <td><?= htmlspecialchars($credit['id']) ?></td>
                        <td><?= htmlspecialchars($credit['nom'] . " " . $credit['prenom']) ?></td>
                        <td><?= htmlspecialchars($credit['montant']) ?> TND</td>
                        <td><?= htmlspecialchars($credit['date_credit']) ?></td>
                        <td><?= htmlspecialchars($credit['duree']) ?></td>
                        <td><?= htmlspecialchars($credit['taux_interet']) ?>%</td>
                        <td><?= htmlspecialchars($credit['statut']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>

    <h2>Crédits En Retard</h2>
    <?php if (empty($credits_en_retard)): ?>
        <p>Aucun crédit en retard.</p>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>ID Crédit</th>
                    <th>Client</th>
                    <th>Montant</th>
                    <th>Date du Crédit</th>
                    <th>Durée (mois)</th>
                    <th>Taux d'intérêt</th>
                    <th>Statut</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($credits_en_retard as $credit): ?>
                    <tr>
                        <td><?= htmlspecialchars($credit['id']) ?></td>
                        <td><?= htmlspecialchars($credit['nom'] . " " . $credit['prenom']) ?></td>
                        <td><?= htmlspecialchars($credit['montant']) ?> TND</td>
                        <td><?= htmlspecialchars($credit['date_credit']) ?></td>
                        <td><?= htmlspecialchars($credit['duree']) ?></td>
                        <td><?= htmlspecialchars($credit['taux_interet']) ?>%</td>
                        <td><?= htmlspecialchars($credit['statut']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>

    <h2>Crédits En Défaut</h2>
    <?php if (empty($credits_en_defaut)): ?>
        <p>Aucun crédit en défaut.</p>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>ID Crédit</th>
                    <th>Client</th>
                    <th>Montant</th>
                    <th>Date du Crédit</th>
                    <th>Durée (mois)</th>
                    <th>Taux d'intérêt</th>
                    <th>Statut</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($credits_en_defaut as $credit): ?>
                    <tr>
                        <td><?= htmlspecialchars($credit['id']) ?></td>
                        <td><?= htmlspecialchars($credit['nom'] . " " . $credit['prenom']) ?></td>
                        <td><?= htmlspecialchars($credit['montant']) ?> TND</td>
                        <td><?= htmlspecialchars($credit['date_credit']) ?></td>
                        <td><?= htmlspecialchars($credit['duree']) ?></td>
                        <td><?= htmlspecialchars($credit['taux_interet']) ?>%</td>
                        <td><?= htmlspecialchars($credit['statut']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>

    <h2>Crédits En Révision</h2>
    <?php if (empty($credits_en_revision)): ?>
        <p>Aucun crédit en révision.</p>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>ID Crédit</th>
                    <th>Client</th>
                    <th>Montant</th>
                    <th>Date du Crédit</th>
                    <th>Durée (mois)</th>
                    <th>Taux d'intérêt</th>
                    <th>Statut</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($credits_en_revision as $credit): ?>
                    <tr>
                        <td><?= htmlspecialchars($credit['id']) ?></td>
                        <td><?= htmlspecialchars($credit['nom'] . " " . $credit['prenom']) ?></td>
                        <td><?= htmlspecialchars($credit['montant']) ?> TND</td>
                        <td><?= htmlspecialchars($credit['date_credit']) ?></td>
                        <td><?= htmlspecialchars($credit['duree']) ?></td>
                        <td><?= htmlspecialchars($credit['taux_interet']) ?>%</td>
                        <td><?= htmlspecialchars($credit['statut']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>

    <h2>Crédits Suspendus</h2>
    <?php if (empty($credits_suspendus)): ?>
        <p>Aucun crédit suspendu.</p>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>ID Crédit</th>
                    <th>Client</th>
                    <th>Montant</th>
                    <th>Date du Crédit</th>
                    <th>Durée (mois)</th>
                    <th>Taux d'intérêt</th>
                    <th>Statut</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($credits_suspendus as $credit): ?>
                    <tr>
                        <td><?= htmlspecialchars($credit['id']) ?></td>
                        <td><?= htmlspecialchars($credit['nom'] . " " . $credit['prenom']) ?></td>
                        <td><?= htmlspecialchars($credit['montant']) ?> TND</td>
                        <td><?= htmlspecialchars($credit['date_credit']) ?></td>
                        <td><?= htmlspecialchars($credit['duree']) ?></td>
                        <td><?= htmlspecialchars($credit['taux_interet']) ?>%</td>
                        <td><?= htmlspecialchars($credit['statut']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</body>
</html>
