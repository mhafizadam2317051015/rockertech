import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Import Chart.js and expose globally so Blade scripts can use it reliably
import Chart from 'chart.js/auto';
window.Chart = Chart;

// Initialize clients chart when data and DOM are ready
function createClientsChart(labels, data) {
	const canvas = document.getElementById('clientsChart');
	if (!canvas) return false;
	try {
		// eslint-disable-next-line no-undef
		new Chart(canvas, {
			type: 'bar',
			data: {
				labels: labels,
				datasets: [{
					label: 'Jumlah Klien per Industri',
					data: data,
					backgroundColor: 'rgba(59,130,246,0.7)',
					borderColor: 'rgba(59,130,246,1)',
					borderWidth: 1
				}]
			},
			options: {
				responsive: true,
				maintainAspectRatio: false,
				scales: {
					y: { beginAtZero: true, ticks: { precision: 0 } }
				}
			}
		});
		return true;
	} catch (err) {
		console.error('clients chart init error', err);
		return false;
	}
}

document.addEventListener('DOMContentLoaded', function () {
	// Try immediate init if data already present
	if (window.__clientsChartData) {
		createClientsChart(window.__clientsChartData.labels || [], window.__clientsChartData.data || []);
		return;
	}

	// Poll for data up to 3s
	let waited = 0;
	const interval = setInterval(() => {
		if (window.__clientsChartData) {
			clearInterval(interval);
			createClientsChart(window.__clientsChartData.labels || [], window.__clientsChartData.data || []);
			return;
		}
		waited += 100;
		if (waited > 3000) clearInterval(interval);
	}, 100);
});
