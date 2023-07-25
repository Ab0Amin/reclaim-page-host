<?= css('../assets/css/HomePage_section1.css') ?>

<div class="section-one">
        <h1 class="main-title"><?= $page->title() ?></h1>
        <img class="reclaim-logo" src="<?= $page->image('reclaim-logo.png')->url() ?>" alt="Reclaim Logo">
        <div class="paragraph">
            <p><?= $page->text() ?></p>    
        </div>
        <button class="learn-more">LEARN MORE</button>
</div>  