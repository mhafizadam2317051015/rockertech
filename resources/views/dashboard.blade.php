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
                <div class="relative overflow-hidden rounded-2xl bg-[#134686] text-white p-5
                            transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">

                    <div class="relative flex items-start justify-between">
                        <div>
                            <p class="text-xs uppercase tracking-widest text-blue-200">Klien</p>
                            <p class="mt-2 text-4xl font-bold">
                                {{ $totalClients ?? '120' }}
                            </p>
                            <p class="mt-1 text-xs text-blue-100">
                                +12 bulan ini
                            </p>
                        </div>
                        <div class="rounded-xl p-3 bg-white/20 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                 viewBox="0 0 24 24" class="w-6 h-6">
                                <path d="M16 11c1.657 0 3-1.79 3-4s-1.343-4-3-4-3 1.79-3 4 1.343 4 3 4zM8 11c1.657 0 3-1.79 3-4S9.657 3 8 3 5 4.79 5 7s1.343 4 3 4z"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Medsos -->
                <div class="relative overflow-hidden rounded-2xl bg-[#134686] text-white p-5
                            transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">

                    <div class="relative flex items-start justify-between">
                        <div>
                            <p class="text-xs uppercase tracking-widest text-blue-200">Medsos</p>
                            <p class="mt-2 text-4xl font-bold">
                                {{ $totalMedsos ?? '78' }}
                            </p>
                            <p class="mt-1 text-xs text-blue-100">
                                3 perlu ditinjau
                            </p>
                        </div>
                        <div class="rounded-xl p-3 bg-white/20 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                 viewBox="0 0 24 24" class="w-6 h-6">
                                <path d="M12 2a10 10 0 100 20 10 10 0 000-20zm1 10h3l-4 6V12H9l4-6v6z"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Industri -->
                <div class="relative overflow-hidden rounded-2xl bg-[#134686] text-white p-5
                            transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">

                    <div class="relative flex items-start justify-between">
                        <div>
                            <p class="text-xs uppercase tracking-widest text-blue-200">Industri</p>
                            <p class="mt-2 text-4xl font-bold">
                                {{ $totalIndustry ?? '6' }}
                            </p>
                            <p class="mt-1 text-xs text-blue-100">
                                kategori aktif
                            </p>
                        </div>
                        <div class="rounded-xl p-3 bg-white/20 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                 viewBox="0 0 24 24" class="w-6 h-6">
                                <path d="M3 3h18v18H3z"/>
                            </svg>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Chart -->
            <div class="rounded-2xl bg-[#134686] text-white p-5">
                <h3 class="text-base font-semibold mb-4">
                    Grafik Klien per Industri
                </h3>
                <div class="h-64">
                    <canvas id="clientsChart"></canvas>
                </div>
            </div>

            <!-- Aktivitas Terbaru -->
            <div class="rounded-2xl bg-[#134686] text-white p-5">
                <h4 class="text-sm font-semibold">
                    Aktivitas Terbaru
                </h4>

                <ul class="mt-4 space-y-4">
                    @forelse($recentClients ?? [] as $rc)
                        <li class="relative pl-4 border-l-2 border-blue-200">
                            <p class="text-sm font-medium">
                                {{ $rc->nama }}
                            </p>
                            <p class="text-xs text-blue-100">
                                {{ $rc->industri }} · {{ $rc->kota }}
                            </p>
                        </li>
                    @empty
                        <li class="text-sm text-blue-100">Belum ada aktivitas.</li>
                    @endforelse
                </ul>
            </div>

            <!-- Table -->
            <div class="rounded-2xl bg-[#134686] text-white overflow-hidden">
                <div class="p-5 border-b border-white/20">
                    <h3 class="text-base font-semibold">
                        Data Terbaru
                    </h3>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full">
                        <thead class="bg-white/10">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs uppercase text-blue-100">Nama</th>
                                <th class="px-6 py-3 text-left text-xs uppercase text-blue-100">Kategori</th>
                                <th class="px-6 py-3 text-left text-xs uppercase text-blue-100">Status</th>
                                <th class="px-6 py-3"></th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-white/20">
                            <tr class="hover:bg-white/10 transition">
                                <td class="px-6 py-4 text-sm">PT Maju Jaya</td>
                                <td class="px-6 py-4 text-sm text-blue-100">Klien</td>
                                <td class="px-6 py-4">
                                    <span class="px-2 py-0.5 rounded-full text-xs bg-white/20">
                                        Aktif
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-right text-sm">
                                    <a href="#" class="underline text-blue-100 hover:text-white">Detail</a>
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
                backgroundColor: 'rgba(255,255,255,0.85)',
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
