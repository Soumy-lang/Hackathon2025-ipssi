<?php

// Exemple d'utilisation des valeurs recuperer en backend
require_once __DIR__ . "/../core/Dashboard/Employe.php";
$employes = getEmployes();
?>

<!DOCTYPE html>
<html lang="fr">

<?php include __DIR__ . "/templates/head.php"; ?>
<body>
<?php include __DIR__ . "/templates/header.php"; ?>
    <h2>Hello la team !</h2>
</body>
<?php include __DIR__ . "/templates/footer.php"; ?>
</html>
