<?php
function eshop_load_posts_on_homepage(){ 
   // $template = '';
   $path = get_theme_file_path();

  $template = include($path.'/templates/home_blogposts.php');
  //$template = "hello";
  return $template;    
  //wp_send_json($template);
}