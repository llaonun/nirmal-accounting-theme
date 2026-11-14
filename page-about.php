<?php
/**
 * Template Name: About Page
 *
 * @package NB_Accounting
 */
get_header();
?>

<div class="page-hero">
    <div class="container">
        <h1><?php esc_html_e( 'About Us', 'nirmal-accounting' ); ?></h1>
        <p><?php esc_html_e( 'An online accounting practice built for how modern businesses actually work.', 'nirmal-accounting' ); ?></p>
    </div>
</div>

<section class="why">
    <div class="container">
        <div>
            <span class="section-kicker"><?php esc_html_e( 'Who we are', 'nirmal-accounting' ); ?></span>
            <h2 class="section-title"><?php esc_html_e( 'Your accounts team, wherever you are', 'nirmal-accounting' ); ?></h2>
            <p class="section-sub"><?php esc_html_e( 'We are an online-first accounting service helping businesses in Nepal and around the world stay on top of their books, taxes and payroll — without hiring in-house or visiting an office.', 'nirmal-accounting' ); ?></p>
            <p style="color:var(--nb-muted)"><?php esc_html_e( 'Our clients range from Nepali SMEs dealing with VAT, TDS and SSF compliance, to international businesses that want reliable bookkeeping in Xero or QuickBooks at a sensible cost. The model is simple: you run your business, we run your numbers.', 'nirmal-accounting' ); ?></p>
            <ul class="why-list">
                <li>
                    <span class="n">1</span>
                    <div><strong><?php esc_html_e( 'Experienced accountant-led', 'nirmal-accounting' ); ?></strong><p><?php esc_html_e( 'Your books are handled by someone who lives and breathes accounting — not a data-entry pool.', 'nirmal-accounting' ); ?></p></div>
                </li>
                <li>
                    <span class="n">2</span>
                    <div><strong><?php esc_html_e( 'Fluent in your software', 'nirmal-accounting' ); ?></strong><p><?php esc_html_e( 'Xero, QuickBooks, Tally Prime, Zoho Books, Wave — we work inside the system you already use.', 'nirmal-accounting' ); ?></p></div>
                </li>
                <li>
                    <span class="n">3</span>
                    <div><strong><?php esc_html_e( 'Worldwide, by design', 'nirmal-accounting' ); ?></strong><p><?php esc_html_e( 'Built online from day one — time zones and borders do not change how we deliver.', 'nirmal-accounting' ); ?></p></div>
                </li>
                <li>
                    <span class="n">4</span>
                    <div><strong><?php esc_html_e( 'Confidential, always', 'nirmal-accounting' ); ?></strong><p><?php esc_html_e( 'Your financial data is never shared, sold or discussed. Strict confidentiality on every client.', 'nirmal-accounting' ); ?></p></div>
                </li>
            </ul>
        </div>
        <div class="why-visual">
            <h3><?php esc_html_e( 'What you stop worrying about', 'nirmal-accounting' ); ?></h3>
            <ul>
                <li><?php esc_html_e( 'Scrambling before VAT deadlines', 'nirmal-accounting' ); ?></li>
                <li><?php esc_html_e( 'Messy bills in a shoebox', 'nirmal-accounting' ); ?></li>
                <li><?php esc_html_e( 'Guessing your real profit', 'nirmal-accounting' ); ?></li>
                <li><?php esc_html_e( 'TDS mistakes and penalties', 'nirmal-accounting' ); ?></li>
                <li><?php esc_html_e( 'Payroll errors every month', 'nirmal-accounting' ); ?></li>
                <li><?php esc_html_e( 'Year-end panic before audit', 'nirmal-accounting' ); ?></li>
            </ul>
        </div>
    </div>
</section>

<?php get_template_part( 'template-parts/software-strip' ); ?>
<?php get_template_part( 'template-parts/cta-band' ); ?>

<?php get_footer(); ?>
