@extends('layout.layout')
@section('title','Savat')
@section('css')

@endsection
@section('content')
    <section class="section  my-5">
        <div class="container">
            <div class="row justify-content-center" style="min-height: 50vh">
                <div class="col-12 col-md-10 ">
                    @if(count($cart_data)>0)
                        @if(Cookie::get('shopping_cart'))
                            @php $total="0" @endphp
                            <div class="container pt-3">
                                @foreach ($cart_data as $data)
                                    <div class="row   border align-items-center justify-content-center rounded m-1  m-md-2">
                                        <div class="col-11 d-flex justify-content-center">
                                            <a href="javascript:void(0)"
                                               class="text-dark text-center my-1  fw-bold">{{ $data['item_name'] }}
                                                <span
                                                    class=" ms-3 text-warning fs-5 fw-bold">   {{ $data['item_variant_name'] }}</span>
                                            </a>
                                        </div>
                                        <div class="col-12">
                                            <div class="row align-items-center justify-content-center">
                                                <div class="col-4 text-center  d-flex">
                                                    <a class=""
                                                       href="{{route('card',['slug'=>$data['item_slug'],'url'=>$data['item_id']])}}">
                                                        <img src="{{ asset(''.$data['item_image']) }}"
                                                             class="rounded-3 mx-1 mx-md-3 mb-1 mb-md-3" width="100px" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-8 my-1 ">
                                                    <div class="row">

                                                        <div class="col-12 ps-1  d-flex ">
                                                            <p class="m-1"> Narx : <span class=" text-warning">
                                             {{ number_format($data['item_price'], 2) }}
                                        </span>
                                                            </p>
                                                        </div>
                                                        <div class="col-12 ps-1  d-flex ">

                                                            <p class="m-1"> To'plam narxi : <span class=" text-warning">
                                            {{ number_format($data['item_quantity'] * $data['item_price'], 2) }}
                                        </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row cartpage">
                                                        <div class="col-6 text-center d-flex justify-content-start ">
                                                            <div class="row">
                                                                <div class="col-4 input-group quantity">
                                                                    <div class="input-group-prepend decrement-btn  changeQuantity" data-colotid="{{$data['item_id']}}"  data-variant="{{ $data['item_variant_name'] }}"style="cursor: pointer">
                                                                        <span class="input-group-text">-</span>
                                                                    </div>
                                                                    <input type="text" class="qty-input rounded form-control form-control-sm text-center" style="width: 45px!important;" maxlength="2" max="10" value="{{ $data['item_quantity'] }}">
                                                                    <div class="input-group-append increment-btn changeQuantity" data-colotid="{{$data['item_id']}}"  data-variant="{{ $data['item_variant_name'] }}" style="cursor: pointer">
                                                                        <span class="input-group-text">+</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 text-center ">
                                                            <button type="button" data-colotid="{{$data['item_id']}}"  data-variant="{{ $data['item_variant_name'] }}" class="btn delete_cart_data btn-danger">O'chiring
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @php $total = $total + ($data["item_quantity"] * $data["item_price"]) @endphp
                                @endforeach
                            </div>
                     <div class="row m-3 ">
                            <div class="col-12 col-md-2">
                                <h6 class="cart-grand-name fw-bold">To'plam</h6>
                            </div>
                            <div class="col-12 col-md-2">
                                <h6 class="cart-grand-price">

                                    <span class="cart-grand-price-viewajax text-warning">{{ number_format($total, 2) }} </span>UZS.
                                </h6>
                            </div>
                            <div class="col-12 col-md-3 ms-auto">
                                <a href="{{route('wow-kategory',['barchasi'])}}"
                                   class="btn  shadow-sm border-9">Xarid qilishda davom eting</a>
                            </div>
                        </div>
                        @endif
                    @else
                        <div class="my-5 ">
                            <div class="container not-found  py-5 " style="height: 300px">
                                <div class="row d-flex my-5 align-items-end justify-content-center" style="height: 300px">
                                    <div class="col-lg-6 text-center align-self-end"  style="filter: invert(100%)">

                                        <p class="fs-4">Savatingiz Bo'sh!</p>
                                        <a href="{{route('wow-kategory',['barchasi'])}}"
                                           class="btn fs-3 shadow-sm border-9">Xarid qilishda davom eting</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div> <!-- /.row -->
        </div><!-- /.container -->
    </section>
@endsection
@section('js')
    <script>
        $(document).ready(function () {

            $('.delete_cart_data').click(function (e) {
                e.preventDefault();

                var    product_id = $(this).data('colotid');
                var variant  = $(this).data('variant');

                var data = {
                    'colorid':product_id,
                    'variant':variant,
                };



                $.ajax({
                    url: 'https://www.elitekokand.uz/cardshop-delete',
                    type: 'POST',
                    data: data,
                    success: function (response) {
                        window.location.reload();
                    }
                });
            });

        });
        $(document).ready(function () {

            $('.increment-btn').click(function (e) {
                e.preventDefault();
                var incre_value = $(this).parents('.quantity').find('.qty-input').val();
                var value = parseInt(incre_value, 10);
                value = isNaN(value) ? 0 : value;
                if(value<10){
                    value++;
                    $(this).parents('.quantity').find('.qty-input').val(value);
                }
            });

            $('.decrement-btn').click(function (e) {
                e.preventDefault();
                var decre_value = $(this).parents('.quantity').find('.qty-input').val();
                var value = parseInt(decre_value, 10);
                value = isNaN(value) ? 0 : value;
                if(value>1){
                    value--;
                    $(this).parents('.quantity').find('.qty-input').val(value);
                }
            });

        });
        $(document).ready(function () {

            $('.changeQuantity').click(function (e) {
                e.preventDefault();
             let inval =  $(this).closest(".cartpage").find('.qty-input')
                var product_id = $(this).data('colotid');
                var variant  = $(this).data('variant');
                var quantity  = $(this).closest(".cartpage").find('.qty-input').val();

                var data = {

                    'quantity':quantity,
                    'colorid':product_id,
                    'variant':variant,
                };

                $.ajax({
                    url: 'https://www.elitekokand.uz/cardshop-update-to-cart',
                    type: 'POST',
                    data: data,
                    success: function (response) {
                        if(response.status){
                            window.location.reload();
                        }else if(response.warning){
                            toastr["warning"](response.warning)
                            inval.val(response.qty)

                        }

                    }
                });
            });

        });
    </script>
@endsection
