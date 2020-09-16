export default class TableOfContent {
    constructor() {
        this.tableOfContentDescription = document.querySelector('[data-table-of-content-head-section]')
        this.tables = document.querySelectorAll('[data-table-of-content-course] > table');
        this.lectures = document.querySelectorAll('[data-table-of-content-course] > table > tbody > tr');
        this.courseLength = document.querySelectorAll('[data-table-of-content-course] > table > tbody > tr > td > span');
        this.event();
    }

    event() {
        const sections = this.getSections();
        const lectures = this.getLectures();
        const duration = this.getCourseDuration();

        if (duration >= 60) {
            const hours = parseInt(duration / 60);
            const minutes = (duration / 60).toFixed(2).split('.')

            this.tableOfContentDescription.textContent = `${sections} sections • ${lectures} lectures • ${hours}h ${minutes[1]}m total length `;
        } else {
            this.tableOfContentDescription.textContent = `${sections} sections • ${lectures} lectures • ${duration}m total length `;
        }
    }

    getSections = () => this.tables.length;

    getLectures = () => this.lectures.length;

    getCourseDuration = () => this.getCourseDescription().reduce((sum, str) => sum + parseInt(str.match(/\d+/)[0]), 0)

    getCourseDescription = () => {
        const textArray = [];
        for (const description of this.courseLength) {
            const text = description.textContent;
            textArray.push(text)
        }
        return textArray;
    }



}