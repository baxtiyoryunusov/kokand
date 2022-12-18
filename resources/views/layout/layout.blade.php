<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta name="description" content="Kokand | "/>
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="Kokand "/>
    @yield('fav_icon')
    <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="shortcut icon" href="{{asset('admin/Untitled-1.jpg')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('owlcarousel/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('owlcarousel/dist/assets/owl.theme.default.min.css')}}">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('checkbox/checkbox.css')}}">
    <link rel="stylesheet" href="{{asset('checkbox/radio.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/toastr/toastr.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="{{asset('frontend/layout/css/main.css?v=12299')}}">
    <link rel="stylesheet" href="{{asset('frontend/layout/css/dark.css?v=16801')}}">
    <link rel="stylesheet" href="{{asset('frontend/layout/css/nouislider.css?v=2')}}">
    <script src="{{asset('owlcarousel/dist/owl.carousel.min.js')}}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            lazyLoadingImages();
        });

        function lazyLoadingImages() {
            const target = document.querySelectorAll(".lazy");
            const callback = (entries) => {
                entries.forEach((entry) => {

                    if (entry.isIntersecting) {
                        entry.target.src = entry.target.dataset.src;

                    }
                });
            }
            const options = {
                rootMargin: "50px"
            }
            const observer = new IntersectionObserver(callback, options);
            const images = document.querySelectorAll(".lazy");
            images.forEach((image) => {
                observer.observe(image)
            });
        }
    </script>
    @yield('css')
</head>


<body class="{{Cookie::get('dark')?'dark-mode':''}}" id="body">

<div class="loaded-spin ">
    <div class="spinner-border d-flex" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>
<div class="menu wrap">
    @include('menu.index',compact('url'))
</div>
@yield('content')
<div class="carusel-main container  px-5  my-4" style="">
    @if(Cookie::get('Store'))
    <p class="text-center fw-bold store-title ">Yaqinda ko'rib chiqilgan mahsulot</p>
    @endif
    <div class=" owl-carousel lll owl-theme my-md-4 owl-loaded">
        <div class="owl-stage-outer ">
            <div class="owl-stage store ">


            </div>
        </div>
    </div>
</div>
@include('footer.index')
{{--modal Prodyct view--}}
<!-- Modal -->
<div class="modal fade" id="Prodyct-view" tabindex="-1" aria-labelledby="Prodyct-viewLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content ">
            <button type="button" class="btn ms-auto fs-2 border-0  m-1"
                    data-bs-dismiss="modal" onclick="clearfastviewbody()" aria-label="Close"><i
                    class=" text-dark bi bi-x-lg"></i></button>
            <div id="status">
            </div>
            <div class="modal-body fast-view-body pt-0" style="">
            </div>
        </div>
    </div>
</div>
<!-- Button trigger modal -->
{{--modal Prodyct view--}}
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="//unpkg.com/jscroll/dist/jquery.jscroll.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script src="{{asset('frontend/toastr/toastr.min.js')}}"></script>
<script src="{{asset("frontend/layout/js/main.js?v=130")}}"></script>
<script src="{{asset("frontend/layout/js/nouislider.js?v=69")}}"></script>
@include('sweetalert::alert')
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
    })

    function addfavori(color, customer) {
        $.ajax({
            url: '{{route('favori.store')}}',
            method: 'POST',
            data: {
                colorId: color,
                curomerId: customer,
            },
            success: function (response) {
                if (response.status == 0) {
                    $('.main-favori-icon-div').html(' ')
                    $('.main-favori-icon-div').html('<a href="{{route('favori.index')}}" class=" position-relative text-dark">\n' +
                        '                            <i class="bi bi-heart-fill"><span\n' +
                        '                                    class="position-absolute top-0 left-1 start-100 translate-middle badge rounded-pill bg-danger"\n' +
                        '                                    style="height: 15px;left: 20px!important;">\n' +
                        '                            <span class="visually-hidden">unread messages</span>\n' +
                        '                        </span></i>\n' +
                        '                        </a>')
                }
                $('.div-favori-icon' + color).html(' ')
                $('.div-favori-icon' + color).html('<button class="btn border-0 p-1 " type="button"\n' +
                    '                                                                                    onclick="addDestroy(' + color + ',' + customer + ')">\n' +
                    '                                                                                <i class="bi bi-heart-fill"></i>\n' +
                    '                                                                            </button>')

            },
            error: function () {

            }
        })
    }
</script>
@if($errors->any())
    @foreach ($errors->all() as $error)
        <script>
            toastr["error"]("{{ $error }}<br>")
        </script>
    @endforeach
@endif
@yield('js')


</body>
</html>
