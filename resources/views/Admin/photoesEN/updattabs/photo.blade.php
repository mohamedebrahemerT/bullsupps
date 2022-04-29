    @push('js')

      <link rel="stylesheet" href="{{url('/')}}/Desgin/Adminlte/dist/css/dropzone.min.css">
 

   <script src="{{url('/')}}/Desgin/Adminlte/dist/js/dropzone.min.js"></script>
   
  
  <script type="text/javascript">   


            Dropzone.autoDiscover =false;
         $(document).ready(function(){
         $('#dropzone_main_photo').dropzone({

            url:'{{ url("admin/update_img_dropzon_photoesEN/img/".$photoesEN->id) }}',
            paramName:'file',
            //uploadMultiple:true,
            maxFile:0,
            maxFilesize:3,
            acceptedFiles:'image/*',
            dictDefaultMessage:'<i class="fa fa-camera"></i> '+ '{{trans("admin.photo")}}',
            dictRemoveFile:'{{trans("admin.dictRemoveFile")}}',
            removedfile:function(file)
            {
              //alert(file.id);
              $.ajax({
                dataType:'json',
                type:'post',
                url:'{{ url("admin/delete_img_dropzon_photoesEN/img/".$photoesEN->id)}}',
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
                 
                @if (!empty($photoesEN->photo))
               var mock={
                name:'{{ $photoesEN->id }}',
                size:'',
                type:'',
                id:' ',
               };
               this.emit('addedfile',mock);
this.options.thumbnail.call(this,mock,"{{Storage::url($photoesEN->photo)}}" );
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

            url:'{{ url("admin/HomeSliderEN/img/".$photoesEN->id) }}',
            paramName:'file',
            //uploadMultiple:true,
            maxFile:15,
            maxFilesize:3,
            acceptedFiles:'image/*',
            dictDefaultMessage:'<i class="fa fa-camera"></i> '+ '{{trans("admin.photoesEN")}}',
            dictRemoveFile:'{{trans("admin.dictRemoveFile")}}',
            removedfile:function(file)
            {
              //alert(file.id);
              $.ajax({
                dataType:'json',
                type:'post',
                url:'{{ url("admin/HomeSliderEN_delete_img")}}',
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
                 @foreach ($photoesEN->filesss()->get() as $file) 

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

         <!------------------------------------------------------------------->
                  @push('js')
         <script type="text/javascript">
          var x=1;
          $(document).on('click','.add_inpute',function(){

            var max_inpute=10;
            
            if (x < max_inpute) 
            {
              //$('.div_inpute').append('<h1>test</h1>');

              $('.div_inpute').append('<div>'+
          '<div class="col-sm-2 col-sm-2 col-md-2 col-lg-2">'+
             '{!! Form::label('input_key',trans('admin.input_key')) !!}'+
            '{!! Form::text('input_key[]','',['class'=>'form-control']) !!}'+

         '</div>'+

          
         '<div class="clearfix"> </div>'+
                '<br>'+
           '<a href="#" class="remove_inpute btn btn-danger"><i class="fa fa-trash"> </i>'+ '</a>'+
           '<div class="clearfix"> </div>'+
                '<br>'+
         '</div>');
              x+=1;
         
              return false;
            }
          });

          $(document).on('click','.remove_inpute',function(){

            $(this).parent('div').remove();
            x-=1;
            return false;
          });
         </script>
         @endpush
               <!------------------------------------------------------------------->



  <div id="menu5" class="tab-pane fade in active">
      <h3>{{trans('admin.photo')}}</h3>
 

             
   
      <br>
   
 <hr>
          <h4 style="text-align: center;">{{trans('admin.photoesEN')}}</h4>

      <div class="dropzone" id="dropzone_file_uploads"> </div>
           <br>
                <br>


           <div class="div_inpute col-sm-12 col-sm-12 col-md-12 col-lg-12">
          @foreach($photoesEN->other_data_R_Add_color_for_sliderEN()->get() as $data)
         <div>
          <div class="col-sm-2 col-sm-2 col-md-2 col-lg-2">
             {!! Form::label('input_key',trans('admin.input_key')) !!}
            {!! Form::text('input_key[]',$data->input_key,['class'=>'form-control']) !!}

         </div>

         
         <div class="clearfix"> </div>
                <br>
           <a href="#" class="remove_inpute btn btn-danger"><i class="fa fa-trash"> </i> </a>
           <div class="clearfix"> </div>
                <br>
         </div>
            
            @endforeach
         </div>
              <br>
              <br>

           <a href="#" class="add_inpute btn btn-info"><i class="fa fa-plus"> </i> </a>
                <div class="clearfix"> </div>
                <br>
 
   
</div>