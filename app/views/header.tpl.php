<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="<?= $router->generate('home'); ?>/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <title>Pokedex</title>
</head>
<body>
    <header>
        <h1>Pokédex</h1>
        <nav>
            <a href="<?= $router->generate('home'); ?>">Liste</a>
            <a href="<?= $router->generate('type'); ?>">Types</a>
        </nav>
    </header>