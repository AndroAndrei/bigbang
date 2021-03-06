<?php
/**
 * bigbang functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * This is a list of theme functionalities.
 * If you don't want to use any of these, just comment the line
 * or you can modify every file and enable/disable any functionality.
 *
 * @package bigbang
 */

/**
 * Set a framework/framework_directory to work on this theme.
 *
 * Options: clean, bootstrap, foundation
 */
$GLOBALS['framework'] = 'bootstrap';
$GLOBALS['framework_path'] = 'frameworks/' . $GLOBALS['framework'];

// Framework functions.
if ( $GLOBALS['framework'] === 'bootstrap' ) {
	require_once(  get_template_directory() . '/' . $GLOBALS['framework_path'] . '/functions.php');
}

// Theme setup.
require_once( get_template_directory() . '/functions/theme-setup.php' );

// Register widget area.
require_once( get_template_directory() . '/functions/widgets.php' );

// WP Head and other cleanup functions.
require_once( get_template_directory() . '/functions/cleanup.php' );

// Enqueue scripts and styles.
require_once( get_template_directory() . '/functions/scripts-styles.php' );

// Miscellaneous functions.
require_once( get_template_directory() . '/functions/misc.php' );

// Enable multiple languages.
require_once( get_template_directory() . '/functions/languages.php' );

// Helpers.
// require get_template_directory() . '/plugins/helpers/pagination.php';

// Custom Post Types.
require get_template_directory() . '/plugins/post-types/services-post-type.php';
require get_template_directory() . '/plugins/post-types/promotions-post-type.php';
// require get_template_directory() . '/plugins/post-types/custom-post-type.php';

// Custom Taxonomies.
// require get_template_directory() . '/plugins/taxonomies/custom-taxonomy.php';

// Custom Fields - Components.
require get_template_directory() . '/plugins/fields/components/component-common-fields.php';
require get_template_directory() . '/plugins/fields/components/component-heading.php';
require get_template_directory() . '/plugins/fields/components/component-background.php';
require get_template_directory() . '/plugins/fields/components/component-button.php';
require get_template_directory() . '/plugins/fields/components/component-carousel-options.php';
require get_template_directory() . '/plugins/fields/components/component-grid-options.php';
require get_template_directory() . '/plugins/fields/components/component-newsletter.php';
require get_template_directory() . '/plugins/fields/components/component-slide.php';
require get_template_directory() . '/plugins/fields/components/component-services.php';
require get_template_directory() . '/plugins/fields/components/component-form.php';
require get_template_directory() . '/plugins/fields/components/component-testimonials.php';
require get_template_directory() . '/plugins/fields/components/component-blog.php';
require get_template_directory() . '/plugins/fields/components/component-item-callout.php';

// Custom Fields - Modules.
require get_template_directory() . '/plugins/fields/modules/module-hero.php';
require get_template_directory() . '/plugins/fields/modules/module-slideshow.php';
require get_template_directory() . '/plugins/fields/modules/module-grid.php';
require get_template_directory() . '/plugins/fields/modules/module-newsletter.php';
require get_template_directory() . '/plugins/fields/modules/module-form.php';
require get_template_directory() . '/plugins/fields/modules/module-3steps.php';
require get_template_directory() . '/plugins/fields/modules/module-services.php';
require get_template_directory() . '/plugins/fields/modules/module-testimonials.php';
require get_template_directory() . '/plugins/fields/modules/module-blog.php';
require get_template_directory() . '/plugins/fields/modules/module-content-boxes.php';
require get_template_directory() . '/plugins/fields/modules/module-feature-content.php';

// Custom Fields - Layouts.
require get_template_directory() . '/plugins/fields/page-modules.php';
require get_template_directory() . '/plugins/fields/header-footer-modules.php';
// require get_template_directory() . '/plugins/fields/post-modules.php';

// Custom Fields - Custom Post Type Single Fields.
require get_template_directory() . '/plugins/fields/intro-fields.php';
require get_template_directory() . '/plugins/fields/icon-fields.php';
require get_template_directory() . '/plugins/fields/blog-fields.php';

// Custom Fields - Theme Options Fields.
require get_template_directory() . '/plugins/fields/theme-options/theme-options-header.php';
require get_template_directory() . '/plugins/fields/theme-options/theme-options-social-icons.php';
require get_template_directory() . '/plugins/fields/theme-options/theme-options-contact-us.php';
require get_template_directory() . '/plugins/fields/theme-options/theme-options-footer.php';
require get_template_directory() . '/plugins/fields/theme-options.php';
