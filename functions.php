function ht_all_custom_post_admin_menu() {
    add_menu_page(
        'All Custom Post Types',
        'All Custom Post Types',
        'read',
        'custom-post-types',  // use this in your custom post type show in menu options
        '', // Callback, leave empty
        'dashicons-calendar',
        4 // Position
    );
	// add_submenu_page( 'custom-post-types', 'My Custom Submenu Page', 'My Custom Submenu Page',
    // 'manage_options', 'my-secondary-slug', 'ht_all_posts_from_post_types');
}

add_action( 'admin_menu', 'ht_all_custom_post_admin_menu' );
