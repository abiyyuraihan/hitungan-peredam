@extends('admin.admin')

@section('container_admin')
    <div class="row justify-content-center">
        <div class="col-md-3 bg-light p-3">
            <h1 class="h3 mb-3 fw-normal text-center">Harga Material dan Jasa Listrik</h1>
            <form action="/listrik@hargaListrik" method="post">
                @csrf
                <div class="form-floating mb-2">
                    <input type="text" name="material_lampu"
                        class="form-control rounded-top @error('material_lampu') is-invalid @enderror" id="material_lampu"
                        placeholder="material_lampu" autofocus value="{{ old('material_lampu') }}">
                    <label for="material_lampu">Harga Material Lampu</label>
                    @error('material_lampu')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-2">
                    <input type="text" name="material_lampu_tembak"
                        class="form-control rounded-top @error('material_lampu_tembak') is-invalid @enderror"
                        id="material_lampu_tembak" placeholder="material_lampu_tembak"
                        value="{{ old('material_lampu_tembak') }}">
                    <label for="material_lampu_tembak">Harga Material Lampu Tembak</label>
                    @error('material_lampu_tembak')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-2">
                    <input type="text" name="material_lampu_rgb"
                        class="form-control rounded-top @error('material_lampu_rgb') is-invalid @enderror"
                        id="material_lampu_rgb" placeholder="material_lampu_rgb" value="{{ old('material_lampu_rgb') }}">
                    <label for="material_lampu_rgb">Harga Material Lampu RGB</label>
                    @error('material_lampu_rgb')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-2">
                    <input type="text" name="material_stopkontak"
                        class="form-control rounded-top @error('material_stopkontak') is-invalid @enderror"
                        id="material_stopkontak" placeholder="material_stopkontak" value="{{ old('material_stopkontak') }}">
                    <label for="material_stopkontak">Harga Material Stop Kontak</label>
                    @error('material_stopkontak')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-2">
                    <input type="text" name="jasa_instalasi_listrik"
                        class="form-control rounded-top @error('jasa_instalasi_listrik') is-invalid @enderror"
                        id="jasa_instalasi_listrik" placeholder="jasa_instalasi_listrik"
                        value="{{ old('jasa_instalasi_listrik') }}">
                    <label for="jasa_instalasi_listrik">Harga Jasa Instalasi Listrik</label>
                    @error('jasa_instalasi_listrik')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button class="w-100 btn btn-lg btn-primary bg-dark" type="submit">Update Harga Listrik</button>
            </form>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10 bg-light mt-2 p-2 justify-content-center">
            <h3 class="mt-4 mb-1 text-center border-bottom border-dark pb-2">Harga Material dan Jasa Listrik <small>(Terakhir di
                    Update)</small>
            </h3>

            <div class="table-responsive">
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <td scope="col">Harga Lampu /pcs</td>
                            <td scope="col">Harga Lampu Tembak /pcs</td>
                            <td scope="col">Harga Lampu RGB /set</td>
                            <td scope="col">Harga StopKontak /pcs</td>
                            <td scope="col">Jasa Instalasi /titik</td>
                            <td scope="col">Tgl Update</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php if ($listrik == null) {
                                echo '0 /pcs';
                            } else {
                                echo $listrik->material_lampu . ' /pcs';
                            } ?></td>
                            <td><?php if ($listrik == null) {
                                echo '0 /jendela';
                            } else {
                                echo $listrik->material_lampu_tembak . ' /pcs';
                            } ?></td>
                            <td><?php if ($listrik == null) {
                                echo '0 /set';
                            } else {
                                echo $listrik->material_lampu_rgb . ' /set';
                            } ?></td>
                            <td><?php if ($listrik == null) {
                                echo '0 /pcs';
                            } else {
                                echo $listrik->material_stopkontak . ' /pcs';
                            } ?></td>
                            <td><?php if ($listrik == null) {
                                echo '0 /titik';
                            } else {
                                echo $listrik->jasa_instalasi_listrik . ' /titik';
                            } ?></td>
                            <td><?php if ($listrik == null) {
                                echo 'Data Kosong';
                            } else {
                                echo $listrik->updated_at->diffForHumans();
                            } ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
