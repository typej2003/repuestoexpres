<div>
    <div class="row">
        <div class="col-md-12">
            <h4>Centro de distribución</h4>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <button wire:click.prevent="addNew" class="btn btn-primary"><i class="fa fa-plus-circle mr-1"></i> Seleccione el Centro de distribución</button>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            <?php if($showEditModal): ?>
                            <span>Editar Pedido</span>
                            <?php else: ?>
                            <span>Centros de distribución</span>
                            <?php endif; ?>
                        </h5>
                        <button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="card" style="width: 100% !important;">
                                <div class="card-body">                                    
                                            <?php $__empty_1 = true; $__currentLoopData = $centrosmodal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $centro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <div class="row border border-1 my-1">
                                                    <div class="col-md-8">
                                                        <?php echo e($centro->address); ?>

                                                        <br>
                                                        <?php echo e($centro->contactphone); ?>

                                                        <br>
                                                        <?php echo e($centro->horario); ?>

                                                    </div>
                                                    <div class="col-md-4 d-flex justify-content-center align-items-center">
                                                        <button class="btn btn-secondary form-control " href="" wire:click.prevent="selectCentro(<?php echo e($centro); ?>)">
                                                            Entregar aquí
                                                        </button>
                                                    </div>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p class="mt-2">No se encontro resultados</p>
                                                </div>
                                            </div>
                                            <?php endif; ?>
                                </div>
                                
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times mr-1"></i> Cancelar</button>
                    </div>
                </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\typej\Documents\git\repuestoexpres\resources\views/livewire/afiliado/shipping-centrodistribucion.blade.php ENDPATH**/ ?>