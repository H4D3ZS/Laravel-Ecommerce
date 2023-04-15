<ul class="sidebar-menu">
    <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $group; ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php /**PATH /Users/lord-hades/Desktop/ecom/vendor/maatwebsite/laravel-sidebar/resources/views/menu.blade.php ENDPATH**/ ?>