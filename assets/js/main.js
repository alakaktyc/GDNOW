//Preloader
let preloaderEl = document.querySelector('.preloader');
function startPreloader() {
    preloaderEl.classList.remove('hid');
    preloaderEl.classList.add('vis');
}

function closePreloader() {
    preloaderEl.classList.add('hid');
    preloaderEl.classList.remove('vis');
}


function getXlsx(cb) {
    const oReq = new XMLHttpRequest();
    oReq.open("GET", 'assets/xlsx/loc.xlsx', true);
    oReq.responseType = "arraybuffer";
    oReq.addEventListener('load', () => {
        let arraybuffer = oReq.response;
        /* convert data to binary string */
        let data = new Uint8Array(arraybuffer);
        let arr = [];
        for (let i = 0; i !== data.length; ++i) arr[i] = String.fromCharCode(data[i]);
        let bstr = arr.join("");
        /* Call XLSX */
        let workbook = XLSX.read(bstr, {type: "binary"});
        /* DO SOMETHING WITH workbook HERE */
        let first_sheet_name = workbook.SheetNames[0];
        /* Get worksheet */
        let worksheet = workbook.Sheets[first_sheet_name];
        let locationArr = XLSX.utils.sheet_to_json(worksheet, {raw: true});

        cb(locationArr);
    });
    oReq.addEventListener('error', () => {
        console.log('error');
    });

    oReq.send();
}

const onePlace = document.querySelector('.module__dimensions-one');
const quantityPlace = document.querySelector('.module__dimensions-quantity');
onePlace.addEventListener('click', function () {
    if (this.checked) {
        quantityPlace.removeAttribute('disabled')
    } else {
        quantityPlace.setAttribute('disabled', 'disabled')
    }
});

const plusPlace = document.querySelector('.btn-arrow_right');
const minusPlace = document.querySelector('.btn-arrow_left');
plusPlace.addEventListener('click',function () {
    if (!quantityPlace.hasAttribute('disabled')) {
        quantityPlace.value++
    }
});
minusPlace.addEventListener('click',function () {
    if (!quantityPlace.hasAttribute('disabled')) {
        if (quantityPlace.value > 1){
            quantityPlace.value--
        }
    }
});
let cost = document.querySelector('.module__sum');
let message = document.querySelector('.module__message');
let dates = document.querySelectorAll('.module__date b');

