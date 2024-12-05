<div>
    <form wire:submit.prevent="updateBasicData" class="form-horizontal">
        <div class="form-group row">
            <label for="inputName" class="col-sm-2 col-form-label">Usuario</label>
            <div class="col-sm-10">
                <input wire:model.defer="state.name" type="text" class="form-control @error('name') is-invalid @enderror" id="inputName" placeholder="Usuario">
                @error('name')
                <div class="invalid-feedback">
                    {{ $message}}
                </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input wire:model.defer="state.email" type="email" class="form-control @error('email') is-invalid @enderror" id="inputEmail" placeholder="Email">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message}}
                </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-success"><i class="fa fa-save mr-1"></i> Guardar Cambios</button>
            </div>
        </div>
    </form>
</div>
