{{-- resources/views/livewire/pagination-links.blade.php --}}

@if ($paginator->hasPages())
<nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-center space-x-2">
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
    <span
        class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-400 bg-white border border-gray-300 cursor-not-allowed rounded-lg">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd"
                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                clip-rule="evenodd" />
        </svg>
    </span>
    @else
    <button wire:click="previousPage" wire:loading.attr="disabled"
        class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 hover:text-blue-600 transition-colors duration-200">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd"
                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                clip-rule="evenodd" />
        </svg>
    </button>
    @endif

    {{-- Pagination Elements --}}
    @foreach ($elements as $element)
    {{-- "Three Dots" Separator --}}
    @if (is_string($element))
    <span
        class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 cursor-default rounded-lg">
        {{ $element }}
    </span>
    @endif

    {{-- Array Of Links --}}
    @if (is_array($element))
    @foreach ($element as $page => $url)
    @if ($page == $paginator->currentPage())
    <span
        class="relative inline-flex items-center px-4 py-2 text-sm font-bold text-white bg-blue-600 border border-blue-600 cursor-default rounded-lg">
        {{ $page }}
    </span>
    @else
    <button wire:click="gotoPage({{ $page }})" wire:loading.attr="disabled"
        class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 hover:text-blue-600 transition-colors duration-200">
        {{ $page }}
    </button>
    @endif
    @endforeach
    @endif
    @endforeach

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
    <button wire:click="nextPage" wire:loading.attr="disabled"
        class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 hover:text-blue-600 transition-colors duration-200">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd"
                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                clip-rule="evenodd" />
        </svg>
    </button>
    @else
    <span
        class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-400 bg-white border border-gray-300 cursor-not-allowed rounded-lg">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd"
                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                clip-rule="evenodd" />
        </svg>
    </span>
    @endif
</nav>


@endif
