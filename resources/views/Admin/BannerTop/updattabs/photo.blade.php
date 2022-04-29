    @push('js')

      <link rel="stylesheet" href="{{url('/')}}/Desgin/Adminlte/dist/css/dropzone.min.css">
 

   <script src="{{url('/')}}/Desgin/Adminlte/dist/js/dropzone.min.js"></script>
   
  
  <script type="text/javascript">   


            Dropzone.autoDiscover =false;
         $(document).ready(function(){
         $('#dropzone_main_photo').dropzone({

            url:'{{ url("admin/update_img_dropzon_BannerTop/img/".$BannerTop->id) }}',
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
                url:'{{ url("admin/delete_img_dropzon_BannerTop/img/".$BannerTop->id)}}',
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
                 
                @if (!empty($BannerTop->photo))
               var mock={
                name:'{{ $BannerTop->id }}',
                size:'',
                type:'',
                id:' ',
               };
               this.emit('addedfile',mock);
this.options.thumbnail.call(this,mock,"{{Storage::url($BannerTop->photo)}}" );
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

            url:'{{ url("admin/BannerTop/img/".$BannerTop->id) }}',
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
                url:'{{ url("admin/BannerTop_delete_img")}}',
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
                 @foreach ($BannerTop->filesss()->get() as $file) 

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

         <script type="text/javascript">
                $(document).ready(function() {
        $('.mall_select2').select2();
});
              </script>
         @endpush


  <div id="menu5" class="tab-pane fade in active">
      <h3>{{trans('admin.photo')}}</h3>
  
   
      <br>
   
 <hr>
          <h4 style="text-align: center;">{{trans('admin.subBannerTop')}}</h4>

      <div class="dropzone" id="dropzone_file_uploads"> </div>
           <br>
           <br>
           <br>

           <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xs-12">
                         {!! Form::label('malls',trans('admin.select_dep')) !!}
                      
                      <select name="department_id[]" class="form-control mall_select2" multiple="multiple" style="width: 100%;">
                        @foreach(App\Department::all() as $Department)

                   
                         
                           <option value="{{$Department->id }}">{{ $Department->dep_name_ar }}</option>
                        
                   
                        @endforeach
                      </select>
                  </div>
   

     <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xs-12">
                         {!! Form::label('malls',trans('admin.select_product')) !!}
                      
                      <select name="product_id[]" class="form-control mall_select2" multiple="multiple" style="width: 100%;">
                        @foreach(App\product::all() as $product)

                   
                         
                           <option value="{{$product->id }}">{{ $product->title_name_ar }}</option>
                        
                   
                        @endforeach
                      </select>
                  </div>

                   <div class="form-group col-sm-12 col-md-12 col-lg-12 col-xs-12">
                         {!! Form::label('malls',trans('admin.select_vend')) !!}
                      
                      <select name="admin_id[]" class="form-control mall_select2" multiple="multiple" style="width: 100%;">
                        @foreach(App\admin::all() as $admin)

                   
                         
                           <option value="{{$admin->id }}">{{ $admin->name }}</option>
                        
                   
                        @endforeach
                      </select>
                  </div>
</div>