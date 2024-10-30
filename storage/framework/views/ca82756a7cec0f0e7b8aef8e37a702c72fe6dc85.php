<div>
  
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css" integrity="sha384-WJUUqfoMmnfkBLne5uxXj+na/c7sesSJ32gI7GfCk4zO4GthUKhSEGyvQ839BC51" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="https://kit.fontawesome.com/03cf5139f1.js"></script> -->

    <link rel="stylesheet" href="/css/style.css">
    
    <!-- <link rel="stylesheet" href="/css/modopago.css" class="rel"> -->
    <!-- <link rel="stylesheet" href="/cs/swiper-bundle.min.css"> -->
    
    <title><?php echo e(config('app.name')); ?></title>
    <style>
      
    </style>
  </head>
  <body class="">
   <!--ENCABEZADO--> 
    <?php if(!Auth::check()): ?> 
      <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('layouts.navbar')->html();
} elseif ($_instance->childHasBeenRendered('l1081249218-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l1081249218-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1081249218-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1081249218-0');
} else {
    $response = \Livewire\Livewire::mount('layouts.navbar');
    $html = $response->html();
    $_instance->logRenderedChild('l1081249218-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php endif; ?>
    <?php echo $__env->make('livewire.components.slider-principal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="my-2"></div>
    <section class="body">
        <div class="my-2"></div>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.carousel-offer')->html();
} elseif ($_instance->childHasBeenRendered('l1081249218-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l1081249218-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1081249218-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1081249218-1');
} else {
    $response = \Livewire\Livewire::mount('components.carousel-offer');
    $html = $response->html();
    $_instance->logRenderedChild('l1081249218-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <div class="my-2"></div>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.show-products')->html();
} elseif ($_instance->childHasBeenRendered('l1081249218-2')) {
    $componentId = $_instance->getRenderedChildComponentId('l1081249218-2');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1081249218-2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1081249218-2');
} else {
    $response = \Livewire\Livewire::mount('components.show-products');
    $html = $response->html();
    $_instance->logRenderedChild('l1081249218-2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </section>
    
    <?php echo $__env->make('livewire.components.navigation-map', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php if(!Auth::check()): ?> 
      <?php echo $__env->make('layouts.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->
    <script src="/js/bootstrap.bundle.min.js"></script>
    
  </body>
</html>

<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <select class="form-control inputForm inputType" name="" id="identificationNac" placeholder="Tipo">
                                    <option value="J">J-</option>
                                    <option value="E">E-</option>
                                    <option value="G">G-</option>
                                    <option value="P">P-</option>
                                    <option value="V" selected>V-</option>
                                </select>
                            </div>
                            <div class="col-xs-6 col-md-8 col=sm-8 col-8">
                                <label for="documento">Documento</label>
                                <input type="text" id="identificationNumber" class="form-control inputForm" placeholder="Documento">
                            </div>
                        </div>
                        
                    </div>
            
                        <div class="form-group">
                            <div class="row mx-auto" >
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <label for="email">Correo Electrónico</label>
                                    <input type="email" name="email" class="form-control inputForm" placeholder="Correo Electrónico" id="email">
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
                                    <input type="password" name="password" id="password-field" class="form-control inputForm" placeholder="Contraseña" value="12345678"/>
                                </div>
                            </div>                
                        </div>
                        
                        <div class="form-group">
                            <div class="row mx-auto my-3">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <button class="btn boton1 w-100">Iniciar Sesión Aquí</button>
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

<!-- Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                      <div class="col-lg-12 titulo c-a text-center h2 pt-3">Registrate a RepuestoExpres</div>
                      <p class="texto text-center">¿Ya tienes una cuenta? <span class="c-n">click Aquí</span></p>
                  </div>
        
                  <form action="<?php echo e(route('register')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <div class="row mx-auto">
                            <div class="col-xs-6 col-md-4 col-sm-4 col-4">
                                <label for="tipodocumento">Tipo </label>
                                <select class="form-control inputForm inputType" name="" id="identificationNac" placeholder="Tipo">
                                    <option value="J">J-</option>
                                    <option value="E">E-</option>
                                    <option value="G">G-</option>
                                    <option value="P">P-</option>
                                    <option value="V" selected>V-</option>
                                </select>
                            </div>
                            <div class="col-xs-6 col-md-8 col=sm-8 col-8">
                                <label for="documento">Documento</label>
                                <input type="text" id="identificationNumber" class="form-control inputForm" placeholder="Documento">
                            </div>
                        </div>
                        
                    </div>
                    <input type="hidden" name="role" value="afiliado">
                    <div class="form-group my-3">
                        <div class="row mx-auto">
                            <div class="col-xs-12 col-md-12 col-sm-12 col-12">
                                <input type="text" name="name" class="form-control inputForm" placeholder="Usuario">
                            </div>
                        </div>
                    </div>
            
                    <div class="form-group my-3">
                        <div class="row mx-auto">
                            <div class="col-xs-12 col-md-12 col-sm-12 col-12">
                                <input type="email" name="email" class="form-control inputForm" placeholder="Email">
                            </div>
                        </div>
                    </div>
                    <div class="form-group my-3">
                        <div class="row mx-auto">
                            <div class="col-xs-12 col-md-12 col-sm-12 col-12">
                                <input type="password" name="password" class="form-control inputForm" placeholder="Contraseña" value="12345678">                    
                            </div>
                        </div>
                    </div>
            
                    <div class="form-group my-3">
                        <div class="row mx-auto">
                            <div class="col-xs-12 col-md-12 col-sm-12 col-12">
                                <input type="password" name="password_confirmation" class="form-control inputForm" placeholder="Confirme la Contraseña" value="12345678">                        
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="row mx-auto my-3">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <button type="submit" class="btn boton1 w-100">Unete Ya</button>
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

</div>


<?php /**PATH C:\Users\Personal\Documents\Proyectos\repuestos\resources\views/livewire/welcome-wire.blade.php ENDPATH**/ ?>