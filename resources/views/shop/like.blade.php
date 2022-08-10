@extends('layout.layout')
@section('admin',auth()->user()->abilities == "admin")
@section('content')
    <section class="dishes" id="dishes">
        <h3 class="sub-heading"> Liked </h3>
        <div class="box-container">
            @foreach ($likes_prodacts as $prodact)
                @php ($cart = false)
                @if (in_array($prodact->id, $cart_prodacts))
                    @php ($cart = true)
                @endif
                <x-prodact text="{{ $prodact['name'] }}" like="{{ true }}" cart="{{ $cart }}" id="{{ $prodact['id'] }}" image="{{ asset($prodact['image']) }}" price="{{ $prodact['price'] }}"/>
            @endforeach
        </div>
    </section>
@endsection