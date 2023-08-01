<section class="HM_section4">


    <div class="HM_4_content">

        <p class='HM_4_p1'>
            <?= $page->section4_text1() ?>

        </p>
        <p class='HM_4_p2'>

            <?= $page->section4_text2() ?>
            <!-- We are eight friends brought together by our shared vision of an ecofeminist world. -->
        </p>




        <img class="HM_4_teamImg" src="<?= url('home/HomePage_section4/reclaim_team.png') ?>" alt="">
        <img class="HM_4_ImgBG" src="<?= url('home/HomePage_section4/Circle.svg') ?>" alt="">

        <a class="HM_4_learna" href="<?= $kirby->url('') ?>/about#learn-more">
            <button class="HM_4_learnBtn">
                <?= $page->section4_text3() ?>
                <!-- LEARN MORE -->
            </button>
        </a>
    </div>
</section>