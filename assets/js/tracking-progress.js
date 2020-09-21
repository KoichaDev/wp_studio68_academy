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
        console.log(i);
        // console.log(setChecked);
        // http.get('http://localhost/wordpress/wp-json/s68/v1/course?q=jira')
        //     .then(res => {
        //         const { tracking } = res[0];
        //         const progress = tracking.flat();

        //     })
        //     .catch(err => console.log(err))
    }

    checkBoxTrue = (e, i) => {
        console.log(i);
    }
}