function parseCost(array) {


    let cityFromVal = document.querySelector('#cityFrom').value;
    let cityToVal = document.querySelector('#cityTo').value;

    let codeFrom;
    let codeTo;

    for (let item of array) {
        if (cityFromVal.trim() === item.location) {
            codeFrom = item.code;
        }
        if (cityToVal.trim() === item.location) {
            codeTo = item.code
        }
    }

    let request = new XMLHttpRequest();
    let formData = new FormData;

    if (typeof codeTo === 'number' && typeof codeFrom === 'number') {
        formData.append('Description', '');
        formData.append('Departure', codeFrom);
        formData.append('Destination', codeTo);
        formData.append('Dimensions_one_place', document.querySelector('.module__dimensions-one').checked);
        formData.append('Oversized', false);
        formData.append('Number_Packages', quantityPlace.value);
        formData.append('Customer_delivery', document.querySelector('.module__сustomer-delivery').checked);
        formData.append('Weight', weightInput.value);



            formData.append('Volume', volumeInput.value);
            formData.append('Length', dimensions[0].value);
            formData.append('Width', dimensions[1].value);
            formData.append('Height', dimensions[2].value);

        request.open('POST', 'https://glavdostavka.by/belarus/assets/php/calc.php', true);
        request.addEventListener('readystatechange', function () {
            if ((request.readyState === 4) && (request.status === 200)) {
                console.log(JSON.parse(request.responseText));
                calcBtn.textContent = 'очистить';
                if (typeof JSON.parse(request.responseText).Warning_Customer === "object" && JSON.parse(request.responseText).Cost_Delivery !== undefined) {
                    cost.classList.remove('hidden');
                    message.classList.add('hidden');
                    cost.innerHTML = `${JSON.parse(request.responseText).Cost_Delivery} BYN с НДС`;
                    dates[0].innerHTML = `${JSON.parse(request.responseText).Date_download.split('-').reverse().join('.')}`;
                    dates[1].innerHTML = `${JSON.parse(request.responseText).Date_delivery.split('-').reverse().join('.')}`;
                } else if (JSON.parse(request.responseText).Cost_Delivery !== undefined && JSON.parse(request.responseText).Cost_Delivery != 0) {
                    cost.classList.remove('hidden');
                    message.classList.remove('hidden');
                    cost.innerHTML = `${(Number(JSON.parse(request.responseText).Cost_Delivery) + Number(JSON.parse(request.responseText).Cost_OversizedCargo)).toFixed(2)}  BYN с НДС`;
                    message.innerHTML = `${JSON.parse(request.responseText).Warning_Customer}`;
                    dates[0].innerHTML = `${JSON.parse(request.responseText).Date_download.split('-').reverse().join('.')}`;
                    dates[1].innerHTML = `${JSON.parse(request.responseText).Date_delivery.split('-').reverse().join('.')}`;
                } else if (JSON.parse(request.responseText).Cost_Delivery !== undefined) {
                    cost.classList.add('hidden');
                    message.classList.remove('hidden');
                    message.innerHTML = `${JSON.parse(request.responseText).Warning_Customer}`;
                    dates[0].innerHTML = `${JSON.parse(request.responseText).Date_download.split('-').reverse().join('.')}`;
                    dates[1].innerHTML = `${JSON.parse(request.responseText).Date_delivery.split('-').reverse().join('.')}`;
                } else {
                    cost.classList.add('hidden');
                    message.classList.remove('hidden');
                    message.innerHTML = 'Выбранная услуга рассчитывается индивидуально. Рекомендуем связаться с менеджером по телефону +375173362323, либо заполнить форму обратной связи.';
                    calcBtn.textContent = 'очистить';
                }
            }
        })
        request.send(formData);

    } else {
        cost.classList.add('hidden');
        message.classList.remove('hidden');
        message.innerHTML = 'Выбранная услуга рассчитывается индивидуально. Рекомендуем связаться с менеджером по телефону +375173362323, либо заполнить форму обратной связи.';
        calcBtn.textContent = 'очистить';
    }
}

function resetForm() {
    quantityPlace.setAttribute('disabled', 'disabled')
    dates[0].innerHTML = '00.00.2020';
    dates[1].innerHTML = '00.00.2020';
    calcBtn.textContent = 'рассчитать';
    cost.innerHTML = '0 BYN с НДС'
    cost.classList.remove('hidden');
    message.classList.add('hidden');
}

let arrayLocation = [];
const calcBtn = document.querySelector('.btn-calculate');
const formCalculate = document.querySelector('.calculate')
formCalculate.addEventListener('submit', function (event) {
    event.preventDefault();

    if (volumeInput.value === '' || volumeInput.value == 0) {
        cost.classList.add('hidden');
        message.classList.remove('hidden');
        message.innerHTML = 'Введите корректные параметры груза';
        calcBtn.textContent = 'очистить';
    } else if (dimensions[0] === '' && dimensions[1] === '' && dimensions[2] === ''){
        cost.classList.add('hidden');
        message.classList.remove('hidden');
        message.innerHTML = 'Введите корректные параметры груза';
        calcBtn.textContent = 'очистить';
    } else {
        startPreloader();
        if (calcBtn.textContent === 'рассчитать') {
            if (arrayLocation.length === 0){
                getXlsx(locationArr => {
                    arrayLocation = locationArr;
                    parseCost(arrayLocation)
                    closePreloader();
                });
            } else {
                parseCost(arrayLocation)
                closePreloader();
            }
        } else {
            resetForm();
            formCalculate.reset();
            closePreloader();
        }
    }


});

