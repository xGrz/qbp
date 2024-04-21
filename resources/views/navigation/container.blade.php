<div class="container px-1 mx-auto mb-2">
    <div class="flex flex-col md:flex-row my-1 px-1 content-center">
        <h1 class="text-xl md:text-3xl text-white py-1 md:py-0 font-semibold md:self-center grow">
            @if(!empty($qbp_appName))
                <span class="text-slate-500 font-bold">{{$qbp_appName}}</span>
                <span class="text-slate-600">|</span>
            @endif
            {{ $title ?? 'Page title' }}
        </h1>
        <nav class="flex items-center mt-1 md:mt-0">
            @if(!empty($qbp_navigationItems))
                @include($qbp_navigationItems)
            @endif
        </nav>
    </div>
    <hr class="border-slate-600"/>
    <div class="container px-4 mx-auto my-1 text-white">
        @yield('breadcrumbs')
    </div>
</div>
