    

    @push('js')



      <link rel="stylesheet" href="{{url('/')}}/Desgin/Adminlte/dist/css/dropzone.min.css">

 



   <script src="{{url('/')}}/Desgin/Adminlte/dist/js/dropzone.min.js"></script>

   

  

  <script type="text/javascript">   





            Dropzone.autoDiscover =false;

         $(document).ready(function(){

         $('#dropzone_main_photo').dropzone({



            url:'{{ url("admin/update_img_dropzon_admin/img/".$admin->id) }}',

            paramName:'file',

            //uploadMultiple:true,

            maxFile:0,

            maxFilesize:3,

            acceptedFiles:'image/*',

            dictDefaultMessage:'<i class="fa fa-camera"></i> '+ '{{trans("admin.vendophoto")}}',

            dictRemoveFile:'{{trans("admin.dictRemoveFile")}}',

            removedfile:function(file)

            {

              //alert(file.id);

              $.ajax({

                dataType:'json',

                type:'post',

                url:'{{ url("admin/delete_img_dropzon_admin/img/".$admin->id)}}',

                data:{

                  _token:'{{ csrf_token() }}',

                },



              });

               

           return (fmock = file.previewElement) != null ? fmock.parentNode.removeChild(file.previewElement) : void 0;



 

            },

            params:{

              _token:'{{ csrf_token() }}'

            },

            addRemoveLinks:true,

            init:function()

            {

                 

                @if (!empty($admin->photo))

               var mock={

                name:'{{ $admin->title }}',

                size:'',

                type:'',

                id:' ',

               };

               this.emit('addedfile',mock);

this.options.thumbnail.call(this,mock,"{{Storage::url($admin->photo)}}" );

               $('.dz-progress').remove();

               @endif



               this.on('sending',function(file,xhr,formData){

                   formData.append('id','');

                   file.id='';

               });



               this.on('success',function(file,response){



                file.id=response.id

               });

            }







         });





  });     











  $(document).ready(function(){

         $('#dropzone_file_uploads').dropzone({



            url:'{{ url("admin/upload/admin/img/".$admin->id) }}',

            paramName:'file',

            //uploadMultiple:true,

            maxFile:15,

            maxFilesize:3,

            acceptedFiles:'image/*',

            dictDefaultMessage:'<i class="fa fa-camera"></i> '+ '{{trans("admin.vendrslider")}}',

            dictRemoveFile:'{{trans("admin.dictRemoveFile")}}',

            removedfile:function(file)

            {

              //alert(file.id);

              $.ajax({

                dataType:'json',

                type:'post',

                url:'{{ url("/admin/delete_img_dropzon")}}',

                data:{

                  _token:'{{ csrf_token() }}',id:file.id,

                },



              });

               

           return (fmock = file.previewElement) != null ? fmock.parentNode.removeChild(file.previewElement) : void 0;



 

            },

            params:{

                _token:'{{ csrf_token() }}'

            },

            addRemoveLinks:true,

            init:function()

            {

                     @foreach ($filess as $file) 



               var mock={

                name:'{{ $file->name }}',

                size:'{{ $file->size }}',

                type:'{{ $file->mum_type }}',

                id:'{{$file->id}}'

               };

               this.emit('addedfile',mock);

               this.options.thumbnail.call(this,mock,"{{Storage::url($file->full_file)}}")

                

               @endforeach 



               this.on('sending',function(file,xhr,formData){

                   formData.append('id','');

                   file.id='';

               });



               this.on('success',function(file,response){



                file.id=response.id

               });

            }







         });





  });     



        </script>

        <style type="text/css">

          .dz-image img 

          {

            width: 100px;

            height: 100px;

          }

        </style>

@endpush   



     @push('js')





             <script type="text/javascript">

                $(document).on('click','#chat',function(){



               

   

               $.ajax({

                

              url:'{{ url('admin/chat')}}/premesion',



           

              dataType:'json',

              type:'post',

              data:From_data,

              beforeSend:function(){

                  $('.loading-save-c').removeClass('hidden');

                   $('.sucess_message').html('');

                   $('.sucess_message').addClass('hidden');





              },

              success:function(data){

                $(".RRR").click();

                $('.loading-save-c').addClass('hidden');

                 $('.validate_message').html('');

               $('.error_messages').addClass('hidden');

               $('.AddNew').removeClass('hidden');

                $('#save_from_data1').addClass('hidden');

                  

                $('.title_name_en').addClass('hidden');

                $('.title_name_es').addClass('hidden');

                $('.title_name_fr').addClass('hidden');

                $('.title_name_it').addClass('hidden');

                $('.title_name_ru').addClass('hidden');

                 

                 if (data.status==true)

                  {

          $('.sucess_message').html('<h1>'+data.message+'</h1>').removeClass('hidden');

                  }





               

               

              },

              error:function(response){

               $('.loading-save-c').addClass('hidden');

               var error_li='';

               $.each(response.responseJSON.errors,function(index,value)

               {

                 error_li +='<li>'+value+'</li>';



               });



               $('.validate_message').html(error_li);

                 

               $('.error_messages').removeClass('hidden');





              },



               });





               

                

                return false;

             });

               

             </script>

 

    @endpush





       @push('js')

  <script type="text/javascript">



    $(document).ready(function(){



      @if(old('country_id')) 

      



                    $.ajax({

       type:'GET',

       url:'{{ url('admin/states/create') }}',

       data:{country_id:'{{ old('country_id') }}',select:'{{ old('city_id') }}'},

       dataType: "html",

    success: function(data) {

        $('.city').html(data);

    },

    error: function(data){

        alert("fail");

    }

});

     

      @endif



      $(document).on('change','.country_id',function(){



            var country= $('.country_id option:selected').val();

            if (country > 0)

             {



              $.ajax({

       type:'GET',

       url:'{{ url('admin/states/create') }}',

       data:{country_id:country,select:''},

       dataType: "html",

    success: function(data) {

        $('.city').html(data);

    },

    error: function(data){

        alert("fail");

    }

});

             

             }

             else

             {

                $('.city').html('');

             }





         

      });

    });

    

             

  </script>



  <script>

