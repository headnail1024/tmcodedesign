<?php
/* Rozszerzenia panelu admina */

/* Kolumny dla Big Sections */
add_filter('manage_bsection_posts_columns', 'tmcodedesign_bsection_columns');
function tmcodedesign_bsection_columns($columns)
{
    $columns = array(
        'cb' => $columns['cb'],
        'heading' => __('Heading'),
        'order_on_page' => __('Order on page', 'tmcodedesign'),
        'orientation' => __('Style'),
        'image' => __('Image')
    );
    return $columns;
}

/* Override wyświetlania kolumn dla Big Sections */
add_action('manage_bsection_posts_custom_column', 'tmcodedesign_bsection_column', 10, 2);
function tmcodedesign_bsection_column($column, $post_id)
{
    switch ($column) {
        case 'image':
            if (get_field('image_in_circle') == 1)
                $image_class = 'admin-image-circle';
            else
                $image_class = 'admin-image';

            echo get_the_post_thumbnail($post_id, array(100, 100), array('class' => $image_class));
            break;

        case 'used_in_page': {
                $page_id = get_field($column, false, false);
                $page = get_post($page_id);
                echo $page->post_title;
                break;
            }

        case 'orientation': {
                $orientation = get_field($column, false, false);

                $bgcolor = get_field('background_color');
                echo '<div class="admin-bsection-style-' . $bgcolor . '">';
                if ($orientation === "vertical") {
                    echo '<i class="fa fa-arrows-v" aria-hidden="true" title="Toggle navigation"></i>';
                } else {
                    echo '<i class="fa fa-arrows-h" aria-hidden="true" title="Toggle navigation"></i>';
                }
                echo '</div>';

                break;
            }

        default:
            echo get_field($column);
            break;
    }
}

/* Dropdown filtrujący Big Sections po Stronie */
add_action('restrict_manage_posts', 'bsection_site_dropdown');
function bsection_site_dropdown()
{
    $scr = get_current_screen();
    if ($scr->base === 'edit' && $scr->post_type === 'bsection') {

        $selected = filter_input(INPUT_GET, 'bsection_page', FILTER_SANITIZE_STRING);

        $p = array(
            'posts_per_page' => -1,
            'post_type' => 'bsection'
        );

        $bsections = new WP_Query($p);

        $choices = [];

        while ($bsections->have_posts()) {
            $bsections->the_post();
            $page_id = get_field('used_in_page', false, false);
            $choices[$page_id] = get_the_title($page_id);
        }
        wp_reset_postdata();

        echo '<select name="bsection_page">';
        foreach ($choices as $key => $value) {
            echo '<option value="' . $key . '" ' . (($selected == $key) ? 'selected="selected"' : "") . '>' . $value . '</option>';
        }
        echo '</select>';
    }
}
/* Implementacja filtrowania Big Sections po stronie */
add_action('pre_get_posts', 'bsections_filter');
function bsections_filter($query)
{
    if (is_admin() && $query->is_main_query()) {
        $scr = get_current_screen();
        if ($scr->post_type !== 'bsection') return;

        // Jeśli wybrano wartość filtru to przefiltruj po niej.
        if (isset($_GET['bsection_page'])) {
            $query->set('meta_query', array(
                array(
                    'key' => 'used_in_page',
                    'value' => sanitize_text_field($_GET['bsection_page']),
                )
            ));

            $query->set('meta_key', 'order_on_page');
            $query->set('orderby', 'meta_value_num');
            $query->set('order', 'ASC');
        } else {
            // Jeśli nie to postaraj się pofiltrować po pierwszym elemencie na liscie 
            // filtrów. Sytuacja gdy pierwszy raz wchodzimy do okna.
            $p = array(
                'posts_per_page' => 1,
                'post_type' => 'bsection'
            );

            $bsections = new WP_Query($p);

            while ($bsections->have_posts()) {
                $bsections->the_post();
                $page_id = get_field('used_in_page', false, false);

                $query->set('meta_query', array(array(
                    'key' => 'used_in_page',
                    'value' => $page_id
                )));

                $query->set('meta_key', 'order_on_page');
                $query->set('orderby', 'meta_value_num');
                $query->set('order', 'ASC');
            }

            wp_reset_postdata();
        }
    }
}

/* Pozwolenie na upload plików SVG do media library */
add_filter('upload_mimes', 'cc_mime_types');
function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

function tmcodedesign_add_admin_page()
{
    add_menu_page('TmCodeDesign Theme Options', 'TmCodeDesign', 'manage_options', 'tmcodedesign_options', 'thdesign_theme_create_page', 'dashicons-chart-pie', 120);
}

add_action('admin_menu', 'tmcodedesign_add_admin_page');

function thdesign_theme_create_page()
{
?>
    boo!
<?
}


add_action( 'admin_menu', 'tmcodedesign_add_metabox' );
 
function tmcodedesign_add_metabox() {
 
	add_meta_box(
		'tmcodedesign_metabox', // metabox ID
		'Podgląd big sections', // title
		'tmcodedesign_metabox_callback', // callback function
		'page', // post type or post types in array
		'normal', // position (normal, side, advanced)
		'core' // priority (default, low, high, core)
	);
 
}
 
function tmcodedesign_metabox_callback( $post ) {
    renderBSectionsAdmin($post->ID);
}
