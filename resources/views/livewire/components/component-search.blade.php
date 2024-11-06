<div class="container-fluid">
    <div class="row">
        <div class="col-xl-6 col-md-6 col-12">
            <div class="card w-75 p-3 mx-auto">
                <div class="form-group ">
                    <label for="marca_id">Seleccione su modelo de automovil para buscar repuestos</label>
                    <select class="form-control" name="" id="">
                        <option value="0">Elige una marca</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control" name="" id="">
                        <option value="0">Elige un modelo</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control" name="" id="">
                        <option value="0">Elige un tipo de motor</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-6 col-sm-6">
            @livewire('components.carousel-offer')
        </div>
    </div>
</div>