formCalculate.addEventListener('click', function (event) {
    if (event.target.tagName === 'INPUT'){
        calcBtn.textContent = 'рассчитать'
    }
});
const inputsFormCalc = formCalculate.querySelectorAll('.js-calculate');
for (let i = 0; i < inputsFormCalc.length; ++i) {
    inputsFormCalc[i].addEventListener('focus', function () {
        this.value = '';
    })
}





//mobile menu
const mobMenuBtn = document.querySelector('.header__menu-mob');
const menu = document.querySelector('.header__menu');
let image  = document.querySelector('.header__menu-mob img');
menu.addEventListener('click', function () {
    if(event.target.tagName === 'SPAN'){
        menu.classList.remove('open');
        image.src = 'assets/img/btn_mob-menu.svg';
    }
});
mobMenuBtn.addEventListener('click', function () {
    if (menu.classList.contains('open')) {
        menu.classList.remove('open');
        image.src = 'assets/img/btn_mob-menu.svg';
    } else {
        menu.classList.add('open');
        image.src = 'assets/img/btn_mob-menu-white.svg';
    }
});


//switch volume(dimensions)
const radioVD = document.querySelectorAll('input[name="switch"]');
const labelVD = document.querySelectorAll('.module__data--switching');
const checkedData = document.querySelectorAll('.module__switch');
checkedData[0].style.color = '#C64A52';
radioVD[0].setAttribute("checked", "checked");
labelVD[0].classList.add('active');
for (let i = 0; i < radioVD.length; i++) {
    radioVD[i].addEventListener('change', function () {
        for (let i = 0; i < labelVD.length; i++) {
            if (radioVD[i].checked) {
                labelVD[i].classList.add('active');
                radioVD[i].setAttribute("checked", "checked");
                checkedData[i].style.color = '#C64A52';
            }
            if (!radioVD[i].checked) {
                labelVD[i].classList.remove('active');
                radioVD[i].removeAttribute('checked');
                checkedData[i].style.color = 'inherit';
            }
        }
    });
}

//autocomplete
let cityFrom = document.querySelector('#cityFrom');
let cityTo = document.querySelector('#cityTo');

function replaceCity () {
    this.value = this.value.replace(/[^а-яА-Я., ]/,'');
}
cityFrom.addEventListener('input', replaceCity);

ymaps.ready(autocomplete);

function autocomplete() {
    cityFrom = new ymaps.SuggestView('cityFrom', {provider: provider, results: 5});
    cityTo = new ymaps.SuggestView('cityTo', {provider: provider, results: 5});
    cityFrom.events.add('select', function (event) {

        //console.log(event.get('item').value);
    });
    const swapCity = document.querySelector('.module__btn');
    swapCity.addEventListener('click', function (event) {
        event.preventDefault();
        let cityFromVal = document.querySelector('#cityFrom');
        let cityToVal = document.querySelector('#cityTo');
        let temp = cityFromVal.value;
        cityFromVal.value = cityToVal.value;
        cityToVal.value = temp;
    });
}



const dimensions = document.querySelectorAll('input[name="dimensions"]');
const volumeInput = document.querySelector('input[name="volume"]');
for (let i = 0; i < dimensions.length; i++){
    dimensions[i].addEventListener('focus', function () {
        if (dimensions[i].value === '') {
            volumeInput.value = 0
        }
    });
    dimensions[i].addEventListener('focus', function () {
        volumeInput.value = dimensions[0].value * dimensions[1].value * dimensions[2].value;
    });
    dimensions[i].addEventListener('blur', function () {
        volumeInput.value = dimensions[0].value * dimensions[1].value * dimensions[2].value;
    });
    dimensions[i].addEventListener('input', function () {
        volumeInput.value = dimensions[0].value * dimensions[1].value * dimensions[2].value;
    });
}

volumeInput.addEventListener('input', function () {
    dimensions[0].value = 0;
    dimensions[1].value = 0;
    dimensions[2].value = 0;
});

