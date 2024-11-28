<div>
    
    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
            <div class="overlay-header">
                <img src="./img/logo_repuestos.png" alt="">
                <div>Bs VEF</div>
            </div>

            <div class="nav-overlay">
                <div style="font-weight: bold; font-size: 1.5rem;">Cuenta</div>
                <div>Entrar</div>
                <div>Regístrate</div>
            </div>
            <hr>
            <div class="nav-overlay">
                <a href="#">About</a>
                <a href="#">Services</a>
                <a href="#">Clients</a>
                <a href="#">Contact</a>
            </div>
            
        </div>
    </div>
    <div class="header">
        <div class="logo">
            <img src="/img/logo_repuestos.png" alt="">
        </div>
        <!-- The form -->
        <div class="search">
            <form action="<?php echo e(route('search')); ?>" method="GET" wire:ignore>
                <input wire:model.defer="state.manufacturer_id" type="hidden" class ="manufacturerS_id" name = "manufacturerS_id">
                <input wire:model.defer="state.modelo_id" type="hidden" class ="modeloS_id" name = "modeloS_id">
                <input wire:model.defer="state.motor_id" type="hidden" class ="motorS_id" name = "motorS_id">
                <input name="words" type="text" placeholder="Buscar" style="height: 40px;">
                <button type="submit" class="fa fa-search"></button>
            </form>
        </div>
        <!-- Menu horizontal -->
        <ul class="menu-horizontal">
            <?php if(auth()->guard()->check()): ?>
                <li class="nav-item p-3 py-md-1">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle titulo botonera" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="ml-1" x-ref="username"><?php echo e(auth()->user()->name); ?></span>
                            </a>
                            <div class="dropdown-menu p-4" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo e(route('admin.profile.edit')); ?>" x-ref="profileLink">Perfil</a>
                                <a class="dropdown-item" href="<?php echo e(route('admin.dashboard')); ?>" x-ref="profileLink">Escritorio</a>
                                <a class="dropdown-item" href="<?php echo e(route('admin.profile.edit')); ?>" x-ref="changePasswordLink">Cambiar Contraseña</a>
                                <a class="dropdown-item" href="<?php echo e(route('admin.settings')); ?>">Configuración</a>
                                <div class="dropdown-divider"></div>
                                <form method="POST" action="<?php echo e(route('logout')); ?>">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); this.closest('form').submit();">Salir</a>
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>
            <?php endif; ?>
                
            <?php if(auth()->guard()->guest()): ?>
                <li class="nav-item">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown" style="position: relative!important; z-index: 2 !important;">                            
                            <a class="nav-link dropdown-toggle botonera" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                                
                                <img src="/img/icon_miperfil.png" id="profileImage" alt="User Image" style="">
                                <span class="ml-1" x-ref="username">Perfil</span>                                
                            </a>                            
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
                                <div class="d-flex justify-content-between mb-2 ml-3">
                                    <a class="dropdown-item" href="#">
                                        <img class="" src="/img/icon_soporte.png" style="width: 18px; height: 25px;">
                                        <span class="mx-3">Soporte en Línea</span>
                                    </a>
                                </div>

                                <div class="d-flex justify-content-between mb-2 ml-3">
                                    <a class="dropdown-item" href="/register" style="cursor:pointer;">
                                        <img src="/img/icon_registrarse.png" style="width: 18px; height: 25px;"><span class="mx-3">Registrarse</span>
                                    </a>
                                </div>

                                <div class="">                                    
                                    <a class="dropdown-item" href="/login" style="cursor: pointer;">
                                        <img src="/img/icon_entrar.png" style="width: 18px; height: 25px;"><span class="mx-3">Entrar</span>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li> 
            <?php endif; ?>
            <li><div><a href=""><img src="./img/icon_heart.png" alt=""></a></div></li>
            <li>
                <div class="row">
                    <div class="col-md-12 mx-2">
                        <div class="dropdown-cart-drop">
                            <a class="btn-cart-drop d-flex justify-content-between botonera">
                                <img src="/img/icon_carrito.png" style="cursor:pointer;">
                                <span class="text-dark">(<?php echo e(\Cart::getTotalQuantity()); ?>)</span>
                            </a>
                            <div class="dropdown-content-cart-drop">
                                    <?php echo $__env->make('livewire.carrito.cart-drop', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        
    </div>

    <div class="menu">
        <div class="menu-left" onclick="openNav()">&#9776; <span class="wordMenu">MENÚ</span></div> 
        <div class="menu-center w-full">
            Barra de menu
        </div>
        <div class="button-search w-full" style="display: none; cursor: pointer;"><img src="./img/icon_buscar.png" alt=""></div>
        <div class="menu-right w-full">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.currency')->html();
} elseif ($_instance->childHasBeenRendered('l3224789718-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l3224789718-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3224789718-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3224789718-0');
} else {
    $response = \Livewire\Livewire::mount('components.currency');
    $html = $response->html();
    $_instance->logRenderedChild('l3224789718-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
        <div class="menu-responsive">
            <!-- Menu horizontal -->
            <div><a href=""><img class="logo-responsive" src="./img/logo_repuestos.png" alt=""></a></div>
            <div class="button-search"><img src="./img/icon_buscar.png" alt=""></div>
            <div><a href=""><img src="./img/icon_miperfil.png" alt=""></a></div>
            <div><a href=""><img src="./img/icon_heart.png" alt=""></a></div>
            <div><a href=""><img src="./img/icon_carrito.png" alt=""></a></div>
            <div><a href=""><button>Regístrate</button></a></div>
        </div>

        <div class="div-search" style="background-color: grey;">
            <form action="<?php echo e(route('search')); ?>" method="GET" wire:ignore>
                <input wire:model.defer="state.manufacturer_id" type="hidden" class ="manufacturerS_id" name = "manufacturerS_id">
                <input wire:model.defer="state.modelo_id" type="hidden" class ="modeloS_id" name = "modeloS_id">
                <input wire:model.defer="state.motor_id" type="hidden" class ="motorS_id" name = "motorS_id">
                <input class="input-search" name="words" type="text" placeholder="Buscar">
                <button type="submit" class="fa fa-search"></button>
            </form>
        </div>
    </div>

    
    <script>
        posicionarMenu();

        $(window).scroll(function() {    
            posicionarMenu();
        });

        function posicionarMenu()
        {
            var altura_del_header = $('.header').outerHeight(true);
            var altura_del_menu = $('.menu').outerHeight(true);

            if(window.innerWidth > 1070) {
                if ($(window).scrollTop() >= altura_del_header/2){
                    $('.menu').addClass('fixed');
                    $('.wrapper').css('margin-top', (altura_del_menu) + 'px');
                    $('.button-search').css('display', 'block');
                    $('.div-search').css('display', 'none');
                } 
                else {
                    $('.menu').removeClass('fixed');
                    $('.wrapper').css('margin-top', '0');
                    $('.button-search').css('display', 'none');
                    $('.div-search').css('display', 'none');
                }
            }else{
                $('.menu').addClass('fixed');
                $('.wrapper').css('margin-top', (altura_del_menu) + 'px');
                $('.div-search').css('display', 'none');
            }
        }

        $('.button-search').on('click', function(){
            $('.menu').css('height', '90px');
            $('.div-search').css('display', 'block');
            $('.div-search').css('position', 'absolute');
            $('.menu').css('align-items', 'start');
            $('.input-search').focus();

        })
        
        $(".input-search").blur(function(){
            $('.menu').css('height', '45px');
            $('.div-search').css('display', 'none');
            $('.menu').css('align-items', 'center');
        });
    </script>

    <script>
        function openNav() {
            var ancho = window.innerWidth;
            var alto = window.innerHeight;
            if(ancho > 920){
                document.getElementById("myNav").style.width = "25%";
            }else{
                document.getElementById("myNav").style.width = "75%";
            }
        
        }
        
        function closeNav() {
        document.getElementById("myNav").style.width = "0%";
        }
    </script>
    
</div>
<?php /**PATH C:\Users\Personal\Documents\Proyectos\github\repuestoexpres\resources\views/livewire/layouts/navbar-nuevo.blade.php ENDPATH**/ ?>