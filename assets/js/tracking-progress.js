import HTTP from './HTTP';
const http = new HTTP();

export default class TrackingProgress {
    constructor() {
        this.progressFalse = document.querySelectorAll('#progress-false');
        this.progressTrue = document.querySelectorAll('#progress-true');
        this.event();
    }

    event() {
        for (let i = 0; i < this.progressFalse.length; i++) {
            this.progressFalse[i].addEventListener('click', e => this.checkBoxFalse(e, i));
        }

        for (let i = 0; i < this.progressTrue.length; i++) {
            this.progressTrue[i].addEventListener('click', e => this.checkBoxTrue(e, i));
        }
    }

    checkBoxFalse = (e, i) => {
        const setChecked = e.target.checked.toString();

        console.log(setChecked);

        const updateProgress = {
            "course_content": {
                "row_index": 1,
                "sub_field": "academy_course_progress_button",
                "value": setChecked
            }
        }

        http.update('http://localhost/wordpress/wp-json/s68/v1/course/272', updateProgress)
            .then(() => { })
            .catch(err => console.log(err))
    }

    checkBoxTrue = (e, i) => {
        const setChecked = e.target.checked.toString();
        console.log(setChecked);
        const updateProgress = {

            "course_content": {
                "row_index": 1,
                "sub_field": "academy_course_progress_button",
                "value": setChecked
            }
        }

        http.update('http://localhost/wordpress/wp-json/s68/v1/course/272', updateProgress)
            .then(() => { })
            .catch(err => console.log(err))
    }
}