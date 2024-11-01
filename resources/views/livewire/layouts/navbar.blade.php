<div>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Menu Lateral</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" /> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    
    <link rel="stylesheet" href="/css/navbar.css">

  </head>
  <style>
    
    .img-logo {
        width: 300px!important;
    }
    nav,
    .offcanvas {
      background-color: #1e293b;
    }
    .navbar-toggler {
      border: none;
    }    
    
    .offcanvas {
        display: none !important;
    }

    .menuNormal {
        display: block!important;
    }

    .menuCategories {
        display: block!important;
    }

    .footer {
        display: block!important;
    }
    
    @media (max-width: 768px) {
        .offcanvas {
            display: block!important;
        }
        .menuNormal {
            display: none!important;
        }
        .menuCategories {
            display: none!important;
        }
      .navbar-nav > li:hover {
        background-color: #0dcaf0;
      }
    }
  </style>
  <body>
    <!-- MENU START  -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <!-- NAV CONTAINER START -->
      <div class="container-fluid">
        <a href="/" class="navbar-brand text-info fw-semibold fs-4">
            <img class="img-logo" src="/img/logo_repuestos.png" alt=""> 
        </a>

        <!-- NAV BUTTON  -->
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#menuLateral">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- OFFCANVAS MAIN CONTAINER START -->
        <section class="offcanvas offcanvas-start" id="menuLateral" tabindex="-1">
          <div class="offcanvas-header" data-bs-theme="dark">
            <h5 class="offcanvas-title text-info">REPUESTO EXPRES</h5>
            <button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="offcanvas" ></button>
          </div>
          <!-- OFF CANVAS MENU LINKS  START-->
          <div class="offcanvas-body d-flex flex-column justify-content-between px-0 " >
            <ul class="navbar-nav fs-5 justify-content-evenly">
              <li class="nav-item p-3 py-md-1">
                <a href="" class="nav-link">INICIO RESPONSIVE</a>
              </li>
              <li class="nav-item p-3 py-md-1">
                <a href="" class="nav-link">PROJECTS</a>
              </li>
              <li class="nav-item p-3 py-md-1">
                <a href="" class="nav-link">ABOUT</a>
              </li>
              <li class="nav-item p-3 py-md-1">
                <a href="" class="nav-link">CONTACT</a>
              </li>
            </ul>
            <!-- enlaces redes sociales -->

            <div class="d-lg-none align-self-center py-3">
              <a href=""><i class="bi bi-twitter px-2 text-info fs-2"></i></a>
              <a href=""><i class="bi bi-facebook px-2 text-info fs-2"></i></a>
              <a href=""><i class="bi bi-github px-2 text-info fs-2"></i></a>
              <a href=""><i class="bi bi-whatsapp px-2 text-info fs-2"></i></a>
            </div>
          </div>
        </section>
        <!-- OFFCANVAS MAIN CONTAINER END  -->
        <div class="row w-100">
            <div class="col-xl-12">
        
                <!-- CONTAINER MENU PRINCIPAL y ACCESO -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="row menuNormal w-100" id="menuNormal" tabindex="-1">
                        <!-- OFF CANVAS MENU LINKS  START-->
                        <div class="d-flex flex-row justify-content-between px-0 " >
                            <ul class="mx-3 w-100 navbar-nav fs-5 justify-content-start">
                                <li class="nav-item p-3 py-md-1">
                                    <form class="d-flex">
                                        <input style="width: 350px;" class="form-control me-4 input-search" type="search" placeholder="Buscar" aria-label="Search">
                                        <button class="btn btn-outline-success input-form" type="submit">Buscar</button>
                                    </form>
                                </li>
                            </ul>
                            <ul class="navbar-nav fs-5 justify-content-evenly">
                            <li class="nav-item p-3 py-md-1">
                                <a href="" class="nav-link">INICIO</a>
                            </li>
                            <li class="nav-item p-3 py-md-1">
                                <a href="" class="nav-link">PROJECTS</a>
                            </li>
                            <li class="nav-item p-3 py-md-1">
                                <a href="" class="nav-link">ABOUT</a>
                            </li>
                            @auth
                            <li class="nav-item p-3 py-md-1">
                            <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                        <a class="nav-link active dropdown-toggle titulo" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="ml-1" x-ref="username">{{ auth()->user()->name }}</span>
                                        </a>
                                        <div class="dropdown-menu p-4" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('admin.profile.edit') }}" x-ref="profileLink">Perfil</a>
                                            <a class="dropdown-item" href="{{ route('admin.dashboard') }}" x-ref="profileLink">Escritorio</a>
                                            <a class="dropdown-item" href="{{ route('admin.profile.edit') }}" x-ref="changePasswordLink">Cambiar Contraseña</a>
                                            <a class="dropdown-item" href="{{ route('admin.settings') }}">Configuración</a>
                                            <div class="dropdown-divider"></div>
                                            <form method="POST" action="{{ route('logout') }}">
                                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Salir</a>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            @endauth
                                
                            @guest
                            <li class="nav-item p-3 py-md-1">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item dropdown" style="position: relative!important; z-index: 9001!important;">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="/img/icon_miperfil.png" id="profileImage" class="img-circle elevation-1" alt="User Image" style="height: 30px; width: 30px;">
                                            <span class="ml-1" x-ref="username">Perfil</span>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
                                            <div class="d-flex justify-content-between mb-2 ml-3">
                                                <img class="" src="/img/icon_soporte.png" style="width: 18px; height: 25px;">
                                                <a class="dropdown-item" href="#">Soporte en Línea</a>
                                            </div>

                                            <div class="d-flex justify-content-between mb-2 ml-3">
                                                <img src="/img/icon_registrarse.png" style="width: 18px; height: 25px;">                                        
                                                <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#registerModal" style="cursor: pointer;">Registrarse</a>
                                            </div>

                                            <div class="d-flex justify-content-between mb-2 ml-3">
                                                <img src="/img/icon_entrar.png" style="width: 18px; height: 25px;">
                                                <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#loginModal" style="cursor: pointer;">Entrar</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>  
                            @endguest
                            </ul>
                        </div>
                        </section>
                    </div>
                </div>        

                <!-- CONTAINER MENU CATEGORIA y MONEDA -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="row menuCategories w-100" id="menuCategories" tabindex="-1">
                        <!-- OFF CANVAS MENU LINKS  START-->
                        <div class="d-flex flex-row justify-content-between px-0 " >
                            <ul class="w-60 nav nav-pills nav-fill d-flex">
                                <!-- @foreach($categories as $category)
                                <li class="nav-item dropdown">            
                                    <a class="categoryMenu dropdownLink my-1 nav-link">{{$category->name}}</a>
                                    <div class="subcategoryMenu dropdown-content-link">
                                        @foreach($category->subcategories as $subcategory)
                                            <a class="subcategoryLink" href="#">{{ $subcategory->name }}</a>
                                        @endforeach
                                    </div>            
                                </li>
                                @endforeach -->

                                <!-- @foreach($categories as $category)
                                <li class="nav-item dropdown">
                                    <button class="btn btnCategoria">{{$category->name}}<i class="bx bx-chevron-down arrowCategoria"></i></button>
                                    <div class="dropdownCategoria itemCategoria">
                                        @foreach($category->subcategories as $subcategory)
                                            <a href="#create" style="">
                                                <i class="bx bx-plus-circle"></i>
                                                {{ $subcategory->name }}
                                            </a>    
                                        @endforeach                                    
                                    </div>
                                </li>
                                @endforeach -->

                                <?php $x = -1; ?>

                                @foreach($categories as $category)
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            {{$category->name}}
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            @foreach($category->subcategories as $subcategory)
                                                <?php $x += 1; ?>
                                                <li data-subcategory="{{$subcategory->name}}"><a class="dropdown-item subcategory{{$x}}" style="cursor:pointer;" data-subcategory="{{$subcategory->name}}" href="/cat/{{$subcategory->name}}">{{$subcategory->name}}</a></li>
                                                <script>
                                                    document.querySelector('.subcategory{{$x}}').addEventListener('click', function(){
                                                        console.log(this.dataset.subcategory)
                                                    })
                                                </script>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endforeach
                                
                                

                            </ul>
                            <script>
                                var valor2;
                                let currencyLink;
                            </script>
                            <!-- moneda currency  -->
                            <ul class="nav w-40 d-flex justify-content-between ms-auto" wire:ignore>
                                <li class="nav-item dropdown">
                                    <span>Moneda: </span>
                                    <div class="currency mx-1">
                                        <select class="form-control" wire:change="changeCurrency($event.target.value)">
                                            <option value="Bs" {{ ($currencyValue === 'Bs') ? 'selected' : '' }}>Bs</option>
                                            <option value="$" {{ ($currencyValue === '$') ? 'selected' : '' }}>$</option>
                                            <option value="€" {{ ($currencyValue === '€') ? 'selected' : '' }}>€</option>
                                        </select>
                                    </div>
                                    
                                </li>
                                <li class="nav-item dropdown ms-auto"><span class="nav-link">$: {{$tasacambio}} Bs.</span></li>
                                <!-- <script>
                                    let selectCurrency = document.querySelector('.selectCurrency')
                                    selectCurrency.addEventListener('change', function(e){
                                        Livewire.emit('changeCurrency', e.target.value)
                                    })
                                </script> -->
                                
                            </ul>                            
                        </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </nav>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->

    <script>
        // const dropdownBtn = document.querySelector(".btnCategoria");
        // const dropdownMenu = document.querySelector(".itemCategoria");
        // const toggleArrow = document.querySelector(".arrowCategoria");
        

        // const toggleDropdown = function () {
        // dropdownMenu.classList.toggle("show");
        // toggleArrow.classList.toggle("arrow");
        // };

        // dropdownBtn.addEventListener("click", function (e) {
        // e.stopPropagation();
        // toggleDropdown();
        // });

        // document.documentElement.addEventListener("click", function () {
        // if (dropdownMenu.classList.contains("show")) {
        //     toggleDropdown();
        // }
        // });
    
        window.addEventListener('refreshPage', event => {
            
            let message = event.detail.message

            location.reload()
        
        }) 
    </script>
    
  </body>
</html>

</div>