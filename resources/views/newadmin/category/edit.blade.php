@extends('newadmin.layout')
@section('title','Kategory')
@section('css')
    <script src="{{asset("admin/category/css/main.css?v=60")}}"></script>
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
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a class="link-dark" href="{{route('newadmin')}}">Bosh sahifa</a></li>
        <li class="breadcrumb-item"><a class="link-dark" href="{{route('category.index')}}">Kategorya</a></li>
        <li class="breadcrumb-item active" aria-current="page">Kategorya tahrirlash</li>
    </ol>
    <div class=" d-flex align-items-center justify-content-center p-0 p-lg-4" style="min-height: 84vh">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="col-12 col-lg-9">
                        <form action="{{route('category.update',$category->id)}}" method="POST"
                              enctype="multipart/form-data"
                              class="kat-form"
                              id="kat-q-form">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <x-input filed="name" id="name" class="" type="text" value="{{$category->name}}" label="Kategory Isim" attr="onkeyup=toSeoUrl(this)"  placeholder="Kategory Isim" yulduz="true"/>


                                </div>
                                <div class="col-12 col-lg-6">
                                    <x-input filed="slug" id="input-categoti-seo" class="" type="text" value="{{$category->slug}}" label="Seo Url" attr="onkeyup=toSeoUrl(this)"  placeholder="Seo Url" yulduz="true"/>

                                </div>
                                <div class="col-12 col-lg-6">
                                    <x-input filed="order" id="navbat" class="" type="number" value="{{$category->order}}" label="Navbat Raqami"  placeholder="Navbat Raqami" yulduz="true"/>

                                </div>
                                    <div class="col-12 pb-2 mt-lg-3 col-lg-6 d-flex justify-content-center">
                                    <x-checkbox filed="status" id="check" class=""  checked="{{$category->status}}"/>

                                </div>
                                <div class="col-12">
                                    @error('p_id')
                                    <p class="text-danger m-0">{{ $message }}</p>
                                    @enderror
                                    <label for="p_id">Kategorya</label>
                                    <select name="p_id" id="p_id" onchange=" appendCategorySeoUrl(this)"
                                            class="form-control font-weight-bold rounded-0 mb-2 ">
                                        <option value="" class=" font-weight-bold">Eslatma ! Tanlanmagan taqdirda siz
                                            asosiy
                                            Kategorya kiritgan bo'lasiz
                                        </option>
                                        @foreach($CategoryAll as $item)
                                            <option value="{{$item->id}}"
                                                    {{$item->id==$category->p_id?'selected':''}} {{(old('p_id')==$item->id)? 'selected':''}}
                                                    class=" font-weight-bold"> {{\App\Http\Controllers\CategoryController::getParentsTree($item,$item->name)}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12">
                                    <button type="submit"
                                            class="btn  submit-btn w-100 text-bold "
                                            id="kat_q">Tasdiqlang
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>


                </div>

            </div>
            <div class="col-12 col-lg-6 d-flex justify-content-center">
                <div class="row d-flex justify-content-center mt-4 mt-lg-2">
                    <div class="col-12 col-lg-12 ">
                        <!-- Card-->
                        <div class="card m-5 zoom-effect border-0 rounded-3 m-2 mt-3 m-lg-3 shadow overflow-hidden"
                             style="border-radius:25px!important; ">
                            <div class="zoom-effect-wrapper rounded-3">
                                <img class="zoom-effect-img"
                                     src="{{asset('')}}{{$category->img}}"
                                     style="object-fit: cover; width: 300px;height: 300px " alt="Category image">
                            </div>
                            <a class="card-body d-flex flex-column justify-content-end align-items-start position-absolute top-0 start-0 w-100 h-100 text-decoration-none zindex-3"
                               style="background: rgba(0, 0, 0, 0.10);width: 300px;height: 300px"
                               href="{{route('wow-kategory',[$category->slug])}}">
                                <span
                                    class="bg-light text-dark rounded-pill fs-sm fw-semibold  text-truncate  p-2"
                                    title="{{$category->name}}"
                                    style="max-width: 100%">{{\App\Http\Controllers\CategoryController::getParentsTree($category,$category->name)}}</span></a>
                            <a class="card-body d-flex flex-column justify-content-end align-items-start position-absolute  start-0  text-decoration-none zindex-3"
                               style=" "
                               href="{{route('wow-kategory',[$category->slug])}}">
                                <span class="bg-light text-dark rounded-pill fs-sm fw-semibold text-truncate p-2"
                                      title="{{$category->slug}}"
                                      style="max-width: 200px">{{$category->slug}}</span></a>
                            <button type="button" class="btn   position-absolute  end-0 pt-4 text-decoration-none "
                                    style="  ">
                                <span class=" text-white rounded-pill fs-6 fw-semibold  "
                                      style="height: 46px;width: 46px">
                                    <span
                                        class=" border-0 translate-middle p-2 bg-{{$category->status?"success":"danger"}} border border-light py-3 rounded-circle">{{$category->status?"aktiv":"pasif"}}</span></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @endsection
        @section('js')

            <script src="{{asset("admin/category/js/main.js")}}"></script>
            <script>
                function appendCategorySeoUrl(categoriAdi) {
                    let url = categoriAdi.value;

                    url = url.replace(/ /g, "-");
                    url = url.replace(/</g, "");
                    url = url.replace(/>/g, "");
                    url = url.replace(/"/g, "");
                    url = url.replace(/é/g, "");
                    url = url.replace(/'/g, "-");
                    url = url.replace(/!/g, "");
                    url = url.replace(/’/, "");
                    url = url.replace(/£/, "");
                    url = url.replace(/#/, "");
                    url = url.replace(/^/, "");
                    url = url.replace(/$/, "");
                    url = url.replace(/\+/g, "");
                    url = url.replace(/%/g, "");
                    url = url.replace(/½/g, "");
                    url = url.replace(/&/g, "");
                    url = url.replace(/\//g, "");
                    url = url.replace(/{/g, "");
                    url = url.replace(/\(/g, "");
                    url = url.replace(/\[/g, "");
                    url = url.replace(/\)/g, "");
                    url = url.replace(/]/g, "");
                    url = url.replace(/=/g, "");
                    url = url.replace(/}/g, "");
                    url = url.replace(/\?/g, "");
                    url = url.replace(/\*/g, "");
                    url = url.replace(/@/g, "");
                    url = url.replace(/€/g, "");
                    url = url.replace(/~/g, "");
                    url = url.replace(/æ/g, "");
                    url = url.replace(/ß/g, "");
                    url = url.replace(/;/g, "");
                    url = url.replace(/,/g, "");
                    url = url.replace(/`/g, "");
                    url = url.replace(/|/g, "");
                    url = url.replace(/\./g, "");
                    url = url.replace(/:/g, "");
                    url = url.replace(/İ/g, "i");
                    url = url.replace(/I/g, "i");
                    url = url.replace(/ı/g, "i");
                    url = url.replace(/ğ/g, "g");
                    url = url.replace(/Ğ/g, "g");
                    url = url.replace(/ü/g, "u");
                    url = url.replace(/Ü/g, "u");
                    url = url.replace(/ş/g, "s");
                    url = url.replace(/Ş/g, "s");
                    url = url.replace(/ö/g, "o");
                    url = url.replace(/Ö/g, "o");
                    url = url.replace(/ç/g, "c");
                    url = url.replace(/Ç/g, "c");
                    url = url.replace(/–/g, "-");
                    url = url.replace(/—/g, "-");
                    url = url.replace(/—-/g, "-");
                    url = url.replace(/—-/g, "-");
                    url = url.toLowerCase()   ;

                    $('#input-categoti-seo').val( $('#input-categoti-seo').val()+'-'+url)
                }
            </script>
@endsection
