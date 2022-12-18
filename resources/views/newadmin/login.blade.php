<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin LOGIN</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('backend/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="shortcut icon" href="{{asset('admin/Untitled-1.jpg')}}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Google Font: Source Sans Pro -->
    <style>
        body {
            font-family: Poppins, sans-serif;
            background-image: linear-gradient(180deg, rgba(var(--bs-body-bg-rgb), 0.01), rgba(var(--bs-body-bg-rgb), 1) 85%), radial-gradient(ellipse at top left, #edf5ce, transparent 50%), radial-gradient(ellipse at top right, rgba(var(--bd-accent-rgb), 0.5), transparent 50%), radial-gradient(ellipse at center right, rgba(var(--bd-violet-rgb), 0.5), transparent 50%), radial-gradient(ellipse at center left, rgba(var(--bd-pink-rgb), 0.5), transparent 50%);
       background-size: cover;
            background-repeat: no-repeat;
        }
        .login-form input[type="text"],
        textarea {
            margin-bottom: 14px;
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
            margin-bottom: 16px;
        }
        .reg-form input[type="password"],
        textarea {
            margin-bottom: 14px;
        }
        .reg-form input[type="email"],
        textarea {
            margin-bottom: 14px;
        }
        .form-control:focus {
            background-color: #fff;
            border-color: #fff;
            outline: 0;
            box-shadow: none !important;
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
    </style>
</head>
<body class="hold-transition login-page   body">
<div class=" container ">
    <div class=" row    d-flex justify-content-center  min-vh-100  ">
        <div class=" col-11  col-lg-6 d-flex justify-content-center  p-0 align-items-center">
            <div class="shadow-lg bg-white rounded p-lg-5   w-100 py-2 p-lg-4">
                <div class="m-2 m-lg-4">
                    <h5 class="text-center  ">Admin Kirish</h5>
                    {{--login star--}}
                    <form action="" method="post" class="login-form  ">
                        @csrf
                        @error('email')
                        <p class="text-danger m-0">{{ $message }}</p>
                        @enderror
                        <label for=""></label>
                        <input type="email" name="email" placeholder="Email" value="{{old('email')}}"
                               class="border-top-0 shadow-0 border-left-0 border-right-0 bg-none  @error('email') is-invalid  @enderror  form-control form-control-sm  "
                               style="background: none ;border-bottom: 2px solid ;     border-image: linear-gradient(to right, #7abef5, #fff284) 30;
" id="input-email">
                        @error('password')
                        <p class="text-danger  position-static m-0">{{ $message}}</p>
                        @enderror
                        <input type="password" name="password" placeholder="Parol" value="{{old('password')}}"
                               class="border-top-0 shadow-0 border-left-0 border-right-0 bg-none @error('password') is-invalid @enderror  form-control form-control-sm w-100 "
                               style="background: none ;border-bottom: 2px solid ;     border-image: linear-gradient(to right, #7abef5, #fff284) 30;
 " id="inputPassword">
                        <div class="float-end me-3">
                            <label for="remember" class="h6 text-dark">Eslabqol</label>
                            <input type="checkbox" name="remember" value="1">
                        </div>
                        <button type="submit" style=" "
                                class="btn p-1 text-white btn-secondary   rounded w-100 ">
                            Tasdiqlang
                        </button>
                    </form>
                    {{--login end--}}
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
@include('sweetalert::alert')
</body>
</html>
