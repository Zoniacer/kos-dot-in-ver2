@extends('template.navbar_footer')
@section('title')
Sediakan Kosan
@endsection
@section('isi')
<div class="container">
    <div class="d-flex justify-content-center my-5">
        <div class="col-md-8 order-md-1">
            <h2 class="mb-3">Tambah Kos</h2>
            <form class="needs-validation" action="{{ route('add-kos') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder=""
                            value="{{ old('name', '') }}" required>
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="provinsi">Provinsi</label>
                        <select class="custom-select d-block w-100" id="provinsi" name="provinsi"
                            value="{{ old('provinsi', '') }}" required>
                            <option value="">--Provinsi--</option>
                            <option value="Jawa Timur">Jawa Timur</option>
                            <option value="Jawa Barat">Jawa Barat</option>
                            <option value="Jawa Tengah">Jawa Tengah</option>
                        </select>
                        @error('provinsi')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="kota">Kabupaten/Kota</label>
                        <select class="custom-select d-block w-100" id="kota" name="kota" required>
                            <option value="">--Kota--</option>
                            <option value="Surabaya">Surabaya</option>
                            <option value="Sidoarjo">Sidoarjo</option>
                            <option value="Malang">Malang</option>
                        </select>
                        @error('kota')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="kecamatan">Kecamatan</label>
                        <select class="custom-select d-block w-100" id="kecamatan" name="kecamatan" required>
                            <option value="">--Kecamatan--</option>
                            <option value="Sukolilo">Sukolilo</option>
                            <option value="Semampir">Semampir</option>
                            <option value="Rungkut">Rungkut</option>
                        </select>
                        @error('kecamatan')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder=""
                            value="{{ old('alamat', '') }}" required>
                        @error('alamat')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" class="form-control" placeholder="Deskripsi"
                            required>{{ old('deskripsi','') }}</textarea>
                        @error('deskripsi')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="perabot">Perabotan Tersedia</label>
                        <textarea name="perabot" id="perabot" class="form-control" placeholder="Perabotan yang tersedia"
                            required>{{ old('perabot','') }}</textarea>
                        @error('perabot')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="tersedia">Kamar Tersedia</label>
                        <input name="tersedia" type="number" value="value" class="form-control" min="0" max="100"
                            id="tersedia" required>
                        @error('tersedia')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="harga">Harga per Bulan</label>
                        <input type="text" class="form-control" id="harga" name="harga" placeholder=""
                            value="{{ old('harga', '') }}" required>
                        @error('harga')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="hp">No. HP</label>
                        <input type="text" class="form-control" id="hp" name="hp" placeholder=""
                            value="{{ old('hp', '') }}" required>
                        @error('hp')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="image">Gambar Cover</label>
                        <input type="file" class="form-control" id="image" name="image" value="{{ old('image','') }}"
                            placeholder="Masukkan gambar" required>
                        @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <hr class="mb-4">
                <p>Fasilitas</p>
                <div class="ml-4">
                    <div class="row">
                        <div class="col">
                            <label for="listrik">Listrik</label>
                            <select class="custom-select d-block w-100" id="listrik" name="listrik">
                                <option value="">--Listrik--</option>
                                <option value="include">Termasuk dalam biaya bulanan</option>
                                <option value="exclude">Diluar biaya bulanan</option>
                            </select>
                            <@error('listrik') <div class="alert alert-danger">{{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="wc">Kamar Mandi</label>
                        <select class="custom-select d-block w-100" id="wc" name="wc">
                            <option value="">--Kamar Mandi--</option>
                            <option value="dalam">Dalam</option>
                            <option value="luar">Luar</option>
                        </select>
                        @error('wc')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="custom-control custom-checkbox col ml-3">
                        <input type="checkbox" class="custom-control-input" id="ac" name='ac'>
                        <label class="custom-control-label" for="ac">AC</label>
                    </div>
                    <div class="custom-control custom-checkbox col ml-3">
                        <input type="checkbox" class="custom-control-input" id="wifi" name='wifi'>
                        <label class="custom-control-label" for="wifi">Wifi</label>
                    </div>
                </div>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Tambah</button>
        </form>
    </div>
</div>
</div>
@endsection