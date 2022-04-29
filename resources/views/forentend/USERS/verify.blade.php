 @extends('forentend3.index')

@section('content')


 @push('js')
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  
 @endpush
 
<div class="container">
    
    <div class="row justify-content-center">
        <div class="col-md-8 rightAly" style="margin-bottom: 95px;">
            <div class="card">
                <div class="card-header">{{trans('admin.verify')}}</div>

                    <form method="post" action="postverfiy">

                    	    <div class="card-body">
                	  <div class="form-group row">
                	     @csrf
                            <label for="code" class="col-md-4 col-form-label text-md-right">
                                {{trans('admin.code2')}}
                            </label>

                            <div class="col-md-6">
                                <input id="code" type="text" class="form-control" name="code" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{trans('admin.verify2')}}
                                  
                                </button>
                            </div>
                        </div>
                    	
                    </form>
                    <div class="curd-footer">
                    	

                        <form method="post" action="request_new_code">
                       @csrf
                            
                        <input type="hidden" name="new_email" value="{{$user->email}}">
                        <input type="hidden" name="new_phone" value="{{$user->phone}}">
                  
                        <input type="submit" name="new_code" value="{{trans('admin.SendNewCode')}}"> 
                        </form>
                    </div>
                
      </div>
    
      </div>

  </div>

  <br>
  <br>
  <br>
  <br>
  <br>
@endsection

 