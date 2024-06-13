@if($paginator->hasPages())
    <nav class="page-section">
        <ul class="pagination">
            @if($paginator->onFirstPage())
                <li class="page-item disabled">
                    <a class="page-link" href="javascript:void(0)" aria-label="Previous"
                        style="color:#6c757d;">
                        <span aria-hidden="true">
                            <i class="fas fa-chevron-left"></i>
                        </span>
                    </a>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{$paginator->previousPageUrl()}}" aria-label="Previous">
                        <span aria-hidden="true">
                            <i class="fas fa-chevron-left"></i>
                        </span>
                    </a>
                </li>
            @endif


            @foreach ($elements as $element)
                @if(is_string($element))
                    <li class="page-item disabled">
                        <a class="page-link" href="javascript:void(0)">{{$element}}</a>
                    </li>
                @endif

                @if(is_array($element))
                    @foreach ($element as $page=>$url)
                        @if($page == $paginator->currentPage())
                            <li class="page-item active">
                                <a class="page-link" href="javascript:void(0)">{{$page}}</a>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{$url}}">{{$page}}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach



            @if($paginator->hasMorePages())
                <li class="page-item">
                    <a href="{{$paginator->nextPageUrl()}}" class="page-link" aria-label="Next">
                        <span aria-hidden="true">
                            <i class="fas fa-chevron-right"></i>
                        </span>
                    </a>
                </li>
            @else
                <li class="page-item disabled">
                    <a href="javascript:void(0)" class="page-link" aria-label="Next" style="color:#6c757d;">
                        <span aria-hidden="true">
                            <i class="fas fa-chevron-right"></i>
                        </span>
                    </a>
                </li>
            @endif
        </ul>
    </nav>
@endif
