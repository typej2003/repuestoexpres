<link rel="stylesheet" href="/css/navbar.css">
<style>
    .bton-currency {
        background: black;
    }
</style>
<div>
    <ul class="nav w-40 d-flex justify-content-between ms-auto" wire:ignore>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle d-flex justify-content-center align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <span>Moneda: </span><div class="bton-currency currency mx-1"></div>
            </a>
            <ul class="dropdown-menu currencyList border-0 my-0" aria-labelledby="navbarDropdown">
            </ul>
        </li>
        <li class="nav-item dropdown ms-auto"><span class="nav-link">$: <?php echo e($dolar=1); ?> Bs.</span></li>
    </ul>
</div>


<script>    
    window.onpageshow = function() {
        
        // Operaciones de moneda
        var currency = 1
        var currencyOption = ["Bs.", "$", "€"];

        updateCurrency()

        function updateCurrency(currency = 1){
            
            let actual = currencyOption[currency-1]
            let currencyValue = document.querySelector('.currency')
            currencyValue.innerText = actual
            document.querySelector('.currencyList').innerHtml = ''

            currencyOption.forEach(element => {
                if(actual  != element){
                    let li = document.createElement('li')
                    li.classList.add('optionCurrency', 'my-1')
                    li.dataset.element = element
                    let div = document.createElement('div')
                    div.classList.add('currencyItem')
                    div.innerText = element 
                    li.appendChild(div)
                    let currencyList = document.querySelector('.currencyList').appendChild(li)
                    //currencyList.classList.add('me-auto')
                    li.addEventListener('click', searchElementCurrency)
                    alert('undateCurrency')
                }
            });
        }        

        function searchElementCurrency(){
            alert('click')
            let currencyList = document.querySelector('.currencyList')
            currencyList.innerHTML = ''     
            let valor = this.dataset.element
            currency = currencyOption.findIndex((element) => element === valor);
            updateCurrency(currency+1)
            $('.currencyList').dropdown();
        }

        $('.dropdown-toggle').dropdown();
    }
    
</script>
<?php /**PATH C:\Users\Personal\Documents\Proyectos\repuestos\resources\views/livewire/components/currency.blade.php ENDPATH**/ ?>