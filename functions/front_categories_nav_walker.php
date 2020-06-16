<?php
 class front_categories_menu extends Walker_Nav_Menu{

    public $megamenu_ID = 0;

    public function start_el( &$output, $item, $depth = 0, $args = [], $id = 0){   
        
        

        $classes = empty($item->classes) ? array() : (array) $item->classes;
        
        // managing megamenu class: add megamenu class to an element to get a megamenu.
        $megamenu_class_position = array_search('mega-menu', $classes);
        if ($megamenu_class_position !== false) {
            $output .= '<li class="mega-menu">';  
            $this->$megamenu_ID = 1;         
        } else{
            $output .= '<li>';
        }

        // Divide Column
        $divider_class = array_search('divide_column', $classes);
        if($divider_class !== false){
            $output .= '</ul></div><div class="single-menu"><ul>';
        }

        
        //$output .= $args->before;

        $output .= '<a href="'.$item->url.'">';
        $output .= $args->link_before.$item->title.$args->link_after;

        if (in_array("menu-item-has-children", $item->classes)) {
            $output .='<i class="fa fa-angle-right" aria-hidden="true"></i>';
        }

        if(array_search('image', $classes) !== false){

            $post_id = url_to_postid( $item->url );
            $output .= "<img alt=\"".esc_attr($item->attr_title)."\" src=\"".get_the_post_thumbnail_url( $post_id )."\" width=\"100\"/>";
        } 


        $output .='</a>';
       //$output .= $args->after;


   
    } 

        public function start_lvl( &$output, $depth = 0, $args = []){
           
                

                if($this->$megamenu_ID == 1){
                    $output .= '<ul class="mega-menu"><div class="single-menu"><ul>';                    
                }else{
                    $output .= '<ul class="sub-category">';
                }




            }    
        
        public function end_lvl( &$output, $depth = 0, $args = []){
            if($this->$megamenu_ID == 1){
                $output .= '</ul></div></ul>';
            }else{
                $output .= '</ul>';    
            }
                         
        }
          
    public function end_el(&$output, $item, $depth = 0, $args = [], $id = 0){        

        $output .= '</li>';
    }

 }