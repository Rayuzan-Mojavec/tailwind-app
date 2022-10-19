@extends('core.core')

@section('main-part')
    <div class="mt-32 mx-10 flex-wrap justify-center items-center overflow-x-auto   rounded-2xl">
        <div class="search justify-center flex mb-5 mt-1">
            Cari:
            <form action="{{ route('tables.index') }}" class="inline-flex ml-5">
                    <input type="text" id="search" name="search" class="form-input rounded-l-xl">
                    <button class="px-5 rounded-r-xl bg-slate-400" type="submit">Cari</button>
            </form>
        </div>
        <table id="example" class="w-full text-sm rounded-2xl text-black dark:text-white table-auto mx-auto">
            <thead class="text-md  bg-gray-100 dark:bg-slate-500">
                <tr>
                    <th class="border py-3 px-6">ID番号</th>
                    <th class="border py-3 px-6">名前</th>
                    <th class="border py-3 px-6">性別</th>
                    <th class="border py-3 px-6">宗教</th>
                    <th class="border py-3 px-6">住所</th>
                    <th class="border py-3 px-6">生年月日</th>
                </tr>
            </thead>
            @if ($people->count())
                <tbody class="text-base dark:bg-slate-700 alldata">
                    @foreach ($people as $person)
                        <tr class="border">
                            <td class="py-4 px-6 border">{{ $person->ssn }}</td>
                            <td class="py-4 px-6 border">{{ $person->namae }}</td>
                            <td class="py-4 px-6 border">{{ $person->gender }}</td>
                            <td class="py-4 px-6 border">{{ $person->rerijyon }}</td>
                            <td class="py-4 px-6 border">{{ $person->address }}</td>
                            <td class="py-4 px-6 border">{{ $person->date() }}, {{ $person->age() }} Tahun</td>
                        </tr>
                    @endforeach
                </tbody>
            @else
                <p class="text-center">Teu aya woi</p>
            @endif
        </table>

    </div>

    <div class="mt-10 mb-32 mx-10 text-black dark:text-white">
        {{ $people->links() }}
    </div>


@endsection
