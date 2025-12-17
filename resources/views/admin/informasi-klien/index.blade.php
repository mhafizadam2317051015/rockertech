<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Informasi Klien') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('admin.informasi-klien.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Tambah Klien</a>
                    <table class="min-w-full bg-white">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 border-b">Nama</th>
                                <th class="py-2 px-4 border-b">Nomor WA</th>
                                <th class="py-2 px-4 border-b">Jabatan</th>
                                <th class="py-2 px-4 border-b">Industri</th>
                                <th class="py-2 px-4 border-b">Kota</th>
                                <th class="py-2 px-4 border-b">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kliens as $klien)
                            <tr>
                                <td class="py-2 px-4 border-b">{{ $klien->nama }}</td>
                                <td class="py-2 px-4 border-b">{{ $klien->nomorWA }}</td>
                                <td class="py-2 px-4 border-b">{{ $klien->jabatan }}</td>
                                <td class="py-2 px-4 border-b">{{ $klien->industri }}</td>
                                <td class="py-2 px-4 border-b">{{ $klien->kota }}</td>
                                <td class="py-2 px-4 border-b">
                                    <a href="{{ route('admin.informasi-klien.edit', $klien) }}" class="text-blue-500">Edit</a>
                                    <form method="POST" action="{{ route('admin.informasi-klien.destroy', $klien) }}" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 ml-2">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
