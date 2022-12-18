@extends('newadmin.layout')
@section('title',"Xususiyat")
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



    <div class="container ">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="link-dark" href="{{route('newadmin')}}">Bosh sahifa</a></li>
                <li class="breadcrumb-item"><a class="link-dark" href="{{route('products.index')}}">Mahsulot</a></li>
                <li class="breadcrumb-item active" aria-current="page">Maxsulot qo'shish</li>
            </ol>
        </nav>
        <form method="POST" action="{{route('products.store')}}"
              enctype="multipart/form-data"
              class=" rounded mt-3 " id="FileIMG">
            @csrf

            <div class="row">
                <div class="col-12 col-lg-6">
                   <x-input filed="name" id="name" class="" type="text" value="" label="Maxsulot Nomi" attr="onkeyup=toSeoUrl(this)"  placeholder="Maxsulot Nomi" yulduz="true"/>
                </div>
                <div class="col-12 col-lg-6">
                    <x-input filed="slug" id="input-categoti-seo" class="" value='' type="text"  label="Seo Url"  placeholder="Seo Url" yulduz="true"/>
                </div>
                <div class="col-12 col-lg-6">
                    <x-input filed="sku" id="sku" class=""  type="text" value="" label="Stok Kodi"  placeholder="Stok Kodi" yulduz="true"/>

                </div>
                <div class="col-12 col-lg-6">
                    <x-input filed="yangi_price" id="yangi_price" class="" type="text" value="" label="Yangi narx"  placeholder="Yangi narx" yulduz="true"/>
                </div>
                <div class="col-12 col-lg-6">
                    <x-input filed="eski_price" id="eski_price" class=""  type="text" value="" label="Eski narx"  placeholder="Eski narx" yulduz="false"/>
                </div>
                <div class="col-6">
                    @error('brend_id')
                    <p class="text-danger m-0">{{ $message }}</p>
                    @enderror
                    <div class="form-floating   my-2">
                        <select name="brend_id" id="brend_id"
                                class="  form-control font-weight-bold rounded-0 mb-2 " placeholder="Brend nomi">
                            @foreach($brend as $item)
                                <option value="{{$item->id}}"
                                        class=" font-weight-bold"> {{$item->name}}</option>
                            @endforeach
                        </select>
                        <label for="brend_id"> <span class="text-danger">*</span> Brend nomi</label>
                    </div>
                </div>
                <div class="col-6">
                    @error('category_id')
                    <p class="text-danger m-0">{{ $message }}</p>
                    @enderror
                    <div class="form-floating   my-2">
                        <select name="category_id" id="category_id"
                                class="text-  form-control font-weight-bold rounded-0 mb-2 ">
                            @foreach($CategoryAll as $item)
                                <option value="{{$item->id}}"
                                        class=" font-weight-bold"> {{\App\Http\Controllers\CategoryController::getParentsTree($item,$item->name)}}</option>
                            @endforeach
                        </select>
                        <label for="category_id"><span class="text-danger">*</span> Kategorya nomi</label>
                    </div>
                </div>
                <div class="col-12 pb-2 col-lg-2 d-flex justify-content-center">
                    <x-checkbox filed="status" id="check" class="" checked=""/>

                </div>
                <div class="col-12 col-lg-12">
                    @error('details')
                    <p class="text-danger  m-0"
                       style="    position: absolute; top: -25px;">{{ $message }}</p>
                    @enderror
                    <label for="product-detalis-update"></label>
                    <textarea name="detalis" id="product-detalis-update"
                              class="@error('details') is-invalid text-danger @enderror "
                              rows="8" style="width: 100%">{{old('details')}}</textarea>

                </div>
                <div class="col-12 mt-3">
                    <button type="submit"
                            class="btn btn-dark text-warning  w-100 text-bold "
                            id="product-tasdiqlash">Tasdiqlang
                    </button>
                </div>
            </div>
        </form>
        @endsection
        @section('js')
            {{--   <script>
                   $('.change-xususiyat').click(function () {
                       let th = $(this)
                       $.ajax({
                           url: '{{route('changexususiyatProduct')}}',
                           method: 'POST',
                           data: {
                               id: $(this).data('id')
                           },
                           async: false,
                           success: function (response) {
                               response.val.forEach(myfunw);

                               function myfunw(item, index) {

                                   th.append(th.append() + '<option value="' + item.id + '" class=\"font-weight-bold\">' + item.name + '</option>');
                               }

                               toastr["success"]("d")
                           },
                           error: function () {

                           }
                       })
                   })




                   function xusuiyatdelete(btn, url) {
                       $.ajaxSetup({
                           headers: {
                               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                           },
                       })

                       $(btn).click(function () {
                           Swal.fire({
                               title: 'Silme işlemi',
                               text: "Gerçekten silmek istiyor musun!",
                               icon: 'warning',
                               showCancelButton: true,
                               confirmButtonColor: '#243e7d',
                               cancelButtonColor: '#d33',
                               confirmButtonText: 'Ha',
                               cancelButtonText: "Yo'q"
                           }).then((result) => {
                               if (result.isConfirmed) {
                                   let dataID = $(this).data('id');
                                   let self = $(this)
                                   $.ajax({
                                       url: url,
                                       method: 'POST',
                                       data: {
                                           ir: dataID,
                                       },
                                       async: false,
                                       success: function (response) {

                                           $('.xusuiyat-div' + dataID).remove(),

                                               toastr["success"]("O\'chirildi")

                                       },
                                       error: function () {

                                       }
                                   })
                               }
                           });
                       })
                   }

                   $('.xususiyatVal-select').change(function () {


                       let xusID = $(this).data('xus');
                       let ID = $(this).val();

                       $.ajax({
                           url: '{{route('productxususiyatvalueAdd')}}',
                           method: 'POST',
                           data: {
                               id: xusID,
                               productxususiyatvalue: ID,
                           },
                           async: false,
                           success: function (response) {

                               $('.xusuiyat-div' + dataID).remove(),

                                   toastr["success"]("O\'chirildi")

                           },
                           error: function () {

                           }
                       })

                   })
               </script>--}}
            <script>
                function toSku(categoriAdi) {
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
                    url = url.toLowerCase();
                    categoriAdi.value = url

                }
            </script>


@endsection

