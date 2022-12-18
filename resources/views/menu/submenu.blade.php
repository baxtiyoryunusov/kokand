@foreach($childern as $itemtoo)
    <li class=" nav-item border-top-0">
        @if(count($itemtoo->getPF)>0 )
            <a onclick="openNav('.altNav-{{$itemtoo->id}}')"
               class="nav-link w-100 ps-2  p-2">
                <img data-src="{{asset('')}}{{$itemtoo->img}}" class="lazy shadow-sm me-2 rounded-circle" style="object-fit: cover" height="50px" width="50px" alt="">
                {{$itemtoo->name}}
                <i class="float-end  py-2  bi bi-chevron-right" style="font-size: 22px"></i> </a>
        @else
            <a href="{{route('wow-kategory',[$itemtoo->slug])}}{{$url}}" class="nav-link  w-100 ps-2  p-2">   <img data-src="{{asset('')}}{{$itemtoo->img}}" class="lazy shadow-sm me-2 rounded-circle" style="object-fit: cover" height="50px" width="50px" alt="">
            {{$itemtoo->name}}
            </a>
        @endif
    </li>
    <div class="altNav-{{$itemtoo->id}} catigori-nav bg-white " id="catigori-nav">
        <div id="" class="container catigori-nav2">
            <ul class="navbar-nav w-100 ">
                <div class="offcanvas-header p-1 border-0 m-0 p-0 sticky-top  bg-secondary text-white canvast-header "
                     onclick="closeNav('.altNav-{{$itemtoo->id}}')"
                     style="height: 40px!important;">
                    <h6 class="ms-3 mb-0">{{$itemtoo->name}}</h6>
                    <button type="button" class=" text-white btn border-0 me-1 ">
                        <i class="bi bi-chevron-left"></i></button>
                </div>
                @include("menu.submenu",['childern'=>$itemtoo->getPF])
                <li class=" nav-item border-top-0">
                    <div class="d-flex  ms-2 my-1">
                    <img data-src="{{asset('')}}{{$itemtoo->img}}" class="lazy shadow-sm me-2 rounded-circle" style="" height="50px" width="50px" alt="">
                    <a class="nav-link  "
                       href="{{route('wow-kategory',[$itemtoo->slug])}}{{$url}}"><span class=" fw-bolder pe-2 ">Barchasi</span>
                    </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@endforeach

