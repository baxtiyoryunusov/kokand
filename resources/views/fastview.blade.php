<style>
    .card-accardion .accordion-button:focus {
        box-shadow: none;
        border: none;
    }

    .card-accardion .accordion-button {
        border: none !important;
        background: none !important;
        color: #000 !important;
    }
</style>
<div class="container-fluid  card-contain ">
    <div class="row  justify-content-evenly" style=" overflow: hidden">
        <div class="col-12 col-md-12 col-lg-6 " style="  ">
            <div class="row  justify-content-center" style="">
                <div class="col-2  flex-lg-column-reverse    ">
                    @foreach($ColorValue->getImg as $item)
                        <img src="{{asset('')}}{{$item->img}}" data-img="{{asset('')}}{{$item->img}}" id="show-img"
                             class="img-fluid float-end mx-2 card-img-kich my-1"
                             style=" cursor: pointer;object-fit: cover">
                    @endforeach
                </div>

                <div class="col-9 show show-im  m-0  " id="" href="">
                    <img src="" class="zoomImg my-1 img-fluid" id="img-1" style="object-fit: cover" alt="">
                    <div id="img-2"></div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-6  bg-white variant-div" style=" z-index: 7">
            <div class="container ">
                <div class="row card-title  ">
                    <div class="col-12 col-md-12">
                        <h4 class=" text-center  mt-sm-1">{{$ColorValue->getColorFirst->name.' '.$pro->name}}</h4>
                    </div>
                    <div class="col-12 col-md-6 mt-3">
                        <h1 class="text-warning ">
                            <span class="text-muted fs-6">Narx <br>
                                @if($pro->eski_price!==Null)  <p class="m-0"><s>{{number_format($pro->eski_price)}} uzs</s> </p>@endif

                            </span> {{number_format($pro->yangi_price)}}
                            <span
                                class="h5 text-dark">UZS.</span></h1>
                    </div>
                    <div class="col-12 col-md-6 mt-3 d-flex justify-content-center">
                        <div class="d-flex flex-column mb-3">
                            <a href="{{route('wow-kategory',['barchasi'])}}{{'?&brand='.$pro->getBrand->slug.','}}" title="{{$pro->getBrand->name}} brendga oid mahsulotlarni  ko'rish">
                                <img src="{{asset('')}}{{$pro->getBrand->img}}" class="rounded-3" width="120px" height="120px" style="object-fit: cover" alt="">
                            </a>
                            <a class="text-center btn btn-dark border-0 mt-2" href="{{route('wow-kategory',['barchasi'])}}{{'?&brand='.$pro->getBrand->slug.','}}" title="{{$pro->getBrand->name}} brendga oid mahsulotlarni  ko'rish" >
                                {{$pro->getBrand->name}}
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <div class=" mx-lg-5 bg-danger rounded text-white px-lg-2 text-center  alert-variant " style="display: none" role="alert">
                Iltimos o'lcham tanlang!
            </div>
            <div class="mx-lg-5 bg-success rounded text-white px-lg-2 text-center  alert-variant   alert-qyt " style="display: none" role="alert">

            </div>
            @if(count($ColorValue->getColorVariantValue))
                <div class="mt-lg-2  py-2 w-100">
                    <div class="  my-sm-3 d-flex justify-content-center ">

                        @if(count($ColorValue->getColorVariantValue))
                            <div class="mt-2  py-2 w-100">
                                <div class="  my-sm-3 d-flex justify-content-center variant-check ">
                                    @foreach($ColorValue->getColorVariantValue as $item)
                                        @foreach($item->getVariant as $itemvariant)

                                            @if($item->qty>0)

                                                <div class=" {{$itemvariant->id==20?'d-none':''}} ">

                                                    <input type="radio" name="varyant" id="varyantId-{{$item->id}}"
                                                           {{$itemvariant->id==20?'checked':''}}
                                                           value="{{$itemvariant->id}}"
                                                           data-qty="{{$item->qty}}" class="VariantDesktop">
                                                    <label for="varyantId-{{$item->id}}"
                                                           class="vrynt classStock btn mt-2 mr-1 mt-md-0">{{$itemvariant->name}} </label>
                                                </div>
                                            @else
                                                <div class="mb-0 pb-3 ">
                                                    <input type="radio" name="varyant" id="varyantId"
                                                           value="92376"
                                                           data-stock="0" class="rdVariantDesktop" disabled="">
                                                    <label for="varyantId"
                                                           class="alerttooltip vrynt classNoStock btn-light mt-2 mr-1 mt-md-0">
                                                        <span class="stock-alert-text">{{$itemvariant->name}}</span>

                                                    </label>


                                                </div>
                                            @endif
                                        @endforeach
                                    @endforeach

                                </div>
                                <div class="d-flex justify-content-center mt-4">
                                    <button type="button" data-colorid="{{$ColorValue->id}}"
                                            class="btn btn-success w-100  text-center py-2 mx-3 rounded "
                                            id="btnAddCart">
                                        <i class="fas fa-cart-plus" aria-hidden="true"></i>
                                        Savatga qo'shish
                                    </button>
                                </div>


                            </div>
                        @endif

                    </div>
                </div>
            @endif


            <div class="mt-lg-2 w-100">
                <div class="accordion accordion-flush card-accardion" id="accordionFlushExample"
                     style="border: none!important;">
                    <div class="accordion-item rounded my-2 border-0">
                        <h2 class="accordion-header bg-light rounded shadow-sm  " id="flush-headingThree">
                            <button class="accordion-button   " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                Mahsulot xususiyatlari
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse show border-0"
                             aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body border-0 p-0 p-lg-2"
                                 style="max-height: 280px; overflow-x: hidden ; overflow-y: auto">
                                @foreach($ColorValue->getColorXususiyatValue as $item)

                                    @foreach($item->getXususiyat as $itemxususiyat)

                                        <div class=" my-2 p-2  rounded bg-light">
                                            <span>{{$itemxususiyat->name}}</span>: <span
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
                            <div class="accordion-body "
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
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
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
        <div class="col-12 col-lg-12   bg-white" style="">
            <div class="row m-2">
                <div class="col-12 col-lg-6 mt-3 d-none d-lg-block ">
                    <div class="card-title  ">
                        <h4 class=" mt-sm-1">{{$ColorValue->getColorFirst->name.' '.$pro->name}}</h4>
                        <h1 class="text-warning ">
                            <span class="text-muted fs-6">Narx <br>
                                @if($pro->eski_price!==Null)  <p class="m-0"><s>{{number_format($pro->eski_price)}} uzs</s> </p>@endif
                            </span> {{number_format($pro->yangi_price)}}
                            <span
                                class="h5 text-dark">UZS.</span></h1>
                    </div>

                </div>
                <div class="col-12 col-md-6  mt-3 d-none d-lg-block ">
                    <div class="d-flex justify-content-end">
                        <div class="d-flex flex-column mb-3">
                            <a href="{{route('wow-kategory',['barchasi'])}}{{'?&brand='.$pro->getBrand->slug.','}}" title="{{$pro->getBrand->name}} brendga oid mahsulotlarni  ko'rish">
                                <img src="{{asset('')}}{{$pro->getBrand->img}}" class="rounded-3" width="120px" height="120px" style="object-fit: cover" alt="">
                            </a>
                            <a class="text-center btn btn-dark border-0 mt-2" href="{{route('wow-kategory',['barchasi'])}}{{'?&brand='.$pro->getBrand->slug.','}}" title="{{$pro->getBrand->name}} brendga oid mahsulotlarni  ko'rish" >
                                {{$pro->getBrand->name}}
                            </a>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-lg-12   ">
                    <div class="d-flex justify-content-center">
                        <div style="">
                            <h6 class="my-3 text-center"> {{count($pro->getColorValueImgFrontend)>1?'Turli ranglar':''}}</h6>
                            @foreach($pro->getColorValueImgFrontend as $key =>$item)
                                @if($item->getImgNull)
                                    @if($ColorValue->id !=$item->getImgNull->color_values_id)
                                        <a type="button" data-id="{{$pro->id}}" data-color="{{$item->id}}"

                                           class="owl-a{{$key}} text-white fast-view    " onclick="fastview(this)">
                                            <img src="{{asset('')}}{{$item->getImgNull->img}}"

                                                 class=" img-fluid rounded" style="width: 100px"
                                            >
                                        </a>
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-12  my-2 p-2 rounded d-flex justify-content-center "
                 style="max-height: 500px;max-width: 1700px; overflow-y: auto;overflow-x: auto">
                <div class="container ">
                    <p>{!! $pro->detalis !!}</p>

                </div>

            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        var img = $(".card-img-kich");
        var dataimg = img.data("img");

        $('.zoomImg').attr('src', dataimg);
        $('.show-im').attr('href', dataimg);
        $('#img-2').css('background-image', "url(" + dataimg + ")");

        $(".card-img-kich").click(function () {
            var urll = $(this).data("img");
            $('#img-2').css('background-image', "url(" + urll + ")");

            $('.show-im').attr('href', urll);
            $('.zoomImg').attr('src', urll);
        })
    })
    /**
     * by MonsterDuang
     */


