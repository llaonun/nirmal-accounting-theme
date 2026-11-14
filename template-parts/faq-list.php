<?php
/**
 * Shared: FAQ accordion
 *
 * @package NB_Accounting
 */
$faqs = array(
    array(
        __( 'Do I ever need to visit an office?', 'nirmal-accounting' ),
        __( 'No. The entire service is online — onboarding, document sharing, reports and support all happen over WhatsApp, email or video call.', 'nirmal-accounting' ),
    ),
    array(
        __( 'How do I share my bills and documents?', 'nirmal-accounting' ),
        __( 'Whatever is easiest for you: photos on WhatsApp, email attachments, or a shared Google Drive folder. We organise everything on our side.', 'nirmal-accounting' ),
    ),
    array(
        __( 'Which accounting software do you work with?', 'nirmal-accounting' ),
        __( 'Xero, QuickBooks, Tally Prime, Zoho Books and Wave. If you already use one of these, we work directly in your books — no forced migration.', 'nirmal-accounting' ),
    ),
    array(
        __( 'Do you work with clients outside Nepal?', 'nirmal-accounting' ),
        __( 'Yes — we serve clients worldwide. Everything is handled online, and international clients are billed in USD equivalent.', 'nirmal-accounting' ),
    ),
    array(
        __( 'Is my financial data safe with you?', 'nirmal-accounting' ),
        __( 'Yes. Client financial data is treated with strict confidentiality and never shared with anyone. Your books are your business.', 'nirmal-accounting' ),
    ),
    array(
        __( 'How do I pay the monthly fee?', 'nirmal-accounting' ),
        __( 'Monthly via eSewa, Khalti, or bank transfer — international clients can pay via bank transfer. You receive an invoice each month; no long-term lock-in, cancel anytime.', 'nirmal-accounting' ),
    ),
    array(
        __( 'My books are a mess from last year. Can you fix that?', 'nirmal-accounting' ),
        __( 'Absolutely — backlog cleanup is one of our most requested services. Message us and we will quote a one-time cleanup fee based on the volume.', 'nirmal-accounting' ),
    ),
);
?>
<div class="faq-wrap">
    <?php foreach ( $faqs as $faq ) : ?>
    <div class="faq-item">
        <button class="faq-q"><?php echo esc_html( $faq[0] ); ?><span class="plus">+</span></button>
        <div class="faq-a"><p><?php echo esc_html( $faq[1] ); ?></p></div>
    </div>
    <?php endforeach; ?>
</div>
