import axios from "axios";

const mapFilter = () => {
    const mapFilter = document.forms.mapFilter;
    if(!mapFilter) return;

    const stationInputs = mapFilter.querySelectorAll('[name=stations]');
    const filterInputs = mapFilter.querySelectorAll('[data-name=filter-input]');

    let stationInputsData = {};

    stationInputs.forEach(input => {
        if (input.type === 'checkbox'){
            stationInputsData[input.value] = input.checked;
        }
    })

    filterInputs.forEach(input => {
        input.addEventListener('change', () => {
            axios.post('/api/business-map-filter', {
                    stations: stationInputsData
                }).then(respond=>{
                    console.log(respond)
            })
        })
    })
}

mapFilter()
