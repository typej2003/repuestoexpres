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
</div>
<?php /**PATH C:\Users\Personal\Documents\Proyectos\github\repuestoexpres\resources\views/livewire/components/component-search.blade.php ENDPATH**/ ?>