export default class ChartJs {
    constructor() {
        this.ctx = document.getElementById('s68-course-chart').getContext('2d');
        this.event();
    }

    event() {
        new Chart(this.ctx, {
            type: 'doughnut',
            data: {
                labels: ['Complete', 'Incomplete'],
                datasets: [{
                    data: [60, 40],
                    backgroundColor: [
                        'rgba(204, 71, 115, 1)',
                        'rgba(71, 204, 160, 1)',

                    ],
                    borderColor: [
                        'rgba(204, 71, 115, 1)',
                        'rgba(71, 204, 160, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    xAxes: [{
                        gridLines: {
                            display: false,
                        },
                        ticks: {
                            beginAtZero: true
                        }
                    }],
                    yAxes: [{
                        gridLines: {
                            display: false,
                        },
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    }

}
