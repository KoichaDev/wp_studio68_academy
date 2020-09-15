import Timezone from './timezone';
import ChartJs from './chart';
import MatchMedia from './Match-media';

document.addEventListener('DOMContentLoaded', () => {
    new MatchMedia();
    new Timezone();
    new ChartJs();
})