<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un client</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Ajouter un client</h1>
    <form action="process_client.php" method="POST">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" required><br>

        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" required><br>

        <label for="email">Email :</label>
        <input type="email" name="email" required><br>

        <label for="telephone">Téléphone :</label>
        <input type="text" name="telephone" required><br>

        <input type="submit" value="Ajouter le client">
    </form>
</body>
</html>