function getPrices(foo) {
    const oReq = new XMLHttpRequest();
    oReq.open("GET", 'assets/xlsx/pr.xlsx', true);
    oReq.responseType = "arraybuffer";
    oReq.addEventListener('load', () => {
        let arraybuffer = oReq.response;
        /* convert data to binary string */
        let data = new Uint8Array(arraybuffer);
        let arr = [];
        for (let i = 0; i !== data.length; ++i) arr[i] = String.fromCharCode(data[i]);
        let bstr = arr.join("");
        /* Call XLSX */
        let workbook = XLSX.read(bstr, {type: "binary"});
        /* DO SOMETHING WITH workbook HERE */
        let first_sheet_name = workbook.SheetNames[0];
        let palletSheet = workbook.SheetNames[2];
        let packSheet = workbook.SheetNames[1];
        /* Get worksheet */
        let cargo = workbook.Sheets[first_sheet_name];
        let pallet = workbook.Sheets[palletSheet];
        let pack = workbook.Sheets[packSheet];
        //let locationArr = XLSX.utils.sheet_to_json(worksheet,{raw:true});
        let pricesArr = [XLSX.utils.sheet_to_json(cargo, {
            header: ['Departure', 'Destination', 'price_1',
                'price_2', 'price_3', 'price_4', 'price_5', 'price_6', 'price_7', 'price_8', 'price_9', 'price_10',
                'price_11', 'price_12', 'price_13', 'price_14', 'price_15', 'price_16',
                'price_17', 'price_18', 'price_19', 'price_20', 'price_21', 'price_22'], raw: false
        }),
            XLSX.utils.sheet_to_json(pallet, {
                header: ['city', 'pallet_1',
                    'pallet_2', 'pallet_3', 'pallet_4', 'pallet_5'], raw: false
            }),
            XLSX.utils.sheet_to_json(pack, {
                header: ['city', 'pallet_1',
                    'pallet_2', 'pallet_3', 'pallet_4', 'pallet_5'], raw: false
            })];

        foo(pricesArr);
    });
    oReq.addEventListener('error', () => {
        console.log('error');
    });

    oReq.send();
}



function parseXlsxToTable(array) {
    const rowPrice = array[0];
    const rowPallet = array[1];

    const tableCargo = document.querySelector('.tariffs__cargo');
    const tablePallet = document.querySelector('.tariffs__pallet');
    const tablePack = document.querySelector('.tariffs__pack');


    const tdCargo = document.querySelectorAll('.tariffs__price');
    const tdPallet = document.querySelectorAll('.tariffs__pallet-price');


    const selectedDeparture = selectDep.textContent;
    const selectedDestination = selectDes.textContent;
    const selectedServiceType = selectServ.textContent;


    if (selectedServiceType === 'Сборный груз') {
        tableCargo.classList.add('visible');
        tablePack.classList.remove('visible');
        tablePallet.classList.remove('visible');
        for (let i = 3; i < rowPrice.length; ++i) {
            if (rowPrice[i].Departure === selectedDeparture && rowPrice[i].Destination === selectedDestination) {
                let priceLine = Object.values(rowPrice[i]);
                for (let j = 0; j < tdCargo.length; j++){
                    tdCargo[j].textContent = priceLine[j+2]
                }
            }
        }
    } else if (selectedServiceType === 'Палетная доставка'){
        tableCargo.classList.remove('visible');
        tablePack.classList.remove('visible');
        tablePallet.classList.add('visible');
        for (let i = 0; i < rowPallet.length; ++i) {
            if (rowPallet[i].city === selectedDeparture) {
                //console.log(rowPallet[i].city === selectedDeparture);
                let priceLine = Object.values(rowPallet[i]);
                for (let j = 0; j < tdPallet.length; j++){
                    tdPallet[j].textContent = priceLine[j+1]
                }
            }
        }
    } else if (selectedServiceType === 'Упаковка') {
        tableCargo.classList.remove('visible');
        tablePack.classList.add('visible');
        tablePallet.classList.remove('visible');
    }
}


let arrayPrices = [];
const calcTable = document.querySelector('.tariffs__btn');
calcTable.addEventListener('click', function (event) {
    event.preventDefault();
    startPreloader();

    if (arrayPrices.length === 0) {
        getPrices(pricesArr => {
            closePreloader();
            arrayPrices = pricesArr;
            parseXlsxToTable(arrayPrices)
        });
    } else {
        parseXlsxToTable(arrayPrices);
        closePreloader();
    }

});



