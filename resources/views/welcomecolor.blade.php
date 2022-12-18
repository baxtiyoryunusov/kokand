@extends('layout.layout')
@section('css')





@endsection

@section('title')
    @if($kategoryAll)
        @foreach($kategoryAll as $item) {{$item->name}} @endforeach | Elita poyabzallari | Poyafzal modellari bilan moda izlari
    @else
        @if($kategory) {{$kategory?$kategory->name:'barchasi'}} | Elita poyabzallari | Poyafzal  modellari bilan moda izlari @endif
    @endif
@endsection
@section('content')
    <div class="pt-5 category-page ">
        <div class="pt-2">
            {{--mobile menu start--}}
            <div class=" d-lg-none">
                <div class="justify-content-center  d-flex mx-2 mt-1 mt-mg-5 mx-md-5">
                    {{--   div overflow--}}
                    <div class="sub-cat d-flex py-2 mx-2 ">
                        {{--all kategory--}}
                        @if($kategoryAll)
                            <div class="d-flex align-items-center justify-content-center">
                                @foreach($kategoryAll as $item)
                                    <a class="nav-link shadow-sm fw-bold my-2 py-1 text-muted mx-1 px-2 text-nowrap rounded text-capitalize"
                                       href="{{route('wow-kategory',[$item->slug])}}{{$url}}">
                                    <span
                                        class="">{{\App\Http\Controllers\CategoryController::getParentsTree($item,$item->name)}}</span></a>
                                @endforeach
                            </div>
                        @endif
                        {{--all kategory end--}}
                        <div class="d-flex">
                            @if(!$kategoryAll)
                                <a class="navbar-brand  text-capitalize fs-5 mb-1 py-1 px-2 mx-2 rounded "
                                   href="{{route('wow-kategory',[$kategory->slug])}}{{$url}}">
                                <span
                                    class="  fw-bolder  border border-2 border-lg-4 border-danger border-top-0 border-start-0  border-end-0"> {{$kategory->name}}</span>
                                </a>

                                @foreach($kategory->getChildren as $item)
                                    <a class="nav-link shadow-sm fw-bold my-2 py-1 text-muted mx-1 px-2 text-nowrap rounded text-capitalize"
                                       href="{{route('wow-kategory',[$item->slug])}}{{$url}}">
                                        <span class="">{{$item->name}}</span></a>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    {{-- end div overflow--}}
                    <div class="ms-auto my-auto ">
                        <button
                            class="btn btn-sm ms-auto d-flex  shadow-sm  rounded  {{--filter-button--}} align-middle"
                            type="button"
                            data-bs-toggle="offcanvas"
                            data-bs-target="#Filterroffcan" aria-controls="Filterroffcan">
                            <p class="filter-button-text fw-bold fs-5 d-none m-0 pe-2  d-lg-block">Sarala</p>
                            <img class="filter-button-img my-auto invert" src="{{asset('filter.png')}}" width="25px" alt="">
                        </button>
                    </div>
                </div>

            </div>
            {{--mobile menu end--}}


            {{--Desktop menu start--}}
            <div class="  d-none d-lg-block">
                <div class="d-flex justify-content-center mx-2 mt-1 mt-mg-5 mx-md-5">
                    {{--   div overflow--}}
                    <div class="sub-cat d-flex py-2 mx-2 ">
                        {{--all kategory--}}
                        @if($kategoryAll)
                            <div class="d-flex align-items-center justify-content-center">
                                @foreach($kategoryAll as $item)
                                    <a class="nav-link shadow-sm fw-bold my-2 py-1 text-muted mx-1 px-2 text-nowrap rounded text-capitalize"
                                       href="{{route('wow-kategory',[$item->slug])}}{{$url}}">
                                    <span
                                        class="">{{$item->name}}  </span></a>
                                @endforeach
                            </div>
                        @endif
                        {{--all kategory end--}}
                        <div class="d-flex">
                            @if(!$kategoryAll)
                                <a class="navbar-brand  text-capitalize fs-5 mb-1 py-1 px-2 mx-2 rounded "
                                   href="{{route('wow-kategory',[$kategory->slug])}}{{$url}}">
                                <span
                                    class="  fw-bolder  border border-2 border-lg-4 border-danger border-top-0 border-start-0  border-end-0"> {{$kategory->name}}</span>
                                </a>

                                @foreach($kategory->getChildren as $item)
                                    <a class="nav-link shadow-sm fw-bold my-2 py-1 text-muted mx-1 px-2 text-nowrap rounded text-capitalize"
                                       href="{{route('wow-kategory',[$item->slug])}}{{$url}}">
                                        <span class="">{{$item->name}}</span></a>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    {{-- end div overflow--}}
                    <div class="ms-auto my-auto d-lg-none">
                        <button
                            class="btn btn-sm ms-auto d-flex  shadow-sm  rounded  {{--filter-button--}} align-middle"
                            type="button"
                            data-bs-toggle="offcanvas"
                            data-bs-target="#Filterroffcan" aria-controls="Filterroffcan">
                            <p class="filter-button-text fw-bold fs-5 d-none m-0 pe-2  d-lg-block">Sarala</p>
                            <img class="filter-button-img my-auto invert" src="{{asset('filter.png')}}" width="25px" alt="">
                        </button>
                    </div>
                </div>
            </div>

            {{--Desktop menu end--}}
        </div>
    </div>
    @if( count($color)>0)
        <div class="carusel-main  my-2 px-lg-5  my-md-4">
            <p class="text-center fw-bold">Kategoriyaning diqqatga sazovor mahsulotlari</p>
            <div class=" owl-carousel welcomcarusel owl-theme my-md-4 owl-loaded">
                <div class="owl-stage-outer ">
                    <div class="owl-stage m-1">
                        @foreach($silder as $key =>$itemProduct)
                            @foreach($itemProduct->getColorValueImgFrontend as $key =>$item)
                                <div class="owl-item zoom-effect">
                                    <div class="zoom-effect-wrapper rounded-3">
                                        <a href="{{route('card',['slug'=>$itemProduct->slug,'url'=>$item->id])}}"
                                           class="owl-a{{$key}}">
                                            <img
                                                data-src="{{$item->getImgNull?asset('').$item->getImgNull->img:'https://www.elitekokand.uz/eliteKokand/productone-1669488393.Elite_place.jpg'}}"
                                                class="owl-lazy zoom-effect-img  img-fluid rounded">
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            {{ $color->appends(request()->input())->links('vendor.pagination.maxsulot') }}
        </div>

        <div class="container-fluid  mt-md-5 px-md-1 px-lg-5 ">
            <div class="filter-result-view">
                <div class="container-fluid  ">
                    <div class="d-lg-flex">
                        <div class=" d-none d-none sub-cat"
                             style=" ;{{request()->get('keyword')?"display: block!important;":''}} {{request()->get('min_price')?"display: block!important;":''}} {{request()->get('max_price')?"display: block!important;":''}} {{request()->get('brand')?"display: block!important;":''}}  {{request()->get('xus')?"display: block!important;":''}} {{request()->get('size')?"display: block!important;":''}} {{request()->get('color')?"display: block!important;":''}} ">
                            <div class=" d-flex">
                                @foreach($brandFilter  as $item)
                                    <div class=" pb-3 my-auto ">
                                        <button type="button"
                                                class=" text-nowrap btn shadow-sm mx-1   rounded {{(strstr(request()->get('brand'),$item->slug)?"":'d-none')}}"
                                                onclick="filterBrandCancel('{{$item->slug}}')"
                                                style="">
                                            <span>{{$item->name}}<i
                                                    class="ms-2 bi bi-x"></i>
                                                </span>
                                        </button>
                                    </div>
                                @endforeach
                                @foreach($sizeFilter  as $item)
                                    <div class=" pb-3 w-auto " style="">
                                        <button type="button"
                                                class=" text-nowrap  btn shadow-sm  mx-1   rounded {{(strstr(request()->get('size'),$item->slug)?"":'d-none')}}"
                                                onclick="filterSizeCancel('{{$item->slug}}')">{{$item->name}}<i
                                                class="ms-2 bi bi-x"></i></button>
                                    </div>
                                @endforeach
                                @foreach($colorFilter  as $item)
                                    <div class=" pb-3 ">
                                        <button type="button"
                                                class=" text-nowrap   btn shadow-sm mx-1   rounded mx-1 d-flex align-items-center {{(strstr(request()->get('color'),$item->slug)?"":'d-none')}}"
                                                onclick="filterCancel('{{$item->slug}}')"
                                                style="min-width: 50px!important; max-width: 200px">
                                            <h6 class="rounded-circle my-0 shadow "
                                                style="background:{{$item->color_kod}};color: {{$item->text_kod}};width: 20px!important;height: 20px!important;border: 1px solid {{$item->text_kod}}"></h6>
                                            <i class="ms-2 bi bi-x"></i>
                                        </button>
                                    </div>
                                @endforeach
                                @foreach($xusFilter  as $xus)
                                    @foreach($xus->getXususiyatValue  as $item)
                                        <div class=" pb-3  ">
                                            <button type="button"
                                                    class=" text-nowrap btn shadow-sm mx-1 xusFilterCler{{$item->id}}  rounded "
                                                    onclick="filterXusCancel('{{$item->id}}')"
                                                    style="display: none">
                                                <span class="fw-bold text-warning mx-2">{{$xus->name}}</span><span>{{$item->name}}
                                                    <i class="ms-2 bi bi-x"></i>
                                                </span>
                                            </button>
                                        </div>
                                    @endforeach
                                @endforeach
                                @if(request()->get('max_price') and request()->get('min_price'))
                                    <div class=" pb-3 w-auto " style="">
                                        <button type="button"
                                                class=" text-nowrap  btn shadow-sm  mx-1   rounded {{request()->get('max_price')?"":'d-none'}}"
                                                onclick="filterPriceCancel('{{$item->slug}}')"><span
                                                class="text-warning">{{request()->get('min_price')}}</span> da <span
                                                class="text-warning">{{request()->get('max_price')}}</span> gacha

                                            <i class="ms-2 bi bi-x"></i></button>
                                    </div>
                                @endif
                                @if(request()->get('keyword'))
                                    <div class=" pb-3 w-auto " style="">
                                        <button type="button"
                                                class=" text-nowrap  btn shadow-sm  mx-1   rounded {{request()->get('keyword')?"":'d-none'}}"
                                                onclick="filterkeywordCanel()"> <span
                                                class="text-warning">{{request()->get('keyword')}}</span>

                                            <i class="ms-2 bi bi-x"></i></button>
                                    </div>
                                @endif
                                <div class="pb-2  my-auto">
                                    <button type="button"
                                            class=" text-nowrap d-flex  btn shadow-sm  px-2  mb-2 rounded mx-1  "
                                            onclick="allFilterCancel()">
                                        Tozalash
                                        <i class="bi bi-backspace ms-3 "></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="ms-auto float-end pb-2 ps-2 me-2 mt-2  ">
                            <div class="row">
                                <div class="col-10">
                                    <select class=" bg-white border text-black h9  rounded-0" id="sort_type">
                                        <option value="0">Tartiblash</option>
                                        <option
                                            value="price&order=ASC" {{ (request()->get('sort')=='price'and request()->get('order')=='ASC')? "selected" :''}}>
                                            Avval arzon
                                        </option>
                                        <option
                                            value="price&order=DESC" {{ (request()->get('sort')=='price'and request()->get('order')=='DESC')? "selected" :''}} >
                                            Avval qimmat
                                        </option>
                                        <option
                                            value="date_added" {{ (request()->get('sort')=='date_added')? "selected" :''}}>
                                            Eng Yangilari
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-2 d-none d-lg-block  px-2  rounded-3 " style="">
                    <div class="filter-main-div rounded-3">
                        <div class="row d-flex filter-result-view mx-3">

                            @if($productMaxFilter)
                                <div class="my-5 mx-auto" style="max-width: 90%">
                                    <div id="slider" class=""></div>
                                </div>
                                <div id="upper-value">
                                    <input type="text" class="maxmin-filter-input border-0 w-50 "
                                           id="input-withinputMIN"><span
                                        class="float-end">- Dan</span>
                                    <div class="clearfix"></div>
                                </div>
                                <div id="lower-value">
                                    <input type="text" class="maxmin-filter-input border-0 w-50 maxFilter"
                                           id="input-withinputmax">
                                    <span
                                        class="float-end">- Gacha</span>
                                    <div class="clearfix"></div>
                                </div>
                                <button  id="setButton" type="button" class="btn btn-dark my-2">sarala</button>
                            @endif
                            @if(count($brandFilter)>0)
                                <div class="brand">
                                    <button
                                        class="btn border rounded  w-100 text-start my-2"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#BrendFilterModal"
                                        aria-expanded="true" aria-controls="BrendFilterModal">
                                        Brend
                                    </button>
                                    <div class="collapse show my-2 border-0   rounded pt-3"
                                         id="BrendFilterModal">
                                        <div class="card card-body border-0 pt-0">
                                            @foreach($brandFilter  as $item)
                                                <div class="col-lg-12 col-xl-12 mx-2 ">
                                                    <label class="form-check-label d-flex filter_check mb-1"
                                                           for="{{$item->name.'-'.$item->id}}">
                                                        <input class="form-check-input text-black-50" style=""
                                                               onchange="filterBrandDEC(event,'{{$item->slug}}')"
                                                               type="checkbox" value="{{$item->slug}}"
                                                               data-name="{{$item->slug}}"
                                                               id="{{$item->name.'-'.$item->id}}" {{(strstr(request()->get('brand'),$item->slug)?"checked":'')}} >
                                                        <span class="mx-3">{{$item->name}}</span>
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if(count($sizeFilter)>0)
                                <div class="size">
                                    <button
                                        class="btn border rounded w-100 text-start my-2"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#SizeFilterModal"
                                        aria-expanded="true" aria-controls="sizefFilterModal">
                                        O'lcham
                                    </button>
                                    <div class="collapse show my-2 border-0  rounded pt-3"
                                         id="SizeFilterModal">
                                        <div class="card card-body border-0 pt-0">
                                            @foreach($sizeFilter  as $item)
                                                <div class="col-lg-12 col-xl-12 mx-2 ">
                                                    <label class="form-check-label d-flex filter_check mb-1"
                                                           for="{{$item->name.'-'.$item->id}}">
                                                        <input class="form-check-input text-black-50" style=""
                                                               onchange="filterSizeDEC(event,'{{$item->slug}}')"
                                                               type="checkbox" value="{{$item->slug}}"
                                                               data-name="{{$item->slug}}"
                                                               id="{{$item->name.'-'.$item->id}}" {{(strchr(request()->get('size'),$item->slug)?"checked":'')}} >
                                                        <span class="mx-3">  {{$item->name}}</span>
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endif


                            @if(count($colorFilter)>0)
                                <div class="color">
                                    <button
                                        class="btn border rounded w-100 text-start my-2"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#colorFilterModal"
                                        aria-expanded="true" aria-controls="colorFilterModal">
                                        Rang
                                    </button>
                                    <div class="collapse show my-2 mx-3 border-0 rounded pt-3"
                                         id="colorFilterModal">
                                        <div class="card card-body border-0 pt-0">
                                            @foreach($colorFilter  as $item)
                                                <div class="col-lg-12 col-xl-12 mx-2 ">
                                                    <div class="form-check form-check-color mb-3">
                                                        <input class="form-check-input"
                                                               id="{{$item->name.'-'.$item->id}}"
                                                               value="{{$item->slug}}" data-name="{{$item->slug}}"
                                                               onchange="filterColorDEC(event,'{{$item->slug}}')"
                                                               type="checkbox"
                                                               style="background:{{$item->color_kod}};color: {{$item->text_kod}};/*width: 20px!important;height: 20px!important;*/border: 1px solid {{$item->text_kod}}" {{(strstr(request()->get('color'),$item->slug)?"checked":'')}}>
                                                        <label class="form-check-label text-body"
                                                               for="{{$item->name.'-'.$item->id}}">
                                                            {{$item->name}}
                                                        </label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if(count($xusFilter)>0)
                                <div class="Xususiyatlar mb-2">
                                    @foreach($xusFilter  as $itemv)
                                        <button
                                            class="btn border rounded w-100 text-start my-2"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#Xususiyatlar{{$itemv->id}}"
                                            aria-expanded="true" aria-controls="Xususiyatlar{{$itemv->id}}">
                                            {{$itemv->name}}
                                        </button>
                                        <div class="collapse     my-2 border-0 rounded pt-1"
                                             id="Xususiyatlar{{$itemv->id}}">

                                                @foreach($itemv->getXususiyatValue as $item)
                                                    <div class="col-lg-12 col-xl-12 mx-2  xusFilterCheckbox-div{{$item->id}} ">
                                                        <label class="form-check-label d-flex filter_check mx-1 my-1"
                                                               for="{{$item->name.'-'.$item->id}}">
                                                            <input
                                                                class="form-check-input text-black-50 xusFilterCheckbox{{$item->id}}"
                                                                style=""
                                                                onchange="filterXusDEC(event,'{{$item->id}}')"
                                                                type="checkbox" value="{{$item->id}}"
                                                                data-name="{{$item->id}}"
                                                                id="{{$item->name.'-'.$item->id}}">
                                                            <span class="mx-2">{{$item->name}}</span>
                                                        </label>
                                                    </div>
                                                @endforeach

                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>

                </div>
                <div class="col-12 col-lg-10 mb-lg-5">
                    <div class="infinite-scroll ">
                        <div class="row mx-0  product-card ">
                            @foreach($color as $item)
                                <div class=" col-6   col-sm-6 col-md-4  col-lg-4 col-xl-3 col-xxl-3 py-1  ">
                                    <div class="row h-100 shadow-sm m-1 p-1 rounded">
                                        <div class="col-12 align-self-center mt-auto p-1  ">
                                            <div class="card-body bg-white    pb-0  pb-lg-0    product-img-div "
                                                 style="">
                                                {{--IMG START--}}
                                                <div class="zoom-effect ">
                                                    <div class="zoom-effect-wrapper rounded">
                                                        <a href="{{route('card',['slug'=>$item->getProduct->slug,'url'=>$item->id])}}"
                                                           target="_blank">
                                                            <img
                                                                data-src="{{$item->getImgNull?asset('').$item->getImgNull->img:'https://www.elitekokand.uz/eliteKokand/productone-1669488393.Elite_place.jpg'}}"
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
                                                title="{{$item->getColorFirst->name.' '.$item->getProduct->name.'  '}}"
                                                style="width: 100%">{{$item->getColorFirst->name.' '.$item->getProduct->name.'  '}}   </span>
                                                    <span class="my-auto me-1">+ </span> <span
                                                        class="   maxsulot-isim rounded-circle  p-2  my-2"
                                                        title="{{$item->getColorFirst->name}} rangli"
                                                        style="background:{{$item->getColorFirst->color_kod}};border: 1px solid {{$item->getColorFirst->text_kod}} ">  </span>
                                                </div>
                                                {{--ProDUCT NAME CONTANER END--}}
                                                {{--ProDUCT ICON CONTANER START--}}
                                                <div class=" pt-1">
                                                    <div class="d-flex justify-content-between ">
                                                        <div class=" d-inline text-warning d-flex align-content-center justify-content-end">
                                                            <div class="d-flex align-content-center">
                                                                <div class="fw-bolder   my-auto maxsulot-isim" style="">
                                                                    @if($item->getProduct->eski_price!==Null)  <p class="m-0 text-muted"><s>{{number_format($item->getProduct->eski_price)}} uzs</s> </p>@endif
                                                                        <div
                                                                            class="fw-bolder my-auto maxsulot-isim">{{number_format($item->getProduct->yangi_price,0)}}
                                                                            UZS
                                                                        </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div>
                                                            <ul class=" d-inline ms-2 d-flex my-2 float-start align-items-center justify-content-center list-unstyled icons">
                                                                <li class="icon fast-view" onclick="fastview(this)"
                                                                    data-id="{{$item->getProduct->id}}"
                                                                    data-color="{{$item->id}}"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#Prodyct-view"
                                                                    style="cursor: pointer">
                                                                    <i class="bi bi-arrows-fullscreen"></i>
                                                                </li>
                                                                <li class="icon ms-3 heir-icon ">
                                                                    @if(Auth::check() )
                                                                        @if($item->getFavori)
                                                                            @if($item->getFavori->customer_id==Auth::user()->id)
                                                                                <div
                                                                                    class="div-favori-icon{{$item->id}}">
                                                                                    <button
                                                                                        class="btn  p-1 border-0  "
                                                                                        type="button"
                                                                                        onclick="addDestroy({{$item->id}} , {{Auth::user()->id}})">
                                                                                        <i class="bi bi-heart-fill"></i>
                                                                                    </button>
                                                                                </div>
                                                                            @else
                                                                                <div
                                                                                    class="div-favori-icon{{$item->id}}">
                                                                                    <button
                                                                                        class="btn  p-1  border-0 add-favori "
                                                                                        type="button"
                                                                                        onclick="addfavori({{$item->id}} , {{Auth::user()->id}})">
                                                                                        <i class=" favoriIcon{{$item->id}}  bi bi-heart   "></i>
                                                                                    </button>
                                                                                    @endif
                                                                                    @else
                                                                                        <div
                                                                                            class="div-favori-icon{{$item->id}}">
                                                                                            <button
                                                                                                class="btn p-1  border-0 add-favori "
                                                                                                type="button"
                                                                                                onclick="addfavori({{$item->id}} , {{Auth::user()->id}})">
                                                                                                <i class=" favoriIcon{{$item->id}}  bi bi-heart   "></i>
                                                                                            </button>
                                                                                            @endif
                                                                                            @else
                                                                                                <a class="btn  p-1 border-0"
                                                                                                   href="{{route('favori.index')}}">
                                                                                                    <i class="bi bi-heart  bi-heart"></i>
                                                                                                </a
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
                            <div class="alt-page ">
                                {{ $color->appends(request()->input())->links('vendor.pagination.tailwind') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    @else
        <div class="container ">
            <div class=" d-none filter-result-view "
                 style="max-width:1600px; overflow-y: hidden ; overflow-x: auto; {{request()->get('keyword')?"display: block!important;":''}} {{request()->get('max_price')?"display: block!important;":''}} {{request()->get('brand')?"display: block!important;":''}} {{request()->get('xus')?"display: block!important;":''}} {{request()->get('color')?"display: block!important;":''}} {{request()->get('size')?"display: block!important;":''}}  ">
                <div class=" d-flex mt-2">
                    <div class=" pb-2 ">
                        <button type="button"
                                class=" text-nowrap d-flex bg-danger text-white btn shadow-sm  px-2  mb-2 rounded mx-1  "
                                onclick="allFilterCancel()">
                            <i class="bi bi-info-circle-fill me-1"></i> Barchasini Tozalang!
                            <i class="bi bi-backspace ms-3"></i></button>
                    </div>
                    @foreach($brandFilterAll  as $item)
                        <div class=" pb-2  ">
                            <button type="button"
                                    class=" text-nowrap btn shadow-sm mx-1   rounded {{(strstr(request()->get('brand'),$item->slug)?"":'d-none')}}"
                                    onclick="filterBrandCancel('{{$item->slug}}')"
                                    style=""><span>{{$item->name}}<i
                                        class="ms-2 bi bi-x"></i></span></button>
                        </div>
                    @endforeach
                    @foreach($sizeFilterAll  as $item)
                        <div class=" pb-2  ">
                            <button type="button"
                                    class=" text-nowrap btn shadow-sm    mb-2  rounded {{(strstr(request()->get('size'),$item->slug)?"":'d-none')}}"
                                    onclick="filterSizeCancel('{{$item->slug}}')"
                                    style="width: 90px!important;">{{$item->name}}<i
                                    class="ms-2 bi bi-x"></i></button>
                        </div>
                    @endforeach
                    @foreach($colorFilterAll  as $item)
                        <div class=" pb-2 ">
                            <button type="button"
                                    class=" text-nowrap d-flex  btn shadow-sm    rounded mx-1 d-flex align-items-center {{(strstr(request()->get('color'),$item->slug)?"":'d-none')}}"
                                    onclick="filterCancel('{{$item->slug}}')"
                                    style="min-width: 50px!important; max-width: 200px">
                                <h6 class="rounded-circle my-0 shadow "
                                    style="background:{{$item->color_kod}};color: {{$item->text_kod}};width: 20px!important;height: 20px!important;border: 1px solid {{$item->text_kod}}"></h6>
                                <i class="ms-2 bi bi-x"></i></button>
                        </div>
                    @endforeach
                    @foreach($xusFilter  as $xus)
                        @foreach($xus->getXususiyatValue  as $item)
                            <div class=" pb-2  ">
                                <button type="button"
                                        class=" text-nowrap btn shadow-sm mx-1 xusFilterCler{{$item->id}}  rounded "
                                        onclick="filterXusCancel('{{$item->id}}')"
                                        style="display: none"><span
                                        class="fw-bold text-warning mx-2">{{$xus->name}}</span><span>{{$item->name}}<i
                                            class="ms-2 bi bi-x"></i></span></button>
                            </div>
                        @endforeach
                    @endforeach
                    @if(request()->get('max_price') and request()->get('min_price'))
                        <div class=" pb-3 w-auto " style="">
                            <button type="button"
                                    class=" text-nowrap  btn shadow-sm  mx-1   rounded {{request()->get('max_price')?"":'d-none'}}"
                                    onclick="filterPriceCancel('{{$item->slug}}')"><span
                                    class="text-warning">{{request()->get('min_price')}}</span> da <span
                                    class="text-warning">{{request()->get('max_price')}}</span> gacha
                                Maxsulotlar
                                Topilmadi<i
                                    class="ms-2 bi bi-x"></i></button>
                        </div>
                    @endif
                    @if(request()->get('keyword'))
                        <div class=" pb-3 w-auto " style="">
                            <button type="button"
                                    class=" text-nowrap  btn shadow-sm  mx-1   rounded {{request()->get('keyword')?"":'d-none'}}"
                                    onclick="filterkeywordCanel()"> <span
                                    class="text-warning">{{request()->get('keyword')}}</span>

                                <i class="ms-2 bi bi-x"></i></button>
                        </div>
                    @endif

                </div>
            </div>
        </div>
        <div class="my-5 " style="min-height: 50vh">
            <div class="container not-found  py-5 " style="height: 300px">
                <div class="row d-flex my-5 align-items-end justify-content-center" style="height: 300px">
                    <div class="col-lg-6 text-center align-self-end" style="filter: invert(100%)">

                        <p>Mahsulot Topilmadi!</p>
                        <a href="{{route('wow-kategory',['barchasi'])}}"
                           class="btn fs-3 shadow-sm border-0">Xarid qilishda davom eting</a>
                    </div>
                </div>
            </div>
        </div>

    @endif
    {{--modal Filter view--}}
    <div class="offcanvas offcanvas-end shadow border-0 " data-bs-scroll="true" data-bs-backdrop="false"
         tabindex="-1"
         id="Filterroffcan" aria-labelledby="FilterroffcanLabel">
        <div class="offcanvas-header  shadow-sm" style="z-index: 100;">
            <h5 class="offcanvas-title " id="FilterroffcanLabel">
                <button type="button" class="btn btn-dark w-100" onclick="filter()">Saralash</button>
            </h5>
            <div class="row">
                <div class="col-10">
                    <select class=" bg-white border text-black h9  rounded" id="sort_typeTwoo">
                        <option value="0">Tartiblash</option>
                        <option
                            value="price&order=ASC" {{ (request()->get('sort')=='price'and request()->get('order')=='ASC')? "selected" :''}}>
                            Avval arzon
                        </option>
                        <option
                            value="price&order=DESC" {{ (request()->get('sort')=='price'and request()->get('order')=='DESC')? "selected" :''}} >
                            Avval qimmat
                        </option>
                        <option value="date_added" {{ (request()->get('sort')=='date_added')? "selected" :''}}>
                            Eng Yangilari
                        </option>
                    </select>
                </div>
            </div>
            <button type="button" class="btn border-0 fs-3 text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"><i
                    class="bi bi-x-lg"></i></button>
        </div>
        <div class="offcanvas-body">
            <div class="row d-flex filter-result-view">
                @foreach($xusFilter  as $key=> $parent)
                    @foreach($parent->getXususiyatValue  as $key=> $item)
                        <div class=" pb-2   w-auto">
                            <button type="button"
                                    class="btn text-nowrap shadow-sm mx-1 py-1 ps-4  mb-2 xusFilterCler{{$item->id}}  rounded "
                                    style="display:none;"
                                    onclick="filterXusCancel('{{$item->id}}')"><span
                                    class="fw-bold text-warning">{{$parent->name}}</span>
                                {{$item->name}}
                                <i class="ms-2 bi bi-x"></i>
                            </button>
                        </div>
                    @endforeach
                @endforeach
                @foreach($brandFilter  as $item)
                    <div class=" pb-2   w-auto">
                        <button type="button"
                                class=" btn text-nowrap shadow-sm mx-1 py-1 ps-4  mb-2  rounded {{(strstr(request()->get('brand'),$item->slug)?"":'d-none')}}"
                                onclick="filterBrandCancel('{{$item->slug}}')">{{$item->name}}<i
                                class="ms-2 bi bi-x"></i>
                        </button>
                    </div>
                @endforeach
                @foreach($sizeFilter  as $item)
                    <div class=" pb-2   w-auto">
                        <button type="button"
                                class=" btn text-nowrap shadow-sm mx-1 py-1 ps-4  mb-2  rounded {{(strstr(request()->get('size'),$item->slug)?"":'d-none')}}"
                                onclick="filterSizeCancel('{{$item->slug}}')">{{$item->name}}<i
                                class="ms-2 bi bi-x"></i>
                        </button>
                    </div>
                @endforeach
                @foreach($colorFilter  as $item)
                    <div class=" pb-2  w-auto">
                        <button type="button"
                                class=" d-flex text-nowrap  btn shadow-sm py-1   mb-2 rounded mx-1 {{(strstr(request()->get('color'),$item->slug)?"":'d-none')}}"
                                onclick="filterCancel('{{$item->slug}}')">
                            <h6 class="rounded-circle mx-2 my-auto shadow "
                                style="background:{{$item->color_kod}};color: {{$item->text_kod}};width: 20px!important;height: 20px!important;border: 1px solid {{$item->text_kod}}"></h6> {{$item->name}}
                            <i class="ms-2 bi bi-x"></i>
                        </button>
                    </div>
                @endforeach
                @if(request()->get('keyword'))
                    <div class=" pb-3  w-auto ">
                        <button type="button"
                                class=" text-nowrap  btn shadow-sm  mx-1   rounded {{request()->get('keyword')?"":'d-none'}}"
                                onclick="filterkeywordCanel()"> <span
                                class="text-warning">{{request()->get('keyword')}}</span>

                            <i class="ms-2 bi bi-x"></i></button>
                    </div>
                @endif
                <div class="pb-2 d-none"
                     style="{{request()->get('brand')?"display: block!important;":''}} {{request()->get('xus')?"display: block!important;":''}} {{request()->get('size')?"display: block!important;":''}} {{request()->get('color')?"display: block!important;":''}}">
                    <button type="button"
                            class=" text-nowrap d-flex  btn shadow-sm py-1 px-2  mb-2 rounded mx-1  "
                            onclick="allFilterCancel()">
                        <h6 class="rounded-circle mx-2 my-0"
                            style=""></h6>Barchasini Tozalash
                        <i class="bi bi-backspace ms-3"></i>
                    </button>
                </div>
            </div>
           {{-- @if($productMaxFilter)
                <div class="my-5 mx-4">
                    <div id="sliderWwoo" class="slider-max"></div>
                </div>
                <div id="upper-value">
                    <input type="text" class="maxmin-filter-input border-0 w-50 " id="input-with-keyp3"><span
                        class="float-end">- Dan</span>
                    <div class="clearfix"></div>
                </div>
                <div id="lower-value">
                    <input type="text" class="maxmin-filter-input border-0 w-50 maxFilter"
                           id="input-with-keyp4">
                    <span
                        class="float-end">- Gacha</span>
                    <div class="clearfix"></div>
                </div>
            @endif--}}
            @if(count($brandFilter)>0)
                <div class="brand">
                    <button
                        class="btn border rounded  w-100 text-start my-2"
                        type="button" data-bs-toggle="collapse" data-bs-target="#BrendFilterModal"
                        aria-expanded="true" aria-controls="BrendFilterModal">
                        Brend
                    </button>
                    <div class="collapse show my-2 border-0   rounded pt-3"
                         id="BrendFilterModal">
                        <div class="card card-body border-0 pt-0">
                            @foreach($brandFilter  as $item)
                                <div class="col-lg-12 col-xl-12 mx-2 ">
                                    <label class="form-check-label d-flex filter_check mb-1"
                                           for="{{$item->name.'-'.$item->id}}">
                                        <input class="form-check-input text-black-50" style=""
                                               onchange="filterBrand(event,'{{$item->slug}}')"
                                               type="checkbox" value="{{$item->slug}}"
                                               data-name="{{$item->slug}}"
                                               id="{{$item->name.'-'.$item->id}}" {{(strstr(request()->get('brand'),$item->slug)?"checked":'')}} >
                                        <span class="mx-3">{{$item->name}}</span>
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
            @if(count($sizeFilter)>0)
                <div class="size">
                    <button
                        class="btn border rounded w-100 text-start my-2"
                        type="button" data-bs-toggle="collapse" data-bs-target="#SizeFilterModal"
                        aria-expanded="true" aria-controls="sizefFilterModal">
                        O'lcham
                    </button>
                    <div class="collapse show my-2 border-0  rounded pt-3"
                         id="SizeFilterModal">
                        <div class="card card-body border-0 pt-0">
                            @foreach($sizeFilter  as $item)
                                <div class="col-lg-12 col-xl-12 mx-2 ">
                                    <label class="form-check-label d-flex filter_check mb-1"
                                           for="{{$item->name.'-'.$item->id}}">
                                        <input class="form-check-input text-black-50" style=""
                                               onchange="filterSize(event,'{{$item->slug}}')"
                                               type="checkbox" value="{{$item->slug}}"
                                               data-name="{{$item->slug}}"
                                               id="{{$item->name.'-'.$item->id}}" {{(strchr(request()->get('size'),$item->slug)?"checked":'')}} >
                                        <span class="mx-3">  {{$item->name}}</span>
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif


            @if(count($colorFilter)>0)
                <div class="color">
                    <button
                        class="btn border rounded w-100 text-start my-2"
                        type="button" data-bs-toggle="collapse" data-bs-target="#colorFilterModal"
                        aria-expanded="true" aria-controls="colorFilterModal">
                        Rang
                    </button>
                    <div class="collapse show my-2 mx-3 border-0 rounded pt-3"
                         id="colorFilterModal">
                        <div class="card card-body border-0 pt-0">
                            @foreach($colorFilter  as $item)
                                <div class="col-lg-12 col-xl-12 px-2 ">
                                    <div class="form-check form-check-color mb-3">
                                        <input class="form-check-input" id="{{$item->name.'-'.$item->id}}"
                                               value="{{$item->slug}}" data-name="{{$item->slug}}"
                                               onchange="filterColor(event,'{{$item->slug}}')" type="checkbox"
                                               style="background:{{$item->color_kod}};color: {{$item->text_kod}};/*width: 20px!important;height: 20px!important;*/border: 1px solid {{$item->text_kod}}" {{(strstr(request()->get('color'),$item->slug)?"checked":'')}}>
                                        <label class="form-check-label text-body"
                                               for="{{$item->name.'-'.$item->id}}">
                                            {{$item->name}}
                                        </label>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
            @if(count($xusFilter)>0)
                <div class="Xususiyatlar">
                    @foreach($xusFilter  as $itemv)
                        <button
                            class="btn border rounded w-100 text-start my-2"
                            type="button" data-bs-toggle="collapse" data-bs-target="#Xususiyatlar{{$itemv->id}}"
                            aria-expanded="true" aria-controls="Xususiyatlar{{$itemv->id}}">
                            {{$itemv->name}}
                        </button>
                        <div class="collapse my-2 border-0 rounded pt-1" id="Xususiyatlar{{$itemv->id}}">
                            <div class="card card-body border-0 pt-0">
                                @foreach($itemv->getXususiyatValue as $item)
                                    <div class="col-lg-12 col-xl-12 mx-2  ">
                                        <label class="form-check-label d-flex filter_check mx-1 my-1"
                                               for="{{$item->name.'-'.$item->id}}">
                                            <input
                                                class="form-check-input text-black-50 xusFilterCheckbox{{$item->id}}"
                                                style=""
                                                onchange="filterXus(event,'{{$item->id}}')"
                                                type="checkbox" value="{{$item->id}}" data-name="{{$item->id}}"
                                                id="{{$item->name.'-'.$item->id}}">
                                            <span class="mx-2">{{$item->name}}</span>
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>

    {{--modal Filter view--}}
    <div id="filter-to-top" style="">
        <button
            class=" d-flex  p-2 filter-to-top d-flex align-items-center   "
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#Filterroffcan" aria-controls="Filterroffcan">
            <img class="filter-button-img" src="{{asset('filter.png')}}" width="25px" alt="">
        </button>
    </div>
    <div id="back-to-top" style="">
        <button type="button" class=" p-0 back-to-top" title="Yukarı Çık">
            <i class="bi bi-chevron-up"></i>
        </button>
    </div>


@endsection
@section('js')
    @if($productMaxFilter)
        <script>
            var filters_xus = "{{request()->get('xus')}}";
            var filters_category = "{{request()->get('category')}}";
            var filters_brand = "{{request()->get('brand')}}";
            var filters_color = "{{request()->get('color')}}";
            var filters_size = "{{request()->get('size')}}";
            var filters_max_price = "{{request()->get('max_price')}}";
            var filters_min_price = "{{request()->get('min_price')}}";
            var filters_sort = "{{request()->get('sort')}}";
            var filters_keyword = "{{request()->get('keyword')}}";


          var maxminPqrice = document.getElementById('slider');
          var setButton = document.getElementById('setButton');
            const min = {{$productMinFilter->yangi_price}};
            const max = {{$productMaxFilter->yangi_price}};
            let reqmax = "{{request()->get('max_price')}}";
            let resultmax = reqmax.replace(/,/gi, "");
            let nuqtaresultmax = resultmax.replace('.', "")
            let uzresultmax = nuqtaresultmax.replace('UZS', "")
            let reqmin = "{{request()->get('min_price')}}";
            let resultmin = reqmin.replace(/,/gi, "");
            let nuqtaresultmin = resultmin.replace('.', "")
            let uzresultmin = nuqtaresultmin.replace('UZS', "")
            if (!uzresultmax) {
                uzresultmax = '{{$productMaxFilter->yangi_price}}'
            }
            noUiSlider.create(maxminPqrice, {
                start: [uzresultmin, uzresultmax],
                connect: true,
                range: {
                    'min': {{$productMinFilter->yangi_price}},
                    'max': {{$productMaxFilter->yangi_price}}
                },
                pips: {
                    mode: 'values',
                    values: [min, max],
                    density: 7
                }
            });
            var inputMIN = document.getElementById('input-withinputMIN');
            var inputmax = document.getElementById('input-withinputmax');
            var inputs = [inputMIN, inputmax];
            maxminPqrice.noUiSlider.on('update', function (values, handle) {
                inputs[Math.round(handle)].value = Math.round(values[handle]).toLocaleString("en-US") + '.UZS';
                values[Math.round(handle)];


            });
            setButton.addEventListener('click', function () {

                filters_max_price = $('#input-withinputmax').val();
                filters_min_price = $('#input-withinputMIN').val();
               filter()

            });
        </script>


        <script>
            var zmaxminPricei = document.getElementById('sliderWwoo');
            const mini = {{$productMinFilter->yangi_price}};
            const maxi = {{$productMaxFilter->yangi_price}};
            let reqmaxi = "{{request()->get('max_price')}}";
            let resultmaxi = reqmaxi.replace(/,/gi, "");
            let nuqtaresultmaxi = resultmaxi.replace('.', "")
            let uzresultmaxi = nuqtaresultmaxi.replace('UZS', "")
            let reqmini = "{{request()->get('min_price')}}";
            let resultmini = reqmini.replace(/,/gi, "");
            let nuqtaresultmini = resultmini.replace('.', "")
            let uzresultmini = nuqtaresultmini.replace('UZS', "")
            if (!uzresultmaxi) {
                uzresultmaxi = '{{$productMaxFilter->yangi_price}}'
            }
            noUiSlider.create(zmaxminPricei, {
                start: [uzresultmini, uzresultmaxi],
                connect: true,
                range: {
                    'min': {{$productMinFilter->yangi_price}},
                    'max': {{$productMaxFilter->yangi_price}}
                },
                pips: {
                    mode: 'values',
                    values: [mini, maxi],
                    density: 7
                }
            });
            var input0i = document.getElementById('input-with-keyp3');
            var input1i = document.getElementById('input-with-keyp4');
            var inputsi = [input0i, input1i];
            zmaxminPricei.noUiSlider.on('change', function (valuesi, handlei) {
                inputsi[Math.round(handlei)].value = Math.round(valuesi[handlei]).toLocaleString("en-US") + '.UZS';
                valuesi[Math.round(handlei)];

                filters_max_price = $('#input-with-keyp4').val();
                filters_min_price = $('#input-with-keyp3').val();

            });
        </script>
    @endif

    <script>


        function filter() {

            location.href = location.origin + location.pathname + '?' + '&keyword=' + filters_keyword + '&sort=' + filters_sort + '&max_price=' + filters_max_price + '&min_price=' + filters_min_price + '&color=' + filters_color + '&brand=' + filters_brand + '&size=' + filters_size + '&xus=' + filters_xus;
        }

        document.getElementById('sort_type').addEventListener('change', function (event) {
            filters_sort = event.target.value;
            filter();
        });
        document.getElementById('sort_typeTwoo').addEventListener('change', function (event) {
            filters_sort = event.target.value;
            filter();
        });

        function filterColor(event, color) {
            if (event.target.checked == true) {
                filters_color += color + ',';
            } else {
                filters_color = filters_color.replace(color + ',', '');
            }
        }

        function filterkeyword(event, keyword) {
            console.log($(keyword).val())
            filters_keyword = encodeURI($(keyword).val());
            filter();
        }

        function filterSize(event, size) {
            if (event.target.checked == true) {
                filters_size += size + ',';
            } else {
                filters_size = filters_size.replace(size + ',', '');
            }
        }

        function filterBrand(event, brand) {
            if (event.target.checked == true) {
                filters_brand += brand + ',';
            } else {
                filters_brand = filters_brand.replace(brand + ',', '');
            }
        }

        function filterXus(event, brand) {
            if (event.target.checked == true) {
                filters_xus += brand + ',';
            } else {
                filters_xus = filters_xus.replace(brand + ',', '');
            }
        }

        function filterkeywordCanel(event, keyword) {

            filters_keyword = '';
            filter();
        }


        function filterColorDEC(event, color) {
            if (event.target.checked == true) {
                filters_color += color + ',';
                filter();
            } else {
                filters_color = filters_color.replace(color + ',', '');
                filter();
            }
        }


        function filterSizeDEC(event, size) {
            if (event.target.checked == true) {
                filters_size += size + ',';
                filter();
            } else {
                filters_size = filters_size.replace(size + ',', '');
                filter();
            }
        }

        function filterBrandDEC(event, brand) {
            if (event.target.checked == true) {
                filters_brand += brand + ',';
                filter();

            } else {
                filters_brand = filters_brand.replace(brand + ',', '');
                filter();
            }
        }

        function filterXusDEC(event, brand) {
            if (event.target.checked == true) {
                filters_xus += brand + ',';
                filter();
            } else {
                filters_xus = filters_xus.replace(brand + ',', '');
                filter();
            }
        }


        function allFilterCancel() {
            location.href = location.origin + location.pathname;
        }

        function filterCancel(param) {
            $('input[data-name="' + param + '"').prop('checked', false);
            filters_color = filters_color.replace(param + ',', '');
            location.href = location.origin + location.pathname + '?' + '&keyword=' + filters_keyword + '&sort=' + filters_sort + '&max_price=' + filters_max_price + '&min_price=' + filters_min_price + '&color=' + filters_color + '&brand=' + filters_brand + '&size=' + filters_size + '&category=' + filters_category + '&xus=' + filters_xus;
        }

        function filterSizeCancel(param) {
            $('input[data-name="' + param + '"').prop('checked', false);
            filters_size = filters_size.replace(param + ',', '');
            location.href = location.origin + location.pathname + '?' + '&keyword=' + filters_keyword + '&sort=' + filters_sort + '&max_price=' + filters_max_price + '&min_price=' + filters_min_price + '&color=' + filters_color + '&brand=' + filters_brand + '&size=' + filters_size + '&category=' + filters_category + '&xus=' + filters_xus;
        }

        function filterBrandCancel(param) {
            filters_brand = filters_brand.replace(param + ',', '');
            location.href = location.origin + location.pathname + '?' + '&keyword=' + filters_keyword + '&sort=' + filters_sort + '&max_price=' + filters_max_price + '&min_price=' + filters_min_price + '&color=' + filters_color + '&brand=' + filters_brand + '&size=' + filters_size + '&category=' + filters_category + '&xus=' + filters_xus;
        }

        function filterXusCancel(param) {
            filters_xus = filters_xus.replace(param + ',', '');
            location.href = location.origin + location.pathname + '?' + '&keyword=' + filters_keyword + '&sort=' + filters_sort + '&max_price=' + filters_max_price + '&min_price=' + filters_min_price + '&color=' + filters_color + '&brand=' + filters_brand + '&size=' + filters_size + '&category=' + filters_category + '&xus=' + filters_xus;
        }

        function filterPriceCancel() {
            location.href = location.origin + location.pathname + '?' + '&keyword=' + filters_keyword + '&sort=' + filters_sort + '&color=' + filters_color + '&size=' + filters_size + '&brand=' + filters_brand + '&xus=' + filters_xus;
        }


    </script>
    @foreach(explode(",",request()->get('xus')) as $k =>  $e)
        <script>
            $(".xusFilterCler{{$e}}").css('display', 'block')
        </script>
    @endforeach
    @foreach(explode(",",request()->get('xus')) as $k =>  $e)
        <script>
            $(".xusFilterCheckbox{{$e}}").attr("checked", "checked");
            $(".xusFilterCheckbox-div{{$e}}").parent().addClass("show");;
        </script>
    @endforeach
@endsection
