<?php
/**
 * Homepage template — NB Accounting
 *
 * @package NB_Accounting
 */
get_header();
?>

<!-- HERO -->
<section class="hero" style="padding-top:96px;padding-bottom:110px">
    <div class="container">
        <div>
            <span class="hero-kicker"><?php esc_html_e( 'Online Accounting Services — Worldwide', 'nirmal-accounting' ); ?></span>
            <h1><?php echo wp_kses_post( nb_acc_opt( 'nb_hero_title', 'Accounting & Compliance, Handled <span class="hl">100% Online</span>' ) ); ?></h1>
            <p class="lead"><?php echo esc_html( nb_acc_opt( 'nb_hero_sub', 'Bookkeeping, VAT & TDS filing, and payroll — handled remotely in Xero, QuickBooks, Tally and more, so you can focus on growing your business.' ) ); ?></p>
            <div class="hero-ctas">
                <a class="btn btn-wa" href="<?php echo nb_acc_wa_link( __( 'Hello, I would like a free consultation about accounting services.', 'nirmal-accounting' ) ); ?>" target="_blank" rel="noopener"><?php esc_html_e( 'Chat on WhatsApp', 'nirmal-accounting' ); ?></a>
                <a class="btn btn-outline-w" href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Explore Services', 'nirmal-accounting' ); ?></a>
            </div>
            <div class="hero-points">
                <div><span class="tick">✓</span> <?php esc_html_e( 'No office visits needed', 'nirmal-accounting' ); ?></div>
                <div><span class="tick">✓</span> <?php esc_html_e( 'Xero · QuickBooks · Tally', 'nirmal-accounting' ); ?></div>
                <div><span class="tick">✓</span> <?php esc_html_e( 'Clients in Nepal & worldwide', 'nirmal-accounting' ); ?></div>
            </div>
        </div>
        <div class="hero-card">
            <h3><?php esc_html_e( 'Free 15-Minute Consultation', 'nirmal-accounting' ); ?></h3>
            <p><?php esc_html_e( 'Tell us about your business and get a clear quote — no obligation.', 'nirmal-accounting' ); ?></p>
            <div class="mini-row"><span><?php esc_html_e( 'WhatsApp', 'nirmal-accounting' ); ?></span><strong><?php echo esc_html( nb_acc_opt( 'nb_whatsapp', '9703140647' ) ); ?></strong></div>
            <div class="mini-row"><span><?php esc_html_e( 'Email', 'nirmal-accounting' ); ?></span><strong style="font-size:13px"><?php echo esc_html( nb_acc_opt( 'nb_email', 'contact@nirmalbhattarai12.com.np' ) ); ?></strong></div>
            <div class="mini-row"><span><?php esc_html_e( 'Working hours', 'nirmal-accounting' ); ?></span><strong><?php echo esc_html( nb_acc_opt( 'nb_hours', '9:00 AM – 12:00 AM' ) ); ?></strong></div>
            <a class="btn btn-gold" href="<?php echo nb_acc_wa_link( __( 'Hello, I would like a free 15-minute consultation.', 'nirmal-accounting' ) ); ?>" target="_blank" rel="noopener"><?php esc_html_e( 'Book Free Consultation', 'nirmal-accounting' ); ?></a>
            <p class="hero-note"><?php esc_html_e( 'Average reply time: under 2 hours during working hours.', 'nirmal-accounting' ); ?></p>
        </div>
    </div>
</section>

<!-- TRUST STRIP -->
<div class="trust">
    <div class="container">
        <div><strong>100%</strong><span><?php esc_html_e( 'Online service delivery', 'nirmal-accounting' ); ?></span></div>
        <div><strong>15 hrs</strong><span><?php esc_html_e( 'Available every day', 'nirmal-accounting' ); ?></span></div>
        <div><strong>0</strong><span><?php esc_html_e( 'Missed filing deadlines — our promise', 'nirmal-accounting' ); ?></span></div>
        <div><strong>NPR</strong><span><?php esc_html_e( 'Transparent monthly pricing', 'nirmal-accounting' ); ?></span></div>
    </div>
</div>

