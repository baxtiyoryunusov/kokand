@extends('newadmin.layout')
@section('title',"Mahsulot Tahrirlash ")
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

        .form-control {
            color: #8e8d8c;
        }

    </style>
@endsection
@section('content')

    {{--product update Form START--}}
    <div class="container mt-2" style="">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="link-dark" href="{{route('newadmin')}}">Bosh sahifa</a></li>
                <li class="breadcrumb-item"><a class="link-dark" href="{{route('products.index')}}">Mahsulot</a></li>
                <li class="breadcrumb-item active" aria-current="page">Maxsulot tahrirlash</li>
            </ol>
        </nav>
        <div class="row mt-3">
            <div class="col-12 col-lg-12 d-flex align-items-center" style="">
                <form action="{{route('products.update',['product'=>$product_id->id])}}" enctype="multipart/form-data"
                      method="POST" class="kat-form"
                      id="kat-q-form">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-12 col-lg-6 ">
                            <x-input filed="name" id="name" class="" type="text" value="{{$product_id->name}}" label="Maxsulot Nomi" attr="onkeyup=toSeoUrl(this)"  placeholder="Maxsulot Nomi" yulduz="true"/>
                        </div>
                        <div class="col-12 col-lg-6 ">
                            <x-input filed="slug" id="input-categoti-seo" class="" type="text" value="{{$product_id->slug}}" label="Seo Url" attr="onkeyup=toSeoUrl(this)"  placeholder="Seo Url" yulduz="true"/>
                        </div>
                        <div class="col-12 col-lg-6 ">
                            <x-input filed="sku" id="sku" class="" type="text" value="{{$product_id->sku}}" label="Seo Url" attr="onkeyup=toSku(this)"  placeholder="Mahsulod kodi" yulduz="true"/>
                        </div>
                        <div class="col-12 col-lg-6 ">
                            <x-input filed="yangi_price" id="yangi_price" class="" type="text" value="{{$product_id->yangi_price}}" label="Yangilangan naxi" attr=""  placeholder="Yangilangan naxi" yulduz="true"/>
                        </div>
                        <div class="col-12 col-lg-6 ">
                            <x-input filed="eski_price" id="eski_price" class="" type="text" value="{{$product_id->eski_price}}" label="Eski naxi" attr=""  placeholder="Eski naxi" yulduz="false"/>
                        </div>


                        <div class="col-6 ">
                            <div class="form-floating   my-2">
                                @error('category_id')
                                <p class="text-danger m-0">{{ $message }}</p>
                                @enderror
                                <select name="category_id" id="p_id" class="  form-control font-weight-bold rounded-0 mb-2 ">
                                    @foreach($CategoryAll as $item)
                                        <option value="{{$item->id}}" class=" font-weight-bold" {{$product_id->getKat->id==$item->id?'selected':''}}> {{\App\Http\Controllers\CategoryController::getParentsTree($item,$item->name)}}</option>
                                    @endforeach
                                </select>
                                <label class="  " for="category_id"><span class="text-danger">*</span> Turkumlar</label>
                            </div>
                        </div>
                        <div class="col-12 pb-2 col-lg-2 d-flex justify-content-center">
                            <x-checkbox filed="status" id="check" class="" checked="{{$product_id->status}}"/>
                        </div>

                        <div class="col-12 col-lg-12">
                            @error('details')
                            <p class="text-danger  m-0"
                               style="    position: absolute; top: -25px;">{{ $message }}</p>
                            @enderror
                            <label class="   " for="product-detalis-update">Maxsulot haqida
                                to'liq malumot</label>
                            <textarea name="detalis" id="product-detalis-update"
                                      class="@error('details') is-invalid text-danger @enderror " rows="8"
                                      style="width: 100%">{{old('details')?old('details'):$product_id->detalis}}</textarea>

                        </div>
                        <div class="col-12 mt-3">
                            <button type="submit"
                                    class="btn btn-dark  text-warning  w-100 text-bold "
                                    id="product-tasdiqlash">Tasdiqlang
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{--product update Form end--}}



    {{--Color add div START--}}
    <div class="container mt-5" style="">
        <div class="row">
            <div class="col-12 col-lg-4 " style="">
                <form action="{{route('colorvalue.store')}}" enctype="multipart/form-data" method="POST"
                      class="kat-form "
                      id="kat-q-form">
                    @csrf
                    <div class="row">
                        <input type="hidden" name="product_id" value="{{$product_id->id}}">
                        <div class="col-12 col-lg-12  align-items-center" style="">

                                @error('color_id')
                            <p class="text-danger  m-0"
                               style="">{{ $message }}</p>
                            @enderror
                            <div class="form-floating   my-2">

                            <select name="color_id" id="color"
                                    class=" form-control font-weight-bold rounded-0 mb-2 " >
                                <option value="" class=" font-weight-bold"></option>
                                @foreach($colorAll as $item)
                                    <option value="{{$item->id}}"
                                            {{(old('color_id')==$item->id)? 'selected':''}} class=" font-weight-bold">{{$item->name}} </option>
                                @endforeach
                            </select>
                                <label class="  " for="color"><span class="text-danger">*</span> Rang tanlang</label>

                        </div>
                        </div>

                        <div class="col-12 ">
                            <button type="submit"
                                    class="btn btn-dark text-warning  w-100 text-bold "
                            >Tasdiqlang
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12 col-lg-8">
                <div class="row">
                    @foreach($product_id->getColorValueImg as $item)
                        @foreach($item->getColor as $itemColor)
                            <div class="col-12 col-lg-6   d-flex colorValue-div{{$item->id}} ">
                                <div class="card m-2 border-0 shadow-sm w-100">
                                    <div class="m-1 d-flex   align-items-center">
                                        <h6 class="ms-2 my-auto pt-1 fw-bold float-end ">
                                            <span class="badge rounded-pill "
                                                  style="background: {{$itemColor->color_kod}};color:{{$itemColor->text_kod}};width: 30px ;height: 30px ;border: 1px solid {{$itemColor->text_kod}} "><i
                                                    class="bi bi-palette-fill m-1"></i></span>
                                        </h6>
                                        <span class="m-auto">{{$itemColor->name}}</span>
                                        <div class="ms-auto">
                                            <x-checkbox filed="status" id="check" class="" attr="onchange=chackStatus('{{route('color_value_status')}}',this)    data-id={{$item->id}}" checked="{{$item->status}}"/>

                                            <button type="button" class="btn text-danger  colorValueDelete"
                                                    onclick="colorValueDelete('.colorValueDelete', '{{route('colorValueDelete')}}')"
                                                    data-id="{{$item->id}}">
                                                <i class="bi bi-trash-fill"></i>
                                            </button>
                                            <button type="button" class="btn text-success color-update-open-modal"
                                                    data-id="{{$item->id}}">
                                                <i class="bi bi-pen-fill"></i>
                                            </button>
                                            <a href="{{route("getColorvariantCerateProduct",$item->id)}}"
                                               id="AddColorModalBtn" class="btn text-warning ">
                                                <i class="bi bi-plus-circle-dotted"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <hr class="border m-0">
                                    <div class="card-body">
                                        @foreach($item->getImg as $itemImg)
                                            <img src="{{asset('').$itemImg->img}}" data-action="zoom"
                                                 class="rounded-4 m-1" alt="" width="110px" height="110px"
                                                 style="object-fit: cover">
                                        @endforeach
                                        @foreach($item->getColorXususiyatValue as $item)
                                            @foreach($item->getXususiyat as $itemxususiyat)
                                                <div class=" my-2 p-2  rounded bg-light">
                                                    {{$itemxususiyat->name}}: <span
                                                        class="float-end">{{$item->getXususiyatValueOne?$item->getXususiyatValueOne->name:''}} </span>
                                                </div>
                                            @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    {{--Color add div END--}}








    <!-- Modal  add color variant-->

    {{-- update Color VAlue Modal start--}}
    <div class="modal fade" id="ColorUpdateModal" tabindex="-1" aria-labelledby="ColorUpdateModalLabel"
         aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ColorUpdateModalLabel">Rangni almashtiring</h5>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="t ">
                    <form action="{{route('post_color_value_update')}}" enctype="multipart/form-data" method="POST"
                          class="kat-form "
                          id="kat-q-form">
                        @csrf
                        <div class="row">
                            <div class="col-12  d-flex col-lg-12">
                                <div class="alert respons m-0" style=" " role="alert">
                                </div>
                                <h6 class="ms-2 my-auto Rresponsbg rounded-pill  fw-bold float-end ">
                                    <span class="badge rounded-pill " style=";width: 30px ;height: 30px "><i
                                            class="bi Rresponsbg-icon bi-palette-fill m-1"></i></span>
                                </h6>
                                <div id="ColorUpdateModalBody"></div>
                            </div>
                            <input type="hidden" class="productid" name="product_id">
                            <div class="col-12 col-lg-12">
                                <select name="colorid" id="update-color"
                                        class="text-  form-control font-weight-bold rounded-0 mb-2 ">
                                    <option value="" class=" font-weight-bold">Rang tanlang</option>
                                    @foreach($colorAll as $item)
                                        <option value="{{$item->id}}"
                                                {{(old('color_id')==$item->id)? 'selected':''}} class=" font-weight-bold">{{$item->name}} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 ">
                                <button type="submit"
                                        class="btn btn-dark text-warning  w-100 text-bold "
                                        id="product-tasdiqlash">Tasdiqlang
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="backdrop-loading d-none " style="">
        <div class=" fs-1 spinner-border text-light"
             style="position: fixed; left: 47% ; top: 47% ; width:100px;height: 100px" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div></div>
    {{-- update ColorVAlue Modal end--}}
    <style>
        .loading {
            display: block !important;
            opacity: 0.5;
            position: fixed !important;
            top: 0;
            left: 0;
            z-index: 1040000;
            width: 100vw;
            height: 100vh;
            background-color: #000;
        }
    </style>
