@extends('newadmin.layout')
@section('title','Profile')
@section('css')
    <style>
        .submit-btn {
            margin-top: 10px;

            color: #fff;
            background: linear-gradient(to right, #db4909, #dcae04);,
        color: #313149;
            border-radius: 5px;
            display: inline-block;
            font-size: 16px;
            padding: 3px;


        }

        .submit-btn:hover {
            background: linear-gradient(to right, #dcae04, #db4909);
            color: #ffffff !important;
            transition: transform .3s ease-in-out;


        }

        .form-control {
            margin-bottom: 15px !important;
            border-top: none;
            border-left: none;
            border-right: none;
            background: none;
            border-bottom: 2px solid;
            border-image: linear-gradient(to right, #db4909, #dcae04) 30;
        }

        .form-control:focus {

            background-color: #fff;
            border-color: #fff;
            outline: 0;
            box-shadow: none !important;
        }

    </style>
@endsection

@section('content')

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="link-dark" href="{{route('newadmin')}}">Bosh sahifa</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profil</li>
            </ol>
        </nav>
        <div class="row align-items-center  justify-content-center " style="height: 80vh">
            <div class="col-12 col-lg-3 р-100">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-center">{{Auth::user()->name}}</h4>
                        <h6 class="text-center">{{Auth::user()->email}}</h6>
                    </div>
                </div>


            </div>
            <div class="col-12 col-lg-9 ">
                <div class="row   " style="">
                    <div class="col-12 col-lg-12">
                        <div class="card py-5 my-2">
                            <div class="card-body d-flex  justify-content-center  p-0 ">
                                <form action="{{route('admin_profile_update',Auth::user()->id)}}" method="POST"
                                      enctype="multipart/form-data" class="kat-form"
                                      id="kat-q-form">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12 col-lg-12">
                                            <div class="form-floating   my-2">
                                                <x-input filed="name" id="name" class="" type="text" value="{{Auth::user()->name}}" label="Kategory Isim"   placeholder="Kategory Isim" yulduz="true"/>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-12">
                                            <x-input filed="email" id="email" class="" type="email" value="{{Auth::user()->email}}" label="Email"  placeholder="Email" yulduz="true"/>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit"
                                                    class="btn  submit-btn   w-100 text-bold "
                                                    id="kat_q">Tasdiqlang
                                            </button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>


                    </div>
                    <div class="col-12 col-lg-12 ">

                        <div class="card py-5 my-2">
                            <div class="card-body d-flex justify-content-center  p-0 ">


                                <form action="{{route('admin_profile_update_password',Auth::user()->id)}}"
                                      method="POST"
                                      enctype="multipart/form-data" class="kat-form"
                                      id="kat-q-form">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12 col-lg-12">
                                            <x-input filed="password" id="password" class="" type="password" value="" label="Email"  placeholder="Email" yulduz="true"/>
                                        </div>
                                        <div class="col-12 col-lg-12">
                                            <x-input filed="confirm_password" id="confirm_password" class="" type="password" value="" label="Password Confirm" attr=""  placeholder="Password Confirm" yulduz="true"/>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit"
                                                    class="btn  submit-btn   w-100 text-bold "
                                                    id="kat_q">Tasdiqlang
                                            </button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>


                    </div>
                </div>

            </div>


        </div>
    </div>
    </div>

@endsection
@section('js')
@endsection
