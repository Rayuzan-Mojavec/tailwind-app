@extends('core.core', ['title' => '403'])

@section('main-part')
    <div class="my-52 grid text-center grid-cols-1 justify-center">
        <h1 class="text-9xl mb-4 text-center">403</h1>
        <h1 class="text-4xl text-center">Lu kalo dibilangin ga boleh ya ga boleh!</h1>
    </div>
@endsection

@section('message', __($exception->getMessage() ?: 'Forbidden'))
