<?php
/**
 * Single page template
 *
 * @package NB_Accounting
 */
get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>
<div class="page-hero">
    <div class="container">
        <h1><?php the_title(); ?></h1>
    </div>
</div>
<section>
    <div class="container content-area">
        <?php the_content(); ?>
    </div>
</section>
<?php endwhile; ?>

<?php get_footer(); ?>
