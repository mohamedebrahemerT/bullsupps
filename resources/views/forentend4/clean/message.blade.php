 
@if(session()->has('success') )
  <div class="alert alert-success" style="text-align: center;font-size:30px;">

  	{{session('success')}}
  	
  </div>
@endif

                    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

 
 
                 


      

   
 


 