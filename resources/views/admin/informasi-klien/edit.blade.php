<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Informasi Klien') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gradient-to-r from-blue-600 to-amber-400 p-1 rounded-2xl shadow-lg">
                <div class="bg-white dark:bg-gray-800 rounded-xl p-6">
                    <div class="flex items-start gap-4 mb-4">
                        <div class="flex-shrink-0 bg-blue-600 text-white rounded-lg p-3 shadow">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Edit Klien</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Perbarui informasi klien sesuai kebutuhan.</p>
                        </div>
                    </div>

                    <form method="POST" action="{{ route('admin.informasi-klien.update', $klien) }}">
                        @csrf
                        @method('PATCH')
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                                <input type="text" name="nama" id="nama" value="{{ old('nama', $klien->nama) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-600 focus:ring-2 focus:ring-blue-200" required>
                                @error('nama') <p class="text-xs text-red-600 mt-1">{{ $message }}</p> @enderror
                            </div>

                            <div>
                                <label for="nomorWA" class="block text-sm font-medium text-gray-700">Nomor WA</label>
                                <input type="text" name="nomorWA" id="nomorWA" value="{{ old('nomorWA', $klien->nomorWA) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-600 focus:ring-2 focus:ring-blue-200" required>
                                @error('nomorWA') <p class="text-xs text-red-600 mt-1">{{ $message }}</p> @enderror
                            </div>

                            <div>
                                <label for="jabatan" class="block text-sm font-medium text-gray-700">Jabatan</label>
                                <input type="text" name="jabatan" id="jabatan" value="{{ old('jabatan', $klien->jabatan) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-amber-400 focus:ring-2 focus:ring-amber-200" required>
                                @error('jabatan') <p class="text-xs text-red-600 mt-1">{{ $message }}</p> @enderror
                            </div>

                            <div>
                                <label for="industri" class="block text-sm font-medium text-gray-700">Industri</label>
                                <input type="text" name="industri" id="industri" value="{{ old('industri', $klien->industri) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-amber-400 focus:ring-2 focus:ring-amber-200" required>
                                @error('industri') <p class="text-xs text-red-600 mt-1">{{ $message }}</p> @enderror
                            </div>

                            <div class="sm:col-span-2">
                                <label for="kota" class="block text-sm font-medium text-gray-700">Kota</label>
                                <input type="text" name="kota" id="kota" value="{{ old('kota', $klien->kota) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-600 focus:ring-2 focus:ring-blue-200" required>
                                @error('kota') <p class="text-xs text-red-600 mt-1">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        <div class="mt-6 flex items-center justify-end gap-3">
                            <a href="{{ route('admin.informasi-klien.index') }}" class="inline-flex items-center px-4 py-2 rounded-md border border-amber-400 text-amber-700 bg-amber-50 hover:bg-amber-100">Batal</a>
                            <button type="submit" class="inline-flex items-center px-4 py-2 rounded-md bg-blue-600 text-white hover:bg-blue-700 shadow">Perbarui</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
