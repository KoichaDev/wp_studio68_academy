export default class Element {
    constructor() {
        this.main = document.querySelector('.main-grid-container');
        this.aside = document.querySelector('.main-grid-container > .main-grid-container__aside');
        this.courseHeadline = document.querySelector('.main-grid-container__course__headline');
        this.courseHeadlineImage = document.querySelector('.main-grid-container__course__headline > img')
        this.event();
    }

    event = () => {
        this.removeClass('(max-width: 876px)', this.aside);
    }

    removeClass = (mediaWidth, element) => {
        let mql = window.matchMedia(mediaWidth);

        if (mql.matches) {
            element.remove()
        }
    }

}