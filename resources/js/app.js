/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import { createApp } from 'vue';

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

const app = createApp({});

import ExampleComponent from './components/ExampleComponent.vue';
app.component('example-component', ExampleComponent);

import UserDashboard from './components/user/UserDashboard.vue';
app.component('user-dashboard', UserDashboard);

import UserFooter from './components/user/UserFooter.vue';
app.component('user-footer', UserFooter);

import WorkoutIndex from './components/workouts/index.vue';
app.component('workout-index', WorkoutIndex);

import WorkoutSave from './components/workouts/save.vue';
app.component('workout-create', WorkoutSave);

import SettingsIndex from './components/user/settings/index.vue';
app.component('settings-index', SettingsIndex);

import ChangeEmail from './components/user/settings/emailReset.vue';
app.component('change-email', ChangeEmail);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.globEager('./**/*.vue')).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */

app.mount('#app');
