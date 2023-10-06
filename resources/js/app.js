import './bootstrap';
import $ from "jquery";
import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
import "/resources/public/vendor/modernizr/modernizr.min.js";
import "/resources/js/admin/js/adminlte.min.js"
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();
