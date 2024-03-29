// assets/app.js
/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/reset.css';
import './styles/look.css';


// start the Stimulus application
import './bootstrap';

import app from './components/App.vue';
import {createApp} from "vue";
import router from './components/routeur/index.js';

const appVue = createApp(app);
appVue.use(router);
appVue.mount("#app");