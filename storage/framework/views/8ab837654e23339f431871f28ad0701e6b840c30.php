<?php if($group->shouldShowHeading()): ?>
    <li class="header"><?php echo e($group->getName()); ?></li>
<?php endif; ?>

<?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo $item; ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /Users/lord-hades/Desktop/ecom/resources/views/vendor/sidebar/group.blade.php ENDPATH**/ ?>