@extends('layouts.app')

@section('title', '- Pengelolaan Menu')

@section('content')
<div class="card p-4">
    <!-- Header Halaman -->
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center pb-3 mb-4 border-bottom gap-2">
        <div>
            <h2 class="fw-bold mb-1" style="color: var(--primary-indigo);">Daftar Menu Kedai Me Gweh</h2>
            <p class="text-muted small mb-0">Kelola dan pantau seluruh sajian kopi pilihan yang tersedia untuk pelanggan.</p>
        </div>
        <div>
            <span class="badge px-3 py-2 fs-6 shadow-sm" style="background-color: var(--primary-indigo); color: #ffffff;">
                Total: {{ count($menu) }} Varian Menu
            </span>
        </div>
    </div>

    <!-- Tabel Menu -->
    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead style="background-color: var(--primary-indigo); color: #ffffff;">
                <tr>
                    <th scope="col" class="py-3 ps-3" style="width: 8%;">No</th>
                    <th scope="col" class="py-3">Nama Varian Kopi</th>
                    <th scope="col" class="py-3">Kategori</th>
                    <th scope="col" class="py-3">Harga Satuan</th>
                    <th scope="col" class="py-3 text-center" style="width: 15%;">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($menu as $index => $item)
                    <tr>
                        <td class="ps-3 fw-bold text-muted">{{ $index + 1 }}</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="me-2 fs-5">(⁠^⁠.⁠_⁠.⁠^⁠)⁠ﾉ</span>
                                <span class="fw-semibold">{{ $item['name'] }}</span>
                            </div>
                        </td>
                        <td>
                            <span class="badge bg-light text-dark border">
                                Specialty Coffee
                            </span>
                        </td>
                        <td class="fw-bold" style="color: var(--primary-indigo);">
                            Rp {{ number_format($item['price'], 0, ',', '.') }}
                        </td>
                        <td class="text-center">
                            <span class="badge bg-success-subtle text-success border border-success px-2 py-1">
                                ● Tersedia
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Footer -->
    <div class="d-flex justify-content-between align-items-center pt-4 mt-3 border-top">
        <small class="text-muted">
            Menampilkan {{ count($menu) }} data menu yang dikirim langsung dari Controller.
        </small>
        <a href="{{ route('dashboard') }}" class="btn btn-outline-primary">
            &larr; Kembali ke Dashboard
        </a>
    </div>
</div>
@endsection
