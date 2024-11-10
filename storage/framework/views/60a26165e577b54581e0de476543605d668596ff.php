<div class="container-fluid">
    <div class="row">
        <div class="col-xl-6 col-md-6 col-12">
            <div class="card w-75 p-1 mx-auto" wire:ignore>
                <div class="form-group ">
                    <label for="marca_id">Seleccione su modelo de automovil para buscar repuestos</label>
                    <div class="form-group my-1">
                        <select wire:model.defer="state.manufacturer_id" wire:change="changeModelo( $event.target.value )" class="form-control <?php $__errorArgs = ['manufacturer_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="manufacturer_id">
                            <option value="0">Seleccione una marca</option>
                            <?php $__currentLoopData = $comercio->manufacturersOriginal(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $manufacturer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($manufacturer->id); ?>"><?php echo e($manufacturer->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php $__errorArgs = ['manufacturer_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback">
                            <?php echo e($message); ?>

                        </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="form-group my-0">
                    <select wire:ignore.self wire:model.defer="state.modelo_id" wire:change="changeMotor( $event.target.value)" class="modelo form-control <?php $__errorArgs = ['modelo_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="modelo_id">
                        <option value="0">Seleccione un modelo</option>
                    </select>
                    <?php $__errorArgs = ['modelo_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback">
                        <?php echo e($message); ?>

                    </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group my-2">
                    <select wire:ignore wire:model.defer="state.motor_id" class="motors form-control <?php $__errorArgs = ['motor_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="motor_id">
                        <option value="0">Seleccione un motor</option>
                    </select>
                    <?php $__errorArgs = ['motor_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback">
                        <?php echo e($message); ?>

                    </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-6 col-sm-6">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.carousel-offer')->html();
} elseif ($_instance->childHasBeenRendered('l1889024585-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l1889024585-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1889024585-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1889024585-0');
} else {
    $response = \Livewire\Livewire::mount('components.carousel-offer');
    $html = $response->html();
    $_instance->logRenderedChild('l1889024585-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
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
<?php /**PATH C:\Users\Personal\Documents\Proyectos\github\repuestoexpres\resources\views/livewire/components/component-search.blade.php ENDPATH**/ ?>