<!-- SERVICES PREVIEW -->
<section class="services" id="services">
    <div class="container">
        <div class="center">
            <span class="section-kicker"><?php esc_html_e( 'What we do', 'nirmal-accounting' ); ?></span>
            <h2 class="section-title"><?php esc_html_e( 'Complete accounting, without the office', 'nirmal-accounting' ); ?></h2>
            <p class="section-sub"><?php esc_html_e( 'Everything your business needs to stay compliant — handled remotely in the software you already use, reported clearly, filed on time.', 'nirmal-accounting' ); ?></p>
        </div>
        <div class="serv-grid">
            <div class="serv-card">
                <div class="serv-icon"><svg viewBox="0 0 24 24"><path d="M19 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2zm-9 14H7v-2h3v2zm0-4H7v-2h3v2zm0-4H7V7h3v2zm7 8h-5v-2h5v2zm0-4h-5v-2h5v2zm0-4h-5V7h5v2z"/></svg></div>
                <h3><?php esc_html_e( 'Monthly Bookkeeping', 'nirmal-accounting' ); ?></h3>
                <p><?php esc_html_e( 'Clean, up-to-date books every month — maintained directly in Xero, QuickBooks, Tally or your preferred software.', 'nirmal-accounting' ); ?></p>
                <a class="serv-link" href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Learn more →', 'nirmal-accounting' ); ?></a>
            </div>
            <div class="serv-card">
                <div class="serv-icon"><svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/></svg></div>
                <h3><?php esc_html_e( 'VAT Return Filing', 'nirmal-accounting' ); ?></h3>
                <p><?php esc_html_e( 'Never miss a VAT deadline again. We prepare, verify and file your VAT returns with the IRD — monthly or quarterly.', 'nirmal-accounting' ); ?></p>
                <a class="serv-link" href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Learn more →', 'nirmal-accounting' ); ?></a>
            </div>
            <div class="serv-card">
                <div class="serv-icon"><svg viewBox="0 0 24 24"><path d="M16 11a4 4 0 1 0-4-4 4 4 0 0 0 4 4zm-8 0a4 4 0 1 0-.4-7.98A5.99 5.99 0 0 1 9 7a6 6 0 0 1-1.4 3.9A4 4 0 0 0 8 11zm8 2c-2.7 0-8 1.3-8 4v3h16v-3c0-2.7-5.3-4-8-4zm-8 .6A6.6 6.6 0 0 1 9.5 13C6.6 13.2 2 14.4 2 17v3h4v-3c0-1.7 1-3 2-3.4z"/></svg></div>
                <h3><?php esc_html_e( 'Payroll Management', 'nirmal-accounting' ); ?></h3>
                <p><?php esc_html_e( 'Salary sheets, SSF contributions, CIT deductions and payslips — accurate payroll for your whole team.', 'nirmal-accounting' ); ?></p>
                <a class="serv-link" href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Learn more →', 'nirmal-accounting' ); ?></a>
            </div>
        </div>
        <div class="center" style="margin-top:36px">
            <a class="btn btn-navy" href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'View All Services', 'nirmal-accounting' ); ?></a>
        </div>
    </div>
</section>

<?php get_template_part( 'template-parts/software-strip' ); ?>

<!-- HOW IT WORKS -->
<section id="process">
    <div class="container">
        <div class="center">
            <span class="section-kicker"><?php esc_html_e( 'Simple process', 'nirmal-accounting' ); ?></span>
            <h2 class="section-title"><?php esc_html_e( 'Working with us takes 4 steps', 'nirmal-accounting' ); ?></h2>
            <p class="section-sub"><?php esc_html_e( 'No paperwork marathons. No office visits. Just a smooth online workflow.', 'nirmal-accounting' ); ?></p>
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
        <div class="center" style="margin-top:36px">
            <a class="btn btn-gold" href="<?php echo esc_url( home_url( '/pricing/' ) ); ?>"><?php esc_html_e( 'See Pricing Plans', 'nirmal-accounting' ); ?></a>
        </div>
    </div>
</section>

<!-- TESTIMONIALS -->
<section class="testimonials" id="testimonials">
    <div class="container">
        <div class="center">
            <span class="section-kicker"><?php esc_html_e( 'Client words', 'nirmal-accounting' ); ?></span>
            <h2 class="section-title"><?php esc_html_e( 'Businesses that sleep better now', 'nirmal-accounting' ); ?></h2>
        </div>
        <div class="testi-grid">
            <div class="testi">
                <div class="stars">★★★★★</div>
                <p><?php esc_html_e( '"I used to dread every VAT deadline. Now I just forward my bills on WhatsApp and everything gets filed. I have not thought about compliance in months."', 'nirmal-accounting' ); ?></p>
                <div class="who"><span class="avatar">R</span><div><strong><?php esc_html_e( 'Retail Store Owner', 'nirmal-accounting' ); ?></strong><span><?php esc_html_e( 'Kathmandu', 'nirmal-accounting' ); ?></span></div></div>
            </div>
            <div class="testi">
                <div class="stars">★★★★★</div>
                <p><?php esc_html_e( '"The monthly report is the best part — one page, plain language, and I finally know my actual profit instead of guessing."', 'nirmal-accounting' ); ?></p>
                <div class="who"><span class="avatar">S</span><div><strong><?php esc_html_e( 'Restaurant Owner', 'nirmal-accounting' ); ?></strong><span><?php esc_html_e( 'Pokhara', 'nirmal-accounting' ); ?></span></div></div>
            </div>
            <div class="testi">
                <div class="stars">★★★★★</div>
                <p><?php esc_html_e( '"Payroll for 12 staff, SSF, TDS — all handled. It costs less than half of hiring an accountant, and nothing is ever late."', 'nirmal-accounting' ); ?></p>
                <div class="who"><span class="avatar">A</span><div><strong><?php esc_html_e( 'IT Company Founder', 'nirmal-accounting' ); ?></strong><span><?php esc_html_e( 'Lalitpur', 'nirmal-accounting' ); ?></span></div></div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part( 'template-parts/cta-band' ); ?>

<?php get_footer(); ?>
