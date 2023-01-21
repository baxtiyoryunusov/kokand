<hr class="border">
<div class="  ms-auto  w-100 mx-5">
    
    <form action="{{$url}}" id="form-id" class="filter" method="GET"
          style="">
        <div class="row d-flex mb-3">




            <div class="col-12 col-md-3 d-flex justify-content-center  align-self-center">
                <div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" name="parent" value="on" type="checkbox"
                               onclick="document.getElementById('form-id').submit()" id="flexSwitchCheckDefault"
                            {{(request()->has('parent'))?'checked':''}}>
                        <label class="form-check-label" for="flexSwitchCheckDefault">Bosh kategoryalar</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" name="child" value="on" type="checkbox"
                               onclick="document.getElementById('form-id').submit()" id="flexSwitchCheckChecked"
                            {{(request()->has('child'))?'checked':''}}>
                        <label class="form-check-label" for="flexSwitchCheckChecked">Ichgi kategoryalar</label>
                    </div>
                </div>

            </div>
            <div class="col-12 col-md-3  mt-2 form-floating">


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
            <div class="col-6 col-md-3 ">

                <x-input filed="keyword" id="keyword" class="form-control-sm" type="text" value="{{request()->get('keyword')}}" label="Izlash"
                         placeholder="Izlash" yulduz="false"/>





            </div>
            <div class="col-6 col-md-3    d-flex justify-content-center  align-self-center my-2 mt-3 " style="">
                <div class="btn-group me-2 ">

                    <button class="btn btn-sm btn-outline-dark"
                            onclick="location.href='{{route('category.index')}}'"
                            type="button">

                        <i class="bi bi-stars"></i>  Tozalash
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
    {{ $kategorys->appends(request()->input())->links('vendor.pagination.admincategory') }}
</div>
<hr class="border m-0">
