<div>
    <div class="row">
        <div class="col-md-12">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('cliente.datos-facturacion-cliente')->html();
} elseif ($_instance->childHasBeenRendered('l2241838209-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l2241838209-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2241838209-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2241838209-0');
} else {
    $response = \Livewire\Livewire::mount('cliente.datos-facturacion-cliente');
    $html = $response->html();
    $_instance->logRenderedChild('l2241838209-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\typej\Documents\git\repuestoexpres\resources\views/livewire/afiliado/shipping-envio.blade.php ENDPATH**/ ?>