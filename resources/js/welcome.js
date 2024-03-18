import '../css/app.css';
import '../css/output.css';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.store('darkMode', {
    dark: localStorage.getItem('dark') ? localStorage.getItem('dark') === 'true' : false,
    toggle() {
        this.dark = !this.dark;
        localStorage.setItem('dark', this.dark.toString());
        document.documentElement.classList.toggle('dark', this.dark);
    },
    init() {
        document.documentElement.classList.toggle('dark', this.dark);
    }
});

Alpine.start();
