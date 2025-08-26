
@extends('app')
@section('title', 'Tambah Informasi Tamu')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div>
                    @foreach ($errors->all() as $i)
                    <ul style="background-color: red ">
                        <li>
                            {{$i}}
                        </li>
                    </ul>
                    @endforeach
                </div>
                <h3 class="card-title">{{$title ?? ''}} </h3>
                <form action="{{route('guest.store')}}" method="post">
                    @csrf
                    {{-- CSRF token untuk tidak expired --}}
                    <div class="mb-3">
                        <label for="" class="form-label">Nama Tamu *</label>
                        <input type="text" name="nama_tamu" class="form-control" placeholder="Masukkan nama kamar" required value="{{$guest->nama_tamu}}">
                    </div>
                     <div class="mb-3">
                        <label for="" class="form-label">Check_in*</label>
                        <input type="date" name="check_in" class="form-control" required value="{{$guest->nama_tamu}}">
                    </div>
                     <div class="mb-3">
                        <label for="" class="form-label">Check_out*</label>
                        <input type="date" name="check_out" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">No Kamar*</label>
                        <select name="no_kamar" id="" class="form-select">
                            <option value="A01">A01</option>
                            <option value="A02">A02</option>
                            <option value="A03">A03</option>
                            <option value="A04">A04</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Email*</label>
                        <input type="text" name="email" class="form-control" required>
                    </div>
                      <div class="mb-3">
                        <label for="" class="form-label">No Telp*</label>
                        <input type="number" name="no_tel" class="form-control" required>
                    </div>
                     <div class="mb-3">
                        <label for="" class="form-select">Status Tamu</label>
                        <select name="status_tamu" class="form-select" id="" required>
                            <option value="">--Pilih Status--</option>
                            @foreach ($categories as $category )

                            <option value="{{$category->name}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                     <div class="mb-3">
                        <label for="" class="form-label">Alamat</label>
                        <textarea name="alamat" id="" cols="30" rows="5" class="form-control" required></textarea>
                    </div>
                      <div class="mb-3">
                            <label for="">Kebutuhan Khusus *</label> <br>

                            {{-- Radio Button --}}
                            <input type="radio" name="statusnya" id="ada" onclick="toggleInput(true)"
                                {{ $edit->kebutuhan_khusus ? 'checked' : '' }}>
                            <label for="ada">Ada</label>

                            <input type="radio" name="statusnya" id="tidak" onclick="toggleInput(false)"
                                {{ !$edit->kebutuhan_khusus ? 'checked' : '' }}>
                            <label for="tidak">Tidak Ada</label>

                            {{-- Text Input --}}
                            <input
                                type="text"
                                name="kebutuhan_khusus"
                                class="form-control mt-2"
                                id="kebutuhan_khusus"
                                value="{{ $edit->kebutuhan_khusus ?? '' }}"
                                style="display: {{ $edit->kebutuhan_khusus ? 'block' : 'none' }}">
                        </div>
                        <script>
                            function toggleInput(show){
                                const kebutuhan_khusus = document.querySelector('#kebutuhan_khusus');

                                kebutuhan_khusus.style.display = show ? 'block' : 'none';
                            }
                        </script>


                    <div class="mb-3">
                        <button class="btn btn-primary">Simpan</button>
                        <a href="{{url()->previous()}}" class="text-muted">Kembali</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection
