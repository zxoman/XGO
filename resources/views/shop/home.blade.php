@extends('layout.layout')
@section('admin',auth()->user()->abilities == "admin")
@section('content')
    <section class="home" id="home">
        <div class="swiper-container home-slider">
            <div class="swiper-wrapper wrapper">
                <x-special text="Laptop" details="Yes You Need This" image="prodact.jpg"/>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <section class="dishes" id="dishes">
        <h3 class="sub-heading"> Prodacts </h3>
        <div class="box-container">
            @foreach ($prodacts as $prodact)            
                @php ($cart = false)
                @if (in_array($prodact->id, $cart_prodacts))
                    @php ($cart = true)
                @endif
                @php ($like = false)
                @if (in_array($prodact->id, $likes_prodacts))
                    @php ($like = true)
                @endif
                <x-prodact text="{{ $prodact['name'] }}" like="{{ $like }}" cart="{{ $cart }}" id="{{ $prodact['id'] }}" image="{{ asset($prodact['image']) }}" price="{{ $prodact['price'] }}"/>
            @endforeach
        </div>
    </section>
@endsection