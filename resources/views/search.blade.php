<script type="text/javascript"> //create a delay for the keyup function
  function delay(callback, ms) {
    var timer = 0;
    return function() {
      var context = this, args = arguments;
      clearTimeout(timer);
      timer = setTimeout(function () {
        callback.apply(context, args);
      }, ms || 0);
    };
  }

  // ajax Check on search input
   $(document).ready(function(){
     $("#search").keyup(delay(function(){
          var search = $(this).val().trim();
          console.log(search);
              if(search != ''){
                  $.ajax({
                      url: "{{ url('/AjaxSearch') }}",
                      type: 'POST',
                      data: {search: search},
                      headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      },
                      success: function(response){
                          ajaxCallBack(response);
                       }
                  });
              }
          }, 500));
      });
   </script>