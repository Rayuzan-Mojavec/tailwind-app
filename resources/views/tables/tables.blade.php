@extends('core.core')

@section('main-part')
    <div>
        <div class="justify-center flex  mb-5 mt-32">
            <p class="text-center text-lg flex items-center dark:text-white transition duration-500">Cari:
            <p>
            <form action="{{ route('tables.index') }}" class="inline-flex ml-5">
                <input type="text" id="search" name="search" value="{{ request('search') }}" class="form-input rounded-l-xl border-slate-700 focus:border-slate-700 dark:border-slate-300 transition duration-500 focus:ring-transparent">
                <button class="px-5 rounded-r-xl bg-slate-400" type="submit">
                    <i class="bi bi-search text-lg"></i>
                </button>
            </form>
        </div>
        <div class="shadow-lg mt-5 mx-10 flex-wrap justify-center items-center overflow-x-auto rounded-2xl">
            <table id="example" class="w-full text-sm rounded-2xl text-black dark:text-white table-auto mx-auto">
                <thead class="text-md  bg-gray-100 dark:bg-slate-500 transition duration-500">
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
                    <tbody class="text-base dark:bg-slate-700  transition duration-500">
                        @foreach ($people as $person)
                            <tr class="border">
                                <td class="py-4 px-6 border">{{ $person->ssn }}</td>
                                <td class="py-4 px-6 border">{{ $person->namae }}</td>
                                <td class="py-4 px-6 border">
                                    <a class="p-5" href="{{ route('tables.edit', $person->ssn) }}">
                                        Edit
                                    </a>
                                </td>
                                <td class="py-4 px-6 border">{{ $person->rerijyon }}</td>
                                <td class="py-4 px-6 border">{{ $person->address }}</td>
                                <td class="py-4 px-6 border">{{ $person->date() }}, {{ $person->age() }} Tahun</td>
                            </tr>
                        @endforeach
                    </tbody>
                @else
                    <tbody class="text-base dark:bg-slate-700  transition duration-500">
                        <tr class="border">
                            <td colspan="6" class="py-4 px-6 border text-center text-lg">Teu aya asu</td>
                        </tr>
                    </tbody>
                @endif
            </table>

        </div>

        <div class="mt-10 mb-32 mx-10 text-black dark:text-white">
            {{ $people->links() }}
        </div>

    </div>
@endsection
