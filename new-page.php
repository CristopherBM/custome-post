<?php
function create_postType_sermon() {
register_post_type( 'Add your post name',
array(
'labels' => array(
'name' => ' post name',
'singular_name' => ' post name',
'add_new' => 'Add New  post name',
'add_new_item' => 'Add New  post name',
'edit' => 'Edit',
'edit_item' => 'Edit  post name',
'new_item' => 'New  post name',

'search_items' => 'Search  post name',
'not_found' => 'No  post name found',
'not_found_in_trash' => 'No  post name found in Trash',
'parent' => 'Parent  post name'
),
'supports'=> array(
'title', 'editor', 'thumbnail','custom-fields', ),
'taxonomies' => array(' postname_categories','post_tag'), // if you don't have custom taxonomy comment out this line.
'public' => true,
'capability_type' => 'post',

'menu_position' => 15,
 
'menu_icon' => plugins_url( 'images/image.png', __FILE__ ),   
'has_archive' => true
)
);
}
add_action( 'init', 'create_postType_ postname' );

?>
