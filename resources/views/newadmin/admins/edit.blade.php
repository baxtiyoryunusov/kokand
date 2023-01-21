@extends('newadmin.layout')
@section('title',"Admins Tahrirlash")
@section('css')

@endsection
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap  align-items-center pt-3 pb-2 mb-3 px-2 border-bottom">
        <h1 class="h2">Adminlar Tahriralash </h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{route('usersadmin.index')}}" class="btn btn-sm btn-outline-dark">Adminlar</a>
                <a href="{{route('usersadmin.create')}}" class="btn btn-sm btn-outline-dark">Admin Qo'shing</a>

            </div>

        </div>
    </div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb px-2">
            <li class="breadcrumb-item"><a class="link-dark" href="{{route('newadmin')}}">Bosh sahifa</a></li>
            <li class="breadcrumb-item"><a class="link-dark" href="{{route('usersadmin.index')}}">Adminlar</a></li>
            <li class="breadcrumb-item active" aria-current="page"> Tahrirlash </li>
        </ol>
    </nav>
    <div class="  card-body  my-3  ">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-12 col-lg-9">
                <form action="{{route('usersadmin.update',['usersadmin'=>$user->id])}}" method="POST"
                      enctype="multipart/form-data"
                      class="kat-form"
                      id="kat-q-form">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-12 ">
                            <x-input filed="name" id="name" class="" type="text"   value="{{$user->name}}"  label="Kategory Isim (255)" attr=""  placeholder="Kategory Isim" yulduz="true"/>


                        </div>
                        <div class="col-12 ">
                            <x-input filed="familya" id="familya" class="" type="text" value="{{$user->familya}}" label="Familya (255)" attr=""  placeholder="Familya" yulduz="true"/>

                        </div>
                        <div class="col-12 ">
                            <x-input filed="reg_email" id="email" class="" type="email" value="{{$user->email}}" label="E-mail (255)" attr=""  placeholder="email" yulduz="true"/>

                        </div>

                        <div class="col-9 form-floating">
                            @error('rol')
                            <p class="text-danger m-0">{{ $message }}</p>
                            @enderror

                            <select name="rol" id="rol" onchange=" appendCategorySeoUrl(this)"
                                    class="form-select  font-weight-bold  mb-2  " >
                                <option value=""></option>
                                @foreach($roles as $item)
                                    <option value="{{$item->name}}"
                                             {{$user->hasRole($item->name)?'selected':''}} {{(old('rol')==$item->name)? 'selected':''}}
                                            class=" font-weight-bold"> {{$item->name}}</option>
                                @endforeach
                            </select>
                            <label for="rol"  class="ms-2">Roll</label>
                        </div>

                        <div class="col-3 pb-2 mt-lg-3  d-flex justify-content-center">
                            <x-checkbox filed="status" id="check" class="" attr="{{$user->status?'checked':''}}" checked=""/>

                        </div>
                        <div class="col-12 mt-lg-3 ">

                            <button type="submit"
                                    class="btn float-end  submit-btn btn-dark   text-bold "
                                    id="kat_q">Tasdiqlang
                            </button>

                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12 col-lg-9 mt-5">
                <form action="{{route('usersadmiPass',$user->id)}}" method="POST"
                      enctype="multipart/form-data"
                      class="kat-form"
                      id="kat-q-form">
                    @csrf

                    <div class="row">

                        <div class="col-12 ">
                            <x-input filed="reg_password" id="Parol" class="" type="password" value="" label="Parol (255)" attr=""  placeholder="Parol" yulduz="true"/>

                        </div>
                        <div class="col-12 ">
                            <x-input filed="confirm" id="Parol" class="" type="password" value="" label="Parol Takrori (255)" attr=""  placeholder="Parol" yulduz="true"/>

                        </div>



                        <div class="col-12 mt-lg-3 ">

                            <button type="submit"
                                    class="btn float-end  submit-btn btn-dark   text-bold "
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

@endsection
