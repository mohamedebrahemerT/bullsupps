  <div id="home" class="tab-pane fade in active">

      <h3>{{trans('admin.product_info')}}</h3>



                 

                





        <div class="form-group">

            {!! Form::label('title_name_ar',trans('admin.title_name_ar')) !!}

            {!! Form::text('title_name_ar',$productes->title_name_ar,['class'=>'form-control title_name_ar']) !!}

        </div>

             

        <div class="form-group">

            {!! Form::label('title_name_en',trans('admin.title_name_en')) !!}

            {!! Form::text('title_name_en',$productes->title_name_en,['class'=>'form-control title_name_en']) !!}

        </div>

      

      

       <div class="form-group">
             <textarea name="content_name_ar"  class="form-control content_name_ar" > {{$productes->content_name_ar}}</textarea>
         
       </div>

                   

 

          

      

    </div>



                   

 

            

 



       