//custom select


const controlTarif = document.querySelectorAll('.tariffs__control');

const selectDep = document.querySelector('.tariffs__departure');
const selectDes = document.querySelector('.tariffs__destination');
const selectServ = document.querySelector('.tariffs__service');

const optionTarif = document.querySelectorAll('.tariffs__option');
const contentTarif = document.querySelectorAll('.tariffs__content');

for (let i = 0; i < controlTarif.length; ++i){
    controlTarif[i].addEventListener('click', function () {
        contentTarif[i].classList.toggle('hidden')
    });
}


for (let i = 0; i < optionTarif.length; ++i){
    optionTarif[i].addEventListener('click', function () {
        let parent = this.parentNode;
        if (parent.classList.contains('tariffs--departure')) {
            selectDep.textContent = this.textContent;
        } else if (parent.classList.contains('tariffs--destination')){
            selectDes.textContent = this.textContent;
        } else if (parent.classList.contains('tariffs--service')){
            selectServ.textContent = this.textContent;
        }

        for (let j = 0; j < contentTarif.length; ++j) {
            contentTarif[j].classList.add('hidden');
        }

    })
}



//swiper
const gestureZone = document.querySelector('.module__item--left');
let touchstartX = 0;
let touchstartY = 0;
let touchendX = 0;
let touchendY = 0;
gestureZone.addEventListener('touchstart', function(event) {
    touchstartX = event.changedTouches[0].screenX;
    touchstartY = event.changedTouches[0].screenY;
}, false);

gestureZone.addEventListener('touchend', function(event) {
    touchendX = event.changedTouches[0].screenX;
    touchendY = event.changedTouches[0].screenY;
    handleGesture();
}, false);

function handleGesture() {
    if (touchendX <= touchstartX) {
        startSlide(currentSlide + 1);
    }
    if (touchendX >= touchstartX) {
        startSlide(currentSlide - 1);
    }
}


const slides = document.querySelectorAll('.module__slide');
const slidesText = document.querySelectorAll('.module__info');
let currentSlide = 0;
const slideInterval = setInterval(startSlide,5000);

function startSlide() {
    slides[currentSlide].className = 'module__slide';
    slidesText[currentSlide].className = 'module__info';
    currentSlide = (currentSlide+1)%slides.length;
    slides[currentSlide].className = 'module__slide showing';
    slidesText[currentSlide].className = 'module__info showing';
}

document.querySelector('.module__slider-row--Left').addEventListener('click', function () {
    startSlide(currentSlide - 1);
});

document.querySelector('.module__slider-row--right').addEventListener('click', function () {
    startSlide(currentSlide + 1);
});

function replaceToNum() {
    this.value = this.value.replace(/,/, '.').replace(/[^.\d]+/g,"").replace( /^([^\.]*\.)|\./g, '$1' );
}

const weightInput = document.querySelector('input[name="weight"]');
const volumeDimInputs = document.querySelectorAll('.module__data--switching input');
for (let i = 0; i < volumeDimInputs.length; ++i){
    volumeDimInputs[i].addEventListener('input', replaceToNum)
}
weightInput.addEventListener('input', replaceToNum);



const btnReverse = document.querySelector('.btn__row-reverse');
btnReverse.addEventListener('click', function (event) {
    event.preventDefault();
    let tempCity = selectDep.textContent;
    selectDep.textContent = selectDes.textContent;
    selectDes.textContent = tempCity;
});

//modal
const btnCall = document.querySelectorAll('.btn-request');
const btnClose = document.querySelector('.btn-close');
const formCall = document.querySelector('.form-call');
let messageClient = document.querySelector('input[name="message-client"');
let inputsformCall = formCall.querySelectorAll('input');
let modalCall = document.querySelector('.modal');

