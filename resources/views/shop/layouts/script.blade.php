@section('script')
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<!-- Popper js -->
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<!-- Bootstrap js -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- Plugins js -->
<script src="{{asset('assets/js/plugins.js')}}"></script>
<!-- Active js -->
<script src="{{asset('assets/js/active.js')}}"></script>
<script type="text/javascript">
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
                url: "{{route('addCart')}}",
                data: {_token:_token, id:id, name:name, image:image, price:price, quantity:quantity},
                success: function( data ) {
                    $('span#cartQty').text('('+data.qtyCart+')');
                    alert( data.success );
                }
            });
        });

        $('.changeQty').click(function(e){
            e.preventDefault();
            var thisClick = $(this);
            var _token = $("input[name='_token']").val();
            var quantity = $(this).closest(".cartpage").find(".qtyinput").val();
            var product_id = $(this).closest(".cartpage").find(".product_id").val();

            if(quantity==0){
                $.ajax({
                url:'{{url("/delete-cart")}}',
                type:'DELETE',
                method: 'get',
                data:{product_id:product_id, _token:_token },
                success:function(response){
                    thisClick.closest(".cartpage").remove();
                    $('#totalCall').load(location.href + ' .totalLoad');
                },
                error: (error) => {
                    console.log(JSON.stringify(error));
                }
            })
            }else{
                $.ajax({
                    url:'{{url("/update-cart")}}',
                    method: 'post',
                    data:{product_id:product_id,quantity:quantity, _token: '{{csrf_token()}}' },
                    success:function(response){
                        $('#totalCall').load(location.href + ' .totalLoad');
                    },
                    error: (error) => {
                        console.log(JSON.stringify(error));
                    }
                })
            }
        })
    });
</script>
@endsection 