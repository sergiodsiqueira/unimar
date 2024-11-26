<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f6f9;
        }
        .dashboard {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            padding: 20px;
        }
        .card {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .chart-container {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 20px;
            padding: 20px;
        }
        canvas {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <div class="card">
            <h3>Sales</h3>
            <p>$424,652</p>
        </div>
        <div class="card">
            <h3>Expenses</h3>
            <p>$235,312</p>
        </div>
        <div class="card">
            <h3>Profits</h3>
            <p>$135,965</p>
        </div>
    </div>
    <div class="chart-container">
        <div>
            <canvas id="monthlySales"></canvas>
        </div>
        <div>
            <canvas id="departmentSales"></canvas>
        </div>
    </div>

    <script>
        // Gráfico de vendas mensais
        const ctx1 = document.getElementById('monthlySales').getContext('2d');
        new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [
                    {
                        label: 'Clothing',
                        data: [50, 60, 70, 50, 40, 60, 55, 45, 50, 65, 70, 60],
                        backgroundColor: 'rgba(54, 162, 235, 0.7)'
                    },
                    {
                        label: 'Food Products',
                        data: [30, 40, 50, 30, 20, 40, 35, 25, 30, 45, 50, 40],
                        backgroundColor: 'rgba(255, 99, 132, 0.7)'
                    }
                ]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { position: 'top' }
                },
                scales: {
                    y: { beginAtZero: true }
                }
            }
        });

        // Gráfico de vendas por departamento
        const ctx2 = document.getElementById('departmentSales').getContext('2d');
        new Chart(ctx2, {
            type: 'doughnut',
            data: {
                labels: ['Clothing', 'Food Products', 'Electronics', 'Kitchen Utility', 'Gardening'],
                datasets: [{
                    data: [20, 25, 15, 20, 20],
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.7)',
                        'rgba(255, 99, 132, 0.7)',
                        'rgba(75, 192, 192, 0.7)',
                        'rgba(153, 102, 255, 0.7)',
                        'rgba(255, 205, 86, 0.7)'
                    ]
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { position: 'right' }
                }
            }
        });
    </script>
</body>
</html>
