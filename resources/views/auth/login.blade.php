@extends('layout.layout')
@section('title')Kirish
@endsection
@section('css')


    <style>


        html {
            overflow-x: hidden !important;
        }

        :root {
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

        .login-form input[type="text"],
        textarea {

            background-color: #e8f0fe !important;

            margin-bottom: 14px;

        }

        .login-form input[type="text"]::placeholder {

            color: black

        }

        .login-form input[type="email"]::placeholder {

            color: black

        }

        .login-form input[type="password"]::placeholder {

            color: black
        }

        .login-form input[type="password"],
        textarea {


            margin-bottom: 14px;

        }

        .login-form input[type="email"],
        textarea {


            margin-bottom: 14px;

        }


        .reg-form input[type="text"],
        textarea {

            /* background-color: #e8f0fe !important;*/

            margin-bottom: 16px;

        }

        .reg-form input[type="text"]::placeholder {

            color: black

        }

        .reg-form input[type="email"]::placeholder {

            color: black

        }

        .reg-form input[type="password"]::placeholder {

            color: black
        }

        .reg-form input[type="password"],
        textarea {

            /* background-color: #e8f0fe !important;*/

            margin-bottom: 14px;

        }

        .reg-form input[type="email"],
        textarea {

            /*//background-color: #e8f0fe !important;*/

            margin-bottom: 14px;

        }

        body {
            overflow-x: hidden;
        }

        .login-btn .active {
            background: #ffffff !important;;
            color: #000 !important;;
        }

        @media (max-width: 768px) {


        }

        @media (min-width: 768px) {

        }

        .form-control:focus {
            border: none;
            outline: 0;
            box-shadow: none !important;
        }

        @media (max-width: 575.98px) {
            p {
                font-size: 12px;
            }
        }


    </style>
@endsection
@section('content')
    <div class="container mb-5">
        <div class="row m-2 m-sm-0  d-flex justify-content-center align-items-center min-vh-100 ">
            <div class="col-12  ">
                <div class="row mt-4 mt-md-0 d-flex justify-content-center   ">
                    <div class="col-12 col-md-6  ">
                        <div class="d-flex justify-content-center login-btn" style="">
                            <button class="btn col1 btn-dark rounded active mx-1 w-50"
                                    onclick="col1(this,'#collapseExample','#collapseExample1')">Kirish
                            </button>
                            <button class="btn col btn-dark rounded mx-1 w-50"
                                    onclick="col(this,'#collapseExample','#collapseExample1')">Ro'yxatdan o'tish
                            </button>
                        </div>
                        <div class="shadow rounded   bg-white p-2 p-md-4 my-3 mt-5 m-md-1" id="collapseExample">
                            <h5 class="text-center ">Kirish</h5>
                            <div class="m-2 m-lg-4">
                                {{--login star--}}
                                <form action="" method="post" class="login-form m-o">
                                    @csrf
                                    @method('POST')
                                    @error('email')
                                    <p class="text-danger m-0">{{ $message }}</p>
                                    @enderror
                                    <input type="email" name="email" placeholder="Email" value="{{old('email')}}"
                                           class=" border-top-0 shadow-0 border-left-0 border-right-0 bg-none @error('email') is-invalid  @enderror  form-control form-control-sm "
                                           id="inputName"
                                           style=" background: none ;border-bottom: 2px solid ;     border-image: linear-gradient(to right, #7abef5, #fff284) 30">

                                    @error('password')
                                    <p class="text-danger  position-static m-0">{{ $message}}</p>
                                    @enderror
                                    <input type="password" name="password" placeholder="Parol"
                                           value="{{old('password')}}"
                                           class="border-top-0 shadow-0 border-left-0 border-right-0 bg-none  @error('password') is-invalid @enderror  form-control  form-control-sm w-100 "
                                           id="inputPassword"
                                           style=" background: none ;border-bottom: 2px solid ;  border-image: linear-gradient(to right, #7abef5, #fff284) 30 ">
                                    <div class="float-end me-3 mb-2">
                                        <label for="remember" class="fw-bold ">Eslab qoling</label>
                                        <input type="checkbox" class=" " name="remember" value="1">

                                    </div>
                                    <button type="submit" class="btn p-1   btn-secondary rounded w-100 ">Tasdiqlang
                                    </button>
                                </form>
                                {{--login end--}}
                            </div>
                        </div>
                        <div class="shadow rounded bg-white d-none  p-2 p-md-4 my-3 m-md-1" id="collapseExample1">
                            <h5 class="text-center ">Ro'yxatdan o'tish</h5>
                            <div class="m-2 m-lg-4">

                                {{--reg star--}}
                                <form action="{{route('register')}}" method="POST" class="reg-form m-0">
                                    @csrf
                                    @error('reg_name')
                                    <p class="text-danger m-0">{{ $message }}</p>
                                    @enderror
                                    <input type="text" name="reg_name" placeholder="Isim" value="{{old('reg_name')}}"
                                           class="border-top-0 shadow-0 border-left-0 border-right-0 bg-none @error('reg_name')
                                               is-invalid
@enderror form-control form-control-sm  rounded-0" id="input_name"
                                           style="background: none ;border-bottom: 2px solid ;  border-image: linear-gradient(to right, #7abef5, #fff284) 30">
                                    @error('reg_email')
                                    <p class="text-danger m-0">{{ $message }}</p>
                                    @enderror
                                    <input type="email" name="reg_email" placeholder="Email"
                                           value="{{old('reg_email')}}"
                                           class="border-top-0 shadow-0 border-left-0 border-right-0 bg-none @error('reg_email')
                                               is-invalid
@enderror form-control  form-control-sm rounded-0" id="inputemail"
                                           style="background: none ;border-bottom: 2px solid ;  border-image: linear-gradient(to right, #7abef5, #fff284) 30">

                                    @error('reg_password')
                                    <p class="text-danger m-0">{{ $message }}</p>
                                    @enderror

                                    <input type="password" name="reg_password" placeholder="Parol"
                                           value="{{old('reg_password')}}"
                                           class="border-top-0 shadow-0 border-left-0 border-right-0 bg-none @error('reg_password')
                                               is-invalid
@enderror form-control form-control-sm w-100 rounded-0" id="inputRegPassword"
                                           style="background: none ;border-bottom: 2px solid ;  border-image: linear-gradient(to right, #7abef5, #fff284) 30">
                                    @error('confirm')
                                    <p class="text-danger m-0">{{ $message }}</p>
                                    @enderror
                                    <input type="password" name="confirm" placeholder="Parol Takrori"
                                           value="{{old('confirm')}}"
                                           class="border-top-0 shadow-0 border-left-0 border-right-0 bg-none @error('confirm')
                                               is-invalid
@enderror form-control form-control-sm w-100 rounded-0" id="inputPassword"
                                           style="background: none ;border-bottom: 2px solid ;  border-image: linear-gradient(to right, #7abef5, #fff284) 30">

                                    <button type="submit" class="btn p-1  btn-secondary  w-100">Tasdiqlang
                                    </button>
                                </form>
                                {{--reg end--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')



    @error('reg_password')
    <script>
        $('#collapseExample').addClass('d-none')
        $('#collapseExample1').removeClass('d-none')
        $('.col1').removeClass('active')
        $('.col').addClass('active')
    </script>
    @enderror
    @error('reg_email')
    <script>
        $('#collapseExample').addClass('d-none')
        $('#collapseExample1').removeClass('d-none')
        $('.col1').removeClass('active')
        $('.col').addClass('active')
    </script>
    @enderror
    @error('confirm')
    <script>
        $('#collapseExample').addClass('d-none')
        $('#collapseExample1').removeClass('d-none')
        $('.col1').removeClass('active')
        $('.col').addClass('active')
    </script>
    @enderror   @error('reg_name')
    <script>
        $('#collapseExample').addClass('d-none')
        $('#collapseExample1').removeClass('d-none')
        $('.col1').removeClass('active')
        $('.col').addClass('active')
    </script>
    @enderror


    <script>
        function col(e, a, b) {
            $(a).addClass('d-none')
            $(b).removeClass('d-none')
            $('.col1').removeClass('active')
            $(e).addClass('active')

        }

        function col1(e, a, b) {
            $(b).addClass('d-none')
            $(a).removeClass('d-none')
            $(e).addClass('active')
            $('.col').removeClass('active')

        }
    </script>
@endsection
