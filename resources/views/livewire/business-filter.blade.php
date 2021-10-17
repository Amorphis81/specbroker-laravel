<form action="" class="mb-10">
    <div class="mb-12 p-9 tw-shadow-2">

        <div class="mb-7 flex">

            <div class="w-1/2 flex flex-col mr-20">

                @isset( $object_types )
                    @foreach( $object_types as $type)

                        <label class="mb-5 flex items-center cursor-pointer">
                            <input type="checkbox" class="checkbox mr-3" name="stations" data-name="filter-input" value="{{ $type->id }}">
                            {{ $type->name }}
                        </label>

                    @endforeach
                @endisset

            </div>

            <div class="w-1/2">

                <div class="mb-5 flex items-center">
                    <label class="mr-2 flex items-center cursor-pointer">
                        <input type="radio" name="verified_organizations" class="radio mr-3" checked>
                        {{ __('Неважно') }}
                    </label>
                    <div class="w-4 h-4 flex justify-center items-center text-xs text-white bg-gray-4 rounded-full cursor-pointer">
                        ?
                    </div>
                </div>

                <div class="mb-5 flex items-center">
                    <label class="mr-2 flex items-center cursor-pointer">
                        <input type="radio" name="verified_organizations" class="radio mr-3">
                        {{ __('Проверенные организации') }}
                    </label>
                    <div class="w-4 h-4 flex justify-center items-center text-xs text-white bg-gray-4 rounded-full cursor-pointer">
                        ?
                    </div>
                </div>

                <div class="mb-5 flex items-center">
                    <label class="mr-2 flex items-center cursor-pointer">
                        <input type="radio" name="verified_organizations" class="radio mr-3">
                        {{ __('Непроверенные организации') }}
                    </label>
                    <div class="w-4 h-4 flex justify-center items-center text-xs text-white bg-gray-4 rounded-full cursor-pointer">
                        ?
                    </div>
                </div>

            </div>

        </div>

        <div class="mb-7 w-full h-px bg-gray-5/30"></div>

        <div class="flex justify-between">

            <label class="flex items-center">
                <span class="mr-4">{{ __('Сортировать по') }}</span>
                <x-form.select class="w-48" :options="['0' => 'Дате добавления', '1' => 'Возрастанию цены', '2' => 'Убыванию цены']"/>
            </label>

            <div class="flex flex-wrap">

                <label class="mr-12 flex items-center">
                    <span class="mr-4">{{ __('Стоимость от') }}</span>
                    <x-form.input type="number" class="w-48 input bg-ruble bg-no-repeat bg-right-1 " placeholder="{{ __('Введите сумму') }}"/>
                </label>

                <label class="flex items-center">
                    <span class="mr-4">{{ __('До') }}</span>
                    <x-form.input type="number" class="w-48 input bg-ruble bg-no-repeat bg-right-1" placeholder="{{ __('Введите сумму') }}" />
                </label>

            </div>
        </div>
    </div>

    <div class="flex flex-wrap justify-between">

        <div class="flex flex-wrap"
             x-data="{  newAnnouncements: true,
                                        nearYou: false,
                                        selectedObjects: false,
                                        onMap: false}">

            <label class="mr-4 flex py-3 px-5 rounded-3xl cursor-pointer"
                   :class="{'bg-green-1 text-white' : newAnnouncements, 'bg-gray-6' : !newAnnouncements }">
                <input type="checkbox" x-model="newAnnouncements" class="hidden">
                {{ __('Новые объявления') }}
            </label>

            <label class="mr-4 flex py-3 px-5 rounded-3xl cursor-pointer"
                   :class="{'bg-green-1 text-white' : nearYou, 'bg-gray-6' : !nearYou }">
                <input type="checkbox" x-model="nearYou" class="hidden">
                {{ __('Рядом с вами') }}
            </label>

            <label class="mr-4 flex py-3 px-5 rounded-3xl cursor-pointer"
                   :class="{'bg-green-1 text-white' : selectedObjects, 'bg-gray-6' : !selectedObjects }">
                <input type="checkbox" x-model="selectedObjects" class="hidden">
                {{ __('Избранные объекты') }}
            </label>

            <label class="flex py-3 px-5 rounded-3xl cursor-pointer"
                   :class="{'bg-green-1 text-white' : onMap, 'bg-gray-6' : !onMap }">
                <input type="checkbox" x-model="onMap" class="hidden">
                {{ __('Объявления на карте') }}
            </label>

        </div>

        <div class="flex items-center text-gray-5">
            72 объявления
        </div>

    </div>

</form>
