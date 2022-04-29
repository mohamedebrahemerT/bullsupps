



              @push('js')

              <script type="text/javascript">

              	$(document).ready(function() {

        $('.mall_select2').select2();

});

              </script>

              @endpush

    <div id="menu3" class="tab-pane fade">

      <h3>{{trans('admin.product_size_weight')}}</h3>





            <div class="size_and_weight_cc">

            	<center><h1> {{ trans('admin.chiose_department') }} </h1> </center>





            	

            </div>



            	    <div class="color_data_bb hidden">

              	

                <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xs-12">

            {!! Form::label('color',trans('admin.select_color')) !!}

            <br>

         {!! Form::select('color_id',App\Color::pluck('name_'.session('lang'),'id'),$productes->color_id,['class'=>'form-control color_id','placeholder'=>trans('admin.select_color')]) !!}



             </div>



                  <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xs-12">

            {!! Form::label('tradmark',trans('admin.select_tradmark')) !!}

            <br>

                   {!! Form::select('trad_id',App\TradeMark::pluck('name_'.session('lang'),'id'),$productes->trad_id,['class'=>'form-control trad_id','placeholder'=>trans('admin.select_color')]) !!}



             </div>



                  <div class="form-group col-sm-4 col-md-4 col-lg-4 col-xs-12">

            {!! Form::label('Manufacturers',trans('admin.select_Manufacturers')) !!}

            <br>

            



              {!! Form::select('manuf_id', App\Manufacturers::pluck('name_'.session('lang'),'id'),$productes->manuf_id,['class'=>'form-control manuf_id','placeholder'=>trans('admin.select_color')]) !!}





             </div>

                  

                  <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xs-12">

                         {!! Form::label('malls',trans('admin.select_malls')) !!}

                      

                      <select name="malls[]" class="form-control mall_select2 malls" multiple="multiple" style="width: 100%">

                      	@foreach(App\countries::all() as $country)



                      	<optgroup label="{{ $country->countries_name_en }}"> 

                          	@foreach($country->malls_c()->get()  as $mall)

                           <option value="{{$mall->id }}">{{ $mall->name_en }}</option>

                          	@endforeach

                      	</optgroup> 

                      	@endforeach

                      </select>

                  </div>  



              </div>



         



                





                 

   

          

            <div class="clearfix"></div>

      



    

    </div>