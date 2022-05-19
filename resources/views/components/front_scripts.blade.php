<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/jquery.inputmask.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/ion.rangeSlider.min.js"></script>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<script src="js/map.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/main.js"></script>
@livewireScripts

<script>
  $(document).ready(function (){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.addToWishlist').click(function (e){
      
      e.preventDefault();
      var product_id = e['currentTarget']['id'];

      $.ajax({
        type: 'POST',
        url: 'add_to_wishlist',
        data: {
          'product_id': product_id,
        },
        success: function(response){
            swal(response.status);
        }
      })
    
    })

  })

</script>