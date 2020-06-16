<?php
function my_change_breadcrumb_delimiter( $defaults ) {
	// Change the breadcrumb delimiter from '/' to '>'
	$defaults['delimiter'] = ' <i class="ti-arrow-right"></i> ';
	return $defaults;
}

// Minicart ajax
function woocommerce_header_add_to_cart_fragment( $fragments ) {

	ob_start();

	?>    
        
        <a href="#" class="single-icon minicart-count"><i class="ti-bag"></i> 
            <span class="total-count">
                <?php 
                $count = 0;
                foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
                    $count++;         
                }
                echo $count;
            ?>
        </span>
        </a>    

    <?php
  
   $fragments['a.minicart-count'] = ob_get_clean();
    
	return $fragments;
}

// Minicart Ajax
function eshop_minicart_add_to_cart_fragment_ajax( $fragments ){
	ob_start();
	$path = get_theme_file_path();

	include($path.'/templates/minicart-shoping-item.php');

	$fragments['div.shopping-item'] = ob_get_clean();    
	return $fragments;
}
