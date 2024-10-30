<div>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                        <h1 class="m-0 text-dark">
                        @if($showEditModal)
                            <span>Editar Producto</span>
                        @else
                            <span>Crear Producto</span>
                        @endif
                    </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Escritorio</a></li>
                        <li class="breadcrumb-item active"><a href="/listProducts/{{$comercio->user_id}}">Comercios</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            @if($comercio)
            <div class="row">
                <div class="col-lg-12">
                    <div class="card w-50">
                        <div class="row">
                            <div class="col-lg-6">
                                <span>Propietario: </span>
                            </div>
                            <div class="col-lg-6">
                                <span>{{$comercio->propietario()}}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <span>Comercio: </span>
                            </div>
                            <div class="col-lg-6">
                                <span>{{$comercio->name}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="row">
                                        <div class="col-xl-6 col-md-6">
                                        <div class="form-group">
                                            <label for="name">Categoría</label>
                                            <select wire:model.defer="state.category_id" class="form-control @error('category_id') is-invalid @enderror" id="category_id" wire:change="changeCategory( $event.target.value, 0)">
                                                <option value="0">Seleccione una opción</option>
                                                @foreach($comercio->categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('category_id')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>

                                        <div class="form-group" wire:ignore>
                                            <label for="name">Subcategoría</label>
                                            <select wire:model.defer="state.subcategory_id" class="subcategory form-control @error('subcategory_id') is-invalid @enderror" id="subcategory_id" wire:ignore>
                                            </select>
                                            @error('subcategory_id')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                            <div class="form-group">
                                                <label for="code_lote">Código del Lote</label>
                                                <input type="text" wire:model.defer="state.code_lote" autofocus class="bg-success font-costo form-control @error('code_lote') is-invalid @enderror" id="code_lote">
                                                @error('code_lote')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="code">Código del Lote</label>
                                                <input type="text" wire:model.defer="state.code"  id="code" class="bg-success font-costo form-control @error('code') is-invalid @enderror" autofocus >
                                                @error('code')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="code">Código del Producto</label>
                                                <input type="text" wire:model.defer="state.code"  id="code" class="bg-success font-costo form-control @error('code') is-invalid @enderror" autofocus >
                                                @error('code')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="name">Nombre del Producto</label>
                                                <input type="text" wire:model.defer="state.name"  id="name" class="bg-success font-costo form-control @error('name') is-invalid @enderror" autofocus >
                                                @error('name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="brand_id">Marca</label>
                                                <select wire:model.defer="state.brand_id"  id="brand_id" class="bg-success font-costo form-control @error('brand_id') is-invalid @enderror" autofocus >
                                                    <option value="0">Seleccione una opción</option>
                                                    @foreach($brands as $brand)
                                                        <option value="{{$brand->id}}">{{$brand->name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('brand_id')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6">
                                            <div class="form-group">
                                                <label for="customFile">Imagen 1 del Producto</label>
                                                <div class="custom-file">
                                                    <div x-data="{ isUploading: false, progress: 5 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false; progress = 5" x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">
                                                        <input wire:model="photo" type="file" class="custom-file-input" id="customFile">
                                                        <div x-show.transition="isUploading" class="progress progress-sm mt-2 rounded">
                                                            <div class="progress-bar bg-primary progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" x-bind:style="`width: ${progress}%`">
                                                                <span class="sr-only">40% Completo (exito)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label class="custom-file-label" for="customFile">
                                                        @if ($photo)
                                                        {{ $photo->getClientOriginalName() }}
                                                        @else
                                                        Seleccione la imagen
                                                        @endif
                                                    </label>
                                                </div>

                                                @if ($photo)
                                                <img src="{{ $photo->temporaryUrl() }}" class="img d-block mt-2 w-100 rounded">
                                                @else
                                                <img src="{{ $state['avatar_url'] ?? '' }}" class="img d-block mb-2 w-100 rounded">
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="customFile">Imagen 1 del Producto</label>
                                                <div class="custom-file">
                                                    <div x-data="{ isUploading: false, progress: 5 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false; progress = 5" x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">
                                                        <input wire:model="photo" type="file" class="custom-file-input" id="customFile">
                                                        <div x-show.transition="isUploading" class="progress progress-sm mt-2 rounded">
                                                            <div class="progress-bar bg-primary progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" x-bind:style="`width: ${progress}%`">
                                                                <span class="sr-only">40% Completo (exito)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label class="custom-file-label" for="customFile">
                                                        @if ($photo)
                                                        {{ $photo->getClientOriginalName() }}
                                                        @else
                                                        Seleccione la imagen
                                                        @endif
                                                    </label>
                                                </div>

                                                @if ($photo)
                                                <img src="{{ $photo->temporaryUrl() }}" class="img d-block mt-2 w-100 rounded">
                                                @else
                                                <img src="{{ $state['avatar_url'] ?? '' }}" class="img d-block mb-2 w-100 rounded">
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="customFile">Imagen 1 del Producto</label>
                                                <div class="custom-file">
                                                    <div x-data="{ isUploading: false, progress: 5 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false; progress = 5" x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">
                                                        <input wire:model="photo" type="file" class="custom-file-input" id="customFile">
                                                        <div x-show.transition="isUploading" class="progress progress-sm mt-2 rounded">
                                                            <div class="progress-bar bg-primary progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" x-bind:style="`width: ${progress}%`">
                                                                <span class="sr-only">40% Completo (exito)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label class="custom-file-label" for="customFile">
                                                        @if ($photo)
                                                        {{ $photo->getClientOriginalName() }}
                                                        @else
                                                        Seleccione la imagen
                                                        @endif
                                                    </label>
                                                </div>

                                                @if ($photo)
                                                <img src="{{ $photo->temporaryUrl() }}" class="img d-block mt-2 w-100 rounded">
                                                @else
                                                <img src="{{ $state['avatar_url'] ?? '' }}" class="img d-block mb-2 w-100 rounded">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-end">
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

    'code_lote', <br>
        'code', <br>
        'name',<br>
        'avatar',<br>
        'brand_id', // marca<br>
        'image_path1',<br>
        'image_path2',<br>
        'image_path3',<br>
        'image_path4',<br>
        'video_path1',<br>
        'container', //envase<br>
        'details1',<br>
        'details2',    <br>    
        'description',<br>
        'price1',<br>
        'price2',<br>
        'price', //precio al detal<br>
        'profit_price', // porcentaje de ganancia<br>
        'price_mayor', //precio al mayor<br>
        'profit_mayor', // porcentaje de ganancia<br>
        'price_offer', //precio de oferta<br>
        'profit_offer', // porcentaje de ganancia<br>
        'price_divisa', //precio del dolar cuando se adquirió<br>
        'delivery', // Si o No<br>
        'shipping_cost', // costo de envio<br>
        'stock_min',<br>
        'stock_max',<br>
        'stock', // cant en almacen<br>
        'user_id',<br>
        'comercio_id',<br>
        'category_id',<br>
        'subcategory_id',<br>
        'subcategory_id',<br>
        'supplier_id', //proveedor<br>
        'afiliado_id',<br>
        'pack_products_id',<br>
        'pack_price',<br>
        'tx_peso',<br>
        'tx_tamanio',<br>
        'tx_presentacion',<br>
        'tx_tamanio_carga',<br>
        'tx_tamanio_venta',<br>
        'tx_contornos',<br>
        'tx_contiene',<br>
        'fe_vencimiento',<br>
        'fe_expedicion',<br>
        'in_pedido',<br>
        'tx_adicionales',<br>
        'tx_alergenos',<br>
        'in_envio_gratis',<br>
        'in_oferta',<br>
        'tx_datos_vencimiento',<br>
        'tx_valores_nutricionales',<br>
        'tx_conservacion',<br>
        'tx_recomendacion_consumo',<br>
        'tx_envase_enbalaje',<br>
        'in_fragil',<br>
        'in_por_encargo',<br>
        'in_olor_fuerte',<br>
        'ca_valoracion',<br>
        'tx_vencimiento',<br>
        'in_valido'<br>
        <script>

            window.onpageshow = function() {

                window.addEventListener('sendSubcategories', event => {
                    
                    let subcategories = event.detail.subcategories

                    let subcategory = event.detail.subcategory

                    let msg = event.detail.msg

                    let select = document.querySelector('.subcategory')
                    
                    select.innerHTML = ''

                    var option = `<option value="0">${msg}</option>`
                    
                    subcategories.forEach(function(numero) {
                        
                        if(numero['name'] == subcategory){
                            option += `<option value="${numero['id']}" selected>${numero['name']}</option>`
                        }else{
                            option += `<option value="${numero['id']}">${numero['name']}</option>`
                        }
                        
                    });
                    
                    select.innerHTML = option
                
                }) 
            }
        </script>
</div>

