@extends('admin.layout')
@section('css')
    <link rel="stylesheet" href="{{asset("backend/plugins/toastr/toastr.min.css")}}">
    <!-- Theme style -->


@endsection

@section('title')
    Kategory

@endsection

@section('content')
    <div class="row ">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Kategory</h3>

                    <div class="card-tools">
                        <div class="" style="width: 135px;">


                            <button type="button" class="btn  btn-dark rounded-0" data-toggle="modal"
                                    data-target="#modal-default">Kategory Qo'shishi
                            </button>
                            <!-- <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                    <div class="input-group-append">
                                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                    </div> -->
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">

                    <table class="table table-hover">
                        @if( count($kategorys)>0)
                            <thead class="">
                            <tr>


                                <th>name</th>


                            </tr>

                            </thead>
                            <tbody>


                            {{--   @foreach($kategorys as $item)

                                   <tr>
                                       <td>
                                           <span class="text-dark">{{$item?$item->name:' '}}</span>
                                       @foreach($item->getP as $itemGETP)
                                              <span class="text-danger">  {{$itemGETP?$itemGETP->name:''}}</span>
                                           @foreach($itemGETP->getP as $itemTWOO)

                                       <tr>   <td>
                                           <span class="text-warning">  {{$itemTWOO?$itemTWOO->name:''}}</span>
                                       </td> </tr>


                                   @endforeach
                               @endforeach
                                       </td>


                                   </tr>
                               @endforeach--}}



                            @foreach($kategorys as $item)
                                @yield('item')
                                <tr id="row{{$item->id}}">

                                    <td>
                                        <span class="text-dark">  {{$item->name}}</span>


                                    </td>
                                </tr>
                                @foreach($item->getP as $itemGETP)
                                    <tr id="row{{$item->id}}">

                                        <td>
                                            <span class="text-dark">  {{$item->name}}</span>
                                            <span class="text-warning">  {{$itemGETP->name}}</span>

                                        </td>
                                    </tr>
                                    @foreach($itemGETP->getP as $itemGETPTwoo)

                                        <tr id="row{{$item->id}}">

                                            <td>
                                                <span class="text-dark">  {{$item->name}}</span>
                                                <span class="text-warning">  {{$itemGETP->name}}</span>
                                                <span
                                                    class="text-danger">  {{$itemGETPTwoo->name}}</span>
                                            </td>
                                        </tr>

                                    @endforeach
                                @endforeach

                            @endforeach



                            </tbody>
                        @else
                            <tr>
                                <td class="text-center ">Malumot Topilmadi</td>

                            </tr>
                        @endif
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    {{--    @foreach($kategorys as $item)
            {{$item->name}}>
            @if($item->findP)
                {{$item->findP->name}}>
                --}}{{-- @if($item->findP->findP)
                     {{$item->findP->findP->name}}
                 @endif--}}{{--
            @endif--}}

@endsection
@section('js')

    <!-- Toastr -->
    <script src="{{asset('backend/plugins/toastr/toastr.min.js')}}"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        })
        $('#vil_q').click(function () {
            if ($('#no').val().trim() == '') {
                $(function () {
                    toastr.error('Iltimos Bo\'sh Maydonni to\'ldiring.')
                });
                $('#no').addClass("is-invalid");

            } else if ($('#name').val().trim() == '') {


                $(this).addClass("is-invalid");

                $(function () {
                    toastr.error('Iltimos Bo\'sh Maydonni to\'ldiring.')
                });
                $('#name').addClass("is-invalid");
            } else {
                $('#city-q-form').submit();
            }
        })
        $('#vil_u').click(function () {
            if ($('#no1').val().trim() == '') {
                $(function () {
                    toastr.error('Iltimos Bo\'sh Maydonni to\'ldiring.')
                });
                $('#no1').addClass("is-invalid");

            } else if ($('#name1').val().trim() == '') {


                $(this).addClass("is-invalid");

                $(function () {
                    toastr.error('Iltimos Bo\'sh Maydonni to\'ldiring.')
                });
                $('#name1').addClass("is-invalid");
            } else {
                $('#city-q-form').submit();
            }
        })

        $('.vil_delete').click(function () {
            Swal.fire({
                title: 'Silme işlemi',
                text: "Gerçekten silmek istiyor musun",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#243e7d',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Evet',
                cancelButtonText: 'Hayır'
            }).then((result) => {
                if (result.isConfirmed) {
                    let dataID = $(this).data('id');
                    let self = $(this)
                    $.ajax({
                        url: "{{route('vil_delete')}}",
                        method: "POST",
                        data: {
                            id: dataID,
                        },
                        async: false,
                        success: function (response) {


                            $('#row' + dataID).remove(),
                                $(function () {
                                    Swal.fire({
                                        title: 'Silindi',

                                        icon: 'success',
                                        showConfirmButton: false,
                                        timer: 1500

                                    })


                                });


                        },
                        error: function () {

                        }
                    })

                }
            })


        })

    </script>

@endsection



@extends('menu.submenu')
@section('item')


dd

    <tr id="row{{$item->id}}">

        <td>
            <span class="text-dark">  {{$item->name}}</span>


        </td>
    </tr>
    @foreach($item->getP as $itemGETP)
        <tr id="row{{$item->id}}">

            <td>
                <span class="text-dark">  {{$item->name}}</span>
                <span class="text-warning">  {{$itemGETP->name}}</span>

            </td>
        </tr>
        @foreach($itemGETP->getP as $itemGETPTwoo)

            <tr id="row{{$item->id}}">

                <td>
                    <span class="text-dark">  {{$item->name}}</span>
                    <span class="text-warning">  {{$itemGETP->name}}</span>
                    <span
                        class="text-danger">  {{$itemGETPTwoo->name}}</span>
                </td>
            </tr>

        @endforeach


@endforeach
@endsection
