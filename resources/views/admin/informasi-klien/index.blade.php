<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray leading-tight">
            {{ __('Informasi Klien') }}
        </h2>
    </x-slot>

    <!-- CONTAINER BIRU -->
    <div class="py-12" style="background-color:#134686">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- CARD UTAMA -->
            <div class="relative rounded-2xl overflow-hidden
                        border border-white/20 shadow-2xl">

                <!-- layer putih -->
                <div class="absolute inset-0 bg-white/95"></div>

                <div class="relative p-6">

                    <!-- HEADER CARD -->
                    <div class="flex items-center justify-between mb-6">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">
                                Daftar Klien
                            </h3>
                            <p class="text-sm text-gray-500">
                                Kelola informasi klien — tambahkan, edit, atau hapus
                            </p>
                        </div>

                        <a href="{{ route('admin.informasi-klien.create') }}"
                           class="inline-flex items-center px-4 py-2 rounded-lg
                                  bg-[#134686] text-white text-sm
                                  hover:bg-blue-900 shadow">
                            Tambah Klien
                        </a>
                    </div>

                    <!-- ALERT -->
                    @if(session('success'))
                        <div class="mb-4 rounded-lg bg-emerald-50 p-3 border border-emerald-200">
                            <p class="text-sm text-emerald-700">
                                {{ session('success') }}
                            </p>
                        </div>
                    @endif

                    <!-- TABLE -->
                    <div class="overflow-x-auto rounded-xl border border-gray-200">
                        <table class="min-w-full divide-y divide-gray-200">

                            <thead class="bg-blue-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs uppercase text-gray-500">Nama</th>
                                    <th class="px-6 py-3 text-left text-xs uppercase text-gray-500">Nomor WA</th>
                                    <th class="px-6 py-3 text-left text-xs uppercase text-gray-500">Jabatan</th>
                                    <th class="px-6 py-3 text-left text-xs uppercase text-gray-500">Industri</th>
                                    <th class="px-6 py-3 text-left text-xs uppercase text-gray-500">Kota</th>
                                    <th class="px-6 py-3"></th>
                                </tr>
                            </thead>

                            <tbody class="bg-white divide-y divide-gray-100">
                                @forelse($kliens as $klien)
                                    <tr class="hover:bg-blue-50/60 transition">
                                        <td class="px-6 py-4 text-sm font-medium text-gray-900">
                                            {{ $klien->nama }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-600">
                                            {{ $klien->nomorWA }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-600">
                                            {{ $klien->jabatan }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-600">
                                            {{ $klien->industri }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-600">
                                            {{ $klien->kota }}
                                        </td>
                                        <td class="px-6 py-4 text-right text-sm space-x-2">
                                            <a href="{{ route('admin.informasi-klien.edit', $klien) }}"
                                               class="inline-flex items-center px-3 py-1.5 rounded-md
                                                      bg-[#134686] text-white text-xs
                                                      hover:bg-blue-900">
                                                Edit
                                            </a>

                                            <form method="POST"
                                                  action="{{ route('admin.informasi-klien.destroy', $klien) }}"
                                                  class="inline-block"
                                                  onsubmit="return confirm('Hapus klien ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                        class="inline-flex items-center px-3 py-1.5 rounded-md
                                                               bg-red-500 text-white text-xs
                                                               hover:bg-red-600">
                                                    Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6"
                                            class="px-6 py-6 text-center text-sm text-gray-500">
                                            Belum ada klien
                                        </td>
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
