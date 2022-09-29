@extends('core.core')

@section('main-part')
    <div class="mt-32 mx-10 flex justify-center overflow-x-auto relative  rounded-2xl">
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
            <tbody class="text-base dark:bg-slate-700">
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
        </table>

    </div>

    <div class="mt-10 mb-32 mx-10 text-black dark:text-white">
        {{ $people->links() }}
    </div>


@endsection
