<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-2" href="<?php echo e(route('dashboard')); ?>">
            <span class="fw-bold">Kedai Me Gweh</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item">
                    <a class="nav-link px-3" href="<?php echo e(route('dashboard')); ?>">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="<?php echo e(route('pengelolaan')); ?>">Pengelolaan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="<?php echo e(route('profile')); ?>">Profile</a>
                </li>
                <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
                    <a class="btn btn-sm btn-outline-light px-3" href="<?php echo e(route('login')); ?>">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH D:\laragon\www\kedai_me_gweh\resources\views/components/navbar.blade.php ENDPATH**/ ?>