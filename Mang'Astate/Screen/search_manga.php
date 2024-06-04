<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Recherche de Manga</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .search-form { margin: 15px; }
        .search-form input[type="text"] { padding: 5px; width: 300px; }
        .search-form button { padding: 5px 15px; margin-left: 10px; }
        .manga { margin: 15px; }
        .manga img { width: 200px; }
        .manga h3 { margin: 0; }
        .manga p { margin: 0 0 15px; }
        .manga button { padding: 5px 15px; margin-right: 10px; }
    </style>
</head>
<body>
    <h1>Recherche de Manga</h1>

    <form class="search-form" method="POST">
        <input type="text" name="search" placeholder="Recherchez un manga">
        <button type="submit">Recherche</button>
    </form>

    <?php
    // search_manga.php
    $pdo = new PDO('mysql:host=localhost;dbname=manga_db', 'username', 'password');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $search = $_POST['search'];

        $stmt = $pdo->prepare('
            SELECT * FROM manga
            WHERE title LIKE :search
        ');
        $stmt->execute(['search' => "%$search%"]);

        $mangas = $stmt->fetchAll();
    }
    ?>

    <?php foreach ($mangas as $manga): ?>
        <div class="manga">
            <img src="<?= $manga['cover_image'] ?>" alt="<?= $manga['title'] ?>">
            <h3><?= $manga['title'] ?></h3>
            <p><?= $manga['description'] ?></p>
            <button onclick="addToWishlist(<?= $manga['id'] ?>)">Ajouter à la liste de souhaits</button>
            <button onclick="addToCollection(<?= $manga['id'] ?>)">Ajouter à la collection</button>
        </div>
    <?php endforeach; ?>