@extends( 'layouts.base' )

@section( 'styles' )
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
@endsection

@section( 'scripts' )
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/swiper-single-business-setup.js') }}"></script>
@endsection

@section( 'content' )
    <section class="pt-11 pb-24">
        <div class="tw-container">
            <a href="{{ route('buy') }}" class="mb-12 flex items-center text-sm text-green-1">
                <svg class="mr-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.57484 11.4511L1.90297 7.24786L5.57484 3.04465C5.87156 2.70462 5.83695 2.18825 5.49691 1.89126C5.15687 1.59454 4.64078 1.62942 4.34352 1.96919L0.201914 6.71024C-0.0673047 7.01813 -0.0673047 7.47782 0.201914 7.78571L4.34355 12.5268C4.50539 12.7115 4.73184 12.8064 4.95961 12.8064C5.15035 12.8064 5.34187 12.7399 5.49691 12.6045C5.83699 12.3075 5.87184 11.7911 5.57484 11.4511Z" fill="#587175"/>
                    <path d="M14.0598 6.43042H0.817422C0.365938 6.43042 0 6.79632 0 7.24784C0 7.69933 0.365938 8.06526 0.817422 8.06526H14.0598C16.4338 8.06526 18.3652 9.99655 18.3652 12.3704C18.3652 14.7442 16.4338 16.6755 14.0598 16.6755H1.90734C1.45586 16.6755 1.08992 17.0414 1.08992 17.4929C1.08992 17.9444 1.45586 18.3103 1.90734 18.3103H14.0598C17.3349 18.3103 20 15.6455 20 12.3704C20 9.09522 17.3352 6.43042 14.0598 6.43042Z" fill="#587175"/>
                </svg>
                {{ __('К списку объявлений') }}
            </a>

            <div class="mb-7 flex justify-between items-start">
                <div class="">
                    <h1 class="mb-6 text-3xl font-bold text-accent uppercase">Стоматология в районе м. Люблино</h1>
                    <div class="mb-6 flex items-center">
                        <div class="mr-4 w-8 h-8 flex items-center justify-center rounded-full bg-gray-1">
                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.95">
                                    <path d="M9.024 17.5796L8.96266 17.6407L9.024 17.7019L9.86758 18.543L9.92856 18.6038L9.98954 18.543L15.1697 13.3781L15.1698 13.378C16.5068 12.0418 17.3361 10.1972 17.3361 8.16003C17.3361 4.08253 14.0207 0.777269 9.93177 0.777269C5.84281 0.777269 2.52741 4.08253 2.52741 8.16003C2.52741 10.1955 3.3567 12.0449 4.68901 13.3733C4.81671 13.5006 4.98589 13.576 5.17659 13.576C5.55282 13.576 5.85795 13.2721 5.85795 12.8964C5.85795 12.7046 5.7748 12.5314 5.64974 12.4067C4.56516 11.3253 3.88853 9.81678 3.88853 8.16003C3.88853 4.8388 6.59848 2.13648 9.93017 2.13648C13.2619 2.13648 15.9734 4.83883 15.9734 8.16003C15.9734 9.82141 15.2953 11.3268 14.201 12.4179L9.024 17.5796Z" fill="#587175" stroke="#587175" stroke-width="0.172727"/>
                                    <path d="M11.1007 9.59907V10.309H13.9282V9.59907H13.3781L11.5065 4.88031L9.92837 7.63545L8.35187 4.88031L6.47867 9.59907H5.93018V10.309H8.75762V9.59907H8.33423L8.74639 8.42218L9.92837 10.3634L11.112 8.42218L11.5241 9.59907H11.1007Z" fill="#587175"/>
                                </g>
                            </svg>
                        </div>

                        <span>м. Люблино</span>
                    </div>

                    <div class="flex text-gray-5 text-sm">
                        <div class="mr-10">10.02.2021</div>
                        <div class="mr-10 flex items-center">
                            <svg class="mr-2" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.15957 7.875C3.21877 7.9773 3.29725 8.10767 3.39447 8.25822C3.64419 8.64488 4.01401 9.15907 4.49412 9.6712C5.46424 10.706 6.82057 11.6667 8.5 11.6667C10.1794 11.6667 11.5358 10.706 12.5059 9.6712C12.986 9.15907 13.3558 8.64488 13.6055 8.25822C13.7027 8.10767 13.7812 7.9773 13.8404 7.875C13.7812 7.7727 13.7027 7.64233 13.6055 7.49178C13.3558 7.10512 12.986 6.59093 12.5059 6.0788C11.5358 5.04401 10.1794 4.08333 8.5 4.08333C6.82057 4.08333 5.46424 5.04401 4.49412 6.0788C4.01401 6.59093 3.64419 7.10512 3.39447 7.49178C3.29725 7.64233 3.21877 7.7727 3.15957 7.875ZM14.4583 7.875C14.9428 7.63276 14.9427 7.63258 14.9426 7.63238L14.9417 7.63064L14.9399 7.62694L14.9337 7.61491C14.9286 7.60486 14.9213 7.5908 14.9118 7.57299C14.893 7.53738 14.8657 7.48675 14.8299 7.42324C14.7585 7.29631 14.6534 7.11749 14.5156 6.90405C14.2405 6.47821 13.8317 5.90907 13.2962 5.33787C12.2351 4.20599 10.6122 3 8.5 3C6.38777 3 4.76493 4.20599 3.70379 5.33787C3.16829 5.90907 2.75945 6.47821 2.48443 6.90405C2.34659 7.11749 2.24147 7.29631 2.17007 7.42324C2.13435 7.48675 2.107 7.53738 2.08816 7.57299C2.07873 7.5908 2.07143 7.60486 2.06627 7.61491L2.06012 7.62694L2.05825 7.63064L2.05762 7.6319C2.05752 7.6321 2.05719 7.63276 2.54167 7.875L2.05719 7.63276C1.98094 7.78525 1.98094 7.96475 2.05719 8.11724L2.54167 7.875C2.05719 8.11724 2.05709 8.11704 2.05719 8.11724L2.05825 8.11936L2.06012 8.12306L2.06627 8.1351C2.07143 8.14514 2.07873 8.15921 2.08816 8.17701C2.107 8.21262 2.13435 8.26325 2.17007 8.32676C2.24147 8.45369 2.34659 8.63251 2.48443 8.84595C2.75945 9.27179 3.16829 9.84093 3.70379 10.4121C4.76493 11.544 6.38777 12.75 8.5 12.75C10.6122 12.75 12.2351 11.544 13.2962 10.4121C13.8317 9.84093 14.2405 9.27179 14.5156 8.84595C14.6534 8.63251 14.7585 8.45369 14.8299 8.32676C14.8657 8.26325 14.893 8.21262 14.9118 8.17701C14.9213 8.15921 14.9286 8.14514 14.9337 8.1351L14.9399 8.12306L14.9417 8.11936L14.9424 8.1181C14.9425 8.1179 14.9428 8.11724 14.4583 7.875ZM14.4583 7.875L14.9428 8.11724C15.0191 7.96475 15.0189 7.78487 14.9426 7.63238L14.4583 7.875Z" fill="#919BA7"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.49968 6.79171C7.90137 6.79171 7.41634 7.27673 7.41634 7.87504C7.41634 8.47335 7.90137 8.95837 8.49968 8.95837C9.09798 8.95837 9.58301 8.47335 9.58301 7.87504C9.58301 7.27673 9.09798 6.79171 8.49968 6.79171ZM6.33301 7.87504C6.33301 6.67842 7.30306 5.70837 8.49968 5.70837C9.69629 5.70837 10.6663 6.67842 10.6663 7.87504C10.6663 9.07166 9.69629 10.0417 8.49968 10.0417C7.30306 10.0417 6.33301 9.07166 6.33301 7.87504Z" fill="#919BA7"/>
                            </svg>
                            251 просмотр
                        </div>
                        <div>
                            id: 533684
                        </div>
                    </div>
                </div>

                <div class="px-7 py-5 flex items-center border border-dotted border-green-1/60 rounded-xl cursor-pointer">
                    <svg class="mr-5" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M28.6154 1.53841H3.38462C1.51831 1.53841 0 3.05678 0 4.92303V18.7692V20.923C0 22.7893 1.51831 24.3077 3.38462 24.3077H11.5571L10.5724 29.2307H7.38462C7.04475 29.2307 6.76925 29.5062 6.76925 29.8461C6.76925 30.186 7.04475 30.4615 7.38462 30.4615H24.6154C24.9552 30.4615 25.2307 30.186 25.2307 29.8461C25.2307 29.5062 24.9552 29.2307 24.6154 29.2307H21.4276L20.4429 24.3077H28.6154C30.4816 24.3077 32 22.7893 32 20.923V18.7692V4.92303C32 3.05678 30.4817 1.53841 28.6154 1.53841ZM11.8276 29.2307L12.8122 24.3077H19.1878L20.1724 29.2307H11.8276ZM30.7693 20.923C30.7693 22.1107 29.8031 23.0769 28.6154 23.0769H3.38462C2.197 23.0769 1.23075 22.1107 1.23075 20.923V19.3846H30.7692V20.923H30.7693ZM30.7693 18.1538H1.23075V16.9231H4.92306C5.26294 16.9231 5.53844 16.6476 5.53844 16.3077C5.53844 15.9678 5.26294 15.6923 4.92306 15.6923H1.23075V4.92303C1.23075 3.73541 2.19694 2.76916 3.38462 2.76916H28.6154C29.803 2.76916 30.7693 3.73534 30.7693 4.92303V18.1538Z" fill="#587175"/>
                        <path d="M15.9998 20C15.3212 20 14.769 20.5521 14.769 21.2307C14.769 21.9094 15.3212 22.4615 15.9998 22.4615C16.6784 22.4615 17.2305 21.9094 17.2305 21.2307C17.2305 20.5521 16.6784 20 15.9998 20Z" fill="#587175"/>
                        <path d="M21.0384 13.3241L19.7329 12.0186L20.8208 10.9308C20.979 10.7727 21.0389 10.5411 20.9772 10.326C20.9155 10.111 20.742 9.9464 20.524 9.89602L14.8671 8.59059C14.6604 8.54303 14.4437 8.60502 14.2935 8.75509C14.1435 8.90515 14.0813 9.12184 14.129 9.32865L15.4346 14.9855C15.4849 15.2034 15.6495 15.377 15.8646 15.4386C16.0797 15.5003 16.3112 15.4404 16.4694 15.2823L17.5572 14.1944L18.8627 15.4998C18.9829 15.62 19.1404 15.6801 19.2978 15.6801C19.4552 15.6801 19.6128 15.62 19.7329 15.4998L21.0384 14.1944C21.2786 13.9541 21.2786 13.5645 21.0384 13.3241ZM19.2978 14.1944L17.9924 12.889C17.8722 12.7688 17.7147 12.7087 17.5572 12.7087C17.3998 12.7087 17.2422 12.7688 17.1221 12.889L16.3842 13.6269L15.5499 10.0113L19.1654 10.8456L18.4275 11.5835C18.1872 11.8238 18.1872 12.2135 18.4275 12.4538L19.7329 13.7593L19.2978 14.1944Z" fill="#587175"/>
                        <path d="M13.4672 7.05823L12.8518 6.44285C12.6115 6.20254 12.2218 6.20254 11.9815 6.44285C11.7412 6.68317 11.7412 7.07279 11.9815 7.31317L12.5969 7.92854C12.7171 8.04873 12.8746 8.10879 13.0321 8.10879C13.1895 8.10879 13.3471 8.04873 13.4672 7.92854C13.7075 7.68829 13.7075 7.2986 13.4672 7.05823Z" fill="#587175"/>
                        <path d="M12.2669 8.72429H11.3966C11.0568 8.72429 10.7812 8.99979 10.7812 9.33966C10.7812 9.67954 11.0568 9.95504 11.3966 9.95504H12.2669C12.6067 9.95504 12.8822 9.67954 12.8822 9.33966C12.8822 8.99979 12.6067 8.72429 12.2669 8.72429Z" fill="#587175"/>
                        <path d="M13.4671 10.7504C13.2269 10.5101 12.8373 10.5101 12.5969 10.7504L11.9815 11.3658C11.7412 11.6061 11.7412 11.9958 11.9815 12.2361C12.1017 12.3563 12.2592 12.4164 12.4166 12.4164C12.5741 12.4164 12.7316 12.3563 12.8518 12.2361L13.4671 11.6207C13.7074 11.3805 13.7074 10.9908 13.4671 10.7504Z" fill="#587175"/>
                        <path d="M17.7748 6.44285C17.5345 6.20254 17.1449 6.20254 16.9045 6.44285L16.2891 7.05823C16.0488 7.29854 16.0488 7.68823 16.2891 7.92854C16.4093 8.04873 16.5668 8.10879 16.7243 8.10879C16.8818 8.10879 17.0393 8.04873 17.1594 7.92854L17.7748 7.31317C18.0151 7.07292 18.0151 6.68323 17.7748 6.44285Z" fill="#587175"/>
                        <path d="M14.8781 5.24303C14.5382 5.24303 14.2627 5.51853 14.2627 5.8584V6.72865C14.2627 7.06853 14.5382 7.34403 14.8781 7.34403C15.2179 7.34403 15.4934 7.06853 15.4934 6.72865V5.8584C15.4934 5.51853 15.2179 5.24303 14.8781 5.24303Z" fill="#587175"/>
                        <path d="M7.37225 16.1877C7.36487 16.1483 7.35256 16.1095 7.33718 16.072C7.32181 16.035 7.30275 15.9993 7.28056 15.9661C7.25843 15.9322 7.23256 15.9008 7.20425 15.8725C7.17593 15.8442 7.14456 15.8184 7.11068 15.7962C7.07743 15.7741 7.04175 15.755 7.00425 15.7396C6.96731 15.7242 6.92856 15.7119 6.88918 15.7045C6.80981 15.6885 6.72856 15.6885 6.64918 15.7045C6.60981 15.7119 6.57106 15.7242 6.53412 15.7396C6.49656 15.755 6.46087 15.774 6.42768 15.7962C6.39381 15.8183 6.36243 15.8442 6.33412 15.8725C6.30581 15.9008 6.28 15.9322 6.25781 15.9661C6.23568 15.9993 6.21656 16.035 6.20118 16.072C6.18581 16.1095 6.1735 16.1483 6.16612 16.1877C6.15812 16.227 6.15381 16.2677 6.15381 16.3077C6.15381 16.3477 6.15812 16.3883 6.16612 16.4277C6.1735 16.467 6.18581 16.5058 6.20118 16.5427C6.21656 16.5803 6.23562 16.616 6.25781 16.6492C6.27993 16.683 6.30581 16.7144 6.33412 16.7427C6.36243 16.771 6.39381 16.7968 6.42768 16.819C6.46093 16.8412 6.49662 16.8603 6.53412 16.8757C6.57106 16.891 6.60981 16.9033 6.64918 16.9113C6.68856 16.9193 6.72918 16.923 6.76918 16.923C6.80918 16.923 6.84981 16.9193 6.88918 16.9113C6.92856 16.9033 6.96731 16.891 7.00425 16.8757C7.04181 16.8603 7.0775 16.8412 7.11068 16.819C7.14456 16.7969 7.17593 16.771 7.20425 16.7427C7.23256 16.7144 7.25837 16.683 7.28056 16.6492C7.30268 16.6159 7.32181 16.5802 7.33718 16.5427C7.35256 16.5058 7.36487 16.467 7.37225 16.4277C7.38025 16.3883 7.38456 16.3477 7.38456 16.3077C7.38456 16.2677 7.38025 16.227 7.37225 16.1877Z" fill="#587175"/>
                    </svg>

                    <div class="mr-2 max-w-[253px] text-green-1">
                        {{ __('Для этого объявления доступна бесплатная удаленная оценка') }}
                    </div>

                    <div class="w-5 h-5 flex justify-center items-center text-white text-sm bg-green-1/50 rounded-full">?</div>
                </div>
            </div>

            <div class="mb-9 flex">
                <div class="max-w-[600px]">

                    <div class="swiper-container mx-0 mb-5 cursor-pointer" data-name="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img width="600" height="400" src="{{ asset('images/business-slider/img-full.jpg') }}" alt="slide"/>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-container" data-name="swiper-thumbs">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide cursor-pointer">
                                <img width="102" height="68" src="{{ asset('images/business-slider/img-thumb.jpg') }}" alt="thumb"/>
                            </div>

                            <div class="swiper-slide cursor-pointer">
                                <img width="102" height="68" src="{{ asset('images/business-slider/img-thumb-2.jpg') }}" alt="thumb"/>
                            </div>

                            <div class="swiper-slide cursor-pointer">
                                <img width="102" height="68" src="{{ asset('images/business-slider/img-thumb-3.jpg') }}" alt="thumb"/>
                            </div>

                            <div class="swiper-slide cursor-pointer">
                                <img width="102" height="68" src="{{ asset('images/business-slider/img-thumb-4.jpg') }}" alt="thumb"/>
                            </div>

                            <div class="swiper-slide cursor-pointer">
                                <img width="102" height="68" src="{{ asset('images/business-slider/img-thumb-5.jpg') }}" alt="thumb"/>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="px-9 w-full">

                    <div class="relative mb-7 px-14 py-4 w-max font-black text-2xl text-accent bg-gray-8 rounded-xl">
                        3 500 000 &#8381;
                        <div class="absolute bottom-2 left-2 w-full h-full rounded-xl bg-gray-1 z-[-1]"></div>
                    </div>

                    <div class="mb-5">

                        <div class="mb-3 font-bold text-accent">{{ __('Организационно-правовая форма:') }}</div>
                        <div class="mb-5">общество с ограниченной ответственностью</div>
                        <div class="w-full h-px bg-gray-5/30"></div>

                    </div>

                    <div class="mb-5">

                        <div class="mb-3 font-bold text-accent">{{ __('Площадь:') }}</div>
                        <div class="mb-5">154 кв.м.</div>
                        <div class="w-full h-px bg-gray-5/30"></div>

                    </div>

                    <div class="mb-5">

                        <div class="mb-3 font-bold text-accent">{{ __('Тип владения:') }}</div>
                        <div class="mb-5">аренда, долгосрочная до 23.08.2022 </div>
                        <div class="w-full h-px bg-gray-5/30"></div>

                    </div>

                    <div class="mb-5">

                        <div class="mb-3 font-bold text-accent">{{ __('Арендная ставка:') }}</div>
                        <div class="mb-5">150 000 руб./мес.</div>
                        <div class="w-full h-px bg-gray-5/30"></div>

                    </div>

                    <div>

                        <div class="mb-3 font-bold text-accent">{{ __('Количество продаваемых долей:') }}</div>
                        <div class="mb-5">2/2</div>

                    </div>

                </div>
            </div>

            <div class="mb-10">
                <nav class="mb-16">
                    <ul class="relative flex space-x-5 md:space-x-14" x-data="{ tab: 'description' }">
                        <li class="relative text-gray text-lg sm:text-2xl" :class="{ 'text-accent': tab === 'description' }"
                            @click="tab = 'description'">
                            <a href="#description">
                                <span class="block">Описание</span>
                            </a>
                            <div class="absolute -bottom-5 left-0 !ml-0 w-full h-[2px] max-w-full z-[1]"
                                 :class="{ 'bg-accent': tab === 'description' }"></div>
                        </li>
                        <li class="relative text-gray text-lg sm:text-2xl" :class="{ 'text-accent': tab === 'additional' }"
                            @click="tab = 'additional'">
                            <a href="#additions">
                                <span class="block">Дополнительная информация</span>
                            </a>
                            <div class="absolute -bottom-5 left-0 !ml-0 w-full h-[2px] max-w-full z-[1]"
                                 :class="{ 'bg-accent': tab === 'additional' }"></div>
                        </li>
                        <li class="relative text-gray text-lg sm:text-2xl" :class="{ 'text-accent': tab === 'bonus' }" @click="tab = 'bonus'">
                            <a href="#bonus">
                                <span class="block">Бонусы</span>
                            </a>
                            <div class="absolute -bottom-5 left-0 !ml-0 w-full h-[2px] max-w-full z-[1]"
                                 :class="{ 'bg-accent': tab === 'bonus' }"></div>
                        </li>
                        <div class="absolute -bottom-5 left-0 !ml-0 w-full h-[2px] max-w-[1110px] bg-gray"></div>
                    </ul>
                </nav>

                <div id="description" class="mb-12">Продается стоматологическая клиника в шаговой доступности от метро.
                    Большая клиентская база. Долгосрочный договор аренды. Клиники оказывают широкий спектр стоматологических услуг. Клиентская база насчитывает 30 тысяч пациентов, заключены договора на обслуживание корпоративных клиентов, а также ДМС со страховыми компаниями. Соотношение корпоративных клиентов и физических лиц- 50/50. Стоматология работает круглосуточно, есть личный веб-сайт.</div>

                <h2 id="additions" class="font-bold text-accent mb-8 text-2xl">Дополнительная информация</h2>

                {{-- Блок --}}
                <div class="mb-7 border border-gray-9 rounded">
                    <div class="flex px-6 py-4 bg-gray-8 border-b border-gray-9">
                        <div class="font-bold text-green-1 text-lg">{{ __('Оборудование') }}</div>
                    </div>

                    <div class="px-6 py-7">

                        <div class="mb-5 font-bold">{{ __('Есть всё необходимое оборудование:') }}</div>

                        <ul>
                            <li class="mb-3 flex items-center">
                                <div class="mr-3 w-2 h-2 bg-accent rounded-full"></div>
                                {{ __('Визиограф стоматологический + рентген Шкаф для хранения инструментов;') }}
                            </li>

                            <li class="mb-3 flex items-center">
                                <div class="mr-3 w-2 h-2 bg-accent rounded-full"></div>
                                {{ __('Стоматологическая установка Система индивидуального кондиционирования и увлажнения воздуха в лечебных помещениях;') }}
                            </li>

                            <li class="mb-3 flex items-center">
                                <div class="mr-3 w-2 h-2 bg-accent rounded-full"></div>
                                {{ __('Вибростол (стоматологический, зуботехнический) Гипсоотстойники (грязеуловитель);') }}
                            </li>

                            <li class="mb-3 flex items-center">
                                <div class="mr-3 w-2 h-2 bg-accent rounded-full"></div>
                                {{ __('Аппарат для дезинфекции оттисков, стоматологических изделий и инструментов; ') }}
                            </li>

                            <li class="flex items-center">
                                <div class="mr-3 w-2 h-2 bg-accent rounded-full"></div>
                                {{ __('Мойка ультразвуковая Аппарат для дезинфекции инструментов медицинских. Стерилизатор стоматологический для мелкого инструментария гласперленовый.') }}
                            </li>
                        </ul>

                    </div>

                </div>

                {{-- Блок --}}
                <div class="mb-7 border border-gray-9 rounded">
                    <div class="flex px-6 py-4 bg-gray-8 border-b border-gray-9">
                        <div class="font-bold text-green-1 text-lg">{{ __('Лицензии') }}</div>
                    </div>

                    <div class="px-6 py-7">
                        {{ __('Первичной специализированной медико-санитарной помощи в амбулаторных условиях по: ортодонтии, стоматологии ортопедической, стоматологии терапевтической, стоматологии общей практики.') }}
                    </div>

                </div>

                {{-- Блок --}}
                <div class="mb-7 border border-gray-9 rounded">
                    <div class="flex px-6 py-4 bg-gray-8 border-b border-gray-9">
                        <div class="font-bold text-green-1 text-lg">{{ __('Коммунальные расходы') }}</div>
                    </div>

                    <div class="px-6 py-7">
                        {{ __('3 000 рублей') }}
                    </div>

                </div>

                {{-- Блок --}}
                <div class="mb-7 border border-gray-9 rounded">
                    <div class="flex px-6 py-4 bg-gray-8 border-b border-gray-9">
                        <div class="font-bold text-green-1 text-lg">{{ __('Планировка') }}</div>
                    </div>

                    <div class="px-6 py-7">
                        {{ __('1 кабинет (может быть 2 установки. Разводка под вторую подведена), ресепшн, зона ожидания, подсобное помещение, санузел.') }}
                    </div>

                </div>

                {{-- Блок --}}
                <div class="mb-7 border border-gray-9 rounded">
                    <div class="flex px-6 py-4 bg-gray-8 border-b border-gray-9">
                        <div class="font-bold text-green-1 text-lg">{{ __('Персонал') }}</div>
                    </div>

                    <div class="px-6 py-7">
                        {{ __('3 врача-стоматолога, 2 медсестры.') }}
                    </div>

                </div>

                {{-- Блок --}}
                <div class="mb-7 border border-gray-9 rounded">
                    <div class="flex px-6 py-4 bg-gray-8 border-b border-gray-9">
                        <div class="font-bold text-green-1 text-lg">{{ __('Возраст бизнеса') }}</div>
                    </div>

                    <div class="px-6 py-7">
                        {{ __('5 лет.') }}
                    </div>

                </div>

                {{-- Блок --}}
                <div class="mb-7 border border-gray-9 rounded">
                    <div class="flex px-6 py-4 bg-gray-8 border-b border-gray-9">
                        <div class="font-bold text-green-1 text-lg">{{ __('Причина продажи') }}</div>
                    </div>

                    <div class="px-6 py-7">
                        {{ __('Необходимость реинвестировать средства в приоритетный проект.') }}
                    </div>

                </div>

                {{-- Блок --}}
                <div class="mb-7 border border-gray-9 rounded">
                    <div class="flex px-6 py-4 bg-gray-8 border-b border-gray-9">
                        <div class="font-bold text-green-1 text-lg">{{ __('Реклама') }}</div>
                    </div>

                    <div class="px-6 py-7">
                        {{ __('Согласованная вывеска, сайт и клиентская база.') }}
                    </div>

                </div>

                {{-- Блок --}}
                <div class="mb-7 border border-gray-9 rounded">
                    <div class="flex px-6 py-4 bg-gray-8 border-b border-gray-9">
                        <div class="font-bold text-green-1 text-lg">{{ __('Точное местоположение') }}</div>
                    </div>

                    <div class="px-6 py-7">
                        {{ __('г. Москва, ул. Люблинская, 61') }}
                    </div>

                </div>


            </div>

            <div>
                <h2 class="mb-12 font-bold text-accent text-2xl">{{ __('Какие бонусы вы получаете, покупая бизнес на нашем сайте:') }}</h2>

                <div class="mb-14 flex items-center">

                    <div class="mr-8 md:mr-24 flex items-center flex-wrap">
                        <div class="mr-5 w-12 h-12 flex items-center bg-gray-6 ring-8 ring-gray-6/60 justify-center rounded-full">
                            <svg class="w-6 h-6" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M22.3558 1.2019H2.64424C1.18618 1.2019 0 2.38813 0 3.84614V14.6634V16.3461C0 17.8042 1.18618 18.9904 2.64424 18.9904H9.02895L8.25972 22.8365H5.76924C5.50371 22.8365 5.28848 23.0518 5.28848 23.3173C5.28848 23.5828 5.50371 23.798 5.76924 23.798H19.2308C19.4963 23.798 19.7115 23.5828 19.7115 23.3173C19.7115 23.0518 19.4963 22.8365 19.2308 22.8365H16.7403L15.971 18.9904H22.3558C23.8138 18.9904 25 17.8042 25 16.3461V14.6634V3.84614C25 2.38813 23.8138 1.2019 22.3558 1.2019ZM9.24028 22.8365L10.0095 18.9904H14.9905L15.7597 22.8365H9.24028ZM24.0385 16.3461C24.0385 17.274 23.2836 18.0289 22.3558 18.0289H2.64424C1.71641 18.0289 0.961523 17.274 0.961523 16.3461V15.1442H24.0384V16.3461H24.0385ZM24.0385 14.1827H0.961523V13.2212H3.84614C4.11167 13.2212 4.3269 13.006 4.3269 12.7404C4.3269 12.4749 4.11167 12.2597 3.84614 12.2597H0.961523V3.84614C0.961523 2.91831 1.71636 2.16343 2.64424 2.16343H22.3558C23.2836 2.16343 24.0385 2.91826 24.0385 3.84614V14.1827Z"
                                    fill="#587175"/>
                                <path
                                    d="M12.5001 15.625C11.9699 15.625 11.5386 16.0563 11.5386 16.5865C11.5386 17.1167 11.9699 17.548 12.5001 17.548C13.0303 17.548 13.4616 17.1167 13.4616 16.5865C13.4616 16.0563 13.0303 15.625 12.5001 15.625Z"
                                    fill="#587175"/>
                                <path
                                    d="M16.4361 10.4095L15.4162 9.38967L16.2661 8.53981C16.3897 8.41623 16.4365 8.23532 16.3883 8.0673C16.3401 7.89934 16.2045 7.77072 16.0342 7.73137L11.6148 6.71149C11.4533 6.67434 11.284 6.72277 11.1667 6.84001C11.0495 6.95725 11.0009 7.12653 11.0382 7.28811L12.0582 11.7075C12.0975 11.8778 12.2261 12.0133 12.3941 12.0615C12.5622 12.1097 12.743 12.0629 12.8666 11.9394L13.7165 11.0895L14.7363 12.1093C14.8302 12.2032 14.9533 12.2502 15.0763 12.2502C15.1993 12.2502 15.3224 12.2032 15.4162 12.1093L16.4361 11.0895C16.6238 10.9017 16.6238 10.5973 16.4361 10.4095ZM15.0763 11.0895L14.0564 10.0696C13.9625 9.9757 13.8395 9.92878 13.7165 9.92878C13.5935 9.92878 13.4704 9.9757 13.3765 10.0696L12.8001 10.6461L12.1482 7.82145L14.9729 8.47326L14.3963 9.04973C14.2086 9.23747 14.2086 9.54191 14.3963 9.72966L15.4162 10.7495L15.0763 11.0895Z"
                                    fill="#587175"/>
                                <path
                                    d="M10.5212 5.51415L10.0405 5.03339C9.85272 4.84564 9.54828 4.84564 9.36053 5.03339C9.17279 5.22113 9.17279 5.52552 9.36053 5.71332L9.84135 6.19408C9.93524 6.28798 10.0583 6.3349 10.1813 6.3349C10.3043 6.3349 10.4274 6.28798 10.5212 6.19408C10.709 6.00638 10.709 5.70194 10.5212 5.51415Z"
                                    fill="#587175"/>
                                <path
                                    d="M9.5835 6.81592H8.90361C8.63809 6.81592 8.42285 7.03115 8.42285 7.29668C8.42285 7.56221 8.63809 7.77744 8.90361 7.77744H9.5835C9.84902 7.77744 10.0643 7.56221 10.0643 7.29668C10.0643 7.03115 9.84902 6.81592 9.5835 6.81592Z"
                                    fill="#587175"/>
                                <path
                                    d="M10.5212 8.39886C10.3335 8.21112 10.0291 8.21112 9.8413 8.39886L9.36053 8.87963C9.17279 9.06737 9.17279 9.37181 9.36053 9.55956C9.45443 9.65345 9.57748 9.70037 9.70048 9.70037C9.82347 9.70037 9.94657 9.65345 10.0404 9.55956L10.5212 9.07879C10.7089 8.8911 10.7089 8.58666 10.5212 8.39886Z"
                                    fill="#587175"/>
                                <path
                                    d="M13.8865 5.03339C13.6987 4.84564 13.3943 4.84564 13.2065 5.03339L12.7258 5.51415C12.538 5.70189 12.538 6.00634 12.7258 6.19408C12.8197 6.28798 12.9427 6.3349 13.0658 6.3349C13.1888 6.3349 13.3119 6.28798 13.4057 6.19408L13.8865 5.71332C14.0742 5.52562 14.0742 5.22118 13.8865 5.03339Z"
                                    fill="#587175"/>
                                <path
                                    d="M11.6233 4.09619C11.3578 4.09619 11.1426 4.31143 11.1426 4.57695V5.25684C11.1426 5.52236 11.3578 5.7376 11.6233 5.7376C11.8889 5.7376 12.1041 5.52236 12.1041 5.25684V4.57695C12.1041 4.31143 11.8889 4.09619 11.6233 4.09619Z"
                                    fill="#587175"/>
                                <path
                                    d="M5.75952 12.6466C5.75376 12.6158 5.74414 12.5855 5.73213 12.5562C5.72012 12.5273 5.70522 12.4995 5.68789 12.4735C5.67061 12.447 5.65039 12.4225 5.62827 12.4004C5.60615 12.3783 5.58164 12.3581 5.55518 12.3408C5.5292 12.3235 5.50132 12.3085 5.47202 12.2965C5.44316 12.2845 5.41289 12.2749 5.38213 12.2691C5.32012 12.2566 5.25664 12.2566 5.19463 12.2691C5.16387 12.2749 5.13359 12.2845 5.10474 12.2965C5.07539 12.3085 5.04751 12.3234 5.02158 12.3408C4.99512 12.3581 4.97061 12.3783 4.94849 12.4004C4.92637 12.4225 4.9062 12.447 4.88887 12.4735C4.87158 12.4995 4.85664 12.5273 4.84463 12.5562C4.83262 12.5855 4.823 12.6158 4.81724 12.6466C4.81099 12.6773 4.80762 12.7091 4.80762 12.7403C4.80762 12.7716 4.81099 12.8033 4.81724 12.8341C4.823 12.8648 4.83262 12.8951 4.84463 12.924C4.85664 12.9533 4.87153 12.9812 4.88887 13.0071C4.90615 13.0336 4.92637 13.0581 4.94849 13.0802C4.97061 13.1023 4.99512 13.1225 5.02158 13.1398C5.04756 13.1571 5.07544 13.1721 5.10474 13.1841C5.13359 13.1961 5.16387 13.2057 5.19463 13.212C5.22539 13.2182 5.25713 13.2211 5.28838 13.2211C5.31963 13.2211 5.35137 13.2182 5.38213 13.212C5.41289 13.2057 5.44316 13.1961 5.47202 13.1841C5.50137 13.1721 5.52925 13.1572 5.55518 13.1398C5.58164 13.1226 5.60615 13.1023 5.62827 13.0802C5.65039 13.0581 5.67056 13.0336 5.68789 13.0071C5.70518 12.9811 5.72012 12.9533 5.73213 12.924C5.74414 12.8951 5.75376 12.8648 5.75952 12.8341C5.76577 12.8033 5.76914 12.7716 5.76914 12.7403C5.76914 12.7091 5.76577 12.6773 5.75952 12.6466Z"
                                    fill="#587175"/>
                            </svg>
                        </div>

                        <div>
                            <div class="font-bold text-green-1">{{ __('Бесплатная удаленная оценка') }}<br>{{ __('объявления') }}</div>
                            <button class="text-sm text-accent hover:underline" data-name="free-remote-open">{{ __('Узнать
                                больше') }}</button>
                        </div>
                    </div>

                    <div class="flex items-center flex-wrap">
                        <div class="mr-5 w-12 h-12 flex items-center bg-gray-6 ring-8 ring-gray-6/60 justify-center rounded-full">
                            <svg class="w-6 h-6" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.86328 22.0703C9.73492 22.0703 9.60884 22.1226 9.51805 22.2134C9.42726 22.3042 9.375 22.4302 9.375 22.5586C9.375 22.687 9.42726 22.813 9.51805 22.9038C9.60884 22.9946 9.73492 23.0469 9.86328 23.0469C9.99165 23.0469 10.1177 22.9946 10.2085 22.9038C10.2993 22.813 10.3516 22.687 10.3516 22.5586C10.3516 22.4302 10.2993 22.3042 10.2085 22.2134C10.1177 22.1226 9.99165 22.0703 9.86328 22.0703Z" fill="#587175"/>
                                <path d="M24.4787 6.65627C23.7848 5.96237 22.6559 5.96237 21.962 6.65627L19.7266 8.89168V1.66016C19.7266 0.74482 18.9817 0 18.0664 0H1.66016C0.74482 0 0 0.74482 0 1.66016V23.3398C0 24.2552 0.74482 25 1.66016 25H18.0664C18.9817 25 19.7266 24.2552 19.7266 23.3398V13.9254L24.4787 9.17301C25.1726 8.47912 25.1726 7.35016 24.4787 6.65627ZM18.75 1.66016V9.86824L17.7734 10.8448V2.44141C17.7734 2.17171 17.5549 1.95312 17.2852 1.95312H14.0219V0.976562H18.0664C18.4433 0.976562 18.75 1.28326 18.75 1.66016ZM16.0839 15.0511L16.7431 13.5702L17.5648 14.3919L16.0839 15.0511ZM13.0453 0.976562V2.96631C13.0453 3.2692 12.7989 3.51562 12.496 3.51562H7.23057C6.92768 3.51562 6.68125 3.2692 6.68125 2.96631V0.976562H13.0453ZM18.0664 24.0234H1.66016C1.28326 24.0234 0.976562 23.7167 0.976562 23.3398V1.66016C0.976562 1.28326 1.28326 0.976562 1.66016 0.976562H5.70469V1.95312H2.44141C2.17171 1.95312 1.95312 2.17171 1.95312 2.44141V22.5586C1.95312 22.8283 2.17171 23.0469 2.44141 23.0469H7.91016C8.17986 23.0469 8.39844 22.8283 8.39844 22.5586C8.39844 22.2889 8.17986 22.0703 7.91016 22.0703H2.92969V2.92969H5.70469V2.96631C5.70469 3.80764 6.38924 4.49219 7.23057 4.49219H12.496C13.3373 4.49219 14.0219 3.80764 14.0219 2.96631V2.92969H16.7969V11.8214L16.2407 12.3774C16.1985 12.4197 16.1644 12.4695 16.14 12.524L14.6744 15.8159C14.5922 16.0007 14.6322 16.2169 14.7751 16.3599C14.8687 16.4534 14.9937 16.503 15.1205 16.503C15.1876 16.503 15.2552 16.4892 15.3191 16.4608L16.7969 15.8028V22.0703H11.8164C11.5467 22.0703 11.3281 22.2889 11.3281 22.5586C11.3281 22.8283 11.5467 23.0469 11.8164 23.0469H17.2852C17.5547 23.0469 17.7734 22.8283 17.7734 22.5586V15.3679L18.611 14.995C18.6625 14.9721 18.7092 14.9403 18.75 14.9012V23.3398C18.75 23.7167 18.4433 24.0234 18.0664 24.0234ZM21.9683 10.3024L18.4124 13.8584L17.2766 12.7226L21.6793 8.31985L22.8151 9.45568L21.9683 10.3024ZM23.7883 8.48255L23.5056 8.76503L22.37 7.62939L22.6524 7.34692C22.9656 7.03373 23.4751 7.03373 23.7883 7.34692C24.1013 7.65991 24.1013 8.16936 23.7883 8.48255Z" fill="#587175"/>
                                <path d="M7.91016 5.85938H4.78516C4.51546 5.85938 4.29688 6.07796 4.29688 6.34766V9.47266C4.29688 9.74236 4.51546 9.96094 4.78516 9.96094H7.91016C8.17986 9.96094 8.39844 9.74236 8.39844 9.47266V6.34766C8.39844 6.07796 8.17986 5.85938 7.91016 5.85938ZM7.42188 8.98438H5.27344V6.83594H7.42188V8.98438Z" fill="#587175"/>
                                <path d="M7.91016 11.2305H4.78516C4.51546 11.2305 4.29688 11.4491 4.29688 11.7188V14.8438C4.29688 15.1134 4.51546 15.332 4.78516 15.332H7.91016C8.17986 15.332 8.39844 15.1134 8.39844 14.8438V11.7188C8.39844 11.4491 8.17986 11.2305 7.91016 11.2305ZM7.42188 14.3555H5.27344V12.207H7.42188V14.3555Z" fill="#587175"/>
                                <path d="M7.91016 16.6016H4.78516C4.51546 16.6016 4.29688 16.8201 4.29688 17.0898V20.2148C4.29688 20.4845 4.51546 20.7031 4.78516 20.7031H7.91016C8.17986 20.7031 8.39844 20.4845 8.39844 20.2148V17.0898C8.39844 16.8201 8.17986 16.6016 7.91016 16.6016ZM7.42188 19.7266H5.27344V17.5781H7.42188V19.7266Z" fill="#587175"/>
                                <path d="M11.4051 9.35785C11.5005 9.45322 11.6254 9.5009 11.7503 9.5009C11.8753 9.5009 12.0002 9.45322 12.0956 9.35785L14.3001 7.15334C14.4906 6.96279 14.4906 6.65361 14.3001 6.46288C14.1094 6.27214 13.8002 6.27214 13.6094 6.46288L11.7503 8.32197L11.0093 7.58096C10.8186 7.39023 10.5096 7.39023 10.3187 7.58096C10.1281 7.7717 10.1281 8.08088 10.3187 8.27142L11.4051 9.35785Z" fill="#587175"/>
                                <path d="M11.4051 14.7288C11.4967 14.8204 11.6208 14.8719 11.7503 14.8719C11.8799 14.8719 12.004 14.8204 12.0956 14.7288L14.3001 12.5245C14.4906 12.3337 14.4906 12.0246 14.3001 11.8338C14.1094 11.6433 13.8002 11.6433 13.6094 11.8338L11.7503 13.6931L11.0093 12.9521C10.8186 12.7614 10.5096 12.7614 10.3187 12.9521C10.1281 13.1426 10.1281 13.4518 10.3187 13.6426L11.4051 14.7288Z" fill="#587175"/>
                                <path d="M12.3096 19.3432L13.0667 20.1C13.162 20.1954 13.287 20.2431 13.4119 20.2431C13.5368 20.2431 13.6618 20.1954 13.7571 20.1C13.9479 19.9093 13.9479 19.6001 13.7571 19.4096L13.0003 18.6525L13.7571 17.8955C13.9479 17.705 13.9479 17.3958 13.7571 17.2051C13.5664 17.0143 13.2574 17.0143 13.0667 17.2051L12.3096 17.9619L11.5528 17.2051C11.3621 17.0145 11.0531 17.0143 10.8621 17.2051C10.6716 17.3958 10.6716 17.705 10.8621 17.8955L11.6192 18.6525L10.8621 19.4096C10.6716 19.6001 10.6716 19.9093 10.8621 20.1C10.9575 20.1954 11.0826 20.2431 11.2076 20.2431C11.3325 20.2431 11.4574 20.1954 11.5528 20.1L12.3096 19.3432Z" fill="#587175"/>
                            </svg>
                        </div>

                        <div>
                            <div class="font-bold text-green-1">{{ __('Расширенная оценка объявления') }}</div>
                            <button class="text-sm text-accent hover:underline">{{ __('Узнать больше') }}</button>
                        </div>
                    </div>
                </div>

                <div x-data class="flex flex-wrap">
                    <button type="button" class="mr-4 mb-4 sm:mb-0 tw-button-accent max-w-[231px]">Подать заявку на покупку</button>
                    <button type="button" class="tw-button-accent-o mb-4 sm:mb-0 max-w-[285px]">Подать заявку на удаленную оценку</button>
                </div>
            </div>
        </div>
    </section>
@endsection
