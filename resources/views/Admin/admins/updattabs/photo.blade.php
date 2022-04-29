  
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
            dictDefaultMessage:'<i class="fa fa-camera"></i> '+ '{{trans("admin.main_photo")}}',
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
            dictDefaultMessage:'<i class="fa fa-camera"></i> '+ '{{trans("admin.dropzone_message")}}',
            dictRemoveFile:'{{trans("admin.dictRemoveFile")}}',
            removedfile:function(file)
            {
              //alert(file.id);
              $.ajax({
                dataType:'json',
                type:'post',
                url:'{{ url("admin/delete_img_dropzon_admin")}}',
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

 





  <div id="menu5" class="tab-pane fade">
      <h3>{{trans('admin.product_Media')}}</h3>

          <h4 style="text-align: center;">{{trans('admin.main_photo')}}</h4>

      <div class="dropzone" id="dropzone_main_photo"> </div>
      <br>
         <hr>
          <h4 style="text-align: center;">{{trans('admin.subphotoes')}}</h4>

      <div class="dropzone" id="dropzone_file_uploads"> </div>
           <br>
</div>


      <div class="container">
       
    
 

 
    </div> 