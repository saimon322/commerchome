import IMask from 'imask';

export default function() {
    const phoneInputs = document.querySelectorAll('input[name="phone"]');
    const calcArea = document.querySelector('input[name="calc-area"]');

    phoneInputs && [...phoneInputs].forEach(input => {
        IMask(input, {mask: '+{7}(000)000-00-00'});
    })

    calcArea && IMask(calcArea, {
        mask: '[000]{ м2}',
        lazy: false,
    });
}
