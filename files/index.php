<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="theme-color" content="#2f8cd0">
    <title>tmCODE - Strony internetowe dla Ciebie</title>
    <link rel="stylesheet" href="bundled/style.css">
    <link href="//fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Source+Sans+Pro:wght@400;700&display=swap"
        rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <div class="bpinfo">
        <p></p>
    </div>
    <section class="navigation">
        <div class="navigation__narrow_container">

            <div class="logo">
                <a href="index.htm">
                    <h3 aria-hidden="true">tm<strong>CODE</strong></h3>
                </a>
            </div>
            <nav class="navbar">
                <ul>
                    <li><a class="link-active" href="index.htm">Strona głowna</a></li>
                    <li><a href="page-strony.htm">Strony internetowe</a></li>
                    <li><a href="page-sklepy.htm">Sklepy internetowe</a></li>
                    <li><a href="page-inne.htm">Usługi programistyczne</a></li>
                    <li><a href="page-omnie.htm">O mnie</a></li>
                    <li><a href="page-kontakt.htm">Kontakt</a></li>
                </ul>
            </nav>

            <div class="burger-container">
                <i class="fa fa-bars burger" aria-hidden="true" title="Toggle navigation"></i>
            </div>
        </div>
    </section>

    <section class="big-hero">
        <div class="big-hero__image">
        </div>
        <div class="big-hero__image2">
        </div>
        <div class="big-hero__content">
            <h1>Strony internetowe dla Ciebie</h1>
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

    <div class="text-teaser">
        <h2 class="text-teaser__heading-small">Zadzwoń lub napisz</h2>
        <h1 class="text-teaser__heading-big">Porozmawiamy o tym jak</h1>
        <h1 class="text-teaser__heading-big">zrealizować <strong>twój</strong> pomysł.</h1>
    </div>

    <div class="contact-section">
        <form class="contact-form">
            <label for="contact-form-name">Imię</label>
            <input type="text" name="contact-form-name" id="contact-form-name" />

            <label for="contact-form-email">Email</label>
            <input type="email" inputmode="email" name="contact-form-email" id="contact-form-email" />

            <label for="contact-form-message">Wiadomość</label>
            <textarea name="contact-form-message" id="contact-form-message"></textarea>

            <a class="btn btn--blue" href="mailto:tomasz.michalski@tmcode.pl">Wyślij</a>
        </form>

        <div class="contact-info">
            <div class="contact-detail">
                <p class="contact-detail-type">Telefon</p>
                <p>+48 600 100 100</p>
                <div class="buttons-container">
                    <a class="btn btn--blue" href="tel:+48600123321">
                        <i class="fa fa-phone" aria-hidden="true"></i> Zadzwoń</a>
                </div>
            </div>

            <div class="contact-detail">
                <p class="contact-detail-type">Email</p>
                <p>tmichalski@tmcode.pl</p>

                <div class="buttons-container">
                    <a class="btn btn--blue" href="mailto:tmichalski@tmcode.pl">
                        <i class="fa fa-envelope" aria-hidden="true"></i> Napisz</a>
                </div>
            </div>

            <div class="contact-detail">
                <p class="contact-detail-type">Skype</p>
                <p>tomekmich4@wp.pl</p>
                <div class="buttons-container">
                    <a class="btn btn--blue" href="skype:live:.cid.a67442577705f5b2?chat">
                        <i class="fa fa-skype" aria-hidden="true"></i> Połącz</a>
                </div>
            </div>

            <div class="contact-detail">
                <p class="contact-detail-type">Whatsapp</p>
                <p>48 694 929 745</p>
                <div class="buttons-container">
                    <a class="btn btn--blue" href="https://wa.me/48694929745">
                        <i class="fa fa-whatsapp" aria-hidden="true"></i> Połącz</a>
                </div>
            </div>


        </div>
    </div>

    <footer>
        <div class="footer-grid">
            <div class="footer-grid__item item-logo">
                <h3>tm<strong>CODE</strong></h3>
            </div>

            <div class="footer-grid__item item-links">
                <a class="footer-grid__item__link" href="index.htm">Strona głowna</a>
                <a class="footer-grid__item__link" href="page-strony.htm">Strony internetowe</a>
                <a class="footer-grid__item__link" href="page-sklepy.htm">Sklepy internetowe</a>
                <a class="footer-grid__item__link" href="page-inne.htm">Usługi programistyczne</a>
                <a class="footer-grid__item__link" href="page-omnie.htm">O mnie</a>
                <a class="footer-grid__item__link" href="page-kontakt.htm">Kontakt</a>
            </div>

            <div class="footer-grid__item item-address">
                <p>
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    600100100</p>
                <p><i class="fa fa-envelope-o" aria-hidden="true"></i>
                    tomasz-michalski@tmcode.pl</p>
            </div>

        </div>
    </footer>

    <script src="js/scripts-bundled.js">
    </script>
</body>

</html>