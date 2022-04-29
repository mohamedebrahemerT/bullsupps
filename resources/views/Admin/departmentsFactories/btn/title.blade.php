@if(session('lang')=='en')
{!! $dep_name_en !!}

@elseif(session('lang')=='es')
{!! $title_name_es !!}
 

@elseif(session('lang')=='fr')
{!! $title_name_fr !!}
 

@elseif(session('lang')=='it')
{!! $title_name_it !!}
 

@elseif(session('lang')=='ru')
{!! $title_name_ru !!}

@elseif(session('lang')=='ar')
{!! $dep_name_ar !!}

@endif