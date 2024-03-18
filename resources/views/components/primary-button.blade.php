<button {{ $attributes->merge([
    'type' => 'submit',
    'class' => 'inline-flex items-center px-4 py-2 bg-purple-600 border border-transparent rounded-md font-medium text-sm text-white uppercase tracking-widest hover:bg-purple-700 focus:bg-purple-700 active:bg-purple-600 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray transition ease-in-out duration-150'
]) }}>
    {{ $slot }}
</button>