</script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
    })

 /*   $('#btnAddCart').click(function fastview(t) {


        if ($('.VariantDesktop:checked').length > 0) {

            let colorID = $(this).data('colorid');
            let variantID = $('.VariantDesktop:checked').val();
            $.ajax({
                url: 'https://www.elitekokand.uz/add-shop',
                method: 'POST',
                data: {
                    colorId: colorID,
                    variantId: variantID,
                    qty: 1,
                },
                success: function (response) {

                    window.location.href = "https://www.elitekokand.uz/card-shop"
                },
                error: function () {

                }
            })

        } else {
            toastr["error"]("Varyant tanlang")
        }

    })*/


    $('.VariantDesktop').click(function () {
        $(".alert-variant").removeClass('d-block')
        $('.alert-qyt').removeClass('d-block')

        if($(this).data('qty')<=6){
            $('.alert-qyt').html('Bu mahsulotdan '+$(this).data('qty')+' dona qoldi')
            $('.alert-qyt').addClass('d-block')

        }
    })

    $(document).ready(function () {
        if ($('.VariantDesktop:checked').length > 0){
            $(".alert-variant").removeClass('d-block')
            $('.alert-qyt').removeClass('d-block')
            if($('.VariantDesktop:checked').data('qty')<=6){

                $('.alert-qyt').html('Bu mahsulotdan '+$('.VariantDesktop:checked').data('qty')+' dona qoldi')
                $('.alert-qyt').addClass('d-block')

            }
        }
    })

    $('#btnAddCart').click(function fastview(t) {

        if ($('.VariantDesktop:checked').length > 0) {

            let colorID = $(this).data('colorid');
            let variantID = $('.VariantDesktop:checked').val();
            $.ajax({
                url: 'https://www.elitekokand.uz/add-shop',
                method: 'POST',
                data: {
                    colorId: colorID,
                    variantId: variantID,
                    qty: 1,
                },
                success: function (response) {

                    window.location.href="https://www.elitekokand.uz/card-shop"
                },
                error: function () {

                }
            })

        } else {
            $(".alert-variant").addClass('d-block')
        }

    })

    function fastview(t) {
        window.addEventListener("offline", (event) => {

            $('#Prodyct-view .modal-body').html(' ')

            $('#status').html('<div class="w-100 my-5 py-5 fs-1 h-100 d-flex align-item-center justify-content-center">\n' +
                '    <i class="bi bi-wifi-off"></i>\n' +
                '</div>')

        });
        window.addEventListener("online", (event) => {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
            })
            $('#status').html('')
            $('#Prodyct-view .modal-body').html('<div class="w-100 text-centerpy-5 py-5 my-5 w-100"><div class="spinner-border" style="width: 50px;height: 50px" role="status">\n' +
                '  <span class="visually-hidden">Loading...</span>\n' +
                '</div></div>');
            $.ajax({
                url: 'https://www.elitekokand.uz/fast-view',
                method: 'POST',
                data: {
                    id: $(t).data('id'),
                    color: $(t).data('color'),
                },
                success: function (response) {

                    $('.fast-view-body').html(" ")
                    $('.fast-view-body').html(response)
                },
                error: function () {

                }
            })
        });


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        })
        $('#status').html('')
        $('#Prodyct-view .modal-body').html('<div class="w-100 text-center py-5 my-5 w-100"><div class="spinner-border" style="width: 50px;height: 50px" role="status">\n' +
            '  <span class="visually-hidden">Loading...</span>\n' +
            '</div></div>');
        $.ajax({
            url: 'https://www.elitekokand.uz/fast-view',
            method: 'POST',
            data: {
                id: $(t).data('id'),
                color: $(t).data('color'),
            },
            success: function (response) {

                $('.fast-view-body').html(" ")
                $('.fast-view-body').html(response)
            },
            error: function () {

            }
        })
        // LOADING THE AJAX MODAL


    }

    function clearfastviewbody() {
        $('.fast-view-body').html(" ")
        $('#status').html(" ")
    }


</script>
