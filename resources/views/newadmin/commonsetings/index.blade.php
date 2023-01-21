@extends('newadmin.layout')
@section('title','Sozlamalar')
@section('css')
    <style>
        #pills-tab .active {
            background: #000 !important;
            color: #fff !important;
        }
    </style>

@endsection
@section('content')
    <div
        class="d-flex sticky-top  bg-white  justify-content-between flex-wrap flex-md-nowrap  align-items-center pt-3 pb-2 mb-3 px-2 border-bottom"
        style="top:48px ; z-index: 2;">
        <h1 class="h2">Sozlamalar </h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            {{-- <div class="btn-group me-2">
                 <button class="btn btn-sm btn-outline-warning  " type="button" title="Kategoriya  qo'shish"
                         data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
                         aria-controls="offcanvasScrolling">
                     Kategorya q'shish
                 </button>
                 <button type="button" class="btn btn-sm btn-outline-danger"
                         onclick="deletAll('{{route('cat_delete')}}', '.checkBox',)">O'chirish
                 </button>
             </div>--}}
        </div>
    </div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mx-2">
            <li class="breadcrumb-item"><a class="link-dark" href="{{route('newadmin')}}">Bosh sahifa</a></li>
            <li class="breadcrumb-item active" aria-current="page">Sozlamalar</li>

        </ol>
    </nav>
    <div class="card-body m-2">


        <ul class="nav nav-pills  mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link btn  text-dark active" id="disabled-tab" data-bs-toggle="tab"
                        data-bs-target="#Profile"
                        type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="true">
                    Profile
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link btn   text-dark" id="home-tab" data-bs-toggle="tab" data-bs-target="#meta"
                        type="button"
                        role="tab" aria-controls="home-tab-pane" aria-selected="false">Meta Sozlamalar
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link btn  text-dark" id="profile-tab" data-bs-toggle="tab" data-bs-target="#logo"
                        type="button"
                        role="tab" aria-controls="profile-tab-pane" aria-selected="false">Logo
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link btn  text-dark" id="contact-tab" data-bs-toggle="tab" data-bs-target="#fav"
                        type="button"
                        role="tab" aria-controls="contact-tab-pane" aria-selected="false">Fav Icon
                </button>
            </li>

        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade " id="meta" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                <div class="container">
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="col-12 col-lg-9">

                            <form action="{{route('commonsetings.update',['commonseting'=>$common->id])}}" method="POST"
                                  enctype="multipart/form-data"
                                  class="kat-form"
                                  id="kat-q-form">

                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-12 ">
                                        <x-input filed="meta_title" id="meta_title" class="" type="text"
                                                 value="{{$common->meta_title}}"
                                                 label="Meta Title"
                                                 placeholder="Meta Title" yulduz="true"/>


                                    </div>
                                    <div class="col-12 ">
                                        <x-input filed="meta_content" id="meta_content" class="" type="text"
                                                 value="{{$common->meta_content}}" label="meta Content"
                                                 placeholder="Meta Content" yulduz="true"/>

                                    </div>
                                    <div class="col-12 ">
                                        <x-input filed="meta_keywords" id="meta_keywords" class=""
                                                 value="{{$common->meta_keywords}}" label="Meta Keywords"
                                                 placeholder="Meta Keywords" yulduz="true"/>


                                    </div>


                                    <div class="col-12">
                                        <button type="submit"
                                                class="btn float-end  submit-btn btn-dark   text-bold "
                                                id="kat_q">Tasdiqlang
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>


                    </div>

                </div>
            </div>
            <div class="tab-pane fade" id="logo" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                <div class="row justify-content-center">
                    <div class="col-6 text-center ">
                        <h5>Logo</h5>
                        <form action="{{route('commonstingslogoUpdate',$common->id)}}"
                              style="background-repeat: no-repeat;background-position: center" method="POST"
                              enctype="multipart/form-data"
                              class="dropzone rounded-2 p-4"
                              id="logo"
                              name="file"
                              files="true">

                            @csrf

                        </form>
                        <img src="{{asset('')}}{{$common->logo}}" id="logoImg" class="mt-3" width="200px" alt="">

                    </div>

                </div>
            </div>
            <div class="tab-pane fade" id="fav" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                <div class="row justify-content-center">
                    <div class="col-6 text-center  ">
                        <h5>Fav Icon</h5>
                        <form action="{{route('commonstingsfavUpdate',$common->id)}}"
                              style="background-repeat: no-repeat;background-position: center" method="POST"
                              enctype="multipart/form-data"
                              class="dropzone rounded-2 p-4"
                              id="favicon"
                              name="file"
                              files="true">
                            @csrf

                        </form>
                        <img src="{{asset('')}}{{$common->logo2}}" id="logoImg2" class=" mt-3" width="200px" alt="">
                    </div>

                </div>
            </div>
            <div class="tab-pane fade show active" id="Profile" role="tabpanel" aria-labelledby="disabled-tab"
                 tabindex="0">

                <div class="container">

                    <div class="row align-items-center  justify-content-center " style="">
                        <div class="col-12 col-lg-3 р-100">
                            <div class="card border-0">
                                <div class="card-body">
                                    <h4 class="text-center">{{Auth::user()->name}}</h4>
                                    <h6 class="text-center">{{Auth::user()->email}}</h6>
                                </div>
                            </div>


                        </div>

                        <div class="row align-items-center  justify-content-center " style="">

                            <div class="col-12 col-lg-10 ">
                                <div class="card-body ">
                                    <form action="{{route('admin_profile_update',Auth::user()->id)}}" method="POST"
                                          enctype="multipart/form-data" class="kat-form"
                                          id="kat-q-form">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12 col-lg-12">
                                                <div class="form-floating   my-2">
                                                    <x-input filed="name" id="name" class="" type="text"
                                                             value="{{Auth::user()->name}}" label="Kategory Isim"
                                                             placeholder="Kategory Isim" yulduz="true"/>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-12">
                                                <x-input filed="email" id="email" class="" type="email"
                                                         value="{{Auth::user()->email}}" label="Email"
                                                         placeholder="Email"
                                                         yulduz="true"/>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit"
                                                        class="btn float-end  submit-btn btn-dark   text-bold "
                                                        id="kat_q">Tasdiqlang
                                                </button>
                                            </div>
                                        </div>
                                    </form>


                                    <form action="{{route('admin_profile_update_password',Auth::user()->id)}}"
                                          method="POST"
                                          enctype="multipart/form-data" class="mt-4"
                                          id="kat-q-form">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12 col-lg-12">
                                                <x-input filed="password" id="password" class="" type="password"
                                                         value=""
                                                         label="Email" placeholder="Email" yulduz="true"/>
                                            </div>
                                            <div class="col-12 col-lg-12">
                                                <x-input filed="confirm_password" id="confirm_password" class=""
                                                         type="password" value="" label="Password Confirm" attr=""
                                                         placeholder="Password Confirm" yulduz="true"/>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit"
                                                        class="btn float-end  submit-btn btn-dark   text-bold "
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
    <script>


        Dropzone.options.logo = {
            maxFilesize: 5,
            parallelUploads: 1,
            acceptedFiles: ".jpeg,.jpg,.png,.gif, .webp, .svg",
            maxFiles: 10,
            success: function (file, response) {


                $(' #logoImg ').attr('src', "{{asset('')}}" + response.imgajx.logo)
            },
        }
        Dropzone.options.favicon = {
            maxFilesize: 5,
            parallelUploads: 1,
            acceptedFiles: ".jpeg,.jpg,.png,.gif, .webp, .svg",
            maxFiles: 10,
            success: function (file, response) {


                $(' #logoImg2 ').attr('src', "{{asset('')}}" + response.imgajx.logo2)
            },
        }
    </script>






@endsection
