@extends('core.core')

@section('main-part')
    <div class="my-32 mx-auto  rounded-xl px-16">
        <table class="w-full text-sm overflow-auto  text:black dark:text-white rounded-xl mx-auto">
            <thead class="text-md bg-gray-100 dark:bg-slate-500 text-basic font-pop">
                <tr>
                    <th class="border py-3 px-6">ID番号</th>
                    <th class="border py-3 px-6">名前</th>
                    <th class="border py-3 px-6">住所</th>
                    <th class="border py-3 px-6">生年月日</th>
                </tr>
            </thead>
            <tbody class="text-base dark:bg-slate-700">
                @foreach ($people as $person)
                <tr class="border">
                    <td class="py-4 px-6 border">{{ $person->ssn }}</td>
                    <td class="py-4 px-6 border">{{ $person->namae }}</td>
                    <td class="py-4 px-6 border">{{ $person->address }}</td>
                    <td class="py-4 px-6 border">{{ $person->birth_date }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-10 text-black dark:text-white">
            {{ $people->links() }}
        </div>
    </div>

@endsection