for (let i = 0; i < btnCall.length; ++i) {
    if (btnCall[i] === btnCall[btnCall.length - 2] ){
        btnCall[i].addEventListener('click', function (event) {
            event.preventDefault();
            inputsformCall[0].value = btnCall[i].textContent;
            modalCall.classList.add('open');
            sessionStorage.comment = messageClient.value;
            inputsformCall[inputsformCall.length - 1].value = 'Я хочу перевезти:' +' '+ sessionStorage.comment;
        });
    } else {
        btnCall[i].addEventListener('click', function (event) {
            event.preventDefault();
            inputsformCall[0].value = btnCall[i].textContent;
            modalCall.classList.add('open')
        });
    }
}



for (let i = 0; i < inputsformCall.length; ++i) {
    if (inputsformCall[i].getAttribute('name') === 'name') {
        inputsformCall[i].addEventListener('input', replaceToRus)
    }
    if (inputsformCall[i].getAttribute('name') === 'phone') {
        inputsformCall[i].addEventListener('input', mask)
    }
}

//maskPhone
let keyCode;
function mask(event) {
    event.code && (keyCode = event.code);
    let matrix = "+375 (__) ___ __ __",
        i = 0,
        def = matrix.replace(/\D/g, ""),
        val = this.value.replace(/\D/g, ""),
        new_value = matrix.replace(/[_\d]/g, function(a) {
            return i < val.length ? val.charAt(i++) || def.charAt(i) : a
        });
    i = new_value.indexOf("_");
    if (i !== -1) {
        i < 5 && (i = 3);
        new_value = new_value.slice(0, i)
    }
    let reg = matrix.substr(0, this.value.length).replace(/_+/g,
        function(a) {
            return "\\d{1," + a.length + "}"
        }).replace(/[+()]/g, "\\$&");
    reg = new RegExp("^" + reg + "$");
    if (!reg.test(this.value) || this.value.length < 5 || keyCode >= 'Digit0' && keyCode >= 'Digit9') this.value = new_value;
    if (event.type === "blur" && this.value.length < 5)  this.value = ""
}


function replaceToRus() {
    this.value = this.value.replace(/[^а-яА-Я., ]/,'');
}

function closeModal () {
    event.preventDefault();
    formCall.reset();
    modalCall.classList.remove('open');
    messageClient.value = '';
}

btnClose.addEventListener('click', closeModal);
document.body.addEventListener('keyup', function(event) {
    if(event.key === "Escape"){
        closeModal ()
    }
});
document.body.addEventListener('click', function(event) {
    if (event.target === modalCall) {
        closeModal()
    }
});

//thanks modal
const momdalThank = document.querySelector('.popup');
formCall.addEventListener('submit', function (event) {
    event.preventDefault();
    let formData = new FormData (formCall);

    let xhrCall = new XMLHttpRequest();
    xhrCall.open('POST', 'https://glavdostavka.by/source/callme_n.php', true);
    xhrCall.addEventListener('readystatechange', function () {
        if ((xhrCall.readyState === 4) && (xhrCall.status === 200)) {
            momdalThank.classList.add('open');
            let title = document.querySelector('.popup__tittle');
            //console.log(inputsformCall[1].value);
            sessionStorage.name = inputsformCall[1].value;
            title.textContent = `СПАСИБО, ${sessionStorage.name}`;
            closeModal();
            setTimeout(function(){
                momdalThank.classList.remove('open');
                sessionStorage.clear();
            }, 3000);
        } else {
            console.log('Секунду')
        }
    })
    xhrCall.send(formData);
})



const widgets = document.querySelector('.widgets-btn');
window.addEventListener('scroll', function () {
    let st = document.documentElement.scrollTop;

    if (window.innerWidth >= 720) {
        if (st > 300) {
            widgets.classList.add('show')
        } else {
            widgets.classList.remove('show')
        }
    } else {
        widgets.classList.remove('show');
    }
});


const btnToTop = document.querySelector('.top');
btnToTop.addEventListener('click', function (e) {
    e.preventDefault();
    let top = document.querySelector('body');
    top.scrollIntoView({
        behavior: 'smooth',
        block:"start"
    })
});

document.addEventListener('keydown', function (event) {
    if (event.key === 'Enter') {
        event.preventDefault()
    }
});
