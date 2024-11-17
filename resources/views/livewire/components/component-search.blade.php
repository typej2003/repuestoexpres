<div>
        
    <!-- <form autocomplete="off" wire:submit.prevent="searchMotor"> -->
    <form action="{{ route('searchMotor') }}" method="POST" wire:ignore.self>
        @csrf
        <div class="card w-75 p-1 mx-auto">
            <div class="form-group">
                <label for="manufacturer">Marca</label>
                <select wire:model="manufacturer" name="manufacturer_id" id="manufacturer_id" class="form-control @error('manufacturer') is-invalid @enderror">
                    <option value="0" selected>Seleccione una opción</option>
                    @foreach($manufacturers as $manufacturer)
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
                <select wire:model="motor" name="motor_id" id="motor_id" class="motor form-control @error('motor') is-invalid @enderror">
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
                <button type="submit" class="btn-app" id="searchMotor">Buscar</button>
            </div>
        </div>            
    </form>

    <script>
        let manufacturer = document.getElementById('manufacturer_id');
        let modelo = document.getElementById('modelo_id');
        let motor = document.getElementById('motor_id');

        let searchMotor = document.getElementById('searchMotor');

        searchMotor.addEventListener('click', () =>
        {
            localStorage.setItem('serverManufacturer', manufacturer.value);
            localStorage.setItem('serverModelo', modelo.value);
            localStorage.setItem('serverMotor', motor.value);
        });

        window.addEventListener('DOMContentLoaded', () =>
        {
            let savedServer  = localStorage.getItem('serverManufacturer');

            if (savedServer)
            {
                manufacturer_id.value = savedServer;
                modelo_id.value = localStorage.getItem('serverModelo');
                motor_id.value = localStorage.getItem('serverMotor');;
            }
        });

    </script>
</div>