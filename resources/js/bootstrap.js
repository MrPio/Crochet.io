import $ from 'jquery';

window.jQuery = window.$ = $;

import axios from 'axios';

window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import noUiSlider from 'nouislider';

window.noUiSlider = noUiSlider
