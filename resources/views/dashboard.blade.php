<x-dashboard-layout>
    <!-- Stats Cards -->
    <div class="flex gap-5 space-x-6 mb-6">
        <div class="flex-1 bg-white rounded-lg shadow-sm p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500 mb-1">Total Audits</p>
                    <p class="text-3xl font-bold text-gray-900">{{ $totalAudits }}</p>
                    <p class="text-xs text-gray-500">Total audit yang telah dilakukan</p>
                </div>
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
            </div>
        </div>

        <div class="flex-1 bg-white rounded-lg shadow-sm p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500 mb-1">Average Score</p>
                    <p class="text-3xl font-bold text-gray-900">{{ number_format($avgScore ?? 0, 1) }}</p>
                    <p class="text-xs text-green-600">Rata-rata skor audit</p>
                </div>
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                    </svg>
                </div>
            </div>
        </div>

        <div class="flex-1 bg-white rounded-lg shadow-sm p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500 mb-1">Pending Audits</p>
                    <p class="text-3xl font-bold text-gray-900">{{ $pendingAudits }}</p>
                    <p class="text-xs text-orange-600">Audit yang belum selesai</p>
                </div>
                <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-orange-600" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
            </div>
        </div>

        <div class="flex-1 bg-white rounded-lg shadow-sm p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500 mb-1">Compliance Rate</p>
                    <p class="text-3xl font-bold text-gray-900">94.2%</p>
                    <p class="text-xs text-blue-600">Above target</p>
                </div>
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-3 gap-6 mb-6">
        <!-- Chart Section -->
        <div class="col-span-2 bg-white rounded-lg shadow-sm p-6">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-semibold text-gray-900">Audit Scores by Department</h3>
                <div class="flex items-center space-x-2">
                    <span class="text-sm text-gray-500">Average score for Q4 2024</span>
                    <select class="text-sm border border-gray-300 rounded px-3 py-1">
                        <option>Q4</option>
                        <option>Q3</option>
                        <option>Q2</option>
                        <option>Q1</option>
                    </select>
                </div>
            </div>
            <div style="height: 300px;">
                <canvas id="auditChart"></canvas>
            </div>
        </div>

        <!-- Completion Chart -->
        <div class="bg-white rounded-lg shadow-sm p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Audit Completion</h3>
            <p class="text-sm text-gray-500 mb-6">Current quarter progress</p>
            <div class="flex items-center justify-center mb-6">
                <div class="relative w-32 h-32">
                    <canvas id="completionChart" width="128" height="128"></canvas>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-blue-600">75%</div>
                            <div class="text-xs text-gray-500">Complete</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space-y-3">
                <div class="flex justify-between items-center">
                    <span class="text-sm text-gray-600">Completed</span>
                    <span class="text-sm font-medium">185/247</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-sm text-gray-600">In Progress</span>
                    <span class="text-sm font-medium">39</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-sm text-gray-600">Pending</span>
                    <span class="text-sm font-medium">23</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Audits -->
    <div class="bg-white rounded-lg shadow-sm">
        <div class="flex items-center justify-between p-6 border-b border-gray-200">
            <h3 class="text-lg font-semibold text-gray-900">Recent Audits</h3>
            <a href="#" class="text-blue-600 text-sm hover:text-blue-700">View All</a>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Department</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Auditor</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Score</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($recentAudits as $audit)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            {{ $audit->validasi->kinerja->user->unit->nama_unit ?? 'N/A' }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $audit->auditor->name ?? 'N/A' }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ $audit->skor_total ? number_format($audit->skor_total, 0) : 'N/A' }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full 
                                @if($audit->status_audit == 'Selesai') bg-green-100 text-green-800
                                @elseif($audit->status_audit == 'Berlangsung') bg-yellow-100 text-yellow-800
                                @else bg-blue-100 text-blue-800 @endif">
                                {{ $audit->status_audit }}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $audit->tanggal_audit ? \Carbon\Carbon::parse($audit->tanggal_audit)->format('M d, Y') : 'N/A' }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
        // Audit Scores Chart
        const ctx1 = document.getElementById('auditChart').getContext('2d');
        new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: ['Finance', 'Operations', 'HR', 'IT', 'Marketing', 'Legal'],
                datasets: [{
                    data: [92, 78, 88, 85, 90, 87],
                    backgroundColor: '#3b82f6',
                    borderRadius: 4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 100,
                        ticks: {
                            font: {
                                size: 12
                            }
                        }
                    },
                    x: {
                        ticks: {
                            font: {
                                size: 12
                            }
                        }
                    }
                }
            }
        });

        // Completion Chart
        const ctx2 = document.getElementById('completionChart').getContext('2d');
        new Chart(ctx2, {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: [75, 25],
                    backgroundColor: ['#3b82f6', '#e5e7eb'],
                    borderWidth: 0,
                    cutout: '70%'
                }]
            },
            options: {
                responsive: false,
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    </script>
</x-dashboard-layout>
