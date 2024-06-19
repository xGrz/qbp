<!doctype html>
<html lang="en" class="bg-slate-900 text-slate-400 h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@if($qbp_appName){{ $qbp_appName }} | @endif {{ $title ?? 'QBP' }}</title>
    @if($qbp_useTailwind)
        <script src="https://cdn.tailwindcss.com"></script>
    @endif
    @if($qbp_useAlpine)
        <script src="//unpkg.com/alpinejs" defer></script>
    @endif
    @yield('head')
    <style>@yield('css')</style>
</head>
<body class="flex flex-col min-h-full">
<x-p-flash-messages/>
@include($qbp_navigationTemplate)


<main class="container px-4 mx-auto my-2 grow">
    @yield('content')
</main>

@include('p::footer.container')
@livewire('wire-elements-modal')
</body>
</html>
