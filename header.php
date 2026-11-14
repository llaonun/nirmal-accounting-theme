<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="topbar">
    <div class="container">
        <div class="tb-group">
            <span>
                <svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm1 10.6l4.2 2.5-.8 1.3L11 13.5V7h2v5.6z"/></svg>
                <?php echo esc_html( nb_acc_opt( 'nb_hours', '9:00 AM – 12:00 AM' ) ); ?>
            </span>
            <span>
                <svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm0 18a8 8 0 1 1 0-16 8 8 0 0 1 0 16zm-1-13h2v6h-2V7zm0 8h2v2h-2v-2z" opacity=".9"/></svg>
                <?php esc_html_e( 'Address:', 'nirmal-accounting' ); ?> <?php echo esc_html( nb_acc_opt( 'nb_address', 'Online' ) ); ?>
            </span>
        </div>
        <div class="tb-group">
            <a href="mailto:<?php echo esc_attr( nb_acc_opt( 'nb_email', 'contact@nirmalbhattarai12.com.np' ) ); ?>">
                <svg viewBox="0 0 24 24"><path d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg><?php echo esc_html( nb_acc_opt( 'nb_email', 'contact@nirmalbhattarai12.com.np' ) ); ?>
            </a>
            <a href="<?php echo nb_acc_wa_link( __( 'Hello, I need accounting services.', 'nirmal-accounting' ) ); ?>" target="_blank" rel="noopener">
                <svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 0 0-8.6 15.1L2 22l5-1.3A10 10 0 1 0 12 2zm5.3 14.1c-.2.6-1.3 1.2-1.8 1.2-.5.1-1 .2-3.4-.7-2.9-1.2-4.7-4.1-4.9-4.3-.1-.2-1.1-1.5-1.1-2.9s.7-2 1-2.3c.2-.3.5-.3.7-.3h.5c.2 0 .4 0 .6.5s.8 1.9.8 2c.1.1.1.3 0 .5-.3.6-.6.8-.4 1.1.7 1.2 1.6 2 2.8 2.6.3.2.5.1.7-.1l.8-.9c.2-.3.4-.2.7-.1l2 1c.3.1.5.2.6.4 0 .1 0 .6-.1 1.3z"/></svg><?php echo esc_html( nb_acc_opt( 'nb_whatsapp', '9703140647' ) ); ?>
            </a>
        </div>
    </div>
</div>

<header class="site-header">
    <div class="container">
        <a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <?php if ( has_custom_logo() ) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <span class="brand-mark">N</span>
                <span class="brand-text">
                    <strong><?php bloginfo( 'name' ); ?></strong>
                    <span><?php bloginfo( 'description' ); ?></span>
                </span>
            <?php endif; ?>
        </a>

        <button class="nav-toggle" aria-label="<?php esc_attr_e( 'Toggle menu', 'nirmal-accounting' ); ?>" aria-expanded="false">
            <span></span><span></span><span></span>
        </button>

        <nav class="main-nav" aria-label="<?php esc_attr_e( 'Primary', 'nirmal-accounting' ); ?>">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'container'      => false,
                'fallback_cb'    => 'nb_acc_fallback_menu',
            ) );
            ?>
        </nav>

        <div class="header-cta">
            <a class="btn btn-wa btn-wa" href="<?php echo nb_acc_wa_link( __( 'Hello, I would like a free consultation.', 'nirmal-accounting' ) ); ?>" target="_blank" rel="noopener"><?php esc_html_e( 'WhatsApp Us', 'nirmal-accounting' ); ?></a>
            <a class="btn btn-navy" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Get a Quote', 'nirmal-accounting' ); ?></a>
        </div>
    </div>
</header>

<?php
function nb_acc_fallback_menu() {
    echo '<ul>';
    echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Home', 'nirmal-accounting' ) . '</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/services/' ) ) . '">' . esc_html__( 'Services', 'nirmal-accounting' ) . '</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/pricing/' ) ) . '">' . esc_html__( 'Pricing', 'nirmal-accounting' ) . '</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/about/' ) ) . '">' . esc_html__( 'About', 'nirmal-accounting' ) . '</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/faq/' ) ) . '">' . esc_html__( 'FAQ', 'nirmal-accounting' ) . '</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/contact/' ) ) . '">' . esc_html__( 'Contact', 'nirmal-accounting' ) . '</a></li>';
    echo '</ul>';
}
?>

<main id="main">
