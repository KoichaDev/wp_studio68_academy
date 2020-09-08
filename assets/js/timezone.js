import moment from 'moment';

export default class Timezone {
    constructor() {
        this.date = document.querySelector('[data-current-date]');
        this.time = document.querySelector('[data-time-zone]');
        this.event();
    }
    // Events listeners will go here
    event() {
        setInterval(() => this.updateDate(), 1000);
        setInterval(() => this.updateTime(), 1000);
    }

    // Triggering the events will go here
    updateTime = () => {
        this.time.textContent = moment().format(`hh:mm A`);
    };

    updateDate = () => {
        this.date.textContent = moment().format('DD.MM.YYYY');
    }
}
