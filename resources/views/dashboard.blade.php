<x-app-layout>
    <div class="py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">

            <!-- Header -->
            <div>
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white">
                    Dashboard
                </h2>
                <p class="text-sm text-gray-500 dark:text-gray-400">
                    Ringkasan data klien & media sosial
                </p>
            </div>

            <!-- Statistik -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">

                <!-- Klien -->
                <div class="relative overflow-hidden rounded-2xl bg-[#ADD8E6] p-5
                            transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-xs uppercase tracking-widest text-gray-700">Klien</p>
                            <p class="mt-2 text-4xl font-bold text-gray-900">
                                {{ $totalClients ?? '120' }}
                            </p>
                            <p class="mt-1 text-xs text-gray-600">
                                +12 bulan ini
                            </p>
                        </div>
                        <div class="rounded-xl p-3 bg-white/60 text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                 viewBox="0 0 24 24" class="w-6 h-6">
                                <path d="M16 11c1.657 0 3-1.79 3-4s-1.343-4-3-4-3 1.79-3 4 1.343 4 3 4zM8 11c1.657 0 3-1.79 3-4S9.657 3 8 3 5 4.79 5 7s1.343 4 3 4z"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Medsos -->
                <div class="relative overflow-hidden rounded-2xl bg-[#ADD8E6] p-5
                            transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-xs uppercase tracking-widest text-gray-700">Medsos</p>
                            <p class="mt-2 text-4xl font-bold text-gray-900">
                                {{ $totalMedsos ?? '78' }}
                            </p>
                            <p class="mt-1 text-xs text-gray-600">
                                3 perlu ditinjau
                            </p>
                        </div>
                        <div class="rounded-xl p-3 bg-white/60 text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                 viewBox="0 0 24 24" class="w-6 h-6">
                                <path d="M12 2a10 10 0 100 20 10 10 0 000-20zm1 10h3l-4 6V12H9l4-6v6z"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Industri -->
                <div class="relative overflow-hidden rounded-2xl bg-[#ADD8E6] p-5
                            transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-xs uppercase tracking-widest text-gray-700">Industri</p>
                            <p class="mt-2 text-4xl font-bold text-gray-900">
                                {{ $totalIndustry ?? '6' }}
                            </p>
                            <p class="mt-1 text-xs text-gray-600">
                                kategori aktif
                            </p>
                        </div>
                        <div class="rounded-xl p-3 bg-white/60 text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                 viewBox="0 0 24 24" class="w-6 h-6">
                                <path d="M3 3h18v18H3z"/>
                            </svg>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Chart -->
            <div class="rounded-2xl bg-[#ADD8E6] p-5">
                <h3 class="text-base font-semibold text-gray-900 mb-4">
                    Grafik Klien per Industri
                </h3>
                <div class="h-64">
                    <canvas id="clientsChart"></canvas>
                </div>
            </div>

            <!-- Aktivitas Terbaru -->
            <div class="rounded-2xl bg-[#ADD8E6] p-5">
                <h4 class="text-sm font-semibold text-gray-900">
                    Aktivitas Terbaru
                </h4>

                <ul class="mt-4 space-y-4">
                    @forelse($recentClients ?? [] as $rc)
                        <li class="pl-4 border-l-2 border-gray-400">
                            <p class="text-sm font-medium text-gray-900">
                                {{ $rc->nama }}
                            </p>
                            <p class="text-xs text-gray-700">
                                {{ $rc->industri }} · {{ $rc->kota }}
                            </p>
                        </li>
                    @empty
                        <li class="text-sm text-gray-700">Belum ada aktivitas.</li>
                    @endforelse
                </ul>
            </div>

            <!-- Table -->
            <div class="rounded-2xl bg-[#ADD8E6] overflow-hidden">
                <div class="p-5 border-b border-gray-300">
                    <h3 class="text-base font-semibold text-gray-900">
                        Data Terbaru
                    </h3>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full">
                        <thead class="bg-white/50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs text-gray-700 uppercase">Nama</th>
                                <th class="px-6 py-3 text-left text-xs text-gray-700 uppercase">Kategori</th>
                                <th class="px-6 py-3 text-left text-xs text-gray-700 uppercase">Status</th>
                                <th class="px-6 py-3"></th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-300">
                            <tr class="hover:bg-white/40 transition">
                                <td class="px-6 py-4 text-sm text-gray-900">PT Maju Jaya</td>
                                <td class="px-6 py-4 text-sm text-gray-700">Klien</td>
                                <td class="px-6 py-4">
                                    <span class="px-2 py-0.5 rounded-full text-xs bg-white/70 text-gray-800">
                                        Aktif
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-right text-sm">
                                    <a href="#" class="text-gray-800 underline">Detail</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const ctx = document.getElementById('clientsChart');
    if (!ctx) return;

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: @json($chartLabels ?? ['Retail','Teknologi','Kuliner']),
            datasets: [{
                data: @json($chartData ?? [12, 19, 7]),
                backgroundColor: '#0c55f3ff',
                borderRadius: 8
            }]
        },
        options: {
            plugins: { legend: { display: false } },
            scales: {
                x: { grid: { display: false } },
                y: { beginAtZero: true }
            }
        }
    });
});
</script>
@endpush
