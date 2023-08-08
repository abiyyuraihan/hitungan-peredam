<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/pengaduan_admin">Admin Gesang Contractor</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'harga peredam' ? 'active' : '' }}" href="/harga_peredam">Harga Peredam</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Pintu' ? 'active' : '' }}" href="/pintu_peredam">Pintu & Jendela</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'listrik' ? 'active' : '' }}" href="/listrik">Listrik</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'pekerjaanLantai' ? 'active' : '' }}" href="/pekerjaan_lantai">Pekerjaan Lantai</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Penawaran' ? 'active' : '' }}" href="/AdminPenawaran">Penawaran</a>
                </li>
                
            </ul>
        </div>
    </div>
</nav>
