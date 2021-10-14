@props([
    'required' => null,
])

<span {{ $attributes->class([
	'mb-3 relative',
	($required) ? 'required' : ''
	]) }}>

    {{ $slot }}
</span>
