const vipBoxButton = document.getElementById('r2');
vipBoxButton.addEventListener('click', (event) => {
    const blockRegularBoxing = document.getElementById("js-simple-cells");

    blockRegularBoxing.classList.add('hidden');
    const blockVipBoxing = document.getElementById("js-vip-cells");
    blockVipBoxing.classList.remove('hidden');
})

const regularBoxButton = document.getElementById('r1');
regularBoxButton.addEventListener('click', (event) => {
    const blockRegularBoxing = document.getElementById("js-simple-cells");
    blockRegularBoxing.classList.remove('hidden');
    const blockVipBoxing = document.getElementById("js-vip-cells");
    blockVipBoxing.classList.add('hidden');
})

const timeStorage = document.getElementById('time__storage');
const inputRange = document.getElementById('square-range');

inputRange.addEventListener('input', function () {
    timeStorage.innerText = inputRange.value;
})

const typeReconstructionElements = document.querySelectorAll('input[name="type"]');
typeReconstructionElements.forEach(function (item) {
    
});

const inputs = document.querySelectorAll('input');
// Базовая цена и элементы для вывода цены
const basePricePerMeter = 450;
const totalPriceElemnt = document.getElementById('total-price');

const pathToPicture = document.getElementById('cell-img');

const sizesBoxs = document.getElementById('js-cell-sizes');
const sizeBoxname = document.getElementById('js-cell-size');

// Для отправки в бд
const sendRegularBox = document.querySelector('input[name="send-regular-box"]');
const unitSend = document.querySelector('input[name="unit"]');
const sendSize = document.querySelector('input[name="send-size"]');
const sendPrice = document.querySelector('input[name="send-price"]');
const sendStoragePeriod = document.querySelector('input[name="send-storage-period"]');
console.log(sendRegularBox.value);

// Обходим все инпуты, и если какой-то инпут был изменён, запускаем пересчёт стоимости
inputs.forEach(function (item) {
    item.addEventListener('input', calculate);
})
// Функция calculate для пересчета стоимости
function calculate() {
    let typeReconstructionCost;
    let imgChange;
    let sizeBox;
    let sizesBox;
    let regularBoxs;
    typeReconstructionElements.forEach(function (item) {
        if (item.checked) {
            typeReconstructionCost = parseInt(item.value);
            imgChange = item.dataset['img'];
            sizeBox = item.dataset['sizes'];
            sizesBox = item.dataset['name'];
            regularBoxs = item.dataset['type'];
        }

    })
    const totalPrice = basePricePerMeter * typeReconstructionCost;
    const formatter = new Intl.NumberFormat('ru');
    totalPriceElemnt.innerText = formatter.format(totalPrice);

    pathToPicture.src = imgChange;

    sizesBoxs.innerText = sizeBox;

    sizeBoxname.innerText = sizesBox;

    sendSize.value = sizeBox;
    unitSend.value = sizesBox
    sendRegularBox.value = regularBoxs;
    sendPrice.value = totalPrice;
    sendStoragePeriod.value = inputRange.value;
}