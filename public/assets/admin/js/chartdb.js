document.addEventListener('DOMContentLoaded', function () {
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [], // Data waktu
            datasets: [{
                label: 'Data Sensor',
                data: [], // Data nilai sensor
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1,
                fill: false
            }]
        },
        options: {
            responsive: true,
            scales: {
                x: { title: { display: true, text: 'Waktu' } },
                y: { title: { display: true, text: 'Nilai' }, beginAtZero: true }
            }
        }
    });

    function updateChart() {
        var sensorType = document.getElementById('sensorSelect').value;
        var selectedNode = document.querySelector('.node-button.active').dataset.node || 1;
        var date = new Date().toISOString().slice(0, 10); // Format ke YYYY-MM-DD
    
        fetch(`/generate-report?sensor=${sensorType}&node=${selectedNode}&date=${date}`)
            .then(response => response.json())
            .then(data => {
                if (data.error) {
                    alert(data.error);
                } else {
                    // Perbarui chart
                    myChart.data.labels = data.labels;
                    myChart.data.datasets[0].data = data.values;
                    myChart.update();
    
                    // Perbarui deskripsi
                    document.getElementById('sensorDetails').innerText = data.description;
                }
            })
            .catch(error => console.error('Error:', error));
    }    

    // Event Listener untuk Dropdown Sensor dan Node
    document.getElementById('sensorSelect').addEventListener('change', function () {
        const sensor = this.value;
        const node = document.querySelector('.node-btn.active')?.getAttribute('data-node') || 1;
        const date = document.querySelector('.days-grid span.active')?.innerText || new Date().toISOString().split('T')[0];
        loadData(sensor, node, date);
    });

    document.querySelectorAll('.node-btn').forEach(button => {
        button.addEventListener('click', function () {
            document.querySelectorAll('.node-btn').forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            const sensor = document.getElementById('sensorSelect').value;
            const node = this.getAttribute('data-node');
            const date = document.querySelector('.days-grid span.active')?.innerText || new Date().toISOString().split('T')[0];
            loadData(sensor, node, date);
        });
    });
});
