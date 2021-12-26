<!-- This needs to be add on the theme function.php -->


function create_postType_sermon() {
register_post_type( 'sermons',
array(
'labels' => array(
'name' => 'sermons',
'singular_name' => 'sermon',
'add_new' => 'Add New sermon',
'add_new_item' => 'Add New sermon',
'edit' => 'Edit',
'edit_item' => 'Edit sermon',
'new_item' => 'New sermon',

'search_items' => 'Search sermons',
'not_found' => 'No sermons found',
'not_found_in_trash' => 'No sermons found in Trash',
'parent' => 'Parent sermon'
),
'supports'=> array(
'title', 'editor', 'thumbnail','custom-fields', ),
'taxonomies' => array('sermon_categories','post_tag'), // if you don't have custom taxonomy comment out this line.
'public' => true,
'capability_type' => 'post',

'menu_position' => 15,
 
'menu_icon' => plugins_url( 'images/image.png', __FILE__ ),   
'has_archive' => true
)
);
}
add_action( 'init', 'create_postType_sermon' );
