          @push('js')

         <script type="text/javascript">

         	var x=1;

         	$(document).on('click','.zxzxzxzx',function(){



         		var fffffffffffffff=10;

         		

         		if (x < fffffffffffffff) 

         		{

         			//$('.div_inpute').append('<h1>test</h1>');



         			$('.div_inpute').append('<div>'+

         	'<div class="col-sm-2 col-sm-2 col-md-2 col-lg-2">'+

         	   '{!! Form::label('sizeNAme',trans('admin.sizeNAme')) !!}'+

            '{!! Form::text('sizeNAme[]','',['class'=>'form-control sizeNAme']) !!}'+



         '</div>'+



         '<div class="col-sm-2 col-sm-2 col-md-2 col-lg-2">'+

         	  ' {!! Form::label('sizePrice',trans('admin.sizePrice')) !!} '+

          '{!! Form::text('sizePrice[]','',['class'=>'form-control sizePrice']) !!}'+

         	

         '</div>'+

            '<div class="col-sm-2 col-sm-2 col-md-2 col-lg-2">'+

              ' {!! Form::label('qty',trans('admin.qty')) !!} '+

          '{!! Form::text('qty[]','',['class'=>'form-control qty']) !!}'+

            

         '</div>'+

            '  <div class="col-sm-2 col-sm-2 col-md-2 col-lg-2">'+

   '<select name="color[]" class="form-control color">'+
            '@foreach($productes->other_data_R()->get() as $data)'+
  '<option value="{{$data->input_value }}"> {{ $data->input_value }} </option>'+
            '@endforeach'+
  
'</select>'+

         '</div>'+
 


       

         '<div class="clearfix"> </div>'+

                '<br>'+

           '<a href="#" class="tttttttttttttttttttttttt btn btn-danger"><i class="fa fa-trash"> </i>'+ '</a>'+

           '<div class="clearfix"> </div>'+

                '<br>'+

         '</div>');

         			x+=1;

         

         			return false;

         		}

         	});



         	$(document).on('click','.tttttttttttttttttttttttt',function(){



         		$(this).parent('div').remove();

         		x-=1;

         		return false;

         	});

         </script>

         @endpush


  @push('js')
              <script type="text/javascript">
                $(document).ready(function() {
        $('.mall_select2').select2();
});
              </script>
              @endpush
        

<div id="menu5" class="tab-pane fade">

      <h3>  المقاسات</h3>





         <div class="div_inpute col-sm-12 col-sm-12 col-md-12 col-lg-12">

         	@foreach($productes->OtherDatasٍSiZes_R()->get() as $data)

         <div>

         	<div class="col-sm-2 col-sm-2 col-md-2 col-lg-2">

         	   {!! Form::label('sizeNAme',trans('admin.sizeNAme')) !!}

            {!! Form::text('sizeNAme[]',$data->sizeNAme,['class'=>'form-control sizeNAme']) !!}



         </div>



         <div class="col-sm-2 col-sm-2 col-md-2 col-lg-2">

         	   {!! Form::label('sizePrice',trans('admin.sizePrice')) !!}

            {!! Form::text('sizePrice[]',$data->sizePrice,['class'=>'form-control sizePrice' ]) !!}

         	

         </div>


         <div class="col-sm-2 col-sm-2 col-md-2 col-lg-2">

               {!! Form::label('qty',trans('admin.qty')) !!}

            {!! Form::text('qty[]',$data->qty,['class'=>'form-control qty' ]) !!}

         </div>

            

            <div class="col-sm-2 col-sm-2 col-md-2 col-lg-2">

   <select name="color[]" class="form-control color">

  <option value="{{$data->color }}"> {{ $data->color }} </option>

            @foreach($productes->other_data_R()->get() as $data)
  <option value="{{$data->id }}"> {{ $data->input_value }} </option>
            @endforeach
  
</select>

         </div>

          

            

         <div class="clearfix"> </div>

                <br>

           <a href="#" class="tttttttttttttttttttttttt btn btn-danger"><i class="fa fa-trash"> </i> </a>

           <div class="clearfix"> </div>

                <br>

         </div>

            

            @endforeach

         </div>



           <a href="#" class="zxzxzxzx btn btn-info"><i class="fa fa-plus"> </i> </a>

                <div class="clearfix"> </div>

                <br>


                

    </div>

    <hr>



   