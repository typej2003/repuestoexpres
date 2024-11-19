<div class="container-fluid">
    <style>
        .input-number-group {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-justify-content: center;
                -ms-flex-pack: center;
                    justify-content: center;
            }

            .input-number-group input[type=number]::-webkit-inner-spin-button,
            .input-number-group input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
                    appearance: none;
            }

            .input-number-group .input-group-button {
            line-height: calc(80px/2 - 5px);
            }

            .input-number-group .input-number {
            width: 80px;
            padding: 0 12px;
            vertical-align: top;
            text-align: center;
            outline: none;
            display: block;
            margin: 0;
            }

            .input-number-group .input-number,
            .input-number-group .input-number-decrement,
            .input-number-group .input-number-increment {
            border: 1px solid #cacaca;
            height: 40px;
            -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                    user-select: none;
            border-radius: 0;
            }

            .input-number-group .input-number-decrement,
            .input-number-group .input-number-increment {
            display: inline-block;
            width: 40px;
            background: #e6e6e6;
            color: #0a0a0a;
            text-align: center;
            font-weight: bold;
            cursor: pointer;
            font-size: 2rem;
            font-weight: 400;
            }

            .input-number-group .input-number-decrement {
            margin-right: 0.3rem;
            }

            .input-number-group .input-number-increment {
            margin-left: 0.3rem;
            }

            @media (max-width: 768px) {
               
            }

            @media (max-width: 990px) {
               
            }
    </style>
    <div class="row">
        <div class="col-md-3" wire:ignore>
            <!-- Sección de busqueda -->
            @livewire('components.component-search', [
                'comercioId' => 1, 
                'manufacturer_id' => $manufacturer_id,
                'modelo_id' => $modelo_id,
                'motor_id' => $motor_id,
                ])
        </div>
        <div class="col-md-9">
            <div class="row">
                <!-- Sección de categoría -->
                <div class="col-md-12">
                    @livewire('components.section-catalogo', ['comercioId' => 1, 'parametro' => $parametro])
                </div>        
            </div>

            <div class="row">
                <!-- Sección de categoría -->
                <div class="col-md-12">
                    @livewire('components.section-manufacturers', ['comercioId' => 1, 'parametro' => $parametro])
                </div>        
            </div>

            <!-- Sección de Resultados -->
            <div class="row">
                <div class="col-12">
                    <span class="h4 mx-4">Resultado de: {{$parametro}} </span>  
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @if($parametro)
                        @forelse ($products as $index => $product)
                            <div class="row  border border-1 ">
                                <div class="col-md-2 d-flex">
                                    <img class="mx-auto" style="width:150px;" src="/noimage.png" alt="">
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12 centrarFlex">
                                            <div class="centrar">
                                                <span class="h6">{{ $product->name }}</span>
                                            </div>
                                            <br>
                                            <div class="centrar">
                                                {{ $product->description }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my-3">
                                        <div class="col-md-12">
                                            <button class ="btn btn-app w-100 h-100">Detalles</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 ">
                                    <div class="row">
                                        <div class="col-md-12 d-flex">
                                            <span class="mx-auto h4">${{ $product->price1 }}</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 d-flex justify-content-between">
                                            <div class="input-group input-number-group">
                                                <div class="input-group-button">
                                                    <span class="input-number-decrement">-</span>
                                                </div>
                                                <input class="input-number" type="number" value="1" min="0" max="1000">
                                                <div class="input-group-button">
                                                    <span class="input-number-increment">+</span>
                                                </div>
                                            </div>
                                            <button class="btn btn-danger w-25 h-100"><i class="text-white fa fa-shopping-cart" aria-hidden="true"></i></button>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                            
                        @empty
                            <div class="card showProductCard mx-auto text-center">
                                <card-body>
                                    <span>No tiene Productos Disponibles</span>
                                </card-body>
                                <card-footer>                    
                                </card-footer>                    
                            </div>
                        @endforelse
                    @endif
                </div>
            </div>
            
        </div>
    </div>
    <script>
        $('.input-number-increment').click(function() {
        var $input = $(this).parents('.input-number-group').find('.input-number');
        var val = parseInt($input.val(), 10);
        $input.val(val + 1);
        });

        $('.input-number-decrement').click(function() {
        var $input = $(this).parents('.input-number-group').find('.input-number');
        var val = parseInt($input.val(), 10);
        $input.val(val - 1);
        })

    </script>
</div>
