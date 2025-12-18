<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Tambah Informasi Klien') }}
        </h2>
    </x-slot>

    <!-- CONTAINER BIRU -->
    <div class="py-12" style="background-color:#134686">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

            <!-- CARD -->
            <div class="relative rounded-2xl overflow-hidden
                        border border-white/20 shadow-2xl">

                <!-- layer putih transparan -->
                <div class="absolute inset-0 bg-white/95"></div>

                <div class="relative p-6">

                    <!-- HEADER CARD -->
                    <div class="flex items-start gap-4 mb-6">
                        <div class="rounded-xl p-3 shadow
                                    bg-[#134686] text-white">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-6 w-6" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M8 7V3m8 4V3M3 11h18M5 21h14a2 2 0 002-2V7H3v12a2 2 0 002 2z"/>
                            </svg>
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">
                                Tambah Klien
                            </h3>
                            <p class="text-sm text-gray-500">
                                Masukkan data klien baru
                            </p>
                        </div>
                    </div>

                    <!-- FORM -->
                    <form method="POST" action="{{ route('admin.informasi-klien.store') }}">
                        @csrf

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

                            <div>
                                <label class="text-sm font-medium text-gray-700">Nama</label>
                                <input type="text" name="nama"
                                       class="mt-1 w-full rounded-lg border-gray-300
                                              focus:border-[#134686]
                                              focus:ring-2 focus:ring-blue-200"
                                       required>
                            </div>

                            <div>
                                <label class="text-sm font-medium text-gray-700">Nomor WA</label>
                                <input type="text" name="nomorWA"
                                       class="mt-1 w-full rounded-lg border-gray-300
                                              focus:border-[#134686]
                                              focus:ring-2 focus:ring-blue-200"
                                       required>
                            </div>

                            <div>
                                <label class="text-sm font-medium text-gray-700">Jabatan</label>
                                <input type="text" name="jabatan"
                                       class="mt-1 w-full rounded-lg border-gray-300
                                              focus:border-[#134686]
                                              focus:ring-2 focus:ring-blue-200"
                                       required>
                            </div>

                            <div>
                                <label class="text-sm font-medium text-gray-700">Industri</label>
                                <input type="text" name="industri"
                                       class="mt-1 w-full rounded-lg border-gray-300
                                              focus:border-[#134686]
                                              focus:ring-2 focus:ring-blue-200"
                                       required>
                            </div>

                            <div class="sm:col-span-2">
                                <label class="text-sm font-medium text-gray-700">Kota</label>
                                <input type="text" name="kota"
                                       class="mt-1 w-full rounded-lg border-gray-300
                                              focus:border-[#134686]
                                              focus:ring-2 focus:ring-blue-200"
                                       required>
                            </div>

                        </div>

                        <!-- ACTION -->
                        <div class="mt-6 flex justify-end gap-3">
                            <a href="{{ route('admin.informasi-klien.index') }}"
                               class="px-4 py-2 rounded-lg
                                      bg-white border border-gray-200
                                      text-[#134686] hover:bg-blue-50">
                                Batal
                            </a>

                            <button type="submit"
                                    class="px-5 py-2 rounded-lg
                                           bg-[#134686] text-white
                                           hover:bg-blue-900 shadow-md">
                                Simpan
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
