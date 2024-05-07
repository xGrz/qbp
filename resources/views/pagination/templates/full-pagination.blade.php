@if ($paginator->hasPages())
    <div>
        @include('p::pagination.templates.mobile')
        @include('p::pagination.templates.desktop')
    </div>
@endif
