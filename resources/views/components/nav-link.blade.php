@props([
    'active' => false
])

<a 

{{ $attributes}}
@class([ 
'rounded-full px-4 py-2 text-sm font-medium transition-colors',
'text-stone-600 hover:bg-stone-100 hover:text-stone-900' => ! $active,
'Bg-indigo-50 text-indigo-700' => $active

])
>
    {{ $slot }}
</a>
                