@extends('newadmin.layout')
@section('title',"Admin Sevimlilar ")
@section('css')

@endsection
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap  align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Sevimlilar</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar align-text-bottom" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                This week
            </button>
        </div>
    </div>

    <div class="container mt-2" style="">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="link-dark" href="{{route('newadmin')}}">Bosh sahifa</a></li>

                <li class="breadcrumb-item active" aria-current="page">Sevimlilar</li>
            </ol>
        </nav>
    </div>
    <div class="" style="min-height: 70vh">
        @if(count($color)>0)
            <div class="favori-page-not-found my-5 py-5">
                <div class="container ">

                    <h3 class="text-center fw-bolder">Sevimlilar</h3>
                    <div class="row d-fle px-2 px-md-0">
                        @foreach($color as $item)
                            @if($item->getFavori)

                            <div
                                class="  col-6 col-sm-6 col-md-4  col-lg-4 col-xl-3 col-xxl-3 py-1  sevilmi-mAin-div{{$item->getFavori->getColor->id}} ">
                                <div class="row h-100 shadow-sm m-1 p-1 rounded">
                                    <div class="col-12 align-self-center mt-auto p-1  ">
                                        <div class="card-body bg-white    pb-0  pb-lg-0    product-img-div " style="">
                                            {{--IMG START--}}
                                            <div class="zoom-effect ">
                                                <div class="zoom-effect-wrapper rounded">
                                                    <a href="{{route('card',['slug'=>$item->getFavori->getColor->getProduct->slug,'url'=>$item->getFavori->getColor->id])}}"
                                                       target="_blank">

                                                        <img
                                                            src="{{$item->getFavori->getColor->getImgNull?asset('').$item->getFavori->getColor->getImgNull->img:'https://www.elitekokand.uz/eliteKokand/productone-1669488393.Elite_place.jpg'}}"
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
                                                title="{{$item->getFavori->getColor->getProduct->name.'  '}}"
                                                style="width: 100%">{{$item->getFavori->getColor->getProduct->name.'  '}}   </span>
                                                <span class="my-auto me-1">+ </span> <span
                                                    class="   maxsulot-isim rounded-circle  p-2  my-2"
                                                    title="{{$item->getFavori->getColor->getColorFirst->name}} rangli"
                                                    style="background:{{$item->getFavori->getColor->getColorFirst->color_kod}};border: 1px solid {{$item->getFavori->getColor->getColorFirst->text_kod}} ">  </span>
                                            </div>
                                            {{--ProDUCT NAME CONTANER END--}}
                                            {{--ProDUCT ICON CONTANER START--}}
                                            <div class=" pt-1">
                                                <div class="d-flex justify-content-between ">
                                                    <div
                                                        class=" d-inline text-warning d-flex align-content-center justify-content-end">
                                                        <div>
                                                            <div class="fw-bolder text-muted  my-auto maxsulot-isim" style="font-size: 14px">
                                                                <s>{{number_format($item->getFavori->getColor->getProduct->eski_price)}}
                                                                    uzs</s>
                                                            </div>
                                                            <div
                                                                class="fw-bolder my-auto maxsulot-isim">{{number_format($item->getFavori->getColor->getProduct->yangi_price,0)}}
                                                                UZS
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div>
                                                        <ul class="m-0 d-inline d-flex float-start my-2 align-items-center justify-content-center list-unstyled icons ">
                                                            <li style="cursor: pointer">
                                                                <i class="bi bi-heart-fill"></i>
                                                            </li>
                                                            <li class="icon mx-2 heir-icon mx-lg-1 ">


                                                              {{count($item->getFavoriget)}}


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

                            @endif
                        @endforeach
                    </div>

                </div>


            </div>

        @endif





         
    </div>














@endsection
@section('js')








@endsection

