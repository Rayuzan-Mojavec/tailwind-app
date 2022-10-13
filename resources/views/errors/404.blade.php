@extends('core.core', ['title' => '404'])

@section('main-part')
    <div class="my-36 mx-36 grid py-16 text-center bg-slate-300 grid-cols-1 justify-center">
        <h1 class="text-9xl mb-4 text-center font-google">404</h1>
        <h1 class="text-4xl text-center">Ga ada asu</h1>
    </div>
@endsection

@section('message', __('Not Found'))
