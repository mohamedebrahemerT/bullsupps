  

  
    @push('js')
 


  <script type="text/javascript">        
  $('.datetpicker').datepicker({
        rtl:true,
        language:'{{ session("lang") }}',
        todayBtn:true,
        utoclose:false,
        clearBtn:true,
  });
           
             
             
        </script>
@endpush





   <div id="home" class="tab-pane fade in active">
      <h3>{{trans('admin.publicPayment_name_en')}}</h3>

          
 

               <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-check-square	
"></i>
            
              <h3 class="box-title">{{trans('admin.publicPayment_name_en')}}</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm RRR" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">  
                   <div class="form-group"> 
              

                     {{ Form::label('percentage', trans('admin.percentage'))  }}
                    {{ Form::text('percentage',$publicPayment->percentage,['class'=>'form-control percentage'])  }}
                     </div> 

                        <div class="form-group col-md-2 col-lg-2 col-sm-2"> 
              
                     {{ Form::label('RentValue', trans('admin.RentValue'))  }}
                    {{ Form::text('RentValue',$publicPayment->RentValue,['class'=>'form-control RentValue'])  }}
                     </div> 

                      

                        <div class="form-group col-md-2 col-lg-2 col-sm-2"> 
                     {{ Form::label('TypeOfRent', trans('admin.TypeOfRent'))  }}

            {!! Form::select('level', [$publicPayment->TypeOfRent=> $publicPayment->TypeOfRent] + ['Monthly' => trans('admin.Monthly'),'annual'=>trans('admin.annual')], null, ['class' => 'form-control TypeOfRent']) !!}
                     </div> 

                     

                      <div class="form-group col-md-2 col-lg-2 col-sm-2">
            {!! Form::label('start_at',trans('admin.start_at')) !!}
            {!! Form::text('start_at',$publicPayment->start_at,['class'=>'form-control start_at datetpicker','autocomplete'=>'off']) !!}
        </div>


                       <div class="form-group col-md-2 col-lg-2 col-sm-2">
            {!! Form::label('end_at',trans('admin.end_at')) !!}
            {!! Form::text('end_at',$publicPayment->end_at,['class'=>'form-control end_at  datetpicker ','autocomplete'=>'off']) !!}
        </div>


           
            </div>
          
          </div>

    </div>
