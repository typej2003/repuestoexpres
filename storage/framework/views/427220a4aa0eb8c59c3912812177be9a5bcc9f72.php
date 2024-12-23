<?php $__env->startComponent('mail::message'); ?>
# Introducción

The body of your message.
Esto es el Mensaje

<?php $__env->startComponent('mail::button', ['url' => '']); ?>
Button Text
<?php echo $__env->renderComponent(); ?>

Thanks,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\Users\typej\Documents\git\repuestoexpres\resources\views/emails/user/payment.blade.php ENDPATH**/ ?>