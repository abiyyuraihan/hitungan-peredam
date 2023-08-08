@extends('admin.admin')

@section('container_admin')
    <div class="row justify-content-center">
        <div class="col-md-4 bg-light mt-2 p-5">
            <h1 class="h3 mb-3 fw-normal text-center">Harga Pintu Peredam</h1>
            <form action="/pintu_peredam@pintu" method="post">
                @csrf
                <div class="form-floating mb-2">
                    <input type="text" name="tebal_4cm"
                        class="form-control rounded-top @error('tebal_4cm') is-invalid @enderror" id="tebal_4cm"
                        placeholder="tebal_4cm" autofocus value="{{ old('tebal_4cm') }}">
                    <label for="tebal_4cm">Tebal 4cm (Harga/cm)</label>
                    @error('tebal_4cm')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-2">
                    <input type="text" name="tebal_7cm"
                        class="form-control rounded-top @error('tebal_7cm') is-invalid @enderror" id="tebal_7cm"
                        placeholder="tebal_7cm" autofocus value="{{ old('tebal_7cm') }}">
                    <label for="tebal_7cm">Tebal 7cm (Harga/cm)</label>
                    @error('tebal_7cm')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-2">
                    <input type="text" name="jasa_pasang_pintu"
                        class="form-control rounded-top @error('jasa_pasang_pintu') is-invalid @enderror"
                        id="jasa_pasang_pintu" placeholder="jasa_pasang_pintu" autofocus
                        value="{{ old('jasa_pasang_pintu') }}">
                    <label for="jasa_pasang_pintu">Jasa Pasang Pintu (Harga/Pintu)</label>
                    @error('jasa_pasang_pintu')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button class="w-100 btn btn-lg btn-primary bg-dark" type="submit">Update Harga Pintu</button>
            </form>
        </div>

        <div class="col-lg-6 bg-light mt-2 p-2 justify-content-center">
            <h3 class="mt-4 mb-1 text-center border-bottom border-dark pb-2">Harga Pintu Peredam <small>(Terakhir di
                    Update)</small>
            </h3>

            <div class="table-responsive">
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <td scope="col">Pintu (Tebal 4cm)</td>
                            <td scope="col">Pintu (Tebal 7cm)</td>
                            <td scope="col">Jasa Pasang /pintu</td>
                            <td scope="col">Tgl Update</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php if ($pintuPeredam == null) {
                                echo '0 /cm';
                            } else {
                                echo $pintuPeredam->tebal_4cm . ' /cm';
                            } ?></td>
                            <td><?php if ($pintuPeredam == null) {
                                echo '0 /cm';
                            } else {
                                echo $pintuPeredam->tebal_7cm . ' /cm';
                            } ?></td>
                            <td><?php if ($pintuPeredam == null) {
                                echo '0 /pintu';
                            } else {
                                echo $pintuPeredam->jasa_pasang_pintu . ' /pintu';
                            } ?></td>
                            <td><?php if ($pintuPeredam == null) {
                                echo 'Data Kosong';
                            } else {
                                echo $pintuPeredam->updated_at->diffForHumans();
                            } ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-4 bg-light mt-2 p-5">
            <h1 class="h3 mb-3 fw-normal text-center">Harga Jendela</h1>
            <form action="/pintu_peredam@jendela" method="post">
                @csrf
                <div class="form-floating mb-2">
                    <input type="text" name="harga_jendela"
                        class="form-control rounded-top @error('harga_jendela') is-invalid @enderror" id="harga_jendela"
                        placeholder="harga_jendela" autofocus value="{{ old('harga_jendela') }}">
                    <label for="harga_jendela">Harga Jendela (Harga/m2)</label>
                    @error('harga_jendela')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-2">
                    <input type="text" name="jasa_pasang_jendela"
                        class="form-control rounded-top @error('jasa_pasang_jendela') is-invalid @enderror"
                        id="jasa_pasang_jendela" placeholder="jasa_pasang_jendela" autofocus
                        value="{{ old('jasa_pasang_jendela') }}">
                    <label for="jasa_pasang_jendela">Jasa Pasang Jendela (Harga/Jendela)</label>
                    @error('jasa_pasang_jendela')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button class="w-100 btn btn-lg btn-primary bg-dark" type="submit">Update Harga Pintu</button>
            </form>
        </div>

        <div class="col-lg-6 bg-light mt-2 p-2 justify-content-center">
            <h3 class="mt-4 mb-1 text-center border-bottom border-dark pb-2">Harga Jendela <small>(Terakhir di
                    Update)</small>
            </h3>

            <div class="table-responsive">
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <td scope="col">Harga Jendela /m2</td>
                            <td scope="col">Jasa Pasang /m2</td>
                            <td scope="col">Tgl Update</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php if ($jendela == null) {
                                echo '0 /m2';
                            } else {
                                echo $jendela->harga_jendela . ' /m2';
                            } ?></td>
                            <td><?php if ($jendela == null) {
                                echo '0 /m2';
                            } else {
                                echo $jendela->jasa_pasang_jendela . ' /m2';
                            } ?></td>
                            <td><?php if ($jendela == null) {
                                echo 'Data Kosong';
                            } else {
                                echo $jendela->updated_at->diffForHumans();
                            } ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
