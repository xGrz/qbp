@if ($paginator->hasPages())
    <div>
        <x-p::pagination.types.mobile :$paginator />
        <x-p::pagination.types.desktop :$paginator :$elements />
    </div>
@endif
