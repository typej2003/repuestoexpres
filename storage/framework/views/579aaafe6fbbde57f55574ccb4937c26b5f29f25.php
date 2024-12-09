<div>
        <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css" integrity="sha384-WJUUqfoMmnfkBLne5uxXj+na/c7sesSJ32gI7GfCk4zO4GthUKhSEGyvQ839BC51" crossorigin="anonymous"> -->
    <script src="https://kit.fontawesome.com/03cf5139f1.js"></script>

    <link rel="stylesheet" href="/css/pasarela.css" class="rel">

    <head>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

        <script src="/js/variables.js"></script>
        <script src="/js/selectMetodoPagoPasarela.js"></script>
        
    </head> 
    
    <div class="row">
        <div class="col-lg-12">
            <a href="/"><img style="width: 100%;" src="/img/banner_repuestoexpres.png" alt=""></a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mx-3">
            <span class="negrita">Información:</span>
            <div class="row">
                <div class="col-md-3">
                    <span>clienteId: <span><?php echo e($clienteId); ?></span></span>
                </div>
                <div class="col-md-3">
                    <span>identificationNac: <span><?php echo e($identificationNac); ?></span>
                </div>
                <div class="col-md-3">
                    <span>identificationNumber: <span><?php echo e($identificationNumber); ?></span>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <span>email: <span><?php echo e($email); ?></span></span>
                </div>
                <div class="col-md-3">
                    <span>cellphone: <span><?php echo e($cellphone); ?></span></span>
                </div>
                <div class="col-md-3">
                    <span>rifLetter: <span><?php echo e($rifLetter); ?></span></span>
                </div>
                <div class="col-md-3">
                    <span>rifNumber: <span><?php echo e($rifNumber); ?></span></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <span>reference: <span><?php echo e($reference); ?></span> // Pedido a pagar</span>
                </div>
                <div class="col-md-2">
                    <span>currency: <span><?php echo e($currency); ?></span></span>
                </div>
                <div class="col-md-2">
                    <span>currencyValue: <span><?php echo e($currencyValue); ?></span></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <span>amount: <span><?php echo e($amount); ?></span> //monto</span>
                </div>
                <div class="col-md-5">
                    <span>title: <span><?php echo e($title); ?></span></span>
                </div>
                <div class="col-md-5">
                    <span>description: <span><?php echo e($description); ?></span></span>
                </div>
            </div>            
        </div>
    </div>

    <div class="container-fluid d-flex flex-row">
        <div class="card mx-auto" style="width: 32rem;">
            <div class="card-body">
                <div class="row my-3">
                    <div class="col-lg-12" wire:ignore>
                        <div class="divPrincipal" id="divPrincipal"></div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

<script>
    let divPrincipal = document.getElementById('divPrincipal')
    divPrincipal.appendChild(selectMetodoPago(0))  
    
</script>

<script>

    

</script>

>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</div>
<?php /**PATH C:\Users\typej\Documents\git\repuestoexpres\resources\views/livewire/afiliado/pasarela.blade.php ENDPATH**/ ?>