<hr class="border">
<div class="  ms-auto  w-100 mx-5">
    <form action="{{route('products.index')}}" id="form-id" class="filter" method="GET"
          style="">
        <div class="row d-flex mb-3">



            <div class="col-12 col-md-2  ">

                <div class="mt-2 mx-2 form-floating">
                    <select
                        name="durum" onchange="document.getElementById('form-id').submit()"
                        id="Status"
                        class="form-control form-control-sm">
                        <option
                            value=""{{(request()->get('durum') == ' ')?'selected':''}}>
                            Barchasi
                        </option>
                        <option
                            value="1"{{(request()->get('durum') == 1)?'selected':''}}>
                            Aktif
                        </option>
                        <option
                            value="2"{{(request()->get('durum') == 2)?'selected':''}}>
                            Pasif
                        </option>
                    </select>
                    <label for="Status" class="ms-2">Status</label>
                </div>
            </div>
            <div class="col-12 col-md-2   ">


                <div class="mt-2 mx-2 form-floating">

                    <select
                        name="color" onchange="document.getElementById('form-id').submit()"
                        id="Rang"
                        class="form-control form-control-sm">
                        <option value="">
                            Barchasi
                        </option>
                        @foreach($colorAll as $item)

                            <option style="color: {{$item->text_kod}}; background:{{$item->color_kod}}  "
                                value="{{$item->id}}"{{(request()->get('color') == $item->id)?'selected':''}}>
                                {{$item->name}}
                            </option>
                            @endforeach

                    </select>
                    <label for="Rang" class="ms-2">Rang</label>


                </div>
            </div>
            <div class="col-6 col-md-2 ">


                <div class="mt-2  form-floating">

                    <select
                        name="category" onchange="document.getElementById('form-id').submit()"
                        id="category"
                        class="form-control form-control-sm">
                        <option value="">
                            Barchasi
                        </option>
                        @foreach($categoryALL as $item)

                            <option value="{{$item->id}}"
                                    class=" font-weight-bold" {{(request()->get('category') == $item->id)?'selected':''}}> {{\App\Http\Controllers\CategoryController::getParentsTree($item,$item->name)}}</option>
                        @endforeach

                    </select>
                    <label for="category" class="ms-2">Kategorya</label>


                </div>

            </div>
            <div class="col-6 col-md-2 ">

                <x-input filed="product" id="Maxsulot" class="form-control-sm" type="text"
                         value="{{request()->get('product')}}" label="Maxsulot nomi"
                         placeholder="Maxsulot nomi" yulduz="false"/>


            </div>

            <div class="col-6 col-md-4    d-flex justify-content-center  align-self-center my-2 mt-3 " style="">
                <div class="btn-group me-2 ">

                    <button class="btn btn-sm btn-outline-dark"
                            onclick="location.href='{{route('products.index')}}'"
                            type="button">

                        <i class="bi bi-stars"></i> Tozalash
                    </button>
                    <button class="btn btn-sm btn-outline-dark"><i class="bi bi-search"></i> Izlash
                    </button>
                </div>

            </div>
        </div>
    </form>


</div>
<hr class="border">
<div class="">
    {{ $product->appends(request()->input())->links('vendor.pagination.maxsulot') }}
</div>
<hr class="border m-0">
