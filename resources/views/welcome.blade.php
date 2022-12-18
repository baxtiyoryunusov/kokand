@extends('layout.layout')
@section('css')


    <style>
        .owl-nav {
            display: none;
        }

        .owl-item img {
            width: 150px !important;
            height: 150px !important;
            object-fit: cover;
        }

        .not-found {
            background-image: url("{{asset('admin/Elite_logo_SGV.svg')}}");
            background-position: center;
            background-repeat: no-repeat;
            filter: invert();

        }


        @media (max-width: 868px) {
            .maxsulot-isim {
                font-size: 12px;

            }

            .filter-button .filter-button-img {
                width: 20px !important;
                padding: 0px !important;

            }

            .filter-button {

                padding: 0px !important;

            }

            .maxsulot-isim {
                font-size: 12px;
            }

        }

        .product-img-div img {
            background-image: url("{{asset("placeholder")}}");
        }


        @media (min-width: 868px) {

        }

        @media (min-width: 1199.98px) and (max-width: 1399.98px) {
            .product -img-div img {
                max-width: 200px !important;
                min-width: 100px !important;
            }
        }

        @media (max-width: 767.98px) {
            .navbar-brand span, .sub-cat .nav-link, .ust-page {
                font-size: 0.9rem !important;

            }

            .ust-page {
                font-size: 0.8rem !important;

            }

            .alt-page {
                font-size: 0.7rem !important;
            }
        }

        .sub-cat {
            overflow-x: auto;
            overflow-y: hidden;
        }




    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>

@endsection

@section('title')
    @if($kategoryAll)
        @foreach($kategoryAll as $item) {{$item->name}} @endforeach | Elita poyabzallari | Poyafzal modellari bilan moda izlari
    @else
        @if($kategory) {{$kategory?$kategory->name:'barchasi'}} | Elita poyabzallari | Poyafzal  modellari bilan moda izlari @endif
    @endif
