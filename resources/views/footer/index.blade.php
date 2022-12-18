<footer class="bg-white mt-5" style="">
    <div class="container bg-white  " style="">
        <hr class="shadow mt-0">
        <div class="footer-top x-lg-5 footer-servises">
            <div class="row d-flex p-1  py-md-3 justify-content-center">
                <div class="col-4 col-md-2 nav-item">
                    <a href="javascript:void(0)" class="nav-link text-dark  text-center" style="font-size: 30px ; ;">
                        <i class="bi bi-shield-check"></i>
                        <p class="" style="font-size: 1rem">Ishonchli Savdo</p>
                    </a>
                </div>
                <div class="col-4 col-md-2 nav-item">
                    <a href="javascript:void(0)" class="nav-link text-dark text-center" style="font-size: 30px ;">
                        <i class="bi bi-box"></i>
                        <p class="" style="font-size: 1rem">Bepul yetkazib berish</p>
                    </a>
                </div>
                <div class="col-4 col-md-2 nav-item">
                    <a href="javascript:void(0)" class="nav-link text-dark text-center" style="font-size: 30px ;">
                        <i class="bi bi-arrow-clockwise"></i>
                        <p class="" style="font-size: 1rem">Qulay harid</p>
                    </a>
                </div>
            </div>
        </div>
        <hr class="mt-0 ">
    </div>
    <div class="container bg-white">
        <footer class="pt-lg-5">
            <div class="row text-center d-flex justify-content-center justify-content-md-between">
                <div class="col-10 col-md-3 pb-3">
                    <h5>Ma'lumot</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item  m-0 mb-md-2"><a href="{{route("about")}}" class="nav-link rounded py-1 text-muted">Biz Haqimizda</a></li>
                        <li class="nav-item m-0 mb-md-2"><a href="{{route("contact")}}" class="nav-link rounded py-1 text-muted">Bog'lanish</a></li>
                        <li class="nav-item m-0 mb-md-2"><a href="{{route("servis")}}" class="nav-link rounded py-1 text-muted">Yetkazib berish va mahsulotni qaytarish shartlari</a></li>

                    </ul>
                </div>

                <div class="col-md-5 offset-md-1 p-1 mb-3">
                    <form action="{{route('dayjest')}}" method="POST">
                        <h5>Bizning yangiliklarimizga obuna bo'ling. </h5>
                        <p>Bizdan yangi va qiziqarli narsalarning oylik dayjesti</p>
                        <div class="d-flex flex-column flex-sm-row w-100 gap-2">

                                @csrf
                                @method('POST')
                                <label for="dayjest" class="visually-hidden @error('dayjest') text-danger @enderror">E-pochta manzili</label>
                                <input id="dayjest" type="text" class="@error('dayjest') is-invalid @enderror form-control form-control-sm  shadow-sm"
                                       placeholder="E-pochta manzili" name="dayjest" value="{{old('dayjest')}}">
                                <button class="btn btn-sm btn-dark  text-nowrap shadow-sm" type="submit">Obuna boʻling</button>


                        </div>
                        <a href="{{('home')}}">
                            <img src="{{asset('admin/Elite_logo_SGV.svg')}}" width="150px" class="mt-4 footer-img"
                                 alt="">
                        </a>
                    </form>
                </div>
            </div>
            <div class="d-flex flex-column flex-sm-row justify-content-center justify-content-md-between pt-2  border-top">
                <p class="text-center m-0">2022 <a href="#" class="text-dark">baxti_0714</a></p>
                <ul class="list-unstyled text-center m-0  d-flex justify-content-center">
                    <li class="ms-3">
                        <a class="link-dark" target="_blank" href="#">
                            <i class="bi bi-telegram" style="font-size: 21px"></i>
                        </a>
                    </li>
                    <li class="ms-3">
                        <a class="link-dark" target="_blank" href="#">
                            <i class="bi bi-instagram" style="font-size: 21px"></i>
                        </a>
                    </li>
                    <li class="ms-3">
                        <a class="link-dark" target="_blank" href="#">
                            <i class="bi bi-facebook" style="font-size: 21px"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </footer>
    </div>
</footer>

<style>footer .nav-item:hover .nav-link{
        color: #000000 !important;
        background: rgba(var(--bs-light-rgb), var(--bs-bg-opacity)) ;
    } </style>

    @if($errors->has('dayjest')  )
    <script>

    $("html, body").animate({scrollTop: $(document).height()}, 1000);

</script>
@endif
