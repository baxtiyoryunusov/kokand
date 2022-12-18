@extends('newadmin.layout')
@section('title',"Mahsulot")
@section('css')
    <link rel="stylesheet" href="{{asset("admin/product/css/main.css?v=9")}}">
@endsection
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="link-dark" href="{{route('newadmin')}}">Bosh sahifa</a></li>
            <li class="breadcrumb-item active" aria-current="page">Maxsulot </li>
        </ol>
    </nav>
    <div class="  card-body   ">
        <div class="bd-example table-responsive">
            <table class="table  table-hover table-striped  ">
                @if( count($product)>0)
                    <thead class="text-center align-middle">
                    <tr>
                        <th class="align-middle  ">
                            <div class="checkboxDELETE">
                                <input type="checkbox" class="checkDELETE" onclick="chek('#checkImg')" id="checkImg"/>
                                <label for="checkAll" class="label m-0"
                                       style="position:absolute;  left:-3px;margin-top:20px">

                                </label>
                            </div>
                        </th>
                        <th class=" align-middle   ">ID</th>
                        <th class=" align-middle ">Surat</th>
                        <th class=" align-middle ">Ranglar</th>

                        <th class=" align-middle text-start ">Maxsulot Nomi</th>
                        <th class=" align-middle text-start  ">Kategory Nomi</th>
                        <th class="align-middle  ">Xolati</th>
                        <th class=" align-middle  ">Created At</th>
                        <th class=" align-middle  ">Amallar</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($product as $item)
                        <tr id="row{{$item->id}}" class="text-center">
                            <td class="text-center align-middle p-0">
                                <div class="checkboxDELETE">
                                    <input type="checkbox" class="checkDELETE checkBox"
                                           value="{{$item->id}}"
                                           data-id="{{$item->id}}" name="Sd-{{$item->id}}"
                                           id="checkA-{{$item->id}}"/>
                                    <label for="checkA-{{$item->id}}" class="label  m-0"
                                           style="position:absolute;  left:-3px;margin-top:20px">

                                    </label>
                                </div>
                            </td>
                            <td class="text-center align-middle ">
                                <span class="  ">  {{$item->id}}</span>
                            </td>
                            <td class="align-middle d-flex ">
                                @if(count($item->getColorValue))
                                    <div class="swiper mySwiper rounded-circle" style="">
                                        <div class="swiper-wrapper rounded-circle">
                                            @foreach($item->getColorValue as $key =>$img)
                                                @if($img->getImgNull)
                                                    <div class="swiper-slide rounded-circle ">
                                                    <img
                                                        src="{{asset('')}}{{$img->getImgNull->img}}"
                                                        style="height: 100px; width: 100px; object-fit: cover;"
                                                        class="rounded-circle owl-a{{$key}}"
                                                        alt="{{$item->name}}">
                                                </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                            </td>
                            <td class="align-middle text-center">
                                @if(count($item->getColorValue))
                                    <div class="d-flex justify-content-center">
                                        @foreach($item->getColorValue as $key =>$color)
                                            <h6 class=" me-1 rounded-pill  fw-bold float-left"
                                                style=";width: 30px ;height: 30px ;background: {{$color->getColorFirst->color_kod}};color:{{$color->getColorFirst->text_kod}} ;border: 1px solid {{$color->getColorFirst->text_kod}} ">
                                                <i
                                                    class="bi bi-palette-fill m-1"></i>
                                            </h6>
                                        @endforeach
                                    </div>
                                @endif
                            </td>


                            <td class="align-middle text-start ">
                                <span class="  "> {{$item->name}}</span>
                            </td>
                            <td class="align-middle text-start ">
                                <span>{{\App\Http\Controllers\CategoryController::getParentsTree($item->getKat,$item->getKat->name)}}</span>
                            </td>
                            <td class="text-center  align-middle ">

                                <x-checkbox filed="status" id="check" class="" attr="onchange=chackStatus('{{route('ProCheckStatus')}}',this)    data-id={{$item->id}}" checked="{{$item->status}}"/>

                            </td>
                            <td class="text-center align-middle"><span
                                    class=" ">{{$item->created_at?$item->created_at->diffForHumans():" "}}f</span>
                            </td>
                            <td class="text-center align-middle">
                                @if($item->getColorValueFirst)

                                <a href="{{route('card',['slug'=>$item->slug,'url'=>$item->getColorValueFirst->id])}}" target="_blank"
                                   class="text-white btn cat-delete btn-sm  rounded-0">
                                    <i class="bi bi-eye-fill text-dark"></i>
                                </a>
                                @endif
                                <a type="button" data-id="{{$item->id}}"
                                   onclick=" delet('.pro-delete','{{route('pro_delete_tek')}}')"
                                   class="text-white btn pro-delete btn-sm  rounded-0 ">
                                    <i class="bi bi-trash3-fill text-danger"></i>
                                </a>
                                <a href="{{route('products.edit',['product'=>$item->id])}}"

                                   class="text-white btn cat-delete btn-sm  rounded-0">
                                    <i class="bi bi-pen-fill text-success"></i>
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

@endsection
@section('js')
    <script src="{{asset("admin/product/js/main.js?v=3")}}"></script>
@endsection
