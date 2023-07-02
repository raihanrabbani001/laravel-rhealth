<x-layout>
    <x-slot:title>
        Data Obat
        </x-slot>
        <x-slot:modal>
            </x-slot>
            <x-slot:contentNavigation>
                <a class="nav-item content-navigation-link" href="{{ route('obats.index') }}">List Data</a>
                <span class="mx-2">></span>
                <div class="content-navigation-active">Edit Data</div>
                </x-slot>
                <form action="{{ route('obats.update', $obat->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <label for="nama">Nama Obat</label>
                    <input type="text" class="input-text" name="nama" value="{{ $obat->nama }}">
                    <label for="dosis">Dosis Obat</label>
                    <input type="text" class="input-text" name="dosis" value="{{ $obat->dosis }}">
                    <label for="jenis">Jenis Obat</label>
                    <input type="text" class="input-text" name="jenis" value="{{ $obat->jenis }}">
                    <label for="efekSamping">Efek Samping Obat</label>
                    <input type="text" class="input-text" name="efekSamping" value="{{ $obat->efek_samping }}">
                    <button type="submit" class="primary-button mt-5">Simpan</button>
                </form>
</x-layout>