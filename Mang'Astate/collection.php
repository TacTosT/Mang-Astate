<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mang'Astate - Ma Collection</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .navbar { background-color: #333; color: #fff; padding: 15px; }
        .navbar a { color: #fff; margin: 0 10px; text-decoration: none; }
        .manga { margin: 15px; }
        table { width: 100%; border-collapse: collapse; }
        table, th, td { border: 1px solid #333; }
        th, td { padding: 15px; text-align: left; }
        img { width: 100px; }
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
        <h2>Bienvenue sur votre collection de Mang'Astate!</h2>
    </header>
    <?php
    // collection.php
    require 'db_connection.php';
    
    $sql = "SELECT * FROM your_table";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    
    $mangas = $stmt->fetchAll();
    ?>
    
    <main>
        <div class="manga">
            <table>
                <tr>
                    <th>Image</th>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>Nombre de tomes possédés / total</th>
                    <th>Prix</th>
                </tr>
                <?php foreach ($mangas as $manga): ?>
                <tr>
                    <td><img src="<?= $manga['image'] ?>" alt="<?= $manga['title'] ?>"></td>
                    <td><?= $manga['title'] ?></td>
                    <td><?= $manga['author'] ?></td>
                    <td><?= $manga['owned_volumes'] ?> / <?= $manga['total_volumes'] ?></td>
                    <td><?= $manga['price'] ?>€</td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </main>
    
    <!-- Reste du code HTML -->
</body>
</html>