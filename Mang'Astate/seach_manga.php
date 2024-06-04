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
    require 'vendor/autoload.php';
    use GuzzleHttp\Client;

    $client = new Client(['base_uri' => 'https://graphql.anilist.co']);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $search = $_POST['search'];

        $query = '
        query ($search: String) {
            Media (search: $search, type: MANGA) {
                id
                title {
                    romaji
                    english
                    native
                }
                description
                coverImage {
                    extraLarge
                    large
                    medium
                    color
                }
                startDate {
                    year
                    month
                    day
                }
                endDate {
                    year
                    month
                    day
                }
                genres
                authors {
                    edges {
                        node {
                            name {
                                full
                            }
                        }
                    }
                }
            }
        }
        ';

        $variables = ['search' => $search];

        $response = $client->post('', [
            'json' => [
                'query' => $query,
                'variables' => $variables,
            ]
        ]);

        $data = json_decode($response->getBody(), true);
        $manga = $data['data']['Media'];
    }
    ?>
    <script>
        function addToWishlist(id) {
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'add_to_wishlist.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.send('id=' + id);
    
            xhr.onload = function() {
                if (xhr.status === 200) {
                    alert('Manga ajouté à la liste de souhaits');
                } else {
                    alert('Une erreur est survenue');
                }
            };
        }
    
        function addToCollection(id) {
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'add_to_collection.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.send('id=' + id);
    
            xhr.onload = function() {
                if (xhr.status === 200) {
                    alert('Manga ajouté à la collection');
                } else {
                    alert('Une erreur est survenue');
                }
            };
        }
    </script>