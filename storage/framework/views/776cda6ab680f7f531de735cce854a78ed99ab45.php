<div class="container-fluid">
    <script src="/js/jquery-3.6.4.min.js"></script>
    <script src="/js/slick.min.js"></script>
    <link rel="stylesheet" href="/css/slick-theme.min.css">
    <link rel="stylesheet" href="/css/slick.min.css">
    <link rel="stylesheet" href="/css/showProducts.css">
    <link rel="stylesheet" href="/css/star.css">
    <div class="row">
        <div class="col-md-12">
        <a href="/"><h6><i class="fa fa-solid fa-arrow-left"></i> Continuar con la compra</h6></a>
        </div>
    </div>

    <div class="row my-2">
        <div class="col-md-8">

        </div>
        <div class="col-md-4">
            <div>Su pedido</div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Precio total artículos</th>
                            <th scope="col">$ 19</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Total</th>
                            <td>$ 19</td>
                        </tr>
                        <tr>
                            <th scope="row" colspan = "2">
                                <button class="form-control btn btn-danger">Finalizar la compra</button>
                            </th>
                        </tr>
                    </tbody>
                </table>
        </div>
    </div>

    <div class="row my-2">
        <div class="col-md-12">
            <h4>También podría interesarle</h4>
        </div>
    </div>
    <div class="row my-2">
        <div class="col-md-12">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.show-products', [
                    'comercioId' => 1, 
                    'parametro' => $words,
                    'manufacturer_id' => $manufacturer_id,
                    'modelo_id' => $modelo_id,
                    'motor_id' => $motor_id,
                    ])->html();
} elseif ($_instance->childHasBeenRendered('l2922314522-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l2922314522-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2922314522-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2922314522-0');
} else {
    $response = \Livewire\Livewire::mount('components.show-products', [
                    'comercioId' => 1, 
                    'parametro' => $words,
                    'manufacturer_id' => $manufacturer_id,
                    'modelo_id' => $modelo_id,
                    'motor_id' => $motor_id,
                    ]);
    $html = $response->html();
    $_instance->logRenderedChild('l2922314522-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
    
</div>
<?php /**PATH C:\Users\Personal\Documents\Proyectos\github\repuestoexpres\resources\views/livewire/cart/cart.blade.php ENDPATH**/ ?>