export default class Element {
    constructor() {
        this.main = document.querySelector('.main-grid-container');
        this.event();
    }

    event = () => {
        this.removeClass();
    }

    removeClass = () => {
        let mql = window.matchMedia('(max-width: 876px)');

        if (mql.matches) {
            this.main.children[0].remove()
        }
    }

    addClass = () => {

    }

}