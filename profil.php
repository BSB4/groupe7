<?php 
session_start();

if (!isset($_SESSION['auth'])) {
    header('Location: Connexion.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Profil - Utilisateur</title>
</head>

<body>
    <?php include_once "./navbar.php"; ?>
    
    <div class="card container border p-3 bg-white shadow w-100" style="margin-top: 5%; padding: 0 !important; border-radius: 0 !important;">
        <h1 class="card-header d-flex align-items-center">
            <div class="profile-pic" style="width: 70px; height: 70px; border: 3px solid blue; border-radius: 50%; background: white; margin-right: 10px; overflow: hidden;">
                <img src="./profils/<?= htmlspecialchars($_SESSION['profil']) ?>" class="img-fluid" alt="profil" style="background: white;">
            </div>
            <span><?= htmlspecialchars($_SESSION['email']) ?></span>
        </h1>
        <div class="card-body">
            <h5 class="card-title">Nom : <?= htmlspecialchars($_SESSION['nom']) ?></h5>
            <h5 class="card-title">Prénom : <?= htmlspecialchars($_SESSION['prenom']) ?></h5>
            <h5 class="card-title">Rôle : <?= htmlspecialchars($_SESSION['role']) ?></h5>
        </div>
    </div>

    <script src="./bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
