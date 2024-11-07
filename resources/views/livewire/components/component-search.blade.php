<div class="container-fluid">
    <div class="row">
        <div class="col-xl-6 col-md-6 col-12">
            <div class="card w-75 p-1 mx-auto" wire:ignore>
                <div class="form-group ">
                    <label for="marca_id">Seleccione su modelo de automovil para buscar repuestos</label>
                    <div class="form-group my-1">
                        <select wire:model.defer="state.manufacturer_id" wire:change="changeModelo( $event.target.value )" class="form-control @error('manufacturer_id') is-invalid @enderror" id="manufacturer_id">
                            <option value="0">Seleccione una marca</option>
                            @foreach($comercio->manufacturersOriginal() as $manufacturer)
                                <option value="{{ $manufacturer->id }}">{{ $manufacturer->name }}</option>
                            @endforeach
                        </select>
                        @error('manufacturer_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group my-0">
                    <select wire:ignore.self wire:model.defer="state.modelo_id" wire:change="changeMotor( $event.target.value)" class="modelo form-control @error('modelo_id') is-invalid @enderror" id="modelo_id">
                        <option value="0">Seleccione un modelo</option>
                    </select>
                    @error('modelo_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group my-2">
                    <select wire:ignore wire:model.defer="state.motor_id" class="motors form-control @error('motor_id') is-invalid @enderror" id="motor_id">
                        <option value="0">Seleccione un motor</option>
                    </select>
                    @error('motor_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-6 col-sm-6">
            @livewire('components.carousel-offer')
        </div>
    </div>

    <script>

            window.onpageshow = function() {

                window.addEventListener('sendModelos', event => {
                    
                    let modelos = event.detail.modelos

                    let msg = event.detail.msg

                    let select = document.querySelector('.modelo')
                    
                    select.innerHTML = ''

                    var option = `<option value="0">${msg}</option>`
                    
                    modelos.forEach(function(numero) {
                        
                        
                            option += `<option value="${numero['id']}">${numero['name']}</option>`
                        
                        
                    });
                    
                    select.innerHTML = option
                
                })

                window.addEventListener('sendMotores', event => {
                    let motors = event.detail.motors
                    let msg = event.detail.msg
                    let select = document.querySelector('.motors')                    
                    select.innerHTML = ''
                    var option = `<option value="0">${msg}</option>`                    
                    motors.forEach(function(numero) {
                            option += `<option value="${numero['id']}">${numero['name']}</option>`
                    });                    
                    select.innerHTML = option                
                })

                window.addEventListener('sendReset1', event => {
                    let msg2 = event.detail.msg2
                    let msg3 = event.detail.msg3

                    let select2 = document.querySelector('.modelo')
                    let select3 = document.querySelector('.motors')
                    select2.innerHTML = ''
                    select3.innerHTML = ''
                    var option2 = `<option value="0">${msg2}</option>`
                    select2.innerHTML = option2
                    var option3 = `<option value="0">${msg3}</option>`
                    select3.innerHTML = option3
                })
                window.addEventListener('sendReset2', event => {
                    
                    let msg3 = event.detail.msg3

                    let select3 = document.querySelector('.motors')
                    select3.innerHTML = ''
                    var option3 = `<option value="0">${msg3}</option>`
                    select3.innerHTML = option3
                })
            }
        </script>

</div>
