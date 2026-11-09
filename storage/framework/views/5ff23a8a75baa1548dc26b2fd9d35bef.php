<?php $__env->startSection('title', '- Login'); ?>

<?php $__env->startSection('content'); ?>
<div class="row justify-content-center mt-4">
    <div class="col-md-5 col-lg-4">
        <div class="card p-4">
            <h3 class="mb-2 text-center fw-bold" style="color: var(--primary-indigo);">Kedai Me Gweh</h3>
            <p class="text-center text-muted small mb-4">Silakan masukkan username untuk masuk</p>

            <?php if($errors->any()): ?>
                <div class="alert alert-danger py-2">
                    <?php echo e($errors->first()); ?>

                </div>
            <?php endif; ?>

            <form method="POST" action="<?php echo e(route('login.process')); ?>">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label for="username" class="form-label fw-semibold">Username</label>
                    <input type="text" name="username" id="username"
                           class="form-control"
                           placeholder="Masukkan nama..." required>
                </div>
                <button type="submit" class="btn btn-primary w-100 mt-2">Masuk</button>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\kedai_me_gweh\resources\views/login.blade.php ENDPATH**/ ?>