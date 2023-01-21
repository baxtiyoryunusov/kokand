@extends('newadmin.layout')
@section('title','Brend Tahrirlash')
@section('css')










@endsection
@section('content')
    <div
        class="d-flex sticky-top  bg-white justify-content-between flex-wrap flex-md-nowrap  align-items-center pt-3 pb-2 mb-3 px-2 border-bottom" style="top:48px ; z-index: 2;">
        <h1 class="h2">Brend Tahrirlash</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{route('brand.index')}}" class="btn btn-sm btn-outline-dark">Brend</a>

            </div>

        </div>
    </div>
    <ol class="breadcrumb mx-2">
        <li class="breadcrumb-item"><a class="link-dark" href="{{route('newadmin')}}">Bosh sahifa</a></li>
        <li class="breadcrumb-item"><a class="link-dark" href="{{route('brand.index')}}">Brend </a></li>
        <li class="breadcrumb-item active" aria-current="page">Brend Tahrirlash</li>
    </ol>
    <div class="container-fluid d-flex align-items-center justify-content-center p-0 p-lg-4" style="min-height: 80vh">
        <div class="row">
            <div class="col-12 col-lg-4 p-5">

                <form action="{{route('brand.update',$brand->id)}}" method="POST"
                      enctype="multipart/form-data"
                      class="kat-form"
                      id="kat-q-form">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-12 ">
                            <x-input filed="name" id="name" class="" type="text" value="{{$brand->name}}"
                                     label="Brend Isim" attr="onkeyup=toSeoUrl(this)" placeholder="Kategory Isim"
                                     yulduz="true"/>


                        </div>
                        <div class="col-12 ">
                            <x-input filed="slug" id="input-categoti-seo" class="" type="text" value="{{$brand->slug}}"
                                     label="Seo Url" attr="onkeyup=toSeoUrl(this)" placeholder="Seo Url" yulduz="true"/>

                        </div>


                        <div class="col-12 mt-lg-3 ">
                            <button type="submit"
                                    class="btn  btn-dark w-100 text-bold "
                                    id="kat_q">Tasdiqlang
                            </button>
                        </div>
                    </div>
                </form>


            </div>
            <div class="col-12 col-lg-4 p-5">

                <form action="{{route('branddimgUpdate',$brand->id)}}" method="POST"
                      enctype="multipart/form-data"
                      class="dropzone rounded-2"
                      id="brandImg"
                      name="file"
                      files="true">
                    @csrf

                </form>


            </div>
            <div class="col-12 col-lg-4 d-flex justify-content-center">
                <div class="row d-flex justify-content-center mt-4 mt-lg-2">
                    <div class="col-12 col-lg-12 ">
                        <!-- Card-->
                        <div class="card m-5 zoom-effect border-0 rounded-3 m-2 mt-3 m-lg-3 shadow overflow-hidden"
                             style="border-radius:25px!important; ">
                            <div class="zoom-effect-wrapper rounded-3">
                                <img class="zoom-effect-img"
                                     src="{{asset('')}}{{$brand->img}}"
                                     style="object-fit: cover; width: 300px;height: 300px " alt="Brand image">
                            </div>
                            <a class="card-body d-flex flex-column justify-content-end align-items-start position-absolute top-0 start-0 w-100 h-100 text-decoration-none zindex-3"
                               style="background: rgba(0, 0, 0, 0.10);width: 300px;height: 300px"
                               href="{{route('wow-kategory',[$brand->slug])}}">
                                <span
                                    class="bg-light text-dark rounded-pill fs-sm fw-semibold  text-truncate  p-2"
                                    title="{{$brand->name}}"
                                    style="max-width: 100%">{{$brand->name}}</span></a>
                            <a class="card-body d-flex flex-column justify-content-end align-items-start position-absolute  start-0  text-decoration-none zindex-3"
                               style=" "
                               href="{{route('wow-kategory',[$brand->slug])}}">
                                <span class="bg-light text-dark rounded-pill fs-sm fw-semibold text-truncate p-2"
                                      title="{{$brand->slug}}"
                                      style="max-width: 200px">{{$brand->slug}}</span></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        @endsection
        @section('js')
            <script>

                Dropzone.options.brandImg = {
                    maxFilesize: 5,
                    parallelUploads: 1,
                    acceptedFiles: ".jpeg,.jpg,.png,.gif, .webp, .svg",
                    maxFiles: 10,
                    success: function (file, response) {


                        $('.zoom-effect-img').attr('src',"{{asset('')}}"+response.imgajx.img)
                    },
                }
            </script>

@endsection
