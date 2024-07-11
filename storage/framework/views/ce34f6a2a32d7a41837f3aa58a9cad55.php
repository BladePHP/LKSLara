

<?php $__env->startSection('body'); ?>
    <div class="mb-3"><center><h1>
        LOGIN PAGE
    </h1></center>
    </div>
    <form action="<?php echo e(route('loginpost')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php if($errors->any()): ?>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="alert alert-danger">
                    <?php echo e($error); ?>

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        <?php if(Session::has('success')): ?>
            <div class="alert alert-success">
                <?php echo e(Session::get('success')); ?>

            </div>
        <?php endif; ?>
        <div class="row mb-3">
            <label for="email">Email : </label>
            <input type="text" name="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="row mb-3">
            <label for="password">Password : </label>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <div class="d-flex btn btn-group">
            <button class="btn btn-primary" type="submit">Login</button>
            <a href="<?php echo e(route('register')); ?>" class="btn btn-secondary">Register</a>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\final\resources\views/login/index.blade.php ENDPATH**/ ?>