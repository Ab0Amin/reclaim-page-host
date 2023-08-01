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
            <a class='org' href="<?= $site->url() ?>">
                <h1><?= $site->title() ?></h1>
            </a>
            <a class='org' href="<?= $site->url() ?>">
                <p class='logoText1'>ecofeminist</p>
                <p class='logoText2'>alliance</p>
            </a>
            <img src="<?= $page->image('reclaimLogo.png')->url() ?>" alt="Logo" class="logo-image">
        </div>

        <nav class='menu'>
            <ul class='menu-links'>
                <?php foreach ($site->children()->listed() as $item): ?>
                <li><a class='header-button' href="<?= $item->url() ?> "><?= $item->title() ?></a></li>
                <?php endforeach ?>
            </ul>
        </nav>
    </header>
    <?= $page->text() ?>



    <?php snippet('aboutPage/aboutPage_section1') ?>
    <?php snippet('aboutPage/aboutPage_section2') ?>

</body>

</html>