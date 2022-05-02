
@if($attribute_id)

  {{App\Models\attributes::where('id',$attribute_id)->first()->name_en}}
 
@endif


