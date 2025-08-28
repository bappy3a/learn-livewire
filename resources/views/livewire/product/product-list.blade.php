<div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8"
x-data="{ hasMore: @entangle('hasMore'), loading: @entangle('loading') }"
    x-init="
        const sentinel = $refs.sentinel;
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting && hasMore && !loading) {
                    $wire.loadMore();
                }
            });
        }, { root: null, rootMargin: '0px', threshold: 0.1 });

        observer.observe(sentinel);

        // stop observing once there are no more pages
        $watch('hasMore', (v) => { if (!v) observer.disconnect(); });
    "
    class="p-4"
>

    @foreach ($items as $key=>$product)
        <div class="group relative">
            <img src="{{ $product->image }}"
                alt="Front of men&#039;s Basic Tee in black."
                class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80" />
            <div class="mt-4 flex justify-between">
                <div>
                    <h3 class="text-sm text-gray-700">
                        <a href="#">
                            <span aria-hidden="true" class="absolute inset-0"></span>
                            {{ $product->name }}
                        </a>
                    </h3>
                    <p class="mt-1 text-sm text-gray-500">Id {{ $product->id }}</p>
                </div>
                <p class="text-sm font-medium text-gray-900">${{ number_format($product->price,2) }}</p>
            </div>
        </div>
    @endforeach

    {{-- Loading indicator --}}
    <div wire:loading.class.remove="hidden" class="hidden py-6 text-center text-gray-500">
        Loading…
    </div>

    {{-- Sentinel: the observer watches this element to trigger loadMore --}}
    <div x-show="hasMore" x-ref="sentinel" class="h-10"></div>

    {{-- Optional fallback button if needed --}}
    <div class="mt-4 text-center" x-show="hasMore">
        <button type="button" class="px-4 py-2 rounded-lg border"
                @click="$wire.loadMore()" :disabled="loading">
            <span x-show="!loading">Load more</span>
            <span x-show="loading">Loading…</span>
        </button>
    </div>
</div>
