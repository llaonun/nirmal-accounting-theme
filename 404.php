<?php
/**
 * 404 template
 *
 * @package NB_Accounting
 */
get_header();
?>

<section class="nav-404">
    <div class="container">
        <h1>404</h1>
        <h2><?php esc_html_e( 'Page not found', 'nirmal-accounting' ); ?></h2>
        <p style="color:var(--nb-muted)"><?php esc_html_e( 'The page you are looking for does not exist or was moved.', 'nirmal-accounting' ); ?></p>
        <p style="margin-top:24px"><a class="btn btn-navy" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back to Home', 'nirmal-accounting' ); ?></a></p>
    </div>
</section>

<?php get_footer(); ?>
