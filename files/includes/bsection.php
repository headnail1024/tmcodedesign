<?php

function renderBSections($page_id) {

    $p = array(
            'post_type' => 'bsection',
            'orderby' => 'meta_value_num',
            'meta_key' => 'order_on_page',
            'order' => 'ASC',
            'meta_query' => array(
                          array(
                            'key' => 'used_in_page',
                            'compare' => '=',
                            'value' => $page_id,
                            'type' => 'numeric'
                          )
                        )
                      );
    
                      $pastEvents = new WP_Query($p);

    while($pastEvents->have_posts())
	{
        $pastEvents->the_post();
        renderBSection();
    }
  
    wp_reset_postdata();
}


function renderBSection()
{
    echo "wololo";
    echo get_field("image_in_circle");
    echo get_the_post_thumbnail_url();

    if (get_field("background_color") == "white")
        $bgcolor_class = "big-section--whitebg";
    else
        $bgcolor_class = "";

    if (get_field("orientation") == "vertical")
        $orientation_class = "big-section__centered-container--reversed";
    else
        $orientation_class = "";

    if (get_field("image_in_circle") == 1)
        $image_shape_class = "shadowed-circle";
    else
        $image_shape_class = ""
    
?>

<div class="big-section <? echo $bgcolor_class ?>">
    <div class="big-section__centered-container <? echo $orientation_class ?>">
        <div style="background-image: url('<? echo get_the_post_thumbnail_url() ?>');" 
            class="big-section__imagebox bg bg--wizyt <? echo $image_shape_class ?>">
        </div>
        <div class="big-section__contentbox">
            <h1><? echo get_field("heading") ?></h1>
            <p class="textbox__text">
            <? echo get_field("description") ?> 
            </p>
        </div>
    </div>
</div>

<?
}
