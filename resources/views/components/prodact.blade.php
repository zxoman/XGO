<div class="box">
    @if ($like)
        <button data-id="{{ $id }}" class="fas fa-heart remove_like gw"></button>
    @else
        <button data-id="{{ $id }}" class="fas fa-heart add_like"></button>
    @endif
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