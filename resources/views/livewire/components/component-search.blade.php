<div>
        
    <form autocomplete="off" wire:submit.prevent="searchMotor">
        @csrf
        <div class="card w-75 p-1 mx-auto">
            <div class="form-group">
                <label for="manufacturer">Marca</label>
                <select wire:model="manufacturer" class="form-control @error('manufacturer') is-invalid @enderror">
                    <option value="0">Seleccione una opción</option>
                    @foreach($comercio->manufacturersOriginal() as $manufacturer)
                        <option value="{{ $manufacturer->id }}">{{ $manufacturer->name }}</option>
                    @endforeach
                </select>
                @error('manufacturer')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="modelo">Modelo</label>
                <select wire:model="modelo" name="modelo_id" id="modelo_id" class="modelo form-control @error('modelo') is-invalid @enderror" >
                    @if($modelos->count() == 0 )    
                        <option value="0">Seleccione una opción</option>
                    @else
                    <option value="0">Seleccione una opción</option>
                    @endif
                    @foreach($modelos as $modelo)
                        <option value="{{ $modelo->id }}">{{ $modelo->name }}</option>
                    @endforeach
                </select>
                @error('modelo')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="motor">Motor</label>
                <select wire:model="motor" class="motor form-control @error('motor') is-invalid @enderror" >
                    @if($motores->count() == 0 )    
                        <option value="0">Seleccione una opción</option>
                    @else
                    <option value="0">Seleccione una opción</option>
                    @endif
                    @foreach($motores as $motor)
                        <option value="{{ $motor->id }}">{{ $motor->name }}</option>
                    @endforeach
                </select>
                @error('motor')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group mx-auto">
                <button type="submit" class="btn-app">Buscar</button>
            </div>
        </div>            
    </form>
</div>