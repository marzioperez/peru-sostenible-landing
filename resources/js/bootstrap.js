/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */
import Alpine from 'alpinejs';
import axios from 'axios';
import jQuery from 'jquery';
import Popper from 'popper.js';
import anychart from 'anychart/dist/js/anychart-bundle.min';

import * as am5 from "@amcharts/amcharts5";
import * as am5wc from "@amcharts/amcharts5/wc";
import am5themes_Animated from "@amcharts/amcharts5/themes/Animated";

window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

try {
    window.Popper = Popper;
    window.anychart = anychart;
    window.am5 = am5;
    window.am5wc = am5wc;
    window.am5themes_Animated = am5themes_Animated;
    window.$ = window.jQuery = jQuery;
    window.Alpine = Alpine;
    Alpine.start();
    //window.slick = slick;
} catch (e) {}

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// import Pusher from 'pusher-js';
// window.Pusher = Pusher;

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: import.meta.env.VITE_PUSHER_APP_KEY,
//     cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER ?? 'mt1',
//     wsHost: import.meta.env.VITE_PUSHER_HOST ? import.meta.env.VITE_PUSHER_HOST : `ws-${import.meta.env.VITE_PUSHER_APP_CLUSTER}.pusher.com`,
//     wsPort: import.meta.env.VITE_PUSHER_PORT ?? 80,
//     wssPort: import.meta.env.VITE_PUSHER_PORT ?? 443,
//     forceTLS: (import.meta.env.VITE_PUSHER_SCHEME ?? 'https') === 'https',
//     enabledTransports: ['ws', 'wss'],
// });
