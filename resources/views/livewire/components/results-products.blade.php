<div class="container-fluid">
    <div class="row negrita">
        <div class="col-12">
        
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <span class="h4 mx-4">Resultado de: {{$parametro}} </span>  
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
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
        </div>
    </div>
</div>
