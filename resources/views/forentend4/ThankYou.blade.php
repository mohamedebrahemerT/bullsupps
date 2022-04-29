 @extends('forentend4.index')



@section('content')

  



<div class="container">

  <ul class="breadcrumb">

        <li><a href="{{url('/')}}">{{trans('admin.Home')}}</a></li>

        <li><a href="">{{trans('admin.ThankYou')}}</a></li>

      </ul>

  <div class="row">

                <div id="content" class="col-sm-12 item-article">

    

      <div class="row box-1-about">

           <h1 style="text-align: center;">{{trans('admin.ThankYou')}}</h1>    
           <h1 style="text-align: center;">
                              <a href="{{url('/')}}/my-orders"> 
                                {{trans('admin.Click here to track the order')}}
                        
</a>
         </h1>    



</div>









    </div>

    </div>

</div>

<br>

<br>

@endsection

