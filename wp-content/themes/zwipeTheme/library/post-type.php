<?php
function custom_post_type_init() {
    $post_types = array(
        array("slug" => "slider", "plural" => "Slider", "singular" => "Item Slider", "rewrite" => "slider", "public" => true, "archive" => true, "supports" => array('title', 'editor', 'thumbnail')),
        array("slug" => "stories", "plural" => "Stories", "singular" => "Item Stories", "rewrite" => "stories", "public" => true, "archive" => true, "supports" => array('title', 'editor', 'thumbnail')),
        array("slug" => "news", "plural" => "News", "singular" => "Item News", "rewrite" => "news", "public" => true, "archive" => true, "supports" => array('title', 'editor', 'thumbnail')),
        array("slug" => "products", "plural" => "Products", "singular" => "Product", "rewrite" => "products", "public" => true, "archive" => true, "supports" => array('title')),
        array("slug" => "events", "plural" => "Events", "singular" => "Event", "rewrite" => "events", "public" => true, "archive" => true, "supports" => array('title', 'editor', 'thumbnail')),
        array("slug" => "personal-profile", "plural" => "Profiles", "singular" => "Profile", "rewrite" => "personal-profile", "public" => true, "archive" => true, "supports" => array('title', 'thumbnail')),
        array("slug" => "casestudy", "plural" => "Casestudy", "singular" => "Casestudies", "rewrite" => "casestudy", "public" => true, "archive" => true, "supports" => array('title', 'editor', 'thumbnail'))
    );

    foreach ($post_types as $pt) {

        $supports = array('title', 'editor', 'post_tags', 'thumbnail', 'excerpt', "comments");
        $public = isset($pt['public']) ? $pt['public'] : false;
        register_post_type($pt["slug"], array(
            'labels' => array(
                'name' => $pt["plural"],
                'singular_name' => $pt["singular"]
            ),
            'show_ui' => true,
            'publicly_queryable' => isset($pt["publicly_queryable"]) ? $pt["publicly_queryable"] : $public,
            'public' => isset($pt['public']) ? $pt['public'] : false,
            'has_archive' => isset($pt['archive']) ? $pt['archive'] : true,
            'rewrite' => array('hierarchical' => true, 'with_front' => true, 'slug' => isset($pt["rewrite"]) ? $pt["rewrite"] : $pt["slug"]),
            'supports' => isset($pt['supports']) ? $pt['supports'] : $supports,
            'taxonomies' => isset($pt['taxonomies']) ? $pt['taxonomies'] : array('post_tag'),
            'hierarchical' => false
                )
        );
    }
}

add_action('init', 'custom_post_type_init');
// create taxonomy
add_action( 'wp_loaded', 'create_my_taxonomies', 0 );
function create_my_taxonomies() {
    $taxonomies = array(
       // array("name_tax" => "album-category-music", "related_tax" => "album-music", "name" => "Album Category", "add_new_item" => "Add New Album Category", "new_item_name" => "New Album Type Category"),
    );
    foreach ($taxonomies as $tax) {
        register_taxonomy(
            $tax["name_tax"],
            $tax["related_tax"],
            array(
                'labels' => array(
                    'name' => $tax["name"],
                    'add_new_item' => $tax["add_new_item"],
                    'new_item_name' => $tax["new_item_name"]
                ),
                'show_ui' => true,
                'show_tagcloud' => false,
                'hierarchical' => true,
                'query_var' => true,
                'public'=> true
            )
        );
    }
}