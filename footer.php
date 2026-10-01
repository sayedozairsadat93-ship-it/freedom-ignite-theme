<?php
/**
 * The header for our theme.
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#content"><?php esc_html_e('Skip to content', 'freedom-ignite'); ?></a>
<header class="site-header" id="site-header">
    <div class="site-header-inner">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="brand" aria-label="<?php bloginfo('name'); ?>">
            <span class="brand-mark">F</span>
            <span class="brand-text">
                <span><?php bloginfo('name'); ?></span>
                <small><?php echo esc_html(get_bloginfo('description') ?: __('Community • Events • Action', 'freedom-ignite')); ?></small>
            </span>
        </a>

        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'primary',
                'container' => 'nav',
                'container_class' => 'site-nav',
                'menu_class' => 'menu',
                'fallback_cb' => false,
            )
        );
        ?>

        <div class="header-actions">
            <?php echo wp_kses_post(freedom_ignite_get_header_cta()); ?>
        </div>

        <button class="mobile-toggle" type="button" aria-expanded="false" aria-controls="primary-menu">
            <?php esc_html_e('Menu', 'freedom-ignite'); ?>
        </button>
    </div>
</header>
