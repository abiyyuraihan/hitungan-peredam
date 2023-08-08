@extends('admin.admin')

@section('container_admin')
    <center class="mb-2">
        <input type="radio" onclick="MrEsCheck()" name="mr" id="mrEsCheck" checked> Meeting Room (Empat
        Sisi)&nbsp;&nbsp;&nbsp;
        <input type="radio" onclick="MrLsCheck()" name="mr" id="mrLsCheck"> Meeting Room (Lima Sisi)&nbsp;&nbsp;&nbsp;
        <input type="radio" onclick="MrEnsCheck()" name="mr" id="mrEnsCheck"> Meeting Room (Enam Sisi)
    </center>
    <div class="row border border-dark p-3 mb-2" id="mrEsActive">
        <div class="col-sm-3">
            <p class="mb-2 fw-normal text-center">Penawaran 4 Sisi Meeting Room<br>" Gypsum Standard "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_es_mr_gs as $es_mr_gs)
                        <tr>
                            <td><?php if ($es_mr_gs == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($es_mr_gs == null) {
                                echo 'blm ada';
                            } else {
                                echo $es_mr_gs->id;
                            }
                            ?></td>
                            <td><?php if ($es_mr_gs == null) {
                                echo 'blm ada';
                            } else {
                                echo $es_mr_gs->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_es_mr_gs->count())
                                    <a href="mr_penawaran_es_gs/{{ $es_mr_gs->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_es_mr_gs->links() }}
        </div>
        <div class="col-sm-3">
            <p class="mb-2 fw-normal text-center">Penawaran 4 Sisi Meeting Room<br>" Gypsum Medium "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_es_mr_gm as $es_mr_gm)
                        <tr>
                            <td><?php if ($es_mr_gm == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($es_mr_gm == null) {
                                echo 'blm ada';
                            } else {
                                echo $es_mr_gm->id;
                            }
                            ?></td>
                            <td><?php if ($es_mr_gm == null) {
                                echo 'blm ada';
                            } else {
                                echo $es_mr_gm->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_es_mr_gm->count())
                                    <a href="mr_penawaran_es_gm/{{ $es_mr_gm->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_es_mr_gm->links() }}
        </div>
        <div class="col-sm-3">
            <p class="mb-2 fw-normal text-center">Penawaran 4 Sisi Meeting Room<br>" Panel Akustik Standard "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_es_mr_as as $es_mr_as)
                        <tr>
                            <td><?php if ($es_mr_as == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($es_mr_as == null) {
                                echo 'blm ada';
                            } else {
                                echo $es_mr_as->id;
                            }
                            ?></td>
                            <td><?php if ($es_mr_as == null) {
                                echo 'blm ada';
                            } else {
                                echo $es_mr_as->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_es_mr_as->count())
                                    <a href="mr_penawaran_es_as/{{ $es_mr_as->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_es_mr_as->links() }}
        </div>
        <div class="col-sm-3">
            <p class="mb-2 fw-normal text-center">Penawaran 4 Sisi Meeting Room<br>" Panel Akustik Medium "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_es_mr_am as $es_mr_am)
                        <tr>
                            <td><?php if ($es_mr_am == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($es_mr_am == null) {
                                echo 'blm ada';
                            } else {
                                echo $es_mr_am->id;
                            }
                            ?></td>
                            <td><?php if ($es_mr_am == null) {
                                echo 'blm ada';
                            } else {
                                echo $es_mr_am->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_es_mr_am->count())
                                    <a href="mr_penawaran_es_am/{{ $es_mr_am->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_es_mr_am->links() }}
        </div>
        <center>
            <div class="col-lg-6">
                <p class="mb-2 fw-normal text-center">Penawaran 4 Sisi Meeting Room<br>" Panel Akustik High "</p>
                <table class="table table-dark table-striped text-center">
                    <thead>
                        <tr>
                            <td scope="col">No.</td>
                            <td scope="col">ID</td>
                            <td scope="col">Nama Customer</td>
                            <td scope="col">Lihat Invoice</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($p_es_mr_ah as $es_mr_ah)
                            <tr>
                                <td><?php if ($es_mr_ah == null) {
                                    echo '1';
                                } else {
                                    echo $loop->iteration;
                                }
                                ?></td>
                                <td><?php if ($es_mr_ah == null) {
                                    echo 'blm ada';
                                } else {
                                    echo $es_mr_ah->id;
                                }
                                ?></td>
                                <td><?php if ($es_mr_ah == null) {
                                    echo 'blm ada';
                                } else {
                                    echo $es_mr_ah->nama;
                                }
                                ?></td>
                                <td>
                                    @if ($p_es_mr_ah->count())
                                        <a href="mr_penawaran_es_ah/{{ $es_mr_ah->id }}" class="badge bg-info"><i
                                                class="bi bi-eye"></i></a>
                                    @else
                                        <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $p_es_mr_ah->links() }}
            </div>
        </center>
    </div>

    <div class="row border border-dark p-3 mb-2" id="mrLsActive" style="display: none;">
        <div class="col-sm-3">
            <p class="mb-2 fw-normal text-center">Penawaran 5 Sisi Meeting Room<br>" Gypsum Standard "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ls_mr_gs as $ls_mr_gs)
                        <tr>
                            <td><?php if ($ls_mr_gs == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ls_mr_gs == null) {
                                echo 'blm ada';
                            } else {
                                echo $ls_mr_gs->id;
                            }
                            ?></td>
                            <td><?php if ($ls_mr_gs == null) {
                                echo 'blm ada';
                            } else {
                                echo $ls_mr_gs->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ls_mr_gs->count())
                                    <a href="mr_penawaran_ls_gs/{{ $ls_mr_gs->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ls_mr_gs->links() }}
        </div>
        <div class="col-sm-3">
            <p class="mb-2 fw-normal text-center">Penawaran 5 Sisi Meeting Room<br>" Gypsum Medium "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ls_mr_gm as $ls_mr_gm)
                        <tr>
                            <td><?php if ($ls_mr_gm == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ls_mr_gm == null) {
                                echo 'blm ada';
                            } else {
                                echo $ls_mr_gm->id;
                            }
                            ?></td>
                            <td><?php if ($ls_mr_gm == null) {
                                echo 'blm ada';
                            } else {
                                echo $ls_mr_gm->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ls_mr_gm->count())
                                    <a href="mr_penawaran_ls_gm/{{ $ls_mr_gm->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ls_mr_gm->links() }}
        </div>
        <div class="col-sm-3">
            <p class="mb-2 fw-normal text-center">Penawaran 5 Sisi Meeting Room<br>" Panel Akustik Standard "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ls_mr_as as $ls_mr_as)
                        <tr>
                            <td><?php if ($ls_mr_as == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ls_mr_as == null) {
                                echo 'blm ada';
                            } else {
                                echo $ls_mr_as->id;
                            }
                            ?></td>
                            <td><?php if ($ls_mr_as == null) {
                                echo 'blm ada';
                            } else {
                                echo $ls_mr_as->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ls_mr_as->count())
                                    <a href="mr_penawaran_ls_as/{{ $ls_mr_as->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ls_mr_as->links() }}
        </div>
        <div class="col-sm-3">
            <p class="mb-2 fw-normal text-center">Penawaran 5 Sisi Meeting Room<br>" Panel Akustik Medium "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ls_mr_am as $ls_mr_am)
                        <tr>
                            <td><?php if ($ls_mr_am == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ls_mr_am == null) {
                                echo 'blm ada';
                            } else {
                                echo $ls_mr_am->id;
                            }
                            ?></td>
                            <td><?php if ($ls_mr_am == null) {
                                echo 'blm ada';
                            } else {
                                echo $ls_mr_am->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ls_mr_am->count())
                                    <a href="mr_penawaran_ls_am/{{ $ls_mr_am->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ls_mr_am->links() }}
        </div>
        <center>
            <div class="col-lg-6">
                <p class="mb-2 fw-normal text-center">Penawaran 5 Sisi Meeting Room<br>" Panel Akustik High "</p>
                <table class="table table-dark table-striped text-center">
                    <thead>
                        <tr>
                            <td scope="col">No.</td>
                            <td scope="col">ID</td>
                            <td scope="col">Nama Customer</td>
                            <td scope="col">Lihat Invoice</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($p_ls_mr_ah as $ls_mr_ah)
                            <tr>
                                <td><?php if ($ls_mr_ah == null) {
                                    echo '1';
                                } else {
                                    echo $loop->iteration;
                                }
                                ?></td>
                                <td><?php if ($ls_mr_ah == null) {
                                    echo 'blm ada';
                                } else {
                                    echo $ls_mr_ah->id;
                                }
                                ?></td>
                                <td><?php if ($ls_mr_ah == null) {
                                    echo 'blm ada';
                                } else {
                                    echo $ls_mr_ah->nama;
                                }
                                ?></td>
                                <td>
                                    @if ($p_ls_mr_ah->count())
                                        <a href="mr_penawaran_ls_ah/{{ $ls_mr_ah->id }}" class="badge bg-info"><i
                                                class="bi bi-eye"></i></a>
                                    @else
                                        <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $p_ls_mr_ah->links() }}
            </div>
        </center>
    </div>

    <div class="row border border-dark p-3 mb-2" id="mrEnsActive" style="display: none;">
        <div class="col-sm-3">
            <p class="mb-2 fw-normal text-center">Penawaran 6 Sisi Meeting Room<br>" Gypsum Standard "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ens_mr_gs as $ens_mr_gs)
                        <tr>
                            <td><?php if ($ens_mr_gs == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ens_mr_gs == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_mr_gs->id;
                            }
                            ?></td>
                            <td><?php if ($ens_mr_gs == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_mr_gs->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ens_mr_gs->count())
                                    <a href="mr_penawaran_ens_gs/{{ $ens_mr_gs->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ens_mr_gs->links() }}
        </div>
        <div class="col-sm-3">
            <p class="mb-2 fw-normal text-center">Penawaran 6 Sisi Meeting Room<br>" Gypsum Medium "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ens_mr_gm as $ens_mr_gm)
                        <tr>
                            <td><?php if ($ens_mr_gm == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ens_mr_gm == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_mr_gm->id;
                            }
                            ?></td>
                            <td><?php if ($ens_mr_gm == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_mr_gm->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ens_mr_gm->count())
                                    <a href="mr_penawaran_ens_gm/{{ $ens_mr_gm->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ens_mr_gm->links() }}
        </div>
        <div class="col-sm-3">
            <p class="mb-2 fw-normal text-center">Penawaran 6 Sisi Meeting Room<br>" Panel Akustik Standard "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ens_mr_as as $ens_mr_as)
                        <tr>
                            <td><?php if ($ens_mr_as == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ens_mr_as == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_mr_as->id;
                            }
                            ?></td>
                            <td><?php if ($ens_mr_as == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_mr_as->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ens_mr_as->count())
                                    <a href="mr_penawaran_ens_as/{{ $ens_mr_as->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ens_mr_as->links() }}
        </div>
        <div class="col-sm-3">
            <p class="mb-2 fw-normal text-center">Penawaran 6 Sisi Meeting Room<br>" Panel Akustik Medium "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ens_mr_am as $ens_mr_am)
                        <tr>
                            <td><?php if ($ens_mr_am == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ens_mr_am == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_mr_am->id;
                            }
                            ?></td>
                            <td><?php if ($ens_mr_am == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_mr_am->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ens_mr_am->count())
                                    <a href="mr_penawaran_ens_am/{{ $ens_mr_am->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ens_mr_am->links() }}
        </div>
        <center>
            <div class="col-lg-6">
                <p class="mb-2 fw-normal text-center">Penawaran 6 Sisi Meeting Room<br>" Panel Akustik High "</p>
                <table class="table table-dark table-striped text-center">
                    <thead>
                        <tr>
                            <td scope="col">No.</td>
                            <td scope="col">ID</td>
                            <td scope="col">Nama Customer</td>
                            <td scope="col">Lihat Invoice</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($p_ens_mr_ah as $ens_mr_ah)
                            <tr>
                                <td><?php if ($ens_mr_ah == null) {
                                    echo '1';
                                } else {
                                    echo $loop->iteration;
                                }
                                ?></td>
                                <td><?php if ($ens_mr_ah == null) {
                                    echo 'blm ada';
                                } else {
                                    echo $ens_mr_ah->id;
                                }
                                ?></td>
                                <td><?php if ($ens_mr_ah == null) {
                                    echo 'blm ada';
                                } else {
                                    echo $ens_mr_ah->nama;
                                }
                                ?></td>
                                <td>
                                    @if ($p_ens_mr_ah->count())
                                        <a href="mr_penawaran_ens_ah/{{ $ens_mr_ah->id }}" class="badge bg-info"><i
                                                class="bi bi-eye"></i></a>
                                    @else
                                        <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $p_ens_mr_ah->links() }}
            </div>
        </center>
    </div>
    {{-- End Meeting Room --}}

    {{-- Podcast Room --}}
    <center class="mb-2">
        <input type="radio" onclick="PrEsCheck()" name="pr" id="prEsCheck" checked> Podcast Room (Empat
        Sisi)&nbsp;&nbsp;&nbsp;
        <input type="radio" onclick="PrLsCheck()" name="pr" id="prLsCheck"> Podcast Room (Lima
        Sisi)&nbsp;&nbsp;&nbsp;
        <input type="radio" onclick="PrEnsCheck()" name="pr" id="prEnsCheck"> Podcast Room (Enam Sisi)
    </center>
    <div class="row border border-dark p-3 mb-2" id="prEsActive">
        <div class="col-sm-3">
            <p class="mb-2 fw-normal text-center">Penawaran 4 Sisi Podcast Room<br>" Gypsum Standard "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_es_pr_gs as $es_pr_gs)
                        <tr>
                            <td><?php if ($es_pr_gs == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($es_pr_gs == null) {
                                echo 'blm ada';
                            } else {
                                echo $es_pr_gs->id;
                            }
                            ?></td>
                            <td><?php if ($es_pr_gs == null) {
                                echo 'blm ada';
                            } else {
                                echo $es_pr_gs->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_es_pr_gs->count())
                                    <a href="pr_penawaran_es_gs/{{ $es_pr_gs->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_es_pr_gs->links() }}
        </div>
        <div class="col-sm-3">
            <p class="mb-2 fw-normal text-center">Penawaran 4 Sisi Podcast Room<br>" Gypsum Medium "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_es_pr_gm as $es_pr_gm)
                        <tr>
                            <td><?php if ($es_pr_gm == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($es_pr_gm == null) {
                                echo 'blm ada';
                            } else {
                                echo $es_pr_gm->id;
                            }
                            ?></td>
                            <td><?php if ($es_pr_gm == null) {
                                echo 'blm ada';
                            } else {
                                echo $es_pr_gm->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_es_pr_gm->count())
                                    <a href="pr_penawaran_es_gm/{{ $es_pr_gm->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_es_pr_gm->links() }}
        </div>

        <div class="col-sm-3">
            <p class="mb-2 fw-normal text-center">Penawaran 4 Sisi Podcast Room<br>" Panel Akustik Standard "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_es_pr_as as $es_pr_as)
                        <tr>
                            <td><?php if ($es_pr_as == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($es_pr_as == null) {
                                echo 'blm ada';
                            } else {
                                echo $es_pr_as->id;
                            }
                            ?></td>
                            <td><?php if ($es_pr_as == null) {
                                echo 'blm ada';
                            } else {
                                echo $es_pr_as->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_es_pr_as->count())
                                    <a href="pr_penawaran_es_as/{{ $es_pr_as->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_es_pr_as->links() }}
        </div>

        <div class="col-sm-3">
            <p class="mb-2 fw-normal text-center">Penawaran 4 Sisi Podcast Room<br>" Panel Akustik Medium "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_es_pr_am as $es_pr_am)
                        <tr>
                            <td><?php if ($es_pr_am == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($es_pr_am == null) {
                                echo 'blm ada';
                            } else {
                                echo $es_pr_am->id;
                            }
                            ?></td>
                            <td><?php if ($es_pr_am == null) {
                                echo 'blm ada';
                            } else {
                                echo $es_pr_am->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_es_pr_am->count())
                                    <a href="pr_penawaran_es_am/{{ $es_pr_am->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_es_pr_am->links() }}
        </div>

        <center>
            <div class="col-lg-6">
                <p class="mb-2 fw-normal text-center">Penawaran 4 Sisi Podcast Room<br>" Panel Akustik High "</p>
                <table class="table table-dark table-striped text-center">
                    <thead>
                        <tr>
                            <td scope="col">No.</td>
                            <td scope="col">ID</td>
                            <td scope="col">Nama Customer</td>
                            <td scope="col">Lihat Invoice</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($p_es_pr_ah as $es_pr_ah)
                            <tr>
                                <td><?php if ($es_pr_ah == null) {
                                    echo '1';
                                } else {
                                    echo $loop->iteration;
                                }
                                ?></td>
                                <td><?php if ($es_pr_ah == null) {
                                    echo 'blm ada';
                                } else {
                                    echo $es_pr_ah->id;
                                }
                                ?></td>
                                <td><?php if ($es_pr_ah == null) {
                                    echo 'blm ada';
                                } else {
                                    echo $es_pr_ah->nama;
                                }
                                ?></td>
                                <td>
                                    @if ($p_es_pr_ah->count())
                                        <a href="pr_penawaran_es_ah/{{ $es_pr_ah->id }}" class="badge bg-info"><i
                                                class="bi bi-eye"></i></a>
                                    @else
                                        <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $p_es_pr_ah->links() }}
            </div>
        </center>

    </div>

    <div class="row border border-dark p-3 mb-2" id="prLsActive" style="display: none;">
        <div class="col-sm-3">
            <p class="mb-2 fw-normal text-center">Penawaran 5 Sisi Podcast Room<br>" Gypsum Standard "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ls_pr_gs as $ls_pr_gs)
                        <tr>
                            <td><?php if ($ls_pr_gs == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ls_pr_gs == null) {
                                echo 'blm ada';
                            } else {
                                echo $ls_pr_gs->id;
                            }
                            ?></td>
                            <td><?php if ($ls_pr_gs == null) {
                                echo 'blm ada';
                            } else {
                                echo $ls_pr_gs->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ls_pr_gs->count())
                                    <a href="pr_penawaran_ls_gs/{{ $ls_pr_gs->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ls_pr_gs->links() }}
        </div>

        <div class="col-sm-3">
            <p class="mb-2 fw-normal text-center">Penawaran 5 Sisi Podcast Room<br>" Gypsum Medium "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ls_pr_gm as $ls_pr_gm)
                        <tr>
                            <td><?php if ($ls_pr_gm == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ls_pr_gm == null) {
                                echo 'blm ada';
                            } else {
                                echo $ls_pr_gm->id;
                            }
                            ?></td>
                            <td><?php if ($ls_pr_gm == null) {
                                echo 'blm ada';
                            } else {
                                echo $ls_pr_gm->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ls_pr_gm->count())
                                    <a href="pr_penawaran_ls_gm/{{ $ls_pr_gm->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ls_pr_gm->links() }}
        </div>

        <div class="col-sm-3">
            <p class="mb-2 fw-normal text-center">Penawaran 5 Sisi Podcast Room<br>" Panel Akustik Standard "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ls_pr_as as $ls_pr_as)
                        <tr>
                            <td><?php if ($ls_pr_as == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ls_pr_as == null) {
                                echo 'blm ada';
                            } else {
                                echo $ls_pr_as->id;
                            }
                            ?></td>
                            <td><?php if ($ls_pr_as == null) {
                                echo 'blm ada';
                            } else {
                                echo $ls_pr_as->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ls_pr_as->count())
                                    <a href="pr_penawaran_ls_as/{{ $ls_pr_as->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ls_pr_as->links() }}
        </div>

        <div class="col-sm-3">
            <p class="mb-2 fw-normal text-center">Penawaran 5 Sisi Podcast Room<br>" Panel Akustik Medium "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ls_pr_am as $ls_pr_am)
                        <tr>
                            <td><?php if ($ls_pr_am == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ls_pr_am == null) {
                                echo 'blm ada';
                            } else {
                                echo $ls_pr_am->id;
                            }
                            ?></td>
                            <td><?php if ($ls_pr_am == null) {
                                echo 'blm ada';
                            } else {
                                echo $ls_pr_am->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ls_pr_am->count())
                                    <a href="pr_penawaran_ls_am/{{ $ls_pr_am->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ls_pr_am->links() }}
        </div>
        <center>
            <div class="col-lg-6">
                <p class="mb-2 fw-normal text-center">Penawaran 5 Sisi Podcast Room<br>" Panel Akustik High "</p>
                <table class="table table-dark table-striped text-center">
                    <thead>
                        <tr>
                            <td scope="col">No.</td>
                            <td scope="col">ID</td>
                            <td scope="col">Nama Customer</td>
                            <td scope="col">Lihat Invoice</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($p_ls_pr_ah as $ls_pr_ah)
                            <tr>
                                <td><?php if ($ls_pr_ah == null) {
                                    echo '1';
                                } else {
                                    echo $loop->iteration;
                                }
                                ?></td>
                                <td><?php if ($ls_pr_ah == null) {
                                    echo 'blm ada';
                                } else {
                                    echo $ls_pr_ah->id;
                                }
                                ?></td>
                                <td><?php if ($ls_pr_ah == null) {
                                    echo 'blm ada';
                                } else {
                                    echo $ls_pr_ah->nama;
                                }
                                ?></td>
                                <td>
                                    @if ($p_ls_pr_ah->count())
                                        <a href="pr_penawaran_ls_ah/{{ $ls_pr_ah->id }}" class="badge bg-info"><i
                                                class="bi bi-eye"></i></a>
                                    @else
                                        <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $p_ls_pr_ah->links() }}
            </div>
        </center>
    </div>

    <div class="row border border-dark p-3 mb-2" id="prEnsActive" style="display: none;">
        <div class="col-sm-3">
            <p class="mb-2 fw-normal text-center">Penawaran 6 Sisi Podcast Room<br>" Gypsum Standard "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ens_pr_gs as $ens_pr_gs)
                        <tr>
                            <td><?php if ($ens_pr_gs == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ens_pr_gs == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_pr_gs->id;
                            }
                            ?></td>
                            <td><?php if ($ens_pr_gs == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_pr_gs->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ens_pr_gs->count())
                                    <a href="pr_penawaran_ens_gs/{{ $ens_pr_gs->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ens_pr_gs->links() }}
        </div>

        <div class="col-sm-3">
            <p class="mb-2 fw-normal text-center">Penawaran 6 Sisi Podcast Room<br>" Gypsum Medium "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ens_pr_gm as $ens_pr_gm)
                        <tr>
                            <td><?php if ($ens_pr_gm == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ens_pr_gm == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_pr_gm->id;
                            }
                            ?></td>
                            <td><?php if ($ens_pr_gm == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_pr_gm->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ens_pr_gm->count())
                                    <a href="pr_penawaran_ens_gm/{{ $ens_pr_gm->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ens_pr_gm->links() }}
        </div>

        <div class="col-sm-3">
            <p class="mb-2 fw-normal text-center">Penawaran 6 Sisi Podcast Room<br>" Panel Akustik Standard "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ens_pr_as as $ens_pr_as)
                        <tr>
                            <td><?php if ($ens_pr_as == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ens_pr_as == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_pr_as->id;
                            }
                            ?></td>
                            <td><?php if ($ens_pr_as == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_pr_as->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ens_pr_as->count())
                                    <a href="pr_penawaran_ens_as/{{ $ens_pr_as->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ens_pr_as->links() }}
        </div>
        <div class="col-sm-3">
            <p class="mb-2 fw-normal text-center">Penawaran 6 Sisi Podcast Room<br>" Panel Akustik Medium "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ens_pr_am as $ens_pr_am)
                        <tr>
                            <td><?php if ($ens_pr_am == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ens_pr_am == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_pr_am->id;
                            }
                            ?></td>
                            <td><?php if ($ens_pr_am == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_pr_am->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ens_pr_am->count())
                                    <a href="pr_penawaran_ens_am/{{ $ens_pr_am->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ens_pr_am->links() }}
        </div>

        <center>
            <div class="col-lg-6">
                <p class="mb-2 fw-normal text-center">Penawaran 6 Sisi Podcast Room<br>" Panel Akustik High "</p>
                <table class="table table-dark table-striped text-center">
                    <thead>
                        <tr>
                            <td scope="col">No.</td>
                            <td scope="col">ID</td>
                            <td scope="col">Nama Customer</td>
                            <td scope="col">Lihat Invoice</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($p_ens_pr_ah as $ens_pr_ah)
                            <tr>
                                <td><?php if ($ens_pr_ah == null) {
                                    echo '1';
                                } else {
                                    echo $loop->iteration;
                                }
                                ?></td>
                                <td><?php if ($ens_pr_ah == null) {
                                    echo 'blm ada';
                                } else {
                                    echo $ens_pr_ah->id;
                                }
                                ?></td>
                                <td><?php if ($ens_pr_ah == null) {
                                    echo 'blm ada';
                                } else {
                                    echo $ens_pr_ah->nama;
                                }
                                ?></td>
                                <td>
                                    @if ($p_ens_pr_ah->count())
                                        <a href="pr_penawaran_ens_ah/{{ $ens_pr_ah->id }}" class="badge bg-info"><i
                                                class="bi bi-eye"></i></a>
                                    @else
                                        <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $p_ens_pr_ah->links() }}
            </div>
        </center>
    </div>
    <center class="mb-2">
        <input type="radio" onclick="MsEsCheck()" name="ms" id="msEsCheck" checked> Music Studio (Empat
        Sisi) &nbsp;&nbsp;&nbsp;
        <input type="radio" onclick="MsLsCheck()" name="ms" id="msLsCheck"> Music Studio (Lima Sisi)
        &nbsp;&nbsp;&nbsp;
        <input type="radio" onclick="MsEnsCheck()" name="ms" id="msEnsCheck"> Music Studio (Enam Sisi)
        &nbsp;&nbsp;&nbsp;
        <input type="radio" onclick="MsOCheck()" name="ms" id="msOCheck"> Music Studio & Operator
        &nbsp;&nbsp;&nbsp;
        <input type="radio" onclick="MsOECheck()" name="ms" id="msOeCheck"> Music Studio, Operator & Entrance
        &nbsp;&nbsp;&nbsp;
    </center>
    <div class="row border border-dark p-3 mb-2" id="msEsActive">
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 4 Sisi Music Studio<br>" Gypsum Standard "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_es_ms_gs as $es_ms_gs)
                        <tr>
                            <td><?php if ($es_ms_gs == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($es_ms_gs == null) {
                                echo 'blm ada';
                            } else {
                                echo $es_ms_gs->id;
                            }
                            ?></td>
                            <td><?php if ($es_ms_gs == null) {
                                echo 'blm ada';
                            } else {
                                echo $es_ms_gs->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_es_ms_gs->count())
                                    <a href="ms_penawaran_es_gs/{{ $es_ms_gs->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_es_ms_gs->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 4 Sisi Music Studio<br>" Gypsum Medium "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_es_ms_gm as $es_ms_gm)
                        <tr>
                            <td><?php if ($es_ms_gm == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($es_ms_gm == null) {
                                echo 'blm ada';
                            } else {
                                echo $es_ms_gm->id;
                            }
                            ?></td>
                            <td><?php if ($es_ms_gm == null) {
                                echo 'blm ada';
                            } else {
                                echo $es_ms_gm->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_es_ms_gm->count())
                                    <a href="ms_penawaran_es_gm/{{ $es_ms_gm->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_es_ms_gm->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 4 Sisi Music Studio<br>" Gypsum High "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_es_ms_gh as $es_ms_gh)
                        <tr>
                            <td><?php if ($es_ms_gh == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($es_ms_gh == null) {
                                echo 'blm ada';
                            } else {
                                echo $es_ms_gh->id;
                            }
                            ?></td>
                            <td><?php if ($es_ms_gh == null) {
                                echo 'blm ada';
                            } else {
                                echo $es_ms_gh->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_es_ms_gh->count())
                                    <a href="ms_penawaran_es_gh/{{ $es_ms_gh->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_es_ms_gh->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 4 Sisi Music Studio<br>" Panel Akustik Standard "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_es_ms_as as $es_ms_as)
                        <tr>
                            <td><?php if ($es_ms_as == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($es_ms_as == null) {
                                echo 'blm ada';
                            } else {
                                echo $es_ms_as->id;
                            }
                            ?></td>
                            <td><?php if ($es_ms_as == null) {
                                echo 'blm ada';
                            } else {
                                echo $es_ms_as->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_es_ms_as->count())
                                    <a href="ms_penawaran_es_as/{{ $es_ms_as->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_es_ms_as->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 4 Sisi Music Studio<br>" Panel Akustik Medium "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_es_ms_am as $es_ms_am)
                        <tr>
                            <td><?php if ($es_ms_am == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($es_ms_am == null) {
                                echo 'blm ada';
                            } else {
                                echo $es_ms_am->id;
                            }
                            ?></td>
                            <td><?php if ($es_ms_am == null) {
                                echo 'blm ada';
                            } else {
                                echo $es_ms_am->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_es_ms_am->count())
                                    <a href="ms_penawaran_es_am/{{ $es_ms_am->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_es_ms_am->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 4 Sisi Music Studio<br>" Panel Akustik High "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_es_ms_ah as $es_ms_ah)
                        <tr>
                            <td><?php if ($es_ms_ah == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($es_ms_ah == null) {
                                echo 'blm ada';
                            } else {
                                echo $es_ms_ah->id;
                            }
                            ?></td>
                            <td><?php if ($es_ms_ah == null) {
                                echo 'blm ada';
                            } else {
                                echo $es_ms_ah->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_es_ms_ah->count())
                                    <a href="ms_penawaran_es_ah/{{ $es_ms_ah->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_es_ms_ah->links() }}
        </div>
        <center>
            <div class="col-sm-6">
                <p class="mb-2 fw-normal text-center">Penawaran 4 Sisi Music Studio<br>" Panel Akustik Deluxe "</p>
                <table class="table table-dark table-striped text-center">
                    <thead>
                        <tr>
                            <td scope="col">No.</td>
                            <td scope="col">ID</td>
                            <td scope="col">Nama Customer</td>
                            <td scope="col">Lihat Invoice</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($p_es_ms_ad as $es_ms_ad)
                            <tr>
                                <td><?php if ($es_ms_ad == null) {
                                    echo '1';
                                } else {
                                    echo $loop->iteration;
                                }
                                ?></td>
                                <td><?php if ($es_ms_ad == null) {
                                    echo 'blm ada';
                                } else {
                                    echo $es_ms_ad->id;
                                }
                                ?></td>
                                <td><?php if ($es_ms_ad == null) {
                                    echo 'blm ada';
                                } else {
                                    echo $es_ms_ad->nama;
                                }
                                ?></td>
                                <td>
                                    @if ($p_es_ms_ad->count())
                                        <a href="ms_penawaran_es_ad/{{ $es_ms_ad->id }}" class="badge bg-info"><i
                                                class="bi bi-eye"></i></a>
                                    @else
                                        <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $p_es_ms_ad->links() }}
            </div>
        </center>
    </div>
    <div class="row border border-dark p-3 mb-2" id="msLsActive" style="display: none;">
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 5 Sisi Music Studio<br>" Gypsum Standard "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ls_ms_gs as $ls_ms_gs)
                        <tr>
                            <td><?php if ($ls_ms_gs == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ls_ms_gs == null) {
                                echo 'blm ada';
                            } else {
                                echo $ls_ms_gs->id;
                            }
                            ?></td>
                            <td><?php if ($ls_ms_gs == null) {
                                echo 'blm ada';
                            } else {
                                echo $ls_ms_gs->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ls_ms_gs->count())
                                    <a href="ms_penawaran_ls_gs/{{ $ls_ms_gs->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ls_ms_gs->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 5 Sisi Music Studio<br>" Gypsum Medium "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ls_ms_gm as $ls_ms_gm)
                        <tr>
                            <td><?php if ($ls_ms_gm == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ls_ms_gm == null) {
                                echo 'blm ada';
                            } else {
                                echo $ls_ms_gm->id;
                            }
                            ?></td>
                            <td><?php if ($ls_ms_gm == null) {
                                echo 'blm ada';
                            } else {
                                echo $ls_ms_gm->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ls_ms_gm->count())
                                    <a href="ms_penawaran_ls_gm/{{ $ls_ms_gm->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ls_ms_gm->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 5 Sisi Music Studio<br>" Gypsum High "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ls_ms_gh as $ls_ms_gh)
                        <tr>
                            <td><?php if ($ls_ms_gh == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ls_ms_gh == null) {
                                echo 'blm ada';
                            } else {
                                echo $ls_ms_gh->id;
                            }
                            ?></td>
                            <td><?php if ($ls_ms_gh == null) {
                                echo 'blm ada';
                            } else {
                                echo $ls_ms_gh->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ls_ms_gh->count())
                                    <a href="ms_penawaran_ls_gh/{{ $ls_ms_gh->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ls_ms_gh->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 5 Sisi Music Studio<br>" Panel Akustik Standard "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ls_ms_as as $ls_ms_as)
                        <tr>
                            <td><?php if ($ls_ms_as == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ls_ms_as == null) {
                                echo 'blm ada';
                            } else {
                                echo $ls_ms_as->id;
                            }
                            ?></td>
                            <td><?php if ($ls_ms_as == null) {
                                echo 'blm ada';
                            } else {
                                echo $ls_ms_as->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ls_ms_as->count())
                                    <a href="ms_penawaran_ls_as/{{ $ls_ms_as->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ls_ms_as->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 5 Sisi Music Studio<br>" Panel Akustik Medium "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ls_ms_am as $ls_ms_am)
                        <tr>
                            <td><?php if ($ls_ms_am == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ls_ms_am == null) {
                                echo 'blm ada';
                            } else {
                                echo $ls_ms_am->id;
                            }
                            ?></td>
                            <td><?php if ($ls_ms_am == null) {
                                echo 'blm ada';
                            } else {
                                echo $ls_ms_am->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ls_ms_am->count())
                                    <a href="ms_penawaran_ls_am/{{ $ls_ms_am->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ls_ms_am->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 5 Sisi Music Studio<br>" Panel Akustik High "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ls_ms_ah as $ls_ms_ah)
                        <tr>
                            <td><?php if ($ls_ms_ah == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ls_ms_ah == null) {
                                echo 'blm ada';
                            } else {
                                echo $ls_ms_ah->id;
                            }
                            ?></td>
                            <td><?php if ($ls_ms_ah == null) {
                                echo 'blm ada';
                            } else {
                                echo $ls_ms_ah->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ls_ms_ah->count())
                                    <a href="ms_penawaran_ls_ah/{{ $ls_ms_ah->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ls_ms_ah->links() }}
        </div>
        <center>
            <div class="col-sm-6">
                <p class="mb-2 fw-normal text-center">Penawaran 5 Sisi Music Studio<br>" Panel Akustik Deluxe "</p>
                <table class="table table-dark table-striped text-center">
                    <thead>
                        <tr>
                            <td scope="col">No.</td>
                            <td scope="col">ID</td>
                            <td scope="col">Nama Customer</td>
                            <td scope="col">Lihat Invoice</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($p_ls_ms_ad as $ls_ms_ad)
                            <tr>
                                <td><?php if ($ls_ms_ad == null) {
                                    echo '1';
                                } else {
                                    echo $loop->iteration;
                                }
                                ?></td>
                                <td><?php if ($ls_ms_ad == null) {
                                    echo 'blm ada';
                                } else {
                                    echo $ls_ms_ad->id;
                                }
                                ?></td>
                                <td><?php if ($ls_ms_ad == null) {
                                    echo 'blm ada';
                                } else {
                                    echo $ls_ms_ad->nama;
                                }
                                ?></td>
                                <td>
                                    @if ($p_ls_ms_ad->count())
                                        <a href="ms_penawaran_ls_ad/{{ $ls_ms_ad->id }}" class="badge bg-info"><i
                                                class="bi bi-eye"></i></a>
                                    @else
                                        <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $p_ls_ms_ad->links() }}
            </div>
        </center>
    </div>

    <div class="row border border-dark p-3 mb-2" id="msEnsActive" style="display: none;">
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 6 Sisi Music Studio<br>" Gypsum Standard "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ens_ms_gs as $ens_ms_gs)
                        <tr>
                            <td><?php if ($ens_ms_gs == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ens_ms_gs == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_ms_gs->id;
                            }
                            ?></td>
                            <td><?php if ($ens_ms_gs == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_ms_gs->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ens_ms_gs->count())
                                    <a href="ms_penawaran_ens_gs/{{ $ens_ms_gs->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ens_ms_gs->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 6 Sisi Music Studio<br>" Gypsum Medium "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ens_ms_gm as $ens_ms_gm)
                        <tr>
                            <td><?php if ($ens_ms_gm == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ens_ms_gm == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_ms_gm->id;
                            }
                            ?></td>
                            <td><?php if ($ens_ms_gm == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_ms_gm->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ens_ms_gm->count())
                                    <a href="ms_penawaran_ens_gm/{{ $ens_ms_gm->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ens_ms_gm->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 6 Sisi Music Studio<br>" Gypsum High "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ens_ms_gh as $ens_ms_gh)
                        <tr>
                            <td><?php if ($ens_ms_gh == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ens_ms_gh == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_ms_gh->id;
                            }
                            ?></td>
                            <td><?php if ($ens_ms_gh == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_ms_gh->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ens_ms_gh->count())
                                    <a href="ms_penawaran_ens_gh/{{ $ens_ms_gh->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ens_ms_gh->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 6 Sisi Music Studio<br>" Panel Akustik Standard "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ens_ms_as as $ens_ms_as)
                        <tr>
                            <td><?php if ($ens_ms_as == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ens_ms_as == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_ms_as->id;
                            }
                            ?></td>
                            <td><?php if ($ens_ms_as == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_ms_as->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ens_ms_as->count())
                                    <a href="ms_penawaran_ens_as/{{ $ens_ms_as->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ens_ms_as->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 6 Sisi Music Studio<br>" Panel Akustik Medium "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ens_ms_am as $ens_ms_am)
                        <tr>
                            <td><?php if ($ens_ms_am == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ens_ms_am == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_ms_am->id;
                            }
                            ?></td>
                            <td><?php if ($ens_ms_am == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_ms_am->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ens_ms_am->count())
                                    <a href="ms_penawaran_ens_am/{{ $ens_ms_am->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ens_ms_am->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 6 Sisi Music Studio<br>" Panel Akustik High "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ens_ms_ah as $ens_ms_ah)
                        <tr>
                            <td><?php if ($ens_ms_ah == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ens_ms_ah == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_ms_ah->id;
                            }
                            ?></td>
                            <td><?php if ($ens_ms_ah == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_ms_ah->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ens_ms_ah->count())
                                    <a href="ms_penawaran_ens_ah/{{ $ens_ms_ah->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ens_ms_ah->links() }}
        </div>
        <center>
            <div class="col-sm-6">
                <p class="mb-2 fw-normal text-center">Penawaran 6 Sisi Music Studio<br>" Panel Akustik Deluxe "</p>
                <table class="table table-dark table-striped text-center">
                    <thead>
                        <tr>
                            <td scope="col">No.</td>
                            <td scope="col">ID</td>
                            <td scope="col">Nama Customer</td>
                            <td scope="col">Lihat Invoice</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($p_ens_ms_ad as $ens_ms_ad)
                            <tr>
                                <td><?php if ($ens_ms_ad == null) {
                                    echo '1';
                                } else {
                                    echo $loop->iteration;
                                }
                                ?></td>
                                <td><?php if ($ens_ms_ad == null) {
                                    echo 'blm ada';
                                } else {
                                    echo $ens_ms_ad->id;
                                }
                                ?></td>
                                <td><?php if ($ens_ms_ad == null) {
                                    echo 'blm ada';
                                } else {
                                    echo $ens_ms_ad->nama;
                                }
                                ?></td>
                                <td>
                                    @if ($p_ens_ms_ad->count())
                                        <a href="ms_penawaran_ens_ad/{{ $ens_ms_ad->id }}" class="badge bg-info"><i
                                                class="bi bi-eye"></i></a>
                                    @else
                                        <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $p_ens_ms_ad->links() }}
            </div>
        </center>
    </div>

    <div class="row border border-dark p-3 mb-2" id="msOActive" style="display: none;">
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran Operator Music Studio<br>" Gypsum Standard "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_o_ms_gs as $o_ms_gs)
                        <tr>
                            <td><?php if ($o_ms_gs == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($o_ms_gs == null) {
                                echo 'blm ada';
                            } else {
                                echo $o_ms_gs->id;
                            }
                            ?></td>
                            <td><?php if ($o_ms_gs == null) {
                                echo 'blm ada';
                            } else {
                                echo $o_ms_gs->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_o_ms_gs->count())
                                    <a href="ms_penawaran_o_gs/{{ $o_ms_gs->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_o_ms_gs->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran Operator Music Studio<br>" Gypsum Medium "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_o_ms_gm as $o_ms_gm)
                        <tr>
                            <td><?php if ($o_ms_gm == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($o_ms_gm == null) {
                                echo 'blm ada';
                            } else {
                                echo $o_ms_gm->id;
                            }
                            ?></td>
                            <td><?php if ($o_ms_gm == null) {
                                echo 'blm ada';
                            } else {
                                echo $o_ms_gm->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_o_ms_gm->count())
                                    <a href="ms_penawaran_o_gm/{{ $o_ms_gm->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_o_ms_gm->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran Operator Music Studio<br>" Gypsum High "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_o_ms_gh as $o_ms_gh)
                        <tr>
                            <td><?php if ($o_ms_gh == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($o_ms_gh == null) {
                                echo 'blm ada';
                            } else {
                                echo $o_ms_gh->id;
                            }
                            ?></td>
                            <td><?php if ($o_ms_gh == null) {
                                echo 'blm ada';
                            } else {
                                echo $o_ms_gh->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_o_ms_gh->count())
                                    <a href="ms_penawaran_o_gh/{{ $o_ms_gh->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_o_ms_gh->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran Operator Music Studio<br>" Panel Akustik Standard "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_o_ms_as as $o_ms_as)
                        <tr>
                            <td><?php if ($o_ms_as == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($o_ms_as == null) {
                                echo 'blm ada';
                            } else {
                                echo $o_ms_as->id;
                            }
                            ?></td>
                            <td><?php if ($o_ms_as == null) {
                                echo 'blm ada';
                            } else {
                                echo $o_ms_as->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_o_ms_as->count())
                                    <a href="ms_penawaran_o_as/{{ $o_ms_as->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_o_ms_as->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran Operator Music Studio<br>" Panel Akustik Medium "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_o_ms_am as $o_ms_am)
                        <tr>
                            <td><?php if ($o_ms_am == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($o_ms_am == null) {
                                echo 'blm ada';
                            } else {
                                echo $o_ms_am->id;
                            }
                            ?></td>
                            <td><?php if ($o_ms_am == null) {
                                echo 'blm ada';
                            } else {
                                echo $o_ms_am->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_o_ms_am->count())
                                    <a href="ms_penawaran_o_am/{{ $o_ms_am->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_o_ms_am->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran Operator Music Studio<br>" Panel Akustik High "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_o_ms_ah as $o_ms_ah)
                        <tr>
                            <td><?php if ($o_ms_ah == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($o_ms_ah == null) {
                                echo 'blm ada';
                            } else {
                                echo $o_ms_ah->id;
                            }
                            ?></td>
                            <td><?php if ($o_ms_ah == null) {
                                echo 'blm ada';
                            } else {
                                echo $o_ms_ah->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_o_ms_ah->count())
                                    <a href="ms_penawaran_o_ah/{{ $o_ms_ah->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_o_ms_ah->links() }}
        </div>
        <center>
            <div class="col-sm-6">
                <p class="mb-2 fw-normal text-center">Penawaran Operator Music Studio<br>" Panel Akustik Deluxe "</p>
                <table class="table table-dark table-striped text-center">
                    <thead>
                        <tr>
                            <td scope="col">No.</td>
                            <td scope="col">ID</td>
                            <td scope="col">Nama Customer</td>
                            <td scope="col">Lihat Invoice</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($p_o_ms_ad as $o_ms_ad)
                            <tr>
                                <td><?php if ($o_ms_ad == null) {
                                    echo '1';
                                } else {
                                    echo $loop->iteration;
                                }
                                ?></td>
                                <td><?php if ($o_ms_ad == null) {
                                    echo 'blm ada';
                                } else {
                                    echo $o_ms_ad->id;
                                }
                                ?></td>
                                <td><?php if ($o_ms_ad == null) {
                                    echo 'blm ada';
                                } else {
                                    echo $o_ms_ad->nama;
                                }
                                ?></td>
                                <td>
                                    @if ($p_o_ms_ad->count())
                                        <a href="ms_penawaran_o_ad/{{ $o_ms_ad->id }}" class="badge bg-info"><i
                                                class="bi bi-eye"></i></a>
                                    @else
                                        <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $p_o_ms_ad->links() }}
            </div>
        </center>

    </div>

    <div class="row border border-dark p-3 mb-2" id="msOeActive" style="display: none;">
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran Operator & Entrance Music Studio<br>" Gypsum Standard "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_o_e_ms_gs as $o_e_ms_gs)
                        <tr>
                            <td><?php if ($o_e_ms_gs == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($o_e_ms_gs == null) {
                                echo 'blm ada';
                            } else {
                                echo $o_e_ms_gs->id;
                            }
                            ?></td>
                            <td><?php if ($o_e_ms_gs == null) {
                                echo 'blm ada';
                            } else {
                                echo $o_e_ms_gs->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_o_ms_gs->count())
                                    <a href="ms_penawaran_o_e_gs/{{ $o_e_ms_gs->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_o_e_ms_gs->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran Operator & Entrance Music Studio<br>" Gypsum Medium "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_o_e_ms_gm as $o_e_ms_gm)
                        <tr>
                            <td><?php if ($o_e_ms_gm == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($o_e_ms_gm == null) {
                                echo 'blm ada';
                            } else {
                                echo $o_e_ms_gm->id;
                            }
                            ?></td>
                            <td><?php if ($o_e_ms_gm == null) {
                                echo 'blm ada';
                            } else {
                                echo $o_e_ms_gm->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_o_ms_gm->count())
                                    <a href="ms_penawaran_o_e_gm/{{ $o_e_ms_gm->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_o_e_ms_gm->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran Operator & Entrance Music Studio<br>" Gypsum High "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_o_e_ms_gh as $o_e_ms_gh)
                        <tr>
                            <td><?php if ($o_e_ms_gh == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($o_e_ms_gh == null) {
                                echo 'blm ada';
                            } else {
                                echo $o_e_ms_gh->id;
                            }
                            ?></td>
                            <td><?php if ($o_e_ms_gh == null) {
                                echo 'blm ada';
                            } else {
                                echo $o_e_ms_gh->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_o_ms_gh->count())
                                    <a href="ms_penawaran_o_e_gh/{{ $o_e_ms_gh->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_o_e_ms_gh->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran Operator & Entrance Music Studio<br>" Panel Akustik Standard "
            </p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_o_e_ms_as as $o_e_ms_as)
                        <tr>
                            <td><?php if ($o_e_ms_as == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($o_e_ms_as == null) {
                                echo 'blm ada';
                            } else {
                                echo $o_e_ms_as->id;
                            }
                            ?></td>
                            <td><?php if ($o_e_ms_as == null) {
                                echo 'blm ada';
                            } else {
                                echo $o_e_ms_as->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_o_ms_as->count())
                                    <a href="ms_penawaran_o_e_as/{{ $o_e_ms_as->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_o_e_ms_as->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran Operator & Entrance Music Studio<br>" Panel Akustik Medium "
            </p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_o_e_ms_am as $o_e_ms_am)
                        <tr>
                            <td><?php if ($o_e_ms_am == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($o_e_ms_am == null) {
                                echo 'blm ada';
                            } else {
                                echo $o_e_ms_am->id;
                            }
                            ?></td>
                            <td><?php if ($o_e_ms_am == null) {
                                echo 'blm ada';
                            } else {
                                echo $o_e_ms_am->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_o_ms_am->count())
                                    <a href="ms_penawaran_o_e_am/{{ $o_e_ms_am->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_o_e_ms_am->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran Operator & Entrance Music Studio<br>" Panel Akustik High "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_o_e_ms_ah as $o_e_ms_ah)
                        <tr>
                            <td><?php if ($o_e_ms_ah == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($o_e_ms_ah == null) {
                                echo 'blm ada';
                            } else {
                                echo $o_e_ms_ah->id;
                            }
                            ?></td>
                            <td><?php if ($o_e_ms_ah == null) {
                                echo 'blm ada';
                            } else {
                                echo $o_e_ms_ah->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_o_ms_ah->count())
                                    <a href="ms_penawaran_o_e_ah/{{ $o_e_ms_ah->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_o_e_ms_ah->links() }}
        </div>
        <center>
            <div class="col-sm-6">
                <p class="mb-2 fw-normal text-center">Penawaran Operator & Entrance Music Studio<br>" Panel Akustik Deluxe
                    "</p>
                <table class="table table-dark table-striped text-center">
                    <thead>
                        <tr>
                            <td scope="col">No.</td>
                            <td scope="col">ID</td>
                            <td scope="col">Nama Customer</td>
                            <td scope="col">Lihat Invoice</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($p_o_e_ms_ad as $o_e_ms_ad)
                            <tr>
                                <td><?php if ($o_e_ms_ad == null) {
                                    echo '1';
                                } else {
                                    echo $loop->iteration;
                                }
                                ?></td>
                                <td><?php if ($o_e_ms_ad == null) {
                                    echo 'blm ada';
                                } else {
                                    echo $o_e_ms_ad->id;
                                }
                                ?></td>
                                <td><?php if ($o_e_ms_ad == null) {
                                    echo 'blm ada';
                                } else {
                                    echo $o_e_ms_ad->nama;
                                }
                                ?></td>
                                <td>
                                    @if ($p_o_ms_ad->count())
                                        <a href="ms_penawaran_o_e_ad/{{ $o_e_ms_ad->id }}" class="badge bg-info"><i
                                                class="bi bi-eye"></i></a>
                                    @else
                                        <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $p_o_e_ms_ad->links() }}
            </div>
        </center>
    </div>
    <center class="mb-2">
        <input type="radio" onclick="KrEsCheck()" name="kr" id="krEsCheck" checked> Karaoke Room (Empat
        Sisi) &nbsp;&nbsp;&nbsp;
        <input type="radio" onclick="KrLsCheck()" name="kr" id="krLsCheck"> Karaoke Room (Lima Sisi)
        &nbsp;&nbsp;&nbsp;
        <input type="radio" onclick="KrEnsCheck()" name="kr" id="krEnsCheck"> Karaoke Room (Enam Sisi)
    </center>
    <div class="row border border-dark p-3 mb-2" id="krEsActive">
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 4 Sisi Karaoke Room<br>" Gypsum Standard "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_es_kr_gs as $es_kr_gs)
                        <tr>
                            <td><?php if ($es_kr_gs == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($es_kr_gs == null) {
                                echo 'blm ada';
                            } else {
                                echo $es_kr_gs->id;
                            }
                            ?></td>
                            <td><?php if ($es_kr_gs == null) {
                                echo 'blm ada';
                            } else {
                                echo $es_kr_gs->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_es_kr_gs->count())
                                    <a href="kr_penawaran_es_gs/{{ $es_kr_gs->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_es_kr_gs->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 4 Sisi Karaoke Room<br>" Gypsum Medium "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_es_kr_gm as $es_kr_gm)
                        <tr>
                            <td><?php if ($es_kr_gm == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($es_kr_gm == null) {
                                echo 'blm ada';
                            } else {
                                echo $es_kr_gm->id;
                            }
                            ?></td>
                            <td><?php if ($es_kr_gm == null) {
                                echo 'blm ada';
                            } else {
                                echo $es_kr_gm->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_es_kr_gm->count())
                                    <a href="kr_penawaran_es_gm/{{ $es_kr_gm->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_es_kr_gm->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 4 Sisi Karaoke Room<br>" Gypsum High "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_es_kr_gh as $es_kr_gh)
                        <tr>
                            <td><?php if ($es_kr_gh == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($es_kr_gh == null) {
                                echo 'blm ada';
                            } else {
                                echo $es_kr_gh->id;
                            }
                            ?></td>
                            <td><?php if ($es_kr_gh == null) {
                                echo 'blm ada';
                            } else {
                                echo $es_kr_gh->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_es_kr_gh->count())
                                    <a href="kr_penawaran_es_gh/{{ $es_kr_gh->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_es_kr_gh->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 4 Sisi Karaoke Room<br>" Panel Akustik Standard "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_es_kr_as as $es_kr_as)
                        <tr>
                            <td><?php if ($es_kr_as == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($es_kr_as == null) {
                                echo 'blm ada';
                            } else {
                                echo $es_kr_as->id;
                            }
                            ?></td>
                            <td><?php if ($es_kr_as == null) {
                                echo 'blm ada';
                            } else {
                                echo $es_kr_as->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_es_kr_as->count())
                                    <a href="kr_penawaran_es_as/{{ $es_kr_as->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_es_kr_as->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 4 Sisi Karaoke Room<br>" Panel Akustik Medium "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_es_kr_am as $es_kr_am)
                        <tr>
                            <td><?php if ($es_kr_am == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($es_kr_am == null) {
                                echo 'blm ada';
                            } else {
                                echo $es_kr_am->id;
                            }
                            ?></td>
                            <td><?php if ($es_kr_am == null) {
                                echo 'blm ada';
                            } else {
                                echo $es_kr_am->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_es_kr_am->count())
                                    <a href="kr_penawaran_es_am/{{ $es_kr_am->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_es_kr_am->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 4 Sisi Karaoke Room<br>" Panel Akustik High "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_es_kr_ah as $es_kr_ah)
                        <tr>
                            <td><?php if ($es_kr_ah == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($es_kr_ah == null) {
                                echo 'blm ada';
                            } else {
                                echo $es_kr_ah->id;
                            }
                            ?></td>
                            <td><?php if ($es_kr_ah == null) {
                                echo 'blm ada';
                            } else {
                                echo $es_kr_ah->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_es_kr_ah->count())
                                    <a href="kr_penawaran_es_ah/{{ $es_kr_ah->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_es_kr_ah->links() }}
        </div>

        <center>
            <div class="col-sm-6">
                <p class="mb-2 fw-normal text-center">Penawaran 4 Sisi Music Studio<br>" Panel Akustik Deluxe "</p>
                <table class="table table-dark table-striped text-center">
                    <thead>
                        <tr>
                            <td scope="col">No.</td>
                            <td scope="col">ID</td>
                            <td scope="col">Nama Customer</td>
                            <td scope="col">Lihat Invoice</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($p_es_kr_ad as $es_kr_ad)
                            <tr>
                                <td><?php if ($es_kr_ad == null) {
                                    echo '1';
                                } else {
                                    echo $loop->iteration;
                                }
                                ?></td>
                                <td><?php if ($es_kr_ad == null) {
                                    echo 'blm ada';
                                } else {
                                    echo $es_kr_ad->id;
                                }
                                ?></td>
                                <td><?php if ($es_kr_ad == null) {
                                    echo 'blm ada';
                                } else {
                                    echo $es_kr_ad->nama;
                                }
                                ?></td>
                                <td>
                                    @if ($p_es_kr_ad->count())
                                        <a href="kr_penawaran_es_e_ad/{{ $es_kr_ad->id }}" class="badge bg-info"><i
                                                class="bi bi-eye"></i></a>
                                    @else
                                        <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $p_es_kr_ad->links() }}
            </div>
        </center>
    </div>

    <div class="row border border-dark p-3 mb-2" id="krLsActive" style="display: none;">
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 5 Sisi Karaoke Room<br>" Gypsum Standard "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ls_kr_gs as $ls_kr_gs)
                        <tr>
                            <td><?php if ($ls_kr_gs == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ls_kr_gs == null) {
                                echo 'blm ada';
                            } else {
                                echo $ls_kr_gs->id;
                            }
                            ?></td>
                            <td><?php if ($ls_kr_gs == null) {
                                echo 'blm ada';
                            } else {
                                echo $ls_kr_gs->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ls_kr_gs->count())
                                    <a href="kr_penawaran_ls_gs/{{ $ls_kr_gs->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ls_kr_gs->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 5 Sisi Karaoke Room<br>" Gypsum Medium "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ls_kr_gm as $ls_kr_gm)
                        <tr>
                            <td><?php if ($ls_kr_gm == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ls_kr_gm == null) {
                                echo 'blm ada';
                            } else {
                                echo $ls_kr_gm->id;
                            }
                            ?></td>
                            <td><?php if ($ls_kr_gm == null) {
                                echo 'blm ada';
                            } else {
                                echo $ls_kr_gm->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ls_kr_gm->count())
                                    <a href="kr_penawaran_ls_gm/{{ $ls_kr_gm->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ls_kr_gm->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 5 Sisi Karaoke Room<br>" Gypsum High "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ls_kr_gh as $ls_kr_gh)
                        <tr>
                            <td><?php if ($ls_kr_gh == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ls_kr_gh == null) {
                                echo 'blm ada';
                            } else {
                                echo $ls_kr_gh->id;
                            }
                            ?></td>
                            <td><?php if ($ls_kr_gh == null) {
                                echo 'blm ada';
                            } else {
                                echo $ls_kr_gh->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ls_kr_gh->count())
                                    <a href="kr_penawaran_ls_gh/{{ $ls_kr_gh->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ls_kr_gh->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 5 Sisi Karaoke Room<br>" Panel Akustik Standard "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ls_kr_as as $ls_kr_as)
                        <tr>
                            <td><?php if ($ls_kr_as == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ls_kr_as == null) {
                                echo 'blm ada';
                            } else {
                                echo $ls_kr_as->id;
                            }
                            ?></td>
                            <td><?php if ($ls_kr_as == null) {
                                echo 'blm ada';
                            } else {
                                echo $ls_kr_as->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ls_kr_as->count())
                                    <a href="kr_penawaran_ls_as/{{ $ls_kr_as->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ls_kr_as->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 5 Sisi Karaoke Room<br>" Panel Akustik Medium "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ls_kr_am as $ls_kr_am)
                        <tr>
                            <td><?php if ($ls_kr_am == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ls_kr_am == null) {
                                echo 'blm ada';
                            } else {
                                echo $ls_kr_am->id;
                            }
                            ?></td>
                            <td><?php if ($ls_kr_am == null) {
                                echo 'blm ada';
                            } else {
                                echo $ls_kr_am->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ls_kr_am->count())
                                    <a href="kr_penawaran_ls_am/{{ $ls_kr_am->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ls_kr_am->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 5 Sisi Karaoke Room<br>" Panel Akustik High "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ls_kr_ah as $ls_kr_ah)
                        <tr>
                            <td><?php if ($ls_kr_ah == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ls_kr_ah == null) {
                                echo 'blm ada';
                            } else {
                                echo $ls_kr_ah->id;
                            }
                            ?></td>
                            <td><?php if ($ls_kr_ah == null) {
                                echo 'blm ada';
                            } else {
                                echo $ls_kr_ah->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ls_kr_ah->count())
                                    <a href="kr_penawaran_ls_ah/{{ $ls_kr_ah->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ls_kr_ah->links() }}
        </div>

        <center>
            <div class="col-sm-6">
                <p class="mb-2 fw-normal text-center">Penawaran 5 Sisi Music Studio<br>" Panel Akustik Deluxe "</p>
                <table class="table table-dark table-striped text-center">
                    <thead>
                        <tr>
                            <td scope="col">No.</td>
                            <td scope="col">ID</td>
                            <td scope="col">Nama Customer</td>
                            <td scope="col">Lihat Invoice</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($p_ls_kr_ad as $ls_kr_ad)
                            <tr>
                                <td><?php if ($ls_kr_ad == null) {
                                    echo '1';
                                } else {
                                    echo $loop->iteration;
                                }
                                ?></td>
                                <td><?php if ($ls_kr_ad == null) {
                                    echo 'blm ada';
                                } else {
                                    echo $ls_kr_ad->id;
                                }
                                ?></td>
                                <td><?php if ($ls_kr_ad == null) {
                                    echo 'blm ada';
                                } else {
                                    echo $ls_kr_ad->nama;
                                }
                                ?></td>
                                <td>
                                    @if ($p_ls_kr_ad->count())
                                        <a href="kr_penawaran_ls_e_ad/{{ $ls_kr_ad->id }}" class="badge bg-info"><i
                                                class="bi bi-eye"></i></a>
                                    @else
                                        <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $p_ls_kr_ad->links() }}
            </div>
        </center>
    </div>

    <div class="row border border-dark p-3 mb-2" id="krEnsActive" style="display: none;">
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 6 Sisi Karaoke Room<br>" Gypsum Standard "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ens_kr_gs as $ens_kr_gs)
                        <tr>
                            <td><?php if ($ens_kr_gs == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ens_kr_gs == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_kr_gs->id;
                            }
                            ?></td>
                            <td><?php if ($ens_kr_gs == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_kr_gs->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ens_kr_gs->count())
                                    <a href="kr_penawaran_ens_gs/{{ $ens_kr_gs->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ens_kr_gs->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 6 Sisi Karaoke Room<br>" Gypsum Medium "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ens_kr_gm as $ens_kr_gm)
                        <tr>
                            <td><?php if ($ens_kr_gm == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ens_kr_gm == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_kr_gm->id;
                            }
                            ?></td>
                            <td><?php if ($ens_kr_gm == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_kr_gm->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ens_kr_gm->count())
                                    <a href="kr_penawaran_ens_gm/{{ $ens_kr_gm->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ens_kr_gm->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 6 Sisi Karaoke Room<br>" Gypsum High "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ens_kr_gh as $ens_kr_gh)
                        <tr>
                            <td><?php if ($ens_kr_gh == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ens_kr_gh == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_kr_gh->id;
                            }
                            ?></td>
                            <td><?php if ($ens_kr_gh == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_kr_gh->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ens_kr_gh->count())
                                    <a href="kr_penawaran_ens_gh/{{ $ens_kr_gh->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ens_kr_gh->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 6 Sisi Karaoke Room<br>" Panel Akustik Standard "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ens_kr_as as $ens_kr_as)
                        <tr>
                            <td><?php if ($ens_kr_as == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ens_kr_as == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_kr_as->id;
                            }
                            ?></td>
                            <td><?php if ($ens_kr_as == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_kr_as->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ens_kr_as->count())
                                    <a href="kr_penawaran_ens_as/{{ $ens_kr_as->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ens_kr_as->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 6 Sisi Karaoke Room<br>" Panel Akustik Medium "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ens_kr_am as $ens_kr_am)
                        <tr>
                            <td><?php if ($ens_kr_am == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ens_kr_am == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_kr_am->id;
                            }
                            ?></td>
                            <td><?php if ($ens_kr_am == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_kr_am->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ens_kr_am->count())
                                    <a href="kr_penawaran_ens_am/{{ $ens_kr_am->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ens_kr_am->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 6 Sisi Karaoke Room<br>" Panel Akustik High "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ens_kr_ah as $ens_kr_ah)
                        <tr>
                            <td><?php if ($ens_kr_ah == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ens_kr_ah == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_kr_ah->id;
                            }
                            ?></td>
                            <td><?php if ($ens_kr_ah == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_kr_ah->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ens_kr_ah->count())
                                    <a href="kr_penawaran_ens_ah/{{ $ens_kr_ah->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ens_kr_ah->links() }}
        </div>

        <center>
            <div class="col-sm-6">
                <p class="mb-2 fw-normal text-center">Penawaran 6 Sisi Music Studio<br>" Panel Akustik Deluxe "</p>
                <table class="table table-dark table-striped text-center">
                    <thead>
                        <tr>
                            <td scope="col">No.</td>
                            <td scope="col">ID</td>
                            <td scope="col">Nama Customer</td>
                            <td scope="col">Lihat Invoice</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($p_ens_kr_ad as $ens_kr_ad)
                            <tr>
                                <td><?php if ($ens_kr_ad == null) {
                                    echo '1';
                                } else {
                                    echo $loop->iteration;
                                }
                                ?></td>
                                <td><?php if ($ens_kr_ad == null) {
                                    echo 'blm ada';
                                } else {
                                    echo $ens_kr_ad->id;
                                }
                                ?></td>
                                <td><?php if ($ens_kr_ad == null) {
                                    echo 'blm ada';
                                } else {
                                    echo $ens_kr_ad->nama;
                                }
                                ?></td>
                                <td>
                                    @if ($p_ens_kr_ad->count())
                                        <a href="kr_penawaran_ens_e_ad/{{ $ens_kr_ad->id }}" class="badge bg-info"><i
                                                class="bi bi-eye"></i></a>
                                    @else
                                        <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $p_ens_kr_ad->links() }}
            </div>
        </center>
    </div>

    <center class="mb-2">
        <input type="radio" onclick="GrEsCheck()" name="gr" id="grEsCheck" checked> Gaming Room (Empat
        Sisi) &nbsp;&nbsp;&nbsp;
        <input type="radio" onclick="GrLsCheck()" name="gr" id="grLsCheck"> Gaming Room (Lima Sisi)
        &nbsp;&nbsp;&nbsp;
        <input type="radio" onclick="GrEnsCheck()" name="gr" id="grEnsCheck"> Gaming Room (Enam Sisi)
    </center>
    <div class="row border border-dark p-3 mb-2" id="grEsActive">
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 4 Sisi Gaming Room<br>" Gypsum Standard "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_es_gr_gs as $es_gr_gs)
                        <tr>
                            <td><?php if ($es_gr_gs == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($es_gr_gs == null) {
                                echo 'blm ada';
                            } else {
                                echo $es_gr_gs->id;
                            }
                            ?></td>
                            <td><?php if ($es_gr_gs == null) {
                                echo 'blm ada';
                            } else {
                                echo $es_gr_gs->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_es_gr_gs->count())
                                    <a href="gr_penawaran_es_gs/{{ $es_gr_gs->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_es_gr_gs->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 4 Sisi Gaming Room<br>" Gypsum Medium "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_es_gr_gm as $es_gr_gm)
                        <tr>
                            <td><?php if ($es_gr_gm == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($es_gr_gm == null) {
                                echo 'blm ada';
                            } else {
                                echo $es_gr_gm->id;
                            }
                            ?></td>
                            <td><?php if ($es_gr_gm == null) {
                                echo 'blm ada';
                            } else {
                                echo $es_gr_gm->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_es_gr_gm->count())
                                    <a href="gr_penawaran_es_gm/{{ $es_gr_gm->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_es_gr_gm->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 4 Sisi Gaming Room<br>" Gypsum High "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_es_gr_gh as $es_gr_gh)
                        <tr>
                            <td><?php if ($es_gr_gh == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($es_gr_gh == null) {
                                echo 'blm ada';
                            } else {
                                echo $es_gr_gh->id;
                            }
                            ?></td>
                            <td><?php if ($es_gr_gh == null) {
                                echo 'blm ada';
                            } else {
                                echo $es_gr_gh->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_es_gr_gh->count())
                                    <a href="gr_penawaran_es_gh/{{ $es_gr_gh->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_es_gr_gh->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 4 Sisi Gaming Room<br>" Panel Akustik Standard "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_es_gr_as as $es_gr_as)
                        <tr>
                            <td><?php if ($es_gr_as == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($es_gr_as == null) {
                                echo 'blm ada';
                            } else {
                                echo $es_gr_as->id;
                            }
                            ?></td>
                            <td><?php if ($es_gr_as == null) {
                                echo 'blm ada';
                            } else {
                                echo $es_gr_as->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_es_gr_as->count())
                                    <a href="gr_penawaran_es_as/{{ $es_gr_as->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_es_gr_as->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 4 Sisi Gaming Room<br>" Panel Akustik Medium "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_es_gr_am as $es_gr_am)
                        <tr>
                            <td><?php if ($es_gr_am == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($es_gr_am == null) {
                                echo 'blm ada';
                            } else {
                                echo $es_gr_am->id;
                            }
                            ?></td>
                            <td><?php if ($es_gr_am == null) {
                                echo 'blm ada';
                            } else {
                                echo $es_gr_am->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_es_gr_am->count())
                                    <a href="gr_penawaran_es_am/{{ $es_gr_am->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_es_gr_am->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 4 Sisi Gaming Room<br>" Panel Akustik High "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_es_gr_ah as $es_gr_ah)
                        <tr>
                            <td><?php if ($es_gr_ah == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($es_gr_ah == null) {
                                echo 'blm ada';
                            } else {
                                echo $es_gr_ah->id;
                            }
                            ?></td>
                            <td><?php if ($es_gr_ah == null) {
                                echo 'blm ada';
                            } else {
                                echo $es_gr_ah->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_es_gr_ah->count())
                                    <a href="gr_penawaran_es_ah/{{ $es_gr_ah->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_es_gr_ah->links() }}
        </div>
        <center>
            <div class="col-sm-6">
                <p class="mb-2 fw-normal text-center">Penawaran 4 Sisi Gaming Room<br>" Panel Akustik Deluxe "</p>
                <table class="table table-dark table-striped text-center">
                    <thead>
                        <tr>
                            <td scope="col">No.</td>
                            <td scope="col">ID</td>
                            <td scope="col">Nama Customer</td>
                            <td scope="col">Lihat Invoice</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($p_es_gr_ad as $es_gr_ad)
                            <tr>
                                <td><?php if ($es_gr_ad == null) {
                                    echo '1';
                                } else {
                                    echo $loop->iteration;
                                }
                                ?></td>
                                <td><?php if ($es_gr_ad == null) {
                                    echo 'blm ada';
                                } else {
                                    echo $es_gr_ad->id;
                                }
                                ?></td>
                                <td><?php if ($es_gr_ad == null) {
                                    echo 'blm ada';
                                } else {
                                    echo $es_gr_ad->nama;
                                }
                                ?></td>
                                <td>
                                    @if ($p_es_gr_ad->count())
                                        <a href="gr_penawaran_es_ad/{{ $es_gr_ad->id }}" class="badge bg-info"><i
                                                class="bi bi-eye"></i></a>
                                    @else
                                        <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $p_es_gr_ad->links() }}
            </div>
        </center>
    </div>
    <div class="row border border-dark p-3 mb-2" id="grLsActive" style="display: none;">
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 5 Sisi Gaming Room<br>" Gypsum Standard "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ls_gr_gs as $ls_gr_gs)
                        <tr>
                            <td><?php if ($ls_gr_gs == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ls_gr_gs == null) {
                                echo 'blm ada';
                            } else {
                                echo $ls_gr_gs->id;
                            }
                            ?></td>
                            <td><?php if ($ls_gr_gs == null) {
                                echo 'blm ada';
                            } else {
                                echo $ls_gr_gs->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ls_gr_gs->count())
                                    <a href="gr_penawaran_ls_gs/{{ $ls_gr_gs->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ls_gr_gs->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 5 Sisi Gaming Room<br>" Gypsum Medium "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ls_gr_gm as $ls_gr_gm)
                        <tr>
                            <td><?php if ($ls_gr_gm == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ls_gr_gm == null) {
                                echo 'blm ada';
                            } else {
                                echo $ls_gr_gm->id;
                            }
                            ?></td>
                            <td><?php if ($ls_gr_gm == null) {
                                echo 'blm ada';
                            } else {
                                echo $ls_gr_gm->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ls_gr_gm->count())
                                    <a href="gr_penawaran_ls_gm/{{ $ls_gr_gm->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ls_gr_gm->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 5 Sisi Gaming Room<br>" Gypsum High "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ls_gr_gh as $ls_gr_gh)
                        <tr>
                            <td><?php if ($ls_gr_gh == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ls_gr_gh == null) {
                                echo 'blm ada';
                            } else {
                                echo $ls_gr_gh->id;
                            }
                            ?></td>
                            <td><?php if ($ls_gr_gh == null) {
                                echo 'blm ada';
                            } else {
                                echo $ls_gr_gh->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ls_gr_gh->count())
                                    <a href="gr_penawaran_ls_gh/{{ $ls_gr_gh->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ls_gr_gh->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 5 Sisi Gaming Room<br>" Panel Akustik Standard "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ls_gr_as as $ls_gr_as)
                        <tr>
                            <td><?php if ($ls_gr_as == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ls_gr_as == null) {
                                echo 'blm ada';
                            } else {
                                echo $ls_gr_as->id;
                            }
                            ?></td>
                            <td><?php if ($ls_gr_as == null) {
                                echo 'blm ada';
                            } else {
                                echo $ls_gr_as->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ls_gr_as->count())
                                    <a href="gr_penawaran_ls_as/{{ $ls_gr_as->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ls_gr_as->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 5 Sisi Gaming Room<br>" Panel Akustik Medium "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ls_gr_am as $ls_gr_am)
                        <tr>
                            <td><?php if ($ls_gr_am == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ls_gr_am == null) {
                                echo 'blm ada';
                            } else {
                                echo $ls_gr_am->id;
                            }
                            ?></td>
                            <td><?php if ($ls_gr_am == null) {
                                echo 'blm ada';
                            } else {
                                echo $ls_gr_am->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ls_gr_am->count())
                                    <a href="gr_penawaran_ls_am/{{ $ls_gr_am->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ls_gr_am->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 5 Sisi Gaming Room<br>" Panel Akustik High "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ls_gr_ah as $ls_gr_ah)
                        <tr>
                            <td><?php if ($ls_gr_ah == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ls_gr_ah == null) {
                                echo 'blm ada';
                            } else {
                                echo $ls_gr_ah->id;
                            }
                            ?></td>
                            <td><?php if ($ls_gr_ah == null) {
                                echo 'blm ada';
                            } else {
                                echo $ls_gr_ah->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ls_gr_ah->count())
                                    <a href="gr_penawaran_ls_ah/{{ $ls_gr_ah->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ls_gr_ah->links() }}
        </div>
        <center>
            <div class="col-sm-6">
                <p class="mb-2 fw-normal text-center">Penawaran 5 Sisi Gaming Room<br>" Panel Akustik Deluxe "</p>
                <table class="table table-dark table-striped text-center">
                    <thead>
                        <tr>
                            <td scope="col">No.</td>
                            <td scope="col">ID</td>
                            <td scope="col">Nama Customer</td>
                            <td scope="col">Lihat Invoice</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($p_ls_gr_ad as $ls_gr_ad)
                            <tr>
                                <td><?php if ($ls_gr_ad == null) {
                                    echo '1';
                                } else {
                                    echo $loop->iteration;
                                }
                                ?></td>
                                <td><?php if ($ls_gr_ad == null) {
                                    echo 'blm ada';
                                } else {
                                    echo $ls_gr_ad->id;
                                }
                                ?></td>
                                <td><?php if ($ls_gr_ad == null) {
                                    echo 'blm ada';
                                } else {
                                    echo $ls_gr_ad->nama;
                                }
                                ?></td>
                                <td>
                                    @if ($p_ls_gr_ad->count())
                                        <a href="gr_penawaran_ls_ad/{{ $ls_gr_ad->id }}" class="badge bg-info"><i
                                                class="bi bi-eye"></i></a>
                                    @else
                                        <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $p_ls_gr_ad->links() }}
            </div>
        </center>
    </div>
    <div class="row border border-dark p-3 mb-2" id="grEnsActive" style="display: none;">
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 6 Sisi Gaming Room<br>" Gypsum Standard "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ens_gr_gs as $ens_gr_gs)
                        <tr>
                            <td><?php if ($ens_gr_gs == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ens_gr_gs == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_gr_gs->id;
                            }
                            ?></td>
                            <td><?php if ($ens_gr_gs == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_gr_gs->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ens_gr_gs->count())
                                    <a href="gr_penawaran_ens_gs/{{ $ens_gr_gs->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ens_gr_gs->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 6 Sisi Gaming Room<br>" Gypsum Medium "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ens_gr_gm as $ens_gr_gm)
                        <tr>
                            <td><?php if ($ens_gr_gm == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ens_gr_gm == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_gr_gm->id;
                            }
                            ?></td>
                            <td><?php if ($ens_gr_gm == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_gr_gm->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ens_gr_gm->count())
                                    <a href="gr_penawaran_ens_gm/{{ $ens_gr_gm->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ens_gr_gm->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 6 Sisi Gaming Room<br>" Gypsum High "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ens_gr_gh as $ens_gr_gh)
                        <tr>
                            <td><?php if ($ens_gr_gh == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ens_gr_gh == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_gr_gh->id;
                            }
                            ?></td>
                            <td><?php if ($ens_gr_gh == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_gr_gh->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ens_gr_gh->count())
                                    <a href="gr_penawaran_ens_gh/{{ $ens_gr_gh->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ens_gr_gh->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 6 Sisi Gaming Room<br>" Panel Akustik Standard "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ens_gr_as as $ens_gr_as)
                        <tr>
                            <td><?php if ($ens_gr_as == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ens_gr_as == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_gr_as->id;
                            }
                            ?></td>
                            <td><?php if ($ens_gr_as == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_gr_as->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ens_gr_as->count())
                                    <a href="gr_penawaran_ens_as/{{ $ens_gr_as->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ens_gr_as->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 6 Sisi Gaming Room<br>" Panel Akustik Medium "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ens_gr_am as $ens_gr_am)
                        <tr>
                            <td><?php if ($ens_gr_am == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ens_gr_am == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_gr_am->id;
                            }
                            ?></td>
                            <td><?php if ($ens_gr_am == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_gr_am->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ens_gr_am->count())
                                    <a href="gr_penawaran_ens_am/{{ $ens_gr_am->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ens_gr_am->links() }}
        </div>
        <div class="col-sm-4">
            <p class="mb-2 fw-normal text-center">Penawaran 6 Sisi Gaming Room<br>" Panel Akustik High "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ens_gr_ah as $ens_gr_ah)
                        <tr>
                            <td><?php if ($ens_gr_ah == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ens_gr_ah == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_gr_ah->id;
                            }
                            ?></td>
                            <td><?php if ($ens_gr_ah == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_gr_ah->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ens_gr_ah->count())
                                    <a href="gr_penawaran_ens_ah/{{ $ens_gr_ah->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ens_gr_ah->links() }}
        </div>
        <center>
        <div class="col-sm-6">
            <p class="mb-2 fw-normal text-center">Penawaran 6 Sisi Gaming Room<br>" Panel Akustik Deluxe "</p>
            <table class="table table-dark table-striped text-center">
                <thead>
                    <tr>
                        <td scope="col">No.</td>
                        <td scope="col">ID</td>
                        <td scope="col">Nama Customer</td>
                        <td scope="col">Lihat Invoice</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($p_ens_gr_ad as $ens_gr_ad)
                        <tr>
                            <td><?php if ($ens_gr_ad == null) {
                                echo '1';
                            } else {
                                echo $loop->iteration;
                            }
                            ?></td>
                            <td><?php if ($ens_gr_ad == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_gr_ad->id;
                            }
                            ?></td>
                            <td><?php if ($ens_gr_ad == null) {
                                echo 'blm ada';
                            } else {
                                echo $ens_gr_ad->nama;
                            }
                            ?></td>
                            <td>
                                @if ($p_ens_gr_ad->count())
                                    <a href="gr_penawaran_ens_ad/{{ $ens_gr_ad->id }}" class="badge bg-info"><i
                                            class="bi bi-eye"></i></a>
                                @else
                                    <a href="#" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $p_ens_gr_ad->links() }}
        </div>
    </center>
    </div>

    <script>
        var mrEsCheck = document.getElementById('mrEsCheck');
        var mrEsActive = document.getElementById('mrEsActive');
        var mrLsCheck = document.getElementById('mrLsCheck');
        var mrLsActive = document.getElementById('mrLsActive');
        var mrEnsCheck = document.getElementById('mrEnsCheck');
        var mrEnsActive = document.getElementById('mrEnsActive');

        function MrEsCheck() {
            if (mrEsCheck.checked == true) {
                mrEsActive.style.display = '';
                mrLsActive.style.display = 'none';
                mrEnsActive.style.display = 'none';
            }
        }

        function MrLsCheck() {
            if (mrLsCheck.checked == true) {
                mrEsActive.style.display = 'none';
                mrLsActive.style.display = '';
                mrEnsActive.style.display = 'none';
            }
        }

        function MrEnsCheck() {
            if (mrEnsCheck.checked == true) {
                mrEsActive.style.display = 'none';
                mrLsActive.style.display = 'none';
                mrEnsActive.style.display = '';
            }
        }

        var prEsCheck = document.getElementById('prEsCheck');
        var prEsActive = document.getElementById('prEsActive');
        var prLsCheck = document.getElementById('prLsCheck');
        var prLsActive = document.getElementById('prLsActive');
        var prEnsCheck = document.getElementById('prEnsCheck');
        var prEnsActive = document.getElementById('prEnsActive');

        function PrEsCheck() {
            if (prEsCheck.checked == true) {
                prEsActive.style.display = '';
                prLsActive.style.display = 'none';
                prEnsActive.style.display = 'none';
            }
        }

        function PrLsCheck() {
            if (prLsCheck.checked == true) {
                prEsActive.style.display = 'none';
                prLsActive.style.display = '';
                prEnsActive.style.display = 'none';
            }
        }

        function PrEnsCheck() {
            if (prEnsCheck.checked == true) {
                prEsActive.style.display = 'none';
                prLsActive.style.display = 'none';
                prEnsActive.style.display = '';
            }
        }

        var msEsCheck = document.getElementById('msEsCheck');
        var msEsActive = document.getElementById('msEsActive');
        var msLsCheck = document.getElementById('msLsCheck');
        var msLsActive = document.getElementById('msLsActive');
        var msEnsCheck = document.getElementById('msEnsCheck');
        var msEnsActive = document.getElementById('msEnsActive');
        var msOCheck = document.getElementById('msOCheck');
        var msOActive = document.getElementById('msOActive');
        var msOeCheck = document.getElementById('msOeCheck');
        var msOeActive = document.getElementById('msOeActive');

        function MsEsCheck() {
            if (msEsCheck.checked == true) {
                msEsActive.style.display = '';
                msLsActive.style.display = 'none';
                msEnsActive.style.display = 'none';
                msOActive.style.display = 'none';
                msOeActive.style.display = 'none';
            }
        }

        function MsLsCheck() {
            if (msLsCheck.checked == true) {
                msEsActive.style.display = 'none';
                msLsActive.style.display = '';
                msEnsActive.style.display = 'none';
                msOActive.style.display = 'none';
                msOeActive.style.display = 'none';
            }
        }

        function MsEnsCheck() {
            if (msEnsCheck.checked == true) {
                msEsActive.style.display = 'none';
                msLsActive.style.display = 'none';
                msEnsActive.style.display = '';
                msOActive.style.display = 'none';
                msOective.style.display = 'none';
            }
        }

        function MsOCheck() {
            if (msOCheck.checked == true) {
                msEsActive.style.display = 'none';
                msLsActive.style.display = 'none';
                msEnsActive.style.display = 'none';
                msOActive.style.display = '';
                msOeActive.style.display = 'none';
            }
        }

        function MsOECheck() {
            if (msOeCheck.checked == true) {
                msEsActive.style.display = 'none';
                msLsActive.style.display = 'none';
                msEnsActive.style.display = 'none';
                msOActive.style.display = 'none';
                msOeActive.style.display = '';
            }
        }

        var krEsCheck = document.getElementById('krEsCheck');
        var krEsActive = document.getElementById('krEsActive');
        var krLsCheck = document.getElementById('krLsCheck');
        var krLsActive = document.getElementById('krLsActive');
        var krEnsCheck = document.getElementById('krEnsCheck');
        var krEnsActive = document.getElementById('krEnsActive');

        function KrEsCheck() {
            if (krEsCheck.checked == true) {
                krEsActive.style.display = '';
                krLsActive.style.display = 'none';
                krEnsActive.style.display = 'none';
            }
        }

        function KrLsCheck() {
            if (krLsCheck.checked == true) {
                krEsActive.style.display = 'none';
                krLsActive.style.display = '';
                krEnsActive.style.display = 'none';
            }
        }

        function KrEnsCheck() {
            if (krEnsCheck.checked == true) {
                krEsActive.style.display = 'none';
                krLsActive.style.display = 'none';
                krEnsActive.style.display = '';
            }
        }

        var grEsCheck = document.getElementById('grEsCheck');
        var grEsActive = document.getElementById('grEsActive');
        var grLsCheck = document.getElementById('grLsCheck');
        var grLsActive = document.getElementById('grLsActive');
        var grEnsCheck = document.getElementById('grEnsCheck');
        var grEnsActive = document.getElementById('grEnsActive');

        function GrEsCheck() {
            if (grEsCheck.checked == true) {
                grEsActive.style.display = '';
                grLsActive.style.display = 'none';
                grEnsActive.style.display = 'none';
            }
        }

        function GrLsCheck() {
            if (grLsCheck.checked == true) {
                grEsActive.style.display = 'none';
                grLsActive.style.display = '';
                grEnsActive.style.display = 'none';
            }
        }

        function GrEnsCheck() {
            if (grEnsCheck.checked == true) {
                grEsActive.style.display = 'none';
                grLsActive.style.display = 'none';
                grEnsActive.style.display = '';
            }
        }
    </script>
@endsection
