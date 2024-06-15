<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mang'Astate - Ma Wishlist</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .navbar { background-color: #333; color: #fff; padding: 15px; }
        .navbar a { color: #fff; margin: 0 10px; text-decoration: none; }
        .manga { display: flex; flex-wrap: wrap; justify-content: space-between; margin: 15px; }
        .manga-item { width: calc(33.33% - 10px); margin-bottom: 20px; }
        .manga-item img { width: 100%; }
        .manga-item h3, .manga-item p { margin: 0; }
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
        <h2>Bienvenue sur votre liste de souhaits de Mang'Astate!</h2>
    </header>
    <main>
        <?php
        // wishlist.php
        require 'db_connection.php';
        
        $sql = "SELECT * FROM your_wishlist_table";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        
        $mangas = $stmt->fetchAll();
        ?>
        
        <div class="manga">
            <?php foreach ($mangas as $manga): ?>
            <div class="manga-item">
                <img src="<?= $manga['image'] ?>" alt="<?= $manga['title'] ?>" style="width: 100px;">
                <h3><?= $manga['title'] ?></h3>
                <p><?= $manga['author'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </main>
</body>
</html>