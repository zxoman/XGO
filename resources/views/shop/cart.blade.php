@extends('layout.layout')
@section('admin',auth()->user()->abilities == "admin")
@section('content')
    <section class="dishes" id="dishes">
        <h1 class="heading"> Cart </h1>
        <div class="box-container">
            @foreach ($cart_prodacts as $prodact)
                @php ($like = false)
                @if (in_array($prodact->id, $likes_prodacts))
                    @php ($like = true)
                @endif
                <x-prodact text="{{ $prodact['name'] }}" like="{{ $like }}" cart="{{ true }}" id="{{ $prodact['id'] }}" image="{{ asset($prodact['image']) }}" price="{{ $prodact['price'] }}"/>
            @endforeach
        </div>
    </section>
@endsection