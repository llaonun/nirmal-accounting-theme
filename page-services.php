<?php
/**
 * Template Name: Services Page
 *
 * @package NB_Accounting
 */
get_header();
?>

<div class="page-hero">
    <div class="container">
        <h1><?php esc_html_e( 'Our Services', 'nirmal-accounting' ); ?></h1>
        <p><?php esc_html_e( 'Complete accounting and compliance — delivered 100% online, in Xero, QuickBooks, Tally and more, for clients in Nepal and worldwide.', 'nirmal-accounting' ); ?></p>
    </div>
</div>

<section class="services" style="background:#fff">
    <div class="container">
        <?php get_template_part( 'template-parts/services-grid' ); ?>
    </div>
</section>

<?php get_template_part( 'template-parts/software-strip' ); ?>

<section id="process" style="padding-top:40px">
    <div class="container">
        <div class="center">
            <span class="section-kicker"><?php esc_html_e( 'Simple process', 'nirmal-accounting' ); ?></span>
            <h2 class="section-title"><?php esc_html_e( 'How it works', 'nirmal-accounting' ); ?></h2>
        </div>
        <div class="steps-grid">
            <div class="step">
                <h3><?php esc_html_e( 'Say hello', 'nirmal-accounting' ); ?></h3>
                <p><?php esc_html_e( 'Message us on WhatsApp or the contact page. We discuss your business and give you a clear monthly quote.', 'nirmal-accounting' ); ?></p>
            </div>
            <div class="step">
                <h3><?php esc_html_e( 'Share documents', 'nirmal-accounting' ); ?></h3>
                <p><?php esc_html_e( 'Send bills, invoices and bank statements over WhatsApp, email or Google Drive — whatever is easiest for you.', 'nirmal-accounting' ); ?></p>
            </div>
            <div class="step">
                <h3><?php esc_html_e( 'We handle everything', 'nirmal-accounting' ); ?></h3>
                <p><?php esc_html_e( 'Bookkeeping, VAT/TDS filings, payroll — maintained and filed on schedule, with reminders before every deadline.', 'nirmal-accounting' ); ?></p>
            </div>
            <div class="step">
                <h3><?php esc_html_e( 'Get clear reports', 'nirmal-accounting' ); ?></h3>
                <p><?php esc_html_e( 'Every month you receive a simple report: what you earned, what you spent, and what is due next.', 'nirmal-accounting' ); ?></p>
            </div>
        </div>
    </div>
</section>

<?php get_template_part( 'template-parts/cta-band' ); ?>

<?php get_footer(); ?>
