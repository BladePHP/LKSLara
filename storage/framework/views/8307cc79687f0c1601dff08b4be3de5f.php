

<?php $__env->startSection('body'); ?>
    <div class="mb-3">
        <center>
            <h1>UBAH KELUHAN</h1>
        </center>
    </div>
        <div class="row mb-3">
            <label for="nama">Nama : </label>
            <input type="text" name="nama" placeholder="Nama" class="form-control" value="<?php echo e($siswa->nama); ?>" readonly>
        </div>
        <div class="row mb-3">
            <label for="mapel">Mapel : </label>
            <input type="text" name="mapel" placeholder="Mata Pelajaran" class="form-control" value="<?php echo e($siswa->mapel); ?>" readonly>
        </div>
        <div class="row mb-3">
            <label for="keluhan">Keluhan : </label>
            <textarea name="keluhan" class="form-control" placeholder="Masukkan Keluhan Anda Di sini" cols="30" rows="10" readonly><?php echo e($siswa->keluhan); ?></textarea>
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
            <label for="updated_at">Diubah : </label>
            <input type="text" name="updated_at" class="form-control" value="<?php echo e($siswa->updated_at); ?>" readonly>
        </div>
        <div class="row mb-3">
            <label for="created_at">Dibuat : </label>
            <input type="text" name="created_at" class="form-control" value="<?php echo e($siswa->created_at); ?>" readonly>
        </div>
        <div class="row mb-3">
            <button onclick="history.back()" class="btn btn-primary">Kembali</button>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\final\resources\views/keluh/show.blade.php ENDPATH**/ ?>