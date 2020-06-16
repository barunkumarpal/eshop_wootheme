$(document).ready(
    function(){

        // Add Active class to li on primery menu
        $('li.current-menu-item').addClass('active');
        
        $('a.add_to_cart_button').click(
            function(){
                if( $(this).hasClass('product_type_variable')){

                }else{
                    $(this).html('Added to cart').attr('href', '#');
                   // $('#minicart').load(' #minicart');
                    //location.reload();
                }
                               
            }
        );

    
        
        // Cart Page Item Quantity
        $('.ti-minus').click(function () {
            var $input = $(this).parent().find('input');
            var count = parseInt($input.val()) - 1;
            count = count < 1 ? 1 : count;
            $input.val(count);
            $input.change();
            return false;
        });
        $('.ti-plus').click(function () {
            var $input = $(this).parent().find('input');
            $input.val(parseInt($input.val()) + 1);
            $input.change();
            return false;
        });

        $('input[type="number"]').keydown(function(e){
           
               return false;
           
        });

       
                              
        $('button[type="submit"]').removeAttr( 'disabled' );
       

      // Search bar Categories on click event on li    

      $('li.option').click(function(){
          var option_value = $(this).attr('data-value');
          window.location.href = option_value;
      });


      // Match current url with li and change text of span inside of search bar categories list
      var li_val = $('.search-bar-top').find('li.option').filter(function(index ){
        return $( this ).attr('data-value') === location.href
        }  	
        ).html();     


        $('.search-bar-top').find('span.current').html(li_val);




        

		
    }
);

(function($){

// Load more blogs on homepage

$('#load_posts').click(function(e){
    e.preventDefault();
    var form = {
        action: 'eshop_load_posts_homepage'        
    }

    $.post(eshop_wp_ajax_obj.ajax_url, form, function(data){
        
            $('#blog_posts').html(data);
          
    });
});

})(jQuery);