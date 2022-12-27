$(document).ready(function() {
    $( '.btn-submit' ).click(function(e) {
        e.preventDefault();
        var _token = $("input[name='_token']").val();
        var id = $("input[name='id']").val();
        var name = $("input[name='name']").val();
        var image = $("input[name='image']").val();
        var price = $("input[name='price']").val();
        var quantity = $("input[name='quantity']").val();

        $.ajax({
            type: "POST",
            url: "{{route('add_to_cart')}}",
            data: {_token:_token, id:id, name:name, image:image, price:price, quantity:quantity},
            success: function( msg ) {
                alert( msg.success );
            }
        });
    });
});