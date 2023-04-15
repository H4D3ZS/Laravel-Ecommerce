<?php $__env->startSection('content'); ?>
    <h2>1. Pre-Installation</h2>

    <div class="box">
        <p>Please make sure the PHP extensions listed below are installed.</p>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Extensions</th>
                        <th class="text-center">Status</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $__currentLoopData = $requirement->extensions(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label => $satisfied): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($label); ?></td>

                            <td class="text-center">
                                <i class="fa fa-<?php echo e($satisfied ? 'check' : 'times'); ?>" aria-hidden="true"></i>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="box">
        <p>Please make sure you have set the correct permissions for the directories listed below.</p>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Directories</th>
                        <th class="text-center">Status</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $__currentLoopData = $requirement->directories(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label => $satisfied): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($label); ?></td>

                            <td class="text-center">
                                <i class="fa fa-<?php echo e($satisfied ? 'check' : 'times'); ?>" aria-hidden="true"></i>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="content-buttons clearfix">
        <a href="<?php echo e($requirement->satisfied() ? route('install.configuration.show') : '#'); ?>" class="btn btn-primary pull-right" <?php echo e($requirement->satisfied() ? '' : 'disabled'); ?>>
            Continue
        </a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('install.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/lord-hades/Desktop/ecom/resources/views/install/pre_installation.blade.php ENDPATH**/ ?>