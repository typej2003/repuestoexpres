<div>
  
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
<!doctype html>
<html lang="es">
  <head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" type="image/svg+xml" href="/icon.svg" />
    <title><?php echo e(setting('site_title')); ?> | <?php echo e(setting('site_name')); ?></title>

    <!-- Bootstrap CSS -->
	    <title>Laravel JQuery UI Autocomplete Search Example - ItSolutionStuff.com</title>
	    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
        <link rel="stylesheet" href="/css/bootstrap.min.css">

        
	    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/infiniteSlider.css">

    <script src="/js/jquery-3.6.4.min.js"></script>
    <script src="/js/slick.min.js"></script>
    <link rel="stylesheet" href="/css/slick-theme.min.css">
    <link rel="stylesheet" href="/css/slick.min.css">
    <link rel="stylesheet" href="/css/carouselOffer.css">
    <link rel="stylesheet" href="/css/showProducts.css">
    <link rel="stylesheet" href="/css/star.css">

    
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
  <body class="container-fluid">
   <!--ENCABEZADO--> 
   
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('layouts.navbar', [
                        'comercioId' => 1,
                        'manufacturer_id' => $manufacturer_id,
                        'modelo_id' => $modelo_id,
                        'motor_id' => $motor_id,
                        ])->html();
} elseif ($_instance->childHasBeenRendered('tXWr7ls')) {
    $componentId = $_instance->getRenderedChildComponentId('tXWr7ls');
    $componentTag = $_instance->getRenderedChildComponentTagName('tXWr7ls');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('tXWr7ls');
} else {
    $response = \Livewire\Livewire::mount('layouts.navbar', [
                        'comercioId' => 1,
                        'manufacturer_id' => $manufacturer_id,
                        'modelo_id' => $modelo_id,
                        'motor_id' => $motor_id,
                        ]);
    $html = $response->html();
    $_instance->logRenderedChild('tXWr7ls', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    
    <?php echo $__env->make('livewire.components.slider-principal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.marcas-productos')->html();
} elseif ($_instance->childHasBeenRendered('OPqNq4H')) {
    $componentId = $_instance->getRenderedChildComponentId('OPqNq4H');
    $componentTag = $_instance->getRenderedChildComponentTagName('OPqNq4H');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('OPqNq4H');
} else {
    $response = \Livewire\Livewire::mount('components.marcas-productos');
    $html = $response->html();
    $_instance->logRenderedChild('OPqNq4H', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <div class="my-2"></div>    
    <section class="">
        <div class="my-2"></div>
        
        <?php if($words == ''): ?>
            
            <div class="row">
                <div class="col-xl-6 col-md-6 col-sm-6">
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.component-search', [
                        'comercioId' => 1,
                        'manufacturer_id' => $manufacturer_id,
                        'modelo_id' => $modelo_id,
                        'motor_id' => $motor_id,
                        ])->html();
} elseif ($_instance->childHasBeenRendered('6uHooCA')) {
    $componentId = $_instance->getRenderedChildComponentId('6uHooCA');
    $componentTag = $_instance->getRenderedChildComponentTagName('6uHooCA');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('6uHooCA');
} else {
    $response = \Livewire\Livewire::mount('components.component-search', [
                        'comercioId' => 1,
                        'manufacturer_id' => $manufacturer_id,
                        'modelo_id' => $modelo_id,
                        'motor_id' => $motor_id,
                        ]);
    $html = $response->html();
    $_instance->logRenderedChild('6uHooCA', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                </div>
                <div class="col-xl-6 col-md-6 col-sm-6">
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.carousel-offer')->html();
} elseif ($_instance->childHasBeenRendered('CVg1MVW')) {
    $componentId = $_instance->getRenderedChildComponentId('CVg1MVW');
    $componentTag = $_instance->getRenderedChildComponentTagName('CVg1MVW');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('CVg1MVW');
} else {
    $response = \Livewire\Livewire::mount('components.carousel-offer');
    $html = $response->html();
    $_instance->logRenderedChild('CVg1MVW', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                </div>
            </div>
        
            <div class="my-2"></div>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.show-products')->html();
} elseif ($_instance->childHasBeenRendered('O0yqwWp')) {
    $componentId = $_instance->getRenderedChildComponentId('O0yqwWp');
    $componentTag = $_instance->getRenderedChildComponentTagName('O0yqwWp');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('O0yqwWp');
} else {
    $response = \Livewire\Livewire::mount('components.show-products');
    $html = $response->html();
    $_instance->logRenderedChild('O0yqwWp', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php endif; ?>
        <?php if($words != '' ): ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.results-products', [
                'comercioId' => 1, 
                'parametro' => $words,
                'manufacturer_id' => $manufacturer_id,
                'modelo_id' => $modelo_id,
                'motor_id' => $motor_id,
                ])->html();
} elseif ($_instance->childHasBeenRendered('APg5zqD')) {
    $componentId = $_instance->getRenderedChildComponentId('APg5zqD');
    $componentTag = $_instance->getRenderedChildComponentTagName('APg5zqD');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('APg5zqD');
} else {
    $response = \Livewire\Livewire::mount('components.results-products', [
                'comercioId' => 1, 
                'parametro' => $words,
                'manufacturer_id' => $manufacturer_id,
                'modelo_id' => $modelo_id,
                'motor_id' => $motor_id,
                ]);
    $html = $response->html();
    $_instance->logRenderedChild('APg5zqD', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php endif; ?>
        <div class="my-5"></div>
    </section>
    
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.navigation-map')->html();
} elseif ($_instance->childHasBeenRendered('fRoKumw')) {
    $componentId = $_instance->getRenderedChildComponentId('fRoKumw');
    $componentTag = $_instance->getRenderedChildComponentTagName('fRoKumw');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('fRoKumw');
} else {
    $response = \Livewire\Livewire::mount('components.navigation-map');
    $html = $response->html();
    $_instance->logRenderedChild('fRoKumw', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('layouts.footer')->html();
} elseif ($_instance->childHasBeenRendered('2rPdLMg')) {
    $componentId = $_instance->getRenderedChildComponentId('2rPdLMg');
    $componentTag = $_instance->getRenderedChildComponentTagName('2rPdLMg');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('2rPdLMg');
} else {
    $response = \Livewire\Livewire::mount('layouts.footer');
    $html = $response->html();
    $_instance->logRenderedChild('2rPdLMg', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->
    
    
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
                <div class="col-lg-12 d-flex">
                    <img class="img_logo mx-auto" src="./img/logo_repuestos.png" alt="">
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
                                    <button type="submit" class="btn btn-app w-100 mx-auto">Iniciar Sesión</button>
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
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
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
                                <select class="form-control inputForm inputType" name="" id="identificationNacR" placeholder="Tipo">
                                    <option value="J">J-</option>
                                    <option value="E">E-</option>
                                    <option value="G">G-</option>
                                    <option value="P">P-</option>
                                    <option value="V" selected>V-</option>
                                </select>
                            </div>
                            <div class="col-xs-6 col-md-8 col=sm-8 col-8">
                                <label for="documento">Documento</label>
                                <input type="text" id="identificationNumberR" class="form-control inputForm" placeholder="Documento">
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
                        <label for="documento">Teléfono </label>        
                        <div class="row mx-auto">
                            <div class="col-xs-6 col-md-5 col-sm-4 col-4">
                                <select class="form-control" name="cellphonecode" id="cellphonecode">
                                    <option value="0">Seleccione</option>
                                    <option value="0412">0412</option>
                                    <option value="0414">0414</option>
                                    <option value="0424">0424</option>
                                    <option value="0416">0416</option>
                                    <option value="0426">0426</option>
                                </select>
                            </div>
                            <div class="col-xs-6 col-md-7 col-sm-8 col-8">
                                <input type="text" class="form-control" name="cellphone" id="cellphone">
                            </div>
                        </div>                
                    </div>
                    
                    <div class="form-group d-flex">
                                <button type="submit" class="btn btn-app w-100 mx-auto">Unete Ya</button>
                        
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


<script src="/js/app.js"></script>
<script src="/js/backend.js"></script>
<?php echo $__env->yieldPushContent('js'); ?>
<?php echo $__env->yieldPushContent('before-livewire-scripts'); ?>
<?php echo \Livewire\Livewire::scripts(); ?>

<?php echo $__env->yieldPushContent('after-livewire-scripts'); ?>

<?php echo $__env->yieldPushContent('alpine-plugins'); ?>
<!-- Alpine Core -->
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" /> -->

<script src="/js/bootstrap.bundle.min.js"></script>

<script src="/js/jquery-3.6.4.min.js"></script>

        <?php /**PATH C:\Users\Personal\Documents\Proyectos\github\repuestoexpres\resources\views/welcome.blade.php ENDPATH**/ ?>