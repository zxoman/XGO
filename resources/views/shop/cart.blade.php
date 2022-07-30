@extends('layout.layout')
@section('content')

    <section class="dishes" id="dishes">
        <h1 class="heading"> Cart </h1>
        <div class="box-container">
            @foreach ($cart_prodacts as $prodact)
                <x-prodact text="{{ $prodact['name'] }}" cart="{{ true }}" id="{{ $prodact['id'] }}" image="{{ asset($prodact['image']) }}" price="{{ $prodact['price'] }}"/>
            @endforeach
        </div>
    </section>
@endsection