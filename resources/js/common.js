// Import libs
// Import Components
import mobileMenu from './components/mobile-menu';
import pageScroll from './components/page-scroll';
import anchorScroll from './components/anchor-scroll';
import textarea from './components/textarea';
import wow from './components/wow';
import sliders from './components/sliders';
import calc from "./components/calc";
import forms from './components/forms';
import form from "./form";

// DOM content load
document.addEventListener("DOMContentLoaded", () => {
    // Swal.fire(
    //     'Спасибо за вашу заявку!',
    //     'Вам перезвонят в течении минуты!',
    //     'success'
    // )
    pageScroll();
    anchorScroll();
    textarea();
    mobileMenu();
    wow();
    sliders();
    calc();
    forms();
    form();
})
