<?php

/*
  Plugin Name: my Customs Posts
  Description: seitenspezifische Custom Posts
 */

//create custom posts
//
//carousels
function my_custom_post_carousel() {
    $labels = array(
        "name" => "Carousel",
        "singular_name" => "Carousel",
    );
    $args = array(
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "show_ui" => true,
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "carousel-item", "with_front" => true),
        "query_var" => true,
        "menu_position" => 12, "menu_icon" => "http://wordpress.p168702.webspaceconfig.de/wp-content/themes/spraachen-org/library/img/backend/ico_carousel.png", "supports" => array("title", "editor", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "thumbnail", "author", "page-attributes", "post-formats"), "taxonomies" => array("category"));
    register_post_type("carousel-item", $args);
}

add_action('init', 'my_custom_post_carousel');

//Karten
function my_custom_post_maps() {
    $labels = array(
        "name" => "Karten",
        "singular_name" => "Karte",
    );

    $args = array(
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "show_ui" => true,
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "karten", "with_front" => true),
        "query_var" => true,
        "supports" => array("title", "editor", "revisions", "author", "page-attributes"), "taxonomies" => array("category"));
    register_post_type("karten", $args);
}

add_action('init', 'my_custom_post_maps');

//add_action('init', 'my_custom_post_partner_logo');

//Support
function my_custom_post_support() {
    $labels = array(
        "name" => "Support",
        "singular_name" => "Support-Artikel",
    );

    $args = array(
        "labels" => $labels,
        "description" => "How-Tos",
        "public" => true,
        "show_ui" => true,
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "support", "with_front" => true),
        "query_var" => true,
        "menu_position" => 12, "menu_icon" => "http://wordpress.p168702.webspaceconfig.de/wp-content/themes/spraachen-org/library/img/backend/ico_support.png", "supports" => array("title", "editor", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "thumbnail", "author", "page-attributes", "post-formats"), "taxonomies" => array("category", "post_tag"));
    register_post_type("support", $args);
}

add_action('init', 'my_custom_post_support');

//
function my_custom_post_banner() {
    $labels = array(
        "name" => "Banner",
        "singular_name" => "Banner item",
    );

    $args = array(
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "show_ui" => true,
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "banner", "with_front" => true),
        "query_var" => true,
        "supports" => array("title", "editor", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "thumbnail", "author", "page-attributes", "post-formats"), "taxonomies" => array("category"));
    register_post_type("banner", $args);
}

add_action('init', 'my_custom_post_banner');
?>
