<link rel="stylesheet" href="/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/app.css">

<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('layouts.navbar-checkout')->html();
} elseif ($_instance->childHasBeenRendered('MmD8LFs')) {
    $componentId = $_instance->getRenderedChildComponentId('MmD8LFs');
    $componentTag = $_instance->getRenderedChildComponentTagName('MmD8LFs');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('MmD8LFs');
} else {
    $response = \Livewire\Livewire::mount('layouts.navbar-checkout');
    $html = $response->html();
    $_instance->logRenderedChild('MmD8LFs', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

<div class="container-fluid">
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('afiliado.shipping')->html();
} elseif ($_instance->childHasBeenRendered('B0WeW5d')) {
    $componentId = $_instance->getRenderedChildComponentId('B0WeW5d');
    $componentTag = $_instance->getRenderedChildComponentTagName('B0WeW5d');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('B0WeW5d');
} else {
    $response = \Livewire\Livewire::mount('afiliado.shipping');
    $html = $response->html();
    $_instance->logRenderedChild('B0WeW5d', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
</div>

<script src="/js/app.js"></script>
<script src="/js/backend.js"></script>
<!-- <script src="/js/bootstrap.min.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/jquery-3.6.4.min.js"></script> -->
<?php echo $__env->yieldPushContent('js'); ?>
<?php echo $__env->yieldPushContent('before-livewire-scripts'); ?>
<?php echo \Livewire\Livewire::scripts(); ?>

<?php echo $__env->yieldPushContent('after-livewire-scripts'); ?>


<?php echo $__env->yieldPushContent('alpine-plugins'); ?>
<!-- Alpine Core -->
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
<?php /**PATH C:\Users\typej\Documents\git\repuestoexpres\resources\views/externalviews/checkout.blade.php ENDPATH**/ ?>