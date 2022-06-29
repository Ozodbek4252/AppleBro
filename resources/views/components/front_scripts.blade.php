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
  function refreshLivewire(){
    Livewire.emit('refreshLivewire')
  }
</script>

<script>
  function message(){
    var name = $("input#feedback-form__name").val();
    var phone = $("input#feedback-form__tel").val();

    if (phone != '') {
      if (name != '') {
        $('.feedback-wrap').css('display', 'none');
        $('.feedback-done').css('display', 'block');
        $.ajax({
          type: "GET",
          url: "/messages/create",
          data: {
            name: name,
            phone: phone
          },
          contentType: "application/json; charset=utf-8",
          dataType: "json",
          success: function() {
            $('.feedback-wrap').css('display', 'none');
            $('.feedback-done').css('display', 'block');
          },
          failure: function(errMsg) {}
        });
      } else {
        document.getElementById("feedback-form__name").placeholder = "Ismingiz (majburiy)";
      }
    } else {
      document.getElementById("feedback-form__tel").placeholder = "Sizning raqamingiz (majburiy)";
    }
  }

  function closeMessage(){
    $('.feedback-wrap').css('display', 'block');
    $('.feedback-done').css('display', 'none');
    $("#feedback-form__name").val('');
    $("input#feedback-form__tel").val('');
  }
</script>