

<?php $__env->startSection('body'); ?>
    <div class="mb-3">
        <center>
            <h1>TAMBAH BALASAN</h1>
        </center>
    </div>
    <form action="<?php echo e(route('balasput', $siswa->id)); ?>" method="POST" enctype="multipart/form-data">
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
        <input type="text" name="nama" placeholder="Nama" class="form-control" readonly value="<?php echo e($siswa->nama); ?>">
    </div>
    <div class="row mb-3">
        <label for="mapel">Mapel : </label>
        <input type="text" name="mapel" placeholder="Mata Pelajaran" class="form-control" readonly value="<?php echo e($siswa->mapel); ?>">
    </div>
    <div class="row mb-3">
        <label for="keluhan">Keluhan : </label>
        <textarea name="keluhan" class="form-control" placeholder="Masukkan Keluhan Anda Di sini" cols="30" rows="10" readonly>value="<?php echo e($siswa->keluhan); ?>"</textarea>
    </div>
    <div class="row mb-3">
        <label for="file">File : </label>
        <input type="text" name="file" placeholder="file" class="form-control" value="<?php echo e($siswa->file); ?>" readonly>
    </div>
    <div class="mb-3">
        <a href="/images/<?php echo e($siswa->file); ?>" download>
            <button class="btn btn-secondary">Download file</button>
        </a>
    </div>
    <div class="row mb-3">
        <label for="balasan">Balasan : </label>
        <textarea name="balasan" class="form-control" placeholder="Masukkan balasan" cols="30" rows="10" required><?php echo e($siswa->balasan); ?></textarea>
    </div>
    <div class="row mb-3">
        <button class="btn btn-primary" type="submit">Submit</button>
    </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\final\resources\views/guru/balas.blade.php ENDPATH**/ ?>