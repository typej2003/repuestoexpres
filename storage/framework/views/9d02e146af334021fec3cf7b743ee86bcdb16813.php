<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" type="image/svg+xml" href="/icon.svg" />
    <title><?php echo e(setting('site_title')); ?> | <?php echo e(setting('site_name')); ?></title>

    <!-- Bootstrap CSS -->
	    <title>Laravel JQuery UI Autocomplete Search Example - ItSolutionStuff.com</title>
	    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
        <!-- <link rel="stylesheet" href="/css/bootstrap.min.css"> -->

        
	    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/infiniteSlider.css">

    
    
    <?php echo $__env->yieldPushContent('styles'); ?>
    <?php echo \Livewire\Livewire::styles(); ?>


</head>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <!-- <script src="/js/jquery-3.6.4.min.js"></script> -->
    
    <body class="hold-transition sidebar-mini <?php echo e(setting('sidebar_collapse') ? 'sidebar-collapse' : ''); ?>">
    <div class="wrapper">
<?php if(auth()->guard()->check()): ?>
        <!-- Navbar -->
        <?php if(auth()->guard()->guest()): ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('layouts.navbar')->html();
} elseif ($_instance->childHasBeenRendered('oscxwYr')) {
    $componentId = $_instance->getRenderedChildComponentId('oscxwYr');
    $componentTag = $_instance->getRenderedChildComponentTagName('oscxwYr');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('oscxwYr');
} else {
    $response = \Livewire\Livewire::mount('layouts.navbar');
    $html = $response->html();
    $_instance->logRenderedChild('oscxwYr', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php endif; ?>
        <?php if(auth()->guard()->check()): ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('layouts.navbar-in')->html();
} elseif ($_instance->childHasBeenRendered('TYaZJDU')) {
    $componentId = $_instance->getRenderedChildComponentId('TYaZJDU');
    $componentTag = $_instance->getRenderedChildComponentTagName('TYaZJDU');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('TYaZJDU');
} else {
    $response = \Livewire\Livewire::mount('layouts.navbar-in');
    $html = $response->html();
    $_instance->logRenderedChild('TYaZJDU', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php endif; ?>
         <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php echo $__env->make('layouts.partials.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <?php echo e($slot); ?>

        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <?php echo $__env->make('layouts.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    </body>

    <!-- ./wrapper -->
<?php endif; ?>
    

</html>


<script src="/js/app.js"></script>
<script src="/js/backend.js"></script>
<?php echo $__env->yieldPushContent('js'); ?>
<?php echo $__env->yieldPushContent('before-livewire-scripts'); ?>
<?php echo \Livewire\Livewire::scripts(); ?>

<?php echo $__env->yieldPushContent('after-livewire-scripts'); ?>

<?php echo $__env->yieldPushContent('alpine-plugins'); ?>
<!-- Alpine Core -->
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" /> -->

<!-- <script src="/js/bootstrap.min.js"></script> -->
<!-- <script src="/js/bootstrap.bundle.min.js"></script> -->
<!-- <script src="/js/jquery-3.6.4.min.js"></script> -->

<?php /**PATH C:\Users\Personal\Documents\Proyectos\github\repuestoexpres\resources\views/layouts/app.blade.php ENDPATH**/ ?>