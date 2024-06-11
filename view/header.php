<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortcut icon" href="../images/fav-icon.png" type="image/png">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
        <a class="navbar-brand" href="../gestion/index.php"><img src="../images/logoEcommerce.png" alt="logo e-commerce" width="180"></a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../gestion/index.php">Produits</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../gestion/cart.php">Panier</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../gestion/orders.php">Commandes</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <?php if (isset($_SESSION['user'])) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="../gestion/logout.php">Déconnexion</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="../gestion/login.php">Connexion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../gestion/register.php">S'inscrire</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>