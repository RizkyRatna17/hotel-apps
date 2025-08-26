
@extends('app')
@section('title', 'Tambah Kamar')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">{{$title ?? ''}} </h3>
                <form action="{{route('room.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{-- CSRF token untuk tidak expired --}}
                    <div class="mb-3">
                        <label for="" class="form-label">Kategori Kamar *</label>
                        <select name="category_id" id="" class="form-control">
                            <option value="">Pilih Kategori Kamar</option>
                            @foreach ($categories as $category )
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Nama *</label>
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
