
function add_cart() {
    var id = $(this).data("id");
    var el = $(this);
    $.ajax({
        url: "/add_cart",
        method: "POST",
        data: {
            id_prodact: id,
            _token: $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data) {
            el.removeClass("add_cart");
            el.addClass("remove_cart");
            el.html("remove from cart");
            el.click(remove_cart);
        },
    });
}
function remove_cart() {
    var id = $(this).data("id");
    var el = $(this);
    $.ajax({
        url: "/remove_cart",
        method: "POST",
        data: {
            id_prodact: id,
            _token: $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data) {
            el.removeClass("remove_cart");
            el.addClass("add_cart");
            el.html("add to cart");
            el.click(add_cart);
        },
    });
}

$(".add_cart").click(add_cart);
$(".remove_cart").click(remove_cart);
