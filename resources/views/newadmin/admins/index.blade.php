@extends('newadmin.layout')
@section('title',"Admins")
@section('css')

@endsection
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap  align-items-center pt-3 pb-2 mb-3 px-2 border-bottom">
        <h1 class="h2">Adminlar </h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{route('usersadmin.create')}}" class="btn btn-sm btn-outline-dark">Admin Qo'shing</a>
            </div>

        </div>
    </div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb px-2">
            <li class="breadcrumb-item"><a class="link-dark" href="{{route('newadmin')}}">Bosh sahifa</a></li>
            <li class="breadcrumb-item active" aria-current="page">Adminlar</li>
        </ol>
    </nav>
    <div class="  card-body   ">
        <div class="bd-example table-responsive">
            <table class="table  table-hover table-striped  ">
                @if( count($users)>0)
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


                        <th class=" align-middle text-start  ">Ism</th>
                        <th class=" align-middle text-start  ">Sahrf</th>
                        <th class=" align-middle text-start  ">E-mail</th>
                        <th class="align-middle  ">Rol</th>
                        <th class="align-middle  ">Xolati</th>
                        <th class=" align-middle  ">Created</th>
                        <th class=" align-middle  ">Amallar</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($users as $item)
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


                            <td class="align-middle text-start ">
                                <span class="  "> {{$item->name}}</span>
                            </td>
                            <td class="align-middle text-start ">
                                <span class="  "> {{$item->familya}}</span>
                            </td>
                            <td class="align-middle text-start ">
                                <span class="  "> {{$item->email}}</span>
                            </td>
                            <td class="align-middle text-center ">
                                <span class="  ">@foreach($item->roles as $rol) {{$rol->name}}@endforeach</span>
                            </td>

                            <td class="text-center  align-middle ">

                                <x-checkbox filed="status" id="check" class=""
                                            attr="onchange=chackStatus('{{route('usersadmistatus')}}',this)    data-id={{$item->id}}"
                                            checked="{{$item->status}}"/>

                            </td>
                            <td class="text-center align-middle"><span
                                    class=" ">{{$item->created_at?$item->created_at->diffForHumans():" "}}f</span>
                            </td>
                            <td class="text-center align-middle">
                                @if($item->getColorValueFirst)

                                    <a href="{{route('card',['slug'=>$item->slug,'url'=>$item->getColorValueFirst->id])}}"
                                       target="_blank"
                                       class="text-white btn cat-delete btn-sm  rounded-0">
                                        <i class="bi bi-eye-fill text-dark"></i>
                                    </a>
                                @endif
                                <a type="button" data-id="{{$item->id}}"
                                   onclick=" delet('.usersadmiDelete-delete','{{route('usersadmiDelete')}}')"
                                   class="text-white btn usersadmiDelete-delete btn-sm  rounded-0 ">
                                    <i class="bi bi-trash3-fill text-danger"></i>
                                </a>
                                <a href="{{route('usersadmin.edit',['usersadmin'=>$item->id])}}"

                                   class="text-white btn cat-delete btn-sm  rounded-0">
                                    <i class="bi bi-pen-fill text-success"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                @else
                    <tr>
                        <td class="text-center bg-danger text-warning  text-bold">Admin Topilmadi</td>
                    </tr>
                @endif
            </table>
        </div>
    </div>

@endsection
@section('js')

@endsection
