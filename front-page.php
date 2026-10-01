<?php
/**
 * The template for displaying the footer.
 */
?>
<footer class="site-footer">
    <div class="container footer-grid">
        <div>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="brand brand-footer" aria-label="<?php bloginfo('name'); ?>">
                <span class="brand-mark">F</span>
                <span class="brand-text">
                    <span><?php bloginfo('name'); ?></span>
                    <small><?php echo esc_html(get_bloginfo('description') ?: __('Ignite community impact', 'freedom-ignite')); ?></small>
                </span>
            </a>
            <p><?php echo esc_html__('We create high-energy experiences that connect supporters, families, organizations, and communities around a common purpose.', 'freedom-ignite'); ?></p>
        </div>

        <div>
            <h3><?php esc_html_e('Navigation', 'freedom-ignite'); ?></h3>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'menu footer-menu',
                    'fallback_cb' => false,
                )
            );
            ?>
        </div>

        <div>
            <h3><?php esc_html_e('Quick Links', 'freedom-ignite'); ?></h3>
            <ul>
                <li><a href="#mission"><?php esc_html_e('Our Mission', 'freedom-ignite'); ?></a></li>
                <li><a href="#attractions"><?php esc_html_e('Attractions', 'freedom-ignite'); ?></a></li>
                <li><a href="#partners"><?php esc_html_e('Partners', 'freedom-ignite'); ?></a></li>
                <li><a href="#registration"><?php esc_html_e('Register', 'freedom-ignite'); ?></a></li>
            </ul>
        </div>

        <div>
            <h3><?php esc_html_e('Contact', 'freedom-ignite'); ?></h3>
            <ul>
                <li><?php esc_html_e('123 Main Street', 'freedom-ignite'); ?></li>
                <li><?php esc_html_e('Austin, TX 78701', 'freedom-ignite'); ?></li>
                <li><a href="tel:+15550183">(555) 018-3000</a></li>
                <li><a href="mailto:hello@freedomignite.com">hello@freedomignite.com</a></li>
            </ul>
        </div>
    </div>

    <div class="container footer-bottom">
        <div><?php echo esc_html(date_i18n('Y')); ?> <?php bloginfo('name'); ?>. <?php esc_html_e('All rights reserved.', 'freedom-ignite'); ?></div>
        <div class="footer-links">
            <a href="<?php echo esc_url(home_url('/privacy-policy')); ?>"><?php esc_html_e('Privacy Policy', 'freedom-ignite'); ?></a>
            <a href="<?php echo esc_url(home_url('/terms')); ?>"><?php esc_html_e('Terms', 'freedom-ignite'); ?></a>
            <a href="#"><?php esc_html_e('Instagram', 'freedom-ignite'); ?></a>
            <a href="#"><?php esc_html_e('Facebook', 'freedom-ignite'); ?></a>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
