<nav class=" scroll-navbar navbar fixed-top  p-0     navbar-light text-dark  " style="">
    <div class=" container-fluid navbar-dark-mode-container p-0 ">
        <div class="align-items-center w-25 d-flex">
            <button type="button" class="  navtog  navbar-toggler border-0 me-md-4 me-lg-5 " data-bs-target="#t"
                    data-bs-toggle="offcanvas" aria-expanded="false"><i class="text-dark fs-1 bi bi-list"></i>
            </button>
        </div>
        <div class="w-50 d-flex justify-content-center align-items-center">
            <a href="{{route("home")}}" class=" text-decoration-none text-dark   ">
                <h1 class="m-1 font-monospace">
                    <img src="{{asset('admin/Elite_logo_SGV.svg')}}" class="menu-logo" width="120px" alt="">
                </h1>
            </a>

        </div>
        <div class=" align-items-center justify-content-end w-25 pe-1  d-flex">
            <input type="text" placeholder="Izlash" name="filterkeyword" onkeypress="keyEnter(event, '#keyword')" id="keyword"
                   class="d-none  d-lg-block border-0 desctop-search-in mx-2 px-2 search border-start border-dark  " value="{{request()->get('keyword')}}"> <button onclick="filterkeyword(event,'#keyword')" class="btn menu-search-btn d-none d-lg-block border-0 shadow-sm"><i class="   bi bi-search  m-1 "> </i></button>
            <div class="  px-2">
                <a href="{{route('profile.index')}}" class=" text-dark"><i class="bi bi-person-fill  p-2 p-lg-3"></i></a>
            </div>
            <div class="main-favori-icon-div px-2">
                @if(Auth::user())
                    @if(Auth::user()->getFavori)
                        <a href="{{route('favori.index')}}" class=" position-relative text-dark">
                            <i class="bi bi-heart-fill">
                                <span
                                    class="position-absolute top-0 left-1 start-100 translate-middle badge rounded-pill bg-danger"
                                    style="height: 15px;left: 20px!important;">
                            <span class="visually-hidden">unread messages</span>
                        </span></i>
                        </a>
                    @else
                        <a href="{{route('favori.index')}}" class=" text-dark"><i class="bi   bi-heart-fill"></i></a>
                    @endif
                @else
                    <a href="{{route('favori.index')}}" class=" text-dark"><i class="bi   bi-heart-fill"></i></a>
                @endif
            </div>
            <div class=" px-3 ">
                <a href="{{route('cardShop')}}"
                   class="text-dark position-relative ">
                    @if(Cookie::get('shopping_cart'))
                        <i class="bi bi-bag-fill "> <span class="position-absolute top-0 left-1 start-100 translate-middle badge rounded-pill bg-danger" style="height: 15px;left: 20px!important;">
                            <span class="visually-hidden">unread messages</span>
                        </span>
                        </i>
                    @else
                        <i class="bi bi-bag-fill">
                    </i>
                    @endif
                </a>
            </div>
        </div>
    </div>
    <div class=" offcanvas border-white offcanvas-start menu-canvas  " id="t">
        <div class="offcanvas-header p-1  canvast-header "
             style="max-height: 55px!important; min-height: 55px!important;">
            <h5 class="offcanvas-title">
                <h1 class=" font-monospace m-1 ">
                    <a href="{{route("home")}}">
                        <img src="{{asset('admin/Elite_logo_SGV.svg')}}" class="menu-logo" width="120px" alt="">
                    </a>
                </h1>
            </h5>
            <div class="d-flex darkmode-switch-div">
                <i class="bi fs-4 bi-brightness-low-fill my-auto me-1"></i>
                <label class="toggle  my-auto ">
                    <input class="toggle-checkbox dark-switch" name="status"
                           data-id=""  type="checkbox" {{Cookie::get('dark')?'checked':''}}>
                    <div class="toggle-switch"></div>
                    <span class="toggle-label"></span>
                </label>
                <i class="bi bi-moon-fill my-auto ms-1"></i>
            </div>
            <button type="button" class=" btn border-0 text-reset me-1 navbar-sekret fs-2" data-bs-dismiss="offcanvas"><i class=" text-dark bi bi-x-lg"></i></button>
        </div>
        <div class=" nav-item ps-2 py-2 d-lg-none  d-flex  ">
            <input type="text" placeholder="Izlash" name="filterkeywordn" onkeypress="keyEnter(event, '#MoBilfilterkeywordMoBil')" id="MoBilfilterkeywordMoBil"
                   class=" border-0 search  my-auto form-control    " value="{{request()->get('keyword')}}">
            <button onclick="filterkeyword(event,'#MoBilfilterkeywordMoBil')" class="menu-search-btn btn btn-sm mx-1 float-end  border-0 shadow-sm"><i class="   bi bi-search px-1  "> </i></button>
            <div class="clearfix"></div>
        </div>
        <div class=" offcanvas-body p-0   border-bottom-0  ">
            <ul class="navbar-nav w-100 ">
                @if(count($menu)>0 )
                    @foreach($menu as $item)
                        <li class=" nav-item border-top-0">
                            @if(count($item->getPF)>0 )
                                <a onclick="openNav('.altNav-{{$item->id}}')" class="nav-link w-100 ps-2  p-2 ">
                                    <img data-src="{{asset('')}}{{$item->img}}"
                                         class="lazy shadow-sm me-2 rounded-circle" height="50px" width="50px"
                                         style="object-fit: cover" alt="">{{$item->name}}
                                    <i class="float-end  py-2  bi bi-chevron-right" style="font-size: 22px"></i>
                                </a>
                            @else
                                <a href="{{route('wow-kategory',[$item->slug])}}{{$url}}"
                                   class="nav-link w-100 ps-2  p-2">
                                    <img data-src="{{asset('')}}{{$item->img}}"
                                         class="lazy shadow-sm me-2  rounded-circle" style="object-fit: cover"
                                         height="50px" width="50px" alt=""> {{$item->name}}
                                </a>
                            @endif
                        </li>
                        @if(count ($item->getPF) )
                            <div class="altNav-{{$item->id}} bg-white " id="catigori-nav">
                                <div id="catigori-nav2" class="container">
                                    <ul class="navbar-nav w-100 ">
                                        <div
                                            class="offcanvas-header p-1 border-0 m-0 p-0 sticky-top  bg-secondary text-white canvast-header "
                                            onclick="closeNav('.altNav-{{$item->id}}')" style="height: 40px!important;">
                                            <h6 class="ms-3 mb-0">{{$item->name}}</h6>
                                            <button type="button" class=" text-white btn border-0 me-1 ">
                                                <i class="bi bi-chevron-left"></i>
                                            </button>
                                        </div>
                                            @include("menu.submenu",['childern'=>$item->getPF,'url'=>$url])
                                        <li class=" nav-item ">
                                            <a class="nav-link w-100 ps-2  p-1  fw-bolder"
                                               href="{{route('wow-kategory',[$item->slug])}}{{$url}}">
                                                <img data-src="{{asset('')}}{{$item->img}}"
                                                     class="lazy shadow-sm rounded-circle" style="object-fit: cover"
                                                     height="50px" width="50px" alt=""> <span
                                                    class="ms-2">Barchasi</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    <li class=" nav-item border-top-0">
                        <a class="nav-link w-100 ms-2  p-1  fw-bolder " href="{{route('wow-kategory',['barchasi'])}}">Barchasi
                        </a>
                    </li>
                @endif
            </ul>
        </div>
        <div class="row row-cols-2 mt-0 fixed float-right container-fluid">
            @if(Auth::user())
                <div class="col ">
                    <a href="{{route('profile.index')}}" class="btn btn-outline-dark rounded-0 w-100">Hisobim</a>
                </div>
                <div class="col">
                    <a href="{{route('logout')}}"
                       class="btn btn-outline-dark border-start-0 rounded-0 border-end-0 w-100">Chiqish</a>
                </div>
            @else
                <div class="col ">
                    <a href="{{route('login')}}" class="btn btn-outline-dark rounded-0 w-100">Ro'yxatdan o'tish
                    </a>
                </div>
                <div class="col">
                    <a href="{{route('login')}}"
                       class="btn btn-outline-dark border-start-0 border-end-0 rounded-0 w-100">Kirish</a>
                </div>
            @endif
        </div>
    </div>
</nav>
<script>
    function keyEnter(e ,isd) {
        if(e.keyCode === 13) {
            console.log(isd)
            filterkeyword(e ,isd)
        }
    }
</script>
