<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $site->title() ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;700&display=swap" rel="stylesheet">
    <?= css('../assets/css/index.css') ?>
</head>

<body>
    <header class='header'>
        <div class='logo-div'>
            <a class='orgHome' href="<?= $site->url() ?>">
                <h1><?= $site->title() ?></h1>
            </a>
            <a class='orgHome' href="<?= $site->url() ?>">
                <p>ecofeminist alliance</p>
            </a>
        </div>
        <nav class='menu'>
            <ul class='menu-links'>
                <?php foreach ($site->children()->listed() as $item): ?>
                <li><a class='header-button' href="<?= $item->url() ?> "><?= $item->title() ?></a></li>
                <?php endforeach ?>
            </ul>
        </nav>
    </header>
    <h1><?= $page->title() ?></h1>
    <?= $page->text() ?>

    <?php snippet('HomePage_section4') ?>

</body>

</html>