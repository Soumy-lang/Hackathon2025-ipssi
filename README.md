# Hackathon Php,Js,Test Unitaire

## Gestion du Planning des employés d'une société de BTP

Ce projet a pour objectif de proposer une solution permettant d’optimiser et de fiabiliser l'affectation des salariés sur les chantiers. Il vise à éliminer les erreurs de planification tout en facilitant le travail administratif afin de garantir une meilleure gestion RH sur le terrain.

### Pré-requis
* Connaissance en HTML, CSS, PHP, JS
* Avoir un éditeur avec un terminal intégré

### Démarrage
* Se placer dans le répertoire de travail : ``cd chemin/vers/le/projet``
* Lancer en local :  ``php -S localhost:8080``

### Techno utilisés 
* HTML
* CSS/Boostrap
* JS
* PHP

### Fichier de connexion à la base de données

Créer le fichier ``db/db.php`` et insérez le contenu suivant en remplaçant les identifiants par les vôtres
``` php

$host = 'localhost';
$db = 'agentdb';
$user = 'xxx';
$pass = 'xxx';
$port = 3306;

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

```

### Auteurs
* **Soumaya GAMBO MAGAGI** _alias_ [@Soumy-lang](https://github.com/Soumy-lang)
* **Jade COTTIN** _alias_ [@Koruji](https://github.com/Koruji)
* **Romain LIÉNARD** _alias_ [@r0om1ain](https://github.com/r0om1ain)
* **Bechir HASSABELKERIM** _alias_ [@kingBechir](https://github.com/kingBechir)

Lisez la liste des [contributeurs](https://github.com/Soumy-lang/Hackathon2025-ipssi/graphs/contributors) pour voir la contribution des membres du groupe !
