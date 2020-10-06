<?
	get_header();
?>

<section class="big-hero">
    <div class="big-hero__image">
    </div>
    <div class="big-hero__image2">
    </div>
    <div class="big-hero__content">
        <h1>Strony internetowe dla Ciebie
            <? the_field('big_hero_heading1') ?>
        </h1>
        <p>Stwórzmy wspólnie stronę dla twojego biznesu.</p>
        <a class="btn btn--big" href="page-kontakt.htm">Porozmawiajmy</a>
    </div>
</section>

<section class="teasers-section">
    <div class="text-teaser">
        <h2 class="text-teaser__heading-small">Z Moją Pomocą</h2>
        <h1 class="text-teaser__heading-big">Stworzysz idealną stronę</h1>
        <h1 class="text-teaser__heading-big">dla <strong>twojego</strong> biznesu.</h1>
    </div>

    <div class="teasers">
        <a href="page-strony.htm" class="teaser">
            <div class="teaser__label">
                <i class="fa fa-id-card-o fa-2x teaser__label__icon" aria-hidden="true"></i>
                <h3 class="teaser__label__heading">Strony<br />WWW</h3>
            </div>
            <div class="teaser__description">
                <h2>Strony internetowe</h2>
                <p>
                    Strony wizytówki a także bardziej rozbudowane - zależnie od <strong>twoich</strong>
                    potrzeb.
                </p>
                <p>
                    Oparte o <strong>Wordpress</strong> - zbudowane z użyciem gotowego szablonu lub
                    zaprojektowanego
                    specjalnie dla Ciebie.
                </p>
            </div>
        </a>

        <a href="page-sklepy.htm" class="teaser">
            <div class="teaser__label">
                <i class="fa fa-shopping-basket fa-2x teaser__label__icon" aria-hidden="true"></i>
                <h3 class="teaser__label__heading">Sklepy internetowe</h3>
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
                <h3 class="teaser__label__heading">Inne usługi</h3>
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
        </a>
    </div>

</section>

<div class="programmer-teaser">
    <h1 class="programmer-teaser__heading">Krótko o mnie:</h1>
    <ul class="programmer-teaser__list">
        <li>
            <img src="img/1.svg">
            <p>Absolwent studiów <strong>informatycznych</strong>.</p>
        </li>
        <li>
            <img src="img/2.svg">
            <p>Ponad <strong>10</strong> lat doświadczenia w zawodzie.</p>
        </li>
        <li><img src="img/3.svg">
            <p><strong>Indywidualne</strong> podejście do klienta.
            </p>
        </li>

    </ul>
    <a class="btn btn--blue" href="#">Dowiedz się wiecej</a>
</div>

<? get_template_part('template-parts/contact-section'); ?>

<?
	get_footer();
?>