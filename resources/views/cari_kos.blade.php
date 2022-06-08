@extends('template.navbar_footer')
@section('title')
Cari Kos
@endsection
{{-- <style>
    .container {
        max-width: 75%;
    }
</style> --}}
@section('isi')
<div class="container">
    <div class="d-flex justify-content-center my-5">
        <div class="col-md-8 order-md-1">
            <h2 class="mb-3">Cari Kos</h2>
            <form class="needs-validation" action="{{ route('search') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="provinsi">Provinsi</label>
                        <select class="custom-select d-block w-100" id="provinsi" name="provinsi" required>
                            <option value="">--Provinsi--</option>
                            <option value="Jawa Timur">Jawa Timur</option>
                            <option value="Jawa Barat">Jawa Barat</option>
                            <option value="Jawa Tengah">Jawa Tengah</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid country.
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="state">Kabupaten/Kota</label>
                        <select class="custom-select d-block w-100" id="kota" name="kota" required>
                            <option value="">--Kota--</option>
                            <option value="Surabaya">Surabaya</option>
                            <option value="Sidoarjo">Sidoarjo</option>
                            <option value="Malang">Malang</option>
                        </select>
                        <div class="invalid-feedback">
                            Please provide a valid state.
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="state">Kecamatan</label>
                        <select class="custom-select d-block w-100" id="kecamatan" name="kecamatan" required>
                            <option value="">--Kecamatan--</option>
                            <option value="Sukolilo">Sukolilo</option>
                            <option value="Semampir">Semampir</option>
                            <option value="Rungkut">Rungkut</option>
                        </select>
                        <div class="invalid-feedback">
                            Please provide a valid state.
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="" value="">
                        <div class="invalid-feedback">
                            Valid address is required.
                        </div>
                    </div>
                </div>

                <hr class="mb-4">
                <p>Fasilitas</p>
                <div class="ml-4">
                    <div class="row">
                        <div class="col">
                            <label for="state">Listrik</label>
                            <select class="custom-select d-block w-100" id="listrik" name="listrik">
                                <option value="">--Listrik--</option>
                                <option value="include">Termasuk dalam biaya bulanan</option>
                                <option value="exclude">Diluar biaya bulanan</option>
                            </select>
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                        </div>
                        <div class="col">
                            <label for="state">Kamar Mandi</label>
                            <select class="custom-select d-block w-100" id="wc" name="wc">
                                <option value="">--Kamar Mandi--</option>
                                <option value="dalam">Dalam</option>
                                <option value="luar">Luar</option>
                            </select>
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
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
                <button class="btn btn-primary btn-lg btn-block" type="submit">Search</button>
            </form>
        </div>
    </div>
</div>
@endsection