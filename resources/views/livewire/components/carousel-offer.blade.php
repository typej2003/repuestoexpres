<div>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/jquery-3.6.4.min.js"></script>
    <script src="/js/slick.min.js"></script>
    <link rel="stylesheet" href="/css/slick-theme.min.css">
    <link rel="stylesheet" href="/css/slick.min.css">
    <link rel="stylesheet" href="/css/carouselOffer.css">
    <style>
        .slider{
            width: 80%!important;
        }

        .slick-prev:before,
        .slick-next:before {
            color: black!important;
        }
    </style>  

    <div class="container-fluid carouselOffer">
        <div class="row negrita">
            <div class="col-12">
            <img class="mx-1" width="45px" src="/img/icon-sales.png" alt=""><span class="h3 text-dark">Ofertas</span>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <span class="h4 text-white mx-4">Mira y aprovecha estos descuentos</span>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <section class="regular slider slider-oferta">
                    @forelse ($offers as $index => $offer)
                        <div>
                            <div class="card showProductCard mx-auto text-center">
                                <card-body>
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <img src="/img/products/aceite.png" alt="">
                                        </div>
                                    </div>
                                    <div class="row">
                                    <div class="negrita textProductOffer" style="margin-left: 10px;">{{$offer->name}}</div>
                                        <div class="textProductOffer text-decoration-line-through">Precio: USD. {{ $offer->price1 }}</div>
                                        <div class="textProductOffer">Promoción: USD. {{ $offer->price_offer }}</div>
                                        <div style="display: flex; flex-direction: row;">
                                            <button class="btn btn-sale">Comprar ahora</button>
                                            <div>
                                                <ul class="text-center starRating">
                                                    <li class="star"><i class="fas fa-star"></i></li>
                                                    <li class="star"><i class="fas fa-star"></i></li>
                                                    <li class="star"><i class="fas fa-star"></i></li>
                                                    <li class="star"><i class="fas fa-star"></i></li>
                                                    <li class="star"><i class="fas fa-star"></i></li>
                                                </ul>
                                                <div class="rating text-center">Rated</div>
                                            </div>
                                        </div>
                                        <div class="textProductOffer" style="color: blue;">Envío Gratis</div>
                                    </div>
                                </card-body>
                                <card-footer>
                                    <span class="ml-3">Tienda: Auto Repuestos Fred</span>
                                </card-footer>                    
                            </div>
                        </div>
                    @empty
                        <div class="card showProductCard mx-auto text-center">
                            <card-body>
                                <span>No tiene Ofertas Disponibles</span>
                            </card-body>
                            <card-footer>                    
                            </card-footer>                    
                        </div>
                    @endforelse
                </section>
                
            </div>
        </div>

        <script>
            function loadSlider(){
                $(".slider-oferta").slick({
                dots: true,
                infinite: true,
                slidesToShow: findSlides(),
                slidesToScroll: 3,
                autoplay: true,
                });
            }
            
            loadSlider()

            function findSlides()
            {
                var ancho = window.innerWidth;
                var alto = window.innerHeight;

                if (window.innerWidth < 1024) 
                    return 1
                else 
                if (window.innerWidth < 1280) 
                    return 2
                else 
                    return 3
            }

            window.addEventListener('resize', () => {
                location.reload()
            })
        </script>
    </div>
</div>


