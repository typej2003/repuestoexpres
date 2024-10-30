<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-info">
        <div class="inner">
            <div class="d-flex justify-content-between">
                <h3 wire:loading.delay.remove><?php echo e($usersCount); ?></h3>
                <div wire:loading.delay>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.animations.ballbeat','data' => []]); ?>
<?php $component->withName('animations.ballbeat'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                </div>
                <select wire:change="getUsersCount($event.target.value)" style="height: 2rem; outline: 2px solid transparent;" class="px-1 rounded border-0">
                    <option value="TODAY">Today</option>
                    <option value="30">30 days</option>
                    <option value="60">60 days</option>
                    <option value="360">360 days</option>
                    <option value="MTD">Month to Date</option>
                    <option value="YTD">Year to Date</option>
                </select>
            </div>
            <p>Users</p>
        </div>
        <div class="icon">
            <i class="ion ion-bag"></i>
        </div>
        <a href="<?php echo e(route('admin.users')); ?>" class="small-box-footer">View Users <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
<!-- ./col -->
<?php /**PATH C:\Users\Personal\Documents\Proyectos\repuestos\resources\views/livewire/admin/dashboard/users-count.blade.php ENDPATH**/ ?>