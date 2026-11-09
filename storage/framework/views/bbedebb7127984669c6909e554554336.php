<?php $__env->startSection('title', '- Profile'); ?>

<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
        <div class="card p-4">
            <!-- Header Profil -->
            <div class="text-center pb-3 border-bottom">
                <div class="d-inline-flex align-items-center justify-content-center rounded-circle mb-3 shadow"
                     style="width: 85px; height: 85px; background: linear-gradient(135deg, #27187E, #4933d1); color: #ffffff; font-size: 2rem; font-weight: bold;">
                    <?php echo e(strtoupper(substr($username, 0, 1))); ?>

                </div>
                <h3 class="fw-bold mb-1" style="color: var(--primary-indigo);"><?php echo e($username); ?></h3>
                <span class="badge bg-success-subtle text-success border border-success px-3 py-1">
                    ● Akun Aktif
                </span>
            </div>

            <!-- Detail Informasi Profil -->
            <div class="py-3">
                <h6 class="text-muted text-uppercase small fw-bold mb-3">Informasi Pengguna</h6>
                
                <div class="list-group list-group-flush">
                    <div class="list-group-item d-flex justify-content-between align-items-center px-0 bg-transparent">
                        <span class="text-muted">Username Pengguna</span>
                        <span class="fw-semibold"><?php echo e($username); ?></span>
                    </div>
                    <div class="list-group-item d-flex justify-content-between align-items-center px-0 bg-transparent">
                        <span class="text-muted">Peran / Jabatan</span>
                        <span class="badge" style="background-color: var(--primary-indigo); color: #ffffff;">Barista & Pengelola</span>
                    </div>
                    <div class="list-group-item d-flex justify-content-between align-items-center px-0 bg-transparent">
                        <span class="text-muted">Penugasan Cabang</span>
                        <span class="fw-semibold">Kedai Me Gweh - Pusat</span>
                    </div>
                    <div class="list-group-item d-flex justify-content-between align-items-center px-0 bg-transparent">
                        <span class="text-muted">Hak Akses Sistem</span>
                        <span class="fw-semibold text-success">Kelola Menu & Profil</span>
                    </div>
                </div>
            </div>

            <!-- Tombol Aksi -->
            <div class="d-flex gap-2 pt-3 border-top">
                <a href="<?php echo e(route('dashboard')); ?>" class="btn btn-outline-primary flex-fill">
                    &larr; Kembali ke Dashboard
                </a>
                <a href="<?php echo e(route('login')); ?>" class="btn btn-danger flex-fill">
                    Logout
                </a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\kedai_me_gweh\resources\views/profile.blade.php ENDPATH**/ ?>