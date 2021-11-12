<x-layoutdashboar>
    <table class="table-auto">
        <thead>
            <tr class="text-md font-semibold tracking-wide text-left text-white  bg-indigo-500 uppercase border-b border-gray-600">
                <th class="px-4 py-3"></th>
                <th class="px-4 py-3">Binaan</th>
                <th class="px-4 py-3">Koperasi</th>
                <th class="px-4 py-3">NIK</th>
                <th class="px-4 py-3">No Badan Hukum</th>
                <th class="px-4 py-3">Alamat</th>
                <th class="px-4 py-3">Kualifikasi</th>
                <th class="px-4 py-3">Predikat</th>
            </tr>
        </thead>
        <tbody class="bg-white">
            @foreach ($pemeringkatan as $item)
            <tr class="text-gray-700">
                <td class="px-4 py-3 border"><a class="bg-indigo-500 hover:bg-indigo-400 text-white font-bold py-2 px-4 border-b-4 border-indigo-700 hover:border-indigo-500 rounded" role="button" href="">Detail</a></td>
                <td class="px-4 py-3 border">{{$item->binaan}}</td>
                <td class="px-4 py-3 border">{{$item->koperasi}}</td>
                <td class="px-4 py-3 border">{{$item->idkop}}</td>
                <td class="px-4 py-3 border">{{$item->no_badan_hukum}}</td>
                <td class="px-4 py-3 border">{{$item->alamat}}</td>
                <td class="px-4 py-3 border">{{$item->kualifikasi}}</td>
                <td class="px-4 py-3 border">{{$item->predikat}}</td>
            </tr>
            @endforeach
        </tbody>

    </table>
    <div class="d-felx justify-content-center">
        <ul class="flex">
            {{$pemeringkatan->links()}}
        </ul>
    </div>
</x-layoutdashboar>