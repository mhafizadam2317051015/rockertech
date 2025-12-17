<x-app-layout>
    @php
        $totalUsers = $totalUsers ?? null;
        $totalClients = $totalClients ?? null;
        $totalMedsos = $totalMedsos ?? null;
        $engagement = $engagement ?? null;
        $chartLabels = $chartLabels ?? [];
        $chartData = $chartData ?? [];
    @endphp
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-100 tracking-tight">Dashboard</h2>
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Ringkasan singkat dan aktivitas terbaru.</p>
            </div>
            <a href="#" class="inline-flex items-center gap-2 rounded-md bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium px-4 py-2 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4"><path d="M12 5v14m-7-7h14"/></svg>
                Aksi Cepat
            </a>
        </div>
    </x-slot>

    <div class="py-6 sm:py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            @if(session('success'))
                <div class="rounded-md bg-emerald-50 p-4">
                    <div class="flex">
                        <div class="ml-3">
                            <p class="text-sm font-medium text-emerald-800">{{ session('success') }}</p>
                        </div>
                    </div>
                </div>
            @endif
            <!-- KPI Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6">
                <!-- Users -->
                <div class="relative overflow-hidden rounded-xl border border-gray-200/70 dark:border-gray-700/70 bg-white dark:bg-gray-800 p-5">
                    <div class="absolute inset-0 bg-gradient-to-tr from-indigo-50 to-transparent dark:from-indigo-900/20 pointer-events-none"></div>
                    <div class="flex items-start justify-between">
                        <div>
                            <p class="text-xs uppercase tracking-wider text-gray-500 dark:text-gray-400">Pengguna</p>
                            <p class="mt-2 text-3xl font-semibold text-gray-900 dark:text-white">{{ $totalUsers ?? '1,240' }}</p>
                            <p class="mt-1 text-xs text-emerald-600 dark:text-emerald-400">+4.2% dari bulan lalu</p>
                        </div>
                        <div class="shrink-0 rounded-lg p-2 bg-indigo-100 text-indigo-700 dark:bg-indigo-900/40 dark:text-indigo-300">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6"><path d="M7 8a4 4 0 118 0v1h3a2 2 0 012 2v7a2 2 0 01-2 2H4a2 2 0 01-2-2v-7a2 2 0 012-2h3V8z"/></svg>
                        </div>
                    </div>
                </div>
                <!-- Clients -->
                <div class="relative overflow-hidden rounded-xl border border-gray-200/70 dark:border-gray-700/70 bg-white dark:bg-gray-800 p-5">
                    <div class="absolute inset-0 bg-gradient-to-tr from-emerald-50 to-transparent dark:from-emerald-900/20 pointer-events-none"></div>
                    <div class="flex items-start justify-between">
                        <div>
                            <p class="text-xs uppercase tracking-wider text-gray-500 dark:text-gray-400">Klien</p>
                            <p class="mt-2 text-3xl font-semibold text-gray-900 dark:text-white">{{ $totalClients ?? '312' }}</p>
                            <p class="mt-1 text-xs text-emerald-600 dark:text-emerald-400">+12 baru minggu ini</p>
                        </div>
                        <div class="shrink-0 rounded-lg p-2 bg-emerald-100 text-emerald-700 dark:bg-emerald-900/40 dark:text-emerald-300">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6"><path d="M16 11c1.657 0 3-1.79 3-4s-1.343-4-3-4-3 1.79-3 4 1.343 4 3 4zm-8 0c1.657 0 3-1.79 3-4S9.657 3 8 3 5 4.79 5 7s1.343 4 3 4zm0 2c-2.673 0-8 1.337-8 4v2h10.26A6.48 6.48 0 018 13zm8 0a6.48 6.48 0 00-4.26 1.57A5.98 5.98 0 0118 17c0 .69-.114 1.353-.325 1.967H24v-2c0-2.663-5.327-4-8-4z"/></svg>
                        </div>
                    </div>
                </div>
                <!-- Medsos -->
                <div class="relative overflow-hidden rounded-xl border border-gray-200/70 dark:border-gray-700/70 bg-white dark:bg-gray-800 p-5">
                    <div class="absolute inset-0 bg-gradient-to-tr from-amber-50 to-transparent dark:from-amber-900/20 pointer-events-none"></div>
                    <div class="flex items-start justify-between">
                        <div>
                            <p class="text-xs uppercase tracking-wider text-gray-500 dark:text-gray-400">Medsos</p>
                            <p class="mt-2 text-3xl font-semibold text-gray-900 dark:text-white">{{ $totalMedsos ?? '78' }}</p>
                            <p class="mt-1 text-xs text-amber-600 dark:text-amber-400">3 perlu ditinjau</p>
                        </div>
                        <div class="shrink-0 rounded-lg p-2 bg-amber-100 text-amber-700 dark:bg-amber-900/40 dark:text-amber-300">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6"><path d="M12 2a10 10 0 100 20 10 10 0 000-20zm1 10h3l-4 6V12H9l4-6v6z"/></svg>
                        </div>
                    </div>
                </div>
                <!-- Revenue (placeholder) -->
                <div class="relative overflow-hidden rounded-xl border border-gray-200/70 dark:border-gray-700/70 bg-white dark:bg-gray-800 p-5">
                    <div class="absolute inset-0 bg-gradient-to-tr from-fuchsia-50 to-transparent dark:from-fuchsia-900/20 pointer-events-none"></div>
                    <div class="flex items-start justify-between">
                        <div>
                            <p class="text-xs uppercase tracking-wider text-gray-500 dark:text-gray-400">Engagement</p>
                            <p class="mt-2 text-3xl font-semibold text-gray-900 dark:text-white">{{ $engagement ?? '67%' }}</p>
                            <p class="mt-1 text-xs text-fuchsia-600 dark:text-fuchsia-400">stabil</p>
                        </div>
                        <div class="shrink-0 rounded-lg p-2 bg-fuchsia-100 text-fuchsia-700 dark:bg-fuchsia-900/40 dark:text-fuchsia-300">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6"><path d="M3 3h18v4H3zm0 7h18v11H3z"/></svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chart + Recent Activity -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 lg:gap-6">
                <!-- Chart + Recent Clients -->
                    <div class="lg:col-span-2 rounded-xl overflow-hidden shadow-sm border border-gray-200/70 dark:border-gray-700/70 bg-white dark:bg-gray-800">
                        <div class="p-5 bg-gradient-to-r from-indigo-50 to-white dark:from-indigo-900/10 border-b border-gray-100 dark:border-gray-700/60">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Tren Klien Berdasarkan Industri</h3>
                                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Distribusi klien per industri (update otomatis saat data baru ditambahkan).</p>
                                </div>
                                <div class="text-sm text-gray-600 dark:text-gray-300">Total Klien: <span class="font-semibold">{{ $totalClients ?? '0' }}</span></div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 p-6">
                            <div class="lg:col-span-2">
                                <div class="w-full h-64 sm:h-80">
                                    <canvas id="clientsChart" class="w-full h-full"></canvas>
                                </div>
                            </div>
                            <div class="lg:col-span-1">
                                <div class="rounded-md bg-gray-50 dark:bg-gray-900/40 p-3 h-full">
                                    <h4 class="text-sm font-medium text-gray-900 dark:text-gray-100">Klien Terbaru</h4>
                                    <ul role="list" class="mt-3 divide-y divide-gray-100 dark:divide-gray-700/60 max-h-56 overflow-auto">
                                        @forelse($recentClients ?? [] as $rc)
                                            <li class="py-2 flex items-start justify-between">
                                                <div>
                                                    <p class="text-sm font-medium text-gray-900 dark:text-gray-100">{{ $rc->nama }}</p>
                                                    <p class="text-xs text-gray-500 dark:text-gray-400">{{ $rc->industri }} · {{ $rc->kota }}</p>
                                                </div>
                                                <div class="text-xs text-gray-400">{{ $rc->created_at->diffForHumans() }}</div>
                                            </li>
                                        @empty
                                            <li class="py-2 text-sm text-gray-500">Belum ada klien.</li>
                                        @endforelse
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                <!-- Recent Activity / Shortcuts -->
                    <div class="rounded-xl overflow-hidden shadow-sm border border-gray-200/70 dark:border-gray-700/70 bg-white dark:bg-gray-800">
                        <div class="p-5 border-b border-gray-100 dark:border-gray-700/60 flex items-center justify-between">
                            <div>
                                <h3 class="text-base font-semibold text-gray-900 dark:text-gray-100">Aktivitas & Shortcuts</h3>
                                <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Ringkasan aktivitas dan tindakan cepat.</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <a href="{{ route('admin.informasi-klien.create') }}" class="px-3 py-1.5 rounded-md bg-blue-600 text-white text-sm">Tambah Klien</a>
                                <a href="#" class="px-3 py-1.5 rounded-md bg-gray-100 dark:bg-gray-700/60 text-sm">Lihat Semua</a>
                            </div>
                        </div>
                        <div class="p-4">
                            <ul role="list" class="divide-y divide-gray-100 dark:divide-gray-700/60">
                                @forelse($recentClients ?? [] as $rc2)
                                    <li class="py-3 flex items-start justify-between">
                                        <div>
                                            <p class="text-sm font-medium text-gray-900 dark:text-gray-100">{{ $rc2->nama }}</p>
                                            <p class="text-xs text-gray-500 dark:text-gray-400">{{ $rc2->industri }} · {{ $rc2->kota }}</p>
                                        </div>
                                        <div class="text-xs text-gray-400">{{ $rc2->created_at->diffForHumans() }}</div>
                                    </li>
                                @empty
                                    <li class="py-3 text-sm text-gray-500">Belum ada aktivitas.</li>
                                @endforelse
                            </ul>
                        </div>
                    </div>
            </div>

            <!-- Table -->
            <div class="rounded-xl border border-gray-200/70 dark:border-gray-700/70 bg-white dark:bg-gray-800 overflow-hidden">
                <div class="p-5 border-b border-gray-100 dark:border-gray-700/60">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-base font-semibold text-gray-900 dark:text-gray-100">Data Terbaru</h3>
                            <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Contoh tabel ringkas untuk data terbaru.</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <button class="px-3 py-1.5 text-xs font-medium rounded-md bg-gray-100 dark:bg-gray-700/60 text-gray-700 dark:text-gray-200 hover:bg-gray-200 dark:hover:bg-gray-700">Semua</button>
                            <button class="px-3 py-1.5 text-xs font-medium rounded-md bg-white dark:bg-gray-800 border border-gray-200/70 dark:border-gray-700/70 text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700/40">Klien</button>
                            <button class="px-3 py-1.5 text-xs font-medium rounded-md bg-white dark:bg-gray-800 border border-gray-200/70 dark:border-gray-700/70 text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700/40">Medsos</button>
                        </div>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-100 dark:divide-gray-700/60">
                        <thead class="bg-gray-50 dark:bg-gray-900/40">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500 dark:text-gray-400">Nama</th>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500 dark:text-gray-400">Kategori</th>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500 dark:text-gray-400">Status</th>
                            <th class="px-6 py-3"></th>
                        </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-100 dark:divide-gray-700/60">
                        <tr class="hover:bg-gray-50/70 dark:hover:bg-gray-700/40">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">PT Maju Jaya</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 dark:text-gray-300">Klien</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-emerald-100 text-emerald-700 dark:bg-emerald-900/40 dark:text-emerald-300">Aktif</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                <a href="#" class="text-indigo-600 hover:text-indigo-800 dark:text-indigo-400 dark:hover:text-indigo-300 font-medium">Detail</a>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50/70 dark:hover:bg-gray-700/40">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">Instagram @brandku</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 dark:text-gray-300">Medsos</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-amber-100 text-amber-700 dark:bg-amber-900/40 dark:text-amber-300">Tinjau</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                <a href="#" class="text-indigo-600 hover:text-indigo-800 dark:text-indigo-400 dark:hover:text-indigo-300 font-medium">Detail</a>
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
        document.addEventListener('DOMContentLoaded', function () {
            const ctx = document.getElementById('clientsChart');
            if (!ctx) return;

            const labels = @json($chartLabels ?? []);
            const data = @json($chartData ?? []);

            console.log('clients chart labels:', labels);
            console.log('clients chart data:', data);

            if (!labels || labels.length === 0) {
                const parent = ctx.parentElement || ctx;
                parent.innerHTML = '<div class="text-sm text-gray-500">Belum ada data klien untuk ditampilkan.</div>';
                return;
            }

            new Chart(ctx.getContext('2d'), {
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
                        y: {
                            beginAtZero: true,
                            ticks: { precision: 0 }
                        }
                    }
                }
            });
        });
    </script>
@endpush
