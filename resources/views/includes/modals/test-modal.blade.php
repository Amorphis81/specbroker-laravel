<x-modal.main state="testModal">
    <x-modal.header>
        <x-slot name="title">{{ __('Заголовок') }}</x-slot>
        <x-slot name="text">{{ __('Пожалуйста, укажеите причину заявки, наши менеджеры свяжутся с вами в ближайшее время') }}</x-slot>
    </x-modal.header>

    <x-modal.body>
        <x-form.main>

            <x-form.item>
                <x-form.label-input>
                    <x-form.span-label required>{{ __('Текстовое поле') }}</x-form.span-label>
                    <x-form.input required placeholder="{{ __('Введите текст') }}" />
                </x-form.label-input>
            </x-form.item>

            <x-form.item>
                <x-form.label-input>
                    <span class="mb-3">{{ __('Email') }}</span>
                    <x-form.input type="email" placeholder="{{ __('Email') }}" />
                </x-form.label-input>
            </x-form.item>

            <x-form.item>
                <x-form.label-input>
                    <span class="mb-3">{{ __('Текстовое поле') }}</span>
                    <x-form.textarea class="h-24" placeholder="{{ __('Введите текст') }}"></x-form.textarea>
                </x-form.label-input>
            </x-form.item>

            <x-form.item>
                <x-form.label-input>
                    <span class="mb-3">{{ __('Селект') }}</span>
                    <x-form.select :options="['0' => 'Не выбрано']" />
                </x-form.label-input>
            </x-form.item>

            <div class="flex items-center justify-center flex-wrap">
                <button class="tw-button-accent max-w-[210px] mb-3 mr-3">{{ __('Отправить заявку') }}</button>
                <button class="tw-button-accent-o max-w-[210px] mb-3 mr-3">{{ __('Отправить заявку') }}</button>
                <button class="tw-button-green max-w-[210px] mb-3 mr-3">{{ __('Отправить заявку') }}</button>
            </div>
        </x-form.main>
    </x-modal.body>
</x-modal.main>
