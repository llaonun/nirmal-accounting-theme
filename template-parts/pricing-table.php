<?php
/**
 * Shared: pricing table (3 plans from Customizer)
 *
 * @package NB_Accounting
 */
$featured = nb_acc_opt( 'nb_plan_featured', '2' );
?>
<div class="price-grid">
    <?php for ( $i = 1; $i <= 3; $i++ ) :
        $name     = nb_acc_opt( "nb_plan{$i}_name", array( 'Starter', 'Growth', 'Professional' )[ $i - 1 ] );
        $price    = nb_acc_opt( "nb_plan{$i}_price", array( '5000', '10000', '18000' )[ $i - 1 ] );
        $desc     = nb_acc_opt( "nb_plan{$i}_desc", '' );
        $features = array_filter( array_map( 'trim', explode( "\n", nb_acc_opt( "nb_plan{$i}_features", '' ) ) ) );
        $is_feat  = (string) $i === (string) $featured;
    ?>
    <div class="price-card<?php echo $is_feat ? ' featured' : ''; ?>">
        <?php if ( $is_feat ) : ?><span class="price-badge"><?php esc_html_e( 'Most Popular', 'nirmal-accounting' ); ?></span><?php endif; ?>
        <h3><?php echo esc_html( $name ); ?></h3>
        <p class="p-desc"><?php echo esc_html( $desc ); ?></p>
        <div class="price-amount">Rs. <?php echo esc_html( number_format_i18n( (float) $price ) ); ?> <small>/<?php esc_html_e( 'month', 'nirmal-accounting' ); ?></small></div>
        <ul>
            <?php foreach ( $features as $f ) : ?><li><?php echo esc_html( $f ); ?></li><?php endforeach; ?>
        </ul>
        <a class="btn <?php echo $is_feat ? 'btn-gold' : 'btn-navy'; ?>" href="<?php echo nb_acc_wa_link( sprintf( __( 'Hello, I am interested in the %s plan.', 'nirmal-accounting' ), $name ) ); ?>" target="_blank" rel="noopener"><?php esc_html_e( 'Choose Plan', 'nirmal-accounting' ); ?></a>
    </div>
    <?php endfor; ?>
</div>
<p class="price-note"><?php esc_html_e( 'Prices in NPR. International clients are billed the USD equivalent at the prevailing rate. Need something custom — multiple branches, backlog cleanup, or annual filing only? Message us for a tailored quote.', 'nirmal-accounting' ); ?></p>
