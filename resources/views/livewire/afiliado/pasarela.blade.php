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
