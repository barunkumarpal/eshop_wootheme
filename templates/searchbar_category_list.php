<?php

$cat_args = array(
    'orderby'    =>'name',
    'order'      => 'asc',
    'hide_empty' => false,
);
 
$product_categories = get_terms( 'product_cat', $cat_args );
 
if( !empty($product_categories) ){
    echo '<select>';

        foreach ($product_categories as $key => $category) {
            echo '<option value="'.get_term_link($category).'">';
           // echo '<a href="'.get_term_link($category).'" >';
            echo $category->name;
            //echo '</a>';
            echo '</option>';
        }

    echo '</select>
 
 
';
}
?>

						
								