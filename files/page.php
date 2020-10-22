<?
    get_header();
    
    $image = get_field('image');
?>
<section class="hero">
    <div class="hero__image hero__image--strony" style="background-image: url('<?php echo $image ?>')"></div>
    <div class="hero__image2"></div>
    <div class="hero__heading-box">
        <h1 class="hero__heading"><?php echo get_field('page_title') ?></h1>
    </div>
</section>

<?
    renderBSections($post->ID);
?>

<? get_template_part('template-parts/contact-section'); ?>
<?
	get_footer();
?>