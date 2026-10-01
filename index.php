<?php
get_header();
?>
<main id="content">
    <section class="page-hero">
        <div class="container">
            <?php while (have_posts()) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <p><?php echo esc_html(get_bloginfo('description') ?: __('Community, events, and mission-driven action.', 'freedom-ignite')); ?></p>
            <?php endwhile; ?>
        </div>
    </section>

    <div class="entry-content">
        <?php while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    </div>
</main>
<?php get_footer(); ?>
