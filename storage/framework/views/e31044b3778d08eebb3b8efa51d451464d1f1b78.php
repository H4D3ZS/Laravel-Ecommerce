<?php $__env->startSection('content'); ?>
    <h2>3. Complete</h2>

    <div class="box">
        <div class="installation-message text-center">
            <i class="fa fa-check-circle-o" aria-hidden="true"></i>
            <h3>FleetCart installed successfully!</h3>
        </div>

        <div class="clearfix"></div>

        <div class="visit-wrapper text-center clearfix">
            <div class="row">
                <div class="col-sm-6">
                    <a href="<?php echo e(url('/')); ?>" class="visit text-center" target="_blank">
                        <div class="icon">
                            <i class="fa fa-desktop" aria-hidden="true"></i>
                        </div>

                        <h5>Go to Your Shop</h5>
                    </a>
                </div>

                <div class="col-sm-6">
                    <a href="<?php echo e(url('admin')); ?>" class="visit text-center" target="_blank">
                        <div class="icon">
                            <i class="fa fa-cog" aria-hidden="true"></i>
                        </div>

                        <h5>Login to Administration</h5>
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('install.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/lord-hades/Desktop/ecom/resources/views/install/complete.blade.php ENDPATH**/ ?>