@extends('template.navbar_footer')
@section('title')
Cari Kos
@endsection
<style>
    .container {
        max-width: 75%;
    }
</style>
@section('isi')
<div class="container">
    <div class="d-flex justify-content-center mt-5">
        <div class="col-md-8 order-md-1">
            <h2 class="mb-3">Cari Kos</h2>
            <form class="needs-validation" novalidate>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="country">Provinsi</label>
                        <select class="custom-select d-block w-100" id="country" required>
                            <option value="">Choose...</option>
                            <option>United States</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid country.
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="state">Kecamatan</label>
                        <select class="custom-select d-block w-100" id="state" required>
                            <option value="">Choose...</option>
                            <option>California</option>
                        </select>
                        <div class="invalid-feedback">
                            Please provide a valid state.
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="state">Kabupaten/Kota</label>
                        <select class="custom-select d-block w-100" id="state" required>
                            <option value="">Choose...</option>
                            <option>California</option>
                        </select>
                        <div class="invalid-feedback">
                            Please provide a valid state.
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid address is required.
                        </div>
                    </div>
                </div>

                <hr class="mb-4">
                <p>Fasilitas</p>
                <div class="ml-4">
                    <div class="row">
                        <div class="custom-control custom-checkbox col">
                            <input type="checkbox" class="custom-control-input" id="ac">
                            <label class="custom-control-label" for="ac">AC</label>
                        </div>
                        <div class="custom-control custom-checkbox col">
                            <input type="checkbox" class="custom-control-input" id="listrik">
                            <label class="custom-control-label" for="listrik">Listrik</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="custom-control custom-checkbox col">
                            <input type="checkbox" class="custom-control-input" id="wifi">
                            <label class="custom-control-label" for="wifi">Wifi</label>
                        </div>
                        <div class="custom-control custom-checkbox col">
                            <input type="checkbox" class="custom-control-input" id="wc">
                            <label class="custom-control-label" for="wc">WC</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="perabot">
                            <label class="custom-control-label" for="perabot">Perabot</label>
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