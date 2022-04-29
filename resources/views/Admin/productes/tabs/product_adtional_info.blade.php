        
        
          @push('js')

         <script type="text/javascript">

            var x=1;

            $(document).on('click','.xpremo2',function(){



                var xpremo1=10;

                

                if (x < xpremo1) 

                {

                    //$('.xpremo3').append('<h1>test</h1>');



                    $('.xpremo3').append('<div>'+

            '<div class="col-sm-2 col-sm-2 col-md-2 col-lg-2">'+

               '{!! Form::label('input_key',trans('admin.input_key')) !!}'+

            '{!! Form::color('input_key[]','',['class'=>'form-control input_key']) !!}'+



         '</div>'+



         '<div class="col-sm-2 col-sm-2 col-md-2 col-lg-2">'+

              ' {!! Form::label('input_value',trans('admin.input_value')) !!} '+

          '{!! Form::text('input_value[]','',['class'=>'form-control input_value']) !!}'+

            

         '</div>'+

          '<div class="col-sm-2 col-sm-2 col-md-2 col-lg-2">'+

          '  {!! Form::label('colorprice',trans('admin.colorprice')) !!}'+

'{!!Form::text('colorprice[]','',['class'=>'form-control colorprice' ]) !!}'+

            

        '</div>'+

            ' <div class="col-sm-2 col-sm-2 col-md-2 col-lg-2">'+

             ' {!! Form::label('qty',trans('admin.qty')) !!}'+

          '{!! Form::text('qty[]','',['class'=>'form-control qty' ]) !!}'+

            

        ' </div >'+
 
 


           '<div class="col-sm-2 col-sm-2 col-md-2 col-lg-2">'+

              ' {!! Form::label('colorphoto',trans('admin.colorphoto')) !!} '+

          '{!! Form::file('colorphoto[]',['class'=>'form-control colorphoto']) !!}'+

            

         '</div>'+

         '<div class="clearfix"> </div>'+

                '<br>'+

           '<a href="#" class="exprmo5 btn btn-danger"><i class="fa fa-trash"> </i>'+ '</a>'+

           '<div class="clearfix"> </div>'+

                '<br>'+

         '</div>');

                    x+=1;

         

                    return false;

                }

            });



            $(document).on('click','.exprmo5',function(){



                $(this).parent('div').remove();

                x-=1;

                return false;

            });

         </script>

         @endpush



        

<div id="menu4" class="tab-pane fade">

      <h3>الالوان </h3>



         <div class="xpremo3 col-sm-12 col-sm-12 col-md-12 col-lg-12">

            @foreach($productes->other_data_R()->get() as $data)

         <div>

            <div class="col-sm-2 col-sm-2 col-md-2 col-lg-2">

               {!! Form::label('input_key',trans('admin.input_key')) !!}

            {!! Form::color('input_key[]',$data->input_key,['class'=>'form-control input_key']) !!}



         </div>



         <div class="col-sm-2 col-sm-2 col-md-2 col-lg-2">

               {!! Form::label('input_value',trans('admin.input_value')) !!}

            {!! Form::text('input_value[]',$data->input_value,['class'=>'form-control input_value' ]) !!}

            

         </div>


         <div class="col-sm-2 col-sm-2 col-md-2 col-lg-2">

               {!! Form::label('colorprice',trans('admin.colorprice')) !!}

            {!! Form::text('colorprice[]',$data->colorprice,['class'=>'form-control colorprice' ]) !!}

            

         </div>

             <div class="col-sm-2 col-sm-2 col-md-2 col-lg-2">

               {!! Form::label('qty',trans('admin.qty')) !!}

            {!! Form::text('qty[]',$data->qty,['class'=>'form-control qty' ]) !!}

            

         </div >

            <div class="col-sm-2 col-sm-2 col-md-2 col-lg-2">

               {!! Form::label('colorphoto',trans('admin.colorphoto')) !!}

            {!! Form::file('colorphoto[]',['class'=>'form-control colorphoto' ]) !!}

            <img src="{{substr($data->colorphoto,30,50)}}"  style="width: 50px;height: 50px">

         </div>

         <div class="clearfix"> </div>

                <br>

           <a href="#" class="exprmo5 btn btn-danger"><i class="fa fa-trash"> </i> </a>

           <div class="clearfix"> </div>

                <br>

         </div>

            

            @endforeach

         </div>



           <a href="#" class="xpremo2 btn btn-info"><i class="fa fa-plus"> </i> </a>

                <div class="clearfix"> </div>

                <br>

    </div>

<hr>

   


   