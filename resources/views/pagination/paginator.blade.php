@props([
    'route'=>'articles.index',
])

@if ($paginator->lastPage() != 1)

    <div id="pagination">
        <!-- elenco numeri -->
        @for ($i = 1; $i <= $paginator->lastPage(); $i++)
            <a class="paginator--number{{$paginator->currentPage()==$i?'_active':''}}  clickable"
               href="{{ route($route,array_merge($_GET,['page'=>$i])) }}">
                {{ $i }}
            </a>
        @endfor
    </div>

{{--    <div id="pagination">--}}
{{--        Elementi {{ $paginator->firstItem() }} - {{ $paginator->lastItem() }} di {{ $paginator->total() }} ---}}

{{--        <!-- Link alla prima pagina -->--}}
{{--        @if (!$paginator->onFirstPage())--}}
{{--            <a href="{{ route($route,array_merge($_GET,['page'=>1])) }}">Inizio</a> |--}}
{{--        @else--}}
{{--            Inizio |--}}
{{--        @endif--}}

{{--        <!-- Link alla pagina precedente -->--}}
{{--        @if ($paginator->currentPage() != 1)--}}
{{--            <a href="{{ route($route,array_merge($_GET,['page'=>$paginator->currentPage()-1])) }}">&lt; Precedente</a> |--}}
{{--        @else--}}
{{--            &lt; Precedente |--}}
{{--        @endif--}}

{{--        <!-- Link alla pagina successiva -->--}}
{{--        @if ($paginator->hasMorePages())--}}
{{--            <a href="{{ route($route,array_merge($_GET,['page'=>$paginator->currentPage()+1])) }}">Successivo &gt;</a> |--}}
{{--        @else--}}
{{--            Successivo &gt; |--}}
{{--        @endif--}}

{{--        <!-- Link all'ultima pagina -->--}}
{{--        @if ($paginator->hasMorePages())--}}
{{--            <a href="{{ $paginator->url($paginator->lastPage()) }}">Fine</a>--}}
{{--        @else--}}
{{--            Fine--}}
{{--        @endif--}}


{{--    </div>--}}
@endif
