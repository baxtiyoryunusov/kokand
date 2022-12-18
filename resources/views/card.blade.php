@extends('layout.layout')
@section('css')

@endsection
@section('title') Mahsulot | {{$ColorValue->getColorFirst->name.' '.$pro->name}}@endsection
@section('fav_icon')
    @foreach($ColorValue->getImg as $key=> $item)
        @if($key==1)
            <meta property="og:image" content="{{asset('')}}{{$item->img}}">
        @endif
    @endforeach
@endsection

@section('content')
    <div class="container-fluid  card-contain mt-5 pt-2 pt-lg-5  cardnaxsulot-container " style=" ">
        <div class="row  justify-content-evenly mx-lg-5 px-lg-5 " style=" overflow: hidden">
            <div class="col-12 col-lg-4 order-1 order-lg-0 bg-white px-2  px-lg-0 " style=" z-index: 7">
                <div class="container d-none d-lg-block">
                    <div class="row card-title  ">
                        <div class="col-12 col-md-12">
                            <h4 class=" text-center  mt-sm-1">{{$ColorValue->getColorFirst->name.' '.$pro->name}}</h4>
                        </div>
                        <div class="col-12 col-md-6">
                            <h1 class="text-warning ">
                                <span class="text-muted fs-6">Narx <br>
                                  @if($pro->eski_price!==Null)  <p class="m-0"><s>{{number_format($pro->eski_price)}} uzs</s> </p>@endif
                                </span> {{number_format($pro->yangi_price)}} <span
                                    class="h5 text-dark">UZS.</span></h1>
                            <p>Taxminiy etkazib berish: 3 kun ichida</p>
                        </div>
                        <div class="col-12 col-md-6 d-flex justify-content-center my-2">
                            <div class="d-flex flex-column mb-3">
                                <a href="{{route('wow-kategory',['barchasi'])}}{{'?&brand='.$pro->getBrand->slug.','}}"
                                   title="{{$pro->getBrand->name}} brendga oid mahsulotlarni  ko'rish">
                                    <img src="{{asset('')}}{{$pro->getBrand->img}}" class="rounded-3" width="120px"
                                         height="120px" style="object-fit: cover" alt="">
                                </a>
                                <a class="text-center btn btn-dark border-0 mt-2"
                                   href="{{route('wow-kategory',['barchasi'])}}{{'?&brand='.$pro->getBrand->slug.','}}"
                                   title="{{$pro->getBrand->name}} brendga oid mahsulotlarni  ko'rish">
                                    {{$pro->getBrand->name}}
                                </a>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="mt-lg-2 w-100">
                    <div class="accordion accordion-flush card-accardion" id="accordionFlushExample"
                         style="border: none!important;">
                        <div class="accordion-item rounded my-2 border-0">
                            <h2 class="accordion-header bg-light rounded shadow-sm " id="flush-headingThree">
                                <button class="accordion-button   " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                    Mahsulot xususiyatlari
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse show border-0"
                                 aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body border-0"
                                     style="max-height: 280px; overflow-x: hidden ; overflow-y: auto">
                                    @foreach($ColorValue->getColorXususiyatValue as $item)

                                        @foreach($item->getXususiyat as $itemxususiyat)

                                            <div class=" my-2 p-2  rounded bg-light">
                                                <span> {{$itemxususiyat->name}} :</span> <span
                                                    class="float-end">{{$item->getXususiyatValueOne?$item->getXususiyatValueOne->name:''}} </span>
                                            </div>
                                        @endforeach
                                    @endforeach</div>
                            </div>
                        </div>
                        <div class="accordion-item rounded my-2 border-0" style="border: none!important;">
                            <h2 class="accordion-header bg-light  rounded shadow-sm" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                    Bekor qilish va to'lovni qaytarish
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse "
                                 aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body"
                                     style="max-height: 280px; overflow-x: hidden ; overflow-y: auto">
                                    QAYTISH VA BEKOR
                                    SHARTLARI:
                                    Mahsulotni qaytarish uchun: a'zo sifatida tizimga kirib, tugallangan buyurtmangiz
                                    bo'yicha qaytarish so'rovini yarating. Siz mahsulotni Mng Cargo mijoz kodi
                                    (617657188) va siz olgan Oson Qaytish kodi bilan 7 kun ichida Mng Cargo filiallariga
                                    yetkazib berish orqali bizga bepul yuborishingiz mumkin. Mahsulot bizga yetib
                                    borganida va kerakli nazoratlar tugallangandan so‘ng biz ma’lumot almashamiz.
                                    Mahsulotni ko'rib chiqqandan so'ng, sizning hisobingizga qaytarish yoki almashtirish
                                    ma'qullanganligi haqidagi ma'lumot yuboriladi. Tasdiqlangan buyurtmalar uchun
                                    toʻlovlar keyingi kun bankingizga xabar qilinadi.
                                    Qaytish muddati: Qaytish muddati 15 kun.
                                    Mahsulot to'lovini qaytarish: Qaytarilishi tasdiqlangan mahsulot uchun to'langan
                                    to'lov 7 ish kuni ichida bayonotingizda aks ettiriladi. Hisobingizdan ko'chirmani
                                    kuzatishingiz mumkin. (To'lovni qaytarish muddati banklarga qarab farq qiladi.)
                                    Mahsulot almashinuvi: EliteKokand orqali sotib olgan mahsulotlaringiz
                                    almashtirilmaydi.
                                    Do'konni qaytarish: Qaytish muddati tugashidan oldin siz bizning do'konlarimizdan
                                    EliteKokand orqali xarid qilishingiz mumkin. Sizning qaytarib berishingiz do'konimiz
                                    tomonidan qabul qilinadi va bizning bosh ofisimizga yuboriladi. Bosh ofis
                                    mahsulotning qaytariladigan xususiyatlarini tekshiradi va uni tasdiqlaganidan keyin
                                    qaytarish jarayonini amalga oshiradi. Gaziantep Primemall, Gaziantep Sankopark,
                                    Forum Kayseri, Novamall Manavgat dilerlarimizdan to'lovlarni qaytarib bo'lmaydi.
                                    Qaytarilgan etkazib berish to'lovi: Yurti Kargo orqali qaytariladigan
                                    mahsulotlarni yuborishingiz mumkin. Shartnomamiz bo'lgan Yurti Kargo tomonidan
                                    mahsulotni qaytarib yuborish to'lovi olinmaydi.
                                    Turli xil yuklar orqali jo'natish: Agar siz qaytarib yuborilgan yuklar uchun Yurti
                                    Kargodan boshqa yuk kompaniyasini afzal ko'rsangiz, to'lovni o'zingiz qilishingiz
                                    kerak bo'ladi. Bundan tashqari, siz turli yuk kompaniyalari bilan jo'natgan yuklar
                                    qabul qilinmaydi.

                                    Yurti Kargo bilan yuk tashish: Avvalo, hisobingiz orqali mahsulot uchun qaytarib
                                    olish yozuvini yaratishingiz kerak. Yuqorida qayd etilgan yozuvni Yurti Kargo
                                    mijoz kodi 225270977 bilan quyidagi manzilga yuborish kifoya.

                                    Qaytish uchun manzil va yuk ma'lumotlari:
                                    Yurtii Kargo mijoz kodi: 225270977
                                    Manzil:
                                    Buyurtmani bekor qilish: Buyurtmani bekor qilish uchun siz mijozlarga xizmat
                                    ko'rsatish bilan bog'lanishingiz va buyurtmani joylashtirganingizdan keyin 2
                                    soatgacha so'rovingizni yuborishingiz mumkin. Agar mahsulot yukga yoki sizga
                                    yetkazilsa, uni qaytarish tartib-qoidalariga rioya qilgan holda 15 kun ichida
                                    qaytarishingiz mumkin.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item rounded my-2 border-0" style="border: none!important;">
                            <h2 class="accordion-header bg-light  rounded shadow-sm border-0" id="flush-headingTwo">
                                <button class="accordion-button collapsed  border-0 " type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                        aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Yuk tashish va etkazib berish
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                 aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body"
                                     style="max-height: 280px; overflow-x: hidden ; overflow-y: auto">Buyurtmalaringizni
                                    tayyorlash vaqti 1-3 ish kuni. Dam olish kunlarida yuk jo'natish mumkin emas. Vaqt
                                    zaxiralar mavjudligiga qarab uzaytirilishi mumkin.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper mySwiper d-lg-none">
                <div class="swiper-wrapper">
                    @foreach($ColorValue->getImg as $item)
                        <div class="swiper-slide ">
                            <div class="d-flex justify-content-center">
                                <img src="{{asset('')}}{{$item->img}}" data-img="{{asset('')}}{{$item->img}}"
                                     id=""
                                     class="img-fluid "
                                     style=" height: 73vh!important; cursor: pointer;object-fit: cover">
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="col-12 col-lg-4  d-none d-lg-block" style="  ">
                <div class="row  justify-content-center order-0  order-lg-1 justify-content-lg-end" style="">
                    <div class="col-2  flex-lg-column-reverse" id="">
                        @foreach($ColorValue->getImg as $item)
                            <img src="{{asset('')}}{{$item->img}}" data-img="{{asset('')}}{{$item->img}}"
                                 id="show-img"
                                 class="img-fluid  float-end mx-2 card-img-kich my-1"
                                 style=" cursor: pointer;object-fit: cover">
                        @endforeach
                    </div>
                    <div class="col-9 show show-im  m-0" id="img-zoomer-box" href="">
                        <img src="" class="zoomImg my-1 img-fluid" id="img-1" style="object-fit: cover" alt="">
                        <div id="img-2"></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col col-lg-4 variant-div bg-white" style="">
                <div class="shadow-sm d-flex justify-content-center d-lg-none"><i class="bi bi-dash-lg"></i></div>
                <div class="col-12 my-4  ">
                    <div class="container-fluid d-lg-none mx-2 mb-4 ">
                        <div class="row card-title d-flex justify-content-center  ">
                            <div class="col-12 col-md-12">
                                <h4 class=" text-center w-100 text-truncate mt-sm-1 px-2">{{$ColorValue->getColorFirst->name.' '.$pro->name}}</h4>
                            </div>
                            <div class="col-6 col-md-6 mt-3 d-flex align-items-center justify-content-center">

                                <h1 class="text-warning "><span
                                        class="text-muted fs-6">Narx <br>
                                        @if($pro->eski_price!==Null)  <p class="m-0"><s>{{number_format($pro->eski_price)}} uzs</s> </p>@endif
                                    </span> {{number_format($pro->yangi_price)}}
                                    <span class="h5 text-dark">UZS.</span>
                                </h1>
                            </div>
                            <div class="col-6 col-md-6 mt-3 d-flex justify-content-center">
                                <div class="d-flex flex-column mb-3">
                                    <img src="{{asset('')}}{{$pro->getBrand->img}}" class="rounded-3" width="120px"
                                         height="120px" style="object-fit: cover" alt="">
                                    <a class="text-center btn btn-dark border-0 mt-2"
                                       href="{{route('wow-kategory',['barchasi'])}}{{'?&brand='.$pro->getBrand->slug.','}}"
                                       title="{{$pro->getBrand->name}} brendga oid mahsulotlarni  ko'rish">
                                        {{$pro->getBrand->name}}
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 d-flex justify-content-center">
                                <p>Taxminiy etkazib berish: 3 kun ichida</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center " style="min-height: 100px">
                        <div style="">
                            <h6 class="my-3 text-center"> {{count($pro->getColorValueImgFrontend)>1?'Turli ranglar':''}}</h6>
                            @foreach($pro->getColorValueImgFrontend as $key =>$item)
                                @if($item->getImgNull)
                                    @if($ColorValue->id !=$item->getImgNull->color_values_id)
                                        <a href="{{route('card',['slug'=>$pro->slug,'url'=>$item->id])}}"
                                           class="owl-a{{$key}} text-white fast-view    ">
                                            <img src="{{asset('')}}{{$item->getImgNull->img}}"
                                                 class=" img-fluid rounded" style="width: 100px"
                                                 alt="{{$item->getImgNull->name}}">
                                        </a>
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12  ">
                    <div class=" mx-lg-5 bg-danger rounded text-white px-lg-2 text-center  alert-variant "
                         style="display: none" role="alert">
                        Iltimos o'lcham tanlang!
                    </div>
                    <div class="mx-lg-5 bg-success rounded text-white px-lg-2 text-center  alert-variant   alert-qyt "
                         style="display: none" role="alert">
                    </div>
                    <div class="d-flex justify-content-center">
                        @if(count($ColorValue->getColorVariantValue))
                            <div class="mt-2  py-2 w-100">
                                <div class="  my-sm-3 d-flex justify-content-center align-items-end variant-check">
                                    @foreach($ColorValue->getColorVariantValue as $item)
                                        @foreach($item->getVariant as $itemvariant)
                                            @if($item->qty>0)
                                                <div class="{{$itemvariant->id==20?'d-none':''}} ">
                                                    <input type="radio" name="varyant" id="varyantId-{{$item->id}}"
                                                           value="{{$itemvariant->id}}"
                                                           data-qty="{{$item->qty}}"
                                                           class="VariantDesktop " {{$itemvariant->id==20?'checked':''}}>
                                                    <label for="varyantId-{{$item->id}}"
                                                           class="vrynt classStock btn mt-2 mr-1 mt-md-0">{{$itemvariant->name}} </label>
                                                </div>
                                            @else
                                                <div class="mb-0  ">
                                                    <input type="radio" name="varyant" id="varyantId"
                                                           value="92376"
                                                           data-stock="0" class="rdVariantDesktop" disabled="">
                                                    <label for="varyantId"
                                                           class="alerttooltip vrynt classNoStock btn-light mt-2 mr-1 mt-md-0">
                                                        <span class="stock-alert-text">{{$itemvariant->name}}</span>
                                                        <span class="tooltiptext d-none d-md-block">
                                                            <div class="row mt-3 px-2" style="z-index: 99999">
                                                    <div class="col-12">
                                                        <h6 class="ml-2 h7">SOTILIB BO'LDI</h6>
                                                        <i class="bi bi-bell-fill"></i>
                                                        <p class="h8">Bu o'lcham qachon kelishini xaqida xabardor bo'lish uchun</p>
                                                <button type="button" class="btn btn-dark w-100 btn-sm  mb-2 text-white"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#Bildirim">So'rov</button>
                                                    </div>
                                                </div>
                                                        </span>
                                                    </label>
                                                </div>
                                            @endif
                                        @endforeach
                                    @endforeach
                                </div>
                                <div class="d-flex justify-content-center mt-5">
                                    <button type="button" data-colorid="{{$ColorValue->id}}"
                                            class="btn btn-dark w-100  text-center py-2 mx-2 mx-lg-4 rounded "
                                            id="btnAddCart">
                                        <i class="fas fa-cart-plus" aria-hidden="true"></i>
                                        <i class="bi bi-bag-fill"></i> Savatga qo'shish
                                    </button>
                                </div>
                                <div class="d-flex justify-content-center mt-2">
                                    <button type="button"
                                            class="btn btn-success w-100  text-center my-2 mx-2 mx-lg-4 rounded "
                                            id="btnAddCart" data-bs-toggle="modal" data-bs-target="#BuyurtmaModal">
                                        <i class="fas fa-cart-plus" aria-hidden="true"></i>
                                        <i class="bi bi-telephone-fill"></i> Telefon orqali buyurtma
                                    </button>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-12 col-lg-12  my-2 p-2 rounded d-flex justify-content-center "
             style="max-height: 1000px; overflow-y: auto;overflow-x: auto">
            <div class="container ">
                <p>{!! $pro->detalis !!}</p>
            </div>
        </div>
        @if(Auth::user())
            <div class="col-12 col-lg-12  my-5 p-2 rounded d-flex justify-content-center "
                 style="max-height: 1000px; overflow-y: auto;overflow-x: auto">
                <div class="container ">
                    <h3 class="text-center my-4">Sharhlar</h3>
                    @if(count($comment)>0)
                        <div class="card border-0 shadow-sm bg-light  "
                             style="height: 50vh ;overflow-y: auto;overflow-x: auto">
                            <div class="card-body   card-Body-result" id="card-Body">
                                @foreach($comment as $item)
                                    <div class="col-12 col-lg-12 d-flex justify-content-end">
                                        <span class="text-muted">{{$item->created_at}}</span></div>
                                    <div class="card border-0 shadow-sm mb-3 w-auto">
                                        <div class="card-body ">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-8 col-lg-11 my-2">
                                                    <span class="text-muted fw-bold">{{$item->getUser->name}}</span>
                                                    <span class="text-warning text-end">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                </span>
                                                </div>
                                                <div class="col-12 col-lg-8 d-flex align-items-center">
                                                    <div class="row w-100">
                                                        <div class="col-12">
                                                            <span class="fw-bold">{{$item->message}}</span>
                                                            si qui quia quibusdam reprehenderit temporibus, unde
                                                            voluptatem.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @else
                        <div class="card border-0 shadow-sm bg-light"
                             style="height: 50vh ;overflow-y: auto;overflow-x: auto">
                            <div class="card-body card-Body-result">
                                <div
                                    class="card sharh-mavjud-emas border-0  mb-3 b d-flex align-items-center justify-content-center "
                                    style="height: 44vh ;overflow-y: auto;overflow-x: auto">
                                    <div class="card-body ">
                                        <img
                                            src="https://www.elitekokand.uz/eliteKokand/productone-1670784828.comingsoon.svg"
                                            width="260x" alt="">
                                        <div class="d-flex align-items-center justify-content-center mt-4">
                                            <h3>Sharh mavjud emas</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class=" my-2">
                        <div class="d-flex w-100">
                            <div class=" form-floating  w-100  my-2">
                                <input type="text" id="Message" name="message"
                                       class="form-control message-in border-0 shadow-sm @error('message') is-invalid  @enderror"
                                       placeholder="message">
                                <label for="pro-password"><span class="text-danger">*</span> Sharh qoldirish</label>
                            </div>
                            <button class="btn btn-dark btn-sm comments-btn  m-2" type="button">Yubor</button>
                        </div>
                        <input type="hidden" id="user" value="{{Auth::user()->id}}" name="user_id">
                        <input type="hidden" id="color" value="{{$ColorValue->id}}" name="color_id">
                    </div>
                </div>
            </div>
        @endif
    </div>

    <div class="product-detail-modal">
    {{--buyurtma modal--}}
    <!-- Modal -->
        <div class="modal fade" id="BuyurtmaModal" tabindex="-1" aria-labelledby="BuyurtmaModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header  border-0">
                        <h5 class="modal-title " id="BuyurtmaModalLabel"><i class="bi bi-telephone-fill"></i> Telefon
                            orqali
                            buyurtma</h5>
                        <button type="button" class="btn fs-3  border-0" data-bs-dismiss="modal" aria-label="Close"><i
                                class=" text-dark bi bi-x-lg"></i></button>
                    </div>
                    <div>
                        <form action="{{route('call')}}" method="POST">
                            @csrf
                            <div class="row m-3">
                                <div class="col-12 mt-2 ">
                                    <p class="w-100 text-center">
                                        Agar siz hozir buyurtma bermoqchi bo'lsangiz,
                                    </p>
                                    <h2 class="w-100 text-warning text-center">
                                        +998905676565
                                    </h2>
                                    <p class="w-100 text-center">
                                        Bizga telefon raqamiga qo'ng'iroq qilishingiz mumkin.
                                    </p>
                                    <h3 class="w-100 text-center fw-bold">Yoki</h3>
                                    <h5 class="w-100 text-center fw-bold">Raqamingizni qoldiring, <span
                                            class="text-warning ">Biz siz bilan bog'lanamiz?</span></h5>
                                </div>
                                <div class="col-12 mt-2">
                                    <x-input filed="fullname" id="fullname" class="w-100 " type="text"
                                             value="{{Auth::user()?Auth::user()->name:''}}" label="Isim &  Familiya"
                                             placeholder="Isim &  Familiya" yulduz="true"/>
                                </div>
                                <div class="col-12 mt-2">
                                    <x-input filed="phone" id="phone" class="w-100 " type="text"
                                             value="{{Auth::user()?Auth::user()->phone:''}}" label="Telefon Raqamingiz"
                                             placeholder="Telefon Raqamingiz" yulduz="true"/>
                                </div>
                                <div class="col-12 mt-3">
                                    <button type="submit" class="w-100 btn btn-success">Yuboring</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    {{--buyurtma modal--}}

    {{--Bildirim modal--}}
    <!-- Modal -->
        <div class="modal fade" id="Bildirim" tabindex="-1" aria-labelledby="BildirimLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header  border-0">
                        <h5 class="modal-title " id="BildiriLabel"></i>O'lcham kelishini xaqida xabardor bo'lish</h5>
                        <button type="button" class="btn fs-3 border-0" data-bs-dismiss="modal" aria-label="Close"><i
                                class=" text-dark bi bi-x-lg"></i></button>
                    </div>
                    <div>
                        <form action="" method="POST">
                            @csrf
                            <div class="row m-3 variant-div variant-check">

                                <div class="col-12 mt-2">
                                    <h4 class="text-center text-warning">
                                        {{$ColorValue->getColorFirst->name.' '.$pro->name}}
                                    </h4>
                                </div>
                                <div class="col-12 mt-3 d-flex justify-content-center">
                                    @foreach($ColorValue->getColorVariantValue as $item)
                                        @foreach($item->getVariant as $itemvariant)
                                            @if($item->qty>0)
                                            @else
                                                <div class="{{$itemvariant->id==20?'d-none':''}} ">
                                                    <input type="radio" name="varyant" id="varyantId-{{$item->id}}"
                                                           value="{{$itemvariant->id}}"
                                                           data-stock="1"
                                                           class="VariantDesktop " {{$itemvariant->id==20?'checked':''}}>
                                                    <label for="varyantId-{{$item->id}}"
                                                           class="vrynt classStock btn mt-2 mr-1 mt-md-0">{{$itemvariant->name}} </label>
                                                </div>
                                            @endif
                                        @endforeach
                                    @endforeach
                                </div>
                                <div class="col-12 mt-2">
                                    <x-input filed="fullname" id="bilname" class="w-100 " type="text"
                                             value="{{Auth::user()?Auth::user()->name:''}}" label="Isim &  Familiya"
                                             placeholder="Isim &  Familiya" yulduz="true"/>
                                </div>
                                <div class="col-12 mt-2">
                                    <x-input filed="bilemail" id="bilemail" class="w-100 " type="text"
                                             value="{{Auth::user()?Auth::user()->email:''}}" label="E-Pochtangiz"
                                             placeholder="E-Pochtangiz" yulduz="true"/>
                                </div>
                                <div class="col-12 mt-2">
                                    <x-input filed="bilphone" id="bilphone" class="w-100 " type="text"
                                             value="{{Auth::user()?Auth::user()->phone:''}}"
                                             label="Telefon     Raqamingiz" placeholder="Telefon   Raqamingiz"
                                             yulduz="true"/>
                                </div>
                                <div class="col-12 mt-3">
                                    <button type="button" class="w-100 btn btn-success">Yuboring</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{--Bildirim modal--}}
    </div>
@endsection
@section('js')
    <script src="{{asset('frontend/product-detail/main.js?v=1')}}"></script>
    @if($ColorValue)
        <script>

            $.ajax({
                url: '{{route('storeGet')}}',
                method: 'POST',
                data: {
                    color_value_id: {{$ColorValue->id}},
                },
                async: false,
                success: function (response) {

                },
                error: function () {
                }
            })

        </script>

    @endif
    @if($errors->has('fullname') or $errors->has('phone') )
        <script>
            myModal.show()
        </script>
    @endif
    @if($errors->has('message')  )
        <script>

            $("html, body").animate({scrollTop: $(document).height()}, 1000);

        </script>
    @endif

@endsection
