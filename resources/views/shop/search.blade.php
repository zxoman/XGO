@extends('layout.layout')
@section('admin',auth()->user()->abilities == "admin")
@section('content')
    <section class="dishes" id="dishes">
        <h3 class="sub-heading"> search </h3>
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