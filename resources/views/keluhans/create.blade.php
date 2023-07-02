<x-layout>
    <x-slot:title>
        Data Keluhan
        </x-slot>
        <x-slot:contentNavigation>
            <a class="nav-item content-navigation-link" href="{{ route('keluhans.index') }}">List Data</a>
            <span class="mx-2">></span>
            <div class="content-navigation-active">Tambah Data</div>
            </x-slot>
            <form action="{{ route('keluhans.store') }}" method="POST">
                @csrf
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="namaLengkap">Nama Lengkap</label>
                        <div class="flex items-center">
                            <input type="text" class="input-text" name="namaLengkap" value="{{ session('namaPelanggan') }}" readonly>
                            <a type="button" href="{{ route('keluhans.create.pick') }}" class="secondary-button-pick" style="margin-left: -2.5rem;">
                                Pilih
                            </a>
                        </div>
                        <label for="keluhan">Keluhan</label>
                        <input type="text" class="input-text" name="keluhan">
                        <label for="diagnosa">Diagnosa</label>
                        <input type="text" class="input-text" name="diagnosa">
                    </div>
                    <div>
                        <label for="saran">Saran</label>
                        <input type="text" class="input-text" name="saran">
                        <label for="penanggungJawab">Penanggung Jawab</label>
                        <select id="penanggungJawab" name="penanggungJawab" type="text" class="input-text">
                            @foreach($ttks as $ttk)
                            <option value="{{ $ttk->id }}">{{ $ttk->nama_lengkap }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button type="submit" class="primary-button-outline mt-5">Selanjutnya</button>
            </form>
</x-layout>