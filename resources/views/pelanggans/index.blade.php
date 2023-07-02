<x-layout>
    <x-slot:title>
        Data Pelanggan
        </x-slot>
        <x-slot:modal>
            @foreach ($pelanggans as $pelanggan)
            <div id="hapuspelanggan{{ $pelanggan->id }}" tabindex="-1" aria-hidden="true" class="my-modal animate__animated animate__fadeInUp animate__faster">
                <div class="relative w-full max-w-2xl max-h-full">
                    <div class="relative rounded-lg shadow bg-gray-700">
                        <div class="p-3 text-white flex-col">
                            <div class="px-5 py-10">
                                Apakah anda yakin akan menghapus pelanggan {{ $pelanggan->nama_lengkap }} ?
                            </div>
                            <div class="flex items-center p-6 space-x-2 border-t rounded-b border-gray-600">
                                <form action=" {{ route('pelanggans.destroy', $pelanggan->id) }} " method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" data-modal-hide="hapuspelanggan{{ $pelanggan->id }}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Ya</button>
                                </form>
                                <button data-modal-hide="hapuspelanggan{{ $pelanggan->id }}" type="button" class="text-white bg-gray hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 ">Kembali</button>
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
                    <form action="{{ route('pelanggans.index') }}" method="GET">
                        @csrf
                        <div class="flex items-center mt-2">
                            <input type="text" class="search-box" name="searchPelanggan" />
                            <button class="secondary-button-outline">Cari</button>
                        </div>
                    </form>
                    <a class="primary-button-outline" href="{{ route('pelanggans.create') }}">Tambah Data</a>
                </div>
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
                                <a type="button" href="{{ route('pelanggans.edit', $pelanggan->id) }}" class="py-1 px-3 mx-1 rounded-md secondary-button-pick">Edit</a>
                                <button type="button" data-modal-target="hapuspelanggan{{ $pelanggan->id }}" data-modal-toggle="hapuspelanggan{{ $pelanggan->id }}" class="py-1 px-3 mx-1 rounded-md secondary-button-pick">Hapus</button>
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