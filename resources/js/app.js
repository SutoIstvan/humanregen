import $ from 'jquery';

// import './bootstrap';

// import * as bootstrap from 'bootstrap';

import AOS from 'aos';
import 'aos/dist/aos.css';

// import '@popperjs/core';
// import 'bootstrap';

// AOS init

AOS.init();

$(window).scroll(function () {
    if ($(this).scrollTop() > 250) {
      $('.sticky-top').addClass('sticky-nav').css('top', '0px');
    } else {
      $('.sticky-top').removeClass('sticky-nav').css('top', '-100px');
    }
});
