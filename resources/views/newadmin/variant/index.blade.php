@extends('newadmin.layout')
@section('title',"variant")
@section('css')
    <style>
        .submit-btn{
            margin-top: 10px;

            color:#fff;
            background:               linear-gradient(to right, #db4909, #dcae04);,

        color: #313149;
            border-radius: 5px;
            display: inline-block;
            font-size: 16px;
            padding: 3px;


        }  .submit-btn:hover{
               background:  linear-gradient(to right,  #dcae04,#db4909);
               color: #ffffff !important;
               transition: transform .3s ease-in-out;


           }
        .form-control{
            margin-bottom: 15px!important;
            border-top: none;
            border-left: none;
            border-right: none;
            background: none ;border-bottom: 2px solid ; border-image: linear-gradient(to right, #db4909, #dcae04) 30;
        }
        .form-control:focus {

            background-color: #fff;
            border-color: #fff;
            outline: 0;
            box-shadow: none!important;
        }

    </style>
@endsection
@section('content')

            <div class="container " style="height: 100vh">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="link-dark" href="{{route('newadmin')}}">Bosh sahifa</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Variant</li>
                    </ol>
                </nav>

                <form action="{{route('variant.store')}}" enctype="multipart/form-data" method="POST" class="kat-form"
                      id="kat-q-form">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <x-input filed="name" id="name" class="" type="text" value="" label="Kategory Isim" attr="onkeyup=toSeoUrl(this)"  placeholder="Kategory Isim" yulduz="true"/>

                        </div>
                        <div class="col-12 col-lg-12">
                            <x-input filed="slug" id="input-categoti-seo" class="" type="text" value="" label="Url" attr="onkeyup=toSeoUrl(this)"  placeholder="Url" yulduz="true"/>

                        </div>
                        <div class="col-12">
                            <button type="submit"
                                    class="btn btn-outline-secondary text-warning rounded-0 w-100 text-bold "
                                    id="product-tasdiqlash">Tasdiqlang
                            </button>
                        </div>
                    </div>
                </form>

@endsection
@section('js')

@endsection
