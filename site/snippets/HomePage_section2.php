<section class="section2">

    <div class="video-background">

        <video autoplay loop muted>
            <source src="<?= url('home/media/Festival.mp4') ?>" type="video/mp4">
        </video>


    </div>
    <div class="content">
        <div></div>
        <p class="p1"> <?= $page->section2_text1() ?>
        </p>
        <p class="p2"> <?= $page-> section2_text2()?></p>
        <p class="p3"><?= $page-> section2_text3()?><span><?= $page-> section2_text4()?></span></p>

    </div>
    <button class="learnBtn"><?= $page-> section2_text5()?></button>

    </div>
</section>

<!-- test -->