@extends('layout.layout')
@section('content')
<section class="dishes" style="margin: 5%; text-align:center;" id="dishes">
    <img src="{{ asset($prodact['image']) }}">
    <br>
    <h1>{{ $prodact['name'] }}</h1>
    <h3>{{ $prodact['price'] }}</h3>
    <br>
    <h2>Details</h2>
    <h3>{{ $prodact['details'] }}</h3>
    <button class="but">Buy Now</button>
</section>
@endsection