<?php
/**
 * Template Name: FAQ Page
 *
 * @package NB_Accounting
 */
get_header();
?>

<div class="page-hero">
    <div class="container">
        <h1><?php esc_html_e( 'Frequently Asked Questions', 'nirmal-accounting' ); ?></h1>
        <p><?php esc_html_e( 'Everything you might want to know before working with us.', 'nirmal-accounting' ); ?></p>
    </div>
</div>

<section id="faq">
    <div class="container">
        <?php get_template_part( 'template-parts/faq-list' ); ?>
        <div class="center" style="margin-top:40px">
            <p style="color:var(--nb-muted)"><?php esc_html_e( 'Still have a question?', 'nirmal-accounting' ); ?></p>
            <a class="btn btn-wa" href="<?php echo nb_acc_wa_link( __( 'Hello, I have a question about your services.', 'nirmal-accounting' ) ); ?>" target="_blank" rel="noopener"><?php esc_html_e( 'Ask on WhatsApp', 'nirmal-accounting' ); ?></a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
