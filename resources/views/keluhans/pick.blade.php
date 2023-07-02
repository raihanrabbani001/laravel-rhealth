<x-layout>
    <x-slot:title>
        Data Keluhan
        </x-slot>   
        <x-slot:contentNavigation>
                <a class="nav-item content-navigation-link" href="{{ route('keluhans.index') }}">List Data</a>
                <span class="mx-2">></span>
                <a class="nav-item content-navigation-link" href="{{ route('keluhans.create') }}">Tambah Data</a>
                <span class="mx-2">></span>
                <div class="content-navigation-active">Pilih Pelanggan</div>
                </x-slot>
                <form action="{{ route('keluhans.create.pick') }}" method="GET">
                        @csrf
                        <div class="flex items-center mt-2">
                            <input type="text" class="search-box" name="searchPelanggan" />
                            <button class="secondary-button-outline">Cari</button>
                        </div>
                    </form>
                <table class="min-w-full text-left text-sm font-light">
                    <thead class="border-b border-primaryContainer font-medium">
                        <tr>
                            <th scope="col" class="pt-3 pb-2 text-lg">Username</th>
                            <th scope="col" class="pt-3 pb-2 text-lg">Nama Lengkap</th>
                            <th scope="col" class="pt-3 pb-2 text-lg">Alamat</th>
                            <th scope="col" class="pt-3 pb-2 text-lg">Umur</th>
                            <th scope="col" class="pt-3 pb-2 text-lg">Jenis Kelamin</th>
                            <th scope="col" class="pt-3 pb-2 text-lg">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pelanggans as $pelanggan)
                        <tr class="transition duration-300 ease-in-out hover:bg-primaryContainer">
                            <td class="whitespace-nowrap py-2">{{ $pelanggan->username }}</td>
                            <td class="whitespace-nowrap py-2">{{ $pelanggan->nama_lengkap }}</td>
                            <td class="whitespace-nowrap py-2">{{ $pelanggan->alamat }}</td>
                            <td class="whitespace-nowrap py-2">{{ $pelanggan->umur }}</td>
                            <td class="whitespace-nowrap py-2">{{ $pelanggan->jenis_kelamin }}</td>
                            <td class="whitespace-nowrap py-2">
                            <a type="button" href="{{ route('keluhans.create.set', $pelanggan->id) }}" class="py-1 px-3 mx-1 rounded-md secondary-button-pick">Pilih</a>
                            </td>
                        </tr>
                        @empty
                        <div class="flex justify-center">
                            Data Pelanggan belum tersedia
                        </div>
                        @endforelse
                    </tbody>
                </table>
</x-layout>