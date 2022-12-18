@extends('layout.layout')
@section('title','Elite Kokand')
@section('css')

@endsection
@section('content')

    <div class="row d-flex">
        {{--MEGA Carusel START--}}
        <div class="col-12  order-lg-4 mb-lg-5 shadow">
            <div class="mega-carousel owl-carousel owl-theme owl-loaded ">
                <div class="owl-stage-outer  ">
                    <div class="owl-stage">
                        <div class="owl-item "><a href="https://www.elitekokand.uz/kategory/poyabzal-ayollar?" class="owl-a1">
                                <img class="owl-lazy d-sm-block d-none"
                                     data-src="{{asset('img/menu4.jpg')}}"
                                     >
                                <img class="owl-lazy d-sm-none img-fluid vh-100" style="object-fit: cover"
                                     data-src="https://www.elleshoes.com/Uploads/SayfaTasarim/Sayfa1/c8a1ecfd-ad89-4168-8ba2-5f3e2cb62a60.jpg"
                                     >
                            </a>
                        </div>

                        <div class="owl-item "><a href="https://www.elitekokand.uz/kategory/poyabzal-ayollar?" class="owl-a3">
                                <img class="owl-lazy d-sm-block d-none"
                                     data-src="{{asset('img/menu1.jpg')}}"

                                     >
                                <img class="owl-lazy d-sm-none img-fluid vh-100" style="object-fit: cover"
                                     data-src="{{asset('img/menumedia2.jpg')}}"
                                     >
                            </a>
                        </div>
                        <div class="owl-item "><a href="https://www.elitekokand.uz/kategory/poyabzal-ayollar?" class="owl-a4">
                                <img class="owl-lazy d-sm-block d-none"
                                     data-src="{{asset('img/menu4.jpg')}}"
                                     >
                                <img class="owl-lazy d-sm-none img-fluid vh-100" style="object-fit: cover"
                                     data-src="{{asset('img/menumedia3.webp')}}"
                                     >
                            </a>
                        </div>
                        <div class="owl-item "><a href="https://www.elitekokand.uz/kategory/poyabzal-erkak?&brand=elle," class="owl-a5">
                                <img class="owl-lazy d-sm-block d-none"
                                     data-src="{{asset('img/menu5.jpg')}}"
                                     >
                                <img class="owl-lazy d-sm-none img-fluid vh-100" style="object-fit: cover"
                                     data-src="{{asset('img/menumedia4.jpg')}}"
                                     >
                            </a>
                        </div>
                        <div class="owl-item m-0"><a href="https://www.elitekokand.uz/kategory/poyabzal-ayollar?" class="owl-a6">
                                <img class="owl-lazy d-sm-block d-none"
                                     data-src="{{asset('img/menu6.jpg')}}"
                                     >
                                <img class="owl-lazy d-sm-none img-fluid vh-100" style="object-fit: cover"
                                     data-src="{{asset('img/menumedia5.jpg')}}"
                                     >
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--MEGA Carusel End--}}

        {{--categoriy item START--}}
        <div class="col-12 mt-lg-5 order-lg-2" style="">
            <div class="row py-3 order-1 category-div mx-2 ">
                @if($menu)
                    @foreach($menu as $item)
                        <div class="col-6 col-md-4 col-lg-2   d-flex justify-content-center ">
                            <!-- Card-->
                            <div class="card zoom-effect border-0 rounded-3 m-2 mt-3 m-lg-3 shadow overflow-hidden"
                                 style="border-radius:15px!important; ">
                                <div class="zoom-effect-wrapper rounded-3">
                                    <img class="lazy zoom-effect-img"
                                         data-src="{{asset('')}}{{$item->img}}" style="object-fit: cover; "
                                         >
                                </div>
                                <a class="home-kat-btn card-body d-flex flex-column justify-content-end align-items-start position-absolute top-0 start-0 w-100 h-100 text-decoration-none zindex-3"
                                   style="background: rgba(0, 0, 0, 0.06);"
                                   href="{{route('wow-kategory',[$item->slug])}}">
                                    <span
                                        class="text-white border home-kat-span  border-1 rounded-pill fs-sm fw-semibold   text-truncate px-1 p-lg-1 px-lg-2"
                                        title="{{$item->name}}"
                                        style="backdrop-filter: blur(5px);max-width: 100%">{{$item->name}}</span></a>
                            </div>
                        </div>
                    @endforeach

                @endif
            </div>
        </div>
        <div class="col-12 mt-lg-5 order-lg-2" style="">
            <div class="row py-3 order-1 category-div mx-2 ">
                <h3 class="text-center mb-lg-5">Brendlar</h3>
                @if($brendAll)
                    @foreach($brendAll as $item)
                        <div class="col-6 col-md-4 col-lg-2 mb-lg-5 d-flex justify-content-center ">
                            <!-- Card-->
                            <div class="card zoom-effect border-0 rounded-3 m-2 mt-3 m-lg-3 shadow overflow-hidden"
                                 style="border-radius:15px!important; ">
                                <div class="zoom-effect-wrapper rounded-3">
                                    <img class="lazy zoom-effect-img"
                                         data-src="{{asset('')}}{{$item->img}}" style="object-fit: cover; "
                                        >
                                </div>
                                <a class="home-kat-btn card-body d-flex flex-column justify-content-end align-items-start position-absolute top-0 start-0 w-100 h-100 text-decoration-none zindex-3"
                                   style="background: rgba(0, 0, 0, 0.06);"
                                   href="{{route('wow-kategory',['barchasi'])}}{{'?&brand='.$item->slug.','}}">
                                    <span
                                        class="text-white border home-kat-span  border-1 rounded-pill fs-sm fw-semibold   text-truncate px-1 p-lg-1 px-lg-2"
                                        title="{{$item->name}}"
                                        style="backdrop-filter: blur(5px);max-width: 100%">{{$item->name}}</span></a>
                            </div>
                        </div>
                    @endforeach

                @endif
            </div>
        </div>


        {{--categoriy item END--}}
        {{--Carusel item START--}}
        <div class="col-12 mt-lg-3  mt-lg-3  order-lg-3" style="">
            <div class="row py-2  ">
                <div class=" my-2 px-lg-2">
                    <p class="text-center fw-bold">Diqqatga sazovor mahsulotlar</p>
                    <div class="Home-owl owl-carousel  owl-theme my-md-4 owl-loaded">
                        <div class="owl-stage-outer ">
                            <div class="owl-stage m-2 d-flex">

                                @foreach($silder as $key =>$ProsuctItem)
                                    @foreach($ProsuctItem->getColorValueImgFrontend as $item)

                                        <div class="owl-item owl-item-mainn  shadow-sm zoom-effect">
                                            <div class="zoom-effect-wrapper rounded-3">
                                                <a href="{{route('card',['slug'=>$ProsuctItem->slug,'url'=>$item->id])}}"
                                                   class="owl-a{{$key}}">

                                                    <img
                                                        data-src="{{asset('')}}{{$item->getImgNull->img}}"
                                                        class="owl-lazy zoom-effect-img  rounded"  >
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--Carusel item--}}
        <div class="order-lg-2">
           
            <section class=" bg-cover" style="background-image: url(https://yevgenysim-turkey.github.io/shopper/assets/img/covers/cover-4.jpg)  ; min-height: 80vh;background-size: cover ;background-position: center" >
                <div class="container-">
                    <div class="row justify-content-end mx-5">
                        <div class="col-12 col-md-8 col-lg-6  d-flex align-items-center" style="min-height: 80vh">
                            <div>
                                <!-- Heading -->
                                <h3 class="mb-4">
                                    Yozgi kolleksiyadan -50% oling
                                </h3>

                                <!-- Counter -->
                                <div class="d-flex mt-5 " data-countdown="" data-date="Dec 31, 2025 00:00:00">
                                    <div class="text-center">
                                        <div class="fs-1 fw-bolder text-primary" data-days="">1109</div>
                                        <div class=" text-muted">Days</div>
                                    </div>
                                    <div class="px-1 px-md-4">
                                        <div class="fs-2 fw-bolder text-primary">:</div>
                                    </div>
                                    <div class="text-center">
                                        <div class="fs-1 fw-bolder text-primary" data-hours="">04</div>
                                        <div class=" text-muted">Hours</div>
                                    </div>
                                    <div class="px-1 px-md-4">
                                        <div class="fs-2 fw-bolder text-primary">:</div>
                                    </div>
                                    <div class="text-center">
                                        <div class="fs-1 fw-bolder text-primary" data-minutes="">47</div>
                                        <div class=" text-muted">Minutes</div>
                                    </div>
                                    <div class="px-1 px-md-4">
                                        <div class="fs-2 fw-bolder text-primary">:</div>
                                    </div>
                                    <div class="text-center">
                                        <div class="fs-1 fw-bolder text-primary" data-seconds="">30</div>
                                        <div class=" text-muted">Seconds</div>
                                    </div>
                                </div>

                                <!-- Button -->
                                <a class="btn btn-dark mt-5 rounded-0" href="{{route('wow-kategory',['barchasi'])}}">
                                    Hozir xarid qiling <i class="bi bi-chevron-right ms-2"></i>
                                </a>
                            </div>



                        </div>
                    </div>
                </div>
            </section>

        </div>

    </div>


@endsection

@section('js')
    <script>
        var owl = $('.mega-carousel');
        owl.owlCarousel({
            nav: false,
            dots: false,
            lazyLoad: true,
            autoplay: true,
            responsive: {
                0: {
                    items: 1,
                    margin: 1,
                },

            }

        });

    </script>
    <script>

        function filter() {
            location.href = location.origin + location.pathname + 'kategory/barchasi?' + '&keyword=' + filters_keyword  ;
        }

        function filterkeyword(event, keyword) {

            filters_keyword = $(keyword).val();
            filter();
        }



    </script>
@endsection