@endsection
@section('content')
    <div class="pt-5 category-page">
        <div class="pt-2">
            <div class="mx-2 mt-1 mt-mg-5 mx-md-5 d-flex justify-content-center">
                {{--   div overflow--}}
                <div class="sub-cat d-flex py-2 mx-2 ">
                    {{--all kategory--}}
                    @if($kategoryAll)
                        <div class="d-flex align-items-center justify-content-center">
                            @foreach($kategoryAll as $item)
                                <a class="nav-link fw-bold bg-light text-muted me-2 px-2  rounded text-capitalize"
                                   href="{{route('wow-kategory',[$item->slug])}}"><span
                                        class="">{{$item->name}}</span></a>
                            @endforeach
                        </div>
                    @endif
                    {{--all kategory end--}}
                    <div class="d-flex  align-items-center ">
                        @if(!$kategoryAll)
                            <a class="navbar-brand text-capitalize fs-5 py-1 mx-2 "
                               href="{{route('wow-kategory',[$kategory->slug])}}">
                    <span
                        class=" fw-bolder  border border-2 border-lg-4 border-danger border-top-0 border-start-0  border-end-0"> {{$kategory->name}}</span></a>
                        @endif
                        @if(!$kategoryAll)
                            @foreach($kategory->getChildren as $item)
                                <a class=" nav-link fw-bold bg-light text-muted me-2 px-2  rounded text-capitalize"
                                   href="{{route('wow-kategory',[$item->slug])}}"> <span
                                        class="">{{$item->name}}</span></a>
                            @endforeach
                        @endif
                    </div>
                </div>
                {{-- end div overflow--}}
                <button class="btn ms-auto d-flex py-2  mx-2 border-0 filter-button align-middle" type="button"
                        data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                    <p class="filter-button-text fw-bold fs-5 d-none m-0 pe-2  d-lg-block">Filter </p>
                    <img class="filter-button-img" src="{{asset('filter.png')}}" width="25px" alt="">
                </button>
            </div>
        </div>
    </div>
    @if( count($product)>0)
        <div class="carusel-main  my-2 px-lg-5  my-md-4">
            <p class="text-center fw-bold">Kategoriyaning diqqatga sazovor mahsulotlari</p>
            <div class="owl-carousel owl-theme my-md-4 owl-loaded">
                <div class="owl-stage-outer ">
                    <div class="owl-stage m-1">
                        @foreach($silder as $key =>$itemProduct)
                            @foreach($itemProduct->getColorValueImgFrontend as $key =>$item)
                                <div class="owl-item zoom-effect">
                                    <div class="zoom-effect-wrapper rounded-3">

                                        <a href="{{route('card',['slug'=>$itemProduct->slug,'url'=>$item->id])}}"

                                               class="owl-a{{$key}}">

                                                <img src="{{asset('')}}{{$item->getImgNull?$item->getImgNull->img:''}}"
                                                     onerror="this.src='{{asset("eliteKokand/productone-1666530231.pngwing.com.png")}}';"
                                                     class="zoom-effect-img img-fluid rounded" style="" alt="">
                                            </a>

                                    </div>
                                </div>
                            @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid  mt-md-5 ">
            <div class="ust-page ">

                {{ $product->links('vendor.pagination.maxsulot') }}
            </div>

            <div class="row mx-0 mx-lg-5 mb-5 pb-5 product-card">
                @foreach($product as $productItem)

                    @foreach($productItem->getColorValueImgFrontend as $colorItem)

                        <div
                            class=" col-6   col-sm-6 col-md-4  col-lg-4 col-xl-3 col-xxl-3 d-flex h-100  d-flex align-items-top   justify-content-center  ">
                            <div class="card-body bg-white   p-1 p-lg-2  product-img-div ">

                                {{--IMG START--}}
                                <div class="zoom-effect my-1">
                                    <div class="zoom-effect-wrapper   rounded">
                                        <a href="{{route('card',['slug'=>$productItem->slug,'url'=>$colorItem->id])}}">
                                            <img
                                                src="{{asset('')}}{{$colorItem->getImgNull?$colorItem->getImgNull->img:''}}"
                                                onerror="this.src='{{asset("eliteKokand/productone-1666530231.pngwing.com.png")}}';"
                                                class="zoom-effect-img  img-fluid rounded" style="" alt="">
                                        </a>
                                    </div>
                                </div>

                                {{--IMG END--}}
                                {{--CARD BOTTOM START--}}
                                <div class="fs-6 ">
                                    <div>


                                    {{--ProDUCT NAME CONTANER START--}}
                                    <div class="">
                                        <p class="maxsulot-isim text-center  m-0">{{$productItem->name.'  '}}</p>
                                    </div>
                                    {{--ProDUCT NAME CONTANER END--}}
                                    {{--ProDUCT ICON CONTANER START--}}
                                    <div class=" pt-1">
                                        <div class="d-flex justify-content-between ">
                                            <div
                                                class=" d-inline text-warning d-flex align-content-center justify-content-end">
                                                <div class="fw-bolder maxsulot-isim">{{$productItem->yangi_price}}
                                                    So'm
                                                </div>
                                            </div>
                                            <div>
                                                <ul class="m-0 d-inline d-flex float-start align-items-center justify-content-center list-unstyled icons">
                                                    <li class="icon fast-view" data-id="{{$productItem->id}}" data-color="{{$colorItem->id}}"
                                                        data-bs-toggle="modal" data-bs-target="#Prodyct-view"
                                                        style="cursor: pointer">
                                                        <i class="bi bi-arrows-fullscreen"></i>
                                                    </li>
                                                    <li class="icon mx-3">
                                                        <i class="bi bi-balloon-heart"></i>
                                                    </li>
                                                    <li class="icon">
                                                        <i class="bi bi-bag-check"></i>
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
                @endforeach
                <div class="alt-page p-2">
                    {{ $product->links('vendor.pagination.tailwind') }}
                </div>
            </div>
        </div>
    @else
        <div class="container not-found my-lg-5 py-5 " style="height: 400px">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 text-center" style="filter: invert(100%)">
                    <i class="bi bi-emoji-frown  " style="font-size: 12rem; "></i>
                    <p>Mahsulot Topilmadi!</p>
                </div>
            </div>
        </div>
    @endif




    {{--modal Filter view--}}
    <div class="offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
         id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
        <div class="offcanvas-header">
            <button type="button" class="btn-close text-reset"  data-bs-dismiss="offcanvas" aria-label="Close"></button>
            <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Colored with scrolling</h5>
        </div>
        <div class="offcanvas-body">
            <p>Try scrolling the rest of the page to see this option in action.</p>
        </div>
    </div>
    {{--modal Filter view--}}


    {{--modal Prodyct view--}}
    <!-- Modal -->
    <div class="modal fade" id="Prodyct-view" tabindex="-1" aria-labelledby="Prodyct-viewLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content ">

                <button type="button" class="btn-close ms-auto fs-4  m-1"
                        data-bs-dismiss="modal" onclick="clearfastviewbody()" aria-label="Close"></button>

                <div class="modal-body fast-view-body pt-0" style="">
                    ...
                </div>

            </div>
        </div>
    </div>
    <!-- Button trigger modal -->

    {{--modal Prodyct view--}}

@endsection
@section('js')

    <script>

        $(".fast-view").click(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
            })
            $('#Prodyct-view .modal-body').html('<div class="w-100 text-center pt-5"><div class="spinner-border" style="width: 100px;height: 100px" role="status">\n' +
                '  <span class="visually-hidden">Loading...</span>\n' +
                '</div></div>');

            // LOADING THE AJAX MODAL


            $.ajax({
                url: '{{route('fastView')}}',
                method: 'POST',
                data: {
                    id: $(this).data('id'),
                    color: $(this).data('color'),
                },

                success: function (response) {
                    $('.fast-view-body').html(" ")
                    $('.fast-view-body').html(response)
                },
                error: function () {

                }
            })
        })
        function clearfastviewbody(){
            $('.fast-view-body').html(" ")
        }



        /* $( document ).ready(function() {*/
        /*           $.ajax({
                       url: '',
                       method: 'POST',
                       data: {
                           ir: dataID,
                       },
                       async: false,
                       success: function (response) {
                           $('#row' + dataID).remove(),
                               toastr["success"]("O\'chirildi")

                       },
                       error: function () {

                       }
                   })
               });*/
        var owl = $('.owl-carousel');
        owl.owlCarousel({

            margin: 10,
            autoplay: true,
            autoplayHoverPause: true,
            lazyLoad: true,
            autoWidth: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 2,

                },
                600: {
                    items: 5,

                },
                1000: {
                    items: 7,

                    loop: false
                }
            }
        })
        owl.on('mousewheel', '.owl-stage', function (e) {
            if (e.deltaY > 0) {
                owl.trigger('next.owl');
            } else {
                owl.trigger('prev.owl');
            }
            e.preventDefault();
        });
    </script>
@endsection
