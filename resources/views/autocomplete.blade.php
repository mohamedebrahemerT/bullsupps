  @extends('forentend3.index')

@section('content')

@push('js')



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

  
   
<script>
$(document).ready(function(){

 $('#search').keyup(function(){ 
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('autocomplete.fetch') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
           $('#countryList').fadeIn();  
                    $('#ttttttt').html(data);

                  
          }
         });
        }
    });

    $(document).on('click', 'li', function(){  
        $('#search').val($(this).text());  
        $('#countryList').fadeOut();  
    });  

});
</script>

@endpush

  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
   }
  </style>
 

  
  <div class="container box">
   <h3 align="center">Ajax Autocomplete Textbox in Laravel using JQuery</h3><br />
   
   <div class="form-group">

    <input type="text" name="search" id="search" class="form-control input-lg" placeholder="Enter Country Name" />

  <div id="ttttttt"></div>

   </div>

   {{ csrf_field() }}
   
  </div>


@endsection
