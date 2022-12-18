@extends('newadmin.layout')
@section('title',"Rang")
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
    <div class="container ">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="link-dark" href="{{route('newadmin')}}">Bosh sahifa</a></li>
                <li class="breadcrumb-item"><a class="link-dark" href="{{route('products.index')}}">Mahsulot</a></li>
                <li class="breadcrumb-item"><a class="link-dark" href="{{route('products.edit',$ColorValue->product_id)}}">Maxsulot tahrirlash</a></li>
                <li class="breadcrumb-item active" aria-current="page">Maxsulotga rang va variant va xususiyat qoshish</li>
            </ol>
        </nav>
        <div class="row">
            {{-- xususiyat start--}}
            <div class="col-12 col-lg-12">
                <div class="container mt-5" style="">
                    <div class="row">
                        <div class="col-12 col-lg-4 d-flex align-items-center" style="">
                            <form action="{{route('productxususiyatvalue.store')}}" enctype="multipart/form-data"
                                  method="POST" class="kat-form "
                                  id="kat-q-form">
                                @csrf
                                <div class="row">
                                    <select name="xususiyats_id" id="p_id"
                                            class="text-  form-control font-weight-bold rounded-0 mb-2 ">

                                        @foreach($xususiyatAll as $item)
                                            <option value="{{$item->id}}"
                                                    class=" font-weight-bold">{{$item->name}} </option>

                                        @endforeach
                                    </select>
                                    <input type="hidden" name="color_values_id" value="{{$ColorValue->id}}">
                                    <div class="col-12">
                                        <button type="submit"
                                                class="btn btn-dark text-warning  w-100 text-bold ">Tasdiqlang
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-12 col-lg-8">
                            <div class="row">
                                @foreach($ColorValue->getColorXususiyatValue as $item)
                                    @foreach($item->getXususiyat as $itemxususiyat)
                                        <div class="col-12 col-lg-6   d-flex xusuiyat-div{{$itemxususiyat->id}} ">
                                            <div class="card m-2 border-0 shadow-sm w-100">
                                                <div class="m-1 d-flex   align-items-center">
                                                    <h6 class="ms-2 my-auto fw-bold float-end">
                                                        {{$itemxususiyat->name}}
                                                    </h6>
                                                    <div class="ms-auto">
                                                        <button type="button" class="btn text-danger  xusuiyat-delete"
                                                                onclick="xusuiyatdelete('.xusuiyat-delete', '{{route('productXusuiyatDelete')}}')"
                                                                data-id="{{$itemxususiyat->id}}">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <hr class="border m-0">
                                                <div class="card-body">
                                                    <select name="xususiyatVal_id" id="xususiyatVal-select"
                                                            data-xus="{{$item->id}}"
                                                            class="text-  form-control font-weight-bold xususiyatVal-select rounded-0 mb-2 ">
                                                        <option value="">Bo'sh</option>
                                                        @foreach($item->getXususiyat as $itemxususiyat)
                                                            @foreach($itemxususiyat->getXususiyatValue as $itemgetXususiyatValue)
                                                                <option value="{{$itemgetXususiyatValue->id}}" {{$itemgetXususiyatValue->id==$item->xususiyat_value_id?'selected':''}} >{{$itemgetXususiyatValue->name}}</option>
                                                            @endforeach
                                                        @endforeach
                                                    </select>
                                                    <input type="hidden" name="color_values_id" value="{{$ColorValue->id}}">
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @foreach($ColorValue->getColorXususiyatValue as $item)
                    @foreach($item->getXususiyat as $itemxususiyat)
                        <div class=" my-2 p-2  rounded bg-light">
                            {{$itemxususiyat->name}}: <span
                                class="float-end">{{$item->getXususiyatValueOne?$item->getXususiyatValueOne->name:''}} </span>
                        </div>
                    @endforeach
                @endforeach
            </div>
            {{-- xususiyat end--}}
            {{-- variant start--}}
            <div class="col-12 col-lg-12">
                {{-- variant--}}
                <div class="container mt-5" style="">
                      <div class="row">
                          <div class="col-12 col-lg-6 d-flex align-items-center" style="">
                              <form action="{{route('productvarianttvalue.store')}}" enctype="multipart/form-data" method="POST" class="kat-form "
                                    id="kat-q-form">
                                  @csrf
                                  <div class="row">
                                      <input type="hidden" name="color_id" value="{{$ColorValue->id}}">
                                      <div class="col-12 col-lg-12  align-items-center" style="">
                                          @error('v_id')
                                          <p class="text-danger  m-0"
                                             style="    position: absolute; top: -25px;">{{ $message }}</p>
                                          @enderror
                                          <label class="bg-light bg-gradientpx-1  " for="v_id" >Variant</label>
                                          <select name="v_id" id="v_id"
                                                  class=" form-control font-weight-bold rounded-0 mb-2 ">
                                              <option value="" class=" font-weight-bold">Variant tanlang</option>
                                              @foreach($variantAll as $item)
                                                  <option value="{{$item->id}}" {{(old('v_id')==$item->id)? 'selected':''}} data-var="{{$item->name}}" class=" font-weight-bold">{{$item->name}} </option>
                                              @endforeach
                                          </select>
                                      </div>
                                      <div class="col-12 col-lg-6">
                                          @error('variant_sku')
                                          <p class="text-danger  m-0"
                                             style="    position: absolute; top: -25px;">{{ $message }}</p>
                                          @enderror
                                          <label class="bg-light bg-gradientpx-1  " for="variant-sku">Variant Sku</label>
                                          <input type="text" name="variant_sku"  placeholder="Variant Sku"
                                                 id="variant-sku" value="{{old('variant_sku')?old('variant_sku'):$ColorValue->getProduct->sku.'-'.$ColorValue->getColorFirst->slug}}"
                                                 class="text-  mb-2  @error('variant_sku') is-invalid text-danger @enderror form-control  rounded-0 font-weight-bold  ">
                                      </div>
                                      <div class="col-12 col-lg-6">
                                          @error('qty')
                                          <p class="text-danger  m-0"
                                             style="    position: absolute; top: -25px;">{{ $message }}</p>
                                          @enderror
                                          <label class="bg-light bg-gradientpx-1  " for="qty">Miqori</label>
                                          <input type="text" name="qty" onkeyup="toSeoUrl(this)" placeholder="qty"
                                                 id="qty" value="{{old('qty')?old('qty'):""/*$product_id->qty*/}}"
                                                 class="text-  mb-2  @error('qty') is-invalid text-danger @enderror form-control  rounded-0 font-weight-bold  ">
                                      </div>
                                      <div class="col-12">
                                          <button type="submit"
                                                  class="btn btn-dark text-warning  w-100 text-bold "
                                          >Tasdiqlang
                                          </button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                          <div class="col-12 col-lg-6">
                              <div class="row">
                                  @foreach($ColorValue->getColorVariantValue as $item)
                                      @if($ColorValue->getColorVariantValue)
                                      @foreach($item->getVariant as $itemxususiyat)
                                          <div class="col-12 col-lg-6   d-flex xusuiyat-div{{$itemxususiyat->id}} ">
                                              <div class="card m-2 border-0 shadow-sm w-100">
                                                  <div class="m-1 d-flex   align-items-center">
                                                      <h6 class="ms-2 my-auto fw-bold float-end">
                                                          {{$itemxususiyat->name}}
                                                      </h6>
                                                      <div class="ms-auto">
                                                          <button type="button" class="btn text-danger  variantdelete"  onclick="variantdelete('.variantdelete', '{{route('variantdelete')}}')" data-id="{{$itemxususiyat->id}}" >
                                                              <i class="bi bi-trash-fill"></i>
                                                          </button>
                                                          <button type="button" class="btn text-success  "  >
                                                              <i class="bi bi-pen-fill"></i>
                                                          </button>
                                                          <button type="button" class="btn text-warning " >
                                                              <i class="bi bi-plus-circle-dotted"></i>
                                                          </button>
                                                      </div>
                                                  </div>
                                                  <hr class="border m-0">
                                                  <div class="card-body">
                                                      <div class="d-flex ">
                                                          <p class=" my-auto  mx-1">Soni:</p>
                                                          <p  class="my-auto  mx-1 ms-auto "  >
                                                              {{$item->qty}}
                                                          </p>
                                                      </div>
                                                      <div class="d-flex ">
                                                          <p class=" my-auto  mx-1">Kod:</p>
                                                          <p  class="my-auto  mx-1 ms-auto "  >
                                                              {{$item->sku}}
                                                          </p>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      @endforeach
                                      @endif
                                  @endforeach
                              </div>
                          </div>
                      </div>
                  </div>
            </div>
            {{-- variant end--}}

            {{-- img start--}}
            <div class="col-12 col-lg-12">
                <div class="container mt-5" style="">
                    <div class="container mt-5 ">
                        <h5 class="mt-3 text-center">{{$ColorValue->getProduct->name}}</h5>
                        <form method="POST" action="{{route('addImgDrop',['id' =>  $ColorValue->id ])}} " name="file"
                              files="true"
                              enctype="multipart/form-data"
                              class=" rounded mt-3 dropzone dr" id="FileIMGd">
                            @csrf
                        </form>
                        <button id="btndelete"
                                onclick="deletAll('{{route('producDelete')}}', '.checkBox',)"
                                class="btn  btn-danger float-end mt-2   border-0"
                                style="font-size: 14px">
                            <i class="bi bi-trash " style="font-size: 19px"></i>
                        </button>
                        <ul id="sortable" class="m-5 d-flex nav row selectable" style="">
                            @foreach($ColorValue->getImg as $key => $item)
                                <li class="col-md-3 col-lg-2 nav-item  border border-white" id="rank-{{$item->id}}">

                                    <div class="checkboxDELETE">
                                        <input type="checkbox" class="checkDELETE checkBox"
                                               value="{{$item->id}}"
                                               data-id="{{$item->id}}" name="Sd-{{$item->id}}"
                                               id="checkA-{{$item->id}}"/>
                                        <label for="checkA-{{$item->id}}" class="label  m-0"
                                               style="position:absolute;  left:-3px;margin-top:20px">
                                        </label>
                                    </div>
                                    <img src="{{asset('')}}{{$item->img}}" data-action="zoom"
                                         style=" height: 100px; width: 100px; object-fit: cover;"
                                         class="m-3  rounded-3 mt-0">
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            {{-- img end--}}
        </div>
    </div>
