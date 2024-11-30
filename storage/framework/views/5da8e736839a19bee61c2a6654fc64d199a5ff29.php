<div class="dropdown-content-cart-drop">                                    
    <ul>
    <?php if(count(\Cart::getContent()) > 0): ?>
        <?php $__currentLoopData = \Cart::getContent(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="list-group-item">
                <div class="row w-100">
                    <div class="col-md-3">
                        <img src="<?php echo e($item->attributes->image); ?>"
                            style="width: 50px; height: 50px;"
                        >
                    </div>
                    <div class="col-md-5">
                        <b><?php echo e($item->name); ?></b>
                        <br><small>Cant: <?php echo e($item->quantity); ?></small>
                    </div>
                    <div class="col-md-4">
                        <p><?php echo e(\Cart::get($item->id)->getPriceSum()); ?> USD<br><?php echo e(\Cart::get($item->id)->getPriceSum() * 35.41); ?> Bs</p>
                    </div>
                    <br><br>
                </div>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <li class="list-group-item">
            <div class="row">
                <div class="col-lg-10">
                    <b>Total: </b><?php echo e(\Cart::getTotal()); ?> USD / <?php echo e(\Cart::getTotal() * 35.41); ?> Bs
                </div>
                <div class="col-lg-2">
                    <form action="<?php echo e(route('cart.clear')); ?>" method="POST">
                        <?php echo e(csrf_field()); ?>

                        <button class="btn btn-secondary btn-sm"><i class="fa fa-trash"></i></button>
                    </form>
                </div>
            </div>
        </li>
        <li class="list-group-item">
            <div class="row d-flex" style="margin: 0px;">
                <!-- <a class="btn btn-app mx-auto" href="<?php echo e(route('cart')); ?>"> -->
                <a class="btn btn-app mx-auto" href="/goCart">
                    VER CARRITO
                </a>
            </div>
        </li>
        <br>
        
    <?php else: ?>
        <li class="list-group-item">Tu carrito esta vacío</li>
    <?php endif; ?>
    </ul>
</div><?php /**PATH C:\Users\Personal\Documents\Proyectos\github\repuestoexpres\resources\views/livewire/carrito/cart-drop.blade.php ENDPATH**/ ?>