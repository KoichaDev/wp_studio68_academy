import Timezone from './timezone';
import ChartJs from './chart';
import MatchMedia from './Match-media';
import TableofContent from './table-of-content';

document.addEventListener('DOMContentLoaded', () => {
    new MatchMedia();
    new TableofContent()
    new Timezone();
    new ChartJs();
})