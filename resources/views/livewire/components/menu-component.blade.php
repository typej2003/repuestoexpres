<div>
    <style>
        
    </style>
                @foreach($menus as $menu)
                    <div class="dropdownM">
                        <a class="dropbtnM">{{ $menu->texto }}</a>
                        @if( $menu->origen == 'categories')
                            <div class="dropdownM-content">
                                @if($menu->subcategories() != null)
                                    @if($menu->subcategories->count() > 0)
                                        @foreach($menu->subcategories as $subcategory)
                                            <a href="/searchMenu/{{ $subcategory->name }}/{{ $manufacturer_id }}/{{ $modelo_id }}/{{ $motor_id }}">{{ $subcategory->name }}</a>
                                        @endforeach
                                    @endif
                                @endif
                            </div>
                        @endif
                    </div>
                @endforeach
        
</div>

