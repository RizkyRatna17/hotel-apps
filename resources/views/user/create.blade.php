@extends('app')
@section('title', 'Tambah Pengguna')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">{{$title ?? ''}} </h3>
                <form action="{{route('user.store')}}" method="post">
                    @csrf
                    {{-- CSRF token untuk tidak expired --}}
                    <div class="mb-3">
                        <label for="" class="form-label">Nama *</label>
                        <input type="text" name="name" class="form-control" placeholder="Masukkan nama pengguna" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Email *</label>
                        <input type="email" name="email" class="form-control" placeholder="Masukkan email" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Password *</label>
                        <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary">Simpan</button>
                        <a href="{{url()->previous()}}" class="text-muted"></a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection
