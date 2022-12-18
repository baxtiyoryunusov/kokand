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


    <div class="container " style="height: 100vh">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="link-dark" href="{{route('newadmin')}}">Bosh sahifa</a></li>
                <li class="breadcrumb-item active" aria-current="page">Xususıyat</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-12 col-lg-4 d-flex align-items-center" style="height: 80vh">
                <form action="{{route('productxususiyatvalue.store')}}" enctype="multipart/form-data" method="POST" class="kat-form "
                      id="kat-q-form">
                    @csrf
                    <div class="row">
                        <select name="xususiyat_id" id="p_id"
                                class="text-  form-control font-weight-bold rounded-0 mb-2 ">

                            @foreach($xususiyatAll as $item)
                                <option value="{{$item->id}}"
                                        class=" font-weight-bold">{{$item->name}} </option>

                            @endforeach
                        </select>
                        <input type="hidden" name="product_id" value="{{$product_id->id}}">



                        <div class="col-12">
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

                        @foreach($product_id->getProductXususiyatValue as $item)
                        @foreach($item->getXususiyat as $itemxususiyat)

                        <div class="col-12 col-lg-6   d-flex xusuiyat-div{{$itemxususiyat->id}} ">
                            <div class="card m-2 border-0 shadow-sm w-100">
                                <div class="m-1 d-flex   align-items-center">

                                    <h6 class="ms-2 my-auto fw-bold float-end">

                                            {{$itemxususiyat->name}}
                                    </h6>
                                        <div class="ms-auto">

                                            <button type="button" class="btn text-danger  xusuiyat-delete"  onclick="xusuiyatdelete('.xusuiyat-delete', '{{route('xusuiyatDelete')}}')" data-id="{{$itemxususiyat->id}}" >
                                                <i class="bi bi-trash-fill"></i>
                                            </button>
                                            <button type="button" class="btn text-success  xusuiyat-delete"  >
                                                <i class="bi bi-pen-fill"></i>

                                            </button>

                                            <button type="button" class="btn text-warning " >

                                                <i class="bi bi-plus-circle-dotted"></i>
                                            </button>
                                        </div>


                                </div>
                                <hr class="border m-0">
                                <div class="card-body">

                                    <select name="xususiyatVal_id" id="xususiyatVal-select" data-xus="{{$item->id}}"
                                            class="text-  form-control font-weight-bold xususiyatVal-select rounded-0 mb-2 ">
                                        <option value="">Bo'sh</option>
                                        @foreach($item->getXususiyat as $itemxususiyat)
                                        @foreach($itemxususiyat->getXususiyatValue as $itemgetXususiyatValue)


                                                <option value="{{$itemgetXususiyatValue->id}}" {{$itemgetXususiyatValue->id==$item->xususiyat_value_id?'selected':''}} >{{$itemgetXususiyatValue->name}}</option>
                                        @endforeach
                                        @endforeach

                                    </select>
                                    <input type="hidden" name="product_id" value="{{$product_id->id}}">


                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endforeach

                </div>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->

@endsection
@section('js')


    <script> function xusuiyatdelete(btn, url){
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
    </script>


@endsection

