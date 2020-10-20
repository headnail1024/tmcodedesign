<?
	get_header();
?>

<section class="big-hero">
    <div class="big-hero__image">
    </div>
    <div class="big-hero__image2">
    </div>
    <div class="big-hero__content">
        <h1><?php echo get_field('big_hero')['title'] ?></h1>
        <p><?php echo get_field('big_hero')['subtitle'] ?></p>
        <a class="btn btn--big" href="page-kontakt.htm"><?php echo get_field('big_hero')['button_text'] ?></a>
    </div>
</section>

<section class="teasers-section">
    <div class="text-teaser">
        <h2 class="text-teaser__heading-small"><?php echo get_field('short_services_info')['short_info_smaller_text'] ?></h2>
        <h1 class="text-teaser__heading-big"><?php echo get_field('short_services_info')['short_info_bigger_text1'] ?>
            <h1 class="text-teaser__heading-big"><?php echo get_field('short_services_info')['short_info_bigger_text2'] ?>
    </div>

    <div class="teasers">
        <a href="<?php echo get_field('short_services_info')['usluga_1']['link'] ?>" class="teaser">
            <div class="teaser__label">
                <i class="fa <?php echo get_field('short_services_info')['usluga_1']['icon'] ?> fa-2x teaser__label__icon" aria-hidden="true"></i>
            </div>
            <div class="teaser__description">
                <h2><?php echo get_field('short_services_info')['usluga_1']['title'] ?></h2>
                <?php echo get_field('short_services_info')['usluga_1']['description'] ?>
            </div>
        </a>

        <a href="<?php echo get_field('short_services_info')['usluga_2']['link'] ?>" class="teaser">
            <div class="teaser__label">
                <i class="fa <?php echo get_field('short_services_info')['usluga_2']['icon'] ?> fa-2x teaser__label__icon" aria-hidden="true"></i>
            </div>
            <div class="teaser__description">
                <h2><?php echo get_field('short_services_info')['usluga_2']['title'] ?></h2>
                <?php echo get_field('short_services_info')['usluga_2']['description'] ?>
            </div>
        </a>

        <a href="<?php echo get_field('short_services_info')['usluga_3']['link'] ?>" class="teaser">
            <div class="teaser__label">
                <i class="fa <?php echo get_field('short_services_info')['usluga_3']['icon'] ?> fa-2x teaser__label__icon" aria-hidden="true"></i>
            </div>
            <div class="teaser__description">
                <h2><?php echo get_field('short_services_info')['usluga_3']['title'] ?></h2>
                <?php echo get_field('short_services_info')['usluga_3']['description'] ?>
            </div>
        </a>


        <!-- 
        <a href="page-sklepy.htm" class="teaser">
            <div class="teaser__label">
                <i class="fa fa-shopping-basket fa-2x teaser__label__icon" aria-hidden="true"></i>
            </div>
            <div class="teaser__description">
                <h2>Sklepy internetowe</h2>
                <p>Twoja własna platforma do sprzedaży w internecie.</p>
                <p>Małe i średnie sklepy oparte o <strong>WooComerce</strong> i <strong>Prestashop</strong>.
                    Zbudowane z użyciem gotowego szablonu lub zaprojektowane dla Ciebie.</p>
            </div>
        </a>

        <a href="page-inne.htm" class="teaser">
            <div class="teaser__label">
                <i class="fa fa-cogs fa-2x teaser__label__icon" aria-hidden="true"></i>
            </div>
            <div class="teaser__description">
                <h2>Inne usługi</h2>
                <p>
                    Optymalizacja działania stron, SEO, wprowadzanie zmian i poprawek na istniejących stronach.
                </p>
                <p>
                    Prace programistyczne niezwiązane ze stronami internetowymi.
                </p>
            </div>
        </a> -->
    </div>

</section>

<div class="programmer-teaser">
    <h1 class="programmer-teaser__heading"><?php echo get_field('about_me_section')['title'] ?></h1>
    <ul class="programmer-teaser__list">
        <li>
            <img src="<?php echo get_field('about_me_section')['cecha1']['image'] ?>">
            <p><?php echo get_field('about_me_section')['cecha1']['text'] ?></p>
        </li>
        <li>
            <img src="<?php echo get_field('about_me_section')['cecha2']['image'] ?>">
            <p><?php echo get_field('about_me_section')['cecha2']['text'] ?></p>
        </li>
        <li>
            <img src="<?php echo get_field('about_me_section')['cecha3']['image'] ?>">
            <p><?php echo get_field('about_me_section')['cecha3']['text'] ?></p>
        </li>

    </ul>
    <a class="btn btn--blue" href="<?php echo get_field('about_me_section')['button_link'] ?>">
        <?php echo get_field('about_me_section')['button_text'] ?>
    </a>
</div>

<? get_template_part('template-parts/contact-section'); ?>

<?
	get_footer();
?>