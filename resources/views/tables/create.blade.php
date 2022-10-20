@extends('core.core')

@section('main-part')
    <div class="container w-3/5 bg-white shadow-lg my-32 px-8 py-16 mx-auto rounded-xl">
        <form action="{{ route('tables.store') }}" method="POST">
            @csrf
            <div class="flex flex-col justify-center mb-8">
                <label for="ssn" class="text-lg">SSN</label>
                <input type="text" class="form-input rounded-xl" id="ssn" name="ssn" value="{{ old('ssn') }}">
                @error('ssn')
                    <div class="text-red-500 mt-1">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="flex flex-col justify-center mb-8">
                <label for="namae" class="text-lg">Namae</label>
                <input type="text" class="form-input rounded-xl" id="namae" name="namae" value="{{ old('namae') }}">
                @error('namae')
                    <div class="text-red-500 mt-1">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="flex flex-col justify-center mb-8">
                <label for="gender" class="text-lg">Gender</label>
                <select class="form-input rounded-xl" id="gender" name="gender">
                    @foreach ($gender as $jendah)
                        @if (old('gender') == $jendah)
                            <option value="{{ $jendah }}" selected>{{ $jendah }}</option>
                        @else
                            <option value="{{ $jendah }}">{{ $jendah }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="flex flex-col justify-center mb-8">
                <label for="rerijyon" class="text-lg">Rerijyon</label>
                <select class="form-input rounded-xl" id="rerijyon" name="rerijyon">
                    @foreach ($religion as $rerijyon)
                        @if (old('rerijyon') == $rerijyon)
                            <option value="{{ $rerijyon }}" selected>{{ $rerijyon }}</option>
                        @else
                            <option value="{{ $rerijyon }}">{{ $rerijyon }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="flex flex-col justify-center mb-8">
                <label for="address" class="text-lg">Address</label>
                <input type="text" class="form-input rounded-xl" id="address" name="address" value="{{ old('address') }}">
                @error('address')
                    <div class="text-red-500 mt-1">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="flex flex-col justify-center mb-8">
                <label for="birth_date" class="text-lg">Birth Date</label>
                <input type="date" class="form-input rounded-xl" id="birth_date" name="birth_date" value="{{ old('birth_date') }}">
                @error('birth_date')
                    <div class="text-red-500 mt-1">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="flex justify-center mb-8">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-xl">Submit</button>
            </div>
        </form>
    </div>
@endsection
