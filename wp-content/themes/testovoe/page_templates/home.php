<?php
/*
Template Name: Home page
*/

get_header();

$about__title = get_field('about__title');
$about__mini_description = get_field('about__mini_description');
$about__mini_image_mobile = get_field('about__mini_image_mobile');
$about__mini_image_pc = get_field('about__mini_image_pc') ?: $about__mini_image_mobile;
$about__big_description = get_field('about__big_description');
$about__big_image_mobile = get_field('about__big_image_mobile');
$about__big_image_pc = get_field('about__big_image_pc') ?: $about__big_image_mobile;
$about__slider = get_field('about__slider');
?>
    <main>
        <section class="about">
            <div class="container">
                <h1 class="about__title"><?= $about__title; ?></h1>

                <div class="about__row">
                    <div class="about-item about-item--mini">
                        <div class="about-item__description text--bigger">
                            <p><?= $about__mini_description; ?></p>
                        </div>

                        <div class="about-item__img">
                            <picture>
                                <source
                                    media="(max-width: 575px)"
                                    srcset="<?= wp_get_attachment_image_srcset($about__mini_image_mobile, 'full'); ?>"
                                    sizes="<?= wp_get_attachment_image_sizes($about__mini_image_mobile, 'full'); ?>">

                                <source
                                    media="(min-width: 576px)"
                                    srcset="<?= wp_get_attachment_image_srcset($about__mini_image_pc, 'full'); ?>"
                                    sizes="<?= wp_get_attachment_image_sizes($about__mini_image_pc, 'full'); ?>">

                                <?= wp_get_attachment_image($about__mini_image_mobile, 'full', false, ['class' => 'img img--cover']); ?>
                            </picture>
                        </div>
                    </div>

                    <div class="about-item about-item--big">
                        <div class="about-item__description content"><?= $about__big_description; ?></div>

                        <div class="about-item__img">
                            <picture>
                                <source
                                    media="(max-width: 575px)"
                                    srcset="<?= wp_get_attachment_image_srcset($about__big_image_mobile, 'full'); ?>"
                                    sizes="<?= wp_get_attachment_image_sizes($about__big_image_mobile, 'full'); ?>">

                                <source
                                    media="(min-width: 576px)"
                                    srcset="<?= wp_get_attachment_image_srcset($about__big_image_pc, 'full'); ?>"
                                    sizes="<?= wp_get_attachment_image_sizes($about__big_image_pc, 'full'); ?>">

                                <?= wp_get_attachment_image($about__big_image_mobile, 'full', false, ['class' => 'img img--cover']); ?>
                            </picture>
                        </div>
                    </div>
                </div>
            </div>

            <?php
                if (!empty($about__slider)) {
                    ?>
                    <div class="swiper about-slider">
                        <div class="swiper-wrapper">
                            <?php
                                foreach ($about__slider as $item) {
                                    ?>
                                    <div class="swiper-slide">
                                        <div class="about-slide">
                                            <?= wp_get_attachment_image($item['image_id'], 'full'); ?>
                                        </div>
                                    </div>
                                    <?php
                                }
                            ?>
                        </div>
                    </div>

                    <div class="about-slider__bottom container">
                        <div class="swiper-scrollbar"></div>

                        <div class="about-slider__navigation">
                            <div class="button button-arrow button-arrow--prev"></div>

                            <div class="button button-arrow button-arrow--next"></div>
                        </div>
                    </div>
                    <?php
                }
            ?>
        </section>
    </main>
<?php
get_footer();
