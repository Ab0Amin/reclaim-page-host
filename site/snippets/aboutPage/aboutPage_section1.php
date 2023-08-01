<?= css('../assets/css/aboutPageCss/aboutPage_section1.css') ?>


<section class="about_section1">
    <section class="about_section1">


        <?php if($image = $page->image('EllipseAboutSection1.png')): ?>
        <img class="elop_img_about_sec1" src="<?= $image->url() ?>" alt="">
        <?php endif ?>

        <div class="rectangle_about_sec1">

        </div>

        <!-- <div class="elp">
            <?php if($image = $page->image('EllipseAboutSection1.png')): ?>
            <img style=" width: 850px;
  height: 919px;" src="<?= $image->url() ?>" alt="">
            <?php endif ?>
        </div> -->

        <p class="about_sec1_title">
            <?= $page->section1_title() ?>
        </p>
        <p class="about_sec1_p1">
            <?= $page->section1_text1() ?>

        </p>
    </section>



</section>