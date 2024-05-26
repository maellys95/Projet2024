<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $type = $_POST['type'];
    $name = $_POST['product-name'];
    $description = $_POST['product-description'];
    $usage = $_POST['product-usage'];
    $price = $_POST['product-price'];

    $file = 'products.csv';

    $handle = fopen($file, 'a');
    fputcsv($handle, [$type, $name, $description, $usage, $price]);
    fclose($handle);

    if ($type == 'Nettoyant') {
        header('Location: nettoyants.php');
    } elseif ($type == 'Sérum') {
        header('Location: serums.php');
    } elseif ($type == 'Crème') {
        header('Location: cremes.php');
    } else {
        header('Location: index.php');
    }
    exit;
}
?>
