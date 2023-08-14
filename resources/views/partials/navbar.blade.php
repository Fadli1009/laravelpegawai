<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('pegawai.index') }}">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link @yield('Beranda')" aria-current="page" href="{{ route('pegawai.index') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @yield('Tambah')" href="{{ route('pegawai.create') }}">Tambah</a>
          </li>
        </ul>
      </div>
    </div>
</nav>