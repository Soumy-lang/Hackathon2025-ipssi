<!DOCTYPE html>
<html lang="fr">
<?php include __DIR__ . "/templates/head.php"; ?>
<body>
    <div class="container">
        <h1>404</h1>
        <p>Oups ! La page que vous cherchez est introuvable.</p>
        <div class="illustration">
            <img src="../../media/assets/images/404-illustration.png" alt="Illustration page 404" style="max-width: 100%; height: auto;">
        </div>
        <a href="/" class="btn">Retourner au site</a>
    </div>
</body>
</html>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .container {
        text-align: center;
    }
    h1 {
        font-size: 4em;
        color: #333;
    }
    p {
        font-size: 1.2em;
        color: #555;
        margin: 10px 0 20px;
    }
    .btn {
        display: inline-block;
        padding: 10px 20px;
        font-size: 1em;
        text-decoration: none;
        color: #fff;
        background-color: #007BFF;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }
    .btn:hover {
        background-color: #0056b3;
    }
    .illustration {
        margin: 20px 0;
    }
</style>