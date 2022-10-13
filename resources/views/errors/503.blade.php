@extends('core.core', ['title' => '503'])

@section('main-part')
    <div class="my-64 p-64 flex justify-center">
        <h1 class="text-4xl">Lagi ga bisa bang</h1>
    </div>
@endsection

@section('message', __('Service Unavailable'))
