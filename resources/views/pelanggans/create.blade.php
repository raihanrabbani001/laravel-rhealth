<x-layout>
    <x-slot:title>
        Data Pelanggan
        </x-slot>
        <x-slot:modal>
            </x-slot>
            <x-slot:contentNavigation>
                <a class="nav-item content-navigation-link" href="{{ route('pelanggans.index') }}">List Data</a>
                <span class="mx-2">></span>
                <div class="content-navigation-active">Tambah Data</div>
                </x-slot>
                <form action="{{ route('pelanggans.store') }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="username">Username</label>
                            <input type="text" class="input-text" name="username">
                            <label for="namaLengkap">Nama Lengkap</label>
                            <input type="text" class="input-text" name="namaLengkap">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="input-text" name="alamat">
                        </div>
                        <div>
                            <label for="umur">Umur</label>
                            <input type="text" class="input-text" name="umur">
                            <label for="jenisKelamin">Jenis Kelamin</label>
                            <input type="text" class="input-text" name="jenisKelamin">
                        </div>
                    </div>
                    <button type="submit" class="primary-button mt-5">Tambah Data</button>
                </form>
</x-layout>