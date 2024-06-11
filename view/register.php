<?php include __DIR__ . '/header.php'; ?>

<section class="back" style="margin:0; background: radial-gradient(circle, #ff8c00, #ff0080, #800080);">
    <div class="container" style="padding:20%; padding-top:5%; padding-bottom: 5%;"><br><br>
        <h2>Inscription</h2>
        <form method="post" action="../gestion/register.php" style="padding-top: 10%;
    padding-bottom: 20%;">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nom</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="firstname" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="firstname" name="firstname" required>
            </div>
            <button type="submit" class="btn btn-primary" style="background-color:#212529; border:currentColor">S'inscrire</button>
        </form>
    </div>
</section>
<?php include __DIR__ . '/footer.php'; ?>