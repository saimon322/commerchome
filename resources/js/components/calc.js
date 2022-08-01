export default function() {
    const calc = document.querySelectorAll('.calc');
    if (calc) {
        const areaPrice = 19628;
        const furniturePrice = 395000;
        const appliencePrice =  229500;

        function calcTotal(area, furniture, applience) {
            let total = 0;
            if (area) {total += area * areaPrice};
            if (furniture) {total += furniturePrice};
            if (applience) {total += appliencePrice};
            return total;
        }

        const areaField = document.querySelector('[name="calc-area"]');
        const furnitureField = document.querySelector('[name="calc-furniture"]');
        const applienceField = document.querySelector('[name="calc-appliances"]');
        const priceField = document.querySelector('.calc__total-price');
        const calcBtn = document.querySelector('.calc__total-btn');

        calcBtn && calcBtn.addEventListener('click', () => {
            let area = parseInt(areaField.value);
            let furniture = furnitureField.value == 'Нужна' ? true : false;
            let applience = applienceField.value == 'Нужна' ? true : false;
            let total = calcTotal(area, furniture, applience);
            let totalFormat = total.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
            priceField.textContent = totalFormat + ' руб.';
        })
    }
}
