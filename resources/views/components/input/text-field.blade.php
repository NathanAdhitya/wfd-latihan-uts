<div>
    @if ($attributes->has('label'))
        <label for="{{ $id }}"
            class="block mb-2 text-sm font-medium {{ $errors->has($name) ? 'text-red-700 dark:text-red-500' : 'text-gray-900 dark:text-gray-300' }}">{{ $label }}</label>
    @endif
    <input
        {{ $attributes->merge(['type' => 'text'])->class([
                $errors->has($name)
                    ? 'shadow-sm bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 dark:bg-gray-700 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500  dark:shadow-sm-light'
                    : 'shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light',
                'is-invalid' && $errors->has($name),
            ])->except(['label']) }}
        value="{{ old($name) }}" />
    @error($name)
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
    @enderror
</div>
