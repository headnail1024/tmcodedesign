<?php
/* Sekcja formularza kontaktowego zawsze bierze wartości ze strony głownej. */
$startPageId = get_option('page_on_front');
?>

<div class="text-teaser">
    <h2 class="text-teaser__heading-small">
        <? echo get_field('contact_section', $startPageId)['small_heading'] ?>
    </h2>
    <h1 class="text-teaser__heading-big">
        <? echo get_field('contact_section', $startPageId)['big_heading1'] ?>
    </h1>
    <h1 class="text-teaser__heading-big">
        <? echo get_field('contact_section', $startPageId)['big_heading2'] ?>
    </h1>
</div>

<div class="contact-section">

    <?php echo do_shortcode('[formidable id=1]') ?>

    <!-- 
    <form class="contact-form">
        <label for="contact-form-name">
            <? echo get_field('contact_section', $startPageId)['name_label'] ?>
        </label>
        <input type="text" name="contact-form-name" id="contact-form-name" />

        <label for="contact-form-email">
            <? echo get_field('contact_section', $startPageId)['email_label'] ?>
        </label>
        <input type="email" inputmode="email" name="contact-form-email" id="contact-form-email" />

        <label for="contact-form-message">
            <? echo get_field('contact_section', $startPageId)['message_label'] ?>
        </label>
        <textarea name="contact-form-message" id="contact-form-message"></textarea>

        <a class="btn btn--blue" href="mailto:tomasz.michalski@tmcode.pl">
            <? echo get_field('contact_section', $startPageId)['send_message_button_text'] ?>
        </a>
    </form>
    -->

    <div class="contact-info">

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

        <div class="contact-detail">
            <p class="contact-detail-type">
                <? echo get_field('contact_section', $startPageId)['contact_details2']['contact_detail_name'] ?>
            </p>
            <p>
                <? echo get_field('contact_section', $startPageId)['contact_details2']['contact_detail_value'] ?>
            </p>
            <div class="buttons-container">
                <a class="btn btn--blue" href="<? echo get_field('contact_section', $startPageId)['contact_details2']['link'] ?>">
                    <i class="fa <? echo get_field('contact_section', $startPageId)['contact_details2']['button_icon'] ?>" aria-hidden="true"></i>
                    <? echo get_field('contact_section', $startPageId)['contact_details2']['button_text'] ?>
                </a>
            </div>
        </div>

        <div class="contact-detail">
            <p class="contact-detail-type">
                <? echo get_field('contact_section', $startPageId)['contact_details3']['contact_detail_name'] ?>
            </p>
            <p>
                <? echo get_field('contact_section', $startPageId)['contact_details3']['contact_detail_value'] ?>
            </p>
            <div class="buttons-container">
                <a class="btn btn--blue" href="<? echo get_field('contact_section', $startPageId)['contact_details3']['link'] ?>">
                    <i class="fa <? echo get_field('contact_section', $startPageId)['contact_details3']['button_icon'] ?>" aria-hidden="true"></i>
                    <? echo get_field('contact_section', $startPageId)['contact_details3']['button_text'] ?>
                </a>
            </div>
        </div>

        <div class="contact-detail">
            <p class="contact-detail-type">
                <? echo get_field('contact_section', $startPageId)['contact_details4']['contact_detail_name'] ?>
            </p>
            <p>
                <? echo get_field('contact_section', $startPageId)['contact_details4']['contact_detail_value'] ?>
            </p>
            <div class="buttons-container">
                <a class="btn btn--blue" href="<? echo get_field('contact_section', $startPageId)['contact_details4']['link'] ?>">
                    <i class="fa <? echo get_field('contact_section', $startPageId)['contact_details4']['button_icon'] ?>" aria-hidden="true"></i>
                    <? echo get_field('contact_section', $startPageId)['contact_details4']['button_text'] ?>
                </a>
            </div>
        </div>
    </div>
</div>