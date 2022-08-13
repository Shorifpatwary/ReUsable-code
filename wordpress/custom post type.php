<?php
/**
 * create custom post type for your website .
 *
 * @package textDomain .
 */
function create_movie_cpt()
{
    $labels = [
       'name'                  => _x('Movies', 'Post Type General Name', 'aquila'),
       'singular_name'         => _x('Movie', 'Post Type Singular Name', 'aquila'),
       'menu_name'             => _x('Movies', 'Admin Menu text', 'aquila'),
       'name_admin_bar'        => _x('Movie', 'Add New on Toolbar', 'aquila'),
       'archives'              => __('Movie Archives', 'aquila'),
       'attributes'            => __('Movie Attributes', 'aquila'),
       'parent_item_colon'     => __('Parent Movie:', 'aquila'),
       'all_items'             => __('All Movies', 'aquila'),
       'add_new_item'          => __('Add New Movie', 'aquila'),
       'add_new'               => __('Add New', 'aquila'),
       'new_item'              => __('New Movie', 'aquila'),
       'edit_item'             => __('Edit Movie', 'aquila'),
       'update_item'           => __('Update Movie', 'aquila'),
       'view_item'             => __('View Movie', 'aquila'),
       'view_items'            => __('View Movies', 'aquila'),
       'search_items'          => __('Search Movie', 'aquila'),
       'not_found'             => __('Not found', 'aquila'),
       'not_found_in_trash'    => __('Not found in Trash', 'aquila'),
       'featured_image'        => __('Featured Image', 'aquila'),
       'set_featured_image'    => __('Set featured image', 'aquila'),
       'remove_featured_image' => __('Remove featured image', 'aquila'),
       'use_featured_image'    => __('Use as featured image', 'aquila'),
       'insert_into_item'      => __('Insert into Movie', 'aquila'),
       'uploaded_to_this_item' => __('Uploaded to this Movie', 'aquila'),
       'items_list'            => __('Movies list', 'aquila'),
       'items_list_navigation' => __('Movies list navigation', 'aquila'),
       'filter_items_list'     => __('Filter Movies list', 'aquila'),
        ];
    $args   = [
       'label'               => __('Movie', 'aquila'), // Name of the post type shown in the menu
       'labels'              => $labels,
       /**
        * @see See get_post_type_labels() for a full list of supported labels.
        * @link https://developer.wordpress.org/reference/functions/get_post_type_labels/
        */
       'description'         => __('The movies discription . ', 'aquila'),//summary of what the post type is.
       'public'              => true,//‘true’ – Implies exclude_from_search: false, publicly_queryable: true, show_in_nav_menus: true, and show_ui:true. The built-in types attachment, page, and post are similar to this.and false will be opposites of that .
       'hierarchical'        => true ,// Whether the post type is hierarchical (e.g. page). Default false.
       'exclude_from_search' => false, // (bool) Whether to exclude posts with this post type from front end search results. Default is the opposite value of $public.
       'publicly_queryable'  => true, // (bool) Whether queries can be performed on the front end for the post type .
       'show_ui'             => true, // 'true’ – display a user-interface (admin panel) for this post type . Default: value of public argument
       'show_in_menu'        => true, // (bool|string) Where to show the post type in the admin menu. To work, $show_ui must be true.
            //If true, the post type is shown in its own top level menu.
            //If false, no menu is shown. If a string of an existing top level menu ('tools.php' or 'edit.php?post_type=page', for example), the post type will be placed as a sub-menu of that.
            //Default is value of $show_ui.
       'show_in_nav_menus'   => true, // (bool) Makes this post type available for selection in navigation menus. Default is value of $public.
       'show_in_admin_bar'   => true, // (bool) Makes this post type available via the admin bar. Default is value of $show_in_menu.


       /**
        * extra parameater will be added here .
        */

       'show_in_rest'        => true, // (bool) Whether to include the post type in the REST API. Must be true to enable the Gutenberg editor.
       // 'rest_base'
       // (string) To change the base URL of REST API route. Default is $post_type.
       //'rest_namespace'
       // (string) To change the namespace URL of REST API route. Default is wp/v2.

//          'rest_base' , (string) To change the base URL of REST API route. Default is $post_type.
//          'rest_namespace', (string) To change the namespace URL of REST API route. Default is wp/v2.
//          'rest_controller_class' , (string) REST API controller class name. Default is 'WP_REST_Posts_Controller'.

       'menu_position'       => 15, // (int) The position in the menu order the post type should appear. To work, $show_in_menu must be true. Default null (at the bottom).
       'menu_icon'           => 'dashicons-video-alt', // (string) The URL to the icon to be used for this menu. Pass a base64-encoded SVG using a data URI, which will be colored to match the color scheme
            // 05 – below Posts
            // 10 – below Media
            // 15 – below Links
            // 20 – below Pages
            // 25 – below comments
            // 60 – below first separator
            // 65 – below Plugins
            // 70 – below Users
            // 75 – below Tools
            // 80 – below Settings
            // 100 – below second separator
       'capability_type'     => 'post', // Build in capability post|page|attachment|revision|nav_menu_item|wp_template|wp_template_part .  All Build in post type in wordpress  .
       /**
        * @see  get_post_type_capabilities().
        * @link https://developer.wordpress.org/reference/functions/get_post_type_labels/
        * (string[]) Array of capabilities for this post type. $capability_type is used as a base to construct capabilities by default.
        *
        */
       // 'capabilities' => [
            //     'edit_post'          => 'edit_book',
            //     'read_post'          => 'read_book',
            //     'delete_post'        => 'delete_book',
            //     'edit_posts'         => 'edit_books',
            //     'edit_others_posts'  => 'edit_others_books',
            //     'publish_posts'      => 'publish_books',
            //     'read_private_posts' => 'read_private_books',
            //     'create_posts'       => 'edit_books',
       // ],
       /**
        * custom capability instead of capability type .
        *
        * @see https://developer.wordpress.org/reference/functions/register_post_type/?unapproved=5969&moderation-hash=f943b77b9e3dd4cc6ced46ccdeaaf166#capabilities
        *
        */
            //
            //
       'map_meta_cap'       => false, // (bool) Whether to use the internal default meta capability handling. Default false.

       'supports'            => [
           'title',
           'editor',
           'excerpt',
           'thumbnail',
           'revisions',
           'author',
           'comments',
           'trackbacks',
           'page-attributes',
           'custom-fields',
       ],
       /**
        * @param (array) Core feature(s) the post type supports. Serves as an alias for calling add_post_type_support() directly. Core features include 'title', 'editor', 'comments', 'revisions', 'trackbacks', 'author', 'excerpt', 'page-attributes', 'thumbnail', 'custom-fields', and 'post-formats'.
        *
        *  Default is an array containing 'title' and 'editor'
        */
       'taxonomies'          => ['category', 'post_tag'], //  Taxonomies can be registered later with register_taxonomy() or register_taxonomy_for_object_type().
       'has_archive'         => true, // (boolean or string) (optional) Enables post type archives. Will use $post_type as archive slug by default.

       'rewrite'  => [
           'slug', //(string) Customize the permastruct slug. Defaults to $post_type key.
           'with_front', //(bool) Whether the permastruct should be prepended with WP_Rewrite::$front. Default true.
           'feeds', // (bool) Whether the feed permastruct should be built for this post type. Default is value of $has_archive.
           'pages' , // (bool) Whether the permastruct should provide for pagination. Default true.
           'ep_mask' , // (int) Endpoint mask to assign. If not specified and permalink_epmask is set, inherits from $permalink_epmask. If not specified and permalink_epmask is not set, defaults to EP_PERMALINK.
       ],
       /**
        * (bool|array) Triggers the handling of rewrites for this post type. To prevent rewrite, set to false. Defaults to true, using $post_type as slug. To specify rewrite rules, an array can be passed with any of these keys:
       */
       'query_var'           => true,
       /**
        * (boolean or string) (optional) Sets the query_var key for this post type.
        * If set to true it allows you to request a custom posts type (book) using this: example.com/?book=life-of-pi
        *
        * If set to a string rather than true (for example ‘publication’), you can do: example.com/?publication=life-of-pi
        *
        * */

       'can_export'           => true ,
       /**
        * Default: true
        * (boolean) (optional) Can this post_type be exported.
        */
       'delete_with_user'     => true ,
       /**
        * (bool) Whether to delete posts of this type when deleting a user.
        * If true, posts of this type belonging to the user will be moved to Trash when the user is deleted.
        *
        * If false, posts of this type belonging to the user will *not* be trashed or deleted.
        *
        * If not set (the default), posts are trashed if post type supports the 'author' feature. Otherwise posts are not trashed or deleted. Default null.
        */

       'template' => [
           [ 'core/image', [
               'align' => 'left',
           ] ] ,
           [ 'core/heading', [
               'placeholder' => 'Add Author...',
           ] ] ,
           [ 'core/paragraph', [
               'placeholder' => 'Add Description...',
           ] ] ,
           ],
       /**
        * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-templates/ for args .
        *
        * (array) Array of blocks to use as the default initial state for an editor session. Each item should be an array containing block name and optional attributes.
        *
        */
 //           'template_lock'        => 'all', // 'insert'|'move'|'delete'|'all'
       /**
        * (string|false) Whether the block template should be locked if $template is set.
        * If set to 'all', the user is unable to 'insert' new blocks, 'move' existing blocks and 'delete' blocks.
        * If set to 'insert', the user is able to move existing blocks but is unable to insert new blocks and delete blocks. Default false.
        *
        */

//            '_builtin'             => true , // (bool) FOR INTERNAL USE ONLY! True if this post type is a native or "built-in" post_type. Default false.
       '_edit_link'           => 'post.php?post=%d'  , // (string) FOR INTERNAL USE ONLY! URL segment to use for edit link of this post type. Default 'post.php?post=%d'.


        ];
    register_post_type('movies', $args);
}
// add this into the constructor method .
add_action('init', 'create_movie_cpt', 0);
