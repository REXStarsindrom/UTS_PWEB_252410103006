@extends('layouts.app')

@section('title', '- Login')

@section('content')
<div class="row justify-content-center mt-4">
    <div class="col-md-5 col-lg-4">
        <div class="card p-4">
            <h3 class="mb-2 text-center fw-bold" style="color: var(--primary-indigo);">Kedai Me Gweh</h3>
            <p class="text-center text-muted small mb-4">Silakan masukkan username untuk masuk</p>

            @if($errors->any())
                <div class="alert alert-danger py-2">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('login.process') }}">
                @csrf
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
@endsection
 