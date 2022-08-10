@extends('layout.layout')
@section('admin',auth()->user()->abilities == "admin")
@section('content')
    <section class="dishes" id="dishes">
        <h3 class="sub-heading"> our dishes </h3>
        <h1 class="heading"> popular dishes </h1>
        <div class="box-container">
            <x-prodact text="food" image="prodact.jpg" price="20.99"/>
            <x-prodact text="food" image="prodact.jpg" price="20.99"/>
            <x-prodact text="food" image="prodact.jpg" price="20.99"/>
            <x-prodact text="food" image="prodact.jpg" price="20.99"/>

        </div>
    </section>
@endsection