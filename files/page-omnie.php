<?
	get_header();
?>
<section class="hero">
    <div class="hero__image hero__image--inne"></div>
    <div class="hero__image2"></div>
    <div class="hero__heading-box">
        <h1 class="hero__heading">O mnie</h1>
    </div>
</section>

<?
    renderBSections($post->ID);
?>

<!--
<div class="big-section big-section--whitebg">
    <div class="big-section__centered-container big-section__centered-container--reversed">
        <div class="big-section__imagebox bg--facjata">
        </div>
        <div class="big-section__contentbox">
            <h1>Witaj!</h1>
            <p>
                Nazywam się Tomasz Michalski i zajmuje się tworzeniem stron internetowych.
            </p>
        </div>
    </div>
</div>

<div class="big-section">
    <div class="big-section__centered-container big-section__centered-container--reversed">
        <div class="big-section__imagebox bg--omnie-wyksztalcenie">
        </div>
        <div class="big-section__contentbox">
            <h1>Wykształcenie informatyczne</h1>
            <p>
                Odebrałem formale doświadczenie więc masz pewność <br> że nie współpracujesz z laikiem.
                Jestem absolwentem studiów <strong class="orange">informatycznych</strong> na Uniwersytecie w
                Białymstoku.
            </p>
        </div>
    </div>
</div>

<div class="big-section big-section--whitebg">
    <div class="big-section__centered-container big-section__centered-container--reversed">
        <div class="big-section__imagebox bg--omnie-doswiadczenie">
        </div>
        <div class="big-section__contentbox">
            <h1>10 lat doświadczenia</h1>
            <p class="textbox__text">
                Prawie <strong class="orange">dekada doświadczenia</strong> w zawodzie programisty w różnych
                technologiach
                zaczynając od aplikacji na komputery a kończąc na stronach internetowych.<br>
                Wspópraca z mniejszymi i większymi klientami.
            </p>
        </div>
    </div>
</div>

<div class="big-section">
    <div class="big-section__centered-container big-section__centered-container--reversed">
        <div class="big-section__imagebox bg--omnie-podejscie">
        </div>
        <div class="big-section__contentbox">
            <h1>Indywidualne podejście do klienta</h1>
            <p>
                Zawsze staram się dopasować rozwiązania do klienta <strong class="orange">jak najlepiej</strong>
                jest
                to możliwe.<br>
                Wspólnie poszukamy najlepszego rozwiązania dla twojego biznesu, biorąc
                pod uwagę twój budżet, wielkość twojej strony i twoje oczekiwania.
            </p>
        </div>
    </div>
</div> -->

<? get_template_part('template-parts/contact-section'); ?>
<?
	get_footer();
?>