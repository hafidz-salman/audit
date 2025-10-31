<x-dashboard-layout>
    <!-- Stats Cards -->
    <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 1rem; margin-bottom: 1.5rem;">
        <div class="bg-white rounded-lg shadow-sm p-4">
            <div class="text-center">
                <p class="text-xs text-gray-500 mb-1">BIDANG & INDIKATOR KINERJA</p>
                <p class="text-2xl font-bold text-gray-900">0</p>
                <p class="text-xs text-gray-500">TOTAL</p>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-sm p-4">
            <div class="text-center">
                <p class="text-xs text-gray-500 mb-1">PENETAPAN</p>
                <p class="text-2xl font-bold text-gray-900">0</p>
                <p class="text-xs text-gray-500">KEGIATAN</p>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-sm p-4">
            <div class="text-center">
                <p class="text-xs text-gray-500 mb-1">PELAKSANAAN</p>
                <p class="text-2xl font-bold text-gray-900">0</p>
                <p class="text-xs text-gray-500">KEGIATAN</p>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-sm p-4">
            <div class="text-center">
                <p class="text-xs text-gray-500 mb-1">EVALUASI DIRI & PENGENDALIAN</p>
                <p class="text-2xl font-bold text-gray-900">0</p>
                <p class="text-xs text-gray-500">KEGIATAN</p>
            </div>
        </div>
    </div>

    <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 1rem; margin-bottom: 1.5rem;">
        <!-- Chart Section -->
        <div class="bg-white rounded-lg shadow-sm p-4">
            <div class="flex items-center justify-between mb-3">
                <h3 class="text-base font-semibold text-gray-900">Statistik Audit</h3>
                <select class="text-xs border border-gray-300 rounded px-2 py-1">
                    <option>6 Bulan Terakhir</option>
                    <option>12 Bulan Terakhir</option>
                </select>
            </div>
            <div style="height: 250px;">
                <canvas id="auditChart"></canvas>
            </div>
        </div>

        <!-- Distribution -->
        <div class="bg-white rounded-lg shadow-sm p-4">
            <h3 class="text-base font-semibold text-gray-900 mb-3">Distribusi Status</h3>
            <div style="height: 250px;">
                <canvas id="statusChart"></canvas>
            </div>
        </div>
    </div>

    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 1.5rem;">
        <div class="bg-white rounded-lg shadow-sm p-4">
            <div class="text-center">
                <h3 class="text-base font-semibold text-gray-900 mb-2">KEBIJAKAN INTERNAL</h3>
                <p class="text-3xl font-bold text-blue-600">112</p>
                <button class="mt-2 px-4 py-2 bg-blue-600 text-white text-sm rounded hover:bg-blue-700">Lihat dokumen</button>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-sm p-4">
            <div class="text-center">
                <h3 class="text-base font-semibold text-gray-900 mb-2">KEBIJAKAN EKSTERNAL</h3>
                <p class="text-3xl font-bold text-green-600">254</p>
                <button class="mt-2 px-4 py-2 bg-green-600 text-white text-sm rounded hover:bg-green-700">Lihat dokumen</button>
            </div>
        </div>
    </div>

    <script>
        // Audit Chart
        const ctx1 = document.getElementById('auditChart').getContext('2d');
        new Chart(ctx1, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun'],
                datasets: [{
                    label: 'Penetapan',
                    data: [7, 0, 0, 4, 0, 0],
                    borderColor: '#3b82f6',
                    backgroundColor: 'rgba(59, 130, 246, 0.1)',
                    tension: 0.4,
                    pointRadius: 3
                }, {
                    label: 'Pelaksanaan',
                    data: [0, 0, 8, 0, 0, 0],
                    borderColor: '#10b981',
                    backgroundColor: 'rgba(16, 185, 129, 0.1)',
                    tension: 0.4,
                    pointRadius: 3
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'top',
                        labels: {
                            usePointStyle: true,
                            font: {
                                size: 11
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            font: {
                                size: 10
                            }
                        }
                    },
                    x: {
                        ticks: {
                            font: {
                                size: 10
                            }
                        }
                    }
                }
            }
        });

        // Status Distribution Chart
        const ctx2 = document.getElementById('statusChart').getContext('2d');
        new Chart(ctx2, {
            type: 'doughnut',
            data: {
                labels: ['Penetapan: 0%', 'Pelaksanaan: 0%', 'Evaluasi: 0%', 'Selesai: 0%'],
                datasets: [{
                    data: [9, 2, 4, 5],
                    backgroundColor: [
                        '#3b82f6',
                        '#10b981',
                        '#f59e0b',
                        '#ef4444'
                    ],
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'right',
                        labels: {
                            usePointStyle: true,
                            font: {
                                size: 10
                            },
                            padding: 10
                        }
                    }
                }
            }
        });
    </script>




</x-dashboard-layout>
