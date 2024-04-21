<!doctype html>
<html lang="en" class="bg-slate-900 text-slate-400 h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@if($appName){{ $appName }} | @endif {{ $title ?? 'Quick Blade Panel' }}</title>
    @if($useTailwind)<script src="https://cdn.tailwindcss.com"></script>@endif
    @if($useAlpine)<script src="//unpkg.com/alpinejs" defer></script>@endif
    <style>
        @yield('css')
    </style>
</head>
<body class="flex flex-col min-h-full">

@include($navigationTemplate ?? 'p::navigation.container')
@include('p::status')

<main class="container px-4 mx-auto my-2 grow">
    @yield('content')
</main>

@include($footerTemplate ?? 'p::footer.footer')
</body>
</html>
