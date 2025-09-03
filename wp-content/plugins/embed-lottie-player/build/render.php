<?php
$id = wp_unique_id( 'lpbLottiePlayer-' );
$planClass = lpbIsPremium() ? 'premium' : 'free';
?>
<div <?php echo get_block_wrapper_attributes( [ 'class' => $planClass ] ); ?> id='<?php echo esc_attr( $id ); ?>' data-attributes='<?php echo esc_attr( wp_json_encode( $attributes ) ); ?>'></div>