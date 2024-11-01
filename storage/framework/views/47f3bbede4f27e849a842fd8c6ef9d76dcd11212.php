<div class="container-fluid">
    <div class="row negrita">
        <div class="col-12">
        
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <span class="h4 mx-4">Resultado de: <?php echo e($parametro); ?> </span>  
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="card showProductCard mx-auto text-center">
                    <card-body>
                        <span>No tiene Productos Disponibles</span>
                    </card-body>
                    <card-footer>                    
                    </card-footer>                    
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Personal\Documents\Proyectos\github\repuestoexpres\resources\views/livewire/components/results-products.blade.php ENDPATH**/ ?>