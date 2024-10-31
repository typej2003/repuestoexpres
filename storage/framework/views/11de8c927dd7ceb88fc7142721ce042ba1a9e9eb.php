<div>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/jquery-3.6.4.min.js"></script>
    <script src="/js/slick.min.js"></script>
    <link rel="stylesheet" href="/css/slick-theme.min.css">
    <link rel="stylesheet" href="/css/slick.min.css">
    <link rel="stylesheet" href="/css/showProducts.css">
    <style>
        /* .slider{
            width: 90%!important;
        } */
        /* * {
      box-sizing: border-box;
    } */

    .slider {
        /*width: 50%;*/
        width: 90%;
        margin: 10px auto!important; */        
        /* height: 300px; */
    }

    .slick-slide {
      margin: 0px 20px; 
    }

    .slick-slide img {
      width: 80%;
      height: 200px;
    }

    .slick-prev:before,
    .slick-next:before {
      color: black;
    }

    .slick-next.slick-arrow {
        border: 1px solid black;
        border-radius: 50px;
        width: 35px;
        height: 35px;
        display: block;
        background-image: url('/img/circle-right-regular.svg');
        z-index: 1000;
    }

    .slick-prev.slick-arrow {
        border: 1px solid black;
        border-radius: 50px;
        width: 35px;
        height: 35px;
        display: block;
        background-image: url('/img/circle-left-regular.svg');
        z-index: 1000;
    }

    .slick-slide {
      transition: all ease-in-out .3s;
      /* opacity: .2; */
    }
    
    /* .slick-active {
      opacity: .5;
    }

    .slick-current {
      opacity: 1;
    } */
    </style>  
<div class="container-fluid showProductsP">
    <div class="row negrita">
        <div class="col-12">
            <img class="mx-3" width="45px" src="/img/icon-motor.png" alt=""><span class="h3 text-dark">Motor</span>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <span class="h4 text-white"></span>  
        </div>
    </div>    
    <div class="row">
        <div class="col-md-12">
            <section class="regular slider slider-products">
                <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div>
                        <div class="card showProductCard mx-auto text-center mx-2">
                            <card-body>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <img src="/img/products/aceite.png" alt="">
                                    </div>
                                </div>
                                <div class="row">
                                <div class="negrita textProductOffer" style="margin-left: 10px;"><?php echo e($product->name); ?></div>
                                    <?php if($product->on_offer): ?>
                                    <div class="textProductOffer text-decoration-line-through">Precio: USD. <?php echo e($product->price1); ?></div>
                                    <div class="textProductOffer">Promoción: USD. <?php echo e($product->price_offer); ?></div>
                                    <?php else: ?>
                                    <div class="textProductOffer">Precio: USD. <?php echo e($product->price1); ?></div>
                                    <?php endif; ?>
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
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="card showProductCard mx-auto text-center">
                        <card-body>
                            <span>No tiene Ofertas Disponibles</span>
                        </card-body>
                        <card-footer>                    
                        </card-footer>                    
                    </div>
                <?php endif; ?>
            </section>       
        </div>
    </div>
</div>

    <script>
        function loadSlider(){
            $(".slider-products").slick({
            dots: true,
            infinite: true,
            slidesToShow: findSlides(),
            slidesToScroll: 3,
            autoplay: false,
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
</div><?php /**PATH C:\Users\Personal\Documents\Proyectos\github\repuestoexpres\resources\views/livewire/components/show-products.blade.php ENDPATH**/ ?>