{{--
@extends('newadmin.layout')
@section('title','Mahsulot rasmlar')
@section('css')
    <link rel="stylesheet" href="{{asset('admin/productimg/css/main.css')}}">
@endsection



@section('content')
    <div class="container ">
        <h5 class="mt-3 text-center">{{$product->name}}</h5>
        <form method="POST" action="{{route('drop',['id' =>  $product->id ])}} " name="file" files="true"
              enctype="multipart/form-data"
              class=" rounded mt-3 dropzone dr" id="FileIMG">
            @csrf
            <div class="previews"></div>
            <!-- Now setup your input fields -->
            <input type="email" name="username" />
            <input type="password" name="password" />
            <input type="password" name="password" />
            <button type="submit">Submit data and files!</button>
        </form>

        <ul id="sortable" class="m-5 d-flex nav row selectable" style="">
            @foreach($img as $key => $item)
                <li class="col-md-3 col-lg-2 nav-item  border border-white" id="rank-{{$item->id}}">
                    <a href="{{asset('')}}{{$item->img}}" class="m-3" target="_blank">
                        <div class="checkboxDELETE">
                            <input type="checkbox" class="checkDELETE checkBox"
                                   value="{{$item->id}}"
                                   data-id="{{$item->id}}" name="Sd-{{$item->id}}"
                                   id="checkA-{{$item->id}}"/>
                            <label for="checkA-{{$item->id}}" class="label  m-0"
                                   style="position:absolute;  left:-3px;margin-top:20px">
                            </label>
                        </div>
                        <img src="{{asset('')}}{{$item->img}}" style=" height: 100px; width: 100px; object-fit: cover;" class="m-3 rounded-3 mt-0">
                    </a>
                </li>
            @endforeach
                <a href="http://www.example?iframe">This goes to iframe</a>

                or

                <a class="iframe" href="http://www.example">This goes to iframe</a>
        </ul>
    </div>
@endsection
@section('js')
    <script src="{{asset('admin/productimg/js/main.js?v=8')}}"></script>
    <script>
        Dropzone.options.FileIMG = {
            autoProcessQueue: false,
            maxFilesize: 5,
            parallelUploads: 100,
            uploadMultiple: true,
            acceptedFiles: ".jpeg,.jpg,.png,.gif, .webp",
            maxFiles: 100,
            success: function (file, response) {
                $('#sortable').html($('#sortable').html() + '<li class="col-md-3 col-lg-2 nav-item  border border-white" id="rank-' + response.imgajx.id + '">\n' +
                    '                        <a href="{{asset('')}}' + response.imgajx.img + '" class="m-3" target="_blank">\n' +
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
                    '                                 style=" height: 100px; width: 100px; object-fit: cover;"\n' +
                    '                                 class="m-3 rounded-3 mt-0"\n' +
                    '                                 >\n' +
                    '                        </a>\n' +
                    '                    </li')
                toastr["success"]("Saqlandi")

            },

            init: function() {
                var myDropzone = this;

                // First change the button to actually tell Dropzone to process the queue.
                this.element.querySelector("button[type=submit]").addEventListener("click", function(e) {
                    // Make sure that the form isn't actually being sent.
                    e.preventDefault();
                    e.stopPropagation();
                    myDropzone.processQueue();
                });

            this.on("sendingmultiple", function() {
                // Gets triggered when the form is actually being sent.
                toastr["success"]("yuklanmoqda")
                // Hide the success button or the complete form.
            });
            this.on("successmultiple", function(files, response) {
              toastr["success"](success)
                // Redirect user or notify of success.
            });
            this.on("errormultiple", function(files, response) {
                // Gets triggered when there was an error sending the files.
                // Maybe show form again, and notify user of error
                console.log(files)
                toastr["success"]('error')
            });

        }
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

    </script>

@endsection
--}}
