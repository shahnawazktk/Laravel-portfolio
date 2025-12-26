@props([
    'id' => null,
    'title' => null,
    'subtitle' => null,
    'bgColor' => 'bg-white',
    'padding' => 'py-20',
    'titleAlignment' => 'center',
    'dataAos' => 'fade-up',
])

<section @if ($id) id="{{ $id }}" @endif
    class="{{ $bgColor }} {{ $padding }}">
    <div class="container mx-auto px-4">
        @if ($title)
            <div class="max-w-3xl mx-auto mb-16 text-{{ $titleAlignment }}" data-aos="{{ $dataAos }}">
                @if (isset($pretitle))
                    <div
                        class="inline-flex items-center px-4 py-2 bg-blue-100 text-blue-800 rounded-full font-medium mb-4">
                        <i class="fas fa-{{ $icon ?? 'star' }} mr-2"></i>
                        {{ $pretitle }}
                    </div>
                @endif

                <h2 class="text-3xl md:text-4xl font-bold mb-4">
                    {!! $title !!}
                </h2>

                @if ($subtitle)
                    <p class="text-gray-600 text-lg {{ $titleAlignment === 'center' ? 'mx-auto' : '' }}">
                        {{ $subtitle }}
                    </p>
                @endif
            </div>
        @endif

        {{ $slot }}
    </div>
</section>
