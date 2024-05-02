<div
    class="fixed right-0 top-0 left-0 md:left-auto mx-2 mt-2 drop-shadow-2xl md:min-w-[400px]"
    x-data="{ visible: true, timeout: {{ $duration }} }"
    x-init="setTimeout(() => visible = false, timeout)"
>
    <div
        id="toast"
        x-show="visible"
        class="flex items-center gap-x-2 w-full ps-4 py-3 pr-1 mb-4 text-gray-200 bg-{{$baseColor}}-800 border-t-4 border-{{$baseColor}}-400 rounded-b-lg shadow"
        role="alert"
    >
        <div class="grow-0 shrink-0">
            @if($severity === xGrz\Qbp\Enums\StatusType::SUCCESS)
                <x-p::icons.success class="w-6 h-6"/>
            @elseif($severity === xGrz\Qbp\Enums\StatusType::DANGER)
                <x-p::icons.danger class="w-6 h-6" />
            @elseif($severity === xGrz\Qbp\Enums\StatusType::WARNING)
                <x-p::icons.warning class="w-6 h-6" />
            @elseif($severity === xGrz\Qbp\Enums\StatusType::INFO)
                <x-p::icons.info class="w-6 h-6" />
            @endif
        </div>
        <div class="grow-1 w-full text-{{$baseColor}}-50">{{$message}}</div>
        <div class="shrink-0">
            <button class="text-white p-3 hover:bg-{{$baseColor}}-700 rounded-full" x-on:click="visible = false"
                    data-dismiss-target="#toast">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
    </div>
</div>
