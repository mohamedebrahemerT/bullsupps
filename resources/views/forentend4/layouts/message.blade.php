<br>
@if(session()->has('success') )

  <div class="alert alert-success" style="text-align: center;font-size:20px;">



  	{{session('success')}}

  	

  </div>

@endif


@if(session()->has('danger') )

  <div class="alert alert-danger" style="text-align: center;font-size:20px;">



  	{{session('danger')}}

  	

  </div>

@endif



      

            @if (session()->has('status'))
            <div class="alert alert-success">
                {{ session()->get('status') }}
            </div>
            @endif @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

                 





      



   

 





 