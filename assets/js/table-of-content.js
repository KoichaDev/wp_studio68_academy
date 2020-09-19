export default class TableOfContent {
    constructor() {
        // academy-course-preview.php variables 
        this.tableOfContentDescription = document.querySelector('[data-table-of-content-head-section]')
        this.tables = document.querySelectorAll('[data-table-of-content] > ul h2');
        this.lectures = document.querySelectorAll('[data-table-of-content] > ul li');
        this.courseLength = document.querySelectorAll('[data-duration] h3 small');

        // academy-course-specific-preview.php variables
        this.countSection = document.querySelectorAll('[data-set-course-section]');
        this.event();
    }

    event() {
        let increment = 1;
        for (const div of this.countSection) {
            const p = document.createElement('p');

            p.textContent = increment++;

            div.appendChild(p)
        }

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