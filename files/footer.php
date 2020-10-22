<?php
/* Dane adresowe z footera są brane z sekcji kontaktowej ze strony głównej */
$startPageId = get_option('page_on_front');
?>

<footer>
    <div class="footer-grid">
        <div class="footer-grid__item item-logo">
            <h3>tm<strong>CODE</strong></h3>
        </div>

        <div class="footer-grid__item item-links">
            <a class="footer-grid__item__link" href="/">Strona głowna</a>
            <a class="footer-grid__item__link" href="/strony">Strony internetowe</a>
            <a class="footer-grid__item__link" href="/sklepy">Sklepy internetowe</a>
            <a class="footer-grid__item__link" href="/inne">Usługi programistyczne</a>
            <a class="footer-grid__item__link" href="/omnie">O mnie</a>
            <a class="footer-grid__item__link" href="/kontakt">Kontakt</a>
        </div>

        <!-- 
        <div class="contact-detail">
            <p class="contact-detail-type">
            <? echo get_field('contact_section', $startPageId)['contact_details1']['contact_detail_name'] ?>
            </p>
            <p>
                <? echo get_field('contact_section', $startPageId)['contact_details1']['contact_detail_value'] ?>
            </p>
            <div class="buttons-container">
                <a class="btn btn--blue" href="<? echo get_field('contact_section', $startPageId)['contact_details1']['link'] ?>">
                    <i class="fa <? echo get_field('contact_section', $startPageId)['contact_details1']['button_icon'] ?>" aria-hidden="true"></i>
                    <? echo get_field('contact_section', $startPageId)['contact_details1']['button_text'] ?>
                </a>
            </div>
        </div>
        -->


        <div class="footer-grid__item item-address">
            <p>
                <a href="<? echo get_field('contact_section', $startPageId)['contact_details1']['link'] ?>">
                    <i class="fa <? echo get_field('contact_section', $startPageId)['contact_details1']['button_icon'] ?>" aria-hidden="true"></i>
                    <? echo get_field('contact_section', $startPageId)['contact_details1']['contact_detail_value'] ?>
                </a>
            </p>

            <p>
                <a href="<? echo get_field('contact_section', $startPageId)['contact_details2']['link'] ?>">
                    <i class="fa <? echo get_field('contact_section', $startPageId)['contact_details2']['button_icon'] ?>" aria-hidden="true"></i>
                    <? echo get_field('contact_section', $startPageId)['contact_details2']['contact_detail_value'] ?>
                </a>
            </p>

            <p>
                <a href="<? echo get_field('contact_section', $startPageId)['contact_details3']['link'] ?>">
                    <i class="fa <? echo get_field('contact_section', $startPageId)['contact_details3']['button_icon'] ?>" aria-hidden="true"></i>
                    <? echo get_field('contact_section', $startPageId)['contact_details3']['contact_detail_value'] ?>
                </a>
            </p>

            <p>
                <a href="<? echo get_field('contact_section', $startPageId)['contact_details4']['link'] ?>">
                    <i class="fa <? echo get_field('contact_section', $startPageId)['contact_details4']['button_icon'] ?>" aria-hidden="true"></i>
                    <? echo get_field('contact_section', $startPageId)['contact_details4']['contact_detail_value'] ?>
                </a>
            </p>


        </div>

    </div>
</footer>

<? wp_footer(); ?>
</body>

</html>