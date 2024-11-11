<div class="container-fluid">
    <div class="row">
        <div class="col-xl-6 col-md-6 col-12">
            <form action="<?php echo e(route('searchMotor')); ?>" method="POST">
              <?php echo csrf_field(); ?>
            <div class="card w-75 p-1 mx-auto">
                <div class="form-group">
                    <label for="manufacturer">Marca</label>
                    <select wire:model="manufacturer" class="form-control <?php $__errorArgs = ['manufacturer'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                        <option value="0">Seleccione una opción</option>
                        <?php $__currentLoopData = $comercio->manufacturersOriginal(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $manufacturer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($manufacturer->id); ?>"><?php echo e($manufacturer->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php $__errorArgs = ['manufacturer'];
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

                <div class="form-group">
                    <label for="modelo">Modelo</label>
                    <select wire:model="modelo" name="modelo_id" id="modelo_id" class="modelo form-control <?php $__errorArgs = ['modelo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" >
                        <?php if($modelos->count() == 0 ): ?>    
                            <option value="0">Seleccione una opción</option>
                        <?php else: ?>
                        <option value="0">Seleccione una opción</option>
                        <?php endif; ?>
                        <?php $__currentLoopData = $modelos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $modelo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($modelo->id); ?>"><?php echo e($modelo->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php $__errorArgs = ['modelo'];
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

                <div class="form-group">
                    <label for="motor">Motor</label>
                    <select wire:model="motor" class="motor form-control <?php $__errorArgs = ['motor'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" >
                        <?php if($motores->count() == 0 ): ?>    
                            <option value="0">Seleccione una opción</option>
                        <?php else: ?>
                        <option value="0">Seleccione una opción</option>
                        <?php endif; ?>
                        <?php $__currentLoopData = $motores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $motor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($motor->id); ?>"><?php echo e($motor->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php $__errorArgs = ['motor'];
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

                <div class="form-group mx-auto">
                    <button type="submit" class="btn-app">Buscar</button>
                </div>
            </div>            
            </form>
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

    </script>

</div>
<?php /**PATH C:\Users\Personal\Documents\Proyectos\github\repuestoexpres\resources\views/livewire/components/component-search.blade.php ENDPATH**/ ?>