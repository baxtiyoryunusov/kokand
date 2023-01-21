@extends('layout.layout')
@section('css')
    {{-- <link rel="stylesheet" href="{{asset('frontend/datapicker/datapicker.css')}}">--}}

@endsection
@section('content')
    <div class="my-2 p-1">

    </div>
    <div class="col-12 bg-secondary mt-5"
         style="height: 200px; width: 100% ; box-shadow: 0 125rem 25rem rgb(1 0 1 / 8%) !important">

    </div>
    <div class="bg-light " style=" ">
        <div>
            <div class=" container   px-1" style="min-height: 70vh; position: relative; top: -150px">
                <div class="row  pt-5 justify-content-around">


                    <div class="col-12 col-lg-2 ">
                        @include("user.navbar")
                    </div>
                    <div class="col-12  col-lg-9 mt-4 mt-lg-0 shadow-sm">

                        <div class="card  user-profile-form border-0 ">
                            <div class="card-body m-lg-3  ">
                                <div class="row justify-content-center align-items-center mx-2"
                                     style="min-height: 70vh">
                                    <div class="col-12 col-md-12 ">
                                        @if(count($cart_data)>0)
                                            @if(Cookie::get('shopping_cart'))
                                                @php $total="0" @endphp
                                                <div class="container pt-3">
                                                    @foreach ($cart_data as $data)

                                                        <div
                                                            class="row   border align-items-center justify-content-center rounded m-1  m-md-2">
                                                            <div class="col-12 d-flex justify-content-center">
                                                                <a href="javascript:void(0)"
                                                                   class="ms-auto text-dark text-center my-1  fw-bold">{{ $data['item_name'] }}
                                                                    <span
                                                                        class=" ms-3 text-warning fs-5 fw-bold">   {{ $data['item_variant_name'] }}</span>
                                                                </a>

                                                                    <button type="button"
                                                                            data-colotid="{{$data['item_id']}}"
                                                                            data-variant="{{ $data['item_variant_name'] }}"
                                                                            class="ms-auto border-0 float-end btn delete_cart_data text-danger">
                                                                        <i class="bi bi-trash3"></i>
                                                                    </button>

                                                            </div>
                                                            <div class="col-12">
                                                                <div class="row align-items-center justify-content-center">
                                                                    <div class="col-4 text-center  d-flex">
                                                                        <a class=""
                                                                           href="{{route('card',['slug'=>$data['item_slug'],'url'=>$data['item_id']])}}">
                                                                            <img
                                                                                src="{{ asset(''.$data['item_image']) }}"
                                                                                class="rounded-3 mx-1 mx-md-3 mb-1 mb-md-3"
                                                                                width="80px" height="80px" style="object-fit: cover" alt="">
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-8 my-1 ">
                                                                        <div class="row">

                                                                            <div class="col-12 ps-1  d-flex ">
                                                                                <p class="m-1"> Narx : <span
                                                                                        class=" text-warning">
                                             {{ number_format($data['item_price'], 2) }}
                                        </span>
                                                                                </p>
                                                                            </div>
                                                                            <div class="col-12 ps-1  d-flex ">

                                                                                <p class="m-1"> To'plam narxi : <span
                                                                                        class=" text-warning">
                                            {{ number_format($data['item_quantity'] * $data['item_price'], 2) }}
                                        </span>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row cartpage">
                                                                            <div
                                                                                class="col-12 col-md-6 text-center d-flex justify-content-center ">
                                                                                <div class="row">
                                                                                    <div class="col-12 col-md-4 input-group quantity">
                                                                                        <div
                                                                                            class="input-group-prepend decrement-btn  changeQuantity"
                                                                                            data-colotid="{{$data['item_id']}}"
                                                                                            data-variant="{{ $data['item_variant_name'] }}"
                                                                                            style="cursor: pointer">
                                                                                            <span
                                                                                                class="input-group-text">-</span>
                                                                                        </div>
                                                                                        <input type="text"
                                                                                               class="qty-input rounded form-control form-control-sm text-center"
                                                                                               style="width: 45px!important;"
                                                                                               maxlength="2" max="10"
                                                                                               value="{{ $data['item_quantity'] }}">
                                                                                        <div
                                                                                            class="input-group-append increment-btn changeQuantity"
                                                                                            data-colotid="{{$data['item_id']}}"
                                                                                            data-variant="{{ $data['item_variant_name'] }}"
                                                                                            style="cursor: pointer">
                                                                                            <span
                                                                                                class="input-group-text">+</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
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

                                                            <span
                                                                class="cart-grand-price-viewajax text-warning">{{ number_format($total, 2) }} </span>UZS.
                                                        </h6>
                                                    </div>
                                                    <div class="col-12 col-md-3 ms-auto">
                                                        <a href="{{route('wow-kategory',['barchasi'])}}"
                                                           class="btn  shadow-sm border-9">Xaridni davom ettiring</a>
                                                    </div>
                                                </div>
                                            @endif
                                        @else
                                            <div class="my-5 ">
                                                <div class="container not-found  py-5 " style="height: 300px">
                                                    <div class="row d-flex my-5 align-items-end justify-content-center"
                                                         style="height: 300px">
                                                        <div class="col-lg-6 text-center align-self-end"
                                                             style="filter: invert(100%)">

                                                            <p class="fs-4">Savatingiz Bo'sh!</p>
                                                            <a href="{{route('wow-kategory',['barchasi'])}}"
                                                               class="btn fs-3 shadow-sm border-9">Xaridni davom
                                                                ettiring</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div> <!-- /.row -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection

