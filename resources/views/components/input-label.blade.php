@props(['value', 'required'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700 dark:text-gray-300']) }}>
    {{ $value ?? $slot }}
    @if (isset($required))
        <span class="text-red-900">*</span>
    @endif
</label>
