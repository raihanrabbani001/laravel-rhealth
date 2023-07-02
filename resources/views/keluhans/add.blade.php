<x-layout>
    <x-slot:title>
        Data Keluhan
        </x-slot>
        <x-slot:contentNavigation>
            <a class="nav-item content-navigation-link" href="{{ route('keluhans.index') }}">List Data</a>
            <span class="mx-2">></span>
            <a class="nav-item content-navigation-link" href="{{ route('keluhans.create') }}">Tambah Data</a>
            <span class="mx-2">></span>
            <div class="content-navigation-active">Pilih obat</div>
            </x-slot>

            <div class="grid grid-cols-2">
                <div class="me-5">
                    <table class="min-w-full text-left text-sm font-light">
                        <thead class="border-b border-primaryContainer font-medium">
                            <tr>
                                <th scope="col" class="pt-3 pb-2 text-lg">Nama Obat</th>
                                <th scope="col" class="pt-3 pb-2 text-lg">Dosis Obat</th>
                                <th scope="col" class="pt-3 pb-2 text-lg">Dosis Penggunaan</th>
                                <th scope="col" class="pt-3 pb-2 text-lg ps-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <form action="{{ route('keluhans.create.add.obat.simpan') }}" method="POST">
                                @csrf
                                @foreach($informasiObats as $informasiObat)
                                <tr class="transition duration-300 ease-in-out hover:bg-primaryContainer">
                                    <td class="whitespace-nowrap">{{ $informasiObat->obat->nama }}</td>
                                    <td class="whitespace-nowrap">{{ $informasiObat->obat->dosis }}</td>
                                    <td class="whitespace-nowrap">
                                        <input type="text" name="dosisPenggunaan[]" class="input-text" value="{{ $informasiObat->dosis_penggunaan }}">
                                        <input type="hidden" name="informasiObatId[]" value="{{ $informasiObat->id }}">
                                    </td>
                                    <td class="whitespace-nowrap">
                                        <button class="py-1 px-3 ms-2 rounded-md bg-red-500 text-white hover:bg-red-600">Hapus</button>
                                    </td>
                                </tr>
                                @endforeach
                                <button type="submit" class="primary-button mt-5">Simpan</button>
                            </form>
                        </tbody>
                    </table>
                </div>
                <div>
                    <form action="{{ route('keluhans.create.add') }}" method="GET">
                        @csrf
                        <div class="flex items-center mt-2">
                            <input type="text" class="search-box" name="searchObat" />
                            <button class="secondary-button-outline">Cari</button>
                        </div>
                    </form>
                    <table class="min-w-full text-left text-sm font-light">
                        <thead class="border-b border-primaryContainer font-medium">
                            <tr>
                                <th scope="col" class="pt-3 pb-2 text-lg">Nama Obat</th>
                                <th scope="col" class="pt-3 pb-2 text-lg">Dosis Obat</th>
                                <th scope="col" class="pt-3 pb-2 text-lg">Jenis</th>
                                <th scope="col" class="pt-3 pb-2 text-lg">Efek Samping</th>
                                <th scope="col" class="pt-3 pb-2 text-lg">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($obats as $obat)
                            <tr class="transition duration-300 ease-in-out hover:bg-primaryContainer">
                                <td class="whitespace-nowrap py-2">{{ $obat->nama }}</td>
                                <td class="whitespace-nowrap py-2">{{ $obat->dosis }}</td>
                                <td class="whitespace-nowrap py-2">{{ $obat->jenis }}</td>
                                <td class="whitespace-nowrap py-2">{{ $obat->efek_samping }}</td>
                                <td class="whitespace-nowrap py-2">
                                    <a type="button" href="{{ route('keluhans.create.add.obat', $obat->id) }}" class="py-1 px-3 mx-1 rounded-md secondary-button-pick">Pilih</a>
                                </td>
                            </tr>
                            @empty
                            <div class="flex justify-center">
                                Data obat belum tersedia
                            </div>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
</x-layout>