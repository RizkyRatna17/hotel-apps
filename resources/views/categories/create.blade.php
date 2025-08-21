
@extends('app')
@section('title', 'Tambah Kategori Kamar')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">{{$title ?? ''}} </h3>
                <form action="{{route('categories.store')}}" method="post">
                    @csrf
                    {{-- CSRF token untuk tidak expired --}}
                    <div class="mb-3">
                        <label for="" class="form-label">Nama Kamar *</label>
                        <input type="text" name="name" class="form-control" placeholder="Masukkan nama kamar" required>
                    </div>
                     <div class="mb-3">
                        <label for="" class="form-label">Harga *</label>
                        <input type="number" name="price" class="form-control" placeholder="Masukkan kang kamar" required>
                    </div>
                     <div class="mb-3">
                        <label for="" class="form-label">Fasilitas *</label>
                        <textarea name="facility" id="" cols="30" rows="10" class="form-control" required></textarea>
                    </div>
                     <div class="mb-3">
                        <label for="" class="form-label">Deskripsi</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control" required></textarea>
                    </div>
                     <div class="mb-3">
                        <label for="" class="form-label">Gambar *</label>
                        <input type="file" name="image_cover" required>
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
