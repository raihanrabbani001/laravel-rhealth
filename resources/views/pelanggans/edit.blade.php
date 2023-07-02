<x-layout>
    <x-slot:title>
        Data Pelanggan
        </x-slot>
        <x-slot:modal>
            </x-slot>
            <x-slot:contentNavigation>
                <a class="nav-item content-navigation-link" href="{{ route('pelanggans.index') }}">List Data</a>
                <span class="mx-2">></span>
                <div class="content-navigation-active">Edit Data</div>
                </x-slot>
                <form action="{{ route('pelanggans.update', $pelanggan->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="username">Username</label>
                            <input type="text" class="input-text" name="username" value="{{ $pelanggan->username }}">
                            <label for="namaLengkap">Nama Lengkap</label>
                            <input type="text" class="input-text" name="namaLengkap" value="{{ $pelanggan->nama_lengkap }}">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="input-text" name="alamat" value="{{ $pelanggan->alamat }}">
                        </div>
                        <div>
                            <label for="umur">Umur</label>
                            <input type="text" class="input-text" name="umur" value="{{ $pelanggan->umur }}">
                            <label for="jenisKelamin">Jenis Kelamin</label>
                            <input type="text" class="input-text" name="jenisKelamin" value="{{ $pelanggan->jenis_kelamin }}">
                        </div>
                    </div>
                    <button type="submit" class="primary-button mt-5">Simpan</button>
                </form>
</x-layout>