@endsection
@section('js')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        })
        $.ajax({
            url: '{{route('variantCerateProduct')}}',
            method: 'POST',
            data: {},
            async: false,
            success: function (response) {

                response.variant.forEach(myfun);

                function myfun(item, index) {
                    $(".variant").html($(".variant").html() + '<div class="col-6"><label for="variant_id' + item.id + '"> ' + item.name + '</label><select  data-id="' + item.id + '" name="variant_id[][' + item.id + ']"  id="variant_id' + item.id + '"\n' +
                        '            class="form-control font-weight-bold change-xususiyat rounded-0 mb-2 ">\n' +
                        '        <option value="" class="font-weight-bold">bosh</option>\n' +
                        '    </select></div>');
                }
            },
            error: function () {
            }
        })
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
                        $(this).removeClass('change-xususiyat')
                        th.append('<option value="' + item.id + '" class=\"font-weight-bold\">' + item.name + '</option>');
                    }
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
                    if (response.name) {
                        location.reload();
                    }
                },
                error: function () {
                }
            })
        })
        $("#v_id").change(function() {
            $('#variant-sku').val($('#variant-sku').val() + '-'+$(this).val())

        })
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
        $(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
            })
            $("#sortable").sortable();
            $("#sortable").on('sortupdate', function (event, ui) {
                var data1 = $('#sortable').sortable("serialize");
                $.ajax({
                    url: "{{route('sortable')}}",
                    method: "POST",
                    data: {
                        id: data1,
                    },
                    async: false,
                    success: function (response) {
                        toastr["success"]("O'zgartirildi")
                    },
                    error: function () {
                    }
                })
            })
        })
        Dropzone.options.FileIMGd = {
            maxFilesize: 5,
            acceptedFiles: ".jpeg,.jpg,.png,.gif, .webp, .svg",
            maxFiles: 100,
            success: function (file, response) {
                console.log(response)
             $('#sortable').html($('#sortable').html() + '<li class="col-md-3 col-lg-2 nav-item  border border-white" id="rank-' + response.imgajx.id + '">\n' +
                    '                            <div class="checkboxDELETE">\n' +
                    '                                <input type="checkbox" class="checkDELETE checkBox"\n' +
                    '                                       value="' + response.imgajx.id + '"\n' +
                    '                                       data-id="' + response.imgajx.id + '" name="Sd-' + response.imgajx.id + '"\n' +
                    '                                       id="checkA-' + response.imgajx.id + '"/>\n' +
                    '                                <label for="checkA-' + response.imgajx.id + '" class="label  m-0"\n' +
                    '                                       style="position:absolute;  left:-3px;margin-top:20px">\n' +
                    '\n' +
                    '                                </label>\n' +
                    '                            </div>\n' +
                    '                            <img src="{{asset('')}}' + response.imgajx.img + '"\n' +
                    '\n' +
                    '                                data-action="zoom" style=" height: 100px; width: 100px; object-fit: cover;"\n' +
                    '                                 class="m-3 rounded-3 mt-0"\n' +
                    '                                 >\n' +
                    '                    </li')
                toastr["success"]("Saqlandi")
            },
        }
    </script>
@endsection
