@extends('layout.layout')
@section('title')Kirish
@endsection
@section('css')
    <link rel="stylesheet" href="owlcarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style>
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

            background-color: #e8f0fe !important;

            margin-bottom: 14px;

        }

        .login-form input[type="email"],
        textarea {

            background-color: #e8f0fe !important;

            margin-bottom: 14px;

        }

        .reg-form input[type="text"],
        textarea {

            background-color: #e8f0fe !important;

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

            background-color: #e8f0fe !important;

            margin-bottom: 14px;

        }

        .reg-form input[type="email"],
        textarea {

            background-color: #e8f0fe !important;

            margin-bottom: 14px;

        }

        body {
            background: #e9ecef;
        }
    </style>
@endsection
@section('content')
    <body class=" d-flex  align-items-center justify-content-center  " >

    <div class="container ">


        <div class=" row  bg-dark w-100  " >


                    <div class="col-lg-6">
                        <div class="shadow rounded-0 bg-white w-100 p-4">
                            <h5 class="text-center">Ro'yxatdan o'tish</h5>
                            <div class="m-4">

                                {{--reg star--}}
                                <form action="{{route('register')}}" method="POST" class="reg-form ">
                                    @csrf
                                    @error('reg_name')
                                    <p class="text-danger m-0">{{ $message }}</p>
                                    @enderror
                                    <input type="text" name="reg_name" placeholder="Isim" value="{{old('reg_name')}}"
                                           class="@error('reg_name')
                                               is-invalid
@enderror form-control   rounded-0" id="inputname">
                                    @error('reg_email')
                                    <p class="text-danger m-0">{{ $message }}</p>
                                    @enderror
                                    <input type="email" name="reg_email" placeholder="Email" value="{{old('reg_email')}}"
                                           class="@error('reg_email')
                                               is-invalid
@enderror form-control   rounded-0" id="inputemail">

                                    @error('reg_password')
                                    <p class="text-danger m-0">{{ $message }}</p>
                                    @enderror

                                    <input type="password" name="reg_password" placeholder="Parol"
                                           value="{{old('reg_password')}}" class="@error('reg_password')
                                        is-invalid
@enderror form-control  w-100 rounded-0" id="inputPassword">
                                    @error('confirm')
                                    <p class="text-danger m-0">{{ $message }}</p>
                                    @enderror
                                    <input type="password" name="confirm" placeholder="Parol Takrori" value="{{old('confirm')}}"
                                           class="@error('confirm')
                                               is-invalid
@enderror form-control  w-100 rounded-0" id="inputPassword">

                                    <button type="submit" class="btn  bg-gradient   btn-dark rounded-0 w-100 ">Tasdiqlang
                                    </button>
                                </form>
                                {{--reg end--}}
                            </div>
                        </div>
                    </div>




        </div>
    </div>

    </body>
@endsection

@section('js')
    <script src="js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"></script>
    <script
        src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="{{asset('owlcarousel/dist/owl.carousel.min.js')}}"></script>
@endsection
