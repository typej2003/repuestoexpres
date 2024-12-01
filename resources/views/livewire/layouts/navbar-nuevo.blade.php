<div>
    <style>
        .profile-menu { 
            .dropdown-menu{
                right: 0;
                left: unset;
            }
            .fa-fw{
                margin-right: 10px;
            }  
            }
            .toggle-change{
                &::after {
                border-top: 0;
                border-bottom: .3em solid;
                }
            } 
    </style>
    <div class="row">
        <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
            <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                    <div class="overlay-header">
                        <img class="logo-responsive" src="/img/logo_repuestos.png" alt="">
                        <div class="currency-responsive">
                            @livewire('components.currency')
                        </div>
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
            <div class="fixed-top">

            
            <div class="header">
                <div class="logo">
                    <a href="/"><img src="/img/logo_repuestos.png" alt=""></a>
                </div>
                <!-- The form -->
                <div class="search">
                    <form action="{{ route('search') }}" method="GET" wire:ignore>
                        <input wire:model.defer="state.manufacturer_id" type="hidden" class ="manufacturerS_id" name = "manufacturerS_id">
                        <input wire:model.defer="state.modelo_id" type="hidden" class ="modeloS_id" name = "modeloS_id">
                        <input wire:model.defer="state.motor_id" type="hidden" class ="motorS_id" name = "motorS_id">
                        <input name="words" type="text" placeholder="Buscar" style="height: 40px;">
                        <button type="submit" class="fa fa-search"></button>
                    </form>
                </div>
                <!-- Menu horizontal -->
                <ul class="menu-horizontal">
                    @auth
                        <li class="nav-item p-3 py-md-1">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item dropdown">
                                    <a class="nav-link active dropdown-toggle titulo botonera" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="ml-1" x-ref="username">{{ auth()->user()->name }}</span>
                                    </a>
                                    <div class="dropdown-menu p-4" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('admin.profile.edit') }}" x-ref="profileLink">Perfil</a>
                                        <a class="dropdown-item" href="{{ route('admin.dashboard') }}" x-ref="profileLink">Escritorio</a>
                                        <a class="dropdown-item" href="{{ route('admin.profile.edit') }}" x-ref="changePasswordLink">Cambiar Contraseña</a>
                                        <a class="dropdown-item" href="{{ route('admin.settings') }}">Configuración</a>
                                        <div class="dropdown-divider"></div>
                                        <form method="post" action="{{ route('logout') }}">
                                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Salir</a>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    @endauth
                        
                    @guest
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
                    @endguest
                    <li><div><a href=""><img src="./img/icon_heart.png" alt=""></a></div></li>
                    <li>
                        <div class="row">
                            <div class="col-md-12 mx-2">
                                <div class="dropdown-cart-drop">
                                    <a class="btn-cart-drop d-flex justify-content-between botonera">
                                        <img src="/img/icon_carrito.png" style="cursor:pointer;">
                                        <span class="text-dark">({{\Cart::getTotalQuantity()}})</span>
                                    </a>
                                    @include('livewire.carrito.cart-drop')
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                
            </div>

            <div class="menu">
                <div class="menu-left" onclick="openNav()">&#9776; <span class="wordMenu">MENÚ</span></div> 
                <div class="menu-center w-full d-flex justify-content-around">
                    @foreach($categories as $category)
                        @if($category->subcategories->count() == 0)
                            <a class="dropdown-item" style="cursor:pointer;" href="{{ route('cat', [
                                'categ' => $category->name,
                                'manufacturer_id' => $state['manufacturer_id'],
                                'modelo_id' => $state['modelo_id'],
                                'motor_id' => $state['motor_id'],
                                ]) }}">
                                {{$category->name}}
                            </a>
                        @else
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{$category->name}}
                                </a>
                                
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        @foreach($category->subcategories as $subcategory)
                                            <a class="dropdown-item" href="{{ route('cat', [
                                                                        'categ' => $subcategory->name,
                                                                        'manufacturer_id' => $state['manufacturer_id'],
                                                                        'modelo_id' => $state['modelo_id'],
                                                                        'motor_id' => $state['motor_id'],
                                                                        ]) }}">
                                                {{ $subcategory->name}}
                                            </a>
                                        @endforeach
                                    </div>
                            </div>
                        @endif
                    @endforeach
                    

                    
                            
                </div>
                <div class="button-search w-full" style="display: none; cursor: pointer;"><img src="./img/icon_buscar.png" alt=""></div>
                <div class="menu-right w-full">
                    @livewire('components.currency')
                </div>
                <div class="menu-responsive">
                    <div class="menu-responsive">
                        <!-- Menu horizontal -->
                        <img class="logo-responsive" src="/img/logo_repuestos.png" alt="">
                        <div class="button-search"><img src="/img/icon_buscar.png" alt=""></div>
                        <div><a href=""><img class="icon" src="/img/icon_miperfil.png" alt=""></a></div>
                        <div><a href=""><img class="icon" src="/img/icon_heart.png" alt=""></a></div>
                        <div><a href=""><img class="icon" src="/img/icon_carrito.png" alt=""></a></div>
                    </div>
                            
                    
                    <div class="form-group div-search">
                        <form action="{{ route('search') }}" method="GET" wire:ignore>
                            <input wire:model.defer="state.manufacturer_id" type="hidden" class ="manufacturerS_id" name = "manufacturerS_id">
                            <input wire:model.defer="state.modelo_id" type="hidden" class ="modeloS_id" name = "modeloS_id">
                            <input wire:model.defer="state.motor_id" type="hidden" class ="motorS_id" name = "motorS_id">
                            <input name="words" type="text" placeholder="Buscar" style="height: 40px;">
                            <button type="submit" class="form-control fa fa-search"></button>
                        </form>
                    </div>      
                    
                </div>
            </div>
            </div>
        </div>
    </div>
    
    <script>
        posicionarMenu();

        $(window).scroll(function() {    
            closeNav()
            // posicionarMenu();
        });

        function posicionarMenu()
        {
            var altura_del_header = $('.header').outerHeight(true);
            var altura_del_menu = $('.menu').outerHeight(true);

            if(window.innerWidth > 1070) {
                if ($(window).scrollTop() >= altura_del_header){
                    console.log('add fixed')
                    console.log($(window).scrollTop() + ' >= ' + altura_del_header)
                    $('.header').addClass('fixed');
                    $('.menu').addClass('fixed');
                    // $('.wrapper').css('margin-top', (altura_del_menu) + 'px');
                    $('.button-search').css('display', 'block');
                    $('.div-search').css('display', 'none');
                } 
                else {
                    $('.header').removeClass('fixed');
                    $('.menu').removeClass('fixed');
                    $('.wrapper').css('margin-top', '0');
                    $('.button-search').css('display', 'none');
                    $('.div-search').css('display', 'none');
                }
            }else{
                $('.header').addClass('fixed');
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
        
        // $(".input-search").blur(function(){
        //     $('.menu').css('height', '45px');
        //     $('.div-search').css('display', 'none');
        //     $('.menu').css('align-items', 'center');
        // });
    </script>

    <script>
        function openNav() {
            var altura_del_header = $('.header').outerHeight(true);
            var altura_del_menu = $('.menu').outerHeight(true);

            var ancho = window.innerWidth;
            var alto = window.innerHeight;
            if(ancho > 920){
                document.getElementById("myNav").style.width = "25%";
                
                if ($(window).scrollTop() >= 100){
                    document.getElementById("myNav").style.marginTop = 0;
                }
                else{
                    document.getElementById("myNav").style.marginTop = 100;
                }
            }else{
                document.getElementById("myNav").style.width = "75%";
            }
        
        }
        
        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        }
    </script>
    
</div>


<!-- <ul class="profile-menu list-unstyled me-auto mb-2 mb-lg-0 d-flex justify-content-around">
    @foreach($categories as $category)
        @if($category->subcategories->count() == 0)
            <li class="d-inline nav-item">
                <a class="dropdown-item" style="cursor:pointer;" href="{{ route('cat', [
                    'categ' => $category->name,
                    'manufacturer_id' => $state['manufacturer_id'],
                    'modelo_id' => $state['modelo_id'],
                    'motor_id' => $state['motor_id'],
                    ]) }}">
                    {{$category->name}}
                </a>
            </li>
        @else
            <li class="dropdown d-inline nav-item">
                <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{$category->name}}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @foreach($category->subcategories as $subcategory)
                        <li>
                            <a class="dropdown-item" style="cursor:pointer;" href="{{ route('cat', [
                            'categ' => $subcategory->name,
                            'manufacturer_id' => $state['manufacturer_id'],
                            'modelo_id' => $state['modelo_id'],
                            'motor_id' => $state['motor_id'],
                                ]) }}">
                                {{$subcategory->name}}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>
        @endif
    @endforeach
</ul>
<script>
    document.querySelectorAll('.dropdown-toggle').forEach(item => {
        item.addEventListener('click', event => {
        
            if(event.target.classList.contains('dropdown-toggle') ){
            event.target.classList.toggle('toggle-change');
            }
            else if(event.target.parentElement.classList.contains('dropdown-toggle')){
            event.target.parentElement.classList.toggle('toggle-change');
            }
        })
        });


</script> -->