<?php
/**
 * NB Accounting — theme functions
 *
 * @package NB_Accounting
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

define( 'NB_ACC_VERSION', '1.0.0' );

/* ---------- Theme setup ---------- */
function nb_acc_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', array(
        'height'      => 60,
        'width'       => 220,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support( 'responsive-embeds' );

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'nirmal-accounting' ),
        'footer'  => __( 'Footer Menu', 'nirmal-accounting' ),
    ) );
}
add_action( 'after_setup_theme', 'nb_acc_setup' );

/* ---------- Assets ---------- */
function nb_acc_assets() {
    wp_enqueue_style( 'nb-acc-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap', array(), null );
    wp_enqueue_style( 'nb-acc-style', get_stylesheet_uri(), array( 'nb-acc-fonts' ), NB_ACC_VERSION );
    wp_enqueue_script( 'nb-acc-main', get_template_directory_uri() . '/js/main.js', array(), NB_ACC_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'nb_acc_assets' );

/* ---------- Helpers: business info ---------- */
function nb_acc_opt( $key, $default = '' ) {
    return get_theme_mod( $key, $default );
}
function nb_acc_whatsapp() {
    $num = preg_replace( '/\D/', '', nb_acc_opt( 'nb_whatsapp', '9703140647' ) );
    // Assume Nepal (+977) for 10-digit mobile numbers starting with 97/98
    if ( strlen( $num ) === 10 && strpos( $num, '977' ) !== 0 ) {
        $num = '977' . $num;
    }
    return $num;
}
function nb_acc_wa_link( $text = '' ) {
    $url = 'https://wa.me/' . nb_acc_whatsapp();
    if ( $text ) { $url .= '?text=' . rawurlencode( $text ); }
    return esc_url( $url );
}

/* ---------- Customizer ---------- */
function nb_acc_customize( $wp_customize ) {

    $wp_customize->add_section( 'nb_business', array(
        'title'    => __( 'Business Info', 'nirmal-accounting' ),
        'priority' => 30,
    ) );

    $fields = array(
        'nb_whatsapp' => array( __( 'WhatsApp Number', 'nirmal-accounting' ), '9703140647' ),
        'nb_email'    => array( __( 'Email Address', 'nirmal-accounting' ), 'contact@nirmalbhattarai12.com.np' ),
        'nb_hours'    => array( __( 'Working Hours', 'nirmal-accounting' ), '9:00 AM – 12:00 AM' ),
        'nb_address'  => array( __( 'Address', 'nirmal-accounting' ), 'Online' ),
    );
    foreach ( $fields as $id => $f ) {
        $wp_customize->add_setting( $id, array( 'default' => $f[1], 'sanitize_callback' => 'sanitize_text_field' ) );
        $wp_customize->add_control( $id, array( 'label' => $f[0], 'section' => 'nb_business', 'type' => 'text' ) );
    }

    // Hero
    $wp_customize->add_section( 'nb_hero', array(
        'title'    => __( 'Homepage Hero', 'nirmal-accounting' ),
        'priority' => 31,
    ) );
    $wp_customize->add_setting( 'nb_hero_title', array( 'default' => 'Accounting & Compliance, Handled <span class="hl">100% Online</span>', 'sanitize_callback' => 'wp_kses_post' ) );
    $wp_customize->add_control( 'nb_hero_title', array( 'label' => __( 'Hero Title (HTML allowed)', 'nirmal-accounting' ), 'section' => 'nb_hero', 'type' => 'textarea' ) );
    $wp_customize->add_setting( 'nb_hero_sub', array( 'default' => 'Bookkeeping, VAT & TDS filing, and payroll — handled remotely in Xero, QuickBooks, Tally and more, for clients in Nepal and worldwide.', 'sanitize_callback' => 'sanitize_textarea_field' ) );
    $wp_customize->add_control( 'nb_hero_sub', array( 'label' => __( 'Hero Subtitle', 'nirmal-accounting' ), 'section' => 'nb_hero', 'type' => 'textarea' ) );

    // Pricing
    $wp_customize->add_section( 'nb_pricing', array(
        'title'    => __( 'Pricing Plans', 'nirmal-accounting' ),
        'priority' => 32,
    ) );
    $plans = array(
        1 => array( 'Starter', '5000', 'Growing businesses that need the essentials covered.', "Monthly bookkeeping (up to 100 transactions)\nQuarterly VAT return filing\nEmail support\nYear-end books ready for audit" ),
        2 => array( 'Growth', '10000', 'For businesses that want compliance fully handled.', "Everything in Starter\nMonthly VAT return filing\nTDS computation & filing\nPayroll for up to 10 staff\nMonthly profit & loss report\nPriority WhatsApp support" ),
        3 => array( 'Professional', '18000', 'For established businesses with bigger teams.', "Everything in Growth\nPayroll for up to 30 staff\nMIS & cash-flow reports\nAnnual income-tax filing support\nDedicated accountant" ),
    );
    foreach ( $plans as $i => $p ) {
        $wp_customize->add_setting( "nb_plan{$i}_name", array( 'default' => $p[0], 'sanitize_callback' => 'sanitize_text_field' ) );
        $wp_customize->add_control( "nb_plan{$i}_name", array( 'label' => sprintf( __( 'Plan %d Name', 'nirmal-accounting' ), $i ), 'section' => 'nb_pricing', 'type' => 'text' ) );
        $wp_customize->add_setting( "nb_plan{$i}_price", array( 'default' => $p[1], 'sanitize_callback' => 'sanitize_text_field' ) );
        $wp_customize->add_control( "nb_plan{$i}_price", array( 'label' => sprintf( __( 'Plan %d Price (NPR/month)', 'nirmal-accounting' ), $i ), 'section' => 'nb_pricing', 'type' => 'text' ) );
        $wp_customize->add_setting( "nb_plan{$i}_desc", array( 'default' => $p[2], 'sanitize_callback' => 'sanitize_text_field' ) );
        $wp_customize->add_control( "nb_plan{$i}_desc", array( 'label' => sprintf( __( 'Plan %d Short Description', 'nirmal-accounting' ), $i ), 'section' => 'nb_pricing', 'type' => 'text' ) );
        $wp_customize->add_setting( "nb_plan{$i}_features", array( 'default' => $p[3], 'sanitize_callback' => 'sanitize_textarea_field' ) );
        $wp_customize->add_control( "nb_plan{$i}_features", array( 'label' => sprintf( __( 'Plan %d Features (one per line)', 'nirmal-accounting' ), $i ), 'section' => 'nb_pricing', 'type' => 'textarea' ) );
    }
    $wp_customize->add_setting( 'nb_plan_featured', array( 'default' => '2', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp_customize->add_control( 'nb_plan_featured', array(
        'label'   => __( 'Highlighted Plan', 'nirmal-accounting' ),
        'section' => 'nb_pricing',
        'type'    => 'select',
        'choices' => array( '1' => '1', '2' => '2', '3' => '3' ),
    ) );
}
add_action( 'customize_register', 'nb_acc_customize' );

/* ---------- Contact form handler ---------- */
function nb_acc_contact_form() {
    if ( isset( $_GET['sent'] ) && $_GET['sent'] === '1' ) {
        echo '<div class="form-msg ok">' . esc_html__( 'Thank you! Your message has been sent. We usually reply within a few hours during working hours.', 'nirmal-accounting' ) . '</div>';
    } elseif ( isset( $_GET['sent'] ) && $_GET['sent'] === '0' ) {
        echo '<div class="form-msg err">' . esc_html__( 'Something went wrong sending your message. Please try WhatsApp instead.', 'nirmal-accounting' ) . '</div>';
    }
    ?>
    <form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
        <input type="hidden" name="action" value="nb_contact">
        <?php wp_nonce_field( 'nb_contact_nonce', 'nb_nonce' ); ?>
        <div class="f-row">
            <div class="f-group">
                <label for="nb-name"><?php esc_html_e( 'Your Name *', 'nirmal-accounting' ); ?></label>
                <input type="text" id="nb-name" name="nb_name" required>
            </div>
            <div class="f-group">
                <label for="nb-phone"><?php esc_html_e( 'Phone / WhatsApp *', 'nirmal-accounting' ); ?></label>
                <input type="text" id="nb-phone" name="nb_phone" required>
            </div>
        </div>
        <div class="f-group">
            <label for="nb-email2"><?php esc_html_e( 'Email', 'nirmal-accounting' ); ?></label>
            <input type="email" id="nb-email2" name="nb_email">
        </div>
        <div class="f-group">
            <label for="nb-service"><?php esc_html_e( 'Service Needed', 'nirmal-accounting' ); ?></label>
            <select id="nb-service" name="nb_service">
                <option><?php esc_html_e( 'Monthly Bookkeeping', 'nirmal-accounting' ); ?></option>
                <option><?php esc_html_e( 'VAT Filing', 'nirmal-accounting' ); ?></option>
                <option><?php esc_html_e( 'TDS Compliance', 'nirmal-accounting' ); ?></option>
                <option><?php esc_html_e( 'Payroll Management', 'nirmal-accounting' ); ?></option>
                <option><?php esc_html_e( 'Business Registration', 'nirmal-accounting' ); ?></option>
                <option><?php esc_html_e( 'Other / Not Sure', 'nirmal-accounting' ); ?></option>
            </select>
        </div>
        <div class="f-group">
            <label for="nb-msg"><?php esc_html_e( 'Your Message *', 'nirmal-accounting' ); ?></label>
            <textarea id="nb-msg" name="nb_message" required></textarea>
        </div>
        <div class="hp-field" aria-hidden="true">
            <input type="text" name="nb_website" tabindex="-1" autocomplete="off">
        </div>
        <button type="submit" class="btn btn-navy"><?php esc_html_e( 'Send Message', 'nirmal-accounting' ); ?></button>
    </form>
    <?php
}

function nb_acc_handle_contact() {
    if ( ! isset( $_POST['nb_nonce'] ) || ! wp_verify_nonce( $_POST['nb_nonce'], 'nb_contact_nonce' ) ) {
        wp_safe_redirect( add_query_arg( 'sent', '0', wp_get_referer() ? wp_get_referer() : home_url( '/' ) ) );
        exit;
    }
    // Honeypot
    if ( ! empty( $_POST['nb_website'] ) ) {
        wp_safe_redirect( add_query_arg( 'sent', '1', wp_get_referer() ? wp_get_referer() : home_url( '/' ) ) );
        exit;
    }
    $name    = sanitize_text_field( $_POST['nb_name'] ?? '' );
    $phone   = sanitize_text_field( $_POST['nb_phone'] ?? '' );
    $email   = sanitize_email( $_POST['nb_email'] ?? '' );
    $service = sanitize_text_field( $_POST['nb_service'] ?? '' );
    $message = sanitize_textarea_field( $_POST['nb_message'] ?? '' );

    if ( $name === '' || $phone === '' || $message === '' ) {
        wp_safe_redirect( add_query_arg( 'sent', '0', wp_get_referer() ? wp_get_referer() : home_url( '/' ) ) );
        exit;
    }

    $to      = nb_acc_opt( 'nb_email', 'contact@nirmalbhattarai12.com.np' );
    $subject = sprintf( __( 'New enquiry from %s — %s', 'nirmal-accounting' ), $name, $service );
    $body    = "Name: {$name}\nPhone/WhatsApp: {$phone}\nEmail: {$email}\nService: {$service}\n\nMessage:\n{$message}\n";
    $headers = $email ? array( 'Reply-To: ' . $name . ' <' . $email . '>' ) : array();

    $sent = wp_mail( $to, $subject, $body, $headers );
    wp_safe_redirect( add_query_arg( 'sent', $sent ? '1' : '0', wp_get_referer() ? wp_get_referer() : home_url( '/' ) ) );
    exit;
}
add_action( 'admin_post_nopriv_nb_contact', 'nb_acc_handle_contact' );
add_action( 'admin_post_nb_contact', 'nb_acc_handle_contact' );

/* ---------- Excerpt length ---------- */
function nb_acc_excerpt_length( $length ) { return 22; }
add_filter( 'excerpt_length', 'nb_acc_excerpt_length' );
