@props([
    'state' => '',
    'widthClass' => 'max-w-[618px]'
])

<div x-data x-cloak class="fixed inset-0 flex items-center justify-center bg-white bg-opacity-80 z-[1] cursor-pointer"
     x-show.transition ="$store.{{ $state }}.open">
    <div class="relative py-7 px-7 md:py-14 md:px-24 w-full {{ $widthClass }} rounded bg-white shadow"
        @click.outside="$store.{{ $state }}.open = false">
        <!--    Close modal -->
        <div class="absolute top-6 right-6 cursor-pointer" @click="$store.{{ $state }}.open = false">
            <svg class="w-6 h-6" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M21.1415 1.85853C21.7028 2.41991 21.7028 3.33009 21.1415 3.89147L3.89147 21.1415C3.33009 21.7028 2.41991 21.7028 1.85853 21.1415C1.29716 20.5801 1.29716 19.6699 1.85853 19.1085L19.1085 1.85853C19.6699 1.29716 20.5801 1.29716 21.1415 1.85853Z" fill="#B9C5D5"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.85853 1.85853C2.41991 1.29716 3.33009 1.29716 3.89147 1.85853L21.1415 19.1085C21.7028 19.6699 21.7028 20.5801 21.1415 21.1415C20.5801 21.7028 19.6699 21.7028 19.1085 21.1415L1.85853 3.89147C1.29716 3.33009 1.29716 2.41991 1.85853 1.85853Z" fill="#B9C5D5"/>
            </svg>
        </div>

        {{ $slot }}

    </div>
</div>
