@extends('newadmin.layout')
@section('title',"Brend qo'shish")
@section('css')

@endsection
@section('content')
    <div class="d-flex sticky-top  bg-white justify-content-between flex-wrap flex-md-nowrap  align-items-center pt-3 pb-2 mb-3 px-2 border-bottom" style="top:48px ; z-index: 2;">
        <h1 class="h2">Brend</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{route('brand.index')}}" class="btn btn-sm btn-outline-dark">Brendlar</a>

            </div>

        </div>
    </div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb  mx-2">
            <li class="breadcrumb-item"><a class="link-dark" href="{{route('newadmin')}}">Bosh sahifa</a></li>
            <li class="breadcrumb-item active" aria-current="page">Brend</li>
        </ol>
    </nav>
    <div class="container " style="">

        <form action="{{route('brand.store')}}" enctype="multipart/form-data" method="POST" class="kat-form"
              id="kat-q-form">
            @csrf
            <div class="row">
                <div class="col-12 col-lg-12">
                    <x-input filed="name" id="name" class="" type="text" value="" label="Kategory Isim" attr="onkeyup=toSeoUrl(this)"  placeholder="Kategory Isim" yulduz="true"/>

                </div>
                <div class="col-12 col-lg-12">
                    <x-input filed="slug" id="input-categoti-seo" class="" type="text" value="" label="Url" attr="onkeyup=toSeoUrl(this)"  placeholder="Url" yulduz="true"/>

                </div>
                <div class="col-12 col-lg-12">

                    <x-input filed="img" id="img" class="" type="file" value="" label="img"  placeholder="img" yulduz="true"/>
                </div>
                <div class="col-12">
                    <button type="submit"
                            class="btn btn-dark  w-100 text-bold "
                            id="product-tasdiqlash">Tasdiqlang
                    </button>
                </div>
            </div>
        </form>

@endsection
@section('js')

@endsection
