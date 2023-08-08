@extends('admin.admin')

@section('container_admin')
    <div class="row justify-content-center">
        <div class="col-md-3 bg-light mt-2 mb-4 p-2 justify-content-center">
            <h1 class="h3 mb-3 fw-normal text-center">Harga Jasa Peredam Gypsum dan Panel akustik</h1>
            <form action="/harga_peredam@jasaPeredamDindingPlafon" method="post">
                @csrf
                <div class="form-floating mb-2">
                    <input type="text" name="jasa_peredam_dinding"
                        class="form-control rounded-top @error('jasa_peredam_dinding') is-invalid @enderror"
                        id="jasa_peredam_dinding" placeholder="jasa_peredam_dinding" autofocus
                        value="{{ old('jasa_peredam_dinding') }}">
                    <label for="jasa_peredam_dinding">Harga Jasa Peredam Dinding / m2</label>
                    @error('jasa_peredam_dinding')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating mb-2">
                    <input type="text" name="jasa_peredam_plafon"
                        class="form-control rounded-top @error('jasa_peredam_plafon') is-invalid @enderror"
                        id="jasa_peredam_plafon" placeholder="jasa_peredam_plafon" value="{{ old('jasa_peredam_plafon') }}">
                    <label for="jasa_peredam_plafon">Harga Jasa Peredam Plafon / m2</label>
                    @error('jasa_peredam_plafon')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating mb-2">
                    <input type="text" name="survei_jabodetabek"
                        class="form-control rounded-top @error('survei_jabodetabek') is-invalid @enderror"
                        id="survei_jabodetabek" placeholder="survei_jabodetabek" value="{{ old('survei_jabodetabek') }}">
                    <label for="survei_jabodetabek">Biaya Survei JABODETABEK</label>
                    @error('survei_jabodetabek')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button class="w-100 btn btn-lg btn-primary bg-dark" type="submit">Update Harga Jasa</button>
            </form>
        </div>

        <div class="col-lg-6 bg-light mt-2 mb-4 p-2 justify-content-center">
            <h3 class="mt-4 mb-1 text-center border-bottom border-dark pb-2">Harga Jasa <small>(Terakhir di Update)</small>
            </h3>

            <div class="table-responsive">
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <td scope="col">Jasa Peredam Dinding</td>
                            <td scope="col">Jasa Peredam Plafon</td>
                            <td scope="col">Survei JABODETABEK</td>
                            <td scope="col">Tgl Update</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php if ($jasaPeredam == null) {
                                echo '0 /m2';
                            } else {
                                echo $jasaPeredam->jasa_peredam_dinding . ' /m2';
                            } ?></td>
                            <td><?php if ($jasaPeredam == null) {
                                echo '0 /m2';
                            } else {
                                echo $jasaPeredam->jasa_peredam_plafon . ' /m2';
                            } ?></td>
                            <td><?php if ($jasaPeredam == null) {
                                echo 'Rp 0';
                            } else {
                                echo $jasaPeredam->survei_jabodetabek;
                            } ?></td>
                            <td><?php if ($jasaPeredam == null) {
                                echo 'Data Kosong';
                            } else {
                                echo $jasaPeredam->updated_at->diffForHumans();
                            } ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    {{-- Harga Proyek Meeting Room --}}
    <div class="row">
        <div class="col-md-3 bg-light mt-2 p-3">
            <h1 class="h3 mb-3 fw-normal text-center">Harga Proyek Meeting Room</h1>
            <form action="/harga_peredam@hargaMeetingRoom" method="post">
                @csrf
                <div class="form-floating mb-2">
                    <input type="text" name="gypsum_standard_mr"
                        class="form-control rounded-top @error('gypsum_standard_mr') is-invalid @enderror"
                        id="gypsum_standard_mr" placeholder="gypsum_standard_mr" value="{{ old('gypsum_standard_mr') }}">
                    <label for="gypsum_standard_mr">Harga Gypsum Standard (D60)</label>
                    @error('gypsum_standard_mr')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-2">
                    <input type="text" name="gypsum_medium_mr"
                        class="form-control rounded-top @error('gypsum_medium_mr') is-invalid @enderror"
                        id="gypsum_medium_mr" placeholder="gypsum_medium_mr" value="{{ old('gypsum_medium_mr') }}">
                    <label for="gypsum_medium_mr">Harga Gypsum Medium (D80)</label>
                    @error('gypsum_medium_mr')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-2">
                    <input type="text" name="panel_standard_mr"
                        class="form-control rounded-top @error('panel_standard_mr') is-invalid @enderror"
                        id="panel_standard_mr" placeholder="panel_standard_mr" value="{{ old('panel_standard_mr') }}">
                    <label for="panel_standard_mr">Harga Panel Akustik Standard (D40)</label>
                    @error('panel_standard_mr')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-2">
                    <input type="text" name="panel_medium_mr"
                        class="form-control rounded-top @error('panel_medium_mr') is-invalid @enderror" id="panel_medium_mr"
                        placeholder="panel_medium_mr" value="{{ old('panel_medium_mr') }}">
                    <label for="panel_medium_mr">Harga Panel Akustik Medium (D60)</label>
                    @error('panel_medium_mr')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-2">
                    <input type="text" name="panel_high_mr"
                        class="form-control rounded-top @error('panel_high_mr') is-invalid @enderror" id="panel_high_mr"
                        placeholder="panel_high_mr" value="{{ old('panel_high_mr') }}">
                    <label for="panel_high_mr">Harga Panel Akustik High (D80)</label>
                    @error('panel_high_mr')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <button class="w-100 btn btn-lg btn-primary bg-dark" type="submit">Update Harga Meeting Room</button>
            </form>
        </div>

        <div class="col-lg-9 mt-4 mb-4 justify-content-center" style="font-size: 14px;">
            <h3 class="mt-4 mb-1 text-center border-bottom border-dark pb-2">Harga Meeting Room <small>(Terakhir di
                    Update)</small></h3>
            <table class="table border-dark table-bordered">
                <thead>
                    <tr>
                        <td scope="col">Harga Gypsum Standard (D60)</td>
                        <td scope="col">Harga Gypsum Medium (D80)</td>
                        <td scope="col">Harga Panel Akustik Standard (D40)</td>
                        <td scope="col">Harga Panel Akustik Medium (D60)</td>
                        <td scope="col">Harga Panel Akustik High (D80)</td>
                        <td scope="col">Tgl Update</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php if ($mr == null) {
                            echo '0 /m2';
                        } else {
                            echo $mr->gypsum_standard_mr . ' /m2';
                        } ?></td>
                        <td><?php if ($mr == null) {
                            echo '0 /m2';
                        } else {
                            echo $mr->gypsum_medium_mr . ' /m2';
                        } ?></td>
                        <td><?php if ($mr == null) {
                            echo '0 /m2';
                        } else {
                            echo $mr->panel_standard_mr . ' /m2';
                        } ?></td>
                        <td><?php if ($mr == null) {
                            echo '0 /m2';
                        } else {
                            echo $mr->panel_medium_mr . ' /m2';
                        } ?></td>
                        <td><?php if ($mr == null) {
                            echo '0 /m2';
                        } else {
                            echo $mr->panel_high_mr . ' /m2';
                        } ?></td>
                        <td><?php if ($mr == null) {
                            echo 'Data Kosong';
                        } else {
                            echo $mr->updated_at->diffForHumans();
                        } ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    {{-- Harga Proyek Podcast Room --}}
    <div class="row justify-content-center">
        <div class="col-md-3 bg-light mt-2 p-3">
            <h1 class="h3 mb-3 fw-normal text-center">Harga Proyek Podcast Room</h1>
            <form action="/harga_peredam@hargaPodcastRoom" method="post">
                @csrf
                <div class="form-floating mb-2">
                    <input type="text" name="gypsum_standard_pr"
                        class="form-control rounded-top @error('gypsum_standard_pr') is-invalid @enderror"
                        id="gypsum_standard_pr" placeholder="gypsum_standard_pr"
                        value="{{ old('gypsum_standard_pr') }}">
                    <label for="gypsum_standard_pr">Harga Gypsum Standard (D60)</label>
                    @error('gypsum_standard_pr')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-2">
                    <input type="text" name="gypsum_medium_pr"
                        class="form-control rounded-top @error('gypsum_medium_pr') is-invalid @enderror"
                        id="gypsum_medium_pr" placeholder="gypsum_medium_pr" value="{{ old('gypsum_medium_pr') }}">
                    <label for="gypsum_medium_pr">Harga Gypsum Medium (D80)</label>
                    @error('gypsum_medium_pr')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-2">
                    <input type="text" name="panel_standard_pr"
                        class="form-control rounded-top @error('panel_standard_pr') is-invalid @enderror"
                        id="panel_standard_pr" placeholder="panel_standard_pr" value="{{ old('panel_standard_pr') }}">
                    <label for="panel_standard_pr">Harga Panel Akustik Standard (D40)</label>
                    @error('panel_standard_pr')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-2">
                    <input type="text" name="panel_medium_pr"
                        class="form-control rounded-top @error('panel_medium_pr') is-invalid @enderror"
                        id="panel_medium_pr" placeholder="panel_medium_pr" value="{{ old('panel_medium_pr') }}">
                    <label for="panel_medium_pr">Harga Panel Akustik Medium (D60)</label>
                    @error('panel_medium_pr')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-2">
                    <input type="text" name="panel_high_pr"
                        class="form-control rounded-top @error('panel_high_pr') is-invalid @enderror" id="panel_high_pr"
                        placeholder="panel_high_pr" value="{{ old('panel_high_pr') }}">
                    <label for="panel_high_pr">Harga Panel Akustik High (D80)</label>
                    @error('panel_high_pr')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <button class="w-100 btn btn-lg btn-primary bg-dark" type="submit">Update Harga Podcast Room</button>
            </form>
        </div>

        <div class="col-lg-9 mt-2 mb-4 justify-content-center" style="font-size: 14px;">
            <h3 class="mt-4 mb-1 text-center border-bottom border-dark pb-2">Harga Podcast Room <small>(Terakhir di
                    Update)</small></h3>
            <table class="table border-dark table-bordered">
                <thead>
                    <tr>
                        <td scope="col">Harga Gypsum Standard (D60)</td>
                        <td scope="col">Harga Gypsum Medium (D80)</td>
                        <td scope="col">Harga Panel Akustik Standard (D40)</td>
                        <td scope="col">Harga Panel Akustik Medium (D60)</td>
                        <td scope="col">Harga Panel Akustik High (D80)</td>
                        <td scope="col">Tgl Update</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php if ($pr == null) {
                            echo '0 /m2';
                        } else {
                            echo $pr->gypsum_standard_pr . ' /m2';
                        } ?></td>
                        <td><?php if ($pr == null) {
                            echo '0 /m2';
                        } else {
                            echo $pr->gypsum_medium_pr . ' /m2';
                        } ?></td>
                        <td><?php if ($pr == null) {
                            echo '0 /m2';
                        } else {
                            echo $pr->panel_standard_pr . ' /m2';
                        } ?></td>
                        <td><?php if ($pr == null) {
                            echo '0 /m2';
                        } else {
                            echo $pr->panel_medium_pr . ' /m2';
                        } ?></td>
                        <td><?php if ($pr == null) {
                            echo '0 /m2';
                        } else {
                            echo $pr->panel_high_pr . ' /m2';
                        } ?></td>
                        <td><?php if ($pr == null) {
                            echo 'Data Kosong';
                        } else {
                            echo $pr->updated_at->diffForHumans();
                        } ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    {{-- Harga Proyek Studio Musik --}}
    <div class="row justify-content-center">
        <div class="col-md-3 bg-light mt-2 p-3">
            <h1 class="h3 mb-3 fw-normal text-center">Harga Proyek Music Studio</h1>
            <form action="/harga_peredam@hargaMusicStudio" method="post">
                @csrf
                <div class="form-floating mb-2">
                    <input type="text" name="gypsum_standard_ms"
                        class="form-control rounded-top @error('gypsum_standard_ms') is-invalid @enderror"
                        id="gypsum_standard_ms" placeholder="gypsum_standard_ms"
                        value="{{ old('gypsum_standard_ms') }}">
                    <label for="gypsum_standard_ms">Harga Gypsum Standard (D80)</label>
                    @error('gypsum_standard_ms')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-2">
                    <input type="text" name="gypsum_medium_ms"
                        class="form-control rounded-top @error('gypsum_medium_ms') is-invalid @enderror"
                        id="gypsum_medium_ms" placeholder="gypsum_medium_ms" value="{{ old('gypsum_medium_ms') }}">
                    <label for="gypsum_medium_ms">Harga Gypsum Medium (D100)</label>
                    @error('gypsum_medium_ms')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-2">
                    <input type="text" name="gypsum_high_ms"
                        class="form-control rounded-top @error('gypsum_high_ms') is-invalid @enderror"
                        id="gypsum_high_ms" placeholder="gypsum_high_ms" value="{{ old('gypsum_high_ms') }}">
                    <label for="gypsum_high_ms">Harga Gypsum High (D120)</label>
                    @error('gypsum_high_ms')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-2">
                    <input type="text" name="panel_standard_ms"
                        class="form-control rounded-top @error('panel_standard_ms') is-invalid @enderror"
                        id="panel_standard_ms" placeholder="panel_standard_ms" value="{{ old('panel_standard_ms') }}">
                    <label for="panel_standard_ms">Harga Panel Akustik Standard (D80)</label>
                    @error('panel_standard_ms')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-2">
                    <input type="text" name="panel_medium_ms"
                        class="form-control rounded-top @error('panel_medium_ms') is-invalid @enderror"
                        id="panel_medium_ms" placeholder="panel_medium_ms" value="{{ old('panel_medium_ms') }}">
                    <label for="panel_medium_ms">Harga Panel Akustik Medium (D100)</label>
                    @error('panel_medium_ms')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-2">
                    <input type="text" name="panel_high_ms"
                        class="form-control rounded-top @error('panel_high_ms') is-invalid @enderror" id="panel_high_ms"
                        placeholder="panel_high_ms" value="{{ old('panel_high_ms') }}">
                    <label for="panel_high_ms">Harga Panel Akustik High (D120)</label>
                    @error('panel_high_ms')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-2">
                    <input type="text" name="panel_deluxe_ms"
                        class="form-control rounded-top @error('panel_deluxe_ms') is-invalid @enderror" id="panel_deluxe_ms"
                        placeholder="panel_deluxe_ms" value="{{ old('panel_deluxe_ms') }}">
                    <label for="panel_deluxe_ms">Harga Panel Akustik Deluxe (D140)</label>
                    @error('panel_deluxe_ms')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <button class="w-100 btn btn-lg btn-primary bg-dark" type="submit">Update Harga Music Studio</button>
            </form>
        </div>

        <div class="col-lg-9 mt-2 mb-4 justify-content-center" style="font-size: 14px;">
            <h3 class="mt-4 mb-1 text-center border-bottom border-dark pb-2">Harga Music Studio <small>(Terakhir di
                    Update)</small></h3>
            <table class="table border-dark table-bordered">
                <thead>
                    <tr>
                        <td scope="col">Harga Gypsum Standard (D80)</td>
                        <td scope="col">Harga Gypsum Medium (D100)</td>
                        <td scope="col">Harga Gypsum High (D120)</td>
                        <td scope="col">Harga Panel Akustik Standard (D80)</td>
                        <td scope="col">Harga Panel Akustik Medium (D100)</td>
                        <td scope="col">Harga Panel Akustik High (D120)</td>
                        <td scope="col">Harga Panel Akustik Deluxe (D140)</td>
                        <td scope="col">Tgl Update</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php if ($ms == null) {
                            echo '0 /m2';
                        } else {
                            echo $ms->gypsum_standard_ms . ' /m2';
                        } ?></td>
                        <td><?php if ($ms == null) {
                            echo '0 /m2';
                        } else {
                            echo $ms->gypsum_medium_ms . ' /m2';
                        } ?></td>
                        <td><?php if ($ms == null) {
                            echo '0 /m2';
                        } else {
                            echo $ms->gypsum_high_ms . ' /m2';
                        } ?></td>
                        <td><?php if ($ms == null) {
                            echo '0 /m2';
                        } else {
                            echo $ms->panel_standard_ms . ' /m2';
                        } ?></td>
                        <td><?php if ($ms == null) {
                            echo '0 /m2';
                        } else {
                            echo $ms->panel_medium_ms . ' /m2';
                        } ?></td>
                        <td><?php if ($ms == null) {
                            echo '0 /m2';
                        } else {
                            echo $ms->panel_high_ms . ' /m2';
                        } ?></td>
                        <td><?php if ($ms == null) {
                            echo '0 /m2';
                        } else {
                            echo $ms->panel_deluxe_ms . ' /m2';
                        } ?></td>
                        <td><?php if ($ms == null) {
                            echo 'Data Kosong';
                        } else {
                            echo $ms->updated_at->diffForHumans();
                        } ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    {{-- Harga Proyek Karaoke Room --}}
    <div class="row justify-content-center">
        <div class="col-md-3 bg-light mt-2 p-3">
            <h1 class="h3 mb-3 fw-normal text-center">Harga Proyek Karaoke Room</h1>
            <form action="/harga_peredam@hargaKaraokeRoom" method="post">
                @csrf
                <div class="form-floating mb-2">
                    <input type="text" name="gypsum_standard_kr"
                        class="form-control rounded-top @error('gypsum_standard_kr') is-invalid @enderror"
                        id="gypsum_standard_kr" placeholder="gypsum_standard_kr"
                        value="{{ old('gypsum_standard_kr') }}">
                    <label for="gypsum_standard_kr">Harga Gypsum Standard (D80)</label>
                    @error('gypsum_standard_kr')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-2">
                    <input type="text" name="gypsum_medium_kr"
                        class="form-control rounded-top @error('gypsum_medium_kr') is-invalid @enderror"
                        id="gypsum_medium_kr" placeholder="gypsum_medium_kr" value="{{ old('gypsum_medium_kr') }}">
                    <label for="gypsum_medium_kr">Harga Gypsum Medium (D100)</label>
                    @error('gypsum_medium_kr')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-2">
                    <input type="text" name="gypsum_high_kr"
                        class="form-control rounded-top @error('gypsum_high_kr') is-invalid @enderror"
                        id="gypsum_high_kr" placeholder="gypsum_high_kr" value="{{ old('gypsum_high_kr') }}">
                    <label for="gypsum_high_kr">Harga Gypsum High (D120)</label>
                    @error('gypsum_high_kr')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-2">
                    <input type="text" name="panel_standard_kr"
                        class="form-control rounded-top @error('panel_standard_kr') is-invalid @enderror"
                        id="panel_standard_kr" placeholder="panel_standard_kr" value="{{ old('panel_standard_kr') }}">
                    <label for="panel_standard_kr">Harga Panel Akustik Standard (D80)</label>
                    @error('panel_standard_kr')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-2">
                    <input type="text" name="panel_medium_kr"
                        class="form-control rounded-top @error('panel_medium_kr') is-invalid @enderror"
                        id="panel_medium_kr" placeholder="panel_medium_kr" value="{{ old('panel_medium_kr') }}">
                    <label for="panel_medium_kr">Harga Panel Akustik Medium (D100)</label>
                    @error('panel_medium_kr')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-2">
                    <input type="text" name="panel_high_kr"
                        class="form-control rounded-top @error('panel_high_kr') is-invalid @enderror" id="panel_high_kr"
                        placeholder="panel_high_kr" value="{{ old('panel_high_kr') }}">
                    <label for="panel_high_kr">Harga Panel Akustik High (D120)</label>
                    @error('panel_high_kr')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-2">
                    <input type="text" name="panel_deluxe_kr"
                        class="form-control rounded-top @error('panel_deluxe_kr') is-invalid @enderror" id="panel_deluxe_kr"
                        placeholder="panel_deluxe_kr" value="{{ old('panel_deluxe_kr') }}">
                    <label for="panel_deluxe_kr">Harga Panel Akustik Deluxe (D140)</label>
                    @error('panel_deluxe_kr')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <button class="w-100 btn btn-lg btn-primary bg-dark" type="submit">Update Harga Karaoke Room</button>
            </form>
        </div>

        <div class="col-lg-9 mt-2 mb-4 justify-content-center" style="font-size: 14px;">
            <h3 class="mt-4 mb-1 text-center border-bottom border-dark pb-2">Harga Karaoke Room <small>(Terakhir di
                    Update)</small></h3>
            <table class="table border-dark table-bordered">
                <thead>
                    <tr>
                        <td scope="col">Harga Gypsum Standard (D80)</td>
                        <td scope="col">Harga Gypsum Medium (D100)</td>
                        <td scope="col">Harga Gypsum High (D120)</td>
                        <td scope="col">Harga Panel Akustik Standard (D80)</td>
                        <td scope="col">Harga Panel Akustik Medium (D100)</td>
                        <td scope="col">Harga Panel Akustik High (D120)</td>
                        <td scope="col">Harga Panel Akustik Deluxe (D140)</td>
                        <td scope="col">Tgl Update</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php if ($kr == null) {
                            echo '0 /m2';
                        } else {
                            echo $kr->gypsum_standard_kr . ' /m2';
                        } ?></td>
                        <td><?php if ($kr == null) {
                            echo '0 /m2';
                        } else {
                            echo $kr->gypsum_medium_kr . ' /m2';
                        } ?></td>
                        <td><?php if ($kr == null) {
                            echo '0 /m2';
                        } else {
                            echo $kr->gypsum_high_kr . ' /m2';
                        } ?></td>
                        <td><?php if ($kr == null) {
                            echo '0 /m2';
                        } else {
                            echo $kr->panel_standard_kr . ' /m2';
                        } ?></td>
                        <td><?php if ($kr == null) {
                            echo '0 /m2';
                        } else {
                            echo $kr->panel_medium_kr . ' /m2';
                        } ?></td>
                        <td><?php if ($kr == null) {
                            echo '0 /m2';
                        } else {
                            echo $kr->panel_high_kr . ' /m2';
                        } ?></td>
                        <td><?php if ($kr == null) {
                            echo '0 /m2';
                        } else {
                            echo $kr->panel_deluxe_kr . ' /m2';
                        } ?></td>
                        <td><?php if ($kr == null) {
                            echo 'Data Kosong';
                        } else {
                            echo $kr->updated_at->diffForHumans();
                        } ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    {{-- Harga Proyek Gaming Room --}}
    <div class="row justify-content-center">
        <div class="col-md-3 bg-light mt-2 p-3">
            <h1 class="h3 mb-3 fw-normal text-center">Harga Proyek Gaming Room</h1>
            <form action="/harga_peredam@hargaGamingRoom" method="post">
                @csrf
                <div class="form-floating mb-2">
                    <input type="text" name="gypsum_standard_gr"
                        class="form-control rounded-top @error('gypsum_standard_gr') is-invalid @enderror"
                        id="gypsum_standard_gr" placeholder="gypsum_standard_gr"
                        value="{{ old('gypsum_standard_gr') }}">
                    <label for="gypsum_standard_gr">Harga Gypsum Standard (D60)</label>
                    @error('gypsum_standard_gr')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-2">
                    <input type="text" name="gypsum_medium_gr"
                        class="form-control rounded-top @error('gypsum_medium_gr') is-invalid @enderror"
                        id="gypsum_medium_gr" placeholder="gypsum_medium_gr" value="{{ old('gypsum_medium_gr') }}">
                    <label for="gypsum_medium_gr">Harga Gypsum Medium (D80)</label>
                    @error('gypsum_medium_gr')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-2">
                    <input type="text" name="gypsum_high_gr"
                        class="form-control rounded-top @error('gypsum_high_gr') is-invalid @enderror"
                        id="gypsum_high_gr" placeholder="gypsum_high_gr" value="{{ old('gypsum_high_gr') }}">
                    <label for="gypsum_high_gr">Harga Gypsum High (D100)</label>
                    @error('gypsum_high_gr')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-2">
                    <input type="text" name="panel_standard_gr"
                        class="form-control rounded-top @error('panel_standard_gr') is-invalid @enderror"
                        id="panel_standard_gr" placeholder="panel_standard_gr" value="{{ old('panel_standard_gr') }}">
                    <label for="panel_standard_gr">Harga Panel Akustik Standard (D60)</label>
                    @error('panel_standard_gr')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-2">
                    <input type="text" name="panel_medium_gr"
                        class="form-control rounded-top @error('panel_medium_gr') is-invalid @enderror"
                        id="panel_medium_gr" placeholder="panel_medium_gr" value="{{ old('panel_medium_gr') }}">
                    <label for="panel_medium_gr">Harga Panel Akustik Medium (D80)</label>
                    @error('panel_medium_gr')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-2">
                    <input type="text" name="panel_high_gr"
                        class="form-control rounded-top @error('panel_high_gr') is-invalid @enderror" id="panel_high_gr"
                        placeholder="panel_high_gr" value="{{ old('panel_high_gr') }}">
                    <label for="panel_high_gr">Harga Panel Akustik High (D100)</label>
                    @error('panel_high_gr')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-2">
                    <input type="text" name="panel_deluxe_gr"
                        class="form-control rounded-top @error('panel_deluxe_gr') is-invalid @enderror" id="panel_deluxe_gr"
                        placeholder="panel_deluxe_gr" value="{{ old('panel_deluxe_gr') }}">
                    <label for="panel_deluxe_gr">Harga Panel Akustik Deluxe (D120)</label>
                    @error('panel_deluxe_gr')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <button class="w-100 btn btn-lg btn-primary bg-dark" type="submit">Update Harga Gaming Room</button>
            </form>
        </div>

        <div class="col-lg-9 mt-2 mb-4 justify-content-center" style="font-size: 14px;">
            <h3 class="mt-4 mb-1 text-center border-bottom border-dark pb-2">Harga Gaming Room <small>(Terakhir di
                    Update)</small></h3>
            <table class="table border-dark table-bordered">
                <thead>
                    <tr>
                        <td scope="col">Harga Gypsum Standard (D60)</td>
                        <td scope="col">Harga Gypsum Medium (D80)</td>
                        <td scope="col">Harga Gypsum High (D100)</td>
                        <td scope="col">Harga Panel Akustik Standard (D60)</td>
                        <td scope="col">Harga Panel Akustik Medium (D80)</td>
                        <td scope="col">Harga Panel Akustik High (D100)</td>
                        <td scope="col">Harga Panel Akustik Deluxe (D120)</td>
                        <td scope="col">Tgl Update</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php if ($gr == null) {
                            echo '0 /m2';
                        } else {
                            echo $gr->gypsum_standard_gr . ' /m2';
                        } ?></td>
                        <td><?php if ($gr == null) {
                            echo '0 /m2';
                        } else {
                            echo $gr->gypsum_medium_gr . ' /m2';
                        } ?></td>
                        <td><?php if ($gr == null) {
                            echo '0 /m2';
                        } else {
                            echo $gr->gypsum_high_gr . ' /m2';
                        } ?></td>
                        <td><?php if ($gr == null) {
                            echo '0 /m2';
                        } else {
                            echo $gr->panel_standard_gr . ' /m2';
                        } ?></td>
                        <td><?php if ($gr == null) {
                            echo '0 /m2';
                        } else {
                            echo $gr->panel_medium_gr . ' /m2';
                        } ?></td>
                        <td><?php if ($gr == null) {
                            echo '0 /m2';
                        } else {
                            echo $gr->panel_high_gr . ' /m2';
                        } ?></td>
                        <td><?php if ($gr == null) {
                            echo '0 /m2';
                        } else {
                            echo $gr->panel_deluxe_gr . ' /m2';
                        } ?></td>
                        <td><?php if ($gr == null) {
                            echo 'Data Kosong';
                        } else {
                            echo $gr->updated_at->diffForHumans();
                        } ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
