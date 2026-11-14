<?php
/**
 * Blog index fallback
 *
 * @package NB_Accounting
 */
get_header();
?>

<div class="page-hero">
    <div class="container">
        <h1><?php esc_html_e( 'Updates & Insights', 'nirmal-accounting' ); ?></h1>
        <p><?php esc_html_e( 'Practical tax, VAT and compliance notes for Nepali businesses.', 'nirmal-accounting' ); ?></p>
    </div>
</div>

<section>
    <div class="container">
        <?php if ( have_posts() ) : ?>
            <div class="blog-grid">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article class="post-card">
                        <div class="pc-body">
                            <div class="meta"><?php echo esc_html( get_the_date() ); ?></div>
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
            <div style="margin-top:36px;text-align:center">
                <?php the_posts_pagination(); ?>
            </div>
        <?php else : ?>
            <p class="center"><?php esc_html_e( 'No posts yet — check back soon.', 'nirmal-accounting' ); ?></p>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
