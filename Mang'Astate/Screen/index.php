<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mang'Astate - Accueil</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .navbar { background-color: #333; color: #fff; padding: 15px; }
        .navbar a { color: #fff; margin: 0 10px; text-decoration: none; }
        .manga { margin: 15px; }
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
        <h2>Bienvenue sur Mang'Astate, votre collection de manga en ligne!</h2>
    </header>
    <main>
        <div class="manga">
            <?php
            // index.php
            require 'db_connection.php';
            
            $sql = "SELECT * FROM your_table ORDER BY your_date_column DESC LIMIT 5";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            
            $mangas = $stmt->fetchAll();
            
            foreach ($mangas as $manga) {
                echo "<h3>" . $manga['title'] . "</h3>";
                echo "<p>" . $manga['description'] . "</p>";
                echo "<hr>";
            }
            ?>
        </div>
    </main>
</body>
</html>