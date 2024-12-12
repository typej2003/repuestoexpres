<div>
    <form wire:submit.prevent="updateBasicData" class="form-horizontal">
        <div class="form-group">
            <div class="row">
                <div class="col-xs-6 col-md-4 col-sm-4 col-4">
                    <label for="identificationNac">Tipo de documento <span class="text-danger">*</span></label>
                    <select class="form-control @error('identificationNac') is-invalid @enderror" name="identificationNac" id="identificationNac" placeholder="Tipo">
                        <option value="J">J-</option>
                        <option value="E">E-</option>
                        <option value="G">G-</option>
                        <option value="P">P-</option>
                        <option value="V" selected>V-</option>
                    </select>
                </div>
                <div class="col-xs-6 col-md-8 col=sm-8 col-8">
                    <label for="identificationNumber">Documento <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('identificationNumber') is-invalid @enderror" name="identificationNumber" id="identificationNumber" placeholder="Documento">
                </div>
                @error('identificationNumber')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>                            
        </div>

        <div class="group-control my-3">
            <label for="names" for="">Nombres <span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('names') is-invalid @enderror" id="names">
            @error('names')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="group-control my-3">
            <label for="surnames" for="">Apellidos <span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('surnames') is-invalid @enderror" id="surnames">
            @error('surnames')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="cellphonecode">Teléfono <span class="text-danger">*</span></label>        
            <div class="row ">
                <div class="col-xs-6 col-md-5 col-sm-4 col-4">
                    <select wire:model.defer="state.cellphonecode" class="form-control" name="cellphonecode" id="cellphonecode">
                        <option value="0">Seleccione</option>
                        <option value="0412">0412</option>
                        <option value="0414">0414</option>
                        <option value="0424">0424</option>
                        <option value="0416">0416</option>
                        <option value="0426">0426</option>
                    </select>
                </div>
                <div class="col-xs-6 col-md-7 col-sm-8 col-8">
                    <input wire:model.defer="state.cellphone" type="text" class="form-control" name="cellphone" id="cellphone">
                </div>
            </div>                
        </div>
        <div class="form-group">
            <label for="address" class="">Dirección postal (Calle, Nº de Casa) <span class="text-danger">*</span></label>
            <textarea wire:model.defer="state.address" type="text" class="form-control @error('address') is-invalid @enderror" id="inpuAddress" placeholder="Dirección"></textarea>
            @error('address')
            <div class="invalid-feedback">
                {{ $message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="country" class="">País <span class="text-danger">*</span></label>
            <select wire:model.defer="state.country" class="form-control @error('country') is-invalid @enderror" id="country">
                <option value="Venezuela" selected>Venezuela</option>
            </select>
            @error('country')
            <div class="invalid-feedback">
                {{ $message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="province" class="">Estado/Provincia </label>
            <select wire:model.defer="state.province" class="form-control @error('province') is-invalid @enderror" id="province">
                <option value="0">Por favor seleccione una región, estado o provincia</option>
                <option value="Distrito capital" selected>Distrito capital</option>
                <option value="Miranda" selected>Miranda</option>
            </select>
            @error('province')
            <div class="invalid-feedback">
                {{ $message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="city" class="">Ciudad/Sector <span class="text-danger">*</span></label>
            <select wire:model.defer="state.city" class="form-control @error('city') is-invalid @enderror" id="city">
                <option value="0">Por favor seleccione una ciudad</option>
                <option value="Caracas" selected>Caracas</option>
            </select>
            @error('city')
            <div class="invalid-feedback">
                {{ $message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="deliveryarea" class="">Zona de entrega <span class="text-danger">*</span></label>
            <select wire:model.defer="state.deliveryarea" class="form-control @error('deliveryarea') is-invalid @enderror" id="deliveryarea">
                <option value="0">Mi zona de entrega no aparece</option>
            </select>
            @error('deliveryarea')
            <div class="invalid-feedback">
                {{ $message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="zipcode" class="">Código Postal <span class="text-danger">*</span></label>
            <input type="text" wire:model.defer="state.zipcode" type="text" class="form-control @error('zipcode') is-invalid @enderror" id="zipcode" placeholder="Código Postal">
            @error('zipcode')
            <div class="invalid-feedback">
                {{ $message}}
            </div>
            @enderror
        </div>
        <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-app"><i class="fa fa-save mr-1"></i> Guardar Cambios</button>
            </div>
        </div>
    </form>
</div>
