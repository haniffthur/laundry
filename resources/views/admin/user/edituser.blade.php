@extends('admin.navbar')

@section('content')
<br><br>
<div class="container bg-white mx-auto p-3 rounded mt-2 shadow">
    <h4>Form Edit User</h4>

    <form action="/admin/user/edit/{{ $get->id }}" method="POST">
        @csrf
        @method('PUT') <!-- Ubah metode ke PUT -->

        <div class="form-group mt-1">
            <label>Nama</label>
            <input type="text" name="name" class="form-control form-sm" value="{{ $get->name }}" required>
        </div>

        <div class="form-group mt-1">
            <label>Email</label>
            <input type="email" name="email" class="form-control form-sm" value="{{ $get->email }}" required>
        </div>

        <div class="form-group mt-1">
            <label>Password (Kosongkan jika tidak ingin mengubah)</label>
            <input type="password" name="password" class="form-control form-sm">
        </div>

        <div class="form-group mt-1">
            <label>Role</label>
            <select name="role" class="form-control">
                <option value="admin" {{ $get->role == 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="kasir" {{ $get->role == 'kasir' ? 'selected' : '' }}>Kasir</option>
                <option value="owner" {{ $get->role == 'owner' ? 'selected' : '' }}>Owner</option>
            </select>
        </div>

        <div class="form-group mt-1">
            <label>ID Outlet</label>
            <select name="id_outlet" class="form-control">
                <option value="">Pilih Outlet</option>
                @foreach ($outlet as $b)
                    <option value="{{ $b->id }}" {{ $get->id_outlet == $b->id ? 'selected' : '' }}>
                        {{ $b->id }} - {{$b->nama }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group mt-1">
            <button type="submit" class="btn btn-sm btn-primary float-end">
                <i class="fas fa-save"></i> Simpan
            </button>
        </div>
    </form>
</div>

<!-- SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: "{{ session('success') }}",
            showConfirmButton: false,
            timer: 2000
        });
    </script>
@endif

@if(session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Gagal!',
            text: "{{ session('error') }}",
            showConfirmButton: false,
            timer: 2000
        });
    </script>
@endif

@endsection
