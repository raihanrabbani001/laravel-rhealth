<x-layout>
    <x-slot:title>
        Data Keluhan
        </x-slot>
        <x-slot:contentNavigation>
            <div class="content-navigation-active">List Data</div>
            </x-slot>
            <div class="flex justify-between items-center">
                <form action="{{ route('keluhans.index') }}" method="GET">
                    @csrf
                    <div class="flex items-center mt-2">
                        <input type="text" class="search-box" name="searchKeluhan" />
                        <button class="secondary-button-outline">Cari</button>
                    </div>
                </form>
                <a class="primary-button-outline" href="{{ route('keluhans.create') }}">Tambah Data</a>
            </div>
            <table class="min-w-full text-left text-sm font-light">
                <thead class="border-b border-primaryContainer font-medium">
                    <tr>
                        <th scope="col" class="pt-3 pb-2 text-lg">Username</th>
                        <th scope="col" class="pt-3 pb-2 text-lg">Nama Pelanggan</th>
                        <th scope="col" class="pt-3 pb-2 text-lg">Keluhan</th>
                        <th scope="col" class="pt-3 pb-2 text-lg">Diagnosa</th>
                        <th scope="col" class="pt-3 pb-2 text-lg">Tanggal Konsultasi</th>
                        <th scope="col" class="pt-3 pb-2 text-lg">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($keluhans as $keluhan)
                    <tr class="transition duration-300 ease-in-out hover:bg-primaryContainer">
                        <td class="whitespace-nowrap py-2">{{ $keluhan->pelanggan->username }}</td>
                        <td class="whitespace-nowrap py-2">{{ $keluhan->pelanggan->nama_lengkap }}</td>
                        <td class="whitespace-nowrap py-2">{{ $keluhan->keluhan }}</td>
                        <td class="whitespace-nowrap py-2">{{ $keluhan->diagnosa }}</td>
                        <td class="whitespace-nowrap py-2">{{ $keluhan->created_at }}</td>
                        <td class="whitespace-nowrap py-2">
                            <a type="button" href="{{ route('keluhans.show', $keluhan->id) }}" class="py-1 px-3 mx-1 rounded-md secondary-button-pick">Detail</a>
                        </td>
                    </tr>
                    @empty
                    <div class="flex justify-center">
                        Data Keluhan belum tersedia
                    </div>
                    @endforelse
                </tbody>
            </table>
</x-layout>