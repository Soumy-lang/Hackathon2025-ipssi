<?php

require_once __DIR__ . "/../../db/db.php";

function getEmployes()
{
    global $pdo;

    try {
        $stmt = $pdo->query("SELECT * FROM Employes");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "<p style='color: red;'>Erreur lors de la récupération des employés : " . $e->getMessage() . "</p>";
        return [];
    }
}
?>
