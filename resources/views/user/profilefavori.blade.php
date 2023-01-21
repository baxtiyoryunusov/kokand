@extends('layout.layout')
@section('css')
    {{-- <link rel="stylesheet" href="{{asset('frontend/datapicker/datapicker.css')}}">--}}

@endsection
@section('content')
    <div class="my-2 p-1">

    </div>
    <div class="col-12 bg-secondary mt-5" style="height: 200px; width: 100% ; box-shadow: 0 125rem 25rem rgb(1 0 1 / 8%) !important">

    </div>
    <div class="bg-light " style=" ">
        <div>
            <div class=" container   px-1" style="min-height: 70vh; position: relative; top: -150px">
                <div class="row  pt-5 justify-content-around">


                    <div class="col-12 col-lg-2  ">
                        @include("user.navbar")
                    </div>
                    <div class="col-12  col-lg-9 mt-4 mt-lg-0 shadow-sm">

                        <div class="card  user-profile-form border-0 ">
                            <div class="card-body m-lg-3  ">
                                @if(count($favori)>0)
                                    <div class="favori-page-not-found ">
                                        <div class="container ">

                                            <h3 class="text-center fw-bolder">Sevimlilar</h3>
                                            <div class="row d-fle px-2 px-md-0">
                                                @foreach($favori as $item)
                                                    <div
                                                        class="  col-6 col-sm-6 col-md-4  col-lg-4 col-xl-3 col-xxl-3 py-1  sevilmi-mAin-div{{$item->getColor->id}} ">
                                                        <div class="row h-100 shadow-sm m-1 p-1 rounded">
                                                            <div class="col-12 align-self-center mt-auto p-1  ">
                                                                <div class="card-body bg-white    pb-0  pb-lg-0    product-img-div " style="">
                                                                    {{--IMG START--}}
                                                                    <div class="zoom-effect ">
                                                                        <div class="zoom-effect-wrapper rounded">
                                                                            <a href="{{route('card',['slug'=>$item->getColor->getProduct->slug,'url'=>$item->getColor->id])}}"
                                                                               target="_blank">

                                                                                <img
                                                                                    data-src="{{$item->getColor->getImgNull?asset('').$item->getColor->getImgNull->img:'https://www.elitekokand.uz/eliteKokand/productone-1669488393.Elite_place.jpg'}}"
                                                                                    class="lazy zoom-effect-img main-card-img my-auto img-fluid rounded"
                                                                                    style="min-height: 260px;object-fit: cover">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    {{--IMG END--}}
                                                                </div>
                                                            </div>
                                                            {{--CARD BOTTOM START--}}
                                                            <div class="col-12 align-self-end fs-6  ">
                                                                <div class="p-1 pt-0 px-sm-2 pt-lg-0">
                                                                    {{--ProDUCT NAME CONTANER START--}}
                                                                    <div class="mt-2 d-flex p-auto">
                                            <span
                                                class="maxsulot-isim text-center text-muted my-auto fw-bold product-name text-truncate m-1"
                                                title="{{$item->getColor->getProduct->name.'  '}}"
                                                style="width: 100%">{{$item->getColor->getProduct->name.'  '}}   </span>
                                                                        <span class="my-auto me-1">+ </span> <span
                                                                            class="   maxsulot-isim rounded-circle  p-2  my-2"
                                                                            title="{{$item->getColor->getColorFirst->name}} rangli"
                                                                            style="background:{{$item->getColor->getColorFirst->color_kod}};border: 1px solid {{$item->getColor->getColorFirst->text_kod}} ">  </span>
                                                                    </div>
                                                                    {{--ProDUCT NAME CONTANER END--}}
                                                                    {{--ProDUCT ICON CONTANER START--}}
                                                                    <div class=" pt-1">
                                                                        <div class="d-flex justify-content-between ">
                                                                            <div
                                                                                class=" d-inline text-warning d-flex align-content-center justify-content-end">
                                                                                <div>
                                                                                    <div class="fw-bolder text-muted  my-auto maxsulot-isim" style="font-size: 14px">
                                                                                        <s>{{number_format($item->getColor->getProduct->eski_price)}}
                                                                                            uzs</s>
                                                                                    </div>
                                                                                    <div
                                                                                        class="fw-bolder my-auto maxsulot-isim">{{number_format($item->getColor->getProduct->yangi_price,0)}}
                                                                                        UZS
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                            <div>
                                                                                <ul class="m-0 d-inline d-flex float-start my-2 align-items-center justify-content-center list-unstyled icons ">
                                                                                    <li class="icon fast-view" onclick="fastview(this)"
                                                                                        data-id="{{$item->getColor->getProduct->id}}"
                                                                                        data-color="{{$item->getColor->id}}"
                                                                                        data-bs-toggle="modal" data-bs-target="#Prodyct-view"
                                                                                        style="cursor: pointer">
                                                                                        <i class="bi bi-arrows-fullscreen"></i>
                                                                                    </li>
                                                                                    <li class="icon mx-2 heir-icon mx-lg-1 ">


                                                                                        @if(Auth::check() )
                                                                                            @if($item)


                                                                                                @if($item->customer_id==Auth::user()->id)
                                                                                                    <div
                                                                                                        class="div-favori-icon{{$item->getColor->id}}">
                                                                                                        <button class="btn border-0  "
                                                                                                                type="button"
                                                                                                                onclick="addDestroy({{$item->getColor->id}} , {{Auth::user()->id}})">
                                                                                                            <i class="bi bi-heart-fill"></i>
                                                                                                        </button>
                                                                                                    </div>
                                                                                                @else
                                                                                                    <div class="div-favori-icon{{$item->id}}">
                                                                                                        <button class="btn border-0 add-favori "
                                                                                                                type="button"
                                                                                                                onclick="addfavori({{$item->getColor->id}} , {{Auth::user()->id}})">
                                                                                                            <i class="   bi bi-heart   "></i>
                                                                                                        </button>
                                                                                                        @endif



                                                                                                        @else
                                                                                                            <div
                                                                                                                class="div-favori-icon{{$item->getColor->id}}">
                                                                                                                <button
                                                                                                                    class="btn border-0 add-favori "
                                                                                                                    type="button"
                                                                                                                    onclick="addfavori({{$item->getColor->id}} , {{Auth::user()->id}})">
                                                                                                                    <i class="   bi bi-heart   "></i>
                                                                                                                </button>
                                                                                                                @endif
                                                                                                                @else
                                                                                                                    <button class="btn border-0"
                                                                                                                            type="{{route('login')}}">
                                                                                                                        <i class="bi bi-heart  bi-heart"></i>
                                                                                                                    </button
                                                                                                @endif


                                                                                    </li>

                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    {{--ProDUCT NAME CONTANER END--}}
                                                                </div>
                                                            </div>
                                                            {{--CARD BOTTOM END--}}
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>

                                        </div>


                                    </div>
                                @else
                                    <div class="favori-page-not-found my-5 py-5">
                                        <div class="my-5 py-5">
                                            <div class="container not-found  py-5 " style="height: 300px">
                                                <div class="row d-flex my-5 align-items-end justify-content-center" style="height: 300px">
                                                    <div class="col-lg-6 text-center align-self-end" style="filter: invert(100%)">

                                                        <p class="fs-4">Sevimlilar Topilmadi!</p>
                                                        <a href="{{route('wow-kategory',['barchasi'])}}"
                                                           class="btn fs-3 shadow-sm border-9">Xaridni davom ettiring</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection

