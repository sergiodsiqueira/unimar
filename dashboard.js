const ctx1 = document.getElementById('monthlySales').getContext('2d');
new Chart(ctx1, {
  type: 'bar',
  data: {
    labels: ['Jan.', 'Fev.', 'Mar.', 'Abr.', 'Mai.', 'Jun.', 'Jul.', 'Ago.', 'Set.', 'Out.', 'Nov.', 'Dez.'],
    datasets: [
      {
        label: 'Roupas',
        data: [50, 60, 70, 50, 40, 60, 55, 45, 50, 65, 70, 60],
        backgroundColor: 'rgba(54, 162, 235, 0.7)',
      },
      {
        label: 'Alimentação',
        data: [30, 40, 50, 30, 20, 40, 35, 25, 30, 45, 50, 40],
        backgroundColor: 'rgba(255, 99, 132, 0.7)',
      },
    ],
  },
  options: {
    responsive: true,
    plugins: {
      legend: {
        position: 'top',
      },
    },
    scales: {
      y: {
        beginAtZero: true,
      },
    },
  },
});

const ctx2 = document.getElementById('departmentSales').getContext('2d');
new Chart(ctx2, {
  type: 'doughnut',
  data: {
    labels: [
      'Roupas',
      'Alimentação',
      'Eletronicos',
      'Auto peças',
      'Jardinagem',
    ],
    datasets: [
      {
        data: [20, 25, 15, 20, 20],
        backgroundColor: [
          'rgba(54, 162, 235, 0.7)',
          'rgba(255, 99, 132, 0.7)',
          'rgba(75, 192, 192, 0.7)',
          'rgba(153, 102, 255, 0.7)',
          'rgba(255, 205, 86, 0.7)',
        ],
      },
    ],
  },
  options: {
    responsive: true,
    plugins: {
      legend: {
        position: 'right',
      },
    },
  },
});
