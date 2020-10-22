<?
	get_header();
?>
<section class="hero">
    <div class="hero__image hero__image--strony"></div>
    <div class="hero__image2"></div>
    <div class="hero__heading-box">
        <h1 class="hero__heading"><?php echo get_field('page_title') ?></h1>
    </div>
</section>

<?
    renderBSections($post->ID);
?>

<!-- <div class="big-section big-section--whitebg">
    <div class="big-section__centered-container big-section__centered-container--reversed">
        <div class="big-section__imagebox bg--sklep">
        </div>
        <div class="big-section__contentbox">
            <h1>Profesjonalny sklep internetowy</h1>
            <p class="textbox__text">
                Przy robieniu zakupów przez internet często pierwsze wrażenie jest najważniejsze.
                Postaw na <strong class="orange">profesjonalną </strong>sprzedaż przez internet.
            </p>
            <p>
                Profesjonalnie wyglądający sklep internetowy zachęca do zakupów i wzbudza <strong class="orange">zaufanie</strong> klientów.
            </p>
        </div>
    </div>
</div>

<div class="big-section">
    <div class="big-section__centered-container">
        <div class="big-section__imagebox bg--resp">
        </div>
        <div class="big-section__contentbox">
            <h1>Responsywność</h1>
            <p>
                Otrzymujesz sklep dostępny i dobrze wyglądający <strong class="orange">niezależnie</strong> od tego
                jakiego urządzenia używa twój
                potencjalny klient.
                Przykładam szczególną uwagę do wyglądu sklepu i komfortu przeglądania na mniejszych urządzeniach,
                gdyż to one stanowią <strong class="orange">większość</strong>
                ruchu w dzisiejszym internecie.
            </p>
        </div>
    </div>
</div>

<div class="big-section big-section--whitebg">
    <div class="big-section__centered-container big-section__centered-container--reversed">
        <div class="big-section__imagebox bg--presta">
        </div>
        <div class="big-section__contentbox">
            <h1>System Woocomerce lub Prestashop</h1>
            <p class="textbox__text">
                Zależnie od rozmiaru sklepu i liczby produktów otrzymujesz sklep na gotowym systemie.
                Oba systemy są bardzo popularne i sprawdzone przez tysiące użytkowników.
            </p>
            <p>
                Otrzymujesz profesjonalny i prosty w użyciu <strong class="orange">panel do zarządzania</strong>
                swoim
                sklepem.
            </p>
        </div>
    </div>
</div>

<div class="big-section">
    <div class="big-section__centered-container">
        <div class="big-section__imagebox bg--opt">
        </div>
        <div class="big-section__contentbox">
            <h1>Optymalizacja</h1>
            <p class="textbox__text">
                Otrzymujesz sklep które ładuje się szybko.
                Nie każ <strong class="orange"> czekać </strong>
                potencjalnemu klientowi.
            </p>
            <p>
                Dobrze zoptymalizowane strony radzą sobie też lepiej w wyszukiwarkach.
            </p>
        </div>
    </div>
</div>

<div class="big-section big-section--whitebg">
    <div class="big-section__centered-container big-section__centered-container--reversed">
        <div class="big-section__imagebox bg--seo">
        </div>
        <div class="big-section__contentbox">
            <h1>Pozycjonowanie</h1>
            <p class="textbox__text">
                Otrzymujesz sklep który <br /> pokazuje się <strong class="orange">wysoko</strong> w wynikach
                wyszukiwania. <br /> <br />Bardzo pomaga to w przyciąganiu potencjalnych klientów.
            </p>
        </div>
    </div>
</div>

<div class="big-section">
    <div class="big-section__centered-container">
        <div class="big-section__imagebox bg--szabl">
        </div>
        <div class="big-section__contentbox">
            <h1>Gotowy szablon lub indywidualny projekt</h1>
            <p class="textbox__text">
                Zależnie od <strong class="orange">twoich potrzeb</strong> mogę użyć gotowego szablonu i dopasować
                go do twoich potrzeb, lub
                zaprojektować
                go od zera dla Ciebie.
            </p>
        </div>
    </div>
</div>

<div class="big-section big-section--whitebg">
    <div class="big-section__centered-container big-section__centered-container--reversed">
        <div class="big-section__imagebox bg--cena">
        </div>
        <div class="big-section__contentbox">
            <h1>Różne opcje cenowe</h1>
            <p class="textbox__text">
                Powiedz mi jakim dysponujesz budżetem a przedstawię Ci jakie mamy możliwości.
                <br /><br />
                Albo przedstaw swoje wymagania a ja przedstawie wycenę.
                <br /><br />
                W każdym przypadku - <strong class="orange">porozmawiajmy</strong>.
            </p>
        </div>
    </div>
</div> -->

<? get_template_part('template-parts/contact-section'); ?>
<?
	get_footer();
?>