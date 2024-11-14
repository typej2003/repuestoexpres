<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <!-- Sección de busqueda -->
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.component-search', ['comercioId' => 1])->html();
} elseif ($_instance->childHasBeenRendered('l2730780222-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l2730780222-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2730780222-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2730780222-0');
} else {
    $response = \Livewire\Livewire::mount('components.component-search', ['comercioId' => 1]);
    $html = $response->html();
    $_instance->logRenderedChild('l2730780222-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
        <div class="col-md-9">
            <div class="row">
                <!-- Sección de categoría -->
                <div class="col-md-12">
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.section-catalogo', ['comercioId' => 1])->html();
} elseif ($_instance->childHasBeenRendered('l2730780222-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l2730780222-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2730780222-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2730780222-1');
} else {
    $response = \Livewire\Livewire::mount('components.section-catalogo', ['comercioId' => 1]);
    $html = $response->html();
    $_instance->logRenderedChild('l2730780222-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                </div>        
            </div>

            <div class="row">
                <!-- Sección de categoría -->
                <div class="col-md-12">
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.section-manufacturers', ['comercioId' => 1])->html();
} elseif ($_instance->childHasBeenRendered('l2730780222-2')) {
    $componentId = $_instance->getRenderedChildComponentId('l2730780222-2');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2730780222-2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2730780222-2');
} else {
    $response = \Livewire\Livewire::mount('components.section-manufacturers', ['comercioId' => 1]);
    $html = $response->html();
    $_instance->logRenderedChild('l2730780222-2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                </div>        
            </div>

            <!-- Sección de Resultados -->
            <div class="row">
                <div class="col-12">
                    <span class="h4 mx-4">Resultado de: <?php echo e($parametro); ?> </span>  
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?php if($parametro): ?>
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
                    <?php endif; ?>
                </div>
            </div>
            
        </div>
    </div>
    
</div>
<?php /**PATH C:\Users\Personal\Documents\Proyectos\github\repuestoexpres\resources\views/livewire/components/results-products.blade.php ENDPATH**/ ?>