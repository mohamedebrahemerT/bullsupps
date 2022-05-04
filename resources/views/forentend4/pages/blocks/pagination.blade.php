 

@if ($paginator->lastPage() > 1)

<ul class="pagination mt-3 justify-content-center pagination_style1">

              @php
              $i = 1;
              @endphp

            @for ($i = 1; $i <= $paginator->lastPage(); $i++)

                                    <li class="page-item {{ ($paginator->currentPage() == $i) ? ' active' : '' }}"><a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a></li>

                                     
            @endfor

            <li class="page-item"><a class="page-link" href="{{ $paginator->url($i-1) }}"><i class="linearicons-arrow-right"></i></a></li>
                                   
                                </ul>
@endif
