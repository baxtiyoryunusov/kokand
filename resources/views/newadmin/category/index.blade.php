@extends('newadmin.layout')
@section('title','Kategory')
@section('css')
<script src="{{asset("admin/category/css/main.css?v=60")}}"></script>
<style>
    .submit-btn{
        margin-top: 10px;
        background:
            linear-gradient(#212529, #212529) padding-box,
            linear-gradient(to right, #db4909, #dcae04);
       color: #313149;
        border-radius: 5px;
        display: inline-block;
        font-size: 16px;
        padding: 3px;

    }  .submit-btn:hover{
        background:  linear-gradient(to right, #db4909, #dcae04);
       color: #212529!important;

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
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="link-dark" href="{{route('newadmin')}}">Bosh sahifa</a></li>
            <li class="breadcrumb-item active" aria-current="page">Kategorya</li>

        </ol>
    </nav>
        <div class="card-body">
            <div class="bd-example table-responsive">
                <table class="table  table-hover table-striped  ">
                    @if( count($kategorys)>0)
                        <thead class="">
                        <tr class="text-center align-middle ">
                            <th class="align-middle" style="width:46px!important;">
                                <div class="checkboxDELETE">
                                    <input type="checkbox" class="checkDELETE" onclick="chek('#checkAllcat')" id="checkAllcat"/>
                                    <label for="checkAll" class="label "
                                           style="">
                                    </label>
                                </div>
                            </th>
                            <th class=" align-middle">Id</th>
                            <th class=" align-middle">Rasm</th>
                            <th class=" align-middle text-start">Kategorya</th>
                            <th class="align-middle">Navbat</th>
                            <th class="align-middle">Status</th>
                            <th class=" align-middle">Created At</th>
                            <th class=" align-middle">Amallar</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($kategorys as $item)
                            <tr id="row{{$item->id}}" class="text-center">
                                <td class="text-center align-middle p-0" style="width:46px!important;">
                                    <div class="checkboxDELETE">
                                        <input type="checkbox" class="checkDELETE checkBox" value="{{$item->id}}"
                                               data-id="{{$item->id}}" name="Sd-{{$item->id}}"
                                               id="checkA-{{$item->id}}"/>
                                        <label for="checkA-{{$item->id}} " class="label">
                                        </label>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <span class="  ">  {{$item->id}}</span>
                                </td>
                                <td class="align-middle">

                                        <img src="{{asset('')}}{{$item->img}}"
                                             style=" height: 100px; width: 100px; object-fit: cover;"
                                             data-action="zoom"
                                             class="rounded-4"
                                             alt="">

                                </td>
                                <td class="align-middle text-start">
                                  <span>{{\App\Http\Controllers\CategoryController::getParentsTree($item,$item->name)}}</span>

                                </td>
                                <td class="align-middle ">
                                    <span>{{$item->order}}</span>
                                </td>
                                <td class="align-middle" style="width:100px">
                                    <x-checkbox filed="status" id="check" class="" attr="onchange=chackStatus('{{route('KategotyCheckStatus')}}',this)    data-id={{$item->id}}" checked="{{$item->status}}"/>
                                </td>
                                <td class="align-middle"><span
                                        class=" ">{{$item->created_at?$item->created_at->diffForHumans():''}}</span>
                                </td>
                                <td class="   text-center align-middle">
                                    <a href="{{route('category.edit',$item->id)}}" title="'{{$item->name}}' Nomli kategoriyani tahrirlash"
                                       data-id="{{$item->id}}"

                                       class="text-white cat-delete  mx-1  btn-sm btn-danger rounded-0">
                                        <i class="bi bi-pen-fill text-success"></i>
                                    </a>
                                    <a type="button" title="'{{$item->name}}' Nomli kategoriyani o'chirish"
                                       data-id="{{$item->id}}"
                                       onclick=" delet('.cat-delete', '{{route('cat_delete_tek')}}')"
                                       class="text-white cat-delete mx-1btn-sm btn-danger rounded-0">
                                        <i class="bi bi-trash3-fill text-danger"></i>
                                    </a>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    @else
                        <tr>
                            <td class="text-center bg-danger text-warning  text-bold">Malumot Topilmadi</td>
                        </tr>
                    @endif
                </table>
            </div>
        </div>

    <div class="offcanvas offcanvas-bottom  border-top border-warning " style=" height:100vh !important;" data-bs-scroll="true"
         data-bs-backdrop="false" tabindex="-1"
         id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Kategoriya Qo'shish</h5>
            <button type="button" class="btn border-0" data-bs-dismiss="offcanvas" aria-label="Close"><i
                    class="bi bi-three-dots-vertical fs-1 text-warning"></i></button>
        </div>
        <div class="offcanvas-body">
            <div class="container">
                <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data" class="kat-form"
                      id="kat-q-form">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <x-input filed="name" id="name" class="" type="text" value="" label="Kategory Isim" attr="onkeyup=toSeoUrl(this)"  placeholder="Kategory Isim" yulduz="true"/>



                        </div>
                        <div class="col-12 col-lg-6">
                            <x-input filed="slug" id="input-categoti-seo" class="" type="text" value="" label="Url" attr="onkeyup=toSeoUrl(this)"  placeholder="Url" yulduz="true"/>


                        </div>
                        <div class="col-12 col-lg-6">
                            <x-input filed="img" id="input-img" class="" type="file" value="" label="img"  placeholder="img" yulduz="true"/>


                        </div>
                        <div class="col-12 col-lg-6 d-flex justify-content-center">
                            <x-input filed="order" id="navbat" class="" type="number" value="{{++$order->order}}" label="Navbat Raqami"  placeholder="Navbat Raqami" yulduz="true"/>


                       
                        <div class="col-12 pb-2 col-lg-6 d-flex justify-content-center">
                            <x-checkbox filed="status" id="check" class=""  checked=""/>
                        </div>
                        <div class="col-12">
                            @error('p_id')
                            <p class="text-danger m-0">{{ $message }}</p>
                            @enderror
                            <select name="p_id" id="p_id" onchange="appendCategorySeoUrl(this)"
                                    class="text-bg-dark form-control font-weight-bold rounded-0 mb-2 ">
                                <option value=" " class=" font-weight-bold">Eslatma ! Tanlanmagan taqdirda siz asosiy
                                    Kategorya
                                    kiritgan bo'lasiz
                                </option>

                                @foreach($CategoryAll as $item)
                                    <option value="{{$item->id}}"
                                            class=" font-weight-bold"> {{\App\Http\Controllers\CategoryController::getParentsTree($item,$item->name)}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12">
                            <button type="submit"
                                    class="btn  submit-btn   text-warning  w-100 text-bold "
                                    id="kat_q">Tasdiqlang
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.js"  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
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

   {{-- <script type="text/javascript">
        $(".catigori-backdrop").click(function () {
            $("#catigori-nav").removeClass("active-nav");
            $(this).removeClass("show-nav");
            $('body').removeClass('over-hidden')

        });
        $(".skret-erkak").click(function () {
            $("#catigori-nav").removeClass("active-nav");
            $(".catigori-backdrop").removeClass("show-nav");


        });
        $(".offcanvas-backdrop").click(function () {

            $("#catigori-nav").removeClass("active-nav");
            $(".catigori-backdrop").removeClass("show-nav");


        });


        function openNav(a) {
            $(a).addClass('active-nav')
            $('.body').addClass('over-hidden')
            $(".catigori-backdrop").addClass("show-nav");

        }

        function openTr(a) {
            $(a).toggleClass('display-contents')


        }

        function closeNav(a) {
            $(a).removeClass('active-nav')
            $('body').removeClass('over-hidden')
            $(".catigori-backdrop").removeClass("show-nav");

        }

    </script>--}}




@endsection
