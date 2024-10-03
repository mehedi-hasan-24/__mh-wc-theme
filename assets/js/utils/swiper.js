const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
    effect: 'cube',
    cubeEffect: {
        shadow: true, // Enable shadow
        slideShadows: true, // Enable slide shadows
        shadowOffset: 20, // Offset for the shadow
        shadowScale: 0.94, // Scale for the shadow
    },
  
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },speed: 1200,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false
      },
  });

  console.log(swiper);
// FOR Testing product filterss
  jQuery(document).ready(function($) {
    $('#apply_filters').on('click', function(e) {
        e.preventDefault();
        console.log("clicked...");
        
        var category = $('#filter_product_cat').val();
        var minPrice = $('#min_price').val();
        var maxPrice = $('#max_price').val();

        $.ajax({
            url: my_ajax_object.ajax_url, // Use wp_localize_script to pass this variable
            type: 'POST',
            data: {
                action: 'filter_products',
                category: category,
                min_price: minPrice,
                max_price: maxPrice
            },
            success: function(response) {
                $('#shop-products-container').html(response); // Update products container
            }
        });
    });
});

  