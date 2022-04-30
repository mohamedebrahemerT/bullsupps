        
        
          @push('js')

         <script type="text/javascript">

            var x=1;

            $(document).on('click','.xpremo2',function(){



                var xpremo1=10;

                

                if (x < xpremo1) 

                {

                    //$('.xpremo3').append('<h1>test</h1>');



                    $('.xpremo3').append('<div>'+

            '<div class="col-sm-10 col-sm-10 col-md-10 col-lg-10">'+

               '{!! Form::label('input_key',trans('admin.bnerlink')) !!}'+

            '{!! Form::text('input_key[]','',['class'=>'form-control input_key']) !!}'+



         '</div>'+

 


           '<div class="col-sm-2 col-sm-2 col-md-2 col-lg-2">'+

                            ' {!! Form::label('input_value',trans('admin.input_value11')) !!} '+

                    '{!! Form::file('input_value[]',['class'=>'form-control input_value']) !!}'+

            

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



        

 <div id="menu5" class="tab-pane fade in active">

      <h3> بنرات الاقسام </h3>



         <div class="xpremo3 col-sm-12 col-sm-12 col-md-12 col-lg-12">

            @foreach($Departmentbanners->other_data_otherDataDepartmentbanners()->get() as $data)

         <div>

            <div class="col-sm-10 col-sm-10 col-md-10 col-lg-10">

               {!! Form::label('input_key',trans('admin.bnerlink')) !!}

            {!! Form::text('input_key[]',$data->input_key,['class'=>'form-control input_key']) !!}

  <img src="{{url('/')}}/{{$data->input_value}}"  style="width: 1040px;">

         </div>


 

            <div class="col-sm-2 col-sm-2 col-md-2 col-lg-2">

                      {!! Form::label('input_value',trans('admin.input_value11')) !!}

            {!! Form::file('input_value[]',['class'=>'form-control input_value' ]) !!}

          

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

   


   