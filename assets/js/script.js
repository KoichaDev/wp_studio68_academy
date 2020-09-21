import "regenerator-runtime/runtime.js";
import Timezone from './timezone';
import ChartJs from './chart';
import MatchMedia from './Match-media';
import TableofContent from './table-of-content';
import TrackingProgress from './tracking-progress';

document.addEventListener('DOMContentLoaded', () => {

    new TrackingProgress();
    new MatchMedia();
    new Timezone();
    new ChartJs();
    new TableofContent()

})