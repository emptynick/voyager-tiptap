import Tiptap from './components/Tiptap.vue';

import Demo from './components/Demo.vue';
import Formfield from './components/Formfield.vue';
import Builder from './components/Builder.vue';

voyager.component('tiptap', Tiptap);

voyager.component('tiptap-demo', Demo);
voyager.component('tiptap-formfield', Formfield);
voyager.component('tiptap-builder', Builder);
voyager.addToUI('Tiptap', 'tiptap-demo');