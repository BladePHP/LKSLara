

<?php $__env->startSection('body'); ?>
    <div class="mb-3">
        <h1>Halaman Guru</h1>
    </div>
    <div class="mb-3 justify-content-between align-item-center d-flex">
        <h2>Selamat datang <?php echo e(Auth::user()->name); ?></h2>
    </div>
    <?php if(Session::has('success')): ?>
        <div class="alert alert-success">
            <?php echo e(Session::get('success')); ?>

        </div>
    <?php endif; ?>
    <table class="table table-hover">
        <thead class="table table-primary">
            <th>Nama</th>
            <th>Mata pelajaran</th>
            <th>Keluhan</th>
            <th>File Tugas</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php if($siswa->count() > 0): ?>
                <?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sw): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td class="align-center"><?php echo e($sw->nama); ?></td>
                    <td class="align-center"><?php echo e($sw->mapel); ?></td>
                    <td class="align-center"><?php echo e($sw->keluhan); ?></td>
                    <td class="align-center"><?php echo e($sw->file); ?></td>
                    <td class="align-center">
                        <div class="btn btn-group">
                            <a href="<?php echo e(route('show', $sw->id)); ?>" class="btn btn-secondary">Show</a>
                            <a href="<?php echo e(route('balas', $sw->id)); ?>" class="btn btn-warning">Balas</a>
                            <form action="<?php echo e(route('destroy', $sw->id)); ?>" method="POST" class="btn btn-danger" onsubmit="return confirm('Hapus?')">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('delete'); ?>
                                <button class="btn btn-danger" type="submit">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
            <tr>
            <td class="align-center">
                Tidak Ada Keluhan
            </td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\final\resources\views/guru/guru.blade.php ENDPATH**/ ?>