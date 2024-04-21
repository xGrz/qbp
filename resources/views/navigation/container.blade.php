@php use \xGrz\PayU\Facades\Config; @endphp
<div class="container px-1 mx-auto mb-2">
    <div class="flex flex-col md:flex-row my-1 px-1 content-center">
        <h1 class="text-xl md:text-3xl text-white py-1 md:py-0 font-semibold md:self-center grow"><span class="text-slate-500 font-bold">xGrz/PayU</span> <span class="text-slate-600">|</span> {{ $title ?? 'Page title' }}</h1>
        <nav class="flex items-center mt-1 md:mt-0">
{{--            <x-p::nav-item routeName="{{ Config::getRouteName('payments.index') }}" label="Transactions">--}}
{{--                <x-p::icons.transactions class="w-5 md:w-8 h-5 md:h-8 mr-1 md:block"/>--}}
{{--            </x-p::nav-item>--}}
{{--            <x-p::nav-item routeName="{{ Config::getRouteName('refunds.index') }}" label="Refunds">--}}
{{--                <x-p::icons.refund class="w-5 md:w-8 h-5 md:h-8 mr-1 md:block" />--}}
{{--            </x-p::nav-item>--}}
{{--            <x-p::nav-item routeName="{{ Config::getRouteName('payouts.index') }}" label="Payouts">--}}
{{--                <x-p::icons.payout class="w-5 md:w-8 h-5 md:h-8 mr-1 md:block" />--}}
{{--            </x-p::nav-item>--}}
{{--            <x-p::nav-item routeName="{{ Config::getRouteName('methods.index') }}" label="Methods">--}}
{{--                <x-p::icons.methods class="w-5 md:w-8 h-5 md:h-8 mr-1 md:block" />--}}
{{--            </x-p::nav-item>--}}
        </nav>
    </div>
    <hr class="border-slate-600"/>
    <div class="container px-4 mx-auto my-1 text-white">
        @yield('breadcrumbs')
    </div>
</div>
