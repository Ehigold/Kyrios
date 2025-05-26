{{-- @props(['status', 'id'])

<button {{ $attributes->merge(['type' => 'button']) }}
    wire:click="toggleStatus({{ $id }})"
    class="inline-flex items-center px-3 py-1 text-sm font-medium rounded-full
    {{ $status ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
    <span class="w-2 h-2 mr-2 rounded-full
    {{ $status ? 'bg-green-500' : 'bg-red-500' }}"></span>
    {{ $status ? 'Active' : 'Inactive' }}
</button> --}}
