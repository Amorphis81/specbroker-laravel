@props([
    'class' => null,
])

<button {{ $attributes->class([
	  'tw-button-accent', $class,
    ])
    ->merge([
      'type' => 'submit'
    ]) }} >
    {{ $slot }}
</button>
