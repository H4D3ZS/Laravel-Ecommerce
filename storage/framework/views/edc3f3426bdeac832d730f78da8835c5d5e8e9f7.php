<li class="<?php if($item->getItemClass()): ?><?php echo e($item->getItemClass()); ?><?php endif; ?> <?php if($active): ?>active <?php endif; ?> <?php if($item->hasItems()): ?>treeview <?php endif; ?> clearfix">
    <a href="<?php echo e($item->getUrl()); ?>" class="<?php if(count($appends) > 0): ?> hasAppend <?php endif; ?>" <?php if($item->getNewTab()): ?>target="_blank"<?php endif; ?>>
        <i class="<?php echo e($item->getIcon()); ?>"></i>
        <span><?php echo e($item->getName()); ?></span>

        <?php $__currentLoopData = $badges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $badge): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $badge; ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php if($item->hasItems()): ?><i class="<?php echo e($item->getToggleIcon()); ?> pull-right"></i><?php endif; ?>
    </a>

    <?php $__currentLoopData = $appends; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $append): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $append; ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php if(count($items) > 0): ?>
        <ul class="treeview-menu">
            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $item; ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php endif; ?>
</li>
<?php /**PATH /Users/lord-hades/Desktop/ecom/vendor/maatwebsite/laravel-sidebar/resources/views/item.blade.php ENDPATH**/ ?>