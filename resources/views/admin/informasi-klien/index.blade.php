<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Informasi Klien') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gradient-to-r from-blue-600 to-amber-400 p-1 rounded-2xl shadow-lg">
                <div class="bg-white dark:bg-gray-800 rounded-xl p-6">
                    <div class="flex items-center justify-between mb-6">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Daftar Klien</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Kelola informasi klien — tambahkan, edit, atau hapus.</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <a href="{{ route('admin.informasi-klien.create') }}" class="inline-flex items-center gap-2 px-4 py-2 rounded-md bg-blue-700 hover:bg-blue-800 text-white text-sm">Tambah Klien</a>
                        </div>
                    </div>

                    @if(session('success'))
                        <div class="mb-4 rounded-md bg-emerald-50 p-3">
                            <p class="text-sm text-emerald-800">{{ session('success') }}</p>
                        </div>
                    @endif

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-gray-900/40">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">Nama</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">Nomor WA</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">Jabatan</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">Industri</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">Kota</th>
                                    <th class="px-6 py-3"></th>
                                </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-100 dark:divide-gray-700">
                                @forelse($kliens as $klien)
                                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/40">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-100">{{ $klien->nama }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 dark:text-gray-300">{{ $klien->nomorWA }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 dark:text-gray-300">{{ $klien->jabatan }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 dark:text-gray-300">{{ $klien->industri }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 dark:text-gray-300">{{ $klien->kota }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                            <a href="{{ route('admin.informasi-klien.edit', $klien) }}" class="inline-flex items-center px-3 py-1.5 rounded-md bg-blue-600 text-white text-xs hover:bg-blue-700">Edit</a>
                                            <form method="POST" action="{{ route('admin.informasi-klien.destroy', $klien) }}" class="inline-block ms-2" onsubmit="return confirm('Hapus klien ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="inline-flex items-center px-3 py-1.5 rounded-md bg-amber-400 text-white text-xs hover:bg-amber-500">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="px-6 py-4 text-sm text-gray-500">Belum ada klien. Tambahkan klien baru.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
