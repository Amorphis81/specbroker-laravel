<x-modal.main state="consultModal">
    <x-modal.header>
        <x-slot name="title">{{ __('Заявка на консультацию') }}</x-slot>
        <x-slot name="text">{{ __('Пожалуйста, укажеите причину заявки, наши менеджеры свяжутся с вами в ближайшее время') }}</x-slot>
    </x-modal.header>

    <x-modal.body>
        <x-form.main>

            <x-form.item>
                <x-form.label-input>
                    <x-form.span-label required class="mb-3">{{ __('Ваш телефон для связи') }}</x-form.span-label>
                    <x-form.input type="email" placeholder="{{ __('Email') }}" />
                </x-form.label-input>
            </x-form.item>

            <x-form.item>
                <x-form.label-input>
                    <x-form.span-label required class="mb-3">{{ __('Селект') }}</x-form.span-label>
                    <x-form.select :options="['0' => 'Не выбрана']" />
                </x-form.label-input>
            </x-form.item>

            <x-form.item>
                <x-form.label-input>
                    <x-form.span-label class="mb-3">{{ __('Селект') }}</x-form.span-label>
                    <x-form.textarea class="h-24" placeholder="Введите комментарий к заявке"></x-form.textarea>
                </x-form.label-input>
            </x-form.item>

            <div class="flex items-center justify-center flex-wrap">
                <button class="tw-button-accent max-w-[210px] mb-3 mr-3">{{ __('Отправить заявку') }}</button>
            </div>
        </x-form.main>
    </x-modal.body>
</x-modal.main>
