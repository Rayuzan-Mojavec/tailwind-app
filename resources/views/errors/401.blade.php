@extends('core.core', ['title' => '401'])

@section('main-part')
    <div class="my-64 p-64 flex justify-center">
        <h1 class="text-8xl">Lu itu mencurigakan, ngulang sana</h1>
        <h1 class="text-4xl">Lu itu mencurigakan, ngulang sana</h1>
    </div>
@endsection

@section('message', __('Unauthorized'))
