<x-layout>
    <x-slot:title>
        Data Obat
        </x-slot>
        <x-slot:modal>
            </x-slot>
            <x-slot:contentNavigation>
                <a class="nav-item content-navigation-link" href="{{ route('obats.index') }}">List Data</a>
                <span class="mx-2">></span>
                <div class="content-navigation-active">Tambah Data</div>
                </x-slot>
                <form action="{{ route('obats.store') }}" method="POST">
                    @csrf
                    <label for="nama">Nama Obat</label>
                    <input type="text" class="input-text" name="nama">
                    <label for="dosis">Dosis Obat</label>
                    <input type="text" class="input-text" name="dosis">
                    <label for="jenis">Jenis Obat</label>
                    <input type="text" class="input-text" name="jenis">
                    <label for="efekSamping">Efek Samping Obat</label>
                    <input type="text" class="input-text" name="efekSamping">
                    <button type="submit" class="primary-button mt-5">Tambah Data</button>
                </form>

</x-layout>