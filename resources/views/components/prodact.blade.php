<div class="box">
    <a href="#" class="fas fa-heart"></a>
    <a href="/prodact/{{ $id }}" class="fas fa-eye"></a>
    <img src="{{ $image }}" alt="">
    <h3>{{$text}}</h3>
    <span>${{ $price }}</span>
    <br>
    @if ($cart)
        <button data-id="{{ $id }}" class="btn remove_cart">remove from cart</button>
    @else
        <button data-id="{{ $id }}" class="btn add_cart">add to cart</button>
    @endif
    
</div>