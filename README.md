<?php
get_header();
?>
<main id="content">
    <section class="page-hero">
        <div class="container">
            <h1><?php esc_html_e('Latest Updates', 'freedom-ignite'); ?></h1>
        </div>
    </section>

    <div class="entry-content">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article <?php post_class(); ?>>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div><?php the_excerpt(); ?></div>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p><?php esc_html_e('No posts found.', 'freedom-ignite'); ?></p>
        <?php endif; ?>
    </div>
</main>
<?php get_footer(); ?>
