@extends('core.core', ['title' => '429'])

@section('main-part')
    <div class="my-64 p-64 flex justify-center">
        <h1 class="text-4xl">Lu mintanya banyak amat dah, sabar napa</h1>
    </div>
@endsection

@section('message', __('Too Many Requests'))