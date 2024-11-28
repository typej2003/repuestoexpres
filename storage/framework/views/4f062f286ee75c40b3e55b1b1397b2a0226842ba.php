<div class="div-currency d-flex">
    <link rel="stylesheet" href="/css/navbar.css">
    <ul class="nav w-40 d-flex justify-content-between mx-auto " wire:ignore>
        <li class="nav-item dropdown d-flex justify-content-between align-items-center">
            <span>Moneda: </span>
            <div class="currency mx-1">
                <select class="form-control" wire:change="changeCurrency($event.target.value)" style="cursor:pointer;">
                    <option value="Bs" <?php echo e(($currencyValue === 'Bs') ? 'selected' : ''); ?>>Bs</option>
                    <option value="$" <?php echo e(($currencyValue === '$') ? 'selected' : ''); ?>>$</option>
                </select>
            </div>            
        </li>
        <!-- <li class="nav-item dropdown ms-auto tasacambio"><span class="nav-link">$: <?php echo e($tasacambio); ?> Bs.</span></li>         -->
    </ul>


    <script>
        window.addEventListener('refreshPage', event => {
            let message = event.detail.message
            //location.reload()
        }) 
    </script>
</div><?php /**PATH C:\Users\Personal\Documents\Proyectos\github\repuestoexpres\resources\views/livewire/components/currency.blade.php ENDPATH**/ ?>