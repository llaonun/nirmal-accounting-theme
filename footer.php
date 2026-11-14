</main>

<footer class="site-footer">
    <div class="container">
        <div class="foot-grid">
            <div class="foot-brand">
                <a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <span class="brand-mark">N</span>
                    <span class="brand-text">
                        <strong><?php bloginfo( 'name' ); ?></strong>
                        <span><?php bloginfo( 'description' ); ?></span>
                    </span>
                </a>
                <p><?php esc_html_e( 'Online accounting, bookkeeping and compliance for businesses in Nepal and worldwide — professional books, on-time filings, zero office visits.', 'nirmal-accounting' ); ?></p>
            </div>
            <div>
                <h4><?php esc_html_e( 'Quick Links', 'nirmal-accounting' ); ?></h4>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'footer',
                    'container'      => false,
                    'menu_class'     => 'foot-links',
                    'fallback_cb'    => 'nb_acc_fallback_footer',
                ) );
                ?>
            </div>
            <div>
                <h4><?php esc_html_e( 'Services', 'nirmal-accounting' ); ?></h4>
                <ul class="foot-links">
                    <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Monthly Bookkeeping', 'nirmal-accounting' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'VAT Return Filing', 'nirmal-accounting' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'TDS Compliance', 'nirmal-accounting' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Payroll Management', 'nirmal-accounting' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Business Registration', 'nirmal-accounting' ); ?></a></li>
                </ul>
            </div>
            <div>
                <h4><?php esc_html_e( 'Contact', 'nirmal-accounting' ); ?></h4>
                <ul class="foot-contact">
                    <li>
                        <svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm0 18a8 8 0 1 1 0-16 8 8 0 0 1 0 16zM11 7h2v6h-2V7zm0 8h2v2h-2v-2z"/></svg>
                        <span><?php esc_html_e( 'Address:', 'nirmal-accounting' ); ?> <?php echo esc_html( nb_acc_opt( 'nb_address', 'Online' ) ); ?></span>
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 0 0-8.6 15.1L2 22l5-1.3A10 10 0 1 0 12 2zm5.3 14.1c-.2.6-1.3 1.2-1.8 1.2-.5.1-1 .2-3.4-.7-2.9-1.2-4.7-4.1-4.9-4.3-.1-.2-1.1-1.5-1.1-2.9s.7-2 1-2.3c.2-.3.5-.3.7-.3h.5c.2 0 .4 0 .6.5s.8 1.9.8 2c.1.1.1.3 0 .5-.3.6-.6.8-.4 1.1.7 1.2 1.6 2 2.8 2.6.3.2.5.1.7-.1l.8-.9c.2-.3.4-.2.7-.1l2 1c.3.1.5.2.6.4 0 .1 0 .6-.1 1.3z"/></svg>
                        <a href="<?php echo nb_acc_wa_link(); ?>" target="_blank" rel="noopener"><?php echo esc_html( nb_acc_opt( 'nb_whatsapp', '9703140647' ) ); ?></a>
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24"><path d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
                        <a href="mailto:<?php echo esc_attr( nb_acc_opt( 'nb_email', 'contact@nirmalbhattarai12.com.np' ) ); ?>"><?php echo esc_html( nb_acc_opt( 'nb_email', 'contact@nirmalbhattarai12.com.np' ) ); ?></a>
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm1 10.6l4.2 2.5-.8 1.3L11 13.5V7h2v5.6z"/></svg>
                        <span><?php echo esc_html( nb_acc_opt( 'nb_hours', '9:00 AM – 12:00 AM' ) ); ?></span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="foot-bottom">
            <span>&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved.', 'nirmal-accounting' ); ?></span>
            <span><?php esc_html_e( 'Serving clients in Nepal & worldwide — 100% online.', 'nirmal-accounting' ); ?></span>
        </div>
    </div>
</footer>

<a class="wa-float" href="<?php echo nb_acc_wa_link( __( 'Hello, I need accounting services.', 'nirmal-accounting' ) ); ?>" target="_blank" rel="noopener" aria-label="Chat on WhatsApp">
    <svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 0 0-8.6 15.1L2 22l5-1.3A10 10 0 1 0 12 2zm5.3 14.1c-.2.6-1.3 1.2-1.8 1.2-.5.1-1 .2-3.4-.7-2.9-1.2-4.7-4.1-4.9-4.3-.1-.2-1.1-1.5-1.1-2.9s.7-2 1-2.3c.2-.3.5-.3.7-.3h.5c.2 0 .4 0 .6.5s.8 1.9.8 2c.1.1.1.3 0 .5-.3.6-.6.8-.4 1.1.7 1.2 1.6 2 2.8 2.6.3.2.5.1.7-.1l.8-.9c.2-.3.4-.2.7-.1l2 1c.3.1.5.2.6.4 0 .1 0 .6-.1 1.3z"/></svg>
</a>

<?php
function nb_acc_fallback_footer() {
    echo '<ul class="foot-links">';
    echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Home', 'nirmal-accounting' ) . '</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/services/' ) ) . '">' . esc_html__( 'Services', 'nirmal-accounting' ) . '</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/pricing/' ) ) . '">' . esc_html__( 'Pricing', 'nirmal-accounting' ) . '</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/about/' ) ) . '">' . esc_html__( 'About', 'nirmal-accounting' ) . '</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/contact/' ) ) . '">' . esc_html__( 'Contact', 'nirmal-accounting' ) . '</a></li>';
    echo '</ul>';
}
?>

<?php wp_footer(); ?>
</body>
</html>
