<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mang'Astate - Contact</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .navbar { background-color: #333; color: #fff; padding: 15px; }
        .navbar a { color: #fff; margin: 0 10px; text-decoration: none; }
        .content { margin: 15px; }
        form { margin-top: 20px; }
        form input, form textarea { display: block; margin-bottom: 10px; }
        form button { background-color: #333; color: #fff; padding: 10px 20px; border: none; }
    </style>
</head>
<body>
    <div class="navbar">
        <h1>Mang'Astate</h1>
        <nav>
            <a href="index.php">Accueil</a>
            <a href="collection.php">Ma Collection</a>
            <a href="wishlist.php">Ma Wishlist</a>
            <a href="about.php">À Propos</a>
            <a href="contact.php">Contact</a>
        </nav>
    </div>
    <header>
        <h2>Contactez-nous</h2>
    </header>
    <main>
        <div class="content">
            <form action="contact.php" method="post">
                <input type="text" name="name" placeholder="Votre nom" required>
                <input type="email" name="email" placeholder="Votre email" required>
                <textarea name="message" placeholder="Votre message" required></textarea>
                <button type="submit">Envoyer</button>
            </form>
        </div>
    </main>
</body>
</html>