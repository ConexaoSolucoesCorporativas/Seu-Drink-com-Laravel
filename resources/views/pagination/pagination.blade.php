@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true">
                    <span class="page-link">Anterior</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link text-danger" href="{{ $paginator->previousPageUrl() }}" rel="prev">Anterior</a>
                </li>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link text-danger" href="{{ $paginator->nextPageUrl() }}" rel="next">Proximo</a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true">
                    <span class="page-link ">Proximo</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
