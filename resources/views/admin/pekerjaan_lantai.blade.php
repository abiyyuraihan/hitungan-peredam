@extends('admin.admin')

@section('container_admin')
    <div class="row justify-content-center">
        <div class="col-md-3 bg-light p-3">
            <h1 class="h3 mb-3 fw-normal text-center">Harga Material dan Jasa Pekerjaan Lantai</h1>
            <form action="/pekerjaan_lantai@pekerjaanLantai" method="post">
                @csrf
                <div class="form-floating mb-2">
                    <input type="text" name="karpet_buanna"
                        class="form-control rounded-top @error('karpet_buanna') is-invalid @enderror" id="karpet_buanna"
                        placeholder="karpet_buanna" autofocus value="{{ old('karpet_buanna') }}">
                    <label for="karpet_buanna">Harga Karpet Buanna (/m2)</label>
                    @error('karpet_buanna')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-2">
                    <input type="text" name="karpet_kantor"
                        class="form-control rounded-top @error('karpet_kantor') is-invalid @enderror" id="karpet_kantor"
                        placeholder="karpet_kantor" value="{{ old('karpet_kantor') }}">
                    <label for="karpet_kantor">Harga Karpet Kantor (/m2)</label>
                    @error('karpet_kantor')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-2">
                    <input type="text" name="vinyl"
                        class="form-control rounded-top @error('vinyl') is-invalid @enderror" id="vinyl"
                        placeholder="vinyl" value="{{ old('vinyl') }}">
                    <label for="vinyl">Harga Vinyl (/m2)</label>
                    @error('vinyl')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-2">
                    <input type="text" name="parket_kayu"
                        class="form-control rounded-top @error('parket_kayu') is-invalid @enderror" id="parket_kayu"
                        placeholder="parket_kayu" value="{{ old('parket_kayu') }}">
                    <label for="parket_kayu">Harga Parket Kayu</label>
                    @error('parket_kayu')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-2">
                    <input type="text" name="panggung"
                        class="form-control rounded-top @error('panggung') is-invalid @enderror" id="panggung"
                        placeholder="panggung" value="{{ old('panggung') }}">
                    <label for="panggung">Harga Panggung</label>
                    @error('panggung')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-2">
                    <input type="text" name="minibar"
                        class="form-control rounded-top @error('minibar') is-invalid @enderror" id="minibar"
                        placeholder="minibar" value="{{ old('minibar') }}">
                    <label for="minibar">Harga Minibar</label>
                    @error('minibar')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button class="w-100 btn btn-lg btn-primary bg-dark" type="submit">Update Harga Pekerjaan Lantai</button>
            </form>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10 bg-light mt-2 p-2 justify-content-center">
            <h3 class="mt-4 mb-1 text-center border-bottom border-dark pb-2">Harga Material dan Jasa Pekerjaan Lantai
                <small>(Terakhir di
                    Update)</small>
            </h3>

            <div class="table-responsive">
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <td scope="col">Harga Karpet Buanna</td>
                            <td scope="col">Harga Karpet Kantor</td>
                            <td scope="col">Harga Vinyl</td>
                            <td scope="col">Harga Parket Kayu</td>
                            <td scope="col">Harga Panggung</td>
                            <td scope="col">Harga Minibar</td>
                            <td scope="col">Tgl Update</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <?php
                                    if ($pekerjaanLantai == null) {
                                        echo '0';
                                    } else {
                                        echo $pekerjaanLantai->karpet_buanna;
                                    }
                                ?>
                            </td>
                            <td>
                                <?php
                                    if ($pekerjaanLantai == null) {
                                        echo '0';
                                    } else {
                                        echo $pekerjaanLantai->karpet_kantor;
                                    }
                                ?>
                            </td>
                            <td>
                                <?php
                                    if ($pekerjaanLantai == null) {
                                        echo '0';
                                    } else {
                                        echo $pekerjaanLantai->vinyl;
                                    }
                                ?>
                            </td>
                            <td>
                                <?php
                                    if ($pekerjaanLantai == null) {
                                        echo '0';
                                    } else {
                                        echo $pekerjaanLantai->parket_kayu;
                                    }
                                ?>
                            </td>
                            <td>
                                <?php
                                    if ($pekerjaanLantai == null) {
                                        echo '0';
                                    } else {
                                        echo $pekerjaanLantai->panggung;
                                    }
                                ?>
                            </td>
                            <td>
                                <?php
                                    if ($pekerjaanLantai == null) {
                                        echo '0';
                                    } else {
                                        echo $pekerjaanLantai->minibar;
                                    }
                                ?>
                            </td>
                            <td>
                                <?php
                                    if ($pekerjaanLantai == null) {
                                        echo 'blm ada';
                                    } else {
                                        echo $pekerjaanLantai->updated_at;
                                    }
                                ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
