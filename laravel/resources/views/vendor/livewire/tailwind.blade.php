@php
if (! isset($scrollTo)) {
    $scrollTo = 'body';
}

$scrollIntoViewJsSnippet = ($scrollTo !== false)
    ? <<<JS
       (\$el.closest('{$scrollTo}') || document.querySelector('{$scrollTo}')).scrollIntoView()
    JS
    : '';
@endphp

@if ($paginator->hasPages())
<nav role="navigation" aria-label="Pagination Navigation"
    class="flex items-center justify-between rounded-xl border
           bg-white dark:bg-zinc-900
           border-zinc-200 dark:border-zinc-800
           px-4 py-3">

    {{-- Mobile --}}
    <div class="flex flex-1 justify-between sm:hidden">

        {{-- Previous --}}
        @if ($paginator->onFirstPage())
            <span
                class="px-4 py-2 text-sm rounded-md
                       bg-zinc-100 dark:bg-zinc-800
                       text-zinc-400 dark:text-zinc-500
                       border border-zinc-200 dark:border-zinc-700">
                {!! __('pagination.previous') !!}
            </span>
        @else
            <button
                wire:click="previousPage('{{ $paginator->getPageName() }}')"
                x-on:click="{{ $scrollIntoViewJsSnippet }}"
                class="px-4 py-2 text-sm rounded-md
                       bg-white dark:bg-zinc-800
                       text-zinc-700 dark:text-zinc-300
                       border border-zinc-200 dark:border-zinc-700
                       hover:bg-zinc-100 dark:hover:bg-zinc-700">
                {!! __('pagination.previous') !!}
            </button>
        @endif

        {{-- Next --}}
        @if ($paginator->hasMorePages())
            <button
                wire:click="nextPage('{{ $paginator->getPageName() }}')"
                x-on:click="{{ $scrollIntoViewJsSnippet }}"
                class="px-4 py-2 text-sm rounded-md
                       bg-white dark:bg-zinc-800
                       text-zinc-700 dark:text-zinc-300
                       border border-zinc-200 dark:border-zinc-700
                       hover:bg-zinc-100 dark:hover:bg-zinc-700">
                {!! __('pagination.next') !!}
            </button>
        @else
            <span
                class="px-4 py-2 text-sm rounded-md
                       bg-zinc-100 dark:bg-zinc-800
                       text-zinc-400 dark:text-zinc-500
                       border border-zinc-200 dark:border-zinc-700">
                {!! __('pagination.next') !!}
            </span>
        @endif
    </div>

    {{-- Desktop --}}
    <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">

        {{-- Info --}}
        <p class="text-sm text-zinc-500 dark:text-zinc-400">
            Showing
            <span class="font-medium text-zinc-700 dark:text-zinc-200">{{ $paginator->firstItem() }}</span>
            to
            <span class="font-medium text-zinc-700 dark:text-zinc-200">{{ $paginator->lastItem() }}</span>
            of
            <span class="font-medium text-zinc-700 dark:text-zinc-200">{{ $paginator->total() }}</span>
            results
        </p>

        {{-- Page Buttons --}}
        <div class="inline-flex rounded-lg overflow-hidden border
                    border-zinc-200 dark:border-zinc-700">

            {{-- Prev --}}
            @if ($paginator->onFirstPage())
                <span class="px-3 py-2
                             bg-zinc-100 dark:bg-zinc-800
                             text-zinc-400 dark:text-zinc-500">
                    ‹
                </span>
            @else
                <button
                    wire:click="previousPage('{{ $paginator->getPageName() }}')"
                    x-on:click="{{ $scrollIntoViewJsSnippet }}"
                    class="px-3 py-2
                           bg-white dark:bg-zinc-800
                           text-zinc-600 dark:text-zinc-300
                           hover:bg-zinc-100 dark:hover:bg-zinc-700">
                    ‹
                </button>
            @endif

            {{-- Pages --}}
            @foreach ($elements as $element)
                @if (is_string($element))
                    <span class="px-4 py-2
                                 bg-zinc-100 dark:bg-zinc-800
                                 text-zinc-400 dark:text-zinc-500
                                 border-l border-zinc-200 dark:border-zinc-700">
                        {{ $element }}
                    </span>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span
                                class="px-4 py-2
                                       bg-indigo-600 text-white
                                       font-semibold border-l border-zinc-200 dark:border-zinc-700">
                                {{ $page }}
                            </span>
                        @else
                            <button
                                wire:click="gotoPage({{ $page }}, '{{ $paginator->getPageName() }}')"
                                x-on:click="{{ $scrollIntoViewJsSnippet }}"
                                class="px-4 py-2
                                       bg-white dark:bg-zinc-800
                                       text-zinc-600 dark:text-zinc-300
                                       border-l border-zinc-200 dark:border-zinc-700
                                       hover:bg-zinc-100 dark:hover:bg-zinc-700 hover:text-zinc-900 dark:hover:text-white">
                                {{ $page }}
                            </button>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next --}}
            @if ($paginator->hasMorePages())
                <button
                    wire:click="nextPage('{{ $paginator->getPageName() }}')"
                    x-on:click="{{ $scrollIntoViewJsSnippet }}"
                    class="px-3 py-2
                           bg-white dark:bg-zinc-800
                           text-zinc-600 dark:text-zinc-300
                           hover:bg-zinc-100 dark:hover:bg-zinc-700
                           border-l border-zinc-200 dark:border-zinc-700">
                    ›
                </button>
            @else
                <span class="px-3 py-2
                             bg-zinc-100 dark:bg-zinc-800
                             text-zinc-400 dark:text-zinc-500
                             border-l border-zinc-200 dark:border-zinc-700">
                    ›
                </span>
            @endif
        </div>
    </div>
</nav>
@endif
