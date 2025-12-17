<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Informasi Klien') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('admin.informasi-klien.store') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                            <input type="text" name="nama" id="nama" class="mt-1 block w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="nomorWA" class="block text-sm font-medium text-gray-700">Nomor WA</label>
                            <input type="text" name="nomorWA" id="nomorWA" class="mt-1 block w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="jabatan" class="block text-sm font-medium text-gray-700">Jabatan</label>
                            <input type="text" name="jabatan" id="jabatan" class="mt-1 block w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="industri" class="block text-sm font-medium text-gray-700">Industri</label>
                            <input type="text" name="industri" id="industri" class="mt-1 block w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="kota" class="block text-sm font-medium text-gray-700">Kota</label>
                            <input type="text" name="kota" id="kota" class="mt-1 block w-full" required>
                        </div>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
