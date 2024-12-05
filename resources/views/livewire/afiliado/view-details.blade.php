<div class="d-flex">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style-welcome.css">
    <script src="/js/jquery-3.6.4.min.js"></script>
    <script src="/js/slick.min.js"></script>
    <link rel="stylesheet" href="/css/slick-theme.min.css">
    <link rel="stylesheet" href="/css/slick.min.css">
    <link rel="stylesheet" href="/css/showProducts.css">
    <link rel="stylesheet" href="/css/star.css">
    @stack('styles')
    <livewire:styles />
    <div class="card mx-auto my-5 shadow" style="width: 80%" >
        <div class="row">
            <div class="col-md-12">
                <img style="width:100%; height: 75px;" src="/img/banner_repuestoexpres.png" alt="">
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-sm-6">
                
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                    <li class="breadcrumb-item active"></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row mb-2">
            <div class="col-sm-6">
                <img style="width:100%; height: 100%;" src="{{ $product->avatar_url }}" alt="">
            </div><!-- /.col -->
            <div class="col-sm-6">
                <div class="row">
                    {{ $product->name}}
                </div>
                <div class="row d-flex justify-content-between">
                    <div>Ver mas los productos de<span class="mx-1"><a href="">{{ $product->comercio->name}}</a></span></div>
                </div>
                <div class="row">
                    <span>$ {{ $product->price1 }}</span>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group input-number-group" style="margin-left: 0px !important; padding:0 !important;">
                            <div class="input-group-button">
                                <span class="input-number-decrement">-</span>
                            </div>
                            <input name="quantity" class="input-number" type="number" value="1" min="0" max="1000">
                            <div class="input-group-button">
                                <span class="input-number-increment">+</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-danger  h-75"><i class="text-white fa fa-shopping-cart" aria-hidden="true"></i></button>
                    </div>
                    <div class="col-md-3">
                        <button class="btn h-75  border border-secondary"><i class="fa fa-solid fa-heart"></i></button>                        
                    </div>
                </div>
                <div class="row">
                    <span>Disponibilidad: </span><span class="mx-1">{{ $product->stock }}</span>
                </div>
                <div class="row d-flex justify-content-start">
                    <div style="width: auto;"><img style="width:60px" src="/img/envio_auto.png" alt=""><span>Envío nacional</span></div>
                    <div style="width: auto;"><img style="width:60px" src="/img/envio_moto.png" alt=""><span>Delivery</span></div>
                    <div style="width: auto;"><img style="width:60px" src="/img/envio_pickup.png" alt=""><span>Pickup</span></div>
                </div>
                <div class="row">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="headingOne">
                                <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Información del producto
                                </a>
                            </h4>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="headingTwo">
                                <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Especificaciones del producto
                                </a>
                            </h4>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="headingThree">
                                <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Información de tienda
                                </a>
                            </h4>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->

        <script src="/js/bootstrap.bundle.min.js"></script>
    </div>
</div>
<div class="row my-2">
        <div class="col-md-12">
            @livewire('components.show-recommended', [
                    'comercioId' => 1, 
                    'parametro' => $words='',
                    'manufacturer_id' => $manufacturer_id='',
                    'modelo_id' => $modelo_id='',
                    'motor_id' => $motor_id='',
                    ] )
        </div>
    </div>
