<?php
/**
 * Shared: contact cards + form
 *
 * @package NB_Accounting
 */
?>
<div class="contact-grid">
    <div class="contact-cards">
        <div class="c-card">
            <span class="ic"><svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 0 0-8.6 15.1L2 22l5-1.3A10 10 0 1 0 12 2zm5.3 14.1c-.2.6-1.3 1.2-1.8 1.2-.5.1-1 .2-3.4-.7-2.9-1.2-4.7-4.1-4.9-4.3-.1-.2-1.1-1.5-1.1-2.9s.7-2 1-2.3c.2-.3.5-.3.7-.3h.5c.2 0 .4 0 .6.5s.8 1.9.8 2c.1.1.1.3 0 .5-.3.6-.6.8-.4 1.1.7 1.2 1.6 2 2.8 2.6.3.2.5.1.7-.1l.8-.9c.2-.3.4-.2.7-.1l2 1c.3.1.5.2.6.4 0 .1 0 .6-.1 1.3z"/></svg></span>
            <div>
                <strong><?php esc_html_e( 'WhatsApp', 'nirmal-accounting' ); ?></strong>
                <a href="<?php echo nb_acc_wa_link( __( 'Hello, I need accounting services.', 'nirmal-accounting' ) ); ?>" target="_blank" rel="noopener"><?php echo esc_html( nb_acc_opt( 'nb_whatsapp', '9703140647' ) ); ?></a>
                <p style="font-size:13.5px;color:var(--nb-muted)"><?php esc_html_e( 'Fastest response — usually within 2 hours.', 'nirmal-accounting' ); ?></p>
            </div>
        </div>
        <div class="c-card">
            <span class="ic"><svg viewBox="0 0 24 24"><path d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg></span>
            <div>
                <strong><?php esc_html_e( 'Email', 'nirmal-accounting' ); ?></strong>
                <a href="mailto:<?php echo esc_attr( nb_acc_opt( 'nb_email', 'contact@nirmalbhattarai12.com.np' ) ); ?>"><?php echo esc_html( nb_acc_opt( 'nb_email', 'contact@nirmalbhattarai12.com.np' ) ); ?></a>
            </div>
        </div>
        <div class="c-card">
            <span class="ic"><svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm1 10.6l4.2 2.5-.8 1.3L11 13.5V7h2v5.6z"/></svg></span>
            <div>
                <strong><?php esc_html_e( 'Working Hours', 'nirmal-accounting' ); ?></strong>
                <p><?php echo esc_html( nb_acc_opt( 'nb_hours', '9:00 AM – 12:00 AM' ) ); ?>, <?php esc_html_e( 'every day', 'nirmal-accounting' ); ?></p>
            </div>
        </div>
        <div class="c-card">
            <span class="ic"><svg viewBox="0 0 24 24"><path d="M12 2a7 7 0 0 0-7 7c0 5.2 7 13 7 13s7-7.8 7-13a7 7 0 0 0-7-7zm0 9.5A2.5 2.5 0 1 1 12 6.5a2.5 2.5 0 0 1 0 5z"/></svg></span>
            <div>
                <strong><?php esc_html_e( 'Address', 'nirmal-accounting' ); ?></strong>
                <p><?php echo esc_html( nb_acc_opt( 'nb_address', 'Online' ) ); ?> — <?php esc_html_e( 'serving clients worldwide', 'nirmal-accounting' ); ?></p>
            </div>
        </div>
    </div>
    <div class="contact-form">
        <h3><?php esc_html_e( 'Send us a message', 'nirmal-accounting' ); ?></h3>
        <p><?php esc_html_e( 'Fill this in and we will get back to you shortly.', 'nirmal-accounting' ); ?></p>
        <?php nb_acc_contact_form(); ?>
    </div>
</div>
