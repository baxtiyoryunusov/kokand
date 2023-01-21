<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Elite Kokand 404</title>
    <meta name="description" content="Kokand |dЙ"/>
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="Kokand,g "/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

    <style>
        @-webkit-keyframes swinging {
            0% {
                transform: rotate(10deg)
            }
            50% {
                transform: rotate(-5deg)
            }
            100% {
                transform: rotate(10deg)
            }
        }

        @keyframes swinging {
            0% {
                transform: rotate(10deg)
            }
            50% {
                transform: rotate(-5deg)
            }
            100% {
                transform: rotate(10deg)
            }
        }

        .mt-n1 {
            margin-top: -30px;
        }

        .mt-n2 {
            margin-top: -100px;
        }

        :root {
            background-image: linear-gradient(180deg, rgba(var(--bs-body-bg-rgb), 0.01), rgba(var(--bs-body-bg-rgb), 1) 85%), radial-gradient(ellipse at top left, rgba(var(--bs-primary-rgb), 0.5), transparent 50%), radial-gradient(ellipse at top right, rgba(var(--bd-accent-rgb), 0.5), transparent 50%), radial-gradient(ellipse at center right, rgba(var(--bd-violet-rgb), 0.5), transparent 50%), radial-gradient(ellipse at center left, rgba(var(--bd-pink-rgb), 0.5), transparent 50%);

            --bd-purple: #4c0bce;
            --bd-violet: #712cf9;
            --bd-accent: #ffe484;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;
            --bd-accent-rgb: 255, 228, 132;
            --bd-pink-rgb: 214, 51, 132;
            --bd-teal-rgb: 32, 201, 151;
            --docsearch-primary-color: var(--bd-violet);
            --docsearch-logo-color: var(--bd-violet);
        }

        html {
            overflow-x: hidden;

        }

        body {
            background-image: linear-gradient(180deg, rgba(var(--bs-body-bg-rgb), 0.01), rgba(var(--bs-body-bg-rgb), 1) 85%), radial-gradient(ellipse at top left, rgba(var(--bs-primary-rgb), 0.5), transparent 50%), radial-gradient(ellipse at top right, rgba(var(--bd-accent-rgb), 0.5), transparent 50%), radial-gradient(ellipse at center right, rgba(var(--bd-violet-rgb), 0.5), transparent 50%), radial-gradient(ellipse at center left, rgba(var(--bd-pink-rgb), 0.5), transparent 50%);

            font-family: Poppins, sans-serif;
            position: relative;
            overflow-x: hidden;
            overflow-y: hidden;
        }

        .zoom-effect-wrapper {
            position: relative;

            overflow: hidden;
            transform: scale(1.02)
        }

        .zoom-effect-img {
            display: block;
            transition: transform .4s ease-in-out
        }

        .zoom-effect:hover .zoom-effect-img {
            transform: scale(1.08)
        }

        img, figure {
            max-width: 100%;
            height: auto;
            vertical-align: middle;
        }

        @media (min-width: 991.98px) {
            .mt-n2 {
                margin-top: -155px;
            }
        }
    </style>
</head>
<body style="height: 104vh">


<div class="d-flex justify-content-center px-5 mt-n1">
    <img class="d-dark-mode-none"
         src="https://around.createx.studio/assets/img/404/lamp-light.png"
         width="348" alt="Lamp"
         style="transform-origin: 50% 0; animation: swinging 3.5s ease-in-out forwards infinite;">
    {{--<img
        class="d-none d-dark-mode-block" src="assets/img/404/lamp-dark.png" width="348" alt="Lamp"
        style="transform-origin: 50% 0; animation: swinging 3.5s ease-in-out forwards infinite;">--}}
</div>
<div class="d-flex justify-content-center pb-3 mt-n2 ">
    <div style="max-width: 340px;">
        <div class="d-flex align-items-center ">
            <h1 class="display-1 mb-0 fw-bolder">404</h1>
            <p class="text-dark lead ps-4 mb-0 ">Voy! Bu sahifa Mavjud emas...</p>
        </div>
    </div>
</div>
<h2 class="h4 text-center ">Bizning toifalarimizdan birini tanlashingiz mumkin</h2>
<div class="row    d-flex justify-content-center mb-xl-5">
    @foreach($menu as $item)
        <div class="col-6 col-lg-2 d-flex justify-content-center my-2  ">
            <!-- Card-->
            <div class="mx-2 " style="">
                <div class="">
                    <a class="" style=""
                       href="{{route('wow-kategory',[$item->slug])}}">
                        <img class="rounded-4 shadow-sm "
                             src="{{asset('')}}{{$item->img}}"  width="180px"  alt="Category image" style="height: 180px!important ; object-fit: cover">

                        </a>

                </div>
            </div>
        </div>
    @endforeach
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>
</html>
