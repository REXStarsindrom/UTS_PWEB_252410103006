@extends('layouts.app')

@section('title', '- Dashboard')

@section('content')
<!-- Hero Welcome Banner -->
<div class="card p-4 mb-4" style="background: linear-gradient(135deg, #27187E 0%, #3d29b0 100%); color: #ffffff;">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h2 class="fw-bold mb-2">Selamat Datang, {{ $username }}!ฅ⁠^⁠•⁠ﻌ⁠•⁠^⁠ฅ! </h2>
            <p class="mb-0 text-white-50">
                Panel Administrasi & Pengelolaan Menu Kedai Me Gweh. Pantau sajian kopi terbaik dan kelola data kedai dengan mudah.
            </p>
        </div>
        <div class="col-md-4 text-md-end mt-3 mt-md-0">
            <span class="badge bg-light text-dark px-3 py-2 fs-6 shadow-sm">
                ● Kedai Buka (08.00 - 22.00)
            </span>
        </div>
    </div>
</div>

<!-- Statistik Ringkas -->
<div class="row g-3 mb-4">
    <div class="col-md-4">
        <div class="card p-3 h-100">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <p class="text-muted small mb-1">Total Varian Kopi</p>
                    <h3 class="fw-bold mb-0" style="color: var(--primary-indigo);">5 Menu</h3>
                </div>
                <div class="fs-1">(⁠^⁠.⁠_⁠.⁠^⁠)⁠ﾉ</div>
            </div>
            <small class="text-success mt-2 d-block">✔ Siap disajikan hari ini</small>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card p-3 h-100">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <p class="text-muted small mb-1">Pengguna Aktif</p>
                    <h3 class="fw-bold mb-0" style="color: var(--primary-indigo);">{{ $username }}</h3>
                </div>
                <div class="fs-1">┐⁠(⁠￣⁠ヘ⁠￣⁠)⁠┌</div>
            </div>
            <small class="text-primary mt-2 d-block">● Sesi Barista Aktif</small>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card p-3 h-100">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <p class="text-muted small mb-1">Kualitas Biji Kopi</p>
                    <h3 class="fw-bold mb-0" style="color: var(--primary-indigo);">100% Arabika</h3>
                </div>
                <div class="fs-1">ฅ⁠^⁠•⁠ﻌ⁠•⁠^⁠ฅ</div>
            </div>
            <small class="text-muted mt-2 d-block">Grade 1 Specialty Beans</small>
        </div>
    </div>
</div>

<!-- Menu Akses Cepat -->
<div class="row g-4">
    <div class="col-md-6">
        <div class="card p-4 h-100">
            <div class="d-flex align-items-center mb-3">
                <div class="fs-2 me-3">ฅ⁠^⁠•⁠ﻌ⁠•⁠^⁠ฅ</div>
                <div>
                    <h5 class="fw-bold mb-1" style="color: var(--primary-indigo);">Pengelolaan Menu Kopi</h5>
                    <p class="text-muted small mb-0">Cek daftar racikan kopi, harga per porsi, dan ketersediaan menu kedai.</p>
                </div>
            </div>
            <a href="{{ route('pengelolaan') }}" class="btn btn-primary mt-auto">
                Buka Pengelolaan Menu &rarr;
            </a>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card p-4 h-100">
            <div class="d-flex align-items-center mb-3">
                <div class="fs-2 me-3">(⁠ ⁠╹⁠▽⁠╹⁠ ⁠)</div>
                <div>
                    <h5 class="fw-bold mb-1" style="color: var(--primary-indigo);">Profil & Informasi Akun</h5>
                    <p class="text-muted small mb-0">Lihat rincian pengguna yang sedang login, hak akses, dan status sesi.</p>
                </div>
            </div>
            <a href="{{ route('profile') }}" class="btn btn-primary mt-auto">
                Lihat Profil Pengguna &rarr;
            </a>
        </div>
    </div>
</div>
@endsection
