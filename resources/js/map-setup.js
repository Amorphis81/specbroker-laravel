import axios from "axios";

function filterHandler(){
    //Инициализация карты
    const map = document.querySelector('#mapid');

    if (!map) return

    const mymap = L.map('mapid').setView([55.75399399999374, 37.62209300000001], 10);

    const OpenStreetMap_Mapnik = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 18,
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(mymap);

    let markerGroup = L.layerGroup().addTo(mymap);

    //Работа с фильтром
    const mapFilters = document.querySelectorAll('[data-name=filter]');

    mapFilters.forEach(filter => {
        const type = filter.type.value;
        const stationInputs = filter.querySelectorAll('[name=stations]');
        const objectTypesInputs = filter.querySelectorAll('[name=object_types]');
        const filterInputs = filter.querySelectorAll('[data-name=filter-input]');

        const price_from = filter.price_from;
        const price_to = filter.price_to

        const license_type = filter.license_type;

        let stationInputsIds = {};
        let objectTypesIds = {};

        filterInputs.forEach(input => {
            input.addEventListener('change', () => {
                stationInputs.forEach(input => (input.type === 'checkbox') ? stationInputsIds[input.value] = input.checked : '' )

                objectTypesInputs.forEach(input => (input.type === 'checkbox') ? objectTypesIds[input.value] = input.checked : '')

                const data = {
                    stations: stationInputsIds || null,
                    object_types: objectTypesIds || null,
                    price_from: price_from ? price_from.value : null,
                    price_to: price_to ? price_to.value : null,
                    license_type: license_type ? license_type.value : null,
                    type,
                }

                axiosHandler('/api/business-map-filter', data, markerGroup, type);
            })
        })
    })

    function axiosHandler(url, data, markerGroup, type){
        axios.post(url, data).then(respond=>{
            markerGroup.clearLayers();
            if (type === 'blocks'){
                document.querySelector('[data-name=filter-result]').innerHTML = respond['data'];
            } else {
                const businesses = respond['data'];

                businesses.forEach(business => {
                    const businessMarker = `
                          <img src="../images/business-popup.jpg" alt="img">
                          <div class="mt-2 mb-2 font-bold text-sm text-accent">${business.name}</div>
                          <div class="mb-2 flex items-center">
                            <svg class="mr-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M9.49908 18.5048L9.43451 18.5692L9.49908 18.6335L10.3871 19.5189L10.4512 19.5829L10.5154 19.5189L15.9682 14.0822L15.9683 14.0821C17.3757 12.6755 18.2487 10.7338 18.2487 8.58948C18.2487 4.29737 14.7588 0.818149 10.4546 0.818149C6.15046 0.818149 2.66056 4.29737 2.66056 8.58948C2.66056 10.732 3.5335 12.6788 4.93593 14.0771C5.07035 14.2111 5.24844 14.2905 5.44917 14.2905C5.8452 14.2905 6.1664 13.9706 6.1664 13.5751C6.1664 13.3733 6.07886 13.1909 5.94722 13.0596C4.80556 11.9213 4.09331 10.3334 4.09331 8.58948C4.09331 5.09345 6.9459 2.2489 10.4529 2.2489C13.96 2.2489 16.8142 5.09348 16.8142 8.58948C16.8142 10.3383 16.1004 11.9229 14.9485 13.0714L9.49908 18.5048Z" fill="#919BA7" stroke="#919BA7" stroke-width="0.181818"/>
                              <path d="M11.6851 10.1043V10.8517H14.6614V10.1043H14.0823L12.1122 5.13721L10.4511 8.03735L8.79158 5.13721L6.81979 10.1043H6.24243V10.8517H9.21869V10.1043H8.77301L9.20687 8.86549L10.4511 10.9089L11.6969 8.86549L12.1308 10.1043H11.6851Z" fill="#919BA7"/>
                            </svg>
                            <span class="text-sm text-gray-5">м. Люблино</span>
                          </div>
                          <div class="flex items-center justify-between">
                            <div class="flex font-black text-accent"><span class="mr-2">3 500 000 </span>&#8381</div>
                            <a href="#" target="_blank" rel="noopener" class="tw-button-green !text-white max-w-[110px]">Подробнее</a>
                          </div>`;

                    L.marker(JSON.parse(business.coords)).bindPopup(businessMarker).openPopup().addTo(markerGroup);
                })
            }

        })
    }
}

filterHandler();
