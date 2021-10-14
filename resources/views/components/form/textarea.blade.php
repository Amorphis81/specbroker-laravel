@props([
    'class' => null,
])

<textarea {{ $attributes->class([
	'input', $class
]) }}></textarea>
