import Chart from 'chart.js';

export default class ChartJs {
    constructor() {
        this.ctx = document.getElementById('s68-course-chart').getContext('2d');
        this.inComplete = document.querySelector('[data-incomplete]');
        this.complete = document.querySelector('[data-complete]');

        this.event();
    }

    // Event Listener 
    event() {
        this.chartDoughnut(60, 40);
        this.counterUp(this.inComplete, 60);
        this.counterUp(this.complete, 40);
    }

    counterUp = (element, number) => {
        const counter = element
        let count = 0;

        const countUp = () => {
            // Increase count by 1
            count++;

            // Update the UI
            counter.innerHTML = `${count}%`;

            // if the count is less than 500, run it again
            if (count < number) {
                window.requestAnimationFrame(countUp);
            }
        };

        // Start the animation
        window.requestAnimationFrame(countUp);
    }

    // Triggering the Event Listener
    chartDoughnut = (complete, incomplete) => {
        const data = [complete, incomplete]; // Dummy data! We will use this data for getting real progress data later
        new Chart(this.ctx, {
            type: 'doughnut',
            data: {
                labels: ['Incomplete', 'Complete'],
                datasets: [{
                    data: data,
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
                responsive: false,
                maintainAspectRatio: false,
                cutoutPercentage: 80, // Change the doughnut Graph size
                legend: {
                    display: false,
                },
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
        Chart.pluginService.register({
            beforeDraw: (chart) => {
                const width = chart.chart.width,
                    height = chart.chart.height,
                    ctx = chart.chart.ctx;

                ctx.restore();
                const fontSize = (height / 80).toFixed(2);
                ctx.font = fontSize + "em sans-serif";
                ctx.textBaseline = "middle";
                ctx.fillStyle = "#EED9CA";

                const text = data[0] + "%",
                    textX = Math.round((width - ctx.measureText(text).width) / 2 + 12),
                    textY = height / 2;

                ctx.fillText(text, textX, textY);
                ctx.save();
            }
        });
    }
}
