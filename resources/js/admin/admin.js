import Sortable from 'sortablejs';

document.addEventListener("DOMContentLoaded", initSortable);
document.addEventListener("turbo:load", initSortable);

function initSortable(e) {
    console.log('initSortable')
    const containerSelector = '.matrix tbody';
    const containers = document.querySelectorAll(containerSelector);

    if (containers.length === 0) {
        return false;
    }

    containers.forEach((e) => {
        Sortable.create(e, {
            onEnd: (evt) => {
                let tr = evt.to.querySelectorAll('tr');

                if (tr.length === 0) {
                    return;
                }

                tr.forEach((el, index) => {
                    index++;
                    let names = el.querySelectorAll('[name]');

                    if (names.length === 0) {
                        return;
                    }

                    names.forEach((nameEl) => {
                        let name = nameEl.name.replace(/\[\d+\]/, '[' + index + ']');
                        nameEl.setAttribute('name', name);
                    });
                })
            }
        })
    })
}