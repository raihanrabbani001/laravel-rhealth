<x-layout>
    <x-slot:title>
        Data Keluhan
        </x-slot>
        <x-slot:modal>
            </x-slot>
            <x-slot:contentNavigation>
                <a class="nav-item content-navigation-link" href="{{ route('keluhans.index') }}">List Data</a>
                <span class="mx-2">></span>
                <div class="content-navigation-active">Detail Keluhan</div>
                </x-slot>
                <div class="relative rounded-lg shadow" style="margin-top: -2rem;">
                    <div class="flex items-center justify-between p-4 border-b rounded-t border-gray-600">
                        <div>
                            <div class="text-4xl font-bold pe-2">{{ $keluhan->pelanggan->nama_lengkap }}</div>
                            <div class="font-semibold text-lg">{{ $keluhan->pelanggan->username }}</div>
                        </div>
                        <div>
                            <div class="text-sm">{{ $keluhan->created_at }}</div>
                            <div class="text-sm">{{ $keluhan->ttk->nama_lengkap }}</div>
                        </div>
                    </div>
                    <div class="p-3 text-white flex-col">
                        <div class="flex px-5">
                            <div class="py-2 pe-4 rounded-lg">
                            {!! QrCode::size(200)->generate('http://'.'192.168.0.121'.'/clients/'.$keluhan->pelanggan->username); !!}
                            </div>
                            <div class="flex-col">
                                <div class="mt-2 font-semibold bg-primaryContainer py-1 px-2 rounded-lg inline-block text-sm">Keluhan</div>
                                <div class="mx-1 text-sm py-1 rounded-lg">{{ $keluhan->keluhan }}</div>
                                <div class="mt-2 font-semibold bg-primaryContainer py-1 px-2 rounded-lg inline-block text-sm">Diagnosa</div>
                                <div class="mx-1 text-sm py-1 rounded-lg">{{ $keluhan->diagnosa }}</div>
                                <div class="mt-2 font-semibold bg-primaryContainer py-1 px-2 rounded-lg inline-block text-sm">Saran</div>
                                <div class="mx-1 text-sm py-1 rounded-lg">{{ $keluhan->saran }}</div>
                            </div>
                        </div>
                        <table class="min-w-full text-left text-sm font-light px-5">
                            <thead class="border-b border-primaryContainer font-medium">
                                <tr>
                                    <th scope="col" class="pt-3 pb-2 text-lg">Obat</th>
                                    <th scope="col" class="pt-3 pb-2 text-lg">Dosis Penggunaan</th>
                                    <th scope="col" class="pt-3 pb-2 text-lg">Efek Samping</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($informasiObats as $informasiObat)
                                <tr class="transition duration-300 ease-in-out hover:bg-primaryContainer">
                                    <td class="whitespace-nowrap py-2">{{ $informasiObat->obat->nama }} {{ $informasiObat->obat->dosis }}</td>
                                    <td class="whitespace-nowrap py-2">{{ $informasiObat->dosis_penggunaan }}</td>
                                    <td class="whitespace-nowrap py-2">{{ $informasiObat->obat->efek_samping }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
</x-layout>