<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <!-- Sección de busqueda -->
            @livewire('components.component-search', ['comercioId' => 1])
        </div>
        <div class="col-md-9">
            <div class="row">
                <!-- Sección de categoría -->
                <div class="col-md-12">
                    @livewire('components.section-catalogo', ['comercioId' => 1])
                </div>        
            </div>

            <div class="row">
                <!-- Sección de categoría -->
                <div class="col-md-12">
                    @livewire('components.section-manufacturers', ['comercioId' => 1])
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
    
</div>
