<?php
// Vérifie si la méthode de requête est POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupère les données soumises par le formulaire
    $title = $_POST['title'] ?? '';
    $category = $_POST['category'] ?? '';
    $instructions = $_POST['instructions'] ?? '';

    // Vérifie que tous les champs sont remplis
    if (!empty($title) && !empty($category) && !empty($instructions)) {
        // Ouvre le fichier CSV en mode ajout
        $file = fopen('tips.csv', 'a');

        // Vérifie si l'ouverture du fichier a réussi
        if ($file !== false) {
            // Écrit les données dans le fichier CSV
            fputcsv($file, [$title, $category, $instructions, 'Aucun fichier choisi']);

            // Ferme le fichier
            fclose($file);

            // Redirige l'utilisateur vers la page des conseils après soumission
            header('Location: conseils.html');
            exit;
        } else {
            // En cas d'échec d'ouverture du fichier, affiche un message d'erreur
            echo "Erreur lors de l'ouverture du fichier.";
        }
    } else {
        // Si tous les champs ne sont pas remplis, affiche un message d'erreur
        echo "Tous les champs sont obligatoires.";
    }
} else {
    // Si la méthode de requête n'est pas POST, affiche un message d'erreur
    echo "Méthode de requête non autorisée.";
}
?>
