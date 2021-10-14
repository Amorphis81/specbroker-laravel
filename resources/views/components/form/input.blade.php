
@props([
    'name' => null,
    'errorClass' => null
])

@php

    if ($errors->has($name)) {
      $errorClass = 'is-invalid';
    }
@endphp

<input {{ $attributes->class([
	'input', $errorClass
])->merge([
	'type' => 'text',
]) }}>
