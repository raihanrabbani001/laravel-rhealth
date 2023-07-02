<x-layout>
    <x-slot:title>
        Data Obat
        </x-slot>
        <x-slot:modal>
            @foreach ($obats as $obat)
            <div id="hapusObat{{ $obat->id }}" tabindex="-1" aria-hidden="true" class="my-modal animate__animated animate__fadeInUp animate__faster">
                <div class="relative w-full max-w-2xl max-h-full">
                    <div class="relative rounded-lg shadow bg-gray-700">
                        <div class="p-3 text-white flex-col">
                            <div class="px-5 py-10">
                                Apakah anda yakin akan menghapus obat {{ $obat->nama }} ?
                            </div>
                            <div class="flex items-center p-6 space-x-2 border-t rounded-b border-gray-600">
                                <form action=" {{ route('obats.destroy', $obat->id) }} " method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" data-modal-hide="hapusObat{{ $obat->id }}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Ya</button>
                                </form>
                                <button data-modal-hide="hapusObat{{ $obat->id }}" type="button" class="text-white bg-gray hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 ">Kembali</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            </x-slot>
            <x-slot:contentNavigation>
                <div class="content-navigation-active">List Data</div>
                </x-slot>
                <div class="flex justify-between items-center">
                    <form action="{{ route('obats.index') }}" method="GET">
                        @csrf
                        <div class="flex items-center mt-2">
                            <input type="text" class="search-box" name="searchObat" />
                            <button class="secondary-button-outline">Cari</button>
                        </div>
                    </form>
                    <a class="primary-button-outline" href="{{ route('obats.create') }}">Tambah Data</a>
                </div>
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
                                <a type="button" href="{{ route('obats.edit', $obat->id) }}" class="py-1 px-3 mx-1 rounded-md secondary-button-pick">Edit</a>
                                <button type="button" data-modal-target="hapusObat{{ $obat->id }}" data-modal-toggle="hapusObat{{ $obat->id }}" class="py-1 px-3 mx-1 rounded-md secondary-button-pick">Hapus</button>
                            </td>
                        </tr>
                        @empty
                        <div class="flex justify-center">
                            Data Obat belum tersedia
                        </div>
                        @endforelse
                    </tbody>
                </table>
</x-layout>