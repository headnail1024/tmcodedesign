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
            <? echo get_field("description") ?> 
        </div>
    </div>
</div>

<?
}


function renderBSectionsAdmin($page_id) {

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

?>  
  <br/>
  <a href="/wp-admin/edit.php?s&post_status=all&post_type=bsection&action=-1&m=0&bsection_page=<?php echo get_the_ID() ?>&filter_action=Filtser&paged=1&action2=-1">Edytuj Big Sections<a>
<?                    
    echo "<ol>";
    while($pastEvents->have_posts())
	{
        $pastEvents->the_post();
        echo "<li>";
        renderBSectionAdmin();
        echo "</li>";
    }
    
    wp_reset_postdata();
    echo "</ol>";
}


function renderBSectionAdmin()
{
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
        $image_shape_class = "";
        
    $link = '/wp-admin/post.php?post='. get_the_ID() . '&action=edit';

    echo "<a href='" . $link . "'>";
    echo get_field("heading");
    echo "</a></br>";

    echo "<p>";
    echo "<img style='width: 100px;' src='" . get_the_post_thumbnail_url(). "'>";
    echo get_field("description");
    echo "</p>";
?>

<!--
<div class="big-section <? echo $bgcolor_class ?>">
    <div class="big-section__centered-container <? echo $orientation_class ?>">
        <div style="background-image: url('<? echo get_the_post_thumbnail_url() ?>');" 
            class="big-section__imagebox bg bg--wizyt <? echo $image_shape_class ?>">
        </div>
        <div class="big-section__contentbox">
            <h1><? echo get_field("heading") ?></h1>
            <? echo get_field("description") ?> 
        </div>
    </div>
</div>
-->
<?
}