<!-- <section class="regular slider slider-oferta">
    <div>
        <div class="card showProductCard mx-auto text-center">
            <card-body>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="/img/products/aceite.png" alt="">
                    </div>
                </div>
                <div class="row">
                <div class="negrita textProductOffer" style="margin-left: 10px;">Aceite Mineral 15w40 Ultralub Api Sn</div>
                    <div class="textProductOffer">Precio: USD. 9.48</div>
                    <div class="textProductOffer">Promoción: USD. 8.00</div>
                    <div style="display: flex; flex-direction: row;">
                        <button class="btn btn-sale">Comprar ahora</button>
                        <div>
                            <ul class="text-center starRating">
                                <li class="star"><i class="fas fa-star"></i></li>
                                <li class="star"><i class="fas fa-star"></i></li>
                                <li class="star"><i class="fas fa-star"></i></li>
                                <li class="star"><i class="fas fa-star"></i></li>
                                <li class="star"><i class="fas fa-star"></i></li>
                            </ul>
                            <div class="rating text-center">Rated</div>
                        </div>
                    </div>
                    <div class="textProductOffer" style="color: blue;">Envío Gratis</div>
                </div>
            </card-body>
            <card-footer>
                <span class="ml-3">Tienda: Auto Repuestos Fred</span>
            </card-footer>                    
        </div>
    </div>
    <div>
        <div class="card showProductCard mx-auto text-center">
            <card-body>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="/img/products/aceite.png" alt="">
                    </div>
                </div>
                <div class="row">
                <div class="negrita textProductOffer" style="margin-left: 10px;">Aceite Mineral 15w40 Ultralub Api Sn</div>
                    <div class="textProductOffer">Precio: USD. 9.48</div>
                    <div class="textProductOffer">Promoción: USD. 8.00</div>
                    <div style="display: flex; flex-direction: row;">
                        <button class="btn btn-sale">Comprar ahora</button>
                        <div>
                            <ul class="text-center starRating">
                                <li class="star"><i class="fas fa-star"></i></li>
                                <li class="star"><i class="fas fa-star"></i></li>
                                <li class="star"><i class="fas fa-star"></i></li>
                                <li class="star"><i class="fas fa-star"></i></li>
                                <li class="star"><i class="fas fa-star"></i></li>
                            </ul>
                            <div class="rating text-center">Rated</div>
                        </div>
                    </div>
                    <div class="textProductOffer" style="color: blue;">Envío Gratis</div>
                </div>
            </card-body>
            <card-footer>
                <span class="ml-3">Tienda: Auto Repuestos Fred</span>
            </card-footer>                    
        </div>
    </div>
    <div>
        <div class="card showProductCard mx-auto text-center">
            <card-body>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="/img/products/aceite.png" alt="">
                    </div>
                </div>
                <div class="row">
                <div class="negrita textProductOffer" style="margin-left: 10px;">Aceite Mineral 15w40 Ultralub Api Sn</div>
                    <div class="textProductOffer">Precio: USD. 9.48</div>
                    <div class="textProductOffer">Promoción: USD. 8.00</div>
                    <div style="display: flex; flex-direction: row;">
                        <button class="btn btn-sale">Comprar ahora</button>
                        <div>
                            <ul class="text-center starRating">
                                <li class="star"><i class="fas fa-star"></i></li>
                                <li class="star"><i class="fas fa-star"></i></li>
                                <li class="star"><i class="fas fa-star"></i></li>
                                <li class="star"><i class="fas fa-star"></i></li>
                                <li class="star"><i class="fas fa-star"></i></li>
                            </ul>
                            <div class="rating text-center">Rated</div>
                        </div>
                    </div>
                    <div class="textProductOffer" style="color: blue;">Envío Gratis</div>
                </div>
            </card-body>
            <card-footer>
                <span class="ml-3">Tienda: Auto Repuestos Fred</span>
            </card-footer>                    
        </div>
    </div>
    <div>
        <div class="card showProductCard mx-auto text-center">
            <card-body>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="/img/products/aceite.png" alt="">
                    </div>
                </div>
                <div class="row">
                <div class="negrita textProductOffer" style="margin-left: 10px;">Aceite Mineral 15w40 Ultralub Api Sn</div>
                    <div class="textProductOffer">Precio: USD. 9.48</div>
                    <div class="textProductOffer">Promoción: USD. 8.00</div>
                    <div style="display: flex; flex-direction: row;">
                        <button class="btn btn-sale">Comprar ahora</button>
                        <div>
                            <ul class="text-center starRating">
                                <li class="star"><i class="fas fa-star"></i></li>
                                <li class="star"><i class="fas fa-star"></i></li>
                                <li class="star"><i class="fas fa-star"></i></li>
                                <li class="star"><i class="fas fa-star"></i></li>
                                <li class="star"><i class="fas fa-star"></i></li>
                            </ul>
                            <div class="rating text-center">Rated</div>
                        </div>
                    </div>
                    <div class="textProductOffer" style="color: blue;">Envío Gratis</div>
                </div>
            </card-body>
            <card-footer>
                <span class="ml-3">Tienda: Auto Repuestos Fred</span>
            </card-footer>                    
        </div>
    </div>
    <div>
        <div class="card showProductCard mx-auto text-center">
            <card-body>
                <div class="row">
                    <div class="col-md-12">
                        <img class="" src="/img/products/aceite.png" alt="">
                    </div>
                </div>
                <div class="row">
                <div class="negrita " style="margin-left: 10px;">Aceite Mineral 15w40 Ultralub Api Sn</div>
                    <div class="">Precio: USD. 9.48</div>
                    <div class="">Promoción: USD. 8.00</div>
                    <div style="display: flex; flex-direction: row;">
                        <button class="btn btn-sale">Comprar ahora</button>
                        <div>
                            <ul class="text-center starRating">
                                <li class="star"><i class="fas fa-star"></i></li>
                                <li class="star"><i class="fas fa-star"></i></li>
                                <li class="star"><i class="fas fa-star"></i></li>
                                <li class="star"><i class="fas fa-star"></i></li>
                                <li class="star"><i class="fas fa-star"></i></li>
                            </ul>
                            <div class="rating text-center">Rated</div>
                        </div>
                    </div>
                    <div class="textProductOffer" style="color: blue;">Envío Gratis</div>
                </div>
            </card-body>
            <card-footer>
                <span class="ml-3">Tienda: Auto Repuestos Fred</span>
            </card-footer>                    
        </div>
    </div>
</section>   -->