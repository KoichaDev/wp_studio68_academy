export default class ChartJs {
    constructor() {
        this.ctx = document.getElementById('s68-course-chart').getContext('2d');
        this.event();
    }

    event() {
        new Chart(this.ctx, {
            type: 'doughnut',
            data: {
                labels: ['Incomplete', 'Complete'],
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
                responsive: true,
                maintainAspectRatio: true,
                scales: {
                    xAxes: [{
                        gridLines: {
                            display: false,
                        },
                        ticks: {
                            display: false,
                            beginAtZero: true
                        }
                    }],
                    yAxes: [{
                        gridLines: {
                            display: false,
                        },
                        ticks: {
                            display: false,
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    }

}
