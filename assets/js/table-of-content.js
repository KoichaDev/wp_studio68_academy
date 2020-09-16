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
        this.tableOfContentDescription.textContent = `${sections} sections • ${lectures} lectures • ${duration}m total length `;
    }

    getSections = () => this.tables.length;

    getLectures = () => this.lectures.length;

    getCourseDescription = () => {
        const textArray = [];
        for (const description of this.courseLength) {
            const text = description.textContent;
            textArray.push(text)
        }
        return textArray;
    }

    getCourseDuration = () => this.getCourseDescription().reduce((sum, str) => sum + parseInt(str.match(/\d+/)[0]), 0)


}