/* Animations des produits en vedette */
const heroImages = [
  "assets/img/large-monitor-with-background.jpg",
  "assets/img/keyboard-monitor.jpg",
  "assets/img/laptop-with-background.jpg",
  "assets/img/xbox.jpg"
];

let currentIndex = 0;
const heroImage = document.getElementById("heroImage");

setInterval(() => {
  currentIndex = (currentIndex + 1) % heroImages.length;
  heroImage.src = heroImages[currentIndex];
}, 5000);


/* ===================== GRAPHIQUES JS ===================== */
new Chart(document.getElementById('ordersChart'), {
    type: 'line',
    data: {
      labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai'],
      datasets: [{
        label: 'Commandes',
        data: [5, 9, 7, 12, 17],
        borderColor: '#1E73BE',
        fill: false
      }]
    }
  });

  new Chart(document.getElementById('productsChart'), {
    type: 'doughnut',
    data: {
      labels: ['Moniteurs', 'PC', 'Claviers', 'Accessoires'],
      datasets: [{
        data: [12, 8, 15, 13],
        backgroundColor: ['#1E73BE', '#6c757d', '#adb5bd', '#dee2e6']
      }]
    }
  });