export default function() {
    const faqItems = document.querySelectorAll('.faq-item');
    const faqTitleSel = '.faq-item__title';
    const faqTextSel = '.faq-item__content';

    if (faqItems) {
        faqItems.forEach(faqItem => {
            const faqTitle = faqItem.querySelector(faqTitleSel);
            const faqText = faqItem.querySelector(faqTextSel);

            if (faqItem.classList.contains('active') ) {
                faqText.style.maxHeight = faqText.scrollHeight + "px";
            }

            faqTitle.addEventListener('click', e => {
                faqToggle(faqItem, faqTitle, faqText);
            });
        });

        // faqToggle(faqItems[0]);
    }

    function faqToggle(item) {
        faqItems.forEach(faqItem => {
            if (faqItem != item) {
                faqItem.classList.remove('active');
                faqItem.querySelector(faqTextSel).removeAttribute('style');
            }
        })

        item.classList.toggle('active');

        const itemText = item.querySelector(faqTextSel);
        item.querySelector(faqTextSel).style.maxHeight =
            item.classList.contains('active') ?
            `${itemText.scrollHeight}px` :
            null;
    }
}
