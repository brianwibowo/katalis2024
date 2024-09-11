document.addEventListener('DOMContentLoaded', function() {
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['00:00', '01:00', '02:00', '03:00', '04:00', '05:00', '06:00', '07:00', '08:00'],
                datasets: [{
                    label: 'Data Sensor',
                    data: [12, 19, 3, 5, 2, 3, 8, 10, 15],
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1,
                    fill: false
                }]
            },
            options: {
                scales: {
                    x: {
                        beginAtZero: true
                    },
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Handle sensor selection change
        document.getElementById('sensorSelect').addEventListener('change', function() {
            updateChart();
        });

        // Load data based on time category
        window.loadData = function(category) {
            document.querySelectorAll('.category a').forEach(function(el) {
                el.classList.remove('active');
            });
            document.getElementById(category).classList.add('active');
            updateChart();
        }

        function updateChart() {
            var sensorType = document.getElementById('sensorSelect').value;
            var category = document.querySelector('.category a.active').id;

            // Update chart data based on sensorType and category
            // Dummy data for example
            var data = {
                temperature: {
                    '1year': [ /* data for 1 year */ ],
                    '1month': [ /* data for 1 month */ ],
                    '1week': [ /* data for 1 week */ ],
                    '1day': [ /* data for 1 day */ ]
                },
                humidity: {
                    '1year': [ /* data for 1 year */ ],
                    '1month': [ /* data for 1 month */ ],
                    '1week': [ /* data for 1 week */ ],
                    '1day': [ /* data for 1 day */ ]
                },
                npk: {
                    '1year': [ /* data for 1 year */ ],
                    '1month': [ /* data for 1 month */ ],
                    '1week': [ /* data for 1 week */ ],
                    '1day': [ /* data for 1 day */ ]
                },
                soil: {
                    '1year': [ /* data for 1 year */ ],
                    '1month': [ /* data for 1 month */ ],
                    '1week': [ /* data for 1 week */ ],
                    '1day': [ /* data for 1 day */ ]
                }
            };

            // Dummy labels for example
            var labels = {
                '1year': ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                '1month': ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
                '1week': ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                '1day': ['00:00', '02:00', '04:00', '06:00', '08:00', '10:00', '12:00', '14:00', '16:00', '18:00', '20:00', '22:00']
            };

            myChart.data.labels = labels[category];
            myChart.data.datasets[0].data = data[sensorType][category];
            myChart.update();
        }

        // Initial load
        updateChart();
    });