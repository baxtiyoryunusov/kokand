@extends('newadmin.layout')
@section('title',"Xususiyatga qiymatlar berish")
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
                <form action="{{route('xususiyat.store')}}" enctype="multipart/form-data" method="POST" class="kat-form "
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
                            <button type="submit" class="btn btn-dark text-warning  w-100 text-bold ">Tasdiqlang
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12 col-lg-8">
                <div class="row">
                    @foreach($xusuxiyat as $item)
                        <div class="col-12 col-lg-5   xusuiyat-div-{{$item->id}} d-flex">
                            <div class="card m-2 border-0 shadow-sm w-100">
                                <div class="m-1 d-flex  align-items-center">
                                    <h6 class="ms-2 my-auto fw-bold float-end">{{$item->name}}</h6>
                                    <div class="ms-auto">
                                        <button type="button" data-id="{{$item->id}}"  onclick="addXususiyatValue(this,'2')" class="btn text-warning float-end" data-bs-toggle="modal"
                                            data-bs-target="#addXususiyatValue">
                                        <i class="bi bi-plus-circle-dotted"></i>
                                    </button>
                                    <button type="button" class="btn text-success float-end" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                        <i class="bi bi-pen-fill"></i>
                                    </button>
                                        <button type="button" class="btn text-danger ms-auto xusuiyat-delete" onclick="xusuiyatDelete('.xusuiyat-delete', '{{route('xusuiyatDelete')}}')" data-id="{{$item->id}}">
                                            <i class="bi bi-trash-fill"></i>
                                        </button>
                                    </div>
                                </div>
                                <hr class="border m-0">
                                <div class="card-body">
                                    @foreach($item->getXususiyatValue as $itemValue)
                                        <div class="d-flex xusuiyatValue-div{{$itemValue->id}}">
                                            <p class="my-auto  mx-1">{{$itemValue->name}},</p>
                                            <button type="button" class="btn text-danger ms-auto xusuiyatValue-delete" onclick="xusuiyatValuedelete('.xusuiyatValue-delete', '{{route('xusuiyatValueTrash')}}')" data-id="{{$itemValue->id}}">
                                                <i class="bi bi-trash-fill"></i>
                                            </button>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
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
    <div class="modal fade" id="addXususiyatValue" tabindex="-1" aria-labelledby="addXususiyatValueLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addXususiyatValueLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('xususiyatvalue.store')}}" enctype="multipart/form-data" method="POST" class="kat-form "
                          id="kat-q-form">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-lg-12">
                                <x-input filed="xususiyat_val" id="xususiyat_val" class="" type="text" value="" label="Xususiyat Qiymat nomi"  placeholder="Xususiyat Qiymat nomi" yulduz="true"/>

                                     </div>
                            <input type="hidden" name="xususiyat_id" value="" id="addXususiyatValue_id">
                            <div class="col-12">
                                <button type="submit"
                                        class="btn btn-dark text-warning  w-100 text-bold "
                                        >Tasdiqlang
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    @error('xususiyat_val')
    <script>
        $('#addXususiyatValue').show()
    </script>
    @enderror

    <script>
        function addXususiyatValue(w, url){
            let dataID = $(w).data('id');
            $('#addXususiyatValue_id').val(dataID)
        }
        function xusuiyatDelete(btn, url){
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

                                $('.xusuiyat-div-'+dataID).remove(),

                                    toastr["success"]("O\'chirildi")
                            },
                            error: function () {

                            }
                        })
                    }
                });
            })
        }
            function xusuiyatValuedelete(btn, url){
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

                                $('.xusuiyatValue-div' + $(this).data('id')).remove(),
                                    toastr["success"]("O\'chirildi")

                            },
                            error: function () {
                            }
                        })
                    }
                });
            })
        }
    </script>
@endsection

