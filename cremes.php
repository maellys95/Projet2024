<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crèmes Skincare</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Crèmes Skincare</h1>
        <nav>
            <a href="index.php">Accueil</a>
            <a href="nettoyants.php">Nettoyants</a>
            <a href="serums.php">Sérums</a>
            <a href="cremes.php">Crèmes</a>
            <a href="conseils.php">Conseils</a>
            <a href="profil_utilisateur.php">Profil</a>
        </nav>
    </header>
    <main>
        <section class="product-list">
            <h2>Liste des Crèmes</h2>
            <?php
            // Définir le fichier CSV
            $file = 'products.csv';

            // Ouvrir le fichier en lecture
            if (($handle = fopen($file, 'r')) !== FALSE) {
                // Lire chaque ligne du fichier
                while (($data = fgetcsv($handle, 1000, ',')) !== FALSE) {
                    // Vérifier si le type est "Crème"
                    if ($data[0] == 'Crème') {
                        echo '<article class="product">';
                        echo '<h3>' . htmlspecialchars($data[1]) . '</h3>';
                        echo '<img src="creme.jpg" alt="' . htmlspecialchars($data[1]) . '">';
                        echo '<p>Description: ' . htmlspecialchars($data[2]) . '</p>';
                        echo '<p>Utilisation: ' . htmlspecialchars($data[3]) . '</p>';
                        echo '<p>Prix: ' . htmlspecialchars($data[4]) . '€</p>';
                        echo '</article>';
                    }
                }
                // Fermer le fichier
                fclose($handle);
            } else {
                echo "Aucun produit trouvé.";
            }
            ?>
        </section>
        <section class="add-product">
            <h2>Ajouter une Crème</h2>
            <form action="add_product.php" method="post">
                <input type="hidden" name="type" value="Crème">
                <label for="product-name">Nom du produit:</label>
                <input type="text" id="product-name" name="product-name" required>
                <label for="product-description">Description:</label>
                <textarea id="product-description" name="product-description" required></textarea>
                <label for="product-usage">Utilisation:</label>
                <textarea id="product-usage" name="product-usage" required></textarea>
                <label for="product-price">Prix:</label>
                <input type="text" id="product-price" name="product-price" required>
                <button type="submit">Ajouter</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Skincare Tips</p>
    </footer>
</body>
</html>
