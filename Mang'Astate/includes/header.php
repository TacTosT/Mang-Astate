<!DOCTYPE html>
<html>
<head>
    <title><?php echo $pageTitle; ?></title>
    <style>
        /* Code CSS pour le style du header */
        header {
            background-color: #f2f2f2;
            padding: 20px;
            text-align: center;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        nav ul li {
            margin: 0 10px;
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Mangas</a></li>
                <li><a href="#">collection</a></li>
                <li><a href="#">A propos</a></li>
            </ul>
        </nav>
    </header>
