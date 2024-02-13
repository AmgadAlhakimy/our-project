// import '././public/css';

// import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';

import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';
import Clipboard from '@ryangjchandler/alpine-clipboard'
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();


Alpine.plugin(Clipboard)

Livewire.start()
