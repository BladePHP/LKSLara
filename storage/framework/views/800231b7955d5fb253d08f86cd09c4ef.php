

<?php $__env->startSection('body'); ?>
    <div class="mb-3">
        <center>
            <h1>UBAH KELUHAN</h1>
        </center>
    </div>
    <form action="<?php echo e(route('update', $siswa->id)); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field('put'); ?>
    <?php if($errors->any()): ?>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="alert alert-danger">
                <?php echo e($error); ?>

            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
    <?php endif; ?>
        <div class="row mb-3">
            <label for="nama">Nama : </label>
            <input type="text" name="nama" placeholder="Nama" class="form-control" value="<?php echo e($siswa->nama); ?>">
        </div>
        <div class="row mb-3">
            <label for="mapel">Mapel : </label>
            <input type="text" name="mapel" placeholder="Mata Pelajaran" class="form-control" value="<?php echo e($siswa->mapel); ?>">
        </div>
        <div class="row mb-3">
            <label for="keluhan">Keluhan : </label>
            <textarea name="keluhan" class="form-control" placeholder="Masukkan Keluhan Anda Di sini" cols="30" rows="10"><?php echo e($siswa->keluhan); ?></textarea>
        </div>
        <div class="row mb-3">
            <label for="file">File : </label>
            <input type="file" name="file" class="form-control" value="<?php echo e($siswa->file); ?>">
        </div>
        <div class="mb-3 btn btn-group d-flex">
            <button class="btn btn-primary" type="submit">Submit</button>
            <button onclick="history.back()" class="btn btn-secondary">Kembali</button>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\final\resources\views/keluh/edit.blade.php ENDPATH**/ ?>