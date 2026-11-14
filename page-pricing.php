<?php
/**
 * Template Name: Pricing Page
 *
 * @package NB_Accounting
 */
get_header();
?>

<div class="page-hero">
    <div class="container">
        <h1><?php esc_html_e( 'Pricing', 'nirmal-accounting' ); ?></h1>
        <p><?php esc_html_e( 'One flat monthly fee. No surprises, no hidden charges.', 'nirmal-accounting' ); ?></p>
    </div>
</div>

<section class="pricing" id="pricing">
    <div class="container">
        <div class="center">
            <span class="section-kicker" style="color:var(--nb-gold-light)"><?php esc_html_e( 'Monthly plans', 'nirmal-accounting' ); ?></span>
            <h2 class="section-title"><?php esc_html_e( 'Pick the plan that fits your business', 'nirmal-accounting' ); ?></h2>
            <p class="section-sub"><?php esc_html_e( 'Upgrade or downgrade anytime. Every plan includes online delivery and on-time filings.', 'nirmal-accounting' ); ?></p>
        </div>
        <?php get_template_part( 'template-parts/pricing-table' ); ?>
    </div>
</section>

<section>
    <div class="container">
        <div class="center">
            <span class="section-kicker"><?php esc_html_e( 'Good to know', 'nirmal-accounting' ); ?></span>
            <h2 class="section-title"><?php esc_html_e( 'Pricing questions', 'nirmal-accounting' ); ?></h2>
        </div>
        <div class="faq-wrap">
            <div class="faq-item">
                <button class="faq-q"><?php esc_html_e( 'Are there any setup fees?', 'nirmal-accounting' ); ?><span class="plus">+</span></button>
                <div class="faq-a"><p><?php esc_html_e( 'No setup fee for monthly plans. If your past books need cleanup before we start, we quote that separately as a one-time fee.', 'nirmal-accounting' ); ?></p></div>
            </div>
            <div class="faq-item">
                <button class="faq-q"><?php esc_html_e( 'Can I change plans later?', 'nirmal-accounting' ); ?><span class="plus">+</span></button>
                <div class="faq-a"><p><?php esc_html_e( 'Yes — upgrade or downgrade at the start of any month. Your plan simply follows your business size.', 'nirmal-accounting' ); ?></p></div>
            </div>
            <div class="faq-item">
                <button class="faq-q"><?php esc_html_e( 'How do clients outside Nepal pay?', 'nirmal-accounting' ); ?><span class="plus">+</span></button>
                <div class="faq-a"><p><?php esc_html_e( 'International clients are billed the USD equivalent of the plan price at the prevailing rate, payable by bank transfer.', 'nirmal-accounting' ); ?></p></div>
            </div>
            <div class="faq-item">
                <button class="faq-q"><?php esc_html_e( 'What if I only need one service, like VAT filing?', 'nirmal-accounting' ); ?><span class="plus">+</span></button>
                <div class="faq-a"><p><?php esc_html_e( 'Message us — we offer standalone filing and payroll services too, quoted individually.', 'nirmal-accounting' ); ?></p></div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part( 'template-parts/cta-band' ); ?>

<?php get_footer(); ?>
