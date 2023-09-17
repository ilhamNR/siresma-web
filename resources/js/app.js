import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
import "/resources/public/vendor/modernizr/modernizr.min.js";
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();