@endsection
@section('js')


    <script>


        function colorValueDelete(btn, url) {
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

                                $('.colorValue-div' + dataID).remove(),

                                    toastr["success"]("O\'chirildi")

                            },
                            error: function () {

                            }
                        })
                    }
                });
            })
        }

        $('.color-update-open-modal').click(function () {


            let dataID = $(this).data('id');
            let self = $(this)
            $.ajax({
                url: '{{route('get_color_value_update')}}',
                method: 'POST',
                data: {
                    ir: dataID,
                },
                async: false,
                success: function (response,) {


                    $('.respons').text(response.color.name)
                    $('.Rresponsbg').css({
                        "background-color": response.color.color_kod,
                        "border": "1px solid" + response.color.text_kod,
                        "color": response.color.text_kod + '!important'
                    });
                    $('.Rresponsbg-icon').css({"color": response.color.text_kod + '!important'});
                    $('.productid').val(dataID)


                    $('#ColorUpdateModal').modal('show')


                },
                error: function () {

                }
            })

        })
    </script>
    <script src="{{asset('admin/productimg/js/main.js?v=8')}}"></script>

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
    <script>
        $('#v_id').change(function () {
            $('#variant-sku').val('{{$product_id->sku}}')
            $('#variant-sku').val($('#variant-sku').val() + "-" + $(this).val())
        })
    </script>

    {{--colorla  boglıq  kodlar--}}



@endsection

