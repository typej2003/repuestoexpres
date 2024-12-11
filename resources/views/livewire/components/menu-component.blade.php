<div>
    <style>
        /* Dropdown Button */
        .dropbtnM {
        /* background-color: #04AA6D; */
        color: black;
        font-size: 16px;
        border: none;
        cursor:pointer;
        padding: 10px;
        height: 10px !important;
        z-index: 5;
        margin-right: 25px;
        }

        /* The container <div> - needed to position the dropdown content */
        .dropdownM {
        position: relative;
        display: inline-block;
        
        }

        /* Dropdown Content (Hidden by Default) */
        .dropdownM-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        top: 30px;
        overflow: auto;
        max-height: 80vh;
        }

        /* Links inside the dropdown */
        .dropdownM-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        }

        .dropbtnM:hover {
            box-shadow: 0 3px 3px rgba(0, 0, 0, 0.4);
            border-radius: 15px;
        }
        /* Change color of dropdown links on hover */
        .dropdownM-content a:hover {
            box-shadow: 0 3px 3px rgba(0, 0, 0, 0.4);
        }

        /* Show the dropdown menu on hover */
        .dropdownM:hover .dropdownM-content {display: block;}

        /* Change the background color of the dropdown button when the dropdown content is shown */
        .dropdownM:hover .dropbtnM {/*background-color: #3e8e41;*/}
    </style>
            
                @csrf
                @foreach($menus as $menu)
                    <div class="dropdownM">
                        <a class="dropbtnM">{{ $menu->texto }}</a>
                        @if( $menu->origen == 'categories')
                            <div class="dropdownM-content">
                                @if($menu->subcategories() != null)
                                    @if($menu->subcategories->count() > 0)
                                        @foreach($menu->subcategories as $subcategory)
                                            <form class="formulario mx-auto" action="/searchMenu" method="get">
                                                <a href="#" class="enviar" onclick="cerrar();">{{ $subcategory->name }}</a>
                                                <input type="text" class="manufacturer">
                                                <input type="text" class="modelo">
                                                <input type="text" class="motor">
                                            </form>
                                        @endforeach
                                    @endif
                                @endif
                            </div>
                        @endif
                    </div>
                @endforeach

    <script>
        let formulario = document.querySelector('.formulario')
        let manufacturerM = document.querySelector('.manufacturer')
        let modeloM = document.querySelector('.modelo')
        let motorM = document.querySelector('.motor')
        
        window.addEventListener('DOMContentLoaded', () =>
        {
            function cerrar() {
                formulario.submit();
            }
            let savedServer  = localStorage.getItem('serverManufacturer');

            if (savedServer)
            {   
                manufacturerM.value = localStorage.getItem('serverModelo');             
                modeloM.value = localStorage.getItem('serverModelo');
                motorM.value = localStorage.getItem('serverMotor');;
            }
        });
    </script>
                
</div>

