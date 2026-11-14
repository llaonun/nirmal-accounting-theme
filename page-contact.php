<?php
/**
 * Template Name: Contact Page
 *
 * @package NB_Accounting
 */
get_header();
?>

<div class="page-hero">
    <div class="container">
        <h1><?php esc_html_e( 'Contact Us', 'nirmal-accounting' ); ?></h1>
        <p><?php esc_html_e( 'WhatsApp is fastest — but the form and email work just as well.', 'nirmal-accounting' ); ?></p>
    </div>
</div>

<section id="contact">
    <div class="container">
        <?php get_template_part( 'template-parts/contact-section' ); ?>
    </div>
</section>

<?php get_footer(); ?>
