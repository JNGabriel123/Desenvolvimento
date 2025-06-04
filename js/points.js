let currentPoints = 0;
let level = 1;
let levelThreshold = 10;

const ctx = document.getElementById('pointsChart').getContext('2d');
const chart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ['Pontos', 'Faltam'],
    datasets: [{
      data: [0, levelThreshold],
      backgroundColor: ['#00c853', '#eeeeee'],
      borderWidth: 1,
    }]
  },
  options: {
    cutout: '70%',
    responsive: true,
    plugins: {
      tooltip: { enabled: false },
      legend: { display: false }
    }
  }
});

function addPoints(p) {
  currentPoints += p;
  if (currentPoints >= levelThreshold) {
    level++;
    currentPoints = currentPoints - levelThreshold;
    levelThreshold += 5; // pode ajustar o quanto cresce a dificuldade
    alert(`🎉 Parabéns! Você subiu para o nível ${level}`);
  }
  updateChart();
}

function updateChart() {
  chart.data.datasets[0].data = [currentPoints, levelThreshold - currentPoints];
  chart.update();

  document.getElementById('scoreText').textContent =
    `Você tem ${currentPoints} pontos. Faltam ${levelThreshold - currentPoints} para subir ao nível ${level + 1}`;
}
