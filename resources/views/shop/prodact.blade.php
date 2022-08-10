@extends('layout.layout')
@section('admin',auth()->user()->abilities == "admin")
@section('content')
<section class="dishes" style="margin: 5%; text-align:center;" id="dishes">
    <img src="{{ asset($prodact['image']) }}">
    <br>
    <h1>{{ $prodact['name'] }}</h1>
    <h3>{{ $prodact['price'] }}</h3>
    <br>
    <h2>Details</h2>
    <h3>{{ $prodact['details'] }}</h3>
    <form method="post" action="{{ route('create.order') }}">
        @csrf
        <input type="hidden" name="id_prodact" value="{{ $prodact['id'] }}">
        <button class="but">Buy Now</button>
        <div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <h4 style="color:red">{{ $error }}</h4>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </form>
</section>
@endsection