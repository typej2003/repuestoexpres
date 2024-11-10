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
                                            <?php $valoracion = $product->getvaloracion(0, $product->id)['ca_valoracion']; ?>
                                            <?php $class = $product->valoracionClass($valoracion); ?>
                                            <br>
                                                     
                                            <div class="cardStar" product="<?php echo e($product->id); ?>" wire:ignore>
                                                <?php for($i = 1; $i <=5; $i++): ?>
                                                    <?php if($valoracion >= $i): ?>
                                                        <span wire:click.prevent="valorar(0, <?php echo e($product->id); ?>, <?php echo e($i); ?>)" product="<?php echo e($product->id); ?>" star = "<?php echo e($i); ?>" class="star <?php echo e($class); ?>">★</span>
                                                    <?php else: ?>
                                                        <span wire:click.prevent="valorar(0, <?php echo e($product->id); ?>, <?php echo e($i); ?>)" product="<?php echo e($product->id); ?>" star = "<?php echo e($i); ?>" class="star">★</span>
                                                    <?php endif; ?>
                                                <?php endfor; ?>
                                                <h5 class="output" output="show<?php echo e($product->id); ?>">
                                                    Puntuación: <?php echo e($valoracion); ?>/5
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
    <div class="modal fade" id="valoracionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form autocomplete="off" wire:submit.prevent="registrarValoracion">
                <div class="modal-header">
                    <h5>Valore el producto</h5>
                </div>

                <div class="modal-body">
                    <div class="form-control">
                        <?php $valoracion = 5; ?>
                        <?php $class = 'star'; ?>
                        <br>                                    
                        <div class="cardStar" wire:ignore>
                            <?php for($i = 1; $i <=5; $i++): ?>
                                <?php if($valoracion >= $i): ?>
                                    <span wire:click.prevent="valorar1( <?php echo e($i); ?> )" star = "<?php echo e($i); ?>" class="starV <?php echo e($class); ?>" product="<?php echo e($state['product_id']); ?>">★</span>
                                <?php else: ?>
                                    <span wire:click.prevent="valorar1( <?php echo e($i); ?>)" product="<?php echo e($state['product_id']); ?>" star = "<?php echo e($i); ?>" class="starV">★</span>
                                <?php endif; ?>
                            <?php endfor; ?>
                            <h5 class="output" output="<?php echo e($state['product_id']); ?>">
                                Puntuación: <?php echo e($valoracion); ?>/5
                            </h5>
                        </div>
                    </div>
                    <div class="form-control">
                        <label for="comment"></label>
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
                    
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times mr-1"></i> Cancelar</button>
                    <button type="submit" class="btn btn-app">Enviar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
<div class="modal fade" id="loginModalShow" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
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
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 titulo c-a text-center h2 pt-3">Ingresa a tu RepuestoExpress</div>
                        <p class="text-center textoreg">¿Todavía no te has registrado? <span><a href="#" class="c-n">Crea tu cuenta Aquí</a></span></p>
                    </div>
            
                    <form action="<?php echo e(route('login')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                      <div class="form-group">
                        <div class="row mx-auto">
                            <div class="col-xs-6 col-md-4 col-sm-4 col-4">
                                <label for="tipodocumento">Tipo </label>
                                <select class="form-control inputForm inputType" name="" id="identificationNacW" placeholder="Tipo">
                                    <option value="J">J-</option>
                                    <option value="E">E-</option>
                                    <option value="G">G-</option>
                                    <option value="P">P-</option>
                                    <option value="V" selected>V-</option>
                                </select>
                            </div>
                            <div class="col-xs-6 col-md-8 col=sm-8 col-8">
                                <label for="documento">Documento</label>
                                <input type="text" id="identificationNumberW" class="form-control inputForm" placeholder="Documento">
                            </div>
                        </div>
                        
                    </div>
            
                        <div class="form-group">
                            <div class="row mx-auto" >
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <label for="email">Correo Electrónico</label>
                                    <input type="email" name="email" class="form-control inputForm" placeholder="Correo Electrónico" id="emailW">
                                </div>
                            </div>
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                              <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
            
                        <div class="form-group">
                            <div class="row mx-auto">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <label for="password">Contraseña</label>
                                    <input type="password" name="password" id="password-fieldW" class="form-control inputForm" placeholder="Contraseña" value="12345678"/>
                                </div>
                            </div>                
                        </div>
                        
                        <div class="form-group">
                            <div class="row mx-auto my-3">
                                <div class="col-xs-12 col-sm-12 col-md-12 d-flex">
                                    <button type="submit" class="btn btn-app w-100 mx-auto">IIniciar Sesión</button>
                                </div>
                            </div>                
                        </div>
                        <p class="text-center c-a texto"><a href="#">¿Olvidé mi contraseña?</a></p>
                        
                    </form>
                </div>
            </div>

        </div>        
      </div>

      <div class="modal-footer" style="background-color: #eb6c0e;">
        Contactar a soporte si no puedes iniciar sesión
      </div>
    </div>
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
            location.reload()
        })
    </script>
    <script src="/js/star.js"></script>

    <script>
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

    </script>

</div><?php /**PATH C:\Users\Personal\Documents\Proyectos\github\repuestoexpres\resources\views/livewire/components/show-products.blade.php ENDPATH**/ ?>