<?= css('../assets/css/HomePage_Section5.css') ?>




<section class="HM_section5">


    <div class="HM_sec5_content">

        <p class="HM_sec5_p1">
            <?= $page->section5_text1() ?>

        </p>
        <div class="HM_sec5_p_container">
            <p>
                <?= $page->section5_text2() ?>

            </p>
            <p>
                <?= $page->section5_text3() ?>

            </p>

        </div>

        <a class="HM_sec5_writeBtn_a" href="<?= $kirby->url('') ?>/contact">

            <button class=" HM_sec5_writeBtn">
                <?=  $page->section5_text4() ?>

            </button>
        </a>
    </div>


</section>

<!-- test -->