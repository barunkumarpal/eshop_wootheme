<?php
class eshop_primary_nav_walker extends Walker_Nav_Menu{

    public function start_el( &$output, $item, $depth = 0, $args = [], $id = 0){
        $output .= '<li>';
        $output .= $args->before;
        $output .= '<a href="'.$item->url.'">';
        $output .= $args->link_before.$item->title.$args->link_after;

        if (in_array("menu-item-has-children", $item->classes)) {
            $output .='<i class="ti-angle-down"></i>';
        }


        $output .='</a>';
        $output .= $args->after;
    } 

        public function start_lvl( &$output, $depth = 0, $args = []){
                $output .= '<ul class="dropdown">';
            }    
        
        public function end_lvl( &$output, $depth = 0, $args = []){
            $output .= '</ul>';
        }
          
    public function end_el(&$output, $item, $depth = 0, $args = [], $id = 0){
        $output .= '</li>';
    }
       
    
        
}