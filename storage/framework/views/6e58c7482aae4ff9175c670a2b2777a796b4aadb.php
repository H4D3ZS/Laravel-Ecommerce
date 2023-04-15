<?php $__env->startSection('content'); ?>
    <?php if(session()->has('error')): ?>
        <div class="alert alert-danger fade in alert-dismissable">
            <?php echo e(session('error')); ?>

        </div>
    <?php endif; ?>

    <h2>2. Configuration</h2>

    <form method="POST" action="<?php echo e(route('install.configuration.post')); ?>" class="form-horizontal">
        <?php echo e(csrf_field()); ?>


        <div class="box">
            <p>Please enter your database connection details.</p>

            <div class="configure-form">
                <div class="form-group <?php echo e($errors->has('db.host') ? 'has-error': ''); ?>">
                    <label class="control-label col-sm-3" for="host">Host <span>*</span></label>

                    <div class="col-sm-9">
                        <input type="text" name="db[host]" value="<?php echo e(old('db.host', '127.0.0.1')); ?>" id="host" class="form-control" autofocus>

                        <?php echo $errors->first('db.host', '<span class="help-block">:message</span>'); ?>

                    </div>
                </div>

                <div class="form-group <?php echo e($errors->has('db.port') ? 'has-error': ''); ?>">
                    <label class="control-label col-sm-3" for="port">Port <span>*</span></label>

                    <div class="col-sm-9">
                        <input type="text" name="db[port]" value="<?php echo e(old('db.port', '3306')); ?>" id="port" class="form-control">

                        <?php echo $errors->first('db.port', '<span class="help-block">:message</span>'); ?>

                    </div>
                </div>

                <div class="form-group <?php echo e($errors->has('db.username') ? 'has-error': ''); ?>">
                    <label class="control-label col-sm-3" for="db-username">DB Username <span>*</span></label>
                    <div class="col-sm-9">
                        <input type="text" name="db[username]" value="<?php echo e(old('db.username')); ?>" id="db-username" class="form-control">

                        <?php echo $errors->first('db.username', '<span class="help-block">:message</span>'); ?>

                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="db-password">DB Password</label>

                    <div class="col-sm-9">
                        <input type="password" name="db[password]" value="<?php echo e(old('db.password')); ?>" id="db-password" class="form-control">
                    </div>
                </div>

                <div class="form-group <?php echo e($errors->has('db.database') ? 'has-error': ''); ?>">
                    <label class="control-label col-sm-3" for="database">Database <span>*</span></label>

                    <div class="col-sm-9">
                        <input type="text" name="db[database]" value="<?php echo e(old('db.database')); ?>" id="database" class="form-control">

                        <?php echo $errors->first('db.database', '<span class="help-block">:message</span>'); ?>

                    </div>
                </div>
            </div>
        </div>

        <div class="box">
            <p>Please enter a username and password for the administration.</p>

            <div class="configure-form">
                <div class="form-group <?php echo e($errors->has('admin.first_name') ? 'has-error': ''); ?>">
                    <label class="control-label col-sm-3" for="admin-first-name">First Name <span>*</span></label>

                    <div class="col-sm-9">
                        <input type="text" name="admin[first_name]" value="<?php echo e(old('admin.first_name')); ?>" id="admin-first-name" class="form-control">

                        <?php echo $errors->first('admin.first_name', '<span class="help-block">:message</span>'); ?>

                    </div>
                </div>

                <div class="form-group <?php echo e($errors->has('admin.last_name') ? 'has-error': ''); ?>">
                    <label class="control-label col-sm-3" for="admin-last-name">Last Name <span>*</span></label>

                    <div class="col-sm-9">
                        <input type="text" name="admin[last_name]" value="<?php echo e(old('admin.last_name')); ?>" id="admin-last-name" class="form-control">

                        <?php echo $errors->first('admin.last_name', '<span class="help-block">:message</span>'); ?>

                    </div>
                </div>

                <div class="form-group <?php echo e($errors->has('admin.email') ? 'has-error': ''); ?>">
                    <label class="control-label col-sm-3" for="admin-email">Email <span>*</span></label>

                    <div class="col-sm-9">
                        <input type="text" name="admin[email]" value="<?php echo e(old('admin.email')); ?>" id="admin-email" class="form-control">

                        <?php echo $errors->first('admin.email', '<span class="help-block">:message</span>'); ?>

                    </div>
                </div>

                <div class="form-group <?php echo e($errors->has('admin.phone') ? 'has-error': ''); ?>">
                    <label class="control-label col-sm-3" for="admin-phone">Phone <span>*</span></label>

                    <div class="col-sm-9">
                        <input type="text" name="admin[phone]" value="<?php echo e(old('admin.phone')); ?>" id="admin-phone" class="form-control">

                        <?php echo $errors->first('admin.phone', '<span class="help-block">:message</span>'); ?>

                    </div>
                </div>

                <div class="form-group <?php echo e($errors->has('admin.password') ? 'has-error': ''); ?>">
                    <label class="control-label col-sm-3" for="admin-password">Password <span>*</span></label>

                    <div class="col-sm-9">
                        <input type="password" name="admin[password]" id="admin-password" class="form-control">

                        <?php echo $errors->first('admin.password', '<span class="help-block">:message</span>'); ?>

                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="admin-confirm-password">Confirm Password <span>*</span></label>

                    <div class="col-sm-9">
                        <input type="password" name="admin[password_confirmation]" id="admin-confirm-password" class="form-control">
                    </div>
                </div>
            </div>
        </div>

        <div class="box">
            <p>Please enter your store details.</p>

            <div class="configure-form p-b-0">
                <div class="form-group <?php echo e($errors->has('store.store_name') ? 'has-error': ''); ?>">
                    <label class="control-label col-sm-3" for="store-name">Store Name <span>*</span></label>

                    <div class="col-sm-9">
                        <input type="text" name="store[store_name]" value="<?php echo e(old('store.store_name')); ?>" id="store-name" class="form-control">

                        <?php echo $errors->first('store.store_name', '<span class="help-block">:message</span>'); ?>

                    </div>
                </div>

                <div class="form-group <?php echo e($errors->has('store.store_email') ? 'has-error': ''); ?>">
                    <label class="control-label col-sm-3" for="store-email">Store Email <span>*</span></label>

                    <div class="col-sm-9">
                        <input type="text" name="store[store_email]" value="<?php echo e(old('store.store_email')); ?>" id="store-email" class="form-control">

                        <?php echo $errors->first('store.store_email', '<span class="help-block">:message</span>'); ?>

                    </div>
                </div>

                <div class="form-group <?php echo e($errors->has('store.store_phone') ? 'has-error': ''); ?>">
                    <label class="control-label col-sm-3" for="store-phone">Store Phone <span>*</span></label>

                    <div class="col-sm-9">
                        <input type="text" name="store[store_phone]" value="<?php echo e(old('store.store_phone')); ?>" id="store-phone" class="form-control">

                        <?php echo $errors->first('store.store_phone', '<span class="help-block">:message</span>'); ?>

                    </div>
                </div>

                <div class="form-group <?php echo e($errors->has('store.search_engine') ? 'has-error': ''); ?>">
                    <label class="control-label col-sm-3" for="store-search-engine">Search Engine <span>*</span></label>

                    <div class="col-sm-9">
                        <select name="store[search_engine]" class="form-control custom-select-black" id="store-search-engine">
                            <option value="mysql" <?php echo e(old('store.search_engine') === 'mysql' ? 'selected' : ''); ?>>
                                MySQL
                            </option>

                            <option value="algolia" <?php echo e(old('store.search_engine') === 'algolia' ? 'selected' : ''); ?>>
                                Algolia
                            </option>
                        </select>

                        <?php if($errors->has('store.search_engine')): ?>
                            <?php echo $errors->first('store.search_engine', '<span class="help-block">:message</span>'); ?>

                        <?php else: ?>
                            <span class="help-block">You cannot change the search engine later.</span>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="<?php echo e(old('store.search_engine') === 'algolia' ? '' : 'hide'); ?>" id="algolia-fields">
                    <div class="form-group <?php echo e($errors->has('store.algolia_app_id') ? 'has-error': ''); ?>">
                        <label class="control-label col-sm-3" for="store-algolia-app-id">Algolia Application ID <span>*</span></label>

                        <div class="col-sm-9">
                            <input type="text" name="store[algolia_app_id]" value="<?php echo e(old('store.algolia_app_id')); ?>" id="store-algolia-app-id" class="form-control">

                            <?php echo $errors->first('store.algolia_app_id', '<span class="help-block">:message</span>'); ?>

                        </div>
                    </div>

                    <div class="form-group <?php echo e($errors->has('store.algolia_secret') ? 'has-error': ''); ?>">
                        <label class="control-label col-sm-3" for="store-algolia-secret">Algolia Admin API Key <span>*</span></label>

                        <div class="col-sm-9">
                            <input type="password" name="store[algolia_secret]" value="<?php echo e(old('store.algolia_secret')); ?>" id="store-algolia-secret" class="form-control">

                            <?php echo $errors->first('store.algolia_secret', '<span class="help-block">:message</span>'); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-buttons clearfix">
            <button type="submit" class="btn btn-primary pull-right install-button">Install</button>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        $('#store-search-engine').on('change', function () {
            $('#algolia-fields').toggleClass('hide');
        });

        $('.install-button').on('click', function (e) {
            var button = $(e.currentTarget);

            button.data('loading-text', button.html())
                .addClass('btn-loading')
                .button('loading');
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('install.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/lord-hades/Desktop/ecom/resources/views/install/configuration.blade.php ENDPATH**/ ?>