@foreach($childern as $key => $itemtoo1)

    @if(count($itemtoo1->getPF)>0 )
        <div class="div-hover d-flex ps-2  my-1 py-1 w-100">
            <div class="div-hover0">
            <a  href="{{route('wow-kategory',[$itemtoo1->slug])}}" class="div-hover nav-link  m-2 p-1" id="" >

                <img src="{{asset('')}}{{$itemtoo1->img}}"
                     class="rounded-circle "
                     style="object-fit: cover"
                     height="45px" width="45px"
                     alt=""> {{$itemtoo1->name}}
                <i
                    class="  bi bi-chevron-right"></i>

            </a>
            <div class="nav-desc bg-white  ">

                <div class="bg-white pe-1 over">

                    @include("menu.submenuglavni",['childern'=>$itemtoo1->getPF])
                </div>


            </div>
        </div>
        </div>
    @else
        <div class="div-hover d-flex ps-2 me-1  my-1 py-1 w-100">
            <div class="div-hover0">
            <a  href="{{route('wow-kategory',[$itemtoo->slug])}}" class="div-hover nav-link  m-2 p-1" id="" >

                <img src="{{asset('')}}{{$itemtoo->img}}"
                     class="rounded-circle "
                     style="object-fit: cover"
                     height="45px" width="45px"
                     alt=""> {{$itemtoo->name}}

            </a>

        </div>
        </div>
    @endif


@endforeach

