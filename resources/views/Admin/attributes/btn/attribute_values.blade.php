 @foreach(App\Models\attribute_values::where('attribute_id',$id)->get() as $attribute_value)

 {{$attribute_value->value_en}}
 ,

 @endforeach