function myFunction() {

  window.print();

}



function buttonFunction(el) {

  el.style.backgroundColor = "green";

          el.value = "Close Curtain";

  

     

   

}



 



</script>



<script type="text/javascript">

function change( el )

{



  el.style.backgroundColor = "green";



    if ( el.value === "{{trans('admin.presstoagree')}}" )

        el.value = "{{trans('admin.thankstoagree')}}";

    else

        el.value = "{{trans('admin.thankstoagree')}}";

}

</script>

    @endpush





                     @push('js')





  <script type="text/javascript">



    $(document).ready(function(){



      @if(old('stat_id')) 

      



                    $.ajax({

       type:'GET',

       url:'{{ url('admin/states/create') }}',

       data:{city_id:'{{ old('city_id') }}',select:'{{ old('city_id') }}'},

       dataType: "html",

    success: function(data) {

        $('.stat').html(data);

    },

    error: function(data){

        alert("fail");

    }

});

     

      @endif



      $(document).on('change','.city_id',function(){



            var city= $('.city_id option:selected').val();

            if (city > 0)

             {



              $.ajax({

       type:'GET',

       url:'{{ url('admin/states/create') }}',

       data:{city_id:city,select:''},

       dataType: "html",

    success: function(data) {

        $('.stat').html(data);

    },

    error: function(data){

        alert("fail");

    }

});

             

             }

             else

             {

                $('.stat').html('');

             }





         

      });

    });

    

             

  </script>

    @endpush







   <div id="home" class="tab-pane fade in active">

  



       



               <div class="box box-info">

            <div class="box-header">

              <i class="fa fa-check-square	

"></i>

            

              <h4 style="text-align: center;

    border-bottom:1px solid black;

    padding-bottom:2px;">{{trans('admin.personaldata')}}</h4>

                       <br>

              <!-- tools box -->

              <div class="pull-right box-tools">

                <button type="button" class="btn btn-info btn-sm RRR" data-widget="remove" data-toggle="tooltip"

                        title="Remove">

                  <i class="fa fa-times"></i></button>

              </div>

              <!-- /. tools -->

            </div>

            <div class="box-body">  



     

                   <div class="form-group col-lg-2 col-sm-2 col-md-2"> 

                     {{ Form::label('name', trans('admin.name'))  }}

                    {{ Form::text('name',$admin->name,['class'=>'form-control'])  }}

                     </div> 

                    

 

                   <div class="form-group col-lg-2 col-sm-2 col-md-2"> 

                     {{ Form::label('phone', trans('admin.phone'))  }}

                    {{ Form::text('phone',$admin->phone,['class'=>'form-control'])  }}

                     </div> 


 


 





                        <div class="form-group col-lg-2 col-sm-2 col-md-2"> 

                     {{ Form::label('email', trans('admin.email'))  }}

                    {{ Form::text('email',$admin->email,['class'=>'form-control'])  }}

                     </div> 


  
                       



 

 

  
                     

   <div class="form-group col-lg-12" >



                    <h4 style="text-align: center;

    border-bottom:1px solid black;

    padding-bottom:2px;">{{trans('admin.moreinfo')}}</h4>

                  

                      </div> 

 

                     <!------------------------------------------------------------->



                      
 


 



 
                     <div class="form-group"> 

                      

                    <button type="button" class="btn btn-primary form-control" id="save_from_data1"><i class="fa fa-save">  <i class="fa fa-spin fa-spinner loading-save-c hidden"></i></i> {{trans('admin.save_continue')}}</button>





                     </div> 



                     </div> 



                    {{Form::close() }}



                    

 <div class="form-group"> 

 <div class="alert alert-success sucess_message hidden">

          

          

        </div>

  </div>



              





        <div class="form-group"> 

                      

                    <a  class="btn btn-danger form-control AddNew hidden" href="{{ url('admin/admin/create') }}"><i class="fa fa-plus"> </i> {{trans('admin.add')}}</a>





                     </div> 

 



                              </div>



                     



                    

           

            </div>

          

          </div>



    </div>

               

     