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

                <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="dropdownM">
                        <a class="dropbtnM"><?php echo e($menu->texto); ?></a>
                        <?php if( $menu->origen == 'categories'): ?>
                            <div class="dropdownM-content">
                                <?php if($menu->subcategories() != null): ?>
                                    <?php if($menu->subcategories->count() > 0): ?>
                                        <?php $__currentLoopData = $menu->subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <a href="<?php echo e($subcategory->name); ?>"><?php echo e($subcategory->name); ?></a>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php /**PATH C:\Users\typej\Documents\git\repuestoexpres\resources\views/livewire/components/menu-component.blade.php ENDPATH**/ ?>