@extends('layout.layout')
@section('css')
   {{-- <link rel="stylesheet" href="{{asset('frontend/datapicker/datapicker.css')}}">--}}

@endsection
@section('content')
    <div class=" container mt-5 px-1" style="min-height: 80vh">
        <div class="row  pt-5 justify-content-around">
            <div class="col-12 col-lg-2 ">
                @include("user.navbar")
            </div>
            <div class="col-12  col-lg-9 mt-4 mt-lg-0 ">

                <div class="card  user-profile-form border-0 ">
                    <div class="card-body m-lg-3  ">
                        <form action="{{route('profile.update',['profile'=>Auth::user()->id])}}" method="POST">
                            @csrf
                            @method('PUT')
                        <div class="row justify-content-around px-lg-2">
                            <div class="col-12 form-floating  my-2">

                                <input type="text" id="name" name="proname" class="form-control  border-0 shadow-sm @error('proname') is-invalid  @enderror"
                                       placeholder="1" value="{{old('proname')?old('proname'):Auth::user()->name}}">
                                <label for="name"><span class="text-danger">*</span> Isim & Familya</label>
                            </div>
                            <div class="col-12 form-floating   my-2">

                                <input type="text" id="pro-password" name="prophone"
                                       class="form-control  border-0 shadow-sm @error('prophone') is-invalid  @enderror" placeholder="Telefon"
                                       value="{{old('prophone')?old('prophone'):Auth::user()->phone}}">
                                <label for="pro-password"><span class="text-danger">*</span> Telefon</label>
                            </div>
                            <div class="col-12 form-floating  my-2">

                                <input type="email" id="email" name="proemail" class="form-control  border-0 shadow-sm @error('proemail') is-invalid  @enderror"
                                       placeholder="E-Pochtangiz" value="{{old('proemail')?old('proemail'):Auth::user()->email}}">
                                <label for="email"> <span class="text-danger">*</span> E-Pochtangiz</label>
                            </div>
                            <div class="col-12  form-floating  my-2">

                                <input type="text" id="datepicker" name="proday" class="form-control border-0 shadow-sm @error('proday') is-invalid  @enderror " placeholder="proday"
                                       value="{{old('proday')?old('proday'):Auth::user()->day}}">
                                <label for="datepicker"> Tug'ilgan yil va kun</label>
                            </div>


                            <div class="col-12 mt-2">

                                <button type="submit" class="btn btn-dark float-end">Tasdiqlash</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
  {{--  <script src="{{asset('frontend/datapicker/datapicker.js')}}"></script>--}}


    <script>
        $(function () {


            $("#datepicker").datepicker({
                yearRange: "-100:+0",
                changeMonth: true,
                changeYear: true

            });

            $( "#datepicker" ).datepicker( "option", "dateFormat", "yy-mm-dd" );

            $("#datepicker").val('{{old('proday')?old('proday'):Auth::user()->day}}')

        });
    </script>
@endsection

