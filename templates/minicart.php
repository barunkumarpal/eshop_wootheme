
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
include( 'minicart-shoping-item.php');