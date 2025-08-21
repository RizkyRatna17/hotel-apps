
@extends('app')
@section('title', 'Tambah Kategori Kamar')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">{{$title ?? ''}} </h3>
                <form action="{{route('categories.update', $edit->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    {{-- CSRF token untuk tidak expired --}}
                    <div class="mb-3">
                        <label for="" class="form-label">Nama *</label>
                        <input type="text" name="name" class="form-control" placeholder="Masukkan nama" required value="{{$edit->name ?? ''}}">
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
