<div>
    <script src="/js/jquery-3.6.4.min.js"></script>
    <script src="/js/slick.min.js"></script>
    <link rel="stylesheet" href="/css/slick-theme.min.css">
    <link rel="stylesheet" href="/css/slick.min.css">
    <link rel="stylesheet" href="/css/showProducts.css">
    <link rel="stylesheet" href="/css/star.css">
    <style>
        /* .slider{
            width: 90%!important;
        } */
        /* * {
      box-sizing: border-box;
    } */

    .slider {
        /*width: 50%;*/
        width: 100%;
        margin: 10px auto!important; */        
        /* height: 300px; */
    }

    .slick-slide {
      margin: 0px 10px; 
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
        /* background-image: url('/img/circle-right-regular.svg'); */
        z-index: 1000;
    }

    .slick-prev.slick-arrow {
        border: 1px solid black;
        border-radius: 50px;
        width: 35px;
        height: 35px;
        display: block;
        /* background-image: url('/img/circle-left-regular.svg'); */
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
            <section class="regular slider slider-products" wire:ignore>
                <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div>
                        <div class="card showProductCard mx-auto text-center mx-2" wire:ignore>
                            <div class="card-body">
                                <div class="row">
                                    <div class="">
                                        <img class="mx-auto" src="<?php echo e($product->avatar_url); ?>" alt="">
                                    </div>
                                </div>
                                <div class="row text-left">
                                    <div class="negrita"><?php echo e($product->name); ?></div>
                                        <?php if($product->on_offer): ?>
                                            <div class="text-decoration-line-through">Precio: <?php echo e($currencyValue); ?>. <?php echo e($product->getPrice1()); ?></div>
                                            <div class="">Promoción: <?php echo e($currencyValue); ?>. <?php echo e($product->getPrice_offer()); ?></div>
                                        <?php else: ?>
                                            <div class="">Precio: <?php echo e($currencyValue); ?>. <?php echo e($product->getPrice1()); ?></div>
                                        <?php endif; ?>
                                        <div style="display: flex; flex-direction: row;">
                                            <a class="btn btn-sale text-center">Comprar ahora</a>
                                            <br>                                                     
                                            <div class="cardStar" product="<?php echo e($product->id); ?>" wire:ignore>
                                                <?php for($i = 1; $i <=5; $i++): ?>
                                                    <?php if($product->valoracionProduct->ca_valoracion >= $i): ?>
                                                        <span wire:click.prevent="valorar(<?php echo e($product->id); ?>, <?php echo e($product->valoracionProduct->ca_valoracion); ?>, '<?php echo e($product->valoracionProduct->class); ?>')" product="<?php echo e($product->id); ?>" star = "<?php echo e($i); ?>" class="star <?php echo e($product->valoracionProduct->class); ?>">★</span>
                                                    <?php else: ?>
                                                        <span wire:click.prevent="valorar(<?php echo e($product->id); ?>, <?php echo e($product->valoracionProduct->ca_valoracion); ?>, '<?php echo e($product->valoracionProduct->class); ?>')" product="<?php echo e($product->id); ?>" star = "<?php echo e($i); ?>" class="star">★</span>
                                                    <?php endif; ?>
                                                <?php endfor; ?>
                                                <h5 class="output" output="show<?php echo e($product->id); ?>">
                                                    Puntuación: <?php echo e($product->valoracionProduct->ca_valoracion); ?>/5
                                                </h5>
                                            </div>
                                        </div>
                                </div>
                                <?php if($product->in_envio_gratis): ?>
                                <div class="text-left" style="color: blue;">Envío Gratis</div>
                                <?php endif; ?>
                            </div>
                            <div class="card-footer">
                                <span class="">Tienda: Auto Repuestos Fred</span>
                            </div>
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

    <!-- Modal -->

    
    <!-- Modal -->
<div class="modal fade" id="valoracionModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
  <div class="modal-dialog">
        <form autocomplete="off" wire:submit.prevent="registrarValoracion">
        <div class="modal-content modalFondo">
            <div class="modal-header" style="background-color: #f8f8f8;">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <section class="banner">
                    <div class="row">
                        <div class="col-lg-12">
                            <img class="img_logo" src="./img/logo_repuestos.png" alt="">
                        </div>
                    </div>
                </section>
                <div class="container-fluid d-flex flex-row">
                    <div class="card  mx-auto" style="width: 32rem;">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name">product_id</label>
                                <input type="text" wire:model.defer="state.product_id" class="form-control" id="product_id" aria-describedby="nameHelp" placeholder="Enter full name">
                            </div>
                            <div class="form-group my-2">
                                <div class="cardStar cardStarV" wire:ignore >
                                    <span wire:click.prevent="valorar1(1)" star = "1" class= "starV <?php echo e(($state['ca_valoracion'] >= 1)? $state['class']:''); ?> " product="<?php echo e($state['product_id']); ?>">★</span>
                                    <span wire:click.prevent="valorar1(2)" star = "2" class= "starV <?php echo e(($state['ca_valoracion'] >= 2)? $state['class']:''); ?> " product="<?php echo e($state['product_id']); ?>">★</span>
                                    <span wire:click.prevent="valorar1(3)" star = "3" class= "starV <?php echo e(($state['ca_valoracion'] >= 3)? $state['class']:''); ?> " product="<?php echo e($state['product_id']); ?>">★</span>
                                    <span wire:click.prevent="valorar1(4)" star = "4" class= "starV <?php echo e(($state['ca_valoracion'] >= 4)? $state['class']:''); ?> " product="<?php echo e($state['product_id']); ?>">★</span>
                                    <span wire:click.prevent="valorar1(5)" star = "5" class= "starV <?php echo e(($state['ca_valoracion'] >= 5)? $state['class']:''); ?> " product="<?php echo e($state['product_id']); ?>">★</span>
                                    <h5 class="output" output="<?php echo e($state['product_id']); ?>">
                                        Puntuación: <?php echo e($state['ca_valoracion']); ?>/5
                                    </h5>
                                </div>
                            
                            </div>
                            <div class="form-group">
                                <label for="comment">ca_valoracion</label>
                                <input type="text" wire:model.defer="state.ca_valoracion" autofocus class="form-control <?php $__errorArgs = ['ca_valoracion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="ca_valoracion">
                                <?php $__errorArgs = ['ca_valoracion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback">
                                    <?php echo e($message); ?>

                                </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="form-group">
                                <label for="comment">Comentario</label>
                                <input type="text" wire:model.defer="state.comment" autofocus class="form-control <?php $__errorArgs = ['comment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="comment">
                                <?php $__errorArgs = ['comment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback">
                                    <?php echo e($message); ?>

                                </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="form-group">
                                <label for="class">Class</label>
                                <input type="text" wire:model.defer="state.class" autofocus class="form-control <?php $__errorArgs = ['class'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="class">
                                <?php $__errorArgs = ['class'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback">
                                    <?php echo e($message); ?>

                                </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                    </div>

                </div>        
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close"> Cancelar</button>
                <button type="submit" class="btn-app"><i class="fa fa-save mr-1"></i>
                    <span>Guardar Cambios</span>
                </button>
            </div>
        </div>
        </form>
    </div>
</div>

    <script>
        function loadSlider(){
            $(".slider-products").slick({
            dots: true,
            infinite: true,
            slidesToShow: findSlides(),
            slidesToScroll: findSlides(),
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
            //location.reload()
        })
    </script>
    <script src="/js/star.js"></script>

    <script>
        window.onpageshow = function() {
            window.addEventListener('show-valoracionModal', function (event) {
                $('#valoracionModal').modal('show');
            });

            window.addEventListener('hide-valoracionModal', function (event) {
                $('#valoracionModal').modal('hide');
            });

            window.addEventListener('show-loginModalShow', function (event) {
                $('#loginModalShow').modal('show');
            });

            window.addEventListener('hide-loginModalShow', function (event) {
                $('#loginModalShow').modal('hide');
            });

            $('#valoracionModal').on('show.bs.modal', function(){
                
            });
        }
    </script>

</div><?php /**PATH C:\Users\Personal\Documents\Proyectos\github\repuestoexpres\resources\views/livewire/components/show-products.blade.php ENDPATH**